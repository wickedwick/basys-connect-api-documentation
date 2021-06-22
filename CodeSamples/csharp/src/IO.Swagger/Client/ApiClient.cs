using System;
using System.Collections;
using System.Collections.Generic;
using System.Globalization;
using System.Text.RegularExpressions;
using System.IO;
using System.Web;
using System.Linq;
using System.Net;
using System.Text;
using Newtonsoft.Json;
using RestSharp;

namespace IO.Swagger.Client
{
  public partial class ApiClient
  {
    private JsonSerializerSettings serializerSettings = new JsonSerializerSettings
    {
      ConstructorHandling = ConstructorHandling.AllowNonPublicDefaultConstructor
    };

    partial void InterceptRequest(IRestRequest request);

    partial void InterceptResponse(IRestRequest request, IRestResponse response);

    public ApiClient()
    {
      Configuration = IO.Swagger.Client.Configuration.Default;
      RestClient = new RestClient("/");
    }

    public ApiClient(Configuration config)
    {
      Configuration = config ?? IO.Swagger.Client.Configuration.Default;
      RestClient = new RestClient(Configuration.BasePath);
    }

    public ApiClient(String basePath = "/")
    {
      if (String.IsNullOrEmpty(basePath))
        throw new ArgumentException("basePath cannot be empty");

      RestClient = new RestClient(basePath);
      Configuration = Client.Configuration.Default;
    }

    public IReadableConfiguration Configuration { get; set; }
    public RestClient RestClient { get; set; }

    private RestRequest PrepareRequest(
        String path, RestSharp.Method method,
        List<KeyValuePair<String, String>> queryParams,
        Object postBody,
        Dictionary<String, String> headerParams,
        Dictionary<String, String> formParams,
        Dictionary<String, FileParameter> fileParams,
        Dictionary<String, String> pathParams,
        String contentType)
    {
      var request = new RestRequest(path, method);

      // add path parameter, if any
      foreach (var param in pathParams)
        request.AddParameter(param.Key, param.Value, ParameterType.UrlSegment);

      // add header parameter, if any
      foreach (var param in headerParams)
        request.AddHeader(param.Key, param.Value);

      // add query parameter, if any
      foreach (var param in queryParams)
        request.AddQueryParameter(param.Key, param.Value);

      // add form parameter, if any
      foreach (var param in formParams)
        request.AddParameter(param.Key, param.Value);

      // add file parameter, if any
      foreach (var param in fileParams)
      {
        request.AddFile(param.Value.Name, param.Value.Writer, param.Value.FileName, param.Value.ContentType);
      }

      if (postBody != null) // http body (model or byte[]) parameter
      {
        request.AddParameter(contentType, postBody, ParameterType.RequestBody);
      }

      return request;
    }

    public Object CallApi(
        String path, RestSharp.Method method,
        List<KeyValuePair<String, String>> queryParams,
        Object postBody,
        Dictionary<String, String> headerParams,
        Dictionary<String, String> formParams,
        Dictionary<String, FileParameter> fileParams,
        Dictionary<String, String> pathParams,
        String contentType)
    {
      var request = PrepareRequest(
          path, method, queryParams, postBody, headerParams, formParams, fileParams,
          pathParams, contentType);

      // set timeout

      RestClient.Timeout = Configuration.Timeout;
      // set user agent
      RestClient.UserAgent = Configuration.UserAgent;

      InterceptRequest(request);
      var response = RestClient.Execute(request);
      InterceptResponse(request, response);

      return (Object)response;
    }

    public async System.Threading.Tasks.Task<Object> CallApiAsync(
        String path,
        RestSharp.Method method,
        List<KeyValuePair<String, String>> queryParams,
        Object postBody,
        Dictionary<String, String> headerParams,
        Dictionary<String, String> formParams,
        Dictionary<String, FileParameter> fileParams,
        Dictionary<String, String> pathParams,
        String contentType)
    {
      var request = PrepareRequest(
          path, method, queryParams, postBody, headerParams, formParams, fileParams,
          pathParams, contentType);
      InterceptRequest(request);
      var response = await RestClient.ExecuteTaskAsync(request);
      InterceptResponse(request, response);
      return (Object)response;
    }

    public object Deserialize(IRestResponse response, Type type)
    {
      IList<Parameter> headers = response.Headers;
      if (type == typeof(byte[])) // return byte array
      {
        return response.RawBytes;
      }

      if (type == typeof(Stream))
      {
        if (headers != null)
        {
          var filePath = String.IsNullOrEmpty(Configuration.TempFolderPath)
              ? Path.GetTempPath()
              : Configuration.TempFolderPath;
          var regex = new Regex(@"Content-Disposition=.*filename=['""]?([^'""\s]+)['""]?$");
          foreach (var header in headers)
          {
            var match = regex.Match(header.ToString());
            if (match.Success)
            {
              string fileName = filePath + SanitizeFilename(match.Groups[1].Value.Replace("\"", "").Replace("'", ""));
              File.WriteAllBytes(fileName, response.RawBytes);
              return new FileStream(fileName, FileMode.Open);
            }
          }
        }
        var stream = new MemoryStream(response.RawBytes);
        return stream;
      }

      if (type.Name.StartsWith("System.Nullable`1[[System.DateTime")) // return a datetime object
      {
        return DateTime.Parse(response.Content, null, System.Globalization.DateTimeStyles.RoundtripKind);
      }

      if (type == typeof(String) || type.Name.StartsWith("System.Nullable")) // return primitive type
      {
        return ConvertType(response.Content, type);
      }

      // at this point, it must be a model (json)
      try
      {
        return JsonConvert.DeserializeObject(response.Content, type, serializerSettings);
      }
      catch (Exception e)
      {
        throw new ApiException(500, e.Message);
      }
    }

    public String Serialize(object obj)
    {
      try
      {
        return obj != null ? JsonConvert.SerializeObject(obj) : null;
      }
      catch (Exception e)
      {
        throw new ApiException(500, e.Message);
      }
    }

    public bool IsJsonMime(String mime)
    {
      var jsonRegex = new Regex("(?i)^(application/json|[^;/ \t]+/[^;/ \t]+[+]json)[ \t]*(;.*)?$");
      return mime != null && (jsonRegex.IsMatch(mime) || mime.Equals("application/json-patch+json"));
    }

    public String SelectHeaderContentType(String[] contentTypes)
    {
      if (contentTypes.Length == 0)
        return "application/json";

      foreach (var contentType in contentTypes)
      {
        if (IsJsonMime(contentType.ToLower()))
          return contentType;
      }

      return contentTypes[0]; // use the first content type specified in 'consumes'
    }

    public String SelectHeaderAccept(String[] accepts)
    {
      if (accepts.Length == 0)
        return null;

      if (accepts.Contains("application/json", StringComparer.OrdinalIgnoreCase))
        return "application/json";

      return String.Join(",", accepts);
    }

    public static dynamic ConvertType(dynamic fromObject, Type toObject)
    {
      return Convert.ChangeType(fromObject, toObject);
    }

    public static byte[] ReadAsBytes(Stream inputStream)
    {
      byte[] buf = new byte[16 * 1024];
      using (MemoryStream ms = new MemoryStream())
      {
        int count;
        while ((count = inputStream.Read(buf, 0, buf.Length)) > 0)
        {
          ms.Write(buf, 0, count);
        }
        return ms.ToArray();
      }
    }

    public static string SanitizeFilename(string filename)
    {
      Match match = Regex.Match(filename, @".*[/\\](.*)$");

      if (match.Success)
      {
        return match.Groups[1].Value;
      }
      else
      {
        return filename;
      }
    }
  }
}

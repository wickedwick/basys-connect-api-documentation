using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace IO.Swagger.Api
{
  public interface ICommunicationApi : IApiAccessor
  {
    Response ApiV1CommunicationEmailReceiptPost(string account, string password, EmailReceipt body = null);
    ApiResponse<Response> ApiV1CommunicationEmailReceiptPostWithHttpInfo(string account, string password, EmailReceipt body = null);
    System.Threading.Tasks.Task<Response> ApiV1CommunicationEmailReceiptPostAsync(string account, string password, EmailReceipt body = null);
    System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1CommunicationEmailReceiptPostAsyncWithHttpInfo(string account, string password, EmailReceipt body = null);
  }

  public partial class CommunicationApi : ICommunicationApi
  {
    private IO.Swagger.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

    public CommunicationApi(String basePath)
    {
      this.Configuration = new IO.Swagger.Client.Configuration { BasePath = basePath };
      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public CommunicationApi()
    {
      this.Configuration = IO.Swagger.Client.Configuration.Default;
      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public CommunicationApi(IO.Swagger.Client.Configuration configuration = null)
    {
      if (configuration == null) // use the default one in Configuration
        this.Configuration = IO.Swagger.Client.Configuration.Default;
      else
        this.Configuration = configuration;

      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public String GetBasePath()
    {
      return this.Configuration.ApiClient.RestClient.BaseUrl.ToString();
    }

    [Obsolete("SetBasePath is deprecated, please do 'Configuration.ApiClient = new ApiClient(\"http://new-path\")' instead.")]
    public void SetBasePath(String basePath)
    {
      // do nothing
    }

    public IO.Swagger.Client.Configuration Configuration { get; set; }

    public IO.Swagger.Client.ExceptionFactory ExceptionFactory
    {
      get
      {
        if (_exceptionFactory != null && _exceptionFactory.GetInvocationList().Length > 1)
        {
          throw new InvalidOperationException("Multicast delegate for ExceptionFactory is unsupported.");
        }
        return _exceptionFactory;
      }
      set { _exceptionFactory = value; }
    }

    [Obsolete("DefaultHeader is deprecated, please use Configuration.DefaultHeader instead.")]
    public IDictionary<String, String> DefaultHeader()
    {
      return new ReadOnlyDictionary<string, string>(this.Configuration.DefaultHeader);
    }

    [Obsolete("AddDefaultHeader is deprecated, please use Configuration.AddDefaultHeader instead.")]
    public void AddDefaultHeader(string key, string value)
    {
      this.Configuration.AddDefaultHeader(key, value);
    }

    public Response ApiV1CommunicationEmailReceiptPost(string account, string password, EmailReceipt body = null)
    {
      ApiResponse<Response> localVarResponse = ApiV1CommunicationEmailReceiptPostWithHttpInfo(account, password, body);
      return localVarResponse.Data;
    }

    public ApiResponse<Response> ApiV1CommunicationEmailReceiptPostWithHttpInfo(string account, string password, EmailReceipt body = null)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling CommunicationApi->ApiV1CommunicationEmailReceiptPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling CommunicationApi->ApiV1CommunicationEmailReceiptPost");

      var localVarPath = "/api/v1/Communication/EmailReceipt";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
                "application/json",
                "text/json",
                "application/_*+json"
            };
      String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

      // to determine the Accept header
      String[] localVarHttpHeaderAccepts = new String[] {
                "text/plain",
                "application/json",
                "text/json"
            };
      String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
      if (localVarHttpHeaderAccept != null)
        localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter
      if (body != null && body.GetType() != typeof(byte[]))
      {
        localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter
      }
      else
      {
        localVarPostBody = body; // byte array
      }

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)this.Configuration.ApiClient.CallApi(localVarPath,
          Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1CommunicationEmailReceiptPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Response>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));
    }

    public async System.Threading.Tasks.Task<Response> ApiV1CommunicationEmailReceiptPostAsync(string account, string password, EmailReceipt body = null)
    {
      ApiResponse<Response> localVarResponse = await ApiV1CommunicationEmailReceiptPostAsyncWithHttpInfo(account, password, body);
      return localVarResponse.Data;

    }

    public async System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1CommunicationEmailReceiptPostAsyncWithHttpInfo(string account, string password, EmailReceipt body = null)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling CommunicationApi->ApiV1CommunicationEmailReceiptPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling CommunicationApi->ApiV1CommunicationEmailReceiptPost");

      var localVarPath = "/api/v1/Communication/EmailReceipt";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
                "application/json",
                "text/json",
                "application/_*+json"
            };
      String localVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

      // to determine the Accept header
      String[] localVarHttpHeaderAccepts = new String[] {
                "text/plain",
                "application/json",
                "text/json"
            };
      String localVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);
      if (localVarHttpHeaderAccept != null)
        localVarHeaderParams.Add("Accept", localVarHttpHeaderAccept);

      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter
      if (body != null && body.GetType() != typeof(byte[]))
      {
        localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter
      }
      else
      {
        localVarPostBody = body; // byte array
      }

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1CommunicationEmailReceiptPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Response>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));
    }
  }
}

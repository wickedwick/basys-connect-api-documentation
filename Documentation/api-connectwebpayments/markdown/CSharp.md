# C#

# API Client

    usingSystem;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Globalization;

    usingSystem.Text.RegularExpressions;

    usingSystem.IO;

    usingSystem.Web;

    usingSystem.Linq;

    usingSystem.Net;

    usingSystem.Text;

    usingNewtonsoft.Json;

    usingRestSharp;

    namespaceIO.Swagger.Client

    {

    publicpartialclassApiClient

    {

    privateJsonSerializerSettingsserializerSettings = newJsonSerializerSettings

    {

    ConstructorHandling = ConstructorHandling.AllowNonPublicDefaultConstructor

    };

    partialvoidInterceptRequest(IRestRequestrequest);

    partialvoidInterceptResponse(IRestRequestrequest, IRestResponseresponse);

    publicApiClient()

    {

    Configuration = IO.Swagger.Client.Configuration.Default;

    RestClient = newRestClient(&quot;/&quot;);

    }

    publicApiClient(Configurationconfig)

    {

    Configuration = config ?? IO.Swagger.Client.Configuration.Default;

    RestClient = newRestClient(Configuration.BasePath);

    }

    publicApiClient(StringbasePath = &quot;/&quot;)

    {

    if (String.IsNullOrEmpty(basePath))

    thrownewArgumentException(&quot;basePath cannot be empty&quot;);

    RestClient = newRestClient(basePath);

    Configuration = Client.Configuration.Default;

    }

    publicIReadableConfigurationConfiguration { get; set; }

    publicRestClientRestClient { get; set; }

    privateRestRequestPrepareRequest(

    Stringpath, RestSharp.Methodmethod,

    List\&lt;KeyValuePair\&lt;String, String\&gt;\&gt; queryParams,

    ObjectpostBody,

    Dictionary\&lt;String, String\&gt; headerParams,

    Dictionary\&lt;String, String\&gt; formParams,

    Dictionary\&lt;String, FileParameter\&gt; fileParams,

    Dictionary\&lt;String, String\&gt; pathParams,

    StringcontentType)

    {

    varrequest = newRestRequest(path, method);

    // add path parameter, if any

    foreach (varparaminpathParams)

    request.AddParameter(param.Key, param.Value, ParameterType.UrlSegment);

    // add header parameter, if any

    foreach (varparaminheaderParams)

    request.AddHeader(param.Key, param.Value);

    // add query parameter, if any

    foreach (varparaminqueryParams)

    request.AddQueryParameter(param.Key, param.Value);

    // add form parameter, if any

    foreach (varparaminformParams)

    request.AddParameter(param.Key, param.Value);

    // add file parameter, if any

    foreach (varparaminfileParams)

    {

    request.AddFile(param.Value.Name, param.Value.Writer, param.Value.FileName, param.Value.ContentType);

    }

    if (postBody != null) // http body (model or byte[]) parameter

    {

    request.AddParameter(contentType, postBody, ParameterType.RequestBody);

    }

    returnrequest;

    }

    publicObjectCallApi(

    Stringpath, RestSharp.Methodmethod,

    List\&lt;KeyValuePair\&lt;String, String\&gt;\&gt; queryParams,

    ObjectpostBody,

    Dictionary\&lt;String, String\&gt; headerParams,

    Dictionary\&lt;String, String\&gt; formParams,

    Dictionary\&lt;String, FileParameter\&gt; fileParams,

    Dictionary\&lt;String, String\&gt; pathParams,

    StringcontentType)

    {

    varrequest = PrepareRequest(

    path, method, queryParams, postBody, headerParams, formParams, fileParams,

    pathParams, contentType);

    // set timeout

    RestClient.Timeout = Configuration.Timeout;

    // set user agent

    RestClient.UserAgent = Configuration.UserAgent;

    InterceptRequest(request);

    varresponse = RestClient.Execute(request);

    InterceptResponse(request, response);

    return (Object)response;

    }

    public async System.Threading.Tasks.Task\&lt;Object\&gt; CallApiAsync(

    Stringpath,

    RestSharp.Methodmethod,

    List\&lt;KeyValuePair\&lt;String, String\&gt;\&gt; queryParams,

    ObjectpostBody,

    Dictionary\&lt;String, String\&gt; headerParams,

    Dictionary\&lt;String, String\&gt; formParams,

    Dictionary\&lt;String, FileParameter\&gt; fileParams,

    Dictionary\&lt;String, String\&gt; pathParams,

    StringcontentType)

    {

    varrequest = PrepareRequest(

    path, method, queryParams, postBody, headerParams, formParams, fileParams,

    pathParams, contentType);

    InterceptRequest(request);

    varresponse = awaitRestClient.ExecuteTaskAsync(request);

    InterceptResponse(request, response);

    return (Object)response;

    }

    publicobjectDeserialize(IRestResponseresponse, Typetype)

    {

    IList\&lt;Parameter\&gt; headers = response.Headers;

    if (type == typeof(byte[])) // return byte array

    {

    returnresponse.RawBytes;

    }

    if (type == typeof(Stream))

    {

    if (headers != null)

    {

    varfilePath = String.IsNullOrEmpty(Configuration.TempFolderPath)

    ? Path.GetTempPath()

    : Configuration.TempFolderPath;

    varregex = newRegex(@&quot;Content-Disposition=.\*filename=[&#39;&quot;&quot;]?([^&#39;&quot;&quot;\s]+)[&#39;&quot;&quot;]?$&quot;);

    foreach (varheaderinheaders)

    {

    varmatch = regex.Match(header.ToString());

    if (match.Success)

    {

    stringfileName = filePath + SanitizeFilename(match.Groups[1].Value.Replace(&quot;\&quot;&quot;, &quot;&quot;).Replace(&quot;&#39;&quot;, &quot;&quot;));

    File.WriteAllBytes(fileName, response.RawBytes);

    returnnewFileStream(fileName, FileMode.Open);

    }

    }

    }

    varstream = newMemoryStream(response.RawBytes);

    returnstream;

    }

    if (type.Name.StartsWith(&quot;System.Nullable`1[[System.DateTime&quot;)) // return a datetime object

    {

    returnDateTime.Parse(response.Content, null, System.Globalization.DateTimeStyles.RoundtripKind);

    }

    if (type == typeof(String) || type.Name.StartsWith(&quot;System.Nullable&quot;)) // return primitive type

    {

    returnConvertType(response.Content, type);

    }

    // at this point, it must be a model (json)

    try

    {

    returnJsonConvert.DeserializeObject(response.Content, type, serializerSettings);

    }

    catch (Exceptione)

    {

    thrownewApiException(500, e.Message);

    }

    }

    publicStringSerialize(objectobj)

    {

    try

    {

    returnobj != null ? JsonConvert.SerializeObject(obj) : null;

    }

    catch (Exceptione)

    {

    thrownewApiException(500, e.Message);

    }

    }

    publicboolIsJsonMime(Stringmime)

    {

    varjsonRegex = newRegex(&quot;(?i)^(application/json|[^;/ \t]+/[^;/ \t]+[+]json)[\t]\*(;.\*)?$&quot;);

    returnmime != null &amp;&amp; (jsonRegex.IsMatch(mime) || mime.Equals(&quot;application/json-patch+json&quot;));

    }

    publicStringSelectHeaderContentType(String[] contentTypes)

    {

    if (contentTypes.Length == 0)

    return&quot;application/json&quot;;

    foreach (varcontentTypeincontentTypes)

    {

    if (IsJsonMime(contentType.ToLower()))

    returncontentType;

    }

    returncontentTypes[0]; // use the first content type specified in &#39;consumes&#39;

    }

    publicStringSelectHeaderAccept(String[] accepts)

    {

    if (accepts.Length == 0)

    returnnull;

    if (accepts.Contains(&quot;application/json&quot;, StringComparer.OrdinalIgnoreCase))

    return&quot;application/json&quot;;

    returnString.Join(&quot;,&quot;, accepts);

    }

    publicstaticdynamicConvertType(dynamicfromObject, TypetoObject)

    {

    returnConvert.ChangeType(fromObject, toObject);

    }

    publicstaticbyte[] ReadAsBytes(StreaminputStream)

    {

    byte[] buf = newbyte[16 \* 1024];

    using (MemoryStreamms = newMemoryStream())

    {

    intcount;

    while ((count = inputStream.Read(buf, 0, buf.Length)) \&gt; 0)

    {

    ms.Write(buf, 0, count);

    }

    returnms.ToArray();

    }

    }

    publicstaticstringSanitizeFilename(stringfilename)

    {

    Matchmatch = Regex.Match(filename, @&quot;.\*[/\\](.\*)$&quot;);

    if (match.Success)

    {

    returnmatch.Groups[1].Value;

    }

    else

    {

    returnfilename;

    }

    }

    }

    }

# Account API

## /api/v1/Account/GetAccountSettings

    usingSystem;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Linq;

    usingRestSharp;

    usingIO.Swagger.Client;

    usingIO.Swagger.Model;

    namespaceIO.Swagger.Api

    {

    publicinterfaceIAccountApi : IApiAccessor

    {

    System.Threading.Tasks.Task\&lt;Settings\&gt; GetSettingsAsync(stringaccount, stringpassword);

    System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Settings\&gt;\&gt; GetSettingsWithHttpInfoAsync(stringaccount, stringpassword);

    }

    publicpartialclassAccountApi : IAccountApi

    {

    privateIO.Swagger.Client.ExceptionFactory\_exceptionFactory = (name, response) =\&gt; null;

    publicAccountApi(StringbasePath)

    {

    this.Configuration = newIO.Swagger.Client.Configuration { BasePath = basePath };

    ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

    }

    publicAccountApi()

    {

    this.Configuration = IO.Swagger.Client.Configuration.Default;

    ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

    }

    publicAccountApi(IO.Swagger.Client.Configurationconfiguration = null)

    {

    if (configuration == null)

    this.Configuration = IO.Swagger.Client.Configuration.Default;

    else

    this.Configuration = configuration;

    ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

    }

    publicIO.Swagger.Client.ConfigurationConfiguration { get; set; }

    publicIO.Swagger.Client.ExceptionFactoryExceptionFactory

    {

    get

    {

    if (\_exceptionFactory != null &amp;&amp; \_exceptionFactory.GetInvocationList().Length \&gt; 1)

    {

    thrownewInvalidOperationException(&quot;Multicast delegate for ExceptionFactory is unsupported.&quot;);

    }

    return\_exceptionFactory;

    }

    set { \_exceptionFactory = value; }

    }

    public async System.Threading.Tasks.Task\&lt;Settings\&gt; GetSettingsAsync(stringaccount, stringpassword)

    {

    ApiResponse\&lt;Settings\&gt; localVarResponse = awaitGetSettingsWithHttpInfoAsync(account, password);

    returnlocalVarResponse.Data;

    }

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Settings\&gt;\&gt; GetSettingsWithHttpInfoAsync(stringaccount, stringpassword)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling AccountApi-\&gt;ApiV1AccountGetAccountSettingsGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling AccountApi-\&gt;ApiV1AccountGetAccountSettingsGet&quot;);

    varlocalVarPath = &quot;/api/v1/Account/GetAccountSettings&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1AccountGetAccountSettingsGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Settings\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Settings)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Settings)));

    }

    }

    }

# Communication API

## /api/v1/Communication/EmailReceipt

    usingSystem;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Linq;

    usingRestSharp;

    usingIO.Swagger.Client;

    usingIO.Swagger.Model;

    namespaceIO.Swagger.Api

    {

    publicinterfaceICommunicationApi : IApiAccessor

    {

    ResponseApiV1CommunicationEmailReceiptPost(stringaccount, stringpassword, EmailReceiptbody = null);

    ApiResponse\&lt;Response\&gt; ApiV1CommunicationEmailReceiptPostWithHttpInfo(stringaccount, stringpassword, EmailReceiptbody = null);

    System.Threading.Tasks.Task\&lt;Response\&gt; ApiV1CommunicationEmailReceiptPostAsync(stringaccount, stringpassword, EmailReceiptbody = null);

    System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1CommunicationEmailReceiptPostAsyncWithHttpInfo(stringaccount, stringpassword, EmailReceiptbody = null);

    }

    publicpartialclassCommunicationApi : ICommunicationApi

    {

    privateIO.Swagger.Client.ExceptionFactory_exceptionFactory = (name, response) =\&gt; null;

    publicCommunicationApi(StringbasePath)

    {

    this.Configuration = newIO.Swagger.Client.Configuration { BasePath = basePath };

    ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

    }

    publicCommunicationApi()

    {

    this.Configuration = IO.Swagger.Client.Configuration.Default;

    ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

    }

    publicCommunicationApi(IO.Swagger.Client.Configurationconfiguration = null)

    {

    if (configuration == null) // use the default one in Configuration

    this.Configuration = IO.Swagger.Client.Configuration.Default;

    else

    this.Configuration = configuration;

    ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;

    }

    publicStringGetBasePath()

    {

    returnthis.Configuration.ApiClient.RestClient.BaseUrl.ToString();

    }

    [Obsolete(&quot;SetBasePath is deprecated, please do &#39;Configuration.ApiClient = new ApiClient(\&quot;http://new-path\&quot;)&#39; instead.&quot;)]

    publicvoidSetBasePath(StringbasePath)

    {

    // do nothing

    }

    publicIO.Swagger.Client.ConfigurationConfiguration { get; set; }

    publicIO.Swagger.Client.ExceptionFactoryExceptionFactory

    {

    get

    {

    if (\_exceptionFactory != null &amp;&amp; \_exceptionFactory.GetInvocationList().Length \&gt; 1)

    {

    thrownewInvalidOperationException(&quot;Multicast delegate for ExceptionFactory is unsupported.&quot;);

    }

    return_exceptionFactory;

    }

    set { \_exceptionFactory = value; }

    }

    [Obsolete(&quot;DefaultHeader is deprecated, please use Configuration.DefaultHeader instead.&quot;)]

    publicIDictionary\&lt;String, String\&gt; DefaultHeader()

    {

    returnnewReadOnlyDictionary\&lt;string, string\&gt;(this.Configuration.DefaultHeader);

    }

    [Obsolete(&quot;AddDefaultHeader is deprecated, please use Configuration.AddDefaultHeader instead.&quot;)]

    publicvoidAddDefaultHeader(stringkey, stringvalue)

    {

    this.Configuration.AddDefaultHeader(key, value);

    }

    publicResponseApiV1CommunicationEmailReceiptPost(stringaccount, stringpassword, EmailReceiptbody = null)

    {

    ApiResponse\&lt;Response\&gt; localVarResponse = ApiV1CommunicationEmailReceiptPostWithHttpInfo(account, password, body);

    returnlocalVarResponse.Data;

    }

    publicApiResponse\&lt;Response\&gt; ApiV1CommunicationEmailReceiptPostWithHttpInfo(stringaccount, stringpassword, EmailReceiptbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling CommunicationApi-\&gt;ApiV1CommunicationEmailReceiptPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling CommunicationApi-\&gt;ApiV1CommunicationEmailReceiptPost&quot;);

    varlocalVarPath = &quot;/api/v1/Communication/EmailReceipt&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)this.Configuration.ApiClient.CallApi(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1CommunicationEmailReceiptPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

    public async System.Threading.Tasks.Task\&lt;Response\&gt; ApiV1CommunicationEmailReceiptPostAsync(stringaccount, stringpassword, EmailReceiptbody = null)

    {

    ApiResponse\&lt;Response\&gt; localVarResponse = awaitApiV1CommunicationEmailReceiptPostAsyncWithHttpInfo(account, password, body);

    returnlocalVarResponse.Data;

    }

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1CommunicationEmailReceiptPostAsyncWithHttpInfo(stringaccount, stringpassword, EmailReceiptbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling CommunicationApi-\&gt;ApiV1CommunicationEmailReceiptPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling CommunicationApi-\&gt;ApiV1CommunicationEmailReceiptPost&quot;);

    varlocalVarPath = &quot;/api/v1/Communication/EmailReceipt&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1CommunicationEmailReceiptPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

    }

    }

# Reporting API

## /api/v1/Reporting/GetBatchesByDate/{batchDate}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;List\&lt;Batch\&gt;\&gt;\&gt; ApiV1ReportingGetBatchesByDateBatchDateGetAsyncWithHttpInfo(DateTime? batchDate, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;batchDate&#39; is set

    if (batchDate == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;batchDate&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetBatchesByDateBatchDateGet&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetBatchesByDateBatchDateGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetBatchesByDateBatchDateGet&quot;);

    varlocalVarPath = &quot;/api/v1/Reporting/GetBatchesByDate/{batchDate}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (batchDate != null) localVarPathParams.Add(&quot;batchDate&quot;, this.Configuration.ApiClient.ParameterToString(batchDate)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1ReportingGetBatchesByDateBatchDateGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;List\&lt;Batch\&gt;\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (List\&lt;Batch\&gt;)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List\&lt;Batch\&gt;)));

    }

## /api/v1/Reporting/GetCheckTerminals

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;List\&lt;TerminalSettings\&gt;\&gt;\&gt; ApiV1ReportingGetCheckTerminalsGetAsyncWithHttpInfo(stringaccount, stringpassword)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalsGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalsGet&quot;);

    varlocalVarPath = &quot;/api/v1/Reporting/GetCheckTerminals&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1ReportingGetCheckTerminalsGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;List\&lt;TerminalSettings\&gt;\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (List\&lt;TerminalSettings\&gt;)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List\&lt;TerminalSettings\&gt;)));

    }

    ## /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;List\&lt;TerminalSettings\&gt;\&gt;\&gt; ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetAsyncWithHttpInfo(stringsecCode, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;secCode&#39; is set

    if (secCode == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;secCode&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&quot;);

    varlocalVarPath = &quot;/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (secCode != null) localVarPathParams.Add(&quot;secCode&quot;, this.Configuration.ApiClient.ParameterToString(secCode)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;List\&lt;TerminalSettings\&gt;\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (List\&lt;TerminalSettings\&gt;)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List\&lt;TerminalSettings\&gt;)));

    }

## /api/v1/Reporting/GetCheckTerminalSettings/{terminalID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;List\&lt;TerminalSettings\&gt;\&gt;\&gt; ApiV1ReportingGetCheckTerminalSettingsTerminalIDGetAsyncWithHttpInfo(int? terminalID, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;terminalID&#39; is set

    if (terminalID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;terminalID&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet&quot;);

    varlocalVarPath = &quot;/api/v1/Reporting/GetCheckTerminalSettings/{terminalID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (terminalID != null) localVarPathParams.Add(&quot;terminalID&quot;, this.Configuration.ApiClient.ParameterToString(terminalID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;List\&lt;TerminalSettings\&gt;\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (List\&lt;TerminalSettings\&gt;)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List\&lt;TerminalSettings\&gt;)));

    }

## /api/v1/Reporting/GetTransactionsByBatch/{batch}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;List\&lt;QueryTransaction\&gt;\&gt;\&gt; ApiV1ReportingGetTransactionsByBatchBatchGetAsyncWithHttpInfo(stringbatch, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;batch&#39; is set

    if (batch == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;batch&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetTransactionsByBatchBatchGet&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetTransactionsByBatchBatchGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetTransactionsByBatchBatchGet&quot;);

    varlocalVarPath = &quot;/api/v1/Reporting/GetTransactionsByBatch/{batch}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (batch != null) localVarPathParams.Add(&quot;batch&quot;, this.Configuration.ApiClient.ParameterToString(batch)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1ReportingGetTransactionsByBatchBatchGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;List\&lt;QueryTransaction\&gt;\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (List\&lt;QueryTransaction\&gt;)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List\&lt;QueryTransaction\&gt;)));

    }

## /api/v1/Reporting/GetTransactionsByDate/{transactionDate}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;List\&lt;QueryTransaction\&gt;\&gt;\&gt; ApiV1ReportingGetTransactionsByDateTransactionDateGetAsyncWithHttpInfo(DateTime? transactionDate, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;transactionDate&#39; is set

    if (transactionDate == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;transactionDate&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetTransactionsByDateTransactionDateGet&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetTransactionsByDateTransactionDateGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling ReportingApi-\&gt;ApiV1ReportingGetTransactionsByDateTransactionDateGet&quot;);

    varlocalVarPath = &quot;/api/v1/Reporting/GetTransactionsByDate/{transactionDate}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (transactionDate != null) localVarPathParams.Add(&quot;transactionDate&quot;, this.Configuration.ApiClient.ParameterToString(transactionDate)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1ReportingGetTransactionsByDateTransactionDateGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;List\&lt;QueryTransaction\&gt;\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (List\&lt;QueryTransaction\&gt;)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List\&lt;QueryTransaction\&gt;)));

    }

    }

# Vault API

## /api/v1/Vault/GetVaultRecord/{reference}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Record\&gt;\&gt; ApiV1VaultGetVaultRecordReferenceGetAsyncWithHttpInfo(stringreference, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;reference&#39; is set

    if (reference == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;reference&#39; when calling VaultApi-\&gt;ApiV1VaultGetVaultRecordReferenceGet&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultGetVaultRecordReferenceGet&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultGetVaultRecordReferenceGet&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/GetVaultRecord/{reference}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (reference != null) localVarPathParams.Add(&quot;reference&quot;, this.Configuration.ApiClient.ParameterToString(reference)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultGetVaultRecordReferenceGet&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Record\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Record)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Record)));

    }

## /api/v1/Vault/SaveVault

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo(stringaccount, stringpassword, int? vaultID, VaultCreditCardbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultSaveVaultCardVaultIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultSaveVaultCardVaultIDPost&quot;);

    // verify the required parameter &#39;vaultID&#39; is set

    if (vaultID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;vaultID&#39; when calling VaultApi-\&gt;ApiV1VaultSaveVaultCardVaultIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/SaveVaultCard/{vaultID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (vaultID != null) localVarPathParams.Add(&quot;vaultID&quot;, this.Configuration.ApiClient.ParameterToString(vaultID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultSaveVaultCardVaultIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

## /api/v1/Vault/SaveVaultCard/{vaultID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo(stringaccount, stringpassword, int? vaultID, VaultCreditCardbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultSaveVaultCardVaultIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultSaveVaultCardVaultIDPost&quot;);

    // verify the required parameter &#39;vaultID&#39; is set

    if (vaultID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;vaultID&#39; when calling VaultApi-\&gt;ApiV1VaultSaveVaultCardVaultIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/SaveVaultCard/{vaultID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (vaultID != null) localVarPathParams.Add(&quot;vaultID&quot;, this.Configuration.ApiClient.ParameterToString(vaultID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultSaveVaultCardVaultIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

## /api/v1/Vault/SearchVault

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;List\&lt;Record\&gt;\&gt;\&gt; ApiV1VaultSearchVaultPostAsyncWithHttpInfo(stringaccount, stringpassword, SearchVaultbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultSearchVaultPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultSearchVaultPost&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/SearchVault&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultSearchVaultPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;List\&lt;Record\&gt;\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (List\&lt;Record\&gt;)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List\&lt;Record\&gt;)));

    }

## /api/v1/Vault/DeleteVaultCardByID/{vaultCardID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo(int? vaultCardID, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;vaultCardID&#39; is set

    if (vaultCardID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;vaultCardID&#39; when calling VaultApi-\&gt;ApiV1VaultDeleteVaultCardByIDVaultCardIDPost&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultDeleteVaultCardByIDVaultCardIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultDeleteVaultCardByIDVaultCardIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/DeleteVaultCardByID/{vaultCardID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (vaultCardID != null) localVarPathParams.Add(&quot;vaultCardID&quot;, this.Configuration.ApiClient.ParameterToString(vaultCardID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultDeleteVaultCardByIDVaultCardIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

## /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo(int? vaultCheckID, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;vaultCheckID&#39; is set

    if (vaultCheckID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;vaultCheckID&#39; when calling VaultApi-\&gt;ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (vaultCheckID != null) localVarPathParams.Add(&quot;vaultCheckID&quot;, this.Configuration.ApiClient.ParameterToString(vaultCheckID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

## /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;CheckTransaction\&gt;\&gt; ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo(stringaccount, stringpassword, int? vaultCheckID, CheckTransactionbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost&quot;);

    // verify the required parameter &#39;vaultCheckID&#39; is set

    if (vaultCheckID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;vaultCheckID&#39; when calling VaultApi-\&gt;ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (vaultCheckID != null) localVarPathParams.Add(&quot;vaultCheckID&quot;, this.Configuration.ApiClient.ParameterToString(vaultCheckID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;CheckTransaction\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (CheckTransaction)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(CheckTransaction)));

    }

## /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Transaction\&gt;\&gt; ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo(stringaccount, stringpassword, int? vaultCardID, Transactionbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VaultApi-\&gt;ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VaultApi-\&gt;ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost&quot;);

    // verify the required parameter &#39;vaultCardID&#39; is set

    if (vaultCardID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;vaultCardID&#39; when calling VaultApi-\&gt;ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (vaultCardID != null) localVarPathParams.Add(&quot;vaultCardID&quot;, this.Configuration.ApiClient.ParameterToString(vaultCardID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Transaction\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Transaction)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Transaction)));

    }

    }

# VirtualTerminal API

## /api/v1/VirtualTerminal/Submit

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;CheckTransaction\&gt;\&gt; ApiV1VirtualTerminalSubmitCheckPostAsyncWithHttpInfo(stringaccount, stringpassword, CheckTransactionbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalSubmitCheckPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalSubmitCheckPost&quot;);

    varlocalVarPath = &quot;/api/v1/VirtualTerminal/SubmitCheck&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VirtualTerminalSubmitCheckPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;CheckTransaction\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (CheckTransaction)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(CheckTransaction)));

    }

## /api/v1/VirtualTerminal/SubmitCheck

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;CheckTransaction\&gt;\&gt; ApiV1VirtualTerminalSubmitCheckPostAsyncWithHttpInfo(stringaccount, stringpassword, CheckTransactionbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalSubmitCheckPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalSubmitCheckPost&quot;);

    varlocalVarPath = &quot;/api/v1/VirtualTerminal/SubmitCheck&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VirtualTerminalSubmitCheckPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;CheckTransaction\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (CheckTransaction)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(CheckTransaction)));

    }

## /api/v1/VirtualTerminal/Mark/{transactionID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1VirtualTerminalMarkTransactionIDPostAsyncWithHttpInfo(stringtransactionID, stringaccount, stringpassword)

    {

    // verify the required parameter &#39;transactionID&#39; is set

    if (transactionID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;transactionID&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalMarkTransactionIDPost&quot;);

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalMarkTransactionIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalMarkTransactionIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/VirtualTerminal/Mark/{transactionID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (transactionID != null) localVarPathParams.Add(&quot;transactionID&quot;, this.Configuration.ApiClient.ParameterToString(transactionID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VirtualTerminalMarkTransactionIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

## /api/v1/VirtualTerminal/MarkTransactions

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1VirtualTerminalMarkTransactionsPostAsyncWithHttpInfo(stringaccount, stringpassword, List\&lt;string\&gt; body = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalMarkTransactionsPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalMarkTransactionsPost&quot;);

    varlocalVarPath = &quot;/api/v1/VirtualTerminal/MarkTransactions&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VirtualTerminalMarkTransactionsPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

## /api/v1/VirtualTerminal/Query

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;QueryTransaction\&gt;\&gt; ApiV1VirtualTerminalQueryPostAsyncWithHttpInfo(stringaccount, stringpassword, Transactionbody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalQueryPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalQueryPost&quot;);

    varlocalVarPath = &quot;/api/v1/VirtualTerminal/Query&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VirtualTerminalQueryPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;QueryTransaction\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (QueryTransaction)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(QueryTransaction)));

    }

## /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}

    public async System.Threading.Tasks.Task\&lt;ApiResponse\&lt;Response\&gt;\&gt; ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostAsyncWithHttpInfo(stringaccount, stringpassword, stringtransactionID, UpdateTransactionInfobody = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if (account == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;account&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost&quot;);

    // verify the required parameter &#39;password&#39; is set

    if (password == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;password&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost&quot;);

    // verify the required parameter &#39;transactionID&#39; is set

    if (transactionID == null)

    thrownewApiException(400, &quot;Missing required parameter &#39;transactionID&#39; when calling VirtualTerminalApi-\&gt;ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost&quot;);

    varlocalVarPath = &quot;/api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}&quot;;

    varlocalVarPathParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarQueryParams = newList\&lt;KeyValuePair\&lt;String, String\&gt;\&gt;();

    varlocalVarHeaderParams = newDictionary\&lt;String, String\&gt;(this.Configuration.DefaultHeader);

    varlocalVarFormParams = newDictionary\&lt;String, String\&gt;();

    varlocalVarFileParams = newDictionary\&lt;String, FileParameter\&gt;();

    ObjectlocalVarPostBody = null;

    // to determine the Content-Type header

    String[] localVarHttpContentTypes = newString[] {

    &quot;application/json&quot;,

    &quot;text/json&quot;,

    &quot;application/\_\*+json&quot;

    };

    StringlocalVarHttpContentType = this.Configuration.ApiClient.SelectHeaderContentType(localVarHttpContentTypes);

    // to determine the Accept header

    String[] localVarHttpHeaderAccepts = newString[] {

    &quot;text/plain&quot;,

    &quot;application/json&quot;,

    &quot;text/json&quot;

    };

    StringlocalVarHttpHeaderAccept = this.Configuration.ApiClient.SelectHeaderAccept(localVarHttpHeaderAccepts);

    if (localVarHttpHeaderAccept != null)

    localVarHeaderParams.Add(&quot;Accept&quot;, localVarHttpHeaderAccept);

    if (transactionID != null) localVarPathParams.Add(&quot;transactionID&quot;, this.Configuration.ApiClient.ParameterToString(transactionID)); // path parameter

    if (account != null) localVarHeaderParams.Add(&quot;Account&quot;, this.Configuration.ApiClient.ParameterToString(account)); // header parameter

    if (password != null) localVarHeaderParams.Add(&quot;Password&quot;, this.Configuration.ApiClient.ParameterToString(password)); // header parameter

    if (body != null &amp;&amp; body.GetType() != typeof(byte[]))

    {

    localVarPostBody = this.Configuration.ApiClient.Serialize(body); // http body (model) parameter

    }

    else

    {

    localVarPostBody = body; // byte array

    }

    // make the HTTP request

    IRestResponselocalVarResponse = (IRestResponse)awaitthis.Configuration.ApiClient.CallApiAsync(localVarPath,

    Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,

    localVarPathParams, localVarHttpContentType);

    intlocalVarStatusCode = (int)localVarResponse.StatusCode;

    if (ExceptionFactory != null)

    {

    Exceptionexception = ExceptionFactory(&quot;ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost&quot;, localVarResponse);

    if (exception != null) throwexception;

    }

    returnnewApiResponse\&lt;Response\&gt;(localVarStatusCode,

    localVarResponse.Headers.ToDictionary(x =\&gt; x.Name, x =\&gt; string.Join(&quot;,&quot;, x.Value)),

    (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));

    }

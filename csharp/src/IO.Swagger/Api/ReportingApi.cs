using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace IO.Swagger.Api
{
  public interface IReportingApi : IApiAccessor
  {
    System.Threading.Tasks.Task<List<Batch>> ApiV1ReportingGetBatchesByDateBatchDateGetAsync(DateTime? batchDate, string account, string password);
    System.Threading.Tasks.Task<List<Batch>> ApiV1ReportingGetBatchesByDateBatchDateGetAsync(DateTime? batchDate, string account, string password);
    System.Threading.Tasks.Task<List<Batch>> ApiV1ReportingGetBatchesByDateBatchDateGetAsync(DateTime? batchDate, string account, string password);
    System.Threading.Tasks.Task<List<Batch>> ApiV1ReportingGetBatchesByDateBatchDateGetAsync(DateTime? batchDate, string account, string password);
    System.Threading.Tasks.Task<List<Batch>> ApiV1ReportingGetBatchesByDateBatchDateGetAsync(DateTime? batchDate, string account, string password);
    System.Threading.Tasks.Task<List<Batch>> ApiV1ReportingGetBatchesByDateBatchDateGetAsync(DateTime? batchDate, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<List<Batch>>> ApiV1ReportingGetBatchesByDateBatchDateGetAsyncWithHttpInfo(DateTime? batchDate, string account, string password);
    System.Threading.Tasks.Task<List<TerminalSettings>> ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetAsync(string secCode, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<List<TerminalSettings>>> ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetAsyncWithHttpInfo(string secCode, string account, string password);
    System.Threading.Tasks.Task<List<TerminalSettings>> ApiV1ReportingGetCheckTerminalSettingsTerminalIDGetAsync(int? terminalID, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<List<TerminalSettings>>> ApiV1ReportingGetCheckTerminalSettingsTerminalIDGetAsyncWithHttpInfo(int? terminalID, string account, string password);
    System.Threading.Tasks.Task<List<TerminalSettings>> ApiV1ReportingGetCheckTerminalsGetAsync(string account, string password);
    System.Threading.Tasks.Task<ApiResponse<List<TerminalSettings>>> ApiV1ReportingGetCheckTerminalsGetAsyncWithHttpInfo(string account, string password);
    System.Threading.Tasks.Task<List<QueryTransaction>> ApiV1ReportingGetTransactionsByBatchBatchGetAsync(string batch, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<List<QueryTransaction>>> ApiV1ReportingGetTransactionsByBatchBatchGetAsyncWithHttpInfo(string batch, string account, string password);
    System.Threading.Tasks.Task<List<QueryTransaction>> ApiV1ReportingGetTransactionsByDateTransactionDateGetAsync(DateTime? transactionDate, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<List<QueryTransaction>>> ApiV1ReportingGetTransactionsByDateTransactionDateGetAsyncWithHttpInfo(DateTime? transactionDate, string account, string password);
  }

  public partial class ReportingApi : IReportingApi
  {
    private IO.Swagger.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

    public ReportingApi(String basePath)
    {
      this.Configuration = new IO.Swagger.Client.Configuration { BasePath = basePath };
      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public ReportingApi()
    {
      this.Configuration = IO.Swagger.Client.Configuration.Default;
      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public ReportingApi(IO.Swagger.Client.Configuration configuration = null)
    {
      if (configuration == null) // use the default one in Configuration
        this.Configuration = IO.Swagger.Client.Configuration.Default;
      else
        this.Configuration = configuration;

      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
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

    public async System.Threading.Tasks.Task<List<Batch>> ApiV1ReportingGetBatchesByDateBatchDateGetAsync(DateTime? batchDate, string account, string password)
    {
      ApiResponse<List<Batch>> localVarResponse = await ApiV1ReportingGetBatchesByDateBatchDateGetAsyncWithHttpInfo(batchDate, account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<List<Batch>>> ApiV1ReportingGetBatchesByDateBatchDateGetAsyncWithHttpInfo(DateTime? batchDate, string account, string password)
    {
      // verify the required parameter 'batchDate' is set
      if (batchDate == null)
        throw new ApiException(400, "Missing required parameter 'batchDate' when calling ReportingApi->ApiV1ReportingGetBatchesByDateBatchDateGet");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling ReportingApi->ApiV1ReportingGetBatchesByDateBatchDateGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling ReportingApi->ApiV1ReportingGetBatchesByDateBatchDateGet");

      var localVarPath = "/api/v1/Reporting/GetBatchesByDate/{batchDate}";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
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

      if (batchDate != null) localVarPathParams.Add("batchDate", this.Configuration.ApiClient.ParameterToString(batchDate)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1ReportingGetBatchesByDateBatchDateGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<Batch>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<Batch>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<Batch>)));
    }

    public async System.Threading.Tasks.Task<List<TerminalSettings>> ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetAsync(string secCode, string account, string password)
    {
      ApiResponse<List<TerminalSettings>> localVarResponse = await ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetAsyncWithHttpInfo(secCode, account, password);
      return localVarResponse.Data;

    }

    public async System.Threading.Tasks.Task<ApiResponse<List<TerminalSettings>>> ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetAsyncWithHttpInfo(string secCode, string account, string password)
    {
      // verify the required parameter 'secCode' is set
      if (secCode == null)
        throw new ApiException(400, "Missing required parameter 'secCode' when calling ReportingApi->ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling ReportingApi->ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling ReportingApi->ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet");

      var localVarPath = "/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
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

      if (secCode != null) localVarPathParams.Add("secCode", this.Configuration.ApiClient.ParameterToString(secCode)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<TerminalSettings>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<TerminalSettings>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<TerminalSettings>)));
    }

    public async System.Threading.Tasks.Task<List<TerminalSettings>> ApiV1ReportingGetCheckTerminalSettingsTerminalIDGetAsync(int? terminalID, string account, string password)
    {
      ApiResponse<List<TerminalSettings>> localVarResponse = await ApiV1ReportingGetCheckTerminalSettingsTerminalIDGetAsyncWithHttpInfo(terminalID, account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<List<TerminalSettings>>> ApiV1ReportingGetCheckTerminalSettingsTerminalIDGetAsyncWithHttpInfo(int? terminalID, string account, string password)
    {
      // verify the required parameter 'terminalID' is set
      if (terminalID == null)
        throw new ApiException(400, "Missing required parameter 'terminalID' when calling ReportingApi->ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling ReportingApi->ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling ReportingApi->ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet");

      var localVarPath = "/api/v1/Reporting/GetCheckTerminalSettings/{terminalID}";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
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

      if (terminalID != null) localVarPathParams.Add("terminalID", this.Configuration.ApiClient.ParameterToString(terminalID)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<TerminalSettings>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<TerminalSettings>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<TerminalSettings>)));
    }

    public async System.Threading.Tasks.Task<List<TerminalSettings>> ApiV1ReportingGetCheckTerminalsGetAsync(string account, string password)
    {
      ApiResponse<List<TerminalSettings>> localVarResponse = await ApiV1ReportingGetCheckTerminalsGetAsyncWithHttpInfo(account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<List<TerminalSettings>>> ApiV1ReportingGetCheckTerminalsGetAsyncWithHttpInfo(string account, string password)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling ReportingApi->ApiV1ReportingGetCheckTerminalsGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling ReportingApi->ApiV1ReportingGetCheckTerminalsGet");

      var localVarPath = "/api/v1/Reporting/GetCheckTerminals";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
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

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1ReportingGetCheckTerminalsGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<TerminalSettings>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<TerminalSettings>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<TerminalSettings>)));
    }

    public async System.Threading.Tasks.Task<List<QueryTransaction>> ApiV1ReportingGetTransactionsByBatchBatchGetAsync(string batch, string account, string password)
    {
      ApiResponse<List<QueryTransaction>> localVarResponse = await ApiV1ReportingGetTransactionsByBatchBatchGetAsyncWithHttpInfo(batch, account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<List<QueryTransaction>>> ApiV1ReportingGetTransactionsByBatchBatchGetAsyncWithHttpInfo(string batch, string account, string password)
    {
      // verify the required parameter 'batch' is set
      if (batch == null)
        throw new ApiException(400, "Missing required parameter 'batch' when calling ReportingApi->ApiV1ReportingGetTransactionsByBatchBatchGet");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling ReportingApi->ApiV1ReportingGetTransactionsByBatchBatchGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling ReportingApi->ApiV1ReportingGetTransactionsByBatchBatchGet");

      var localVarPath = "/api/v1/Reporting/GetTransactionsByBatch/{batch}";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
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

      if (batch != null) localVarPathParams.Add("batch", this.Configuration.ApiClient.ParameterToString(batch)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1ReportingGetTransactionsByBatchBatchGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<QueryTransaction>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<QueryTransaction>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<QueryTransaction>)));
    }

    public async System.Threading.Tasks.Task<List<QueryTransaction>> ApiV1ReportingGetTransactionsByDateTransactionDateGetAsync(DateTime? transactionDate, string account, string password)
    {
      ApiResponse<List<QueryTransaction>> localVarResponse = await ApiV1ReportingGetTransactionsByDateTransactionDateGetAsyncWithHttpInfo(transactionDate, account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<List<QueryTransaction>>> ApiV1ReportingGetTransactionsByDateTransactionDateGetAsyncWithHttpInfo(DateTime? transactionDate, string account, string password)
    {
      // verify the required parameter 'transactionDate' is set
      if (transactionDate == null)
        throw new ApiException(400, "Missing required parameter 'transactionDate' when calling ReportingApi->ApiV1ReportingGetTransactionsByDateTransactionDateGet");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling ReportingApi->ApiV1ReportingGetTransactionsByDateTransactionDateGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling ReportingApi->ApiV1ReportingGetTransactionsByDateTransactionDateGet");

      var localVarPath = "/api/v1/Reporting/GetTransactionsByDate/{transactionDate}";
      var localVarPathParams = new Dictionary<String, String>();
      var localVarQueryParams = new List<KeyValuePair<String, String>>();
      var localVarHeaderParams = new Dictionary<String, String>(this.Configuration.DefaultHeader);
      var localVarFormParams = new Dictionary<String, String>();
      var localVarFileParams = new Dictionary<String, FileParameter>();
      Object localVarPostBody = null;

      // to determine the Content-Type header
      String[] localVarHttpContentTypes = new String[] {
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

      if (transactionDate != null) localVarPathParams.Add("transactionDate", this.Configuration.ApiClient.ParameterToString(transactionDate)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1ReportingGetTransactionsByDateTransactionDateGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<QueryTransaction>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<QueryTransaction>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<QueryTransaction>)));
    }
  }
}

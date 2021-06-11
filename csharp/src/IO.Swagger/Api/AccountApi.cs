using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace IO.Swagger.Api
{
  public interface IAccountApi : IApiAccessor
  {
    System.Threading.Tasks.Task<Settings> GetSettingsAsync(string account, string password);
    System.Threading.Tasks.Task<ApiResponse<Settings>> GetSettingsWithHttpInfoAsync(string account, string password);
  }

  public partial class AccountApi : IAccountApi
  {
    private IO.Swagger.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

    public AccountApi(String basePath)
    {
      this.Configuration = new IO.Swagger.Client.Configuration { BasePath = basePath };
      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public AccountApi()
    {
      this.Configuration = IO.Swagger.Client.Configuration.Default;
      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public AccountApi(IO.Swagger.Client.Configuration configuration = null)
    {
      if (configuration == null)
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

    public async System.Threading.Tasks.Task<Settings> GetSettingsAsync(string account, string password)
    {
      ApiResponse<Settings> localVarResponse = await GetSettingsWithHttpInfoAsync(account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<Settings>> GetSettingsWithHttpInfoAsync(string account, string password)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling AccountApi->ApiV1AccountGetAccountSettingsGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling AccountApi->ApiV1AccountGetAccountSettingsGet");

      var localVarPath = "/api/v1/Account/GetAccountSettings";
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
        Exception exception = ExceptionFactory("ApiV1AccountGetAccountSettingsGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Settings>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Settings)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Settings)));
    }
  }
}

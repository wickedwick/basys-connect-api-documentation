using System;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using RestSharp;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace IO.Swagger.Api
{
  public interface IVaultApi : IApiAccessor
  {
    System.Threading.Tasks.Task<Response> ApiV1VaultDeleteVaultCardByIDVaultCardIDPostAsync(int? vaultCardID, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo(int? vaultCardID, string account, string password);
    System.Threading.Tasks.Task<Response> ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsync(int? vaultCheckID, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo(int? vaultCheckID, string account, string password);
    System.Threading.Tasks.Task<Record> ApiV1VaultGetVaultRecordReferenceGetAsync(string reference, string account, string password);
    System.Threading.Tasks.Task<ApiResponse<Record>> ApiV1VaultGetVaultRecordReferenceGetAsyncWithHttpInfo(string reference, string account, string password);
    System.Threading.Tasks.Task<Response> ApiV1VaultSaveVaultCardVaultIDPostAsync(string account, string password, int? vaultID, VaultCreditCard body = null);
    System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo(string account, string password, int? vaultID, VaultCreditCard body = null);
    System.Threading.Tasks.Task<List<Response>> ApiV1VaultSaveVaultPostAsync(string account, string password, Record body = null);
    System.Threading.Tasks.Task<ApiResponse<List<Response>>> ApiV1VaultSaveVaultPostAsyncWithHttpInfo(string account, string password, Record body = null);
    System.Threading.Tasks.Task<List<Record>> ApiV1VaultSearchVaultPostAsync(string account, string password, SearchVault body = null);
    System.Threading.Tasks.Task<ApiResponse<List<Record>>> ApiV1VaultSearchVaultPostAsyncWithHttpInfo(string account, string password, SearchVault body = null);
    System.Threading.Tasks.Task<CheckTransaction> ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsync(string account, string password, int? vaultCheckID, CheckTransaction body = null);
    System.Threading.Tasks.Task<ApiResponse<CheckTransaction>> ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo(string account, string password, int? vaultCheckID, CheckTransaction body = null);
    System.Threading.Tasks.Task<Transaction> ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsync(string account, string password, int? vaultCardID, Transaction body = null);
    System.Threading.Tasks.Task<ApiResponse<Transaction>> ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo(string account, string password, int? vaultCardID, Transaction body = null);
  }

  public partial class VaultApi : IVaultApi
  {
    private IO.Swagger.Client.ExceptionFactory _exceptionFactory = (name, response) => null;

    public VaultApi(String basePath)
    {
      this.Configuration = new IO.Swagger.Client.Configuration { BasePath = basePath };

      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public VaultApi()
    {
      this.Configuration = IO.Swagger.Client.Configuration.Default;

      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public VaultApi(IO.Swagger.Client.Configuration configuration = null)
    {
      if (configuration == null) // use the default one in Configuration
        this.Configuration = IO.Swagger.Client.Configuration.Default;
      else
        this.Configuration = configuration;

      ExceptionFactory = IO.Swagger.Client.Configuration.DefaultExceptionFactory;
    }

    public async System.Threading.Tasks.Task<Response> ApiV1VaultDeleteVaultCardByIDVaultCardIDPostAsync(int? vaultCardID, string account, string password)
    {
      ApiResponse<Response> localVarResponse = await ApiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo(vaultCardID, account, password);
      return localVarResponse.Data;

    }

    public async System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo(int? vaultCardID, string account, string password)
    {
      // verify the required parameter 'vaultCardID' is set
      if (vaultCardID == null)
        throw new ApiException(400, "Missing required parameter 'vaultCardID' when calling VaultApi->ApiV1VaultDeleteVaultCardByIDVaultCardIDPost");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultDeleteVaultCardByIDVaultCardIDPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultDeleteVaultCardByIDVaultCardIDPost");

      var localVarPath = "/api/v1/Vault/DeleteVaultCardByID/{vaultCardID}";
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

      if (vaultCardID != null) localVarPathParams.Add("vaultCardID", this.Configuration.ApiClient.ParameterToString(vaultCardID)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1VaultDeleteVaultCardByIDVaultCardIDPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Response>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));
    }

    public async System.Threading.Tasks.Task<Response> ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsync(int? vaultCheckID, string account, string password)
    {
      ApiResponse<Response> localVarResponse = await ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo(vaultCheckID, account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo(int? vaultCheckID, string account, string password)
    {
      // verify the required parameter 'vaultCheckID' is set
      if (vaultCheckID == null)
        throw new ApiException(400, "Missing required parameter 'vaultCheckID' when calling VaultApi->ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost");

      var localVarPath = "/api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}";
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

      if (vaultCheckID != null) localVarPathParams.Add("vaultCheckID", this.Configuration.ApiClient.ParameterToString(vaultCheckID)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.POST, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Response>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));
    }

    public async System.Threading.Tasks.Task<Record> ApiV1VaultGetVaultRecordReferenceGetAsync(string reference, string account, string password)
    {
      ApiResponse<Record> localVarResponse = await ApiV1VaultGetVaultRecordReferenceGetAsyncWithHttpInfo(reference, account, password);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<Record>> ApiV1VaultGetVaultRecordReferenceGetAsyncWithHttpInfo(string reference, string account, string password)
    {
      // verify the required parameter 'reference' is set
      if (reference == null)
        throw new ApiException(400, "Missing required parameter 'reference' when calling VaultApi->ApiV1VaultGetVaultRecordReferenceGet");
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultGetVaultRecordReferenceGet");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultGetVaultRecordReferenceGet");

      var localVarPath = "/api/v1/Vault/GetVaultRecord/{reference}";
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

      if (reference != null) localVarPathParams.Add("reference", this.Configuration.ApiClient.ParameterToString(reference)); // path parameter
      if (account != null) localVarHeaderParams.Add("Account", this.Configuration.ApiClient.ParameterToString(account)); // header parameter
      if (password != null) localVarHeaderParams.Add("Password", this.Configuration.ApiClient.ParameterToString(password)); // header parameter

      // make the HTTP request
      IRestResponse localVarResponse = (IRestResponse)await this.Configuration.ApiClient.CallApiAsync(localVarPath,
          Method.GET, localVarQueryParams, localVarPostBody, localVarHeaderParams, localVarFormParams, localVarFileParams,
          localVarPathParams, localVarHttpContentType);

      int localVarStatusCode = (int)localVarResponse.StatusCode;

      if (ExceptionFactory != null)
      {
        Exception exception = ExceptionFactory("ApiV1VaultGetVaultRecordReferenceGet", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Record>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Record)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Record)));
    }

    public async System.Threading.Tasks.Task<Response> ApiV1VaultSaveVaultCardVaultIDPostAsync(string account, string password, int? vaultID, VaultCreditCard body = null)
    {
      ApiResponse<Response> localVarResponse = await ApiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo(account, password, vaultID, body);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<Response>> ApiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo(string account, string password, int? vaultID, VaultCreditCard body = null)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultSaveVaultCardVaultIDPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultSaveVaultCardVaultIDPost");
      // verify the required parameter 'vaultID' is set
      if (vaultID == null)
        throw new ApiException(400, "Missing required parameter 'vaultID' when calling VaultApi->ApiV1VaultSaveVaultCardVaultIDPost");

      var localVarPath = "/api/v1/Vault/SaveVaultCard/{vaultID}";
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

      if (vaultID != null) localVarPathParams.Add("vaultID", this.Configuration.ApiClient.ParameterToString(vaultID)); // path parameter
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
        Exception exception = ExceptionFactory("ApiV1VaultSaveVaultCardVaultIDPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Response>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Response)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Response)));
    }

    public async System.Threading.Tasks.Task<List<Response>> ApiV1VaultSaveVaultPostAsync(string account, string password, Record body = null)
    {
      ApiResponse<List<Response>> localVarResponse = await ApiV1VaultSaveVaultPostAsyncWithHttpInfo(account, password, body);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<List<Response>>> ApiV1VaultSaveVaultPostAsyncWithHttpInfo(string account, string password, Record body = null)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultSaveVaultPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultSaveVaultPost");

      var localVarPath = "/api/v1/Vault/SaveVault";
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
        Exception exception = ExceptionFactory("ApiV1VaultSaveVaultPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<Response>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<Response>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<Response>)));
    }

    public async System.Threading.Tasks.Task<List<Record>> ApiV1VaultSearchVaultPostAsync(string account, string password, SearchVault body = null)
    {
      ApiResponse<List<Record>> localVarResponse = await ApiV1VaultSearchVaultPostAsyncWithHttpInfo(account, password, body);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<List<Record>>> ApiV1VaultSearchVaultPostAsyncWithHttpInfo(string account, string password, SearchVault body = null)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultSearchVaultPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultSearchVaultPost");

      var localVarPath = "/api/v1/Vault/SearchVault";
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
        Exception exception = ExceptionFactory("ApiV1VaultSearchVaultPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<List<Record>>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (List<Record>)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(List<Record>)));
    }

    public async System.Threading.Tasks.Task<CheckTransaction> ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsync(string account, string password, int? vaultCheckID, CheckTransaction body = null)
    {
      ApiResponse<CheckTransaction> localVarResponse = await ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo(account, password, vaultCheckID, body);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<CheckTransaction>> ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo(string account, string password, int? vaultCheckID, CheckTransaction body = null)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost");
      // verify the required parameter 'vaultCheckID' is set
      if (vaultCheckID == null)
        throw new ApiException(400, "Missing required parameter 'vaultCheckID' when calling VaultApi->ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost");

      var localVarPath = "/api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}";
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

      if (vaultCheckID != null) localVarPathParams.Add("vaultCheckID", this.Configuration.ApiClient.ParameterToString(vaultCheckID)); // path parameter
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
        Exception exception = ExceptionFactory("ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<CheckTransaction>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (CheckTransaction)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(CheckTransaction)));
    }

    public async System.Threading.Tasks.Task<Transaction> ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsync(string account, string password, int? vaultCardID, Transaction body = null)
    {
      ApiResponse<Transaction> localVarResponse = await ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo(account, password, vaultCardID, body);
      return localVarResponse.Data;
    }

    public async System.Threading.Tasks.Task<ApiResponse<Transaction>> ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo(string account, string password, int? vaultCardID, Transaction body = null)
    {
      // verify the required parameter 'account' is set
      if (account == null)
        throw new ApiException(400, "Missing required parameter 'account' when calling VaultApi->ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost");
      // verify the required parameter 'password' is set
      if (password == null)
        throw new ApiException(400, "Missing required parameter 'password' when calling VaultApi->ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost");
      // verify the required parameter 'vaultCardID' is set
      if (vaultCardID == null)
        throw new ApiException(400, "Missing required parameter 'vaultCardID' when calling VaultApi->ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost");

      var localVarPath = "/api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}";
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

      if (vaultCardID != null) localVarPathParams.Add("vaultCardID", this.Configuration.ApiClient.ParameterToString(vaultCardID)); // path parameter
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
        Exception exception = ExceptionFactory("ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost", localVarResponse);
        if (exception != null) throw exception;
      }

      return new ApiResponse<Transaction>(localVarStatusCode,
          localVarResponse.Headers.ToDictionary(x => x.Name, x => string.Join(",", x.Value)),
          (Transaction)this.Configuration.ApiClient.Deserialize(localVarResponse, typeof(Transaction)));
    }
  }
}

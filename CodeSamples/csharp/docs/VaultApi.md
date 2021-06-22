# IO.Swagger.Api.VaultApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ApiV1VaultDeleteVaultCardByIDVaultCardIDPost**](VaultApi.md#apiv1vaultdeletevaultcardbyidvaultcardidpost) | **POST** /api/v1/Vault/DeleteVaultCardByID/{vaultCardID} | Used for deleting Vault card by Vault card ID
[**ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost**](VaultApi.md#apiv1vaultdeletevaultcheckbyidvaultcheckidpost) | **POST** /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID} | Used for deleting a Vault check by Vault check ID
[**ApiV1VaultGetVaultRecordReferenceGet**](VaultApi.md#apiv1vaultgetvaultrecordreferenceget) | **GET** /api/v1/Vault/GetVaultRecord/{reference} | Used for getting a Vault record by reference
[**ApiV1VaultSaveVaultCardVaultIDPost**](VaultApi.md#apiv1vaultsavevaultcardvaultidpost) | **POST** /api/v1/Vault/SaveVaultCard/{vaultID} | Used for saving a Vault card by vauld ID
[**ApiV1VaultSaveVaultPost**](VaultApi.md#apiv1vaultsavevaultpost) | **POST** /api/v1/Vault/SaveVault | Used for saving a Vault record
[**ApiV1VaultSearchVaultPost**](VaultApi.md#apiv1vaultsearchvaultpost) | **POST** /api/v1/Vault/SearchVault | Used for searching Vault records
[**ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost**](VaultApi.md#apiv1vaultsubmitcheckwithvaultcheckidvaultcheckidpost) | **POST** /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID} | Used for submitting a check with a Vault check ID
[**ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost**](VaultApi.md#apiv1vaultsubmitwithvaultcardidvaultcardidpost) | **POST** /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID} | Used for submitting with a Vault card ID

<a name="apiv1vaultdeletevaultcardbyidvaultcardidpost"></a>
# **ApiV1VaultDeleteVaultCardByIDVaultCardIDPost**
> Response ApiV1VaultDeleteVaultCardByIDVaultCardIDPost (int? vaultCardID, string account, string password)

Used for deleting Vault card by Vault card ID

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultDeleteVaultCardByIDVaultCardIDPostExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var vaultCardID = 56;  // int? | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for deleting Vault card by Vault card ID
                Response result = apiInstance.ApiV1VaultDeleteVaultCardByIDVaultCardIDPost(vaultCardID, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultDeleteVaultCardByIDVaultCardIDPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vaultCardID** | **int?**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1vaultdeletevaultcheckbyidvaultcheckidpost"></a>
# **ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost**
> Response ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost (int? vaultCheckID, string account, string password)

Used for deleting a Vault check by Vault check ID

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var vaultCheckID = 56;  // int? | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for deleting a Vault check by Vault check ID
                Response result = apiInstance.ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost(vaultCheckID, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vaultCheckID** | **int?**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1vaultgetvaultrecordreferenceget"></a>
# **ApiV1VaultGetVaultRecordReferenceGet**
> Record ApiV1VaultGetVaultRecordReferenceGet (string reference, string account, string password)

Used for getting a Vault record by reference

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultGetVaultRecordReferenceGetExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var reference = reference_example;  // string | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting a Vault record by reference
                Record result = apiInstance.ApiV1VaultGetVaultRecordReferenceGet(reference, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultGetVaultRecordReferenceGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**Record**](Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1vaultsavevaultcardvaultidpost"></a>
# **ApiV1VaultSaveVaultCardVaultIDPost**
> Response ApiV1VaultSaveVaultCardVaultIDPost (string account, string password, int? vaultID, VaultCreditCard body = null)

Used for saving a Vault card by vauld ID

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultSaveVaultCardVaultIDPostExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var vaultID = 56;  // int? | 
            var body = new VaultCreditCard(); // VaultCreditCard |  (optional) 

            try
            {
                // Used for saving a Vault card by vauld ID
                Response result = apiInstance.ApiV1VaultSaveVaultCardVaultIDPost(account, password, vaultID, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultSaveVaultCardVaultIDPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  | 
 **password** | **string**|  | 
 **vaultID** | **int?**|  | 
 **body** | [**VaultCreditCard**](VaultCreditCard.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1vaultsavevaultpost"></a>
# **ApiV1VaultSaveVaultPost**
> List<Response> ApiV1VaultSaveVaultPost (string account, string password, Record body = null)

Used for saving a Vault record

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultSaveVaultPostExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var body = new Record(); // Record |  (optional) 

            try
            {
                // Used for saving a Vault record
                List&lt;Response&gt; result = apiInstance.ApiV1VaultSaveVaultPost(account, password, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultSaveVaultPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  | 
 **password** | **string**|  | 
 **body** | [**Record**](Record.md)|  | [optional] 

### Return type

[**List<Response>**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1vaultsearchvaultpost"></a>
# **ApiV1VaultSearchVaultPost**
> List<Record> ApiV1VaultSearchVaultPost (string account, string password, SearchVault body = null)

Used for searching Vault records

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultSearchVaultPostExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var body = new SearchVault(); // SearchVault |  (optional) 

            try
            {
                // Used for searching Vault records
                List&lt;Record&gt; result = apiInstance.ApiV1VaultSearchVaultPost(account, password, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultSearchVaultPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  | 
 **password** | **string**|  | 
 **body** | [**SearchVault**](SearchVault.md)|  | [optional] 

### Return type

[**List<Record>**](Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1vaultsubmitcheckwithvaultcheckidvaultcheckidpost"></a>
# **ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost**
> CheckTransaction ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost (string account, string password, int? vaultCheckID, CheckTransaction body = null)

Used for submitting a check with a Vault check ID

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var vaultCheckID = 56;  // int? | 
            var body = new CheckTransaction(); // CheckTransaction |  (optional) 

            try
            {
                // Used for submitting a check with a Vault check ID
                CheckTransaction result = apiInstance.ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost(account, password, vaultCheckID, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  | 
 **password** | **string**|  | 
 **vaultCheckID** | **int?**|  | 
 **body** | [**CheckTransaction**](CheckTransaction.md)|  | [optional] 

### Return type

[**CheckTransaction**](CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1vaultsubmitwithvaultcardidvaultcardidpost"></a>
# **ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost**
> Transaction ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost (string account, string password, int? vaultCardID, Transaction body = null)

Used for submitting with a Vault card ID

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostExample
    {
        public void main()
        {
            var apiInstance = new VaultApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var vaultCardID = 56;  // int? | 
            var body = new Transaction(); // Transaction |  (optional) 

            try
            {
                // Used for submitting with a Vault card ID
                Transaction result = apiInstance.ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost(account, password, vaultCardID, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VaultApi.ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  | 
 **password** | **string**|  | 
 **vaultCardID** | **int?**|  | 
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**Transaction**](Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

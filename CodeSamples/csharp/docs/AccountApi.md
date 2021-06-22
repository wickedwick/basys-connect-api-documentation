# IO.Swagger.Api.AccountApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ApiV1AccountGetAccountSettingsGet**](AccountApi.md#apiv1accountgetaccountsettingsget) | **GET** /api/v1/Account/GetAccountSettings | Used for getting account settings information

<a name="apiv1accountgetaccountsettingsget"></a>
# **ApiV1AccountGetAccountSettingsGet**
> Settings ApiV1AccountGetAccountSettingsGet (string account, string password)

Used for getting account settings information

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1AccountGetAccountSettingsGetExample
    {
        public void main()
        {
            var apiInstance = new AccountApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting account settings information
                Settings result = apiInstance.ApiV1AccountGetAccountSettingsGet(account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling AccountApi.ApiV1AccountGetAccountSettingsGet: " + e.Message );
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

### Return type

[**Settings**](Settings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

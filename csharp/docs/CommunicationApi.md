# IO.Swagger.Api.CommunicationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ApiV1CommunicationEmailReceiptPost**](CommunicationApi.md#apiv1communicationemailreceiptpost) | **POST** /api/v1/Communication/EmailReceipt | Used for sending an email receipt of a transaction

<a name="apiv1communicationemailreceiptpost"></a>
# **ApiV1CommunicationEmailReceiptPost**
> Response ApiV1CommunicationEmailReceiptPost (string account, string password, EmailReceipt body = null)

Used for sending an email receipt of a transaction

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1CommunicationEmailReceiptPostExample
    {
        public void main()
        {
            var apiInstance = new CommunicationApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var body = new EmailReceipt(); // EmailReceipt |  (optional) 

            try
            {
                // Used for sending an email receipt of a transaction
                Response result = apiInstance.ApiV1CommunicationEmailReceiptPost(account, password, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling CommunicationApi.ApiV1CommunicationEmailReceiptPost: " + e.Message );
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
 **body** | [**EmailReceipt**](EmailReceipt.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

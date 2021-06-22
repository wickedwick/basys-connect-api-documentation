# IO.Swagger.Api.VirtualTerminalApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ApiV1VirtualTerminalMarkTransactionIDPost**](VirtualTerminalApi.md#apiv1virtualterminalmarktransactionidpost) | **POST** /api/v1/VirtualTerminal/Mark/{transactionID} | Used to Mark a single transaction
[**ApiV1VirtualTerminalMarkTransactionsPost**](VirtualTerminalApi.md#apiv1virtualterminalmarktransactionspost) | **POST** /api/v1/VirtualTerminal/MarkTransactions | Used to Mark multiple transactions at once
[**ApiV1VirtualTerminalQueryPost**](VirtualTerminalApi.md#apiv1virtualterminalquerypost) | **POST** /api/v1/VirtualTerminal/Query | Used for querying transaction information
[**ApiV1VirtualTerminalSubmitCheckPost**](VirtualTerminalApi.md#apiv1virtualterminalsubmitcheckpost) | **POST** /api/v1/VirtualTerminal/SubmitCheck | Used to submit a check transaction
[**ApiV1VirtualTerminalSubmitPost**](VirtualTerminalApi.md#apiv1virtualterminalsubmitpost) | **POST** /api/v1/VirtualTerminal/Submit | Used to submit sales and credit transaction types
[**ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost**](VirtualTerminalApi.md#apiv1virtualterminalupdatetransactioninfotransactionidpost) | **POST** /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID} | Used to update transaction information

<a name="apiv1virtualterminalmarktransactionidpost"></a>
# **ApiV1VirtualTerminalMarkTransactionIDPost**
> Response ApiV1VirtualTerminalMarkTransactionIDPost (string transactionID, string account, string password)

Used to Mark a single transaction

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VirtualTerminalMarkTransactionIDPostExample
    {
        public void main()
        {
            var apiInstance = new VirtualTerminalApi();
            var transactionID = transactionID_example;  // string | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used to Mark a single transaction
                Response result = apiInstance.ApiV1VirtualTerminalMarkTransactionIDPost(transactionID, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VirtualTerminalApi.ApiV1VirtualTerminalMarkTransactionIDPost: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionID** | **string**|  | 
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
<a name="apiv1virtualterminalmarktransactionspost"></a>
# **ApiV1VirtualTerminalMarkTransactionsPost**
> Response ApiV1VirtualTerminalMarkTransactionsPost (string account, string password, List<string> body = null)

Used to Mark multiple transactions at once

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VirtualTerminalMarkTransactionsPostExample
    {
        public void main()
        {
            var apiInstance = new VirtualTerminalApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var body = new List<string>(); // List<string> |  (optional) 

            try
            {
                // Used to Mark multiple transactions at once
                Response result = apiInstance.ApiV1VirtualTerminalMarkTransactionsPost(account, password, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VirtualTerminalApi.ApiV1VirtualTerminalMarkTransactionsPost: " + e.Message );
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
 **body** | [**List&lt;string&gt;**](string.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1virtualterminalquerypost"></a>
# **ApiV1VirtualTerminalQueryPost**
> QueryTransaction ApiV1VirtualTerminalQueryPost (string account, string password, Transaction body = null)

Used for querying transaction information

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VirtualTerminalQueryPostExample
    {
        public void main()
        {
            var apiInstance = new VirtualTerminalApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var body = new Transaction(); // Transaction |  (optional) 

            try
            {
                // Used for querying transaction information
                QueryTransaction result = apiInstance.ApiV1VirtualTerminalQueryPost(account, password, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VirtualTerminalApi.ApiV1VirtualTerminalQueryPost: " + e.Message );
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
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**QueryTransaction**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1virtualterminalsubmitcheckpost"></a>
# **ApiV1VirtualTerminalSubmitCheckPost**
> CheckTransaction ApiV1VirtualTerminalSubmitCheckPost (string account, string password, CheckTransaction body = null)

Used to submit a check transaction

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VirtualTerminalSubmitCheckPostExample
    {
        public void main()
        {
            var apiInstance = new VirtualTerminalApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var body = new CheckTransaction(); // CheckTransaction |  (optional) 

            try
            {
                // Used to submit a check transaction
                CheckTransaction result = apiInstance.ApiV1VirtualTerminalSubmitCheckPost(account, password, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VirtualTerminalApi.ApiV1VirtualTerminalSubmitCheckPost: " + e.Message );
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
 **body** | [**CheckTransaction**](CheckTransaction.md)|  | [optional] 

### Return type

[**CheckTransaction**](CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1virtualterminalsubmitpost"></a>
# **ApiV1VirtualTerminalSubmitPost**
> Transaction ApiV1VirtualTerminalSubmitPost (string account, string password, Transaction body = null)

Used to submit sales and credit transaction types

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VirtualTerminalSubmitPostExample
    {
        public void main()
        {
            var apiInstance = new VirtualTerminalApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var body = new Transaction(); // Transaction |  (optional) 

            try
            {
                // Used to submit sales and credit transaction types
                Transaction result = apiInstance.ApiV1VirtualTerminalSubmitPost(account, password, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VirtualTerminalApi.ApiV1VirtualTerminalSubmitPost: " + e.Message );
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
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**Transaction**](Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1virtualterminalupdatetransactioninfotransactionidpost"></a>
# **ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost**
> Response ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost (string account, string password, string transactionID, UpdateTransactionInfo body = null)

Used to update transaction information

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostExample
    {
        public void main()
        {
            var apiInstance = new VirtualTerminalApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 
            var transactionID = transactionID_example;  // string | 
            var body = new UpdateTransactionInfo(); // UpdateTransactionInfo |  (optional) 

            try
            {
                // Used to update transaction information
                Response result = apiInstance.ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost(account, password, transactionID, body);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling VirtualTerminalApi.ApiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost: " + e.Message );
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
 **transactionID** | **string**|  | 
 **body** | [**UpdateTransactionInfo**](UpdateTransactionInfo.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

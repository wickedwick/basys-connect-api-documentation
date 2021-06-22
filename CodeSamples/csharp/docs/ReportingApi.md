# IO.Swagger.Api.ReportingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**ApiV1ReportingGetBatchesByDateBatchDateGet**](ReportingApi.md#apiv1reportinggetbatchesbydatebatchdateget) | **GET** /api/v1/Reporting/GetBatchesByDate/{batchDate} | Used for getting batches by date
[**ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet**](ReportingApi.md#apiv1reportinggetcheckterminalsettingsbysecseccodeget) | **GET** /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode} | Used for getting check terminal settings information filtered by SEC code
[**ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet**](ReportingApi.md#apiv1reportinggetcheckterminalsettingsterminalidget) | **GET** /api/v1/Reporting/GetCheckTerminalSettings/{terminalID} | Used for getting check terminal settings information by the terminal ID
[**ApiV1ReportingGetCheckTerminalsGet**](ReportingApi.md#apiv1reportinggetcheckterminalsget) | **GET** /api/v1/Reporting/GetCheckTerminals | Used for getting check terminal information
[**ApiV1ReportingGetTransactionsByBatchBatchGet**](ReportingApi.md#apiv1reportinggettransactionsbybatchbatchget) | **GET** /api/v1/Reporting/GetTransactionsByBatch/{batch} | Used for getting transactions by batch
[**ApiV1ReportingGetTransactionsByDateTransactionDateGet**](ReportingApi.md#apiv1reportinggettransactionsbydatetransactiondateget) | **GET** /api/v1/Reporting/GetTransactionsByDate/{transactionDate} | Used for getting transactions by date

<a name="apiv1reportinggetbatchesbydatebatchdateget"></a>
# **ApiV1ReportingGetBatchesByDateBatchDateGet**
> List<Batch> ApiV1ReportingGetBatchesByDateBatchDateGet (DateTime? batchDate, string account, string password)

Used for getting batches by date

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1ReportingGetBatchesByDateBatchDateGetExample
    {
        public void main()
        {
            var apiInstance = new ReportingApi();
            var batchDate = 2013-10-20T19:20:30+01:00;  // DateTime? | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting batches by date
                List&lt;Batch&gt; result = apiInstance.ApiV1ReportingGetBatchesByDateBatchDateGet(batchDate, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ReportingApi.ApiV1ReportingGetBatchesByDateBatchDateGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchDate** | **DateTime?**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**List<Batch>**](Batch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1reportinggetcheckterminalsettingsbysecseccodeget"></a>
# **ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet**
> List<TerminalSettings> ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet (string secCode, string account, string password)

Used for getting check terminal settings information filtered by SEC code

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetExample
    {
        public void main()
        {
            var apiInstance = new ReportingApi();
            var secCode = secCode_example;  // string | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting check terminal settings information filtered by SEC code
                List&lt;TerminalSettings&gt; result = apiInstance.ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet(secCode, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ReportingApi.ApiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secCode** | **string**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**List<TerminalSettings>**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1reportinggetcheckterminalsettingsterminalidget"></a>
# **ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet**
> List<TerminalSettings> ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet (int? terminalID, string account, string password)

Used for getting check terminal settings information by the terminal ID

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1ReportingGetCheckTerminalSettingsTerminalIDGetExample
    {
        public void main()
        {
            var apiInstance = new ReportingApi();
            var terminalID = 56;  // int? | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting check terminal settings information by the terminal ID
                List&lt;TerminalSettings&gt; result = apiInstance.ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet(terminalID, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ReportingApi.ApiV1ReportingGetCheckTerminalSettingsTerminalIDGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminalID** | **int?**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**List<TerminalSettings>**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1reportinggetcheckterminalsget"></a>
# **ApiV1ReportingGetCheckTerminalsGet**
> List<TerminalSettings> ApiV1ReportingGetCheckTerminalsGet (string account, string password)

Used for getting check terminal information

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1ReportingGetCheckTerminalsGetExample
    {
        public void main()
        {
            var apiInstance = new ReportingApi();
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting check terminal information
                List&lt;TerminalSettings&gt; result = apiInstance.ApiV1ReportingGetCheckTerminalsGet(account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ReportingApi.ApiV1ReportingGetCheckTerminalsGet: " + e.Message );
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

[**List<TerminalSettings>**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1reportinggettransactionsbybatchbatchget"></a>
# **ApiV1ReportingGetTransactionsByBatchBatchGet**
> List<QueryTransaction> ApiV1ReportingGetTransactionsByBatchBatchGet (string batch, string account, string password)

Used for getting transactions by batch

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1ReportingGetTransactionsByBatchBatchGetExample
    {
        public void main()
        {
            var apiInstance = new ReportingApi();
            var batch = batch_example;  // string | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting transactions by batch
                List&lt;QueryTransaction&gt; result = apiInstance.ApiV1ReportingGetTransactionsByBatchBatchGet(batch, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ReportingApi.ApiV1ReportingGetTransactionsByBatchBatchGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | **string**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**List<QueryTransaction>**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)
<a name="apiv1reportinggettransactionsbydatetransactiondateget"></a>
# **ApiV1ReportingGetTransactionsByDateTransactionDateGet**
> List<QueryTransaction> ApiV1ReportingGetTransactionsByDateTransactionDateGet (DateTime? transactionDate, string account, string password)

Used for getting transactions by date

### Example
```csharp
using System;
using System.Diagnostics;
using IO.Swagger.Api;
using IO.Swagger.Client;
using IO.Swagger.Model;

namespace Example
{
    public class ApiV1ReportingGetTransactionsByDateTransactionDateGetExample
    {
        public void main()
        {
            var apiInstance = new ReportingApi();
            var transactionDate = 2013-10-20T19:20:30+01:00;  // DateTime? | 
            var account = account_example;  // string | 
            var password = password_example;  // string | 

            try
            {
                // Used for getting transactions by date
                List&lt;QueryTransaction&gt; result = apiInstance.ApiV1ReportingGetTransactionsByDateTransactionDateGet(transactionDate, account, password);
                Debug.WriteLine(result);
            }
            catch (Exception e)
            {
                Debug.Print("Exception when calling ReportingApi.ApiV1ReportingGetTransactionsByDateTransactionDateGet: " + e.Message );
            }
        }
    }
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionDate** | **DateTime?**|  | 
 **account** | **string**|  | 
 **password** | **string**|  | 

### Return type

[**List<QueryTransaction>**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

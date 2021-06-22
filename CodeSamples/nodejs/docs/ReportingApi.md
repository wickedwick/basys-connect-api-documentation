# Connect16ResTfulV1.ReportingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1ReportingGetBatchesByDateBatchDateGet**](ReportingApi.md#apiV1ReportingGetBatchesByDateBatchDateGet) | **GET** /api/v1/Reporting/GetBatchesByDate/{batchDate} | Used for getting batches by date
[**apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet**](ReportingApi.md#apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet) | **GET** /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode} | Used for getting check terminal settings information filtered by SEC code
[**apiV1ReportingGetCheckTerminalSettingsTerminalIDGet**](ReportingApi.md#apiV1ReportingGetCheckTerminalSettingsTerminalIDGet) | **GET** /api/v1/Reporting/GetCheckTerminalSettings/{terminalID} | Used for getting check terminal settings information by the terminal ID
[**apiV1ReportingGetCheckTerminalsGet**](ReportingApi.md#apiV1ReportingGetCheckTerminalsGet) | **GET** /api/v1/Reporting/GetCheckTerminals | Used for getting check terminal information
[**apiV1ReportingGetTransactionsByBatchBatchGet**](ReportingApi.md#apiV1ReportingGetTransactionsByBatchBatchGet) | **GET** /api/v1/Reporting/GetTransactionsByBatch/{batch} | Used for getting transactions by batch
[**apiV1ReportingGetTransactionsByDateTransactionDateGet**](ReportingApi.md#apiV1ReportingGetTransactionsByDateTransactionDateGet) | **GET** /api/v1/Reporting/GetTransactionsByDate/{transactionDate} | Used for getting transactions by date

<a name="apiV1ReportingGetBatchesByDateBatchDateGet"></a>
# **apiV1ReportingGetBatchesByDateBatchDateGet**
> [Batch] apiV1ReportingGetBatchesByDateBatchDateGet(batchDate, account, password)

Used for getting batches by date

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.ReportingApi();
let batchDate = new Date("2013-10-20T19:20:30+01:00"); // Date | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1ReportingGetBatchesByDateBatchDateGet(batchDate, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batchDate** | **Date**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**[Batch]**](Batch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet"></a>
# **apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet**
> [TerminalSettings] apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet(secCode, account, password)

Used for getting check terminal settings information filtered by SEC code

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.ReportingApi();
let secCode = "secCode_example"; // String | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet(secCode, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **secCode** | **String**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**[TerminalSettings]**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1ReportingGetCheckTerminalSettingsTerminalIDGet"></a>
# **apiV1ReportingGetCheckTerminalSettingsTerminalIDGet**
> [TerminalSettings] apiV1ReportingGetCheckTerminalSettingsTerminalIDGet(terminalID, account, password)

Used for getting check terminal settings information by the terminal ID

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.ReportingApi();
let terminalID = 56; // Number | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1ReportingGetCheckTerminalSettingsTerminalIDGet(terminalID, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminalID** | **Number**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**[TerminalSettings]**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1ReportingGetCheckTerminalsGet"></a>
# **apiV1ReportingGetCheckTerminalsGet**
> [TerminalSettings] apiV1ReportingGetCheckTerminalsGet(account, password)

Used for getting check terminal information

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.ReportingApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1ReportingGetCheckTerminalsGet(account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**[TerminalSettings]**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1ReportingGetTransactionsByBatchBatchGet"></a>
# **apiV1ReportingGetTransactionsByBatchBatchGet**
> [QueryTransaction] apiV1ReportingGetTransactionsByBatchBatchGet(batch, account, password)

Used for getting transactions by batch

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.ReportingApi();
let batch = "batch_example"; // String | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1ReportingGetTransactionsByBatchBatchGet(batch, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | **String**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**[QueryTransaction]**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1ReportingGetTransactionsByDateTransactionDateGet"></a>
# **apiV1ReportingGetTransactionsByDateTransactionDateGet**
> [QueryTransaction] apiV1ReportingGetTransactionsByDateTransactionDateGet(transactionDate, account, password)

Used for getting transactions by date

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.ReportingApi();
let transactionDate = new Date("2013-10-20T19:20:30+01:00"); // Date | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1ReportingGetTransactionsByDateTransactionDateGet(transactionDate, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transactionDate** | **Date**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**[QueryTransaction]**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json


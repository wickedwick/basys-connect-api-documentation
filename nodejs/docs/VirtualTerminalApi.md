# Connect16ResTfulV1.VirtualTerminalApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1VirtualTerminalMarkTransactionIDPost**](VirtualTerminalApi.md#apiV1VirtualTerminalMarkTransactionIDPost) | **POST** /api/v1/VirtualTerminal/Mark/{transactionID} | Used to Mark a single transaction
[**apiV1VirtualTerminalMarkTransactionsPost**](VirtualTerminalApi.md#apiV1VirtualTerminalMarkTransactionsPost) | **POST** /api/v1/VirtualTerminal/MarkTransactions | Used to Mark multiple transactions at once
[**apiV1VirtualTerminalQueryPost**](VirtualTerminalApi.md#apiV1VirtualTerminalQueryPost) | **POST** /api/v1/VirtualTerminal/Query | Used for querying transaction information
[**apiV1VirtualTerminalSubmitCheckPost**](VirtualTerminalApi.md#apiV1VirtualTerminalSubmitCheckPost) | **POST** /api/v1/VirtualTerminal/SubmitCheck | Used to submit a check transaction
[**apiV1VirtualTerminalSubmitPost**](VirtualTerminalApi.md#apiV1VirtualTerminalSubmitPost) | **POST** /api/v1/VirtualTerminal/Submit | Used to submit sales and credit transaction types
[**apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost**](VirtualTerminalApi.md#apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost) | **POST** /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID} | Used to update transaction information

<a name="apiV1VirtualTerminalMarkTransactionIDPost"></a>
# **apiV1VirtualTerminalMarkTransactionIDPost**
> Response apiV1VirtualTerminalMarkTransactionIDPost(transactionID, account, password)

Used to Mark a single transaction

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VirtualTerminalApi();
let transactionID = "transactionID_example"; // String | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1VirtualTerminalMarkTransactionIDPost(transactionID, account, password, (error, data, response) => {
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
 **transactionID** | **String**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VirtualTerminalMarkTransactionsPost"></a>
# **apiV1VirtualTerminalMarkTransactionsPost**
> Response apiV1VirtualTerminalMarkTransactionsPost(accountpassword, opts)

Used to Mark multiple transactions at once

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VirtualTerminalApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let opts = { 
  'body': ["body_example"] // [String] | 
};
apiInstance.apiV1VirtualTerminalMarkTransactionsPost(accountpassword, opts, (error, data, response) => {
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
 **body** | [**[String]**](String.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VirtualTerminalQueryPost"></a>
# **apiV1VirtualTerminalQueryPost**
> QueryTransaction apiV1VirtualTerminalQueryPost(accountpassword, opts)

Used for querying transaction information

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VirtualTerminalApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let opts = { 
  'body': new Connect16ResTfulV1.Transaction() // Transaction | 
};
apiInstance.apiV1VirtualTerminalQueryPost(accountpassword, opts, (error, data, response) => {
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
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**QueryTransaction**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VirtualTerminalSubmitCheckPost"></a>
# **apiV1VirtualTerminalSubmitCheckPost**
> CheckTransaction apiV1VirtualTerminalSubmitCheckPost(accountpassword, opts)

Used to submit a check transaction

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VirtualTerminalApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let opts = { 
  'body': new Connect16ResTfulV1.CheckTransaction() // CheckTransaction | 
};
apiInstance.apiV1VirtualTerminalSubmitCheckPost(accountpassword, opts, (error, data, response) => {
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
 **body** | [**CheckTransaction**](CheckTransaction.md)|  | [optional] 

### Return type

[**CheckTransaction**](CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VirtualTerminalSubmitPost"></a>
# **apiV1VirtualTerminalSubmitPost**
> Transaction apiV1VirtualTerminalSubmitPost(accountpassword, opts)

Used to submit sales and credit transaction types

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VirtualTerminalApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let opts = { 
  'body': new Connect16ResTfulV1.Transaction() // Transaction | 
};
apiInstance.apiV1VirtualTerminalSubmitPost(accountpassword, opts, (error, data, response) => {
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
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**Transaction**](Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost"></a>
# **apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost**
> Response apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost(accountpasswordtransactionID, opts)

Used to update transaction information

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VirtualTerminalApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let transactionID = "transactionID_example"; // String | 
let opts = { 
  'body': new Connect16ResTfulV1.UpdateTransactionInfo() // UpdateTransactionInfo | 
};
apiInstance.apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost(accountpasswordtransactionID, opts, (error, data, response) => {
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
 **transactionID** | **String**|  | 
 **body** | [**UpdateTransactionInfo**](UpdateTransactionInfo.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json


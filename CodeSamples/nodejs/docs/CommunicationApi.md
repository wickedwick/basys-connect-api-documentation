# Connect16ResTfulV1.CommunicationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1CommunicationEmailReceiptPost**](CommunicationApi.md#apiV1CommunicationEmailReceiptPost) | **POST** /api/v1/Communication/EmailReceipt | Used for sending an email receipt of a transaction

<a name="apiV1CommunicationEmailReceiptPost"></a>
# **apiV1CommunicationEmailReceiptPost**
> Response apiV1CommunicationEmailReceiptPost(accountpassword, opts)

Used for sending an email receipt of a transaction

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.CommunicationApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let opts = { 
  'body': new Connect16ResTfulV1.EmailReceipt() // EmailReceipt | 
};
apiInstance.apiV1CommunicationEmailReceiptPost(accountpassword, opts, (error, data, response) => {
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
 **body** | [**EmailReceipt**](EmailReceipt.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json


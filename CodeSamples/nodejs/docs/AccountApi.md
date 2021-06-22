# Connect16ResTfulV1.AccountApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1AccountGetAccountSettingsGet**](AccountApi.md#apiV1AccountGetAccountSettingsGet) | **GET** /api/v1/Account/GetAccountSettings | Used for getting account settings information

<a name="apiV1AccountGetAccountSettingsGet"></a>
# **apiV1AccountGetAccountSettingsGet**
> Settings apiV1AccountGetAccountSettingsGet(account, password)

Used for getting account settings information

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.AccountApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1AccountGetAccountSettingsGet(account, password, (error, data, response) => {
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

[**Settings**](Settings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json


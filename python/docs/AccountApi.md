# swagger_client.AccountApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**api_v1_account_get_account_settings_get**](AccountApi.md#api_v1_account_get_account_settings_get) | **GET** /api/v1/Account/GetAccountSettings | Used for getting account settings information

# **api_v1_account_get_account_settings_get**
> Settings api_v1_account_get_account_settings_get(account, password)

Used for getting account settings information

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.AccountApi()
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting account settings information
    api_response = api_instance.api_v1_account_get_account_settings_get(account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling AccountApi->api_v1_account_get_account_settings_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**Settings**](Settings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


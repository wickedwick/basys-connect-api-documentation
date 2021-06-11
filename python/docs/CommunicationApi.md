# swagger_client.CommunicationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**api_v1_communication_email_receipt_post**](CommunicationApi.md#api_v1_communication_email_receipt_post) | **POST** /api/v1/Communication/EmailReceipt | Used for sending an email receipt of a transaction

# **api_v1_communication_email_receipt_post**
> Response api_v1_communication_email_receipt_post(account, password, body=body)

Used for sending an email receipt of a transaction

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CommunicationApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
body = swagger_client.EmailReceipt() # EmailReceipt |  (optional)

try:
    # Used for sending an email receipt of a transaction
    api_response = api_instance.api_v1_communication_email_receipt_post(account, password, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling CommunicationApi->api_v1_communication_email_receipt_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **body** | [**EmailReceipt**](EmailReceipt.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


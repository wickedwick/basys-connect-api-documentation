# swagger_client.VirtualTerminalApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**api_v1_virtual_terminal_mark_transaction_id_post**](VirtualTerminalApi.md#api_v1_virtual_terminal_mark_transaction_id_post) | **POST** /api/v1/VirtualTerminal/Mark/{transactionID} | Used to Mark a single transaction
[**api_v1_virtual_terminal_mark_transactions_post**](VirtualTerminalApi.md#api_v1_virtual_terminal_mark_transactions_post) | **POST** /api/v1/VirtualTerminal/MarkTransactions | Used to Mark multiple transactions at once
[**api_v1_virtual_terminal_query_post**](VirtualTerminalApi.md#api_v1_virtual_terminal_query_post) | **POST** /api/v1/VirtualTerminal/Query | Used for querying transaction information
[**api_v1_virtual_terminal_submit_check_post**](VirtualTerminalApi.md#api_v1_virtual_terminal_submit_check_post) | **POST** /api/v1/VirtualTerminal/SubmitCheck | Used to submit a check transaction
[**api_v1_virtual_terminal_submit_post**](VirtualTerminalApi.md#api_v1_virtual_terminal_submit_post) | **POST** /api/v1/VirtualTerminal/Submit | Used to submit sales and credit transaction types
[**api_v1_virtual_terminal_update_transaction_info_transaction_id_post**](VirtualTerminalApi.md#api_v1_virtual_terminal_update_transaction_info_transaction_id_post) | **POST** /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID} | Used to update transaction information

# **api_v1_virtual_terminal_mark_transaction_id_post**
> Response api_v1_virtual_terminal_mark_transaction_id_post(transaction_id, account, password)

Used to Mark a single transaction

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VirtualTerminalApi()
transaction_id = 'transaction_id_example' # str | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used to Mark a single transaction
    api_response = api_instance.api_v1_virtual_terminal_mark_transaction_id_post(transaction_id, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VirtualTerminalApi->api_v1_virtual_terminal_mark_transaction_id_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **str**|  | 
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_virtual_terminal_mark_transactions_post**
> Response api_v1_virtual_terminal_mark_transactions_post(account, password, body=body)

Used to Mark multiple transactions at once

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VirtualTerminalApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
body = ['body_example'] # list[str] |  (optional)

try:
    # Used to Mark multiple transactions at once
    api_response = api_instance.api_v1_virtual_terminal_mark_transactions_post(account, password, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VirtualTerminalApi->api_v1_virtual_terminal_mark_transactions_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **body** | [**list[str]**](str.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_virtual_terminal_query_post**
> QueryTransaction api_v1_virtual_terminal_query_post(account, password, body=body)

Used for querying transaction information

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VirtualTerminalApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
body = swagger_client.Transaction() # Transaction |  (optional)

try:
    # Used for querying transaction information
    api_response = api_instance.api_v1_virtual_terminal_query_post(account, password, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VirtualTerminalApi->api_v1_virtual_terminal_query_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**QueryTransaction**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_virtual_terminal_submit_check_post**
> CheckTransaction api_v1_virtual_terminal_submit_check_post(account, password, body=body)

Used to submit a check transaction

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VirtualTerminalApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
body = swagger_client.CheckTransaction() # CheckTransaction |  (optional)

try:
    # Used to submit a check transaction
    api_response = api_instance.api_v1_virtual_terminal_submit_check_post(account, password, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VirtualTerminalApi->api_v1_virtual_terminal_submit_check_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **body** | [**CheckTransaction**](CheckTransaction.md)|  | [optional] 

### Return type

[**CheckTransaction**](CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_virtual_terminal_submit_post**
> Transaction api_v1_virtual_terminal_submit_post(account, password, body=body)

Used to submit sales and credit transaction types

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VirtualTerminalApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
body = swagger_client.Transaction() # Transaction |  (optional)

try:
    # Used to submit sales and credit transaction types
    api_response = api_instance.api_v1_virtual_terminal_submit_post(account, password, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VirtualTerminalApi->api_v1_virtual_terminal_submit_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**Transaction**](Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_virtual_terminal_update_transaction_info_transaction_id_post**
> Response api_v1_virtual_terminal_update_transaction_info_transaction_id_post(account, password, transaction_id, body=body)

Used to update transaction information

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VirtualTerminalApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
transaction_id = 'transaction_id_example' # str | 
body = swagger_client.UpdateTransactionInfo() # UpdateTransactionInfo |  (optional)

try:
    # Used to update transaction information
    api_response = api_instance.api_v1_virtual_terminal_update_transaction_info_transaction_id_post(account, password, transaction_id, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VirtualTerminalApi->api_v1_virtual_terminal_update_transaction_info_transaction_id_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **transaction_id** | **str**|  | 
 **body** | [**UpdateTransactionInfo**](UpdateTransactionInfo.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


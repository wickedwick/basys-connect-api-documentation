# swagger_client.ReportingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**api_v1_reporting_get_batches_by_date_batch_date_get**](ReportingApi.md#api_v1_reporting_get_batches_by_date_batch_date_get) | **GET** /api/v1/Reporting/GetBatchesByDate/{batchDate} | Used for getting batches by date
[**api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get**](ReportingApi.md#api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get) | **GET** /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode} | Used for getting check terminal settings information filtered by SEC code
[**api_v1_reporting_get_check_terminal_settings_terminal_id_get**](ReportingApi.md#api_v1_reporting_get_check_terminal_settings_terminal_id_get) | **GET** /api/v1/Reporting/GetCheckTerminalSettings/{terminalID} | Used for getting check terminal settings information by the terminal ID
[**api_v1_reporting_get_check_terminals_get**](ReportingApi.md#api_v1_reporting_get_check_terminals_get) | **GET** /api/v1/Reporting/GetCheckTerminals | Used for getting check terminal information
[**api_v1_reporting_get_transactions_by_batch_batch_get**](ReportingApi.md#api_v1_reporting_get_transactions_by_batch_batch_get) | **GET** /api/v1/Reporting/GetTransactionsByBatch/{batch} | Used for getting transactions by batch
[**api_v1_reporting_get_transactions_by_date_transaction_date_get**](ReportingApi.md#api_v1_reporting_get_transactions_by_date_transaction_date_get) | **GET** /api/v1/Reporting/GetTransactionsByDate/{transactionDate} | Used for getting transactions by date

# **api_v1_reporting_get_batches_by_date_batch_date_get**
> list[Batch] api_v1_reporting_get_batches_by_date_batch_date_get(batch_date, account, password)

Used for getting batches by date

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportingApi()
batch_date = '2013-10-20T19:20:30+01:00' # datetime | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting batches by date
    api_response = api_instance.api_v1_reporting_get_batches_by_date_batch_date_get(batch_date, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ReportingApi->api_v1_reporting_get_batches_by_date_batch_date_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_date** | **datetime**|  | 
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**list[Batch]**](Batch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get**
> list[TerminalSettings] api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get(sec_code, account, password)

Used for getting check terminal settings information filtered by SEC code

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportingApi()
sec_code = 'sec_code_example' # str | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting check terminal settings information filtered by SEC code
    api_response = api_instance.api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get(sec_code, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ReportingApi->api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sec_code** | **str**|  | 
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**list[TerminalSettings]**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_reporting_get_check_terminal_settings_terminal_id_get**
> list[TerminalSettings] api_v1_reporting_get_check_terminal_settings_terminal_id_get(terminal_id, account, password)

Used for getting check terminal settings information by the terminal ID

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportingApi()
terminal_id = 56 # int | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting check terminal settings information by the terminal ID
    api_response = api_instance.api_v1_reporting_get_check_terminal_settings_terminal_id_get(terminal_id, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ReportingApi->api_v1_reporting_get_check_terminal_settings_terminal_id_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminal_id** | **int**|  | 
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**list[TerminalSettings]**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_reporting_get_check_terminals_get**
> list[TerminalSettings] api_v1_reporting_get_check_terminals_get(account, password)

Used for getting check terminal information

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportingApi()
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting check terminal information
    api_response = api_instance.api_v1_reporting_get_check_terminals_get(account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ReportingApi->api_v1_reporting_get_check_terminals_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**list[TerminalSettings]**](TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_reporting_get_transactions_by_batch_batch_get**
> list[QueryTransaction] api_v1_reporting_get_transactions_by_batch_batch_get(batch, account, password)

Used for getting transactions by batch

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportingApi()
batch = 'batch_example' # str | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting transactions by batch
    api_response = api_instance.api_v1_reporting_get_transactions_by_batch_batch_get(batch, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ReportingApi->api_v1_reporting_get_transactions_by_batch_batch_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | **str**|  | 
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**list[QueryTransaction]**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_reporting_get_transactions_by_date_transaction_date_get**
> list[QueryTransaction] api_v1_reporting_get_transactions_by_date_transaction_date_get(transaction_date, account, password)

Used for getting transactions by date

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.ReportingApi()
transaction_date = '2013-10-20T19:20:30+01:00' # datetime | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting transactions by date
    api_response = api_instance.api_v1_reporting_get_transactions_by_date_transaction_date_get(transaction_date, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling ReportingApi->api_v1_reporting_get_transactions_by_date_transaction_date_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_date** | **datetime**|  | 
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**list[QueryTransaction]**](QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


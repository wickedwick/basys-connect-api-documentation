# swagger_client.VaultApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**api_v1_vault_delete_vault_card_by_id_vault_card_id_post**](VaultApi.md#api_v1_vault_delete_vault_card_by_id_vault_card_id_post) | **POST** /api/v1/Vault/DeleteVaultCardByID/{vaultCardID} | Used for deleting Vault card by Vault card ID
[**api_v1_vault_delete_vault_check_by_id_vault_check_id_post**](VaultApi.md#api_v1_vault_delete_vault_check_by_id_vault_check_id_post) | **POST** /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID} | Used for deleting a Vault check by Vault check ID
[**api_v1_vault_get_vault_record_reference_get**](VaultApi.md#api_v1_vault_get_vault_record_reference_get) | **GET** /api/v1/Vault/GetVaultRecord/{reference} | Used for getting a Vault record by reference
[**api_v1_vault_save_vault_card_vault_id_post**](VaultApi.md#api_v1_vault_save_vault_card_vault_id_post) | **POST** /api/v1/Vault/SaveVaultCard/{vaultID} | Used for saving a Vault card by vauld ID
[**api_v1_vault_save_vault_post**](VaultApi.md#api_v1_vault_save_vault_post) | **POST** /api/v1/Vault/SaveVault | Used for saving a Vault record
[**api_v1_vault_search_vault_post**](VaultApi.md#api_v1_vault_search_vault_post) | **POST** /api/v1/Vault/SearchVault | Used for searching Vault records
[**api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post**](VaultApi.md#api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post) | **POST** /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID} | Used for submitting a check with a Vault check ID
[**api_v1_vault_submit_with_vault_card_id_vault_card_id_post**](VaultApi.md#api_v1_vault_submit_with_vault_card_id_vault_card_id_post) | **POST** /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID} | Used for submitting with a Vault card ID

# **api_v1_vault_delete_vault_card_by_id_vault_card_id_post**
> Response api_v1_vault_delete_vault_card_by_id_vault_card_id_post(vault_card_id, account, password)

Used for deleting Vault card by Vault card ID

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
vault_card_id = 56 # int | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for deleting Vault card by Vault card ID
    api_response = api_instance.api_v1_vault_delete_vault_card_by_id_vault_card_id_post(vault_card_id, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_delete_vault_card_by_id_vault_card_id_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vault_card_id** | **int**|  | 
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

# **api_v1_vault_delete_vault_check_by_id_vault_check_id_post**
> Response api_v1_vault_delete_vault_check_by_id_vault_check_id_post(vault_check_id, account, password)

Used for deleting a Vault check by Vault check ID

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
vault_check_id = 56 # int | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for deleting a Vault check by Vault check ID
    api_response = api_instance.api_v1_vault_delete_vault_check_by_id_vault_check_id_post(vault_check_id, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_delete_vault_check_by_id_vault_check_id_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vault_check_id** | **int**|  | 
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

# **api_v1_vault_get_vault_record_reference_get**
> Record api_v1_vault_get_vault_record_reference_get(reference, account, password)

Used for getting a Vault record by reference

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
reference = 'reference_example' # str | 
account = 'account_example' # str | 
password = 'password_example' # str | 

try:
    # Used for getting a Vault record by reference
    api_response = api_instance.api_v1_vault_get_vault_record_reference_get(reference, account, password)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_get_vault_record_reference_get: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **str**|  | 
 **account** | **str**|  | 
 **password** | **str**|  | 

### Return type

[**Record**](Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_vault_save_vault_card_vault_id_post**
> Response api_v1_vault_save_vault_card_vault_id_post(account, password, vault_id, body=body)

Used for saving a Vault card by vauld ID

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
vault_id = 56 # int | 
body = swagger_client.VaultCreditCard() # VaultCreditCard |  (optional)

try:
    # Used for saving a Vault card by vauld ID
    api_response = api_instance.api_v1_vault_save_vault_card_vault_id_post(account, password, vault_id, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_save_vault_card_vault_id_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **vault_id** | **int**|  | 
 **body** | [**VaultCreditCard**](VaultCreditCard.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_vault_save_vault_post**
> list[Response] api_v1_vault_save_vault_post(account, password, body=body)

Used for saving a Vault record

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
body = swagger_client.Record() # Record |  (optional)

try:
    # Used for saving a Vault record
    api_response = api_instance.api_v1_vault_save_vault_post(account, password, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_save_vault_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **body** | [**Record**](Record.md)|  | [optional] 

### Return type

[**list[Response]**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_vault_search_vault_post**
> list[Record] api_v1_vault_search_vault_post(account, password, body=body)

Used for searching Vault records

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
body = swagger_client.SearchVault() # SearchVault |  (optional)

try:
    # Used for searching Vault records
    api_response = api_instance.api_v1_vault_search_vault_post(account, password, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_search_vault_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **body** | [**SearchVault**](SearchVault.md)|  | [optional] 

### Return type

[**list[Record]**](Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post**
> CheckTransaction api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post(account, password, vault_check_id, body=body)

Used for submitting a check with a Vault check ID

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
vault_check_id = 56 # int | 
body = swagger_client.CheckTransaction() # CheckTransaction |  (optional)

try:
    # Used for submitting a check with a Vault check ID
    api_response = api_instance.api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post(account, password, vault_check_id, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **vault_check_id** | **int**|  | 
 **body** | [**CheckTransaction**](CheckTransaction.md)|  | [optional] 

### Return type

[**CheckTransaction**](CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **api_v1_vault_submit_with_vault_card_id_vault_card_id_post**
> Transaction api_v1_vault_submit_with_vault_card_id_vault_card_id_post(account, password, vault_card_id, body=body)

Used for submitting with a Vault card ID

### Example
```python
from __future__ import print_function
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.VaultApi()
account = 'account_example' # str | 
password = 'password_example' # str | 
vault_card_id = 56 # int | 
body = swagger_client.Transaction() # Transaction |  (optional)

try:
    # Used for submitting with a Vault card ID
    api_response = api_instance.api_v1_vault_submit_with_vault_card_id_vault_card_id_post(account, password, vault_card_id, body=body)
    pprint(api_response)
except ApiException as e:
    print("Exception when calling VaultApi->api_v1_vault_submit_with_vault_card_id_vault_card_id_post: %s\n" % e)
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **str**|  | 
 **password** | **str**|  | 
 **vault_card_id** | **int**|  | 
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**Transaction**](Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)


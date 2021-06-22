# Swagger\Client\VaultApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1VaultDeleteVaultCardByIDVaultCardIDPost**](VaultApi.md#apiv1vaultdeletevaultcardbyidvaultcardidpost) | **POST** /api/v1/Vault/DeleteVaultCardByID/{vaultCardID} | Used for deleting Vault card by Vault card ID
[**apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost**](VaultApi.md#apiv1vaultdeletevaultcheckbyidvaultcheckidpost) | **POST** /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID} | Used for deleting a Vault check by Vault check ID
[**apiV1VaultGetVaultRecordReferenceGet**](VaultApi.md#apiv1vaultgetvaultrecordreferenceget) | **GET** /api/v1/Vault/GetVaultRecord/{reference} | Used for getting a Vault record by reference
[**apiV1VaultSaveVaultCardVaultIDPost**](VaultApi.md#apiv1vaultsavevaultcardvaultidpost) | **POST** /api/v1/Vault/SaveVaultCard/{vaultID} | Used for saving a Vault card by vauld ID
[**apiV1VaultSaveVaultPost**](VaultApi.md#apiv1vaultsavevaultpost) | **POST** /api/v1/Vault/SaveVault | Used for saving a Vault record
[**apiV1VaultSearchVaultPost**](VaultApi.md#apiv1vaultsearchvaultpost) | **POST** /api/v1/Vault/SearchVault | Used for searching Vault records
[**apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost**](VaultApi.md#apiv1vaultsubmitcheckwithvaultcheckidvaultcheckidpost) | **POST** /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID} | Used for submitting a check with a Vault check ID
[**apiV1VaultSubmitWithVaultCardIDVaultCardIDPost**](VaultApi.md#apiv1vaultsubmitwithvaultcardidvaultcardidpost) | **POST** /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID} | Used for submitting with a Vault card ID

# **apiV1VaultDeleteVaultCardByIDVaultCardIDPost**
> \Swagger\Client\Model\Response apiV1VaultDeleteVaultCardByIDVaultCardIDPost($vault_card_id, $account, $password)

Used for deleting Vault card by Vault card ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vault_card_id = 56; // int | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1VaultDeleteVaultCardByIDVaultCardIDPost($vault_card_id, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultDeleteVaultCardByIDVaultCardIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vault_card_id** | **int**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost**
> \Swagger\Client\Model\Response apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost($vault_check_id, $account, $password)

Used for deleting a Vault check by Vault check ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$vault_check_id = 56; // int | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost($vault_check_id, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vault_check_id** | **int**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VaultGetVaultRecordReferenceGet**
> \Swagger\Client\Model\Record apiV1VaultGetVaultRecordReferenceGet($reference, $account, $password)

Used for getting a Vault record by reference

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reference = "reference_example"; // string | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1VaultGetVaultRecordReferenceGet($reference, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultGetVaultRecordReferenceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\Record**](../Model/Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VaultSaveVaultCardVaultIDPost**
> \Swagger\Client\Model\Response apiV1VaultSaveVaultCardVaultIDPost($account, $password, $vault_id, $body)

Used for saving a Vault card by vauld ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$vault_id = 56; // int | 
$body = new \Swagger\Client\Model\VaultCreditCard(); // \Swagger\Client\Model\VaultCreditCard | 

try {
    $result = $apiInstance->apiV1VaultSaveVaultCardVaultIDPost($account, $password, $vault_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultSaveVaultCardVaultIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **vault_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\VaultCreditCard**](../Model/VaultCreditCard.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VaultSaveVaultPost**
> \Swagger\Client\Model\Response[] apiV1VaultSaveVaultPost($account, $password, $body)

Used for saving a Vault record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$body = new \Swagger\Client\Model\Record(); // \Swagger\Client\Model\Record | 

try {
    $result = $apiInstance->apiV1VaultSaveVaultPost($account, $password, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultSaveVaultPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **body** | [**\Swagger\Client\Model\Record**](../Model/Record.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Response[]**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VaultSearchVaultPost**
> \Swagger\Client\Model\Record[] apiV1VaultSearchVaultPost($account, $password, $body)

Used for searching Vault records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$body = new \Swagger\Client\Model\SearchVault(); // \Swagger\Client\Model\SearchVault | 

try {
    $result = $apiInstance->apiV1VaultSearchVaultPost($account, $password, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultSearchVaultPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **body** | [**\Swagger\Client\Model\SearchVault**](../Model/SearchVault.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Record[]**](../Model/Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost**
> \Swagger\Client\Model\CheckTransaction apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost($account, $password, $vault_check_id, $body)

Used for submitting a check with a Vault check ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$vault_check_id = 56; // int | 
$body = new \Swagger\Client\Model\CheckTransaction(); // \Swagger\Client\Model\CheckTransaction | 

try {
    $result = $apiInstance->apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost($account, $password, $vault_check_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **vault_check_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\CheckTransaction**](../Model/CheckTransaction.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckTransaction**](../Model/CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VaultSubmitWithVaultCardIDVaultCardIDPost**
> \Swagger\Client\Model\Transaction apiV1VaultSubmitWithVaultCardIDVaultCardIDPost($account, $password, $vault_card_id, $body)

Used for submitting with a Vault card ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$vault_card_id = 56; // int | 
$body = new \Swagger\Client\Model\Transaction(); // \Swagger\Client\Model\Transaction | 

try {
    $result = $apiInstance->apiV1VaultSubmitWithVaultCardIDVaultCardIDPost($account, $password, $vault_card_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VaultApi->apiV1VaultSubmitWithVaultCardIDVaultCardIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **vault_card_id** | **int**|  |
 **body** | [**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


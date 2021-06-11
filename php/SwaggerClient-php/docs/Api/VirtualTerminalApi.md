# Swagger\Client\VirtualTerminalApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1VirtualTerminalMarkTransactionIDPost**](VirtualTerminalApi.md#apiv1virtualterminalmarktransactionidpost) | **POST** /api/v1/VirtualTerminal/Mark/{transactionID} | Used to Mark a single transaction
[**apiV1VirtualTerminalMarkTransactionsPost**](VirtualTerminalApi.md#apiv1virtualterminalmarktransactionspost) | **POST** /api/v1/VirtualTerminal/MarkTransactions | Used to Mark multiple transactions at once
[**apiV1VirtualTerminalQueryPost**](VirtualTerminalApi.md#apiv1virtualterminalquerypost) | **POST** /api/v1/VirtualTerminal/Query | Used for querying transaction information
[**apiV1VirtualTerminalSubmitCheckPost**](VirtualTerminalApi.md#apiv1virtualterminalsubmitcheckpost) | **POST** /api/v1/VirtualTerminal/SubmitCheck | Used to submit a check transaction
[**apiV1VirtualTerminalSubmitPost**](VirtualTerminalApi.md#apiv1virtualterminalsubmitpost) | **POST** /api/v1/VirtualTerminal/Submit | Used to submit sales and credit transaction types
[**apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost**](VirtualTerminalApi.md#apiv1virtualterminalupdatetransactioninfotransactionidpost) | **POST** /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID} | Used to update transaction information

# **apiV1VirtualTerminalMarkTransactionIDPost**
> \Swagger\Client\Model\Response apiV1VirtualTerminalMarkTransactionIDPost($transaction_id, $account, $password)

Used to Mark a single transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_id = "transaction_id_example"; // string | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1VirtualTerminalMarkTransactionIDPost($transaction_id, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->apiV1VirtualTerminalMarkTransactionIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**|  |
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

# **apiV1VirtualTerminalMarkTransactionsPost**
> \Swagger\Client\Model\Response apiV1VirtualTerminalMarkTransactionsPost($account, $password, $body)

Used to Mark multiple transactions at once

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$body = array("body_example"); // string[] | 

try {
    $result = $apiInstance->apiV1VirtualTerminalMarkTransactionsPost($account, $password, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->apiV1VirtualTerminalMarkTransactionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **body** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VirtualTerminalQueryPost**
> \Swagger\Client\Model\QueryTransaction apiV1VirtualTerminalQueryPost($account, $password, $body)

Used for querying transaction information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$body = new \Swagger\Client\Model\Transaction(); // \Swagger\Client\Model\Transaction | 

try {
    $result = $apiInstance->apiV1VirtualTerminalQueryPost($account, $password, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->apiV1VirtualTerminalQueryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **body** | [**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\QueryTransaction**](../Model/QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VirtualTerminalSubmitCheckPost**
> \Swagger\Client\Model\CheckTransaction apiV1VirtualTerminalSubmitCheckPost($account, $password, $body)

Used to submit a check transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$body = new \Swagger\Client\Model\CheckTransaction(); // \Swagger\Client\Model\CheckTransaction | 

try {
    $result = $apiInstance->apiV1VirtualTerminalSubmitCheckPost($account, $password, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->apiV1VirtualTerminalSubmitCheckPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **body** | [**\Swagger\Client\Model\CheckTransaction**](../Model/CheckTransaction.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\CheckTransaction**](../Model/CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VirtualTerminalSubmitPost**
> \Swagger\Client\Model\Transaction apiV1VirtualTerminalSubmitPost($account, $password, $body)

Used to submit sales and credit transaction types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$body = new \Swagger\Client\Model\Transaction(); // \Swagger\Client\Model\Transaction | 

try {
    $result = $apiInstance->apiV1VirtualTerminalSubmitPost($account, $password, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->apiV1VirtualTerminalSubmitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **body** | [**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Transaction**](../Model/Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost**
> \Swagger\Client\Model\Response apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost($account, $password, $transaction_id, $body)

Used to update transaction information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\VirtualTerminalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$transaction_id = "transaction_id_example"; // string | 
$body = new \Swagger\Client\Model\UpdateTransactionInfo(); // \Swagger\Client\Model\UpdateTransactionInfo | 

try {
    $result = $apiInstance->apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost($account, $password, $transaction_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualTerminalApi->apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **transaction_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\UpdateTransactionInfo**](../Model/UpdateTransactionInfo.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


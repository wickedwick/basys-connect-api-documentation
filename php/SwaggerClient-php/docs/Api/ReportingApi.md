# Swagger\Client\ReportingApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1ReportingGetBatchesByDateBatchDateGet**](ReportingApi.md#apiv1reportinggetbatchesbydatebatchdateget) | **GET** /api/v1/Reporting/GetBatchesByDate/{batchDate} | Used for getting batches by date
[**apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet**](ReportingApi.md#apiv1reportinggetcheckterminalsettingsbysecseccodeget) | **GET** /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode} | Used for getting check terminal settings information filtered by SEC code
[**apiV1ReportingGetCheckTerminalSettingsTerminalIDGet**](ReportingApi.md#apiv1reportinggetcheckterminalsettingsterminalidget) | **GET** /api/v1/Reporting/GetCheckTerminalSettings/{terminalID} | Used for getting check terminal settings information by the terminal ID
[**apiV1ReportingGetCheckTerminalsGet**](ReportingApi.md#apiv1reportinggetcheckterminalsget) | **GET** /api/v1/Reporting/GetCheckTerminals | Used for getting check terminal information
[**apiV1ReportingGetTransactionsByBatchBatchGet**](ReportingApi.md#apiv1reportinggettransactionsbybatchbatchget) | **GET** /api/v1/Reporting/GetTransactionsByBatch/{batch} | Used for getting transactions by batch
[**apiV1ReportingGetTransactionsByDateTransactionDateGet**](ReportingApi.md#apiv1reportinggettransactionsbydatetransactiondateget) | **GET** /api/v1/Reporting/GetTransactionsByDate/{transactionDate} | Used for getting transactions by date

# **apiV1ReportingGetBatchesByDateBatchDateGet**
> \Swagger\Client\Model\Batch[] apiV1ReportingGetBatchesByDateBatchDateGet($batch_date, $account, $password)

Used for getting batches by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1ReportingGetBatchesByDateBatchDateGet($batch_date, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->apiV1ReportingGetBatchesByDateBatchDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_date** | **\DateTime**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\Batch[]**](../Model/Batch.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet**
> \Swagger\Client\Model\TerminalSettings[] apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet($sec_code, $account, $password)

Used for getting check terminal settings information filtered by SEC code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sec_code = "sec_code_example"; // string | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet($sec_code, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sec_code** | **string**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\TerminalSettings[]**](../Model/TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ReportingGetCheckTerminalSettingsTerminalIDGet**
> \Swagger\Client\Model\TerminalSettings[] apiV1ReportingGetCheckTerminalSettingsTerminalIDGet($terminal_id, $account, $password)

Used for getting check terminal settings information by the terminal ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$terminal_id = 56; // int | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1ReportingGetCheckTerminalSettingsTerminalIDGet($terminal_id, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->apiV1ReportingGetCheckTerminalSettingsTerminalIDGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **terminal_id** | **int**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\TerminalSettings[]**](../Model/TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ReportingGetCheckTerminalsGet**
> \Swagger\Client\Model\TerminalSettings[] apiV1ReportingGetCheckTerminalsGet($account, $password)

Used for getting check terminal information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1ReportingGetCheckTerminalsGet($account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->apiV1ReportingGetCheckTerminalsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\TerminalSettings[]**](../Model/TerminalSettings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ReportingGetTransactionsByBatchBatchGet**
> \Swagger\Client\Model\QueryTransaction[] apiV1ReportingGetTransactionsByBatchBatchGet($batch, $account, $password)

Used for getting transactions by batch

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch = "batch_example"; // string | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1ReportingGetTransactionsByBatchBatchGet($batch, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->apiV1ReportingGetTransactionsByBatchBatchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch** | **string**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\QueryTransaction[]**](../Model/QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiV1ReportingGetTransactionsByDateTransactionDateGet**
> \Swagger\Client\Model\QueryTransaction[] apiV1ReportingGetTransactionsByDateTransactionDateGet($transaction_date, $account, $password)

Used for getting transactions by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$transaction_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1ReportingGetTransactionsByDateTransactionDateGet($transaction_date, $account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->apiV1ReportingGetTransactionsByDateTransactionDateGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_date** | **\DateTime**|  |
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\QueryTransaction[]**](../Model/QueryTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


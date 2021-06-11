# Swagger\Client\AccountApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1AccountGetAccountSettingsGet**](AccountApi.md#apiv1accountgetaccountsettingsget) | **GET** /api/v1/Account/GetAccountSettings | Used for getting account settings information

# **apiV1AccountGetAccountSettingsGet**
> \Swagger\Client\Model\Settings apiV1AccountGetAccountSettingsGet($account, $password)

Used for getting account settings information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->apiV1AccountGetAccountSettingsGet($account, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->apiV1AccountGetAccountSettingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |

### Return type

[**\Swagger\Client\Model\Settings**](../Model/Settings.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


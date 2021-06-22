# Swagger\Client\CommunicationApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1CommunicationEmailReceiptPost**](CommunicationApi.md#apiv1communicationemailreceiptpost) | **POST** /api/v1/Communication/EmailReceipt | Used for sending an email receipt of a transaction

# **apiV1CommunicationEmailReceiptPost**
> \Swagger\Client\Model\Response apiV1CommunicationEmailReceiptPost($account, $password, $body)

Used for sending an email receipt of a transaction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CommunicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account = "account_example"; // string | 
$password = "password_example"; // string | 
$body = new \Swagger\Client\Model\EmailReceipt(); // \Swagger\Client\Model\EmailReceipt | 

try {
    $result = $apiInstance->apiV1CommunicationEmailReceiptPost($account, $password, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationApi->apiV1CommunicationEmailReceiptPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **string**|  |
 **password** | **string**|  |
 **body** | [**\Swagger\Client\Model\EmailReceipt**](../Model/EmailReceipt.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Response**](../Model/Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


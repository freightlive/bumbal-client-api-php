# BumbalClient\CommunicationApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**triggerMessageCommunication**](CommunicationApi.md#triggerMessageCommunication) | **POST** /communication/trigger-message | Trigger Message to Communication


# **triggerMessageCommunication**
> \BumbalClient\BumbalClient\Model\ApiResponse triggerMessageCommunication($activity_id, $message_type, $check_preference)

Trigger Message to Communication

Trigger Message to Communication

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\CommunicationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 56; // int | ActivityId
$message_type = "message_type_example"; // string | MessageType
$check_preference = true; // bool | checkPreference

try {
    $result = $apiInstance->triggerMessageCommunication($activity_id, $message_type, $check_preference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationApi->triggerMessageCommunication: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ActivityId |
 **message_type** | **string**| MessageType |
 **check_preference** | **bool**| checkPreference |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml, multipart/form-data
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Bumbal\Client\WorkerApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addActionToWorkerStack**](WorkerApi.md#addActionToWorkerStack) | **POST** /worker/add-action-to-stack | Add Action To Worker Stack


# **addActionToWorkerStack**
> \Bumbal\Client\Model\ApiResponse addActionToWorkerStack()

Add Action To Worker Stack

Add Action To Worker Stack

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\WorkerApi();

try {
    $result = $api_instance->addActionToWorkerStack();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkerApi->addActionToWorkerStack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


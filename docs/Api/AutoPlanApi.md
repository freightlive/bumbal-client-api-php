# BumbalClient\AutoPlanApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autoPlanCheckProgress**](AutoPlanApi.md#autoPlanCheckProgress) | **GET** /auto-plan/check-progress/{processUUID} | Check Progress on a Auto Plan Process
[**autoPlanFinish**](AutoPlanApi.md#autoPlanFinish) | **POST** /auto-plan/finish | Finish a Auto Plan Process
[**autoPlanStart**](AutoPlanApi.md#autoPlanStart) | **POST** /auto-plan/start | Start a Auto Plan Process


# **autoPlanCheckProgress**
> \BumbalClient\BumbalClient\Model\ApiResponse autoPlanCheckProgress($process_uuid)

Check Progress on a Auto Plan Process

Check Progress on a Auto Plan Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AutoPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$process_uuid = 789; // int | UUID of the process to check the progress of

try {
    $result = $apiInstance->autoPlanCheckProgress($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoPlanApi->autoPlanCheckProgress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **process_uuid** | **int**| UUID of the process to check the progress of |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPlanFinish**
> \BumbalClient\BumbalClient\Model\ApiResponse autoPlanFinish()

Finish a Auto Plan Process

Finish a Auto Plan Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AutoPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->autoPlanFinish();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoPlanApi->autoPlanFinish: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **autoPlanStart**
> \BumbalClient\BumbalClient\Model\ApiResponse autoPlanStart()

Start a Auto Plan Process

Start a Auto Plan Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AutoPlanApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->autoPlanStart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoPlanApi->autoPlanStart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


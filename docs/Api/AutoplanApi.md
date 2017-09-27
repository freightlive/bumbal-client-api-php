# BumbalClient\AutoplanApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**autoPlanCheckProgress**](AutoplanApi.md#autoPlanCheckProgress) | **GET** /auto-plan/check-progress/{processUUID} | Check Progress on a Auto Plan Process
[**autoPlanFinish**](AutoplanApi.md#autoPlanFinish) | **POST** /auto-plan/finish | Finish a Auto Plan Process
[**autoPlanStart**](AutoplanApi.md#autoPlanStart) | **POST** /auto-plan/start | Start a Auto Plan Process


# **autoPlanCheckProgress**
> \BumbalClient\BumbalClient\Model\ApiResponse autoPlanCheckProgress($process_uuid)

Check Progress on a Auto Plan Process

Check Progress on a Auto Plan Process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AutoplanApi();
$process_uuid = 789; // int | UUID of the process to check the progress of

try {
    $result = $api_instance->autoPlanCheckProgress($process_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoplanApi->autoPlanCheckProgress: ', $e->getMessage(), PHP_EOL;
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
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AutoplanApi();

try {
    $result = $api_instance->autoPlanFinish();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoplanApi->autoPlanFinish: ', $e->getMessage(), PHP_EOL;
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
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AutoplanApi();

try {
    $result = $api_instance->autoPlanStart();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutoplanApi->autoPlanStart: ', $e->getMessage(), PHP_EOL;
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


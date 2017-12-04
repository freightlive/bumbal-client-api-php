# BumbalClient\TrackTraceApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveActivityStatus**](TrackTraceApi.md#retrieveActivityStatus) | **GET** /track-trace/retrieve-activity-status/{activityId} | Retrieve Activity Status
[**retrieveRouteStatus**](TrackTraceApi.md#retrieveRouteStatus) | **GET** /track-trace/retrieve-route-status/{routeId} | Retrieve Route Status
[**trackTraceCalculateETA**](TrackTraceApi.md#trackTraceCalculateETA) | **GET** /track-trace/calculate-eta/{activityId} | Calculate ETA for Activity


# **retrieveActivityStatus**
> \BumbalClient\BumbalClient\Model\ApiResponse retrieveActivityStatus($activity_id)

Retrieve Activity Status

Retrieve Activity Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\TrackTraceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 789; // int | ID of the activity to retrieve

try {
    $result = $apiInstance->retrieveActivityStatus($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackTraceApi->retrieveActivityStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to retrieve |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRouteStatus**
> \BumbalClient\BumbalClient\Model\ApiResponse retrieveRouteStatus($route_id)

Retrieve Route Status

Retrieve Route Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\TrackTraceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$route_id = 789; // int | ID of the route to retrieve

try {
    $result = $apiInstance->retrieveRouteStatus($route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackTraceApi->retrieveRouteStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of the route to retrieve |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trackTraceCalculateETA**
> \BumbalClient\BumbalClient\Model\ApiResponse trackTraceCalculateETA($activity_id)

Calculate ETA for Activity

Calculate ETA for Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\TrackTraceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 789; // int | ID of the activity to calculate ETA for

try {
    $result = $apiInstance->trackTraceCalculateETA($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackTraceApi->trackTraceCalculateETA: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to calculate ETA for |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


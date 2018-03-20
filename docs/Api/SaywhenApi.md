# BumbalClient\SaywhenApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**saywhenRetrievePortalURL**](SaywhenApi.md#saywhenRetrievePortalURL) | **GET** /saywhen/retrieve-portal-url/{activityId} | Retrieve SayWhen Portal URL
[**saywhenRetrieveStatus**](SaywhenApi.md#saywhenRetrieveStatus) | **GET** /saywhen/retrieve-status/{activityId} | Retrieve SayWhen Status


# **saywhenRetrievePortalURL**
> \BumbalClient\BumbalClient\Model\ApiResponse saywhenRetrievePortalURL($activity_id)

Retrieve SayWhen Portal URL

Retrieve SayWhen Portal URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\SaywhenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 789; // int | ID of the activity to retrieve portal url for

try {
    $result = $apiInstance->saywhenRetrievePortalURL($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaywhenApi->saywhenRetrievePortalURL: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to retrieve portal url for |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saywhenRetrieveStatus**
> \BumbalClient\BumbalClient\Model\SayWhenVisitModel saywhenRetrieveStatus($activity_id)

Retrieve SayWhen Status

Retrieve SayWhen Status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\SaywhenApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = 789; // int | ID of the activity to retrieve status for

try {
    $result = $apiInstance->saywhenRetrieveStatus($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SaywhenApi->saywhenRetrieveStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activity_id** | **int**| ID of the activity to retrieve status for |

### Return type

[**\BumbalClient\BumbalClient\Model\SayWhenVisitModel**](../Model/SayWhenVisitModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


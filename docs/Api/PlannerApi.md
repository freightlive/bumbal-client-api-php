# BumbalClient\PlannerApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**plannerAddActivitiesToRoute**](PlannerApi.md#plannerAddActivitiesToRoute) | **POST** /planner/add-activities-to-route | Add Activities To Route
[**plannerCalculateDriveTime**](PlannerApi.md#plannerCalculateDriveTime) | **POST** /planner/calculate-drive-time | Calculate Drive Time
[**plannerChangeActivitySequence**](PlannerApi.md#plannerChangeActivitySequence) | **POST** /planner/change-activity-sequence | Change Activity Sequence
[**plannerLockActivities**](PlannerApi.md#plannerLockActivities) | **POST** /planner/lock-activities | Lock Activities on Route
[**plannerRemoveActivitiesFromRoute**](PlannerApi.md#plannerRemoveActivitiesFromRoute) | **POST** /planner/remove-activities-from-route | Remove Activities From Route


# **plannerAddActivitiesToRoute**
> \BumbalClient\Model\ApiResponse plannerAddActivitiesToRoute()

Add Activities To Route

Add Activities To Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerAddActivitiesToRoute();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerAddActivitiesToRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerCalculateDriveTime**
> \BumbalClient\Model\ApiResponse plannerCalculateDriveTime()

Calculate Drive Time

Calculate Drive Time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerCalculateDriveTime();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerCalculateDriveTime: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerChangeActivitySequence**
> \BumbalClient\Model\ApiResponse plannerChangeActivitySequence()

Change Activity Sequence

Change Activity Sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerChangeActivitySequence();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerChangeActivitySequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerLockActivities**
> \BumbalClient\Model\ApiResponse plannerLockActivities()

Lock Activities on Route

Lock Activities on Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerLockActivities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerLockActivities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerRemoveActivitiesFromRoute**
> \BumbalClient\Model\ApiResponse plannerRemoveActivitiesFromRoute()

Remove Activities From Route

Remove Activities From Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerRemoveActivitiesFromRoute();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerRemoveActivitiesFromRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


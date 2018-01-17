# BumbalClient\PlannerApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**plannerAddActivitiesToRoute**](PlannerApi.md#plannerAddActivitiesToRoute) | **POST** /planner/add-activities-to-route | Add Activities To Route
[**plannerAutoPlan**](PlannerApi.md#plannerAutoPlan) | **POST** /planner/auto-plan | Plan a certain activity in any fitting route
[**plannerAutoPlanResult**](PlannerApi.md#plannerAutoPlanResult) | **POST** /planner/auto-plan-result | Fetch current result for a auto plan Request. This could be done, in progress or cancelled.
[**plannerCalculateDriveTime**](PlannerApi.md#plannerCalculateDriveTime) | **POST** /planner/calculate-drive-time | Calculate Drive Time
[**plannerChangeActivitySequence**](PlannerApi.md#plannerChangeActivitySequence) | **POST** /planner/change-activity-sequence | Change Activity Sequence
[**plannerCheckAvailability**](PlannerApi.md#plannerCheckAvailability) | **POST** /planner/check-availability | check availability in planning for a certain set of activity properties
[**plannerCheckAvailabilityResult**](PlannerApi.md#plannerCheckAvailabilityResult) | **POST** /planner/check-availability-result | Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.
[**plannerLockActivities**](PlannerApi.md#plannerLockActivities) | **POST** /planner/lock-activities | Lock Activities on Route
[**plannerRemoveActivitiesFromRoute**](PlannerApi.md#plannerRemoveActivitiesFromRoute) | **POST** /planner/remove-activities-from-route | Remove Activities From Route
[**plannerStartAutoPlan**](PlannerApi.md#plannerStartAutoPlan) | **POST** /planner/start-auto-plan | start auto plan for a known uuid
[**plannerStartCheckAvailability**](PlannerApi.md#plannerStartCheckAvailability) | **POST** /planner/start-check-availability | start check availability for a known uuid


# **plannerAddActivitiesToRoute**
> \BumbalClient\Model\ApiResponse plannerAddActivitiesToRoute()

Add Activities To Route

Add Activities To Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerAutoPlan**
> \BumbalClient\Model\ApiResponse plannerAutoPlan()

Plan a certain activity in any fitting route

Plan a certain activity in any fitting route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerAutoPlan();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerAutoPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerAutoPlanResult**
> \BumbalClient\Model\ApiResponse plannerAutoPlanResult()

Fetch current result for a auto plan Request. This could be done, in progress or cancelled.

Fetch current result for a auto plan Request. This could be done, in progress or cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerAutoPlanResult();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerAutoPlanResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

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

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

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

[api_key](../../README.md#api_key)

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

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerCheckAvailability**
> \BumbalClient\Model\ApiResponse plannerCheckAvailability($arguments)

check availability in planning for a certain set of activity properties

check availability in planning for a certain set of activity properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $result = $api_instance->plannerCheckAvailability($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerCheckAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerCheckAvailabilityResult**
> \BumbalClient\Model\ApiResponse plannerCheckAvailabilityResult()

Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.

Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();

try {
    $result = $api_instance->plannerCheckAvailabilityResult();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerCheckAvailabilityResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

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

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

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

[api_key](../../README.md#api_key)

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

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

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

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerStartAutoPlan**
> \BumbalClient\Model\ApiResponse plannerStartAutoPlan($arguments)

start auto plan for a known uuid

start auto plan action for a set of activity and route filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\AutoPlanArguments(); // \BumbalClient\Model\AutoPlanArguments | Request Arguments

try {
    $result = $api_instance->plannerStartAutoPlan($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerStartAutoPlan: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AutoPlanArguments**](../Model/AutoPlanArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **plannerStartCheckAvailability**
> \BumbalClient\Model\ApiResponse plannerStartCheckAvailability($arguments)

start check availability for a known uuid

check availability in planning for a certain set of activity properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\PlannerApi();
$arguments = new \BumbalClient\Model\CheckAvailabilityArguments(); // \BumbalClient\Model\CheckAvailabilityArguments | Request Arguments

try {
    $result = $api_instance->plannerStartCheckAvailability($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlannerApi->plannerStartCheckAvailability: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\CheckAvailabilityArguments**](../Model/CheckAvailabilityArguments.md)| Request Arguments |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


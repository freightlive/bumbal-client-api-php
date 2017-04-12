# Bumbal\Client\RouteApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRoute**](RouteApi.md#createRoute) | **POST** /route | Add a new Route
[**deleteRoute**](RouteApi.md#deleteRoute) | **DELETE** /route/{routeId} | Delete an Route
[**retrieveListRoute**](RouteApi.md#retrieveListRoute) | **PUT** /route | Retrieve List of Routes
[**retrieveRoute**](RouteApi.md#retrieveRoute) | **GET** /route/{routeId} | Retrieve a Route
[**updateRoute**](RouteApi.md#updateRoute) | **PUT** /route/{routeId} | Update a Route


# **createRoute**
> \Bumbal\Client\Model\ApiResponse createRoute($body)

Add a new Route

Add a new Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RouteApi();
$body = new \Bumbal\Client\Model\RouteModel(); // \Bumbal\Client\Model\RouteModel | Route object that needs to be created

try {
    $result = $api_instance->createRoute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->createRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bumbal\Client\Model\RouteModel**](../Model/\Bumbal\Client\Model\RouteModel.md)| Route object that needs to be created | [optional]

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoute**
> \Bumbal\Client\Model\ApiResponse deleteRoute($route_id, $cancel_activities)

Delete an Route

Delete an Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RouteApi();
$route_id = 789; // int | ID of route to update
$cancel_activities = true; // bool | Cancel activities on Route

try {
    $result = $api_instance->deleteRoute($route_id, $cancel_activities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->deleteRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of route to update |
 **cancel_activities** | **bool**| Cancel activities on Route |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListRoute**
> \Bumbal\Client\Model\RouteModel[] retrieveListRoute($arguments)

Retrieve List of Routes

Retrieve List of Routes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RouteApi();
$arguments = new \Bumbal\Client\Model\RouteRetrieveListArguments(); // \Bumbal\Client\Model\RouteRetrieveListArguments | Route RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRoute($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->retrieveListRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\Bumbal\Client\Model\RouteRetrieveListArguments**](../Model/\Bumbal\Client\Model\RouteRetrieveListArguments.md)| Route RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\RouteModel[]**](../Model/RouteModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRoute**
> \Bumbal\Client\Model\RouteModel retrieveRoute($route_id, $include_address_info, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations)

Retrieve a Route

Retrieve an Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RouteApi();
$route_id = 789; // int | ID of route to retrieve
$include_address_info = true; // bool | Include Address info
$include_route_status = true; // bool | Include Status Name
$include_route_tags = true; // bool | Include Tags
$include_driver_info = true; // bool | Include Driver info
$include_equipment_info_car = true; // bool | Include Equipment info car
$include_gps_locations = true; // bool | Include GPS locations

try {
    $result = $api_instance->retrieveRoute($route_id, $include_address_info, $include_route_status, $include_route_tags, $include_driver_info, $include_equipment_info_car, $include_gps_locations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->retrieveRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of route to retrieve |
 **include_address_info** | **bool**| Include Address info |
 **include_route_status** | **bool**| Include Status Name |
 **include_route_tags** | **bool**| Include Tags |
 **include_driver_info** | **bool**| Include Driver info |
 **include_equipment_info_car** | **bool**| Include Equipment info car |
 **include_gps_locations** | **bool**| Include GPS locations |

### Return type

[**\Bumbal\Client\Model\RouteModel**](../Model/RouteModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRoute**
> \Bumbal\Client\Model\ApiResponse updateRoute($route_id)

Update a Route

Update an Route

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RouteApi();
$route_id = 789; // int | ID of route to update

try {
    $result = $api_instance->updateRoute($route_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RouteApi->updateRoute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **route_id** | **int**| ID of route to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# BumbalClient\EquipmentApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createEquipment**](EquipmentApi.md#createEquipment) | **POST** /equipment | Add a new Equipment
[**deleteEquipment**](EquipmentApi.md#deleteEquipment) | **DELETE** /equipment/{equipmentId} | Delete an Equipment
[**retrieveEquipment**](EquipmentApi.md#retrieveEquipment) | **GET** /equipment/{equipmentId} | Retrieve a Equipment
[**retrieveListEquipment**](EquipmentApi.md#retrieveListEquipment) | **PUT** /equipment | Retrieve List of Equipment
[**updateEquipment**](EquipmentApi.md#updateEquipment) | **PUT** /equipment/{equipmentId} | Update a Equipment


# **createEquipment**
> \Bumbal\Client\Model\ApiResponse createEquipment($body)

Add a new Equipment

Add a new Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\EquipmentApi();
$body = new \Bumbal\Client\Model\EquipmentModel(); // \Bumbal\Client\Model\EquipmentModel | Equipment object that needs to be created

try {
    $result = $api_instance->createEquipment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->createEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bumbal\Client\Model\EquipmentModel**](../Model/\Bumbal\Client\Model\EquipmentModel.md)| Equipment object that needs to be created | [optional]

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEquipment**
> \Bumbal\Client\Model\ApiResponse deleteEquipment($equipment_id)

Delete an Equipment

Delete an Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\EquipmentApi();
$equipment_id = 789; // int | ID of equipment to update

try {
    $result = $api_instance->deleteEquipment($equipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->deleteEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **equipment_id** | **int**| ID of equipment to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveEquipment**
> \Bumbal\Client\Model\EquipmentModel retrieveEquipment($equipment_id)

Retrieve a Equipment

Retrieve an Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\EquipmentApi();
$equipment_id = 789; // int | ID of equipment to retrieve

try {
    $result = $api_instance->retrieveEquipment($equipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->retrieveEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **equipment_id** | **int**| ID of equipment to retrieve |

### Return type

[**\Bumbal\Client\Model\EquipmentModel**](../Model/EquipmentModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListEquipment**
> \Bumbal\Client\Model\EquipmentModel[] retrieveListEquipment($arguments)

Retrieve List of Equipment

Retrieve List of Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\EquipmentApi();
$arguments = new \Bumbal\Client\Model\EquipmentRetrieveListArguments(); // \Bumbal\Client\Model\EquipmentRetrieveListArguments | Equipment RetrieveList Arguments

try {
    $result = $api_instance->retrieveListEquipment($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->retrieveListEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\Bumbal\Client\Model\EquipmentRetrieveListArguments**](../Model/\Bumbal\Client\Model\EquipmentRetrieveListArguments.md)| Equipment RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\EquipmentModel[]**](../Model/EquipmentModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEquipment**
> \Bumbal\Client\Model\ApiResponse updateEquipment($equipment_id)

Update a Equipment

Update an Equipment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\EquipmentApi();
$equipment_id = 789; // int | ID of equipment to update

try {
    $result = $api_instance->updateEquipment($equipment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EquipmentApi->updateEquipment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **equipment_id** | **int**| ID of equipment to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


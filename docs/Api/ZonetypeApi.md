# BumbalClient\ZonetypeApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createZoneType**](ZonetypeApi.md#createZoneType) | **POST** /zone-type | Add a new Zone type
[**deleteZoneType**](ZonetypeApi.md#deleteZoneType) | **DELETE** /zone-type/{zoneTypeId} | Delete a Zone type
[**retrieveListZoneType**](ZonetypeApi.md#retrieveListZoneType) | **PUT** /zone-type | Retrieve List of Zone types
[**retrieveZoneType**](ZonetypeApi.md#retrieveZoneType) | **GET** /zone-type/{zoneTypeId} | Retrieve a Zone type
[**setZoneType**](ZonetypeApi.md#setZoneType) | **POST** /zone-type/set | Set (create or update) Zone type
[**updateZoneType**](ZonetypeApi.md#updateZoneType) | **PUT** /zone-type/{zoneTypeId} | Update a Zone type


# **createZoneType**
> \BumbalClient\Model\ApiResponse createZoneType($body)

Add a new Zone type

Add a new Zone type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZonetypeApi();
$body = new \BumbalClient\Model\ZoneTypeModel(); // \BumbalClient\Model\ZoneTypeModel | Zone type object that needs to be created

try {
    $result = $api_instance->createZoneType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonetypeApi->createZoneType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ZoneTypeModel**](../Model/ZoneTypeModel.md)| Zone type object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteZoneType**
> \BumbalClient\Model\ApiResponse deleteZoneType($zone_type_id)

Delete a Zone type

Delete a Zone type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZonetypeApi();
$zone_type_id = 789; // int | ID of zone type to delete

try {
    $result = $api_instance->deleteZoneType($zone_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonetypeApi->deleteZoneType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_type_id** | **int**| ID of zone type to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListZoneType**
> \BumbalClient\Model\ZoneTypeModel[] retrieveListZoneType($arguments)

Retrieve List of Zone types

Retrieve List of Zone

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZonetypeApi();
$arguments = new \BumbalClient\Model\ZoneTypeRetrieveListArguments(); // \BumbalClient\Model\ZoneTypeRetrieveListArguments | Zone types RetrieveList Arguments

try {
    $result = $api_instance->retrieveListZoneType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonetypeApi->retrieveListZoneType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\ZoneTypeRetrieveListArguments**](../Model/ZoneTypeRetrieveListArguments.md)| Zone types RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\ZoneTypeModel[]**](../Model/ZoneTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveZoneType**
> \BumbalClient\Model\ZoneTypeModel retrieveZoneType($zone_type_id, $include_object_types)

Retrieve a Zone type

Retrieve an Zone type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZonetypeApi();
$zone_type_id = 789; // int | ID of zone type to retrieve
$include_object_types = true; // bool | Show the text value of the status

try {
    $result = $api_instance->retrieveZoneType($zone_type_id, $include_object_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonetypeApi->retrieveZoneType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_type_id** | **int**| ID of zone type to retrieve |
 **include_object_types** | **bool**| Show the text value of the status | [optional]

### Return type

[**\BumbalClient\Model\ZoneTypeModel**](../Model/ZoneTypeModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setZoneType**
> \BumbalClient\Model\ApiResponse setZoneType($body)

Set (create or update) Zone type

Set (create or update) Zone type. If a zone type with same name is found in Bumbal, the zone type id is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZonetypeApi();
$body = new \BumbalClient\Model\ZoneTypeModel(); // \BumbalClient\Model\ZoneTypeModel | zone type data

try {
    $result = $api_instance->setZoneType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonetypeApi->setZoneType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\ZoneTypeModel**](../Model/ZoneTypeModel.md)| zone type data | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateZoneType**
> \BumbalClient\Model\ApiResponse updateZoneType($zone_type_id)

Update a Zone type

Update a Zone type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ZonetypeApi();
$zone_type_id = 789; // int | ID of zone type to update

try {
    $result = $api_instance->updateZoneType($zone_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ZonetypeApi->updateZoneType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zone_type_id** | **int**| ID of zone type to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


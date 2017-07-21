# BumbalClient\AddressApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddress**](AddressApi.md#createAddress) | **POST** /address | Add a new Address
[**deleteAddress**](AddressApi.md#deleteAddress) | **DELETE** /address/{addressId} | Delete an Address
[**retrieveAddress**](AddressApi.md#retrieveAddress) | **GET** /address/{addressId} | Retrieve a Address
[**retrieveListAddress**](AddressApi.md#retrieveListAddress) | **PUT** /address | Retrieve List of Addresses
[**updateAddress**](AddressApi.md#updateAddress) | **PUT** /address/{addressId} | Update a Address


# **createAddress**
> \BumbalClient\Model\ApiResponse createAddress($body)

Add a new Address

Add a new Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$body = new \BumbalClient\Model\AddressModel(); // \BumbalClient\Model\AddressModel | Address object that needs to be created

try {
    $result = $api_instance->createAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->createAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\AddressModel**](../Model/\BumbalClient\Model\AddressModel.md)| Address object that needs to be created | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddress**
> \BumbalClient\Model\ApiResponse deleteAddress($address_id)

Delete an Address

Delete an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$address_id = 789; // int | ID of address to update

try {
    $result = $api_instance->deleteAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of address to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAddress**
> \BumbalClient\Model\AddressModel retrieveAddress($address_id)

Retrieve a Address

Retrieve an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$address_id = 789; // int | ID of address to retrieve

try {
    $result = $api_instance->retrieveAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->retrieveAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of address to retrieve |

### Return type

[**\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAddress**
> \BumbalClient\Model\AddressModel[] retrieveListAddress($arguments)

Retrieve List of Addresses

Retrieve List of Addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$arguments = new \BumbalClient\Model\AddressRetrieveListArguments(); // \BumbalClient\Model\AddressRetrieveListArguments | Address RetrieveList Arguments

try {
    $result = $api_instance->retrieveListAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->retrieveListAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\AddressRetrieveListArguments**](../Model/\BumbalClient\Model\AddressRetrieveListArguments.md)| Address RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\AddressModel[]**](../Model/AddressModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddress**
> \BumbalClient\Model\ApiResponse updateAddress($address_id)

Update a Address

Update an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\AddressApi();
$address_id = 789; // int | ID of address to update

try {
    $result = $api_instance->updateAddress($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->updateAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of address to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


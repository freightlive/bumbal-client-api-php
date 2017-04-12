# Bumbal\Client\AddressApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAddress**](AddressApi.md#createAddress) | **POST** /address | Add a new Address
[**deleteAddress**](AddressApi.md#deleteAddress) | **DELETE** /address/{addressId} | Delete an Address
[**retrieveAddress**](AddressApi.md#retrieveAddress) | **GET** /address/{addressId} | Retrieve a Address
[**retrieveListAddress**](AddressApi.md#retrieveListAddress) | **PUT** /address | Retrieve List of Addresses
[**updateAddress**](AddressApi.md#updateAddress) | **PUT** /address/{addressId} | Update a Address


# **createAddress**
> \Bumbal\Client\Model\ApiResponse createAddress($body)

Add a new Address

Add a new Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\AddressApi();
$body = new \Bumbal\Client\Model\AddressModel(); // \Bumbal\Client\Model\AddressModel | Address object that needs to be created

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
 **body** | [**\Bumbal\Client\Model\AddressModel**](../Model/\Bumbal\Client\Model\AddressModel.md)| Address object that needs to be created | [optional]

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddress**
> \Bumbal\Client\Model\ApiResponse deleteAddress($address_id)

Delete an Address

Delete an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\AddressApi();
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

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAddress**
> \Bumbal\Client\Model\AddressModel retrieveAddress($address_id)

Retrieve a Address

Retrieve an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\AddressApi();
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

[**\Bumbal\Client\Model\AddressModel**](../Model/AddressModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAddress**
> \Bumbal\Client\Model\AddressModel[] retrieveListAddress($arguments)

Retrieve List of Addresses

Retrieve List of Addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\AddressApi();
$arguments = new \Bumbal\Client\Model\AddressRetrieveListArguments(); // \Bumbal\Client\Model\AddressRetrieveListArguments | Address RetrieveList Arguments

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
 **arguments** | [**\Bumbal\Client\Model\AddressRetrieveListArguments**](../Model/\Bumbal\Client\Model\AddressRetrieveListArguments.md)| Address RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\AddressModel[]**](../Model/AddressModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddress**
> \Bumbal\Client\Model\ApiResponse updateAddress($address_id)

Update a Address

Update an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\AddressApi();
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

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


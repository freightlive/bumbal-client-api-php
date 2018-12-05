# BumbalClient\AddressApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAddress**](AddressApi.md#deleteAddress) | **DELETE** /address/{addressId} | Delete an Address
[**retrieveAddress**](AddressApi.md#retrieveAddress) | **GET** /address/{addressId} | Retrieve a Address
[**retrieveListAddress**](AddressApi.md#retrieveListAddress) | **PUT** /address | Retrieve List of Addresses
[**setAddress**](AddressApi.md#setAddress) | **POST** /address/set | Add a new Address


# **deleteAddress**
> \BumbalClient\BumbalClient\Model\ApiResponse deleteAddress($address_id)

Delete an Address

Delete an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 789; // int | ID of address to update

try {
    $result = $apiInstance->deleteAddress($address_id);
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

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAddress**
> \BumbalClient\BumbalClient\Model\AddressModel retrieveAddress($address_id)

Retrieve a Address

Retrieve an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$address_id = 789; // int | ID of address to retrieve

try {
    $result = $apiInstance->retrieveAddress($address_id);
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

[**\BumbalClient\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAddress**
> \BumbalClient\BumbalClient\Model\AddressListResponse retrieveListAddress($arguments)

Retrieve List of Addresses

Retrieve List of Addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\BumbalClient\Model\AddressRetrieveListArguments(); // \BumbalClient\BumbalClient\Model\AddressRetrieveListArguments | Address RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListAddress($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->retrieveListAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\BumbalClient\Model\AddressRetrieveListArguments**](../Model/AddressRetrieveListArguments.md)| Address RetrieveList Arguments |

### Return type

[**\BumbalClient\BumbalClient\Model\AddressListResponse**](../Model/AddressListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAddress**
> \BumbalClient\BumbalClient\Model\ApiResponse setAddress($body)

Add a new Address

Add a new Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AddressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\BumbalClient\Model\AddressModel(); // \BumbalClient\BumbalClient\Model\AddressModel | Address object that needs to be created

try {
    $result = $apiInstance->setAddress($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressApi->setAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\BumbalClient\Model\AddressModel**](../Model/AddressModel.md)| Address object that needs to be created | [optional]

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


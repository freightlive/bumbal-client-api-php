# Bumbal\Client\AddressappliedApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveAddressApplied**](AddressappliedApi.md#retrieveAddressApplied) | **GET** /address-applied/{addressId} | Retrieve an Applied Address
[**updateAddressApplied**](AddressappliedApi.md#updateAddressApplied) | **PUT** /address-applied/{addressId} | Update a Address


# **retrieveAddressApplied**
> \Bumbal\Client\Model\AddressAppliedModel retrieveAddressApplied($address_id)

Retrieve an Applied Address

Retrieve an Applied Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\AddressappliedApi();
$address_id = 789; // int | ID of the applied address to retrieve

try {
    $result = $api_instance->retrieveAddressApplied($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressappliedApi->retrieveAddressApplied: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address_id** | **int**| ID of the applied address to retrieve |

### Return type

[**\Bumbal\Client\Model\AddressAppliedModel**](../Model/AddressAppliedModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAddressApplied**
> \Bumbal\Client\Model\ApiResponse updateAddressApplied($address_id)

Update a Address

Update an Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\AddressappliedApi();
$address_id = 789; // int | ID of address to update

try {
    $result = $api_instance->updateAddressApplied($address_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressappliedApi->updateAddressApplied: ', $e->getMessage(), PHP_EOL;
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


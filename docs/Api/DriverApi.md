# BumbalClient\DriverApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListDriver**](DriverApi.md#retrieveListDriver) | **PUT** /driver | Retrieve List of Drivers


# **retrieveListDriver**
> \BumbalClient\Model\DriverModel[] retrieveListDriver($arguments)

Retrieve List of Drivers

Retrieve List of Drivers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\DriverApi();
$arguments = new \BumbalClient\Model\DriverRetrieveListArguments(); // \BumbalClient\Model\DriverRetrieveListArguments | Driver RetrieveList Arguments

try {
    $result = $api_instance->retrieveListDriver($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DriverApi->retrieveListDriver: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\DriverRetrieveListArguments**](../Model/\BumbalClient\Model\DriverRetrieveListArguments.md)| Driver RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\DriverModel[]**](../Model/DriverModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# BumbalClient\UserApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkCredentialsUser**](UserApi.md#checkCredentialsUser) | **GET** /user/check-credentials | Checks the credentials of a User


# **checkCredentialsUser**
> \BumbalClient\Model\UserModel checkCredentialsUser($username, $password)

Checks the credentials of a User

Checks the credentials of a User

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UserApi();
$username = "username_example"; // string | Party Username
$password = "password_example"; // string | Party Password

try {
    $result = $api_instance->checkCredentialsUser($username, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->checkCredentialsUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Party Username |
 **password** | **string**| Party Password |

### Return type

[**\BumbalClient\Model\UserModel**](../Model/UserModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


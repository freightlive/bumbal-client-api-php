# BumbalClient\UsersApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkCredentialsUser**](UsersApi.md#checkCredentialsUser) | **GET** /users/check-credentials | Checks the credentials of a User
[**retrieveListUsers**](UsersApi.md#retrieveListUsers) | **PUT** /users | Retrieve List of Userss
[**retrieveUsers**](UsersApi.md#retrieveUsers) | **GET** /users/{usersId} | Retrieve a Users
[**updateUsers**](UsersApi.md#updateUsers) | **PUT** /users/{usersId} | Update a Users


# **checkCredentialsUser**
> \BumbalClient\Model\UsersModel checkCredentialsUser($email, $password)

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

$api_instance = new BumbalClient\Api\UsersApi();
$email = "email_example"; // string | User Email
$password = "password_example"; // string | User Password

try {
    $result = $api_instance->checkCredentialsUser($email, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->checkCredentialsUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| User Email |
 **password** | **string**| User Password |

### Return type

[**\BumbalClient\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListUsers**
> \BumbalClient\Model\UsersModel[] retrieveListUsers($arguments)

Retrieve List of Userss

Retrieve List of Userss

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UsersApi();
$arguments = new \BumbalClient\Model\UsersRetrieveListArguments(); // \BumbalClient\Model\UsersRetrieveListArguments | Users RetrieveList Arguments

try {
    $result = $api_instance->retrieveListUsers($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->retrieveListUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\UsersRetrieveListArguments**](../Model/\BumbalClient\Model\UsersRetrieveListArguments.md)| Users RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\UsersModel[]**](../Model/UsersModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveUsers**
> \BumbalClient\Model\UsersModel retrieveUsers($users_id)

Retrieve a Users

Retrieve an Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UsersApi();
$users_id = 789; // int | ID of users to retrieve

try {
    $result = $api_instance->retrieveUsers($users_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->retrieveUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users_id** | **int**| ID of users to retrieve |

### Return type

[**\BumbalClient\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsers**
> \BumbalClient\Model\ApiResponse updateUsers($users_id)

Update a Users

Update a Setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\UsersApi();
$users_id = 789; // int | ID of users to update

try {
    $result = $api_instance->updateUsers($users_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **users_id** | **int**| ID of users to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


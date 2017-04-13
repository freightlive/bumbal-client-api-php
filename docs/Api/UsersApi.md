# BumbalClient\UsersApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListUsers**](UsersApi.md#retrieveListUsers) | **PUT** /users | Retrieve List of Userss
[**retrieveUsers**](UsersApi.md#retrieveUsers) | **GET** /users/{usersId} | Retrieve a Users
[**updateUsers**](UsersApi.md#updateUsers) | **PUT** /users/{usersId} | Update a Users


# **retrieveListUsers**
> \Bumbal\Client\Model\UsersModel[] retrieveListUsers($arguments)

Retrieve List of Userss

Retrieve List of Userss

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\UsersApi();
$arguments = new \Bumbal\Client\Model\UsersRetrieveListArguments(); // \Bumbal\Client\Model\UsersRetrieveListArguments | Users RetrieveList Arguments

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
 **arguments** | [**\Bumbal\Client\Model\UsersRetrieveListArguments**](../Model/\Bumbal\Client\Model\UsersRetrieveListArguments.md)| Users RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\UsersModel[]**](../Model/UsersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveUsers**
> \Bumbal\Client\Model\UsersModel retrieveUsers($users_id)

Retrieve a Users

Retrieve an Users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Bumbal\Client\Model\UsersModel**](../Model/UsersModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUsers**
> \Bumbal\Client\Model\ApiResponse updateUsers($users_id)

Update a Users

Update a Setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

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

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


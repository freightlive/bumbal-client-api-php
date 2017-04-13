# BumbalClient\AssignmentApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAssignment**](AssignmentApi.md#createAssignment) | **POST** /assignment | Add a new Assignment
[**deleteAssignment**](AssignmentApi.md#deleteAssignment) | **DELETE** /assignment/{assignmentId} | Delete an Assignment
[**retrieveAssignment**](AssignmentApi.md#retrieveAssignment) | **GET** /assignment/{assignmentId} | Retrieve a Assignment
[**retrieveListAssignment**](AssignmentApi.md#retrieveListAssignment) | **PUT** /assignment | Retrieve List of Assignments
[**updateAssignment**](AssignmentApi.md#updateAssignment) | **PUT** /assignment/{assignmentId} | Update a Assignment


# **createAssignment**
> \Bumbal\Client\Model\ApiResponse createAssignment($body)

Add a new Assignment

Add a new Assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\AssignmentApi();
$body = new \Bumbal\Client\Model\AssignmentModel(); // \Bumbal\Client\Model\AssignmentModel | Assignment object that needs to be created

try {
    $result = $api_instance->createAssignment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->createAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bumbal\Client\Model\AssignmentModel**](../Model/\Bumbal\Client\Model\AssignmentModel.md)| Assignment object that needs to be created |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAssignment**
> \Bumbal\Client\Model\ApiResponse deleteAssignment($assignment_id)

Delete an Assignment

Delete an Assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\AssignmentApi();
$assignment_id = 789; // int | ID of assignment to update

try {
    $result = $api_instance->deleteAssignment($assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->deleteAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of assignment to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAssignment**
> \Bumbal\Client\Model\AssignmentModel retrieveAssignment($assignment_id)

Retrieve a Assignment

Retrieve an Assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\AssignmentApi();
$assignment_id = 789; // int | ID of assignment to retrieve

try {
    $result = $api_instance->retrieveAssignment($assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->retrieveAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of assignment to retrieve |

### Return type

[**\Bumbal\Client\Model\AssignmentModel**](../Model/AssignmentModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAssignment**
> \Bumbal\Client\Model\AssignmentModel[] retrieveListAssignment($arguments)

Retrieve List of Assignments

Retrieve List of Assignments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\AssignmentApi();
$arguments = new \Bumbal\Client\Model\AssignmentRetrieveListArguments(); // \Bumbal\Client\Model\AssignmentRetrieveListArguments | Assignment RetrieveList Arguments

try {
    $result = $api_instance->retrieveListAssignment($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->retrieveListAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\Bumbal\Client\Model\AssignmentRetrieveListArguments**](../Model/\Bumbal\Client\Model\AssignmentRetrieveListArguments.md)| Assignment RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\AssignmentModel[]**](../Model/AssignmentModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAssignment**
> \Bumbal\Client\Model\ApiResponse updateAssignment($assignment_id, $body)

Update a Assignment

Update an Assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\AssignmentApi();
$assignment_id = 789; // int | ID of assignment to update
$body = new \Bumbal\Client\Model\AssignmentModel(); // \Bumbal\Client\Model\AssignmentModel | Assignment object that needs to be updated

try {
    $result = $api_instance->updateAssignment($assignment_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->updateAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of assignment to update |
 **body** | [**\Bumbal\Client\Model\AssignmentModel**](../Model/\Bumbal\Client\Model\AssignmentModel.md)| Assignment object that needs to be updated |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# BumbalClient\AssignmentApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAssignment**](AssignmentApi.md#deleteAssignment) | **DELETE** /assignment/{assignmentId} | Delete an assignment
[**retrieveAssignment**](AssignmentApi.md#retrieveAssignment) | **GET** /assignment/{assignmentId} | Find assignment by ID
[**retrieveListAssignment**](AssignmentApi.md#retrieveListAssignment) | **PUT** /assignment | Retrieve List of Assignments
[**setAssignment**](AssignmentApi.md#setAssignment) | **POST** /assignment/set | Set (create or update) an Assignment
[**updateAssignment**](AssignmentApi.md#updateAssignment) | **PUT** /assignment/{assignmentId} | Update a assignment


# **deleteAssignment**
> \BumbalClient\BumbalClient\Model\ApiResponse deleteAssignment($assignment_id)

Delete an assignment

Delete an assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assignment_id = 789; // int | ID of the assignment to delete

try {
    $result = $apiInstance->deleteAssignment($assignment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->deleteAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of the assignment to delete |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveAssignment**
> \BumbalClient\BumbalClient\Model\AssignmentModel retrieveAssignment($assignment_id, $include_assignment_links, $include_assignment_files, $include_assignment_files_meta_data, $include_assignment_files_meta_data_objects)

Find assignment by ID

Returns a single assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assignment_id = 789; // int | ID of assignment to return
$include_assignment_links = true; // bool | Include Link Data
$include_assignment_files = true; // bool | Include files
$include_assignment_files_meta_data = true; // bool | Include files meta data
$include_assignment_files_meta_data_objects = true; // bool | Include files meta data objects

try {
    $result = $apiInstance->retrieveAssignment($assignment_id, $include_assignment_links, $include_assignment_files, $include_assignment_files_meta_data, $include_assignment_files_meta_data_objects);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->retrieveAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assignment_id** | **int**| ID of assignment to return |
 **include_assignment_links** | **bool**| Include Link Data | [default to true]
 **include_assignment_files** | **bool**| Include files | [default to true]
 **include_assignment_files_meta_data** | **bool**| Include files meta data | [default to true]
 **include_assignment_files_meta_data_objects** | **bool**| Include files meta data objects | [default to true]

### Return type

[**\BumbalClient\BumbalClient\Model\AssignmentModel**](../Model/AssignmentModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListAssignment**
> \BumbalClient\BumbalClient\Model\AssignmentListResponse retrieveListAssignment($arguments)

Retrieve List of Assignments

Retrieve List of Assignments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\BumbalClient\Model\AssignmentRetrieveListArguments(); // \BumbalClient\BumbalClient\Model\AssignmentRetrieveListArguments | Assignment RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListAssignment($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->retrieveListAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\BumbalClient\Model\AssignmentRetrieveListArguments**](../Model/AssignmentRetrieveListArguments.md)| Assignment RetrieveList Arguments |

### Return type

[**\BumbalClient\BumbalClient\Model\AssignmentListResponse**](../Model/AssignmentListResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAssignment**
> \BumbalClient\BumbalClient\Model\ApiResponse setAssignment($body)

Set (create or update) an Assignment

Set (create or update) an Assignment. If id or links are set in the data, and a corresponding assignment is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\BumbalClient\Model\AssignmentModel(); // \BumbalClient\BumbalClient\Model\AssignmentModel | Assignment object

try {
    $result = $apiInstance->setAssignment($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssignmentApi->setAssignment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\BumbalClient\Model\AssignmentModel**](../Model/AssignmentModel.md)| Assignment object | [optional]

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAssignment**
> \BumbalClient\BumbalClient\Model\ApiResponse updateAssignment($assignment_id, $body)

Update a assignment

Update a assignment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\AssignmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assignment_id = 789; // int | ID of assignment to update
$body = new \BumbalClient\BumbalClient\Model\AssignmentModel(); // \BumbalClient\BumbalClient\Model\AssignmentModel | Assignment object that needs to be updated

try {
    $result = $apiInstance->updateAssignment($assignment_id, $body);
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
 **body** | [**\BumbalClient\BumbalClient\Model\AssignmentModel**](../Model/AssignmentModel.md)| Assignment object that needs to be updated | [optional]

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Bumbal\Client\RecurrenceApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteRecurrence**](RecurrenceApi.md#deleteRecurrence) | **DELETE** /recurrence/{recurrenceId} | Delete an Recurrence
[**retrieveListRecurrence**](RecurrenceApi.md#retrieveListRecurrence) | **PUT** /recurrence | Retrieve List of Recurrences
[**retrieveRecurrence**](RecurrenceApi.md#retrieveRecurrence) | **GET** /recurrence/{recurrenceId} | Retrieve a Recurrence
[**updateRecurrence**](RecurrenceApi.md#updateRecurrence) | **PUT** /recurrence/{recurrenceId} | Update a Recurrence


# **deleteRecurrence**
> \Bumbal\Client\Model\ApiResponse deleteRecurrence($recurrence_id)

Delete an Recurrence

Delete an Recurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RecurrenceApi();
$recurrence_id = 789; // int | ID of recurrence to update

try {
    $result = $api_instance->deleteRecurrence($recurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->deleteRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrence_id** | **int**| ID of recurrence to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListRecurrence**
> \Bumbal\Client\Model\RecurrenceModel[] retrieveListRecurrence($arguments)

Retrieve List of Recurrences

Retrieve List of Recurrences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RecurrenceApi();
$arguments = new \Bumbal\Client\Model\RecurrenceRetrieveListArguments(); // \Bumbal\Client\Model\RecurrenceRetrieveListArguments | Recurrence RetrieveList Arguments

try {
    $result = $api_instance->retrieveListRecurrence($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->retrieveListRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\Bumbal\Client\Model\RecurrenceRetrieveListArguments**](../Model/\Bumbal\Client\Model\RecurrenceRetrieveListArguments.md)| Recurrence RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\RecurrenceModel[]**](../Model/RecurrenceModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveRecurrence**
> \Bumbal\Client\Model\RecurrenceModel retrieveRecurrence($recurrence_id)

Retrieve a Recurrence

Retrieve an Recurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RecurrenceApi();
$recurrence_id = 789; // int | ID of recurrence to retrieve

try {
    $result = $api_instance->retrieveRecurrence($recurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->retrieveRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrence_id** | **int**| ID of recurrence to retrieve |

### Return type

[**\Bumbal\Client\Model\RecurrenceModel**](../Model/RecurrenceModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRecurrence**
> \Bumbal\Client\Model\ApiResponse updateRecurrence($recurrence_id)

Update a Recurrence

Update an Recurrence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\RecurrenceApi();
$recurrence_id = 789; // int | ID of recurrence to update

try {
    $result = $api_instance->updateRecurrence($recurrence_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurrenceApi->updateRecurrence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **recurrence_id** | **int**| ID of recurrence to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


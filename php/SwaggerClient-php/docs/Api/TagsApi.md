# Bumbal\Client\TagsApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTag**](TagsApi.md#createTag) | **POST** /tags | Add a new Tag
[**deleteTag**](TagsApi.md#deleteTag) | **DELETE** /tags/{tagId} | Delete a Tag
[**retrieveListTags**](TagsApi.md#retrieveListTags) | **PUT** /tags | Retrieve List of Tags
[**retrieveTag**](TagsApi.md#retrieveTag) | **GET** /tags/{tagId} | Retrieve a Tag
[**updateTag**](TagsApi.md#updateTag) | **PUT** /tags/{tagId} | Update a Tag


# **createTag**
> \Bumbal\Client\Model\ApiResponse createTag($body)

Add a new Tag

Add a new Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\TagsApi();
$body = new \Bumbal\Client\Model\TagModel(); // \Bumbal\Client\Model\TagModel | Tag object that needs to be created

try {
    $result = $api_instance->createTag($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->createTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bumbal\Client\Model\TagModel**](../Model/\Bumbal\Client\Model\TagModel.md)| Tag object that needs to be created | [optional]

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTag**
> \Bumbal\Client\Model\ApiResponse deleteTag($tag_id)

Delete a Tag

Delete a Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\TagsApi();
$tag_id = 789; // int | ID of tag to delete

try {
    $result = $api_instance->deleteTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->deleteTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| ID of tag to delete |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTags**
> \Bumbal\Client\Model\TagModel[] retrieveListTags($arguments)

Retrieve List of Tags

Retrieve List of Tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\TagsApi();
$arguments = new \Bumbal\Client\Model\TagsRetrieveListArguments(); // \Bumbal\Client\Model\TagsRetrieveListArguments | Tags RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTags($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->retrieveListTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\Bumbal\Client\Model\TagsRetrieveListArguments**](../Model/\Bumbal\Client\Model\TagsRetrieveListArguments.md)| Tags RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\TagModel[]**](../Model/TagModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTag**
> \Bumbal\Client\Model\TagModel retrieveTag($tag_id)

Retrieve a Tag

Retrieve an Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\TagsApi();
$tag_id = 789; // int | ID of tag to retrieve

try {
    $result = $api_instance->retrieveTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->retrieveTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| ID of tag to retrieve |

### Return type

[**\Bumbal\Client\Model\TagModel**](../Model/TagModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTag**
> \Bumbal\Client\Model\ApiResponse updateTag($tag_id)

Update a Tag

Update an Tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\TagsApi();
$tag_id = 789; // int | ID of tag to update

try {
    $result = $api_instance->updateTag($tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->updateTag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| ID of tag to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


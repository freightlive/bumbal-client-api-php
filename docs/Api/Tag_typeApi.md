# BumbalClient\Tag_typeApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTagType**](Tag_typeApi.md#createTagType) | **POST** /tag-type | Add a new Tag type
[**deleteTagType**](Tag_typeApi.md#deleteTagType) | **DELETE** /tag-type/{tagTypeId} | Delete a Tag type
[**retrieveListTagType**](Tag_typeApi.md#retrieveListTagType) | **PUT** /tag-type | Retrieve List of Tag types
[**retrieveTagType**](Tag_typeApi.md#retrieveTagType) | **GET** /tag-type/{tagTypeId} | Retrieve a Tag type
[**setTagType**](Tag_typeApi.md#setTagType) | **POST** /tag-type/set | Set (create or update) Tag type
[**updateTagType**](Tag_typeApi.md#updateTagType) | **PUT** /tag-type/{tagTypeId} | Update a Tag type


# **createTagType**
> \BumbalClient\Model\ApiResponse createTagType($body)

Add a new Tag type

Add a new Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\Tag_typeApi();
$body = new \BumbalClient\Model\TagTypeModel(); // \BumbalClient\Model\TagTypeModel | Tag type object that needs to be created

try {
    $result = $api_instance->createTagType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Tag_typeApi->createTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TagTypeModel**](../Model/\BumbalClient\Model\TagTypeModel.md)| Tag type object that needs to be created |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagType**
> \BumbalClient\Model\ApiResponse deleteTagType($tag_type_id)

Delete a Tag type

Delete a Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\Tag_typeApi();
$tag_type_id = 789; // int | ID of tag type to delete

try {
    $result = $api_instance->deleteTagType($tag_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Tag_typeApi->deleteTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type_id** | **int**| ID of tag type to delete |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListTagType**
> \BumbalClient\Model\TagTypeModel[] retrieveListTagType($arguments)

Retrieve List of Tag types

Retrieve List of Tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\Tag_typeApi();
$arguments = new \BumbalClient\Model\TagTypeRetrieveListArguments(); // \BumbalClient\Model\TagTypeRetrieveListArguments | Tag types RetrieveList Arguments

try {
    $result = $api_instance->retrieveListTagType($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Tag_typeApi->retrieveListTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\Model\TagTypeRetrieveListArguments**](../Model/\BumbalClient\Model\TagTypeRetrieveListArguments.md)| Tag types RetrieveList Arguments |

### Return type

[**\BumbalClient\Model\TagTypeModel[]**](../Model/TagTypeModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveTagType**
> \BumbalClient\Model\TagModel retrieveTagType($tag_type_id, $name, $include_object_types)

Retrieve a Tag type

Retrieve an Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\Tag_typeApi();
$tag_type_id = 789; // int | ID of tag type to retrieve
$name = 789; // int | name of tag type to retrieve
$include_object_types = true; // bool | Show the text value of the status

try {
    $result = $api_instance->retrieveTagType($tag_type_id, $name, $include_object_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Tag_typeApi->retrieveTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type_id** | **int**| ID of tag type to retrieve |
 **name** | **int**| name of tag type to retrieve |
 **include_object_types** | **bool**| Show the text value of the status | [optional]

### Return type

[**\BumbalClient\Model\TagModel**](../Model/TagModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setTagType**
> \BumbalClient\Model\ApiResponse setTagType($body)

Set (create or update) Tag type

Set (create or update) Tag type. If a tag type with same name is found in Bumbal, the tag type id is returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\Tag_typeApi();
$body = new \BumbalClient\Model\TagTypeModel(); // \BumbalClient\Model\TagTypeModel | tag type data

try {
    $result = $api_instance->setTagType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Tag_typeApi->setTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\Model\TagTypeModel**](../Model/\BumbalClient\Model\TagTypeModel.md)| tag type data | [optional]

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagType**
> \BumbalClient\Model\ApiResponse updateTagType($tag_type_id)

Update a Tag type

Update a Tag type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\Tag_typeApi();
$tag_type_id = 789; // int | ID of tag type to update

try {
    $result = $api_instance->updateTagType($tag_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Tag_typeApi->updateTagType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type_id** | **int**| ID of tag type to update |

### Return type

[**\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# BumbalClient\NoteApi

All URIs are relative to *http://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createNote**](NoteApi.md#createNote) | **POST** /note | Add a note
[**deleteNote**](NoteApi.md#deleteNote) | **DELETE** /note/{noteId} | Delete an note
[**retrieveListNote**](NoteApi.md#retrieveListNote) | **PUT** /note | Retrieve List of Notes
[**retrieveNote**](NoteApi.md#retrieveNote) | **GET** /note/{noteId} | Find note by ID
[**setNote**](NoteApi.md#setNote) | **POST** /note/set | Set (create or update) a note
[**updateNote**](NoteApi.md#updateNote) | **PUT** /note/{noteId} | Update a note


# **createNote**
> \BumbalClient\BumbalClient\Model\ApiResponse createNote($body)

Add a note

Add a note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\BumbalClient\Model\NoteModel(); // \BumbalClient\BumbalClient\Model\NoteModel | Note object that needs to be created

try {
    $result = $apiInstance->createNote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->createNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\BumbalClient\Model\NoteModel**](../Model/NoteModel.md)| Note object that needs to be created | [optional]

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNote**
> \BumbalClient\BumbalClient\Model\ApiResponse deleteNote($note_id)

Delete an note

Delete an note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_id = 789; // int | ID of the note to delete

try {
    $result = $apiInstance->deleteNote($note_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->deleteNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_id** | **int**| ID of the note to delete |

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListNote**
> \BumbalClient\BumbalClient\Model\NoteModel[] retrieveListNote($arguments)

Retrieve List of Notes

Retrieve List of Notes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$arguments = new \BumbalClient\BumbalClient\Model\NoteRetrieveListArguments(); // \BumbalClient\BumbalClient\Model\NoteRetrieveListArguments | Note RetrieveList Arguments

try {
    $result = $apiInstance->retrieveListNote($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->retrieveListNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\BumbalClient\BumbalClient\Model\NoteRetrieveListArguments**](../Model/NoteRetrieveListArguments.md)| Note RetrieveList Arguments |

### Return type

[**\BumbalClient\BumbalClient\Model\NoteModel[]**](../Model/NoteModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveNote**
> \BumbalClient\BumbalClient\Model\NoteModel retrieveNote($note_id, $include_note_tags, $include_note_tag_type_link_ids, $include_note_object_link_ids, $include_updated_by)

Find note by ID

Returns a single note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_id = 789; // int | ID of note to return
$include_note_tags = true; // bool | a list of tags bound to note
$include_note_tag_type_link_ids = true; // bool | link ids of the tag types
$include_note_object_link_ids = true; // bool | Include teh link ids bound to teh object where teh note belongs to
$include_updated_by = true; // bool | include updated_by_name

try {
    $result = $apiInstance->retrieveNote($note_id, $include_note_tags, $include_note_tag_type_link_ids, $include_note_object_link_ids, $include_updated_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->retrieveNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_id** | **int**| ID of note to return |
 **include_note_tags** | **bool**| a list of tags bound to note | [default to true]
 **include_note_tag_type_link_ids** | **bool**| link ids of the tag types | [default to true]
 **include_note_object_link_ids** | **bool**| Include teh link ids bound to teh object where teh note belongs to | [default to true]
 **include_updated_by** | **bool**| include updated_by_name | [default to true]

### Return type

[**\BumbalClient\BumbalClient\Model\NoteModel**](../Model/NoteModel.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setNote**
> \BumbalClient\BumbalClient\Model\ApiResponse setNote($body)

Set (create or update) a note

Set (create or update) a note. If id or links are set in the data, and a corresponding note is found in Bumbal, an update will be performed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \BumbalClient\BumbalClient\Model\NoteModel(); // \BumbalClient\BumbalClient\Model\NoteModel | Note object

try {
    $result = $apiInstance->setNote($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->setNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\BumbalClient\BumbalClient\Model\NoteModel**](../Model/NoteModel.md)| Note object | [optional]

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateNote**
> \BumbalClient\BumbalClient\Model\ApiResponse updateNote($note_id, $body)

Update a note

Update a note

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$apiInstance = new BumbalClient\Api\NoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$note_id = 789; // int | ID of note to update
$body = new \BumbalClient\BumbalClient\Model\NoteModel(); // \BumbalClient\BumbalClient\Model\NoteModel | Note object that needs to be updated

try {
    $result = $apiInstance->updateNote($note_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NoteApi->updateNote: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **note_id** | **int**| ID of note to update |
 **body** | [**\BumbalClient\BumbalClient\Model\NoteModel**](../Model/NoteModel.md)| Note object that needs to be updated | [optional]

### Return type

[**\BumbalClient\BumbalClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# BumbalClient\PartyApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createParty**](PartyApi.md#createParty) | **POST** /party | Add a new Party
[**deleteParty**](PartyApi.md#deleteParty) | **DELETE** /party/{partyId} | Delete an Party
[**retrieveListParty**](PartyApi.md#retrieveListParty) | **PUT** /party | Retrieve List of Parties
[**retrieveParty**](PartyApi.md#retrieveParty) | **GET** /party/{partyId} | Retrieve a Party
[**updateParty**](PartyApi.md#updateParty) | **PUT** /party/{partyId} | Update a Party


# **createParty**
> \Bumbal\Client\Model\ApiResponse createParty($body)

Add a new Party

Add a new Party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PartyApi();
$body = new \Bumbal\Client\Model\PartyModel(); // \Bumbal\Client\Model\PartyModel | Party object that needs to be created

try {
    $result = $api_instance->createParty($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->createParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Bumbal\Client\Model\PartyModel**](../Model/\Bumbal\Client\Model\PartyModel.md)| Party object that needs to be created | [optional]

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParty**
> \Bumbal\Client\Model\ApiResponse deleteParty($party_id)

Delete an Party

Delete an Party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PartyApi();
$party_id = 789; // int | ID of party to update

try {
    $result = $api_instance->deleteParty($party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->deleteParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**| ID of party to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveListParty**
> \Bumbal\Client\Model\PartyModel[] retrieveListParty($arguments)

Retrieve List of Parties

Retrieve List of Parties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PartyApi();
$arguments = new \Bumbal\Client\Model\PartyRetrieveListArguments(); // \Bumbal\Client\Model\PartyRetrieveListArguments | Party RetrieveList Arguments

try {
    $result = $api_instance->retrieveListParty($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->retrieveListParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\Bumbal\Client\Model\PartyRetrieveListArguments**](../Model/\Bumbal\Client\Model\PartyRetrieveListArguments.md)| Party RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\PartyModel[]**](../Model/PartyModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveParty**
> \Bumbal\Client\Model\PartyModel retrieveParty($party_id)

Retrieve a Party

Retrieve an Party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PartyApi();
$party_id = 789; // int | ID of party to retrieve

try {
    $result = $api_instance->retrieveParty($party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->retrieveParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**| ID of party to retrieve |

### Return type

[**\Bumbal\Client\Model\PartyModel**](../Model/PartyModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParty**
> \Bumbal\Client\Model\ApiResponse updateParty($party_id)

Update a Party

Update an Party

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new BumbalClient\Api\PartyApi();
$party_id = 789; // int | ID of party to update

try {
    $result = $api_instance->updateParty($party_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartyApi->updateParty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **party_id** | **int**| ID of party to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


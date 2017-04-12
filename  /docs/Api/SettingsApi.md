# Bumbal\Client\SettingsApi

All URIs are relative to *https://localhost/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveListSettings**](SettingsApi.md#retrieveListSettings) | **PUT** /settings | Retrieve List of Settingss
[**retrieveSettings**](SettingsApi.md#retrieveSettings) | **GET** /settings/{settingsId} | Retrieve a Settings
[**updateSettings**](SettingsApi.md#updateSettings) | **PUT** /settings/{settingsId} | Update a Settings


# **retrieveListSettings**
> \Bumbal\Client\Model\SettingsModel[] retrieveListSettings($arguments)

Retrieve List of Settingss

Retrieve List of Settingss

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\SettingsApi();
$arguments = new \Bumbal\Client\Model\SettingsRetrieveListArguments(); // \Bumbal\Client\Model\SettingsRetrieveListArguments | Settings RetrieveList Arguments

try {
    $result = $api_instance->retrieveListSettings($arguments);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->retrieveListSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **arguments** | [**\Bumbal\Client\Model\SettingsRetrieveListArguments**](../Model/\Bumbal\Client\Model\SettingsRetrieveListArguments.md)| Settings RetrieveList Arguments |

### Return type

[**\Bumbal\Client\Model\SettingsModel[]**](../Model/SettingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSettings**
> \Bumbal\Client\Model\SettingsModel retrieveSettings($settings_id)

Retrieve a Settings

Retrieve an Settings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\SettingsApi();
$settings_id = 789; // int | ID of settings to retrieve

try {
    $result = $api_instance->retrieveSettings($settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->retrieveSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings_id** | **int**| ID of settings to retrieve |

### Return type

[**\Bumbal\Client\Model\SettingsModel**](../Model/SettingsModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSettings**
> \Bumbal\Client\Model\ApiResponse updateSettings($settings_id)

Update a Settings

Update a Setting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Bumbal\Client\Api\SettingsApi();
$settings_id = 789; // int | ID of settings to update

try {
    $result = $api_instance->updateSettings($settings_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettingsApi->updateSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **settings_id** | **int**| ID of settings to update |

### Return type

[**\Bumbal\Client\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/xml
 - **Accept**: application/json, application/xml

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


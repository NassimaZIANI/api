# Swagger\Client\DiplomesApi

All URIs are relative to *https://virtserver.swaggerhub.com/NassimaZIANI/apogee_API/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDiplomat**](DiplomesApi.md#addDiplomat) | **POST** /diplomes | adds a diplomat
[**deleteDiplomat**](DiplomesApi.md#deleteDiplomat) | **DELETE** /diplomes/{diplome} | deletes a diplomat
[**getDiplomatName**](DiplomesApi.md#getDiplomatName) | **GET** /diplomes/{diplome} | gets a Diplomat by it&#39;s name
[**getDiplomats**](DiplomesApi.md#getDiplomats) | **GET** /diplomes | gets diplomats
[**updateDiplomatName**](DiplomesApi.md#updateDiplomatName) | **PUT** /diplomes/{diplome} | update a diplomat by its name


# **addDiplomat**
> \Swagger\Client\Model\Diplome[] addDiplomat($diplome)

adds a diplomat

Adds a diplomat to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiplomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = new \Swagger\Client\Model\Diplome(); // \Swagger\Client\Model\Diplome | Diplomat item to add/edit

try {
    $result = $apiInstance->addDiplomat($diplome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiplomesApi->addDiplomat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | [**\Swagger\Client\Model\Diplome**](../Model/Diplome.md)| Diplomat item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\Diplome[]**](../Model/Diplome.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDiplomat**
> deleteDiplomat($diplome)

deletes a diplomat

Delete information about a diplomat

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiplomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 

try {
    $apiInstance->deleteDiplomat($diplome);
} catch (Exception $e) {
    echo 'Exception when calling DiplomesApi->deleteDiplomat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiplomatName**
> \Swagger\Client\Model\DiplomeMentions getDiplomatName($diplome)

gets a Diplomat by it's name

Obtain information about a diplomat from its unique name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiplomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 

try {
    $result = $apiInstance->getDiplomatName($diplome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiplomesApi->getDiplomatName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |

### Return type

[**\Swagger\Client\Model\DiplomeMentions**](../Model/DiplomeMentions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiplomats**
> \Swagger\Client\Model\ListDiplomes[] getDiplomats()

gets diplomats

By passing in the appropriate options, you can search for available Diplomats in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiplomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDiplomats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiplomesApi->getDiplomats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ListDiplomes[]**](../Model/ListDiplomes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDiplomatName**
> \Swagger\Client\Model\DiplomeMentions updateDiplomatName($diplome)

update a diplomat by its name

Update information about a Diplomat from its unique name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiplomesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = new \Swagger\Client\Model\Diplome(); // \Swagger\Client\Model\Diplome | Diplomat item to add/edit

try {
    $result = $apiInstance->updateDiplomatName($diplome);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiplomesApi->updateDiplomatName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | [**\Swagger\Client\Model\Diplome**](../Model/Diplome.md)| Diplomat item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\DiplomeMentions**](../Model/DiplomeMentions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


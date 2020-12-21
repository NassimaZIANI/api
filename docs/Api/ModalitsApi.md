# Swagger\Client\ModalitsApi

All URIs are relative to *https://virtserver.swaggerhub.com/NassimaZIANI/apogee_API/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addModalite**](ModalitsApi.md#addModalite) | **POST** /modalites | adds a Modalité
[**deleteModalite**](ModalitsApi.md#deleteModalite) | **DELETE** /modalites/{moda} | deletes a Modalité
[**getModaliteModa**](ModalitsApi.md#getModaliteModa) | **GET** /modalites/{moda} | gets a Modalité by it&#39;s code
[**getModalites**](ModalitsApi.md#getModalites) | **GET** /modalites | gets Modalités
[**updateModaliteModa**](ModalitsApi.md#updateModaliteModa) | **PUT** /modalites/{moda} | update a Modalité by its code


# **addModalite**
> \Swagger\Client\Model\ModaliteBody[] addModalite($modalite)

adds a Modalité

Adds a Modalité to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModalitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$modalite = new \Swagger\Client\Model\ModaliteBody(); // \Swagger\Client\Model\ModaliteBody | Modalité item to add/edit

try {
    $result = $apiInstance->addModalite($modalite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalitsApi->addModalite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modalite** | [**\Swagger\Client\Model\ModaliteBody**](../Model/ModaliteBody.md)| Modalité item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\ModaliteBody[]**](../Model/ModaliteBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteModalite**
> deleteModalite($moda)

deletes a Modalité

Delete information about a Modalité

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModalitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$moda = 56; // int | 

try {
    $apiInstance->deleteModalite($moda);
} catch (Exception $e) {
    echo 'Exception when calling ModalitsApi->deleteModalite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **moda** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModaliteModa**
> \Swagger\Client\Model\Modalite getModaliteModa($moda)

gets a Modalité by it's code

Obtain information about a Modalité from its unique code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModalitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$moda = 56; // int | 

try {
    $result = $apiInstance->getModaliteModa($moda);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalitsApi->getModaliteModa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **moda** | **int**|  |

### Return type

[**\Swagger\Client\Model\Modalite**](../Model/Modalite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getModalites**
> \Swagger\Client\Model\ListModalite getModalites()

gets Modalités

By passing in the appropriate options, you can search for available Modalités in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModalitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getModalites();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalitsApi->getModalites: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\ListModalite**](../Model/ListModalite.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateModaliteModa**
> \Swagger\Client\Model\ModaliteBody updateModaliteModa($moda, $modalite)

update a Modalité by its code

Update information about a Modalité from its unique code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ModalitsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$moda = 56; // int | 
$modalite = new \Swagger\Client\Model\ModaliteBody(); // \Swagger\Client\Model\ModaliteBody | Modalité item to add/edit

try {
    $result = $apiInstance->updateModaliteModa($moda, $modalite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModalitsApi->updateModaliteModa: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **moda** | **int**|  |
 **modalite** | [**\Swagger\Client\Model\ModaliteBody**](../Model/ModaliteBody.md)| Modalité item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\ModaliteBody**](../Model/ModaliteBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


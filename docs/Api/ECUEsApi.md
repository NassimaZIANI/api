# Swagger\Client\ECUEsApi

All URIs are relative to *https://virtserver.swaggerhub.com/NassimaZIANI/apogee_API/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addECUE**](ECUEsApi.md#addECUE) | **POST** /ecues | adds an ECUE
[**deleteECUE**](ECUEsApi.md#deleteECUE) | **DELETE** /ecues/{idECUE} | deletes an ECUE
[**getECUEId**](ECUEsApi.md#getECUEId) | **GET** /ecues/{idECUE} | gets a ECUE by it&#39;s id
[**getECUEs**](ECUEsApi.md#getECUEs) | **GET** /ecues | gets ECUEs
[**updateECUEId**](ECUEsApi.md#updateECUEId) | **PUT** /ecues/{idECUE} | update an ECUE by its id


# **addECUE**
> \Swagger\Client\Model\ECUEBody[] addECUE($ecue)

adds an ECUE

Adds an ECUE to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ECUEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ecue = new \Swagger\Client\Model\ECUEBody(); // \Swagger\Client\Model\ECUEBody | ECUE item to add/edit

try {
    $result = $apiInstance->addECUE($ecue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECUEsApi->addECUE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ecue** | [**\Swagger\Client\Model\ECUEBody**](../Model/ECUEBody.md)| ECUE item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\ECUEBody[]**](../Model/ECUEBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteECUE**
> deleteECUE($id_ecue)

deletes an ECUE

Delete information about an ECUE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ECUEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ecue = 56; // int | 

try {
    $apiInstance->deleteECUE($id_ecue);
} catch (Exception $e) {
    echo 'Exception when calling ECUEsApi->deleteECUE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ecue** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getECUEId**
> \Swagger\Client\Model\ECUE getECUEId($id_ecue)

gets a ECUE by it's id

Obtain information about an ECUE from its unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ECUEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ecue = 56; // int | 

try {
    $result = $apiInstance->getECUEId($id_ecue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECUEsApi->getECUEId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ecue** | **int**|  |

### Return type

[**\Swagger\Client\Model\ECUE**](../Model/ECUE.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getECUEs**
> \Swagger\Client\Model\ListECUEs getECUEs($accro_p, $id_ue)

gets ECUEs

By passing in the appropriate options, you can search for available ECUEs in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ECUEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accro_p = "accro_p_example"; // string | 
$id_ue = 56; // int | 

try {
    $result = $apiInstance->getECUEs($accro_p, $id_ue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECUEsApi->getECUEs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accro_p** | **string**|  | [optional]
 **id_ue** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListECUEs**](../Model/ListECUEs.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateECUEId**
> \Swagger\Client\Model\ECUEBody updateECUEId($id_ecue, $ecue)

update an ECUE by its id

Update information about an ECUE from its unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ECUEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ecue = 56; // int | 
$ecue = new \Swagger\Client\Model\ECUEBody(); // \Swagger\Client\Model\ECUEBody | ECUE item to add/edit

try {
    $result = $apiInstance->updateECUEId($id_ecue, $ecue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ECUEsApi->updateECUEId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ecue** | **int**|  |
 **ecue** | [**\Swagger\Client\Model\ECUEBody**](../Model/ECUEBody.md)| ECUE item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\ECUEBody**](../Model/ECUEBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\UEsApi

All URIs are relative to *https://virtserver.swaggerhub.com/NassimaZIANI/apogee_API/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addUE**](UEsApi.md#addUE) | **POST** /ues | adds a UE
[**deleteUE**](UEsApi.md#deleteUE) | **DELETE** /ues/{idUE} | deletes an UE
[**getUEId**](UEsApi.md#getUEId) | **GET** /ues/{idUE} | gets a UE by it&#39;s id
[**getUEs**](UEsApi.md#getUEs) | **GET** /ues | gets UEs
[**updateUEId**](UEsApi.md#updateUEId) | **PUT** /ues/{idUE} | update a UE by its id


# **addUE**
> \Swagger\Client\Model\UEBody[] addUE($ue)

adds a UE

Adds a UE to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ue = new \Swagger\Client\Model\UEBody(); // \Swagger\Client\Model\UEBody | UE item to add/edit

try {
    $result = $apiInstance->addUE($ue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UEsApi->addUE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ue** | [**\Swagger\Client\Model\UEBody**](../Model/UEBody.md)| UE item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\UEBody[]**](../Model/UEBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteUE**
> deleteUE($id_ue)

deletes an UE

Delete information about an UE

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ue = 56; // int | 

try {
    $apiInstance->deleteUE($id_ue);
} catch (Exception $e) {
    echo 'Exception when calling UEsApi->deleteUE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ue** | **int**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUEId**
> \Swagger\Client\Model\UE getUEId($id_ue)

gets a UE by it's id

Obtain information about a UE from its unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ue = 56; // int | 

try {
    $result = $apiInstance->getUEId($id_ue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UEsApi->getUEId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ue** | **int**|  |

### Return type

[**\Swagger\Client\Model\UE**](../Model/UE.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUEs**
> \Swagger\Client\Model\ListUEs getUEs($accro_p, $sem, $id_ecue)

gets UEs

By passing in the appropriate options, you can search for available UEs in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accro_p = "accro_p_example"; // string | 
$sem = 56; // int | 
$id_ecue = 56; // int | 

try {
    $result = $apiInstance->getUEs($accro_p, $sem, $id_ecue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UEsApi->getUEs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accro_p** | **string**|  | [optional]
 **sem** | **int**|  | [optional]
 **id_ecue** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListUEs**](../Model/ListUEs.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateUEId**
> \Swagger\Client\Model\UEBody updateUEId($id_ue, $ue)

update a UE by its id

Update information about a UE from its unique id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\UEsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id_ue = 56; // int | 
$ue = new \Swagger\Client\Model\UEBody(); // \Swagger\Client\Model\UEBody | UE item to add/edit

try {
    $result = $apiInstance->updateUEId($id_ue, $ue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UEsApi->updateUEId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id_ue** | **int**|  |
 **ue** | [**\Swagger\Client\Model\UEBody**](../Model/UEBody.md)| UE item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\UEBody**](../Model/UEBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


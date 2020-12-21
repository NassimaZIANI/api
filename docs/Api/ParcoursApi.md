# Swagger\Client\ParcoursApi

All URIs are relative to *https://virtserver.swaggerhub.com/NassimaZIANI/apogee_API/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addParcours**](ParcoursApi.md#addParcours) | **POST** /diplomes/{diplome}/mentions/{accroM}/parcours | adds a Parcours
[**deleteParcours**](ParcoursApi.md#deleteParcours) | **DELETE** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP} | deletes a Parcours
[**getParcours**](ParcoursApi.md#getParcours) | **GET** /diplomes/{diplome}/mentions/{accroM}/parcours | gets Parcours
[**getParcoursAccro**](ParcoursApi.md#getParcoursAccro) | **GET** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP} | gets a Parcours by it&#39;s accro
[**updateParcoursAccro**](ParcoursApi.md#updateParcoursAccro) | **PUT** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP} | update a Parcours by its accro


# **addParcours**
> \Swagger\Client\Model\ParcoursBody[] addParcours($diplome, $accro_m, $parcours)

adds a Parcours

Adds a Parcours to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ParcoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$parcours = new \Swagger\Client\Model\ParcoursBody(); // \Swagger\Client\Model\ParcoursBody | Parcours item to add/edit

try {
    $result = $apiInstance->addParcours($diplome, $accro_m, $parcours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcoursApi->addParcours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **parcours** | [**\Swagger\Client\Model\ParcoursBody**](../Model/ParcoursBody.md)| Parcours item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\ParcoursBody[]**](../Model/ParcoursBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteParcours**
> deleteParcours($diplome, $accro_m, $accro_p)

deletes a Parcours

Delete information about a Parcours

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ParcoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 

try {
    $apiInstance->deleteParcours($diplome, $accro_m, $accro_p);
} catch (Exception $e) {
    echo 'Exception when calling ParcoursApi->deleteParcours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **accro_p** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcours**
> \Swagger\Client\Model\ListParcours getParcours($diplome, $accro_m, $sem, $id_ue, $id_ecue, $modalite)

gets Parcours

By passing in the appropriate options, you can search for available Parcours in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ParcoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$sem = 56; // int | 
$id_ue = 56; // int | 
$id_ecue = 56; // int | 
$modalite = 56; // int | 

try {
    $result = $apiInstance->getParcours($diplome, $accro_m, $sem, $id_ue, $id_ecue, $modalite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcoursApi->getParcours: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **sem** | **int**|  | [optional]
 **id_ue** | **int**|  | [optional]
 **id_ecue** | **int**|  | [optional]
 **modalite** | **int**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListParcours**](../Model/ListParcours.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParcoursAccro**
> \Swagger\Client\Model\Parcours getParcoursAccro($diplome, $accro_m, $accro_p)

gets a Parcours by it's accro

Obtain information about a Parcours from its unique accronyme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ParcoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 

try {
    $result = $apiInstance->getParcoursAccro($diplome, $accro_m, $accro_p);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcoursApi->getParcoursAccro: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **accro_p** | **string**|  |

### Return type

[**\Swagger\Client\Model\Parcours**](../Model/Parcours.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParcoursAccro**
> \Swagger\Client\Model\ParcoursBody updateParcoursAccro($diplome, $accro_m, $accro_p, $parcours)

update a Parcours by its accro

Update information about a Parcours from its unique accronyme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ParcoursApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 
$parcours = new \Swagger\Client\Model\ParcoursBody(); // \Swagger\Client\Model\ParcoursBody | Parcours item to add/edit

try {
    $result = $apiInstance->updateParcoursAccro($diplome, $accro_m, $accro_p, $parcours);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ParcoursApi->updateParcoursAccro: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **accro_p** | **string**|  |
 **parcours** | [**\Swagger\Client\Model\ParcoursBody**](../Model/ParcoursBody.md)| Parcours item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\ParcoursBody**](../Model/ParcoursBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


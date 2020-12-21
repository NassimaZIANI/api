# Swagger\Client\SemestresApi

All URIs are relative to *https://virtserver.swaggerhub.com/NassimaZIANI/apogee_API/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSemestre**](SemestresApi.md#addSemestre) | **POST** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP}/semestres | adds a Semestre
[**deleteSemestre**](SemestresApi.md#deleteSemestre) | **DELETE** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP}/semestres/{sem} | deletes a Semestre
[**getSemestre**](SemestresApi.md#getSemestre) | **GET** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP}/semestres/{sem} | gets a Semestre
[**getSemestres**](SemestresApi.md#getSemestres) | **GET** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP}/semestres | gets Semestres
[**updateSemestre**](SemestresApi.md#updateSemestre) | **PUT** /diplomes/{diplome}/mentions/{accroM}/parcours/{accroP}/semestres/{sem} | update a Semestre


# **addSemestre**
> \Swagger\Client\Model\SemestreBody[] addSemestre($diplome, $accro_m, $accro_p, $semestre)

adds a Semestre

Adds a Semestre to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SemestresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 
$semestre = new \Swagger\Client\Model\SemestreBody(); // \Swagger\Client\Model\SemestreBody | Semestre item to add/edit

try {
    $result = $apiInstance->addSemestre($diplome, $accro_m, $accro_p, $semestre);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemestresApi->addSemestre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **accro_p** | **string**|  |
 **semestre** | [**\Swagger\Client\Model\SemestreBody**](../Model/SemestreBody.md)| Semestre item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\SemestreBody[]**](../Model/SemestreBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSemestre**
> deleteSemestre($diplome, $accro_m, $accro_p, $sem)

deletes a Semestre

Delete information about a Semestre

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SemestresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 
$sem = "sem_example"; // string | 

try {
    $apiInstance->deleteSemestre($diplome, $accro_m, $accro_p, $sem);
} catch (Exception $e) {
    echo 'Exception when calling SemestresApi->deleteSemestre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **accro_p** | **string**|  |
 **sem** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSemestre**
> \Swagger\Client\Model\Semestre getSemestre($diplome, $accro_m, $accro_p, $sem)

gets a Semestre

Obtain information about a Semestre

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SemestresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 
$sem = "sem_example"; // string | 

try {
    $result = $apiInstance->getSemestre($diplome, $accro_m, $accro_p, $sem);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemestresApi->getSemestre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **accro_p** | **string**|  |
 **sem** | **string**|  |

### Return type

[**\Swagger\Client\Model\Semestre**](../Model/Semestre.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSemestres**
> \Swagger\Client\Model\ListSemestres getSemestres($diplome, $accro_m, $accro_p)

gets Semestres

By passing in the appropriate options, you can search for available Semestres in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SemestresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 

try {
    $result = $apiInstance->getSemestres($diplome, $accro_m, $accro_p);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemestresApi->getSemestres: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ListSemestres**](../Model/ListSemestres.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSemestre**
> \Swagger\Client\Model\SemestreBody updateSemestre($diplome, $accro_m, $accro_p, $sem, $semestre)

update a Semestre

Update information about a Semestre

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SemestresApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$accro_p = "accro_p_example"; // string | 
$sem = "sem_example"; // string | 
$semestre = new \Swagger\Client\Model\SemestreBody(); // \Swagger\Client\Model\SemestreBody | Semestre item to add/edit

try {
    $result = $apiInstance->updateSemestre($diplome, $accro_m, $accro_p, $sem, $semestre);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SemestresApi->updateSemestre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **accro_p** | **string**|  |
 **sem** | **string**|  |
 **semestre** | [**\Swagger\Client\Model\SemestreBody**](../Model/SemestreBody.md)| Semestre item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\SemestreBody**](../Model/SemestreBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


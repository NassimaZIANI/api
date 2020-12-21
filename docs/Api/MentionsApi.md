# Swagger\Client\MentionsApi

All URIs are relative to *https://virtserver.swaggerhub.com/NassimaZIANI/apogee_API/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMention**](MentionsApi.md#addMention) | **POST** /diplomes/{diplome}/mentions | adds a Mention
[**deleteMention**](MentionsApi.md#deleteMention) | **DELETE** /diplomes/{diplome}/mentions/{accroM} | deletes a Mention
[**getMentionAccro**](MentionsApi.md#getMentionAccro) | **GET** /diplomes/{diplome}/mentions/{accroM} | gets a Mention by it&#39;s accro
[**getMentions**](MentionsApi.md#getMentions) | **GET** /diplomes/{diplome}/mentions | gets Mentions
[**updateMentionAccro**](MentionsApi.md#updateMentionAccro) | **PUT** /diplomes/{diplome}/mentions/{accroM} | update a Mention by its accro


# **addMention**
> \Swagger\Client\Model\MentionBody[] addMention($diplome, $mention)

adds a Mention

Adds a Mention to the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$mention = new \Swagger\Client\Model\MentionBody(); // \Swagger\Client\Model\MentionBody | Mention item to add/edit

try {
    $result = $apiInstance->addMention($diplome, $mention);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->addMention: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **mention** | [**\Swagger\Client\Model\MentionBody**](../Model/MentionBody.md)| Mention item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\MentionBody[]**](../Model/MentionBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMention**
> deleteMention($diplome, $accro_m)

deletes a Mention

Delete information about a Mention

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 

try {
    $apiInstance->deleteMention($diplome, $accro_m);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->deleteMention: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMentionAccro**
> \Swagger\Client\Model\Mention getMentionAccro($diplome, $accro_m)

gets a Mention by it's accro

Obtain information about a Mention from its unique accronyme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 

try {
    $result = $apiInstance->getMentionAccro($diplome, $accro_m);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->getMentionAccro: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |

### Return type

[**\Swagger\Client\Model\Mention**](../Model/Mention.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMentions**
> \Swagger\Client\Model\ListMentions getMentions($diplome, $accro_p)

gets Mentions

By passing in the appropriate options, you can search for available Mentions in the system

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_p = "accro_p_example"; // string | 

try {
    $result = $apiInstance->getMentions($diplome, $accro_p);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->getMentions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_p** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ListMentions**](../Model/ListMentions.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMentionAccro**
> \Swagger\Client\Model\MentionBody updateMentionAccro($diplome, $accro_m, $mention)

update a Mention by its accro

Update information about a Mention from its unique accronyme

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MentionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$diplome = "diplome_example"; // string | 
$accro_m = "accro_m_example"; // string | 
$mention = new \Swagger\Client\Model\MentionBody(); // \Swagger\Client\Model\MentionBody | Mention item to add/edit

try {
    $result = $apiInstance->updateMentionAccro($diplome, $accro_m, $mention);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MentionsApi->updateMentionAccro: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **diplome** | **string**|  |
 **accro_m** | **string**|  |
 **mention** | [**\Swagger\Client\Model\MentionBody**](../Model/MentionBody.md)| Mention item to add/edit | [optional]

### Return type

[**\Swagger\Client\Model\MentionBody**](../Model/MentionBody.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


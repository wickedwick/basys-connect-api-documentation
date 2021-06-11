# Connect16ResTfulV1.VaultApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiV1VaultDeleteVaultCardByIDVaultCardIDPost**](VaultApi.md#apiV1VaultDeleteVaultCardByIDVaultCardIDPost) | **POST** /api/v1/Vault/DeleteVaultCardByID/{vaultCardID} | Used for deleting Vault card by Vault card ID
[**apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost**](VaultApi.md#apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost) | **POST** /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID} | Used for deleting a Vault check by Vault check ID
[**apiV1VaultGetVaultRecordReferenceGet**](VaultApi.md#apiV1VaultGetVaultRecordReferenceGet) | **GET** /api/v1/Vault/GetVaultRecord/{reference} | Used for getting a Vault record by reference
[**apiV1VaultSaveVaultCardVaultIDPost**](VaultApi.md#apiV1VaultSaveVaultCardVaultIDPost) | **POST** /api/v1/Vault/SaveVaultCard/{vaultID} | Used for saving a Vault card by vauld ID
[**apiV1VaultSaveVaultPost**](VaultApi.md#apiV1VaultSaveVaultPost) | **POST** /api/v1/Vault/SaveVault | Used for saving a Vault record
[**apiV1VaultSearchVaultPost**](VaultApi.md#apiV1VaultSearchVaultPost) | **POST** /api/v1/Vault/SearchVault | Used for searching Vault records
[**apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost**](VaultApi.md#apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost) | **POST** /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID} | Used for submitting a check with a Vault check ID
[**apiV1VaultSubmitWithVaultCardIDVaultCardIDPost**](VaultApi.md#apiV1VaultSubmitWithVaultCardIDVaultCardIDPost) | **POST** /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID} | Used for submitting with a Vault card ID

<a name="apiV1VaultDeleteVaultCardByIDVaultCardIDPost"></a>
# **apiV1VaultDeleteVaultCardByIDVaultCardIDPost**
> Response apiV1VaultDeleteVaultCardByIDVaultCardIDPost(vaultCardID, account, password)

Used for deleting Vault card by Vault card ID

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let vaultCardID = 56; // Number | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1VaultDeleteVaultCardByIDVaultCardIDPost(vaultCardID, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vaultCardID** | **Number**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost"></a>
# **apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost**
> Response apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost(vaultCheckID, account, password)

Used for deleting a Vault check by Vault check ID

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let vaultCheckID = 56; // Number | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1VaultDeleteVaultCheckByIDVaultCheckIDPost(vaultCheckID, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vaultCheckID** | **Number**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VaultGetVaultRecordReferenceGet"></a>
# **apiV1VaultGetVaultRecordReferenceGet**
> Record apiV1VaultGetVaultRecordReferenceGet(reference, account, password)

Used for getting a Vault record by reference

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let reference = "reference_example"; // String | 
let account = "account_example"; // String | 
let password = "password_example"; // String | 

apiInstance.apiV1VaultGetVaultRecordReferenceGet(reference, account, password, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **String**|  | 
 **account** | **String**|  | 
 **password** | **String**|  | 

### Return type

[**Record**](Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VaultSaveVaultCardVaultIDPost"></a>
# **apiV1VaultSaveVaultCardVaultIDPost**
> Response apiV1VaultSaveVaultCardVaultIDPost(accountpasswordvaultID, opts)

Used for saving a Vault card by vauld ID

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let vaultID = 56; // Number | 
let opts = { 
  'body': new Connect16ResTfulV1.VaultCreditCard() // VaultCreditCard | 
};
apiInstance.apiV1VaultSaveVaultCardVaultIDPost(accountpasswordvaultID, opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **String**|  | 
 **password** | **String**|  | 
 **vaultID** | **Number**|  | 
 **body** | [**VaultCreditCard**](VaultCreditCard.md)|  | [optional] 

### Return type

[**Response**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VaultSaveVaultPost"></a>
# **apiV1VaultSaveVaultPost**
> [Response] apiV1VaultSaveVaultPost(accountpassword, opts)

Used for saving a Vault record

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let opts = { 
  'body': new Connect16ResTfulV1.Record() // Record | 
};
apiInstance.apiV1VaultSaveVaultPost(accountpassword, opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **String**|  | 
 **password** | **String**|  | 
 **body** | [**Record**](Record.md)|  | [optional] 

### Return type

[**[Response]**](Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VaultSearchVaultPost"></a>
# **apiV1VaultSearchVaultPost**
> [Record] apiV1VaultSearchVaultPost(accountpassword, opts)

Used for searching Vault records

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let opts = { 
  'body': new Connect16ResTfulV1.SearchVault() // SearchVault | 
};
apiInstance.apiV1VaultSearchVaultPost(accountpassword, opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **String**|  | 
 **password** | **String**|  | 
 **body** | [**SearchVault**](SearchVault.md)|  | [optional] 

### Return type

[**[Record]**](Record.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost"></a>
# **apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost**
> CheckTransaction apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost(accountpasswordvaultCheckID, opts)

Used for submitting a check with a Vault check ID

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let vaultCheckID = 56; // Number | 
let opts = { 
  'body': new Connect16ResTfulV1.CheckTransaction() // CheckTransaction | 
};
apiInstance.apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost(accountpasswordvaultCheckID, opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **String**|  | 
 **password** | **String**|  | 
 **vaultCheckID** | **Number**|  | 
 **body** | [**CheckTransaction**](CheckTransaction.md)|  | [optional] 

### Return type

[**CheckTransaction**](CheckTransaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

<a name="apiV1VaultSubmitWithVaultCardIDVaultCardIDPost"></a>
# **apiV1VaultSubmitWithVaultCardIDVaultCardIDPost**
> Transaction apiV1VaultSubmitWithVaultCardIDVaultCardIDPost(accountpasswordvaultCardID, opts)

Used for submitting with a Vault card ID

### Example
```javascript
import Connect16ResTfulV1 from 'connect16_res_tful_v1';

let apiInstance = new Connect16ResTfulV1.VaultApi();
let account = "account_example"; // String | 
let password = "password_example"; // String | 
let vaultCardID = 56; // Number | 
let opts = { 
  'body': new Connect16ResTfulV1.Transaction() // Transaction | 
};
apiInstance.apiV1VaultSubmitWithVaultCardIDVaultCardIDPost(accountpasswordvaultCardID, opts, (error, data, response) => {
  if (error) {
    console.error(error);
  } else {
    console.log('API called successfully. Returned data: ' + data);
  }
});
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account** | **String**|  | 
 **password** | **String**|  | 
 **vaultCardID** | **Number**|  | 
 **body** | [**Transaction**](Transaction.md)|  | [optional] 

### Return type

[**Transaction**](Transaction.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json


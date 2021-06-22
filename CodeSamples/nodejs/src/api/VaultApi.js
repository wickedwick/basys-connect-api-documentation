import ApiClient from "../ApiClient";
import CheckTransaction from '../model/CheckTransaction';
import Record from '../model/Record';
import Response from '../model/Response';
import Transaction from '../model/Transaction';

export default class VaultApi {
  constructor(apiClient) {
      this.apiClient = apiClient || ApiClient.instance;
  }

  deleteVaultCardByID(vaultCardID, account, password, callback) {
    const postBody = null;
    const pathParams = {
      'vaultCardID': vaultCardID
    };  
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = [];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Response;

    return this.apiClient.callApi(
      `/api/v1/Vault/DeleteVaultCardByID/${vaultCardID}`,
      'POST',
      pathParams,
      headerParams,
      postBody,
      contentTypes,
      accepts,
      returnType,
      callback
    );
  }

  deleteVaultCheckByID(vaultCheckID, account, password, callback) {
    const postBody = null;
    const pathParams = {
      'vaultCheckID': vaultCheckID
    };      
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = [];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Response;

    return this.apiClient.callApi(
      `/api/v1/Vault/DeleteVaultCheckByID/${vaultCheckID}`,
      'POST',
      pathParams,
      headerParams,
      postBody,
      contentTypes,
      accepts,
      returnType, 
      callback
    );
  }

  getVaultRecordReference(reference, account, password, callback) {
    const postBody = null;
    const pathParams = {
      'reference': reference
    };
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = [];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Record;

    return this.apiClient.callApi(
      `/api/v1/Vault/GetVaultRecord/${reference}`,
      'GET',
      pathParams,
      headerParams,
      postBody,
      contentTypes,
      accepts,
      returnType,
      callback
    );
  }

  saveVaultCardVaultId(vaultID, account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {
      'vaultID': vaultID
    }; 
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Response;

    return this.apiClient.callApi(
      `/api/v1/Vault/SaveVaultCard/${vaultID}`,
      'POST',
      pathParams,
      headerParams,
      postBody,
      contentTypes,
      accepts,
      returnType,
      callback
    );
  }

  saveVault(account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {
    };      
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = [Response];

    return this.apiClient.callApi(
      '/api/v1/Vault/SaveVault',
      'POST',
      pathParams,
      headerParams,
      postBody,
      contentTypes,
      accepts,
      returnType,
      callback
    );
  }

  searchVault(account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {
    };      
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = [Record];

    return this.apiClient.callApi(
      '/api/v1/Vault/SearchVault',
      'POST',
      pathParams,
      headerParams, 
      postBody,
      contentTypes, 
      accepts,
      returnType,
      callback
    );
  }

  submitCheckWithVaultCheckId(vaultCheckID, account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {
      'vaultCheckID': vaultCheckID
    };      
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = CheckTransaction;

    return this.apiClient.callApi(
      '/api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}',
      'POST',
      pathParams,
      headerParams,
      postBody,
      contentTypes,
      accepts,
      returnType,
      callback
    );
  }

  submitWithVaultCardId(vaultCardID, account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {
      'vaultCardID': vaultCardID
    };
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Transaction;

    return this.apiClient.callApi(
      '/api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}',
      'POST',
      pathParams,
      headerParams,
      postBody,
      contentTypes,
      accepts,
      returnType,
      callback
    );
  }
}

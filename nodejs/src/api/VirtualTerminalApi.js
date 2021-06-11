import ApiClient from "../ApiClient";
import CheckTransaction from '../model/CheckTransaction';
import QueryTransaction from '../model/QueryTransaction';
import Response from '../model/Response';
import Transaction from '../model/Transaction';

export default class VirtualTerminalApi {
  constructor(apiClient) {
      this.apiClient = apiClient || ApiClient.instance;
  }

  markTransactionId(transactionID, account, password, callback) {
    const postBody = null;
    const pathParams = {
      'transactionID': transactionID
    };
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = [];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Response;

    return this.apiClient.callApi(
      `/api/v1/VirtualTerminal/Mark/${transactionID}`,
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

  markTransactions(account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {};
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Response;

    return this.apiClient.callApi(
      '/api/v1/VirtualTerminal/MarkTransactions',
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

  terminalQuery(account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {};
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = QueryTransaction;

    return this.apiClient.callApi(
      '/api/v1/VirtualTerminal/Query',
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

  terminalSubmitCheck(account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {};
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = CheckTransaction;
  
    return this.apiClient.callApi(
      '/api/v1/VirtualTerminal/SubmitCheck',
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

  terminalSubmit(account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {};
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Transaction;

    return this.apiClient.callApi(
      '/api/v1/VirtualTerminal/Submit',
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

  terminalUpdateTransactionInfo(transactionID, account, password, opts, callback) {
    opts = opts || {};
    const postBody = opts['body'];
    const pathParams = {
      'transactionID': transactionID
    };
    const headerParams = {
      'Account': account,
      'Password': password
    };
    const contentTypes = ['application/json', 'text/json', 'application/_*+json'];
    const accepts = ['text/plain', 'application/json', 'text/json'];
    const returnType = Response;

    return this.apiClient.callApi(
      `/api/v1/VirtualTerminal/UpdateTransactionInfo/${transactionID}`,
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

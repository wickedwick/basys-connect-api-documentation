import ApiClient from "../ApiClient";
import Response from '../model/Response';

export default class CommunicationApi {
    constructor(apiClient) {
        this.apiClient = apiClient || ApiClient.instance;
    }

    postEmailReceipt(account, password, opts, callback) {
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
        '/api/v1/Communication/EmailReceipt',
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

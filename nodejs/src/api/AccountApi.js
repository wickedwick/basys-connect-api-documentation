import ApiClient from "../ApiClient";
import Settings from '../model/Settings';

export default class AccountApi {
    constructor(apiClient) {
        this.apiClient = apiClient || ApiClient.instance;
    }

    getAccountSettings(account, password, callback) {
      const postBody = null;
      const pathParams = {};
      const contentTypes = [];
      const accepts = ['text/plain', 'application/json', 'text/json'];
      const returnType = Settings;
      const headerParams = {
        'Account': account,
        'Password': password
      };

      return this.apiClient.callApi(
        '/api/v1/Account/GetAccountSettings',
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
}

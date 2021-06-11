/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';

export default class SearchVault {
  constructor() {
    this.Reference = '';
    this.BusinessName = '';
    this.FirstName = '';
    this.LastName = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new SearchVault();

      if (data.hasOwnProperty('Reference')) {
        obj['Reference'] = ApiClient.convertToType(data['Reference'], 'String');
      }
      if (data.hasOwnProperty('BusinessName')) {
        obj['BusinessName'] = ApiClient.convertToType(data['BusinessName'], 'String');
      }
      if (data.hasOwnProperty('FirstName')) {
        obj['FirstName'] = ApiClient.convertToType(data['FirstName'], 'String');
      }
      if (data.hasOwnProperty('LastName')) {
        obj['LastName'] = ApiClient.convertToType(data['LastName'], 'String');
      }
    }
    return obj;
  }
}

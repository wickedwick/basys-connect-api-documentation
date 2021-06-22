/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';

export default class Response {
  constructor() {
    this.Error = false;
    this.Message = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new Response();

      if (data.hasOwnProperty('Error')) {
        obj['Error'] = ApiClient.convertToType(data['Error'], 'Boolean');
      }
      if (data.hasOwnProperty('Message')) {
        obj['Message'] = ApiClient.convertToType(data['Message'], 'String');
      }
    }
    return obj;
  }
}

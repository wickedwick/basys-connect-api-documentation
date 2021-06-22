/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';

export default class ReceiptCustomLines {
  constructor() {
    this.CustomLine1 = '';
    this.CustomLine2 = '';
    this.CustomLine3 = '';
    this.CustomLine4 = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new ReceiptCustomLines();

      if (data.hasOwnProperty('CustomLine1')) {
        obj['CustomLine1'] = ApiClient.convertToType(data['CustomLine1'], 'String');
      }
      if (data.hasOwnProperty('CustomLine2')) {
        obj['CustomLine2'] = ApiClient.convertToType(data['CustomLine2'], 'String');
      }
      if (data.hasOwnProperty('CustomLine3')) {
        obj['CustomLine3'] = ApiClient.convertToType(data['CustomLine3'], 'String');
      }
      if (data.hasOwnProperty('CustomLine4')) {
        obj['CustomLine4'] = ApiClient.convertToType(data['CustomLine4'], 'String');
      }
    }
    return obj;
  }
}

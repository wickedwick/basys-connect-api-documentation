/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';

export default class UpdateTransactionInfo {
  constructor() {
    this.InvoiceNumber = '';
    this.CustomerNumber = '';
    this.PONumber = '';
    this.Note = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new UpdateTransactionInfo();

      if (data.hasOwnProperty('InvoiceNumber')) {
        obj['InvoiceNumber'] = ApiClient.convertToType(data['InvoiceNumber'], 'String');
      }
      if (data.hasOwnProperty('CustomerNumber')) {
        obj['CustomerNumber'] = ApiClient.convertToType(data['CustomerNumber'], 'String');
      }
      if (data.hasOwnProperty('PONumber')) {
        obj['PONumber'] = ApiClient.convertToType(data['PONumber'], 'String');
      }
      if (data.hasOwnProperty('Note')) {
        obj['Note'] = ApiClient.convertToType(data['Note'], 'String');
      }
    }
    return obj;
  }
}

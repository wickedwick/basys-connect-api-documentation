/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';

export default class EmailReceipt {
  constructor() {
    this.TransactionID = '';
    this.ToAddresses = '';
    this.Subject = '';
    this.Header = '';
    this.Footer = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new EmailReceipt();

      if (data.hasOwnProperty('TransactionID')) {
        obj['TransactionID'] = ApiClient.convertToType(data['TransactionID'], 'String');
      }
      if (data.hasOwnProperty('ToAddresses')) {
        obj['ToAddresses'] = ApiClient.convertToType(data['ToAddresses'], 'String');
      }
      if (data.hasOwnProperty('Subject')) {
        obj['Subject'] = ApiClient.convertToType(data['Subject'], 'String');
      }
      if (data.hasOwnProperty('Header')) {
        obj['Header'] = ApiClient.convertToType(data['Header'], 'String');
      }
      if (data.hasOwnProperty('Footer')) {
        obj['Footer'] = ApiClient.convertToType(data['Footer'], 'String');
      }
    }
    return obj;
  }
}

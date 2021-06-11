/* eslint-disable no-prototype-builtins */
import ReceiptCustomLines from './ReceiptCustomLines';

export default class Receipt {
  constructor() {
    this.Header = new ReceiptCustomLines();
    this.Footer = new ReceiptCustomLines();
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new Receipt();

      if (data.hasOwnProperty('Header')) {
        obj['Header'] = ReceiptCustomLines.constructFromObject(data['Header']);
      }
      if (data.hasOwnProperty('Footer')) {
        obj['Footer'] = ReceiptCustomLines.constructFromObject(data['Footer']);
      }
    }
    return obj;
  }
}

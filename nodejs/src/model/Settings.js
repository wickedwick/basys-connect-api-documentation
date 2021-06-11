/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';
import Business from './Business';
import CheckTransactionSettings from './CheckTransactionSettings';
import Contact from './Contact';
import CreditCardTransactionSettings from './CreditCardTransactionSettings';
import FieldInfo from './FieldInfo';
import Receipt from './Receipt';
import Response from './Response';

export default class Settings {
  constructor() {
    this.CreditCardTransactionSettings = new CreditCardTransactionSettings();
    this.CheckTransactionSettings = new CheckTransactionSettings();
    this.Business = new Business();
    this.MainContact = new Contact();
    this.Receipt40 = new Receipt();
    this.Receipt80 = new Receipt();
    this.PrintSignatureLine = false;
    this.Response = new Response();
    this.AccountID = '';
    this.CopyEmailReceipt = new FieldInfo();
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new Settings();

      if (data.hasOwnProperty('CreditCardTransactionSettings')) {
        obj['CreditCardTransactionSettings'] = CreditCardTransactionSettings.constructFromObject(
          data['CreditCardTransactionSettings']
        );
      }
      if (data.hasOwnProperty('CheckTransactionSettings')) {
        obj['CheckTransactionSettings'] = CheckTransactionSettings.constructFromObject(data['CheckTransactionSettings']);
      }
      if (data.hasOwnProperty('Business')) {
        obj['Business'] = Business.constructFromObject(data['Business']);
      }
      if (data.hasOwnProperty('MainContact')) {
        obj['MainContact'] = Contact.constructFromObject(data['MainContact']);
      }
      if (data.hasOwnProperty('Receipt40')) {
        obj['Receipt40'] = Receipt.constructFromObject(data['Receipt40']);
      }
      if (data.hasOwnProperty('Receipt80')) {
        obj['Receipt80'] = Receipt.constructFromObject(data['Receipt80']);
      }
      if (data.hasOwnProperty('PrintSignatureLine')) {
        obj['PrintSignatureLine'] = ApiClient.convertToType(data['PrintSignatureLine'], 'Boolean');
      }
      if (data.hasOwnProperty('Response')) {
        obj['Response'] = Response.constructFromObject(data['Response']);
      }
      if (data.hasOwnProperty('AccountID')) {
        obj['AccountID'] = ApiClient.convertToType(data['AccountID'], 'String');
      }
      if (data.hasOwnProperty('CopyEmailReceipt')) {
        obj['CopyEmailReceipt'] = FieldInfo.constructFromObject(data['CopyEmailReceipt']);
      }
    }
    return obj;
  }
}

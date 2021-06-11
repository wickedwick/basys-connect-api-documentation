/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';
import FieldInfo from './FieldInfo';
import TransactionType from './TransactionType';

export default class CreditCardTransactionSettings {
  constructor() {
    this.CVV = new FieldInfo();
    this.ContactName = new FieldInfo();
    this.ContactTitle = new FieldInfo();
    this.EmailAddress = new FieldInfo();
    this.Phone = new FieldInfo();
    this.Fax = new FieldInfo();
    this.BillingAddress = new FieldInfo();
    this.BillingAddress2 = new FieldInfo();
    this.BillingCity = new FieldInfo();
    this.BillingState = new FieldInfo();
    this.BillingZip = new FieldInfo();
    this.PONumber = new FieldInfo();
    this.InvoiceNumber = new FieldInfo();
    this.BusinessName = new FieldInfo();
    this.CustomerNumber = new FieldInfo();
    this.ReferenceNote = new FieldInfo();
    this.SalesTax = new FieldInfo();
    this.TaxExempt = new FieldInfo();
    this.CardTracks = new FieldInfo();
    this.CardZip = new FieldInfo();
    this.CardAddress = new FieldInfo();
    this.ItemDescription = '';
    this.DefaultTransactionType = TransactionType.Sale;
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new CreditCardTransactionSettings();

      if (data.hasOwnProperty('CVV')) {
        obj['CVV'] = FieldInfo.constructFromObject(data['CVV']);
      }
      if (data.hasOwnProperty('ContactName')) {
        obj['ContactName'] = FieldInfo.constructFromObject(data['ContactName']);
      }
      if (data.hasOwnProperty('ContactTitle')) {
        obj['ContactTitle'] = FieldInfo.constructFromObject(data['ContactTitle']);
      }
      if (data.hasOwnProperty('EmailAddress')) {
        obj['EmailAddress'] = FieldInfo.constructFromObject(data['EmailAddress']);
      }
      if (data.hasOwnProperty('Phone')) {
        obj['Phone'] = FieldInfo.constructFromObject(data['Phone']);
      }
      if (data.hasOwnProperty('Fax')) {
        obj['Fax'] = FieldInfo.constructFromObject(data['Fax']);
      }
      if (data.hasOwnProperty('BillingAddress')) {
        obj['BillingAddress'] = FieldInfo.constructFromObject(data['BillingAddress']);
      }
      if (data.hasOwnProperty('BillingAddress2')) {
        obj['BillingAddress2'] = FieldInfo.constructFromObject(data['BillingAddress2']);
      }
      if (data.hasOwnProperty('BillingCity')) {
        obj['BillingCity'] = FieldInfo.constructFromObject(data['BillingCity']);
      }
      if (data.hasOwnProperty('BillingState')) {
        obj['BillingState'] = FieldInfo.constructFromObject(data['BillingState']);
      }
      if (data.hasOwnProperty('BillingZip')) {
        obj['BillingZip'] = FieldInfo.constructFromObject(data['BillingZip']);
      }
      if (data.hasOwnProperty('PONumber')) {
        obj['PONumber'] = FieldInfo.constructFromObject(data['PONumber']);
      }
      if (data.hasOwnProperty('InvoiceNumber')) {
        obj['InvoiceNumber'] = FieldInfo.constructFromObject(data['InvoiceNumber']);
      }
      if (data.hasOwnProperty('BusinessName')) {
        obj['BusinessName'] = FieldInfo.constructFromObject(data['BusinessName']);
      }
      if (data.hasOwnProperty('CustomerNumber')) {
        obj['CustomerNumber'] = FieldInfo.constructFromObject(data['CustomerNumber']);
      }
      if (data.hasOwnProperty('ReferenceNote')) {
        obj['ReferenceNote'] = FieldInfo.constructFromObject(data['ReferenceNote']);
      }
      if (data.hasOwnProperty('SalesTax')) {
        obj['SalesTax'] = FieldInfo.constructFromObject(data['SalesTax']);
      }
      if (data.hasOwnProperty('TaxExempt')) {
        obj['TaxExempt'] = FieldInfo.constructFromObject(data['TaxExempt']);
      }
      if (data.hasOwnProperty('CardTracks')) {
        obj['CardTracks'] = FieldInfo.constructFromObject(data['CardTracks']);
      }
      if (data.hasOwnProperty('CardZip')) {
        obj['CardZip'] = FieldInfo.constructFromObject(data['CardZip']);
      }
      if (data.hasOwnProperty('CardAddress')) {
        obj['CardAddress'] = FieldInfo.constructFromObject(data['CardAddress']);
      }
      if (data.hasOwnProperty('ItemDescription')) {
        obj['ItemDescription'] = ApiClient.convertToType(data['ItemDescription'], 'String');
      }
      if (data.hasOwnProperty('DefaultTransactionType')) {
        obj['DefaultTransactionType'] = TransactionType.constructFromObject(data['DefaultTransactionType']);
      }
    }
    return obj;
  }
}

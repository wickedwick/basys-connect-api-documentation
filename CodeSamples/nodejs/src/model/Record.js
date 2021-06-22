/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';
import Business from './Business';
import Contact from './Contact';
import Response from './Response';
import VaultCheck from './VaultCheck';
import VaultCreditCard from './VaultCreditCard';

export default class Record {
  constructor() {
    this.Response = new Response();
    this.ID = 0;
    this.Reference = '';
    this.Business = new Business();
    this.Contact = new Contact();
    this.PO = '';
    this.Invoice = '';
    this.Customer = '';
    this.TaxExempt = false;
    this.Note = '';
    this.CreditCards = new VaultCreditCard();
    this.Checks = new VaultCheck();
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new Record();

      if (data.hasOwnProperty('Response')) {
        obj['Response'] = Response.constructFromObject(data['Response']);
      }
      if (data.hasOwnProperty('ID')) {
        obj['ID'] = ApiClient.convertToType(data['ID'], 'Number');
      }
      if (data.hasOwnProperty('Reference')) {
        obj['Reference'] = ApiClient.convertToType(data['Reference'], 'String');
      }
      if (data.hasOwnProperty('Business')) {
        obj['Business'] = Business.constructFromObject(data['Business']);
      }
      if (data.hasOwnProperty('Contact')) {
        obj['Contact'] = Contact.constructFromObject(data['Contact']);
      }
      if (data.hasOwnProperty('PO')) {
        obj['PO'] = ApiClient.convertToType(data['PO'], 'String');
      }
      if (data.hasOwnProperty('Invoice')) {
        obj['Invoice'] = ApiClient.convertToType(data['Invoice'], 'String');
      }
      if (data.hasOwnProperty('Customer')) {
        obj['Customer'] = ApiClient.convertToType(data['Customer'], 'String');
      }
      if (data.hasOwnProperty('TaxExempt')) {
        obj['TaxExempt'] = ApiClient.convertToType(data['TaxExempt'], 'Boolean');
      }
      if (data.hasOwnProperty('Note')) {
        obj['Note'] = ApiClient.convertToType(data['Note'], 'String');
      }
      if (data.hasOwnProperty('CreditCards')) {
        obj['CreditCards'] = ApiClient.convertToType(data['CreditCards'], [VaultCreditCard]);
      }
      if (data.hasOwnProperty('Checks')) {
        obj['Checks'] = ApiClient.convertToType(data['Checks'], [VaultCheck]);
      }
    }
    return obj;
  }
}

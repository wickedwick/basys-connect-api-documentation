/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';

export default class TransactionItem {
  constructor() {
    this.TaxIncluded = false;
    this.Credit = false;
    this.ExtendedAmount = 0;
    this.ItemNumber = '';
    this.UnitCost = 0;
    this.Quantity = 0;
    this.Description = '';
    this.Discount = 0;
    this.Tax = 0;
    this.CommodityCode = '';
    this.UnitOfMeasure = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new TransactionItem();

      if (data.hasOwnProperty('TaxIncluded')) {
        obj['TaxIncluded'] = ApiClient.convertToType(data['TaxIncluded'], 'Boolean');
      }
      if (data.hasOwnProperty('Credit')) {
        obj['Credit'] = ApiClient.convertToType(data['Credit'], 'Boolean');
      }
      if (data.hasOwnProperty('ExtendedAmount')) {
        obj['ExtendedAmount'] = ApiClient.convertToType(data['ExtendedAmount'], 'Number');
      }
      if (data.hasOwnProperty('ItemNumber')) {
        obj['ItemNumber'] = ApiClient.convertToType(data['ItemNumber'], 'String');
      }
      if (data.hasOwnProperty('UnitCost')) {
        obj['UnitCost'] = ApiClient.convertToType(data['UnitCost'], 'Number');
      }
      if (data.hasOwnProperty('Quantity')) {
        obj['Quantity'] = ApiClient.convertToType(data['Quantity'], 'Number');
      }
      if (data.hasOwnProperty('Description')) {
        obj['Description'] = ApiClient.convertToType(data['Description'], 'String');
      }
      if (data.hasOwnProperty('Discount')) {
        obj['Discount'] = ApiClient.convertToType(data['Discount'], 'Number');
      }
      if (data.hasOwnProperty('Tax')) {
        obj['Tax'] = ApiClient.convertToType(data['Tax'], 'Number');
      }
      if (data.hasOwnProperty('CommodityCode')) {
        obj['CommodityCode'] = ApiClient.convertToType(data['CommodityCode'], 'String');
      }
      if (data.hasOwnProperty('UnitOfMeasure')) {
        obj['UnitOfMeasure'] = ApiClient.convertToType(data['UnitOfMeasure'], 'String');
      }
    }
    return obj;
  }
}

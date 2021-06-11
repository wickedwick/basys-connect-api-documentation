/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';
import TransactionItem from './TransactionItem';

export default class QueryTransaction {
  constructor() {
    this.Tran_Sequence = '';
    this.Tran_Batch = '';
    this.Tran_Modified = '';
    this.Tran_Processed = '';
    this.Tran_Settled = '';
    this.Submit_Time = '';
    this.Tran_Type = '';
    this.Tran_Amt = 0;
    this.Tran_Tax = 0;
    this.Tran_Inv = '';
    this.Tran_PO = '';
    this.Tran_CNum = '';
    this.Tran_Note = '';
    this.Card_Num = '';
    this.Card_Name = '';
    this.Card_Exp = '';
    this.AVS_Street = '';
    this.AVS_Zip = '';
    this.CVV_Num = '';
    this.Proc_ID = '';
    this.Proc_Resp = '';
    this.Proc_Code = '';
    this.Proc_Mess = '';
    this.AVS_Code = '';
    this.AVS_Resp = '';
    this.CVV_Code = '';
    this.CVV_Resp = '';
    this.Items = [];
    this.Business_Name = '';
    this.Business_Address = '';
    this.Business_Address2 = '';
    this.Business_City = '';
    this.Business_State = '';
    this.Business_Zip = '';
    this.Business_Country = '';
    this.Business_Website = '';
    this.Contact_FirstName = '';
    this.Contact_LastName = '';
    this.Contact_Phone = '';
    this.Contact_Fax = '';
    this.Contact_Email = '';
    this.Contact_Title = '';
    this.IP = '';
    this.TaxExempt = false;
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new QueryTransaction();

      if (data.hasOwnProperty('Tran_Sequence')) {
        obj['Tran_Sequence'] = ApiClient.convertToType(data['Tran_Sequence'], 'String');
      }
      if (data.hasOwnProperty('Tran_Batch')) {
        obj['Tran_Batch'] = ApiClient.convertToType(data['Tran_Batch'], 'String');
      }
      if (data.hasOwnProperty('Tran_Modified')) {
        obj['Tran_Modified'] = ApiClient.convertToType(data['Tran_Modified'], 'String');
      }
      if (data.hasOwnProperty('Tran_Processed')) {
        obj['Tran_Processed'] = ApiClient.convertToType(data['Tran_Processed'], 'String');
      }
      if (data.hasOwnProperty('Tran_Settled')) {
        obj['Tran_Settled'] = ApiClient.convertToType(data['Tran_Settled'], 'String');
      }
      if (data.hasOwnProperty('Submit_Time')) {
        obj['Submit_Time'] = ApiClient.convertToType(data['Submit_Time'], 'String');
      }
      if (data.hasOwnProperty('Tran_Type')) {
        obj['Tran_Type'] = ApiClient.convertToType(data['Tran_Type'], 'String');
      }
      if (data.hasOwnProperty('Tran_Amt')) {
        obj['Tran_Amt'] = ApiClient.convertToType(data['Tran_Amt'], 'Number');
      }
      if (data.hasOwnProperty('Tran_Tax')) {
        obj['Tran_Tax'] = ApiClient.convertToType(data['Tran_Tax'], 'Number');
      }
      if (data.hasOwnProperty('Tran_Inv')) {
        obj['Tran_Inv'] = ApiClient.convertToType(data['Tran_Inv'], 'String');
      }
      if (data.hasOwnProperty('Tran_PO')) {
        obj['Tran_PO'] = ApiClient.convertToType(data['Tran_PO'], 'String');
      }
      if (data.hasOwnProperty('Tran_CNum')) {
        obj['Tran_CNum'] = ApiClient.convertToType(data['Tran_CNum'], 'String');
      }
      if (data.hasOwnProperty('Tran_Note')) {
        obj['Tran_Note'] = ApiClient.convertToType(data['Tran_Note'], 'String');
      }
      if (data.hasOwnProperty('Card_Num')) {
        obj['Card_Num'] = ApiClient.convertToType(data['Card_Num'], 'String');
      }
      if (data.hasOwnProperty('Card_Name')) {
        obj['Card_Name'] = ApiClient.convertToType(data['Card_Name'], 'String');
      }
      if (data.hasOwnProperty('Card_Exp')) {
        obj['Card_Exp'] = ApiClient.convertToType(data['Card_Exp'], 'String');
      }
      if (data.hasOwnProperty('AVS_Street')) {
        obj['AVS_Street'] = ApiClient.convertToType(data['AVS_Street'], 'String');
      }
      if (data.hasOwnProperty('AVS_Zip')) {
        obj['AVS_Zip'] = ApiClient.convertToType(data['AVS_Zip'], 'String');
      }
      if (data.hasOwnProperty('CVV_Num')) {
        obj['CVV_Num'] = ApiClient.convertToType(data['CVV_Num'], 'String');
      }
      if (data.hasOwnProperty('Proc_ID')) {
        obj['Proc_ID'] = ApiClient.convertToType(data['Proc_ID'], 'String');
      }
      if (data.hasOwnProperty('Proc_Resp')) {
        obj['Proc_Resp'] = ApiClient.convertToType(data['Proc_Resp'], 'String');
      }
      if (data.hasOwnProperty('Proc_Code')) {
        obj['Proc_Code'] = ApiClient.convertToType(data['Proc_Code'], 'String');
      }
      if (data.hasOwnProperty('Proc_Mess')) {
        obj['Proc_Mess'] = ApiClient.convertToType(data['Proc_Mess'], 'String');
      }
      if (data.hasOwnProperty('AVS_Code')) {
        obj['AVS_Code'] = ApiClient.convertToType(data['AVS_Code'], 'String');
      }
      if (data.hasOwnProperty('AVS_Resp')) {
        obj['AVS_Resp'] = ApiClient.convertToType(data['AVS_Resp'], 'String');
      }
      if (data.hasOwnProperty('CVV_Code')) {
        obj['CVV_Code'] = ApiClient.convertToType(data['CVV_Code'], 'String');
      }
      if (data.hasOwnProperty('CVV_Resp')) {
        obj['CVV_Resp'] = ApiClient.convertToType(data['CVV_Resp'], 'String');
      }
      if (data.hasOwnProperty('Items')) {
        obj['Items'] = ApiClient.convertToType(data['Items'], [TransactionItem]);
      }
      if (data.hasOwnProperty('Business_Name')) {
        obj['Business_Name'] = ApiClient.convertToType(data['Business_Name'], 'String');
      }
      if (data.hasOwnProperty('Business_Address')) {
        obj['Business_Address'] = ApiClient.convertToType(data['Business_Address'], 'String');
      }
      if (data.hasOwnProperty('Business_Address2')) {
        obj['Business_Address2'] = ApiClient.convertToType(data['Business_Address2'], 'String');
      }
      if (data.hasOwnProperty('Business_City')) {
        obj['Business_City'] = ApiClient.convertToType(data['Business_City'], 'String');
      }
      if (data.hasOwnProperty('Business_State')) {
        obj['Business_State'] = ApiClient.convertToType(data['Business_State'], 'String');
      }
      if (data.hasOwnProperty('Business_Zip')) {
        obj['Business_Zip'] = ApiClient.convertToType(data['Business_Zip'], 'String');
      }
      if (data.hasOwnProperty('Business_Country')) {
        obj['Business_Country'] = ApiClient.convertToType(data['Business_Country'], 'String');
      }
      if (data.hasOwnProperty('Business_Website')) {
        obj['Business_Website'] = ApiClient.convertToType(data['Business_Website'], 'String');
      }
      if (data.hasOwnProperty('Contact_FirstName')) {
        obj['Contact_FirstName'] = ApiClient.convertToType(data['Contact_FirstName'], 'String');
      }
      if (data.hasOwnProperty('Contact_LastName')) {
        obj['Contact_LastName'] = ApiClient.convertToType(data['Contact_LastName'], 'String');
      }
      if (data.hasOwnProperty('Contact_Phone')) {
        obj['Contact_Phone'] = ApiClient.convertToType(data['Contact_Phone'], 'String');
      }
      if (data.hasOwnProperty('Contact_Fax')) {
        obj['Contact_Fax'] = ApiClient.convertToType(data['Contact_Fax'], 'String');
      }
      if (data.hasOwnProperty('Contact_Email')) {
        obj['Contact_Email'] = ApiClient.convertToType(data['Contact_Email'], 'String');
      }
      if (data.hasOwnProperty('Contact_Title')) {
        obj['Contact_Title'] = ApiClient.convertToType(data['Contact_Title'], 'String');
      }
      if (data.hasOwnProperty('IP')) {
        obj['IP'] = ApiClient.convertToType(data['IP'], 'String');
      }
      if (data.hasOwnProperty('TaxExempt')) {
        obj['TaxExempt'] = ApiClient.convertToType(data['TaxExempt'], 'Boolean');
      }
    }
    return obj;
  }
}

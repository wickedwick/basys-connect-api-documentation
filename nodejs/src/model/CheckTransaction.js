import ApiClient from '../ApiClient';
import CheckAccountType from './CheckAccountType';
import CheckTransactionType from './CheckTransactionType';

export default class CheckTransaction {
    constructor() {
        this.Terminal_ID = '';
        this.Account_Number = '';
        this.Account_Type = new CheckAccountType();
        this.Check_Number = '';
        this.Routing_Number = '';
        this.MICR_Data = '';
        this.First_Name = '';
        this.Last_Name = '';
        this.Company_Name = '';
        this.Address1 = '';
        this.Address2 = '';
        this.City = '';
        this.State = '';
        this.Zip = '';
        this.Phone_Number = '';
        this.DL_Number = '';
        this.DL_State = '';
        this.Courtesy_Card_ID = '';
        this.SSN4 = '';
        this.DOB_Year = '';
        this.Check_Amount = '';
        this.Tran_Type = '';
        this.Proc_ID = '';
        this.IP_Address = '';
        this.CustomerNumber = '';
        this.PONumber = '';
        this.InvoiceNumber = '';
        this.TranNote = '';
        this.EmailAddress = '';
        this.SEC_Code = '';
        this.Proc_Resp = '';
        this.Proc_Code = '';
        this.Proc_Mess = '';
    }

    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new CheckTransaction();

            if (Object.prototype.hasOwnProperty.call(data, 'Terminal_ID')) {
                obj['Terminal_ID'] = ApiClient.convertToType(data['Terminal_ID'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Account_Number')) {
                obj['Account_Number'] = ApiClient.convertToType(data['Account_Number'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Account_Type')) {
                obj['Account_Type'] = CheckAccountType.constructFromObject(data['Account_Type']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Check_Number')) {
                obj['Check_Number'] = ApiClient.convertToType(data['Check_Number'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Routing_Number')) {
                obj['Routing_Number'] = ApiClient.convertToType(data['Routing_Number'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'MICR_Data')) {
                obj['MICR_Data'] = ApiClient.convertToType(data['MICR_Data'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'First_Name')) {
                obj['First_Name'] = ApiClient.convertToType(data['First_Name'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Last_Name')) {
                obj['Last_Name'] = ApiClient.convertToType(data['Last_Name'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Company_Name')) {
                obj['Company_Name'] = ApiClient.convertToType(data['Company_Name'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Address1')) {
                obj['Address1'] = ApiClient.convertToType(data['Address1'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Address2')) {
                obj['Address2'] = ApiClient.convertToType(data['Address2'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'City')) {
                obj['City'] = ApiClient.convertToType(data['City'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'State')) {
                obj['State'] = ApiClient.convertToType(data['State'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Zip')) {
                obj['Zip'] = ApiClient.convertToType(data['Zip'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Phone_Number')) {
                obj['Phone_Number'] = ApiClient.convertToType(data['Phone_Number'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'DL_Number')) {
                obj['DL_Number'] = ApiClient.convertToType(data['DL_Number'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'DL_State')) {
                obj['DL_State'] = ApiClient.convertToType(data['DL_State'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Courtesy_Card_ID')) {
                obj['Courtesy_Card_ID'] = ApiClient.convertToType(data['Courtesy_Card_ID'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'SSN4')) {
                obj['SSN4'] = ApiClient.convertToType(data['SSN4'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'DOB_Year')) {
                obj['DOB_Year'] = ApiClient.convertToType(data['DOB_Year'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Check_Amount')) {
                obj['Check_Amount'] = ApiClient.convertToType(data['Check_Amount'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Tran_Type')) {
                obj['Tran_Type'] = CheckTransactionType.constructFromObject(data['Tran_Type']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Proc_ID')) {
                obj['Proc_ID'] = ApiClient.convertToType(data['Proc_ID'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'IP_Address')) {
                obj['IP_Address'] = ApiClient.convertToType(data['IP_Address'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'CustomerNumber')) {
                obj['CustomerNumber'] = ApiClient.convertToType(data['CustomerNumber'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'PONumber')) {
                obj['PONumber'] = ApiClient.convertToType(data['PONumber'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'InvoiceNumber')) {
                obj['InvoiceNumber'] = ApiClient.convertToType(data['InvoiceNumber'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'TranNote')) {
                obj['TranNote'] = ApiClient.convertToType(data['TranNote'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'EmailAddress')) {
                obj['EmailAddress'] = ApiClient.convertToType(data['EmailAddress'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'SEC_Code')) {
                obj['SEC_Code'] = ApiClient.convertToType(data['SEC_Code'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Proc_Resp')) {
                obj['Proc_Resp'] = ApiClient.convertToType(data['Proc_Resp'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Proc_Code')) {
                obj['Proc_Code'] = ApiClient.convertToType(data['Proc_Code'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Proc_Mess')) {
                obj['Proc_Mess'] = ApiClient.convertToType(data['Proc_Mess'], 'String');
            }
        }
        return obj;
    }
}

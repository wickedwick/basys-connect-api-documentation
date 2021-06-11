import ApiClient from '../ApiClient';
import FieldInfo from './FieldInfo';

export default class CheckTransactionSettings {
    constructor() {
        this.Reader = new FieldInfo();
        this.ContactName = new FieldInfo();
        this.ContactTitle = new FieldInfo();
        this.EmailAddress = new FieldInfo();
        this.PhoneDefault = '';
        this.Fax = new FieldInfo();
        this.BillingAddressDefault = '';
        this.BillingAddress2 = new FieldInfo();
        this.BillingCityDefault = '';
        this.BillingStateDefault = '';
        this.BillingZipDefault = '';
        this.PONumber = new FieldInfo();
        this.InvoiceNumber = new FieldInfo();
        this.BusinessName = new FieldInfo();
        this.CustomerNumber = new FieldInfo();
        this.ReferenceNote = new FieldInfo();
        this.DefaultSECCode = '';
    }

    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new CheckTransactionSettings();

            if (Object.prototype.hasOwnProperty.call(data, 'Reader')) {
                obj['Reader'] = FieldInfo.constructFromObject(data['Reader']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'ContactName')) {
                obj['ContactName'] = FieldInfo.constructFromObject(data['ContactName']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'ContactTitle')) {
                obj['ContactTitle'] = FieldInfo.constructFromObject(data['ContactTitle']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'EmailAddress')) {
                obj['EmailAddress'] = FieldInfo.constructFromObject(data['EmailAddress']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'PhoneDefault')) {
                obj['PhoneDefault'] = ApiClient.convertToType(data['PhoneDefault'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Fax')) {
                obj['Fax'] = FieldInfo.constructFromObject(data['Fax']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'BillingAddressDefault')) {
                obj['BillingAddressDefault'] = ApiClient.convertToType(data['BillingAddressDefault'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'BillingAddress2')) {
                obj['BillingAddress2'] = FieldInfo.constructFromObject(data['BillingAddress2']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'BillingCityDefault')) {
                obj['BillingCityDefault'] = ApiClient.convertToType(data['BillingCityDefault'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'BillingStateDefault')) {
                obj['BillingStateDefault'] = ApiClient.convertToType(data['BillingStateDefault'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'BillingZipDefault')) {
                obj['BillingZipDefault'] = ApiClient.convertToType(data['BillingZipDefault'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'PONumber')) {
                obj['PONumber'] = FieldInfo.constructFromObject(data['PONumber']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'InvoiceNumber')) {
                obj['InvoiceNumber'] = FieldInfo.constructFromObject(data['InvoiceNumber']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'BusinessName')) {
                obj['BusinessName'] = FieldInfo.constructFromObject(data['BusinessName']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'CustomerNumber')) {
                obj['CustomerNumber'] = FieldInfo.constructFromObject(data['CustomerNumber']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'ReferenceNote')) {
                obj['ReferenceNote'] = FieldInfo.constructFromObject(data['ReferenceNote']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'DefaultSECCode')) {
                obj['DefaultSECCode'] = ApiClient.convertToType(data['DefaultSECCode'], 'String');
            }
        }
        return obj;
    }
}

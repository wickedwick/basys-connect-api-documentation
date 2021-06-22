import ApiClient from '../ApiClient';
import Address from './Address';

export default class Business {
    constructor() {
        this.Address = new Address();
        this.Name = '';
        this.Phone = '';
        this.Fax = '';
        this.WebSite = '';
    }

    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new Business();

            if (Object.prototype.hasOwnProperty.call(data, 'Address')) {
                obj['Address'] = Address.constructFromObject(data['Address']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Name')) {
                obj['Name'] = ApiClient.convertToType(data['Name'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Phone')) {
                obj['Phone'] = ApiClient.convertToType(data['Phone'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Fax')) {
                obj['Fax'] = ApiClient.convertToType(data['Fax'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'WebSite')) {
                obj['WebSite'] = ApiClient.convertToType(data['WebSite'], 'String');
            }
        }
        return obj;
    }
}

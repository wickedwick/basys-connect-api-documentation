import ApiClient from '../ApiClient';

export default class Address {
    constructor() {
        this.AddressLine1 = '';
        this.AddressLine2 = '';
        this.City = '';
        this.State = '';
        this.ZipCode = '';
    }

    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new Address();

            if (Object.prototype.hasOwnProperty.call(data, 'AddressLine1')) {
                obj['AddressLine1'] = ApiClient.convertToType(data['AddressLine1'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'AddressLine2')) {
                obj['AddressLine2'] = ApiClient.convertToType(data['AddressLine2'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'City')) {
                obj['City'] = ApiClient.convertToType(data['City'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'State')) {
                obj['State'] = ApiClient.convertToType(data['State'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'ZipCode')) {
                obj['ZipCode'] = ApiClient.convertToType(data['ZipCode'], 'String');
            }
        }
        return obj;
    }
}

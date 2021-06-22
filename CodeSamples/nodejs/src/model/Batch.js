import ApiClient from '../ApiClient';

export default class Batch {
    constructor() {
        this.BatchNumber = '';
        this.Started = undefined;
        this.Completed = undefined;
        this.SalesCount = '';
        this.SalesSum = 0;
        this.ReturnCount = '';
        this.ReturnSum = 0;
        this.BatchError = false;
    }

    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new Batch();

            if (Object.prototype.hasOwnProperty.call(data, 'BatchNumber')) {
                obj['BatchNumber'] = ApiClient.convertToType(data['BatchNumber'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Started')) {
                obj['Started'] = ApiClient.convertToType(data['Started'], 'Date');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Completed')) {
                obj['Completed'] = ApiClient.convertToType(data['Completed'], 'Date');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'SalesCount')) {
                obj['SalesCount'] = ApiClient.convertToType(data['SalesCount'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'SalesSum')) {
                obj['SalesSum'] = ApiClient.convertToType(data['SalesSum'], 'Number');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'ReturnCount')) {
                obj['ReturnCount'] = ApiClient.convertToType(data['ReturnCount'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'ReturnSum')) {
                obj['ReturnSum'] = ApiClient.convertToType(data['ReturnSum'], 'Number');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'BatchError')) {
                obj['BatchError'] = ApiClient.convertToType(data['BatchError'], 'Boolean');
            }
        }
        return obj;
    }
}

/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';
import Response from './Response';

export default class VaultCheck {
    constructor() {
        /**
    * @member {module:model/Response} Response
    */
    this.Response = new Response();
    /**
    * @member {Number} CheckID
    */
    this.CheckID = 0;
    /**
    * @member {Boolean} Main
    */
    this.Main = false;
    /**
    * @member {String} CheckRouting
    */
    this.CheckRouting = '';
    /**
    * @member {String} CheckAccount
    */
    this.CheckAccount = '';
    /**
    * @member {String} CheckNumber
    */
    this.CheckNumber = '';
    /**
    * @member {String} CheckFirstName
    */
    this.CheckFirstName = '';
    /**
    * @member {String} CheckLastName
    */
    this.CheckLastName = '';
    /**
    * @member {String} Note
    */
    this.Note = '';
    /**
    * @member {String} MaskedRouting
    */
    this.MaskedRouting = '';
    /**
    * @member {String} MaskedAccount
    */
    this.MaskedAccount = '';
    /**
    * @member {String} AccountType
    */
    this.AccountType = '';
    }

    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new VaultCheck();

            if (data.hasOwnProperty('Response')) {
                obj['Response'] = Response.constructFromObject(data['Response']);
            }
            if (data.hasOwnProperty('CheckID')) {
                obj['CheckID'] = ApiClient.convertToType(data['CheckID'], 'Number');
            }
            if (data.hasOwnProperty('Main')) {
                obj['Main'] = ApiClient.convertToType(data['Main'], 'Boolean');
            }
            if (data.hasOwnProperty('CheckRouting')) {
                obj['CheckRouting'] = ApiClient.convertToType(data['CheckRouting'], 'String');
            }
            if (data.hasOwnProperty('CheckAccount')) {
                obj['CheckAccount'] = ApiClient.convertToType(data['CheckAccount'], 'String');
            }
            if (data.hasOwnProperty('CheckNumber')) {
                obj['CheckNumber'] = ApiClient.convertToType(data['CheckNumber'], 'String');
            }
            if (data.hasOwnProperty('CheckFirstName')) {
                obj['CheckFirstName'] = ApiClient.convertToType(data['CheckFirstName'], 'String');
            }
            if (data.hasOwnProperty('CheckLastName')) {
                obj['CheckLastName'] = ApiClient.convertToType(data['CheckLastName'], 'String');
            }
            if (data.hasOwnProperty('Note')) {
                obj['Note'] = ApiClient.convertToType(data['Note'], 'String');
            }
            if (data.hasOwnProperty('MaskedRouting')) {
                obj['MaskedRouting'] = ApiClient.convertToType(data['MaskedRouting'], 'String');
            }
            if (data.hasOwnProperty('MaskedAccount')) {
                obj['MaskedAccount'] = ApiClient.convertToType(data['MaskedAccount'], 'String');
            }
            if (data.hasOwnProperty('AccountType')) {
                obj['AccountType'] = ApiClient.convertToType(data['AccountType'], 'String');
            }
        }
        return obj;
    }
}

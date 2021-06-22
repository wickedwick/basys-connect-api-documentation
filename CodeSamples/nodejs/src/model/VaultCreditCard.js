/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';
import CVVPresenceType from './CVVPresenceType';
import Response from './Response';

export default class VaultCreditCard {
  constructor() {
    this.MagneticTracks = '';
    this.Track1 = '';
    this.Track2 = '';
    this.Number = '';
    this.MaskedNumber = '';
    this.Holder = '';
    this.ExpDate = '';
    this.CVV = '';
    this.Address = '';
    this.City = '';
    this.State = '';
    this.ZIP = '';
    this.Swiped = false;
    this.TypeString = '';
    this.CVVType = CVVPresenceType.Normal;
    this.NotPresent = false;
    this.Response = new Response();
    this.CardID = 0;
    this.Note = '';
    this.Main = false;
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new VaultCreditCard();

      if (data.hasOwnProperty('MagneticTracks')) {
        obj['MagneticTracks'] = ApiClient.convertToType(data['MagneticTracks'], 'String');
      }
      if (data.hasOwnProperty('Track1')) {
        obj['Track1'] = ApiClient.convertToType(data['Track1'], 'String');
      }
      if (data.hasOwnProperty('Track2')) {
        obj['Track2'] = ApiClient.convertToType(data['Track2'], 'String');
      }
      if (data.hasOwnProperty('Number')) {
        obj['Number'] = ApiClient.convertToType(data['Number'], 'String');
      }
      if (data.hasOwnProperty('MaskedNumber')) {
        obj['MaskedNumber'] = ApiClient.convertToType(data['MaskedNumber'], 'String');
      }
      if (data.hasOwnProperty('Holder')) {
        obj['Holder'] = ApiClient.convertToType(data['Holder'], 'String');
      }
      if (data.hasOwnProperty('ExpDate')) {
        obj['ExpDate'] = ApiClient.convertToType(data['ExpDate'], 'String');
      }
      if (data.hasOwnProperty('CVV')) {
        obj['CVV'] = ApiClient.convertToType(data['CVV'], 'String');
      }
      if (data.hasOwnProperty('Address')) {
        obj['Address'] = ApiClient.convertToType(data['Address'], 'String');
      }
      if (data.hasOwnProperty('City')) {
        obj['City'] = ApiClient.convertToType(data['City'], 'String');
      }
      if (data.hasOwnProperty('State')) {
        obj['State'] = ApiClient.convertToType(data['State'], 'String');
      }
      if (data.hasOwnProperty('ZIP')) {
        obj['ZIP'] = ApiClient.convertToType(data['ZIP'], 'String');
      }
      if (data.hasOwnProperty('Swiped')) {
        obj['Swiped'] = ApiClient.convertToType(data['Swiped'], 'Boolean');
      }
      if (data.hasOwnProperty('TypeString')) {
        obj['TypeString'] = ApiClient.convertToType(data['TypeString'], 'String');
      }
      if (data.hasOwnProperty('CVVType')) {
        obj['CVVType'] = CVVPresenceType.constructFromObject(data['CVVType']);
      }
      if (data.hasOwnProperty('NotPresent')) {
        obj['NotPresent'] = ApiClient.convertToType(data['NotPresent'], 'Boolean');
      }
      if (data.hasOwnProperty('Response')) {
        obj['Response'] = Response.constructFromObject(data['Response']);
      }
      if (data.hasOwnProperty('CardID')) {
        obj['CardID'] = ApiClient.convertToType(data['CardID'], 'Number');
      }
      if (data.hasOwnProperty('Note')) {
        obj['Note'] = ApiClient.convertToType(data['Note'], 'String');
      }
      if (data.hasOwnProperty('Main')) {
        obj['Main'] = ApiClient.convertToType(data['Main'], 'Boolean');
      }
    }
    return obj;
  }
}

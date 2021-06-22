/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';

export default class TerminalSettings {
  constructor() {
    this.ID = 0;
    this.Terminal_ID = 0;
    this.SEC_Code = '';
    this.Gateway_Terminal = false;
    this.Consumer_Credits = false;
    this.DL_Required = false;
    this.Check_Verify = false;
    this.Identity_Verify = false;
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new TerminalSettings();

      if (data.hasOwnProperty('ID')) {
        obj['ID'] = ApiClient.convertToType(data['ID'], 'Number');
      }
      if (data.hasOwnProperty('Terminal_ID')) {
        obj['Terminal_ID'] = ApiClient.convertToType(data['Terminal_ID'], 'Number');
      }
      if (data.hasOwnProperty('SEC_Code')) {
        obj['SEC_Code'] = ApiClient.convertToType(data['SEC_Code'], 'String');
      }
      if (data.hasOwnProperty('Gateway_Terminal')) {
        obj['Gateway_Terminal'] = ApiClient.convertToType(data['Gateway_Terminal'], 'Boolean');
      }
      if (data.hasOwnProperty('Consumer_Credits')) {
        obj['Consumer_Credits'] = ApiClient.convertToType(data['Consumer_Credits'], 'Boolean');
      }
      if (data.hasOwnProperty('DL_Required')) {
        obj['DL_Required'] = ApiClient.convertToType(data['DL_Required'], 'Boolean');
      }
      if (data.hasOwnProperty('Check_Verify')) {
        obj['Check_Verify'] = ApiClient.convertToType(data['Check_Verify'], 'Boolean');
      }
      if (data.hasOwnProperty('Identity_Verify')) {
        obj['Identity_Verify'] = ApiClient.convertToType(data['Identity_Verify'], 'Boolean');
      }
    }
    return obj;
  }
}

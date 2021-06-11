/* eslint-disable no-prototype-builtins */
import ApiClient from '../ApiClient';
import FieldAccess from './FieldAccess';

export default class FieldInfo {
  constructor() {
    this.Access = FieldAccess.Enabled;
    this.Default = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new FieldInfo();

      if (data.hasOwnProperty('Access')) {
        obj['Access'] = FieldAccess.constructFromObject(data['Access']);
      }
      if (data.hasOwnProperty('Default')) {
        obj['Default'] = ApiClient.convertToType(data['Default'], 'String');
      }
    }
    return obj;
  }
}

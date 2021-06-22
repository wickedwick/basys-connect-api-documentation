import ApiClient from '../ApiClient';

export default class Contact {
  constructor() {
    this.FirstName = '';
    this.LastName = '';
    this.Name = '';
    this.Title = '';
    this.Phone = '';
    this.Email = '';
  }

  static constructFromObject(data, obj) {
    if (data) {
      obj = obj || new Contact();

      if (Object.prototype.hasOwnProperty.call(data, 'FirstName')) {
        obj['FirstName'] = ApiClient.convertToType(data['FirstName'], 'String');
      }
      if (Object.prototype.hasOwnProperty.call(data, 'LastName')) {
        obj['LastName'] = ApiClient.convertToType(data['LastName'], 'String');
      }
      if (Object.prototype.hasOwnProperty.call(data, 'Name')) {
        obj['Name'] = ApiClient.convertToType(data['Name'], 'String');
      }
      if (Object.prototype.hasOwnProperty.call(data, 'Title')) {
        obj['Title'] = ApiClient.convertToType(data['Title'], 'String');
      }
      if (Object.prototype.hasOwnProperty.call(data, 'Phone')) {
        obj['Phone'] = ApiClient.convertToType(data['Phone'], 'String');
      }
      if (Object.prototype.hasOwnProperty.call(data, 'Email')) {
        obj['Email'] = ApiClient.convertToType(data['Email'], 'String');
      }
    }
    return obj;
  }
}

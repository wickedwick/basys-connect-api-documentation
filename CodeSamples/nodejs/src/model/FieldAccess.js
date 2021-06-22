export default class FieldAccess {
  /**
   * value: "Disabled"
   * @const
   */
  Disabled = 'Disabled';

  /**
   * value: "Enabled"
   * @const
   */
  Enabled = 'Enabled';

  /**
   * value: "Required"
   * @const
   */
  Required = 'Required';

  static constructFromObject(object) {
    return object;
  }
}

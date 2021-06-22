export default class CVVPresenceType {
  /**
   * value: "Normal"
   * @const
   */
  Normal = 'Normal';

  /**
   * value: "Bypass"
   * @const
   */
  Bypass = 'Bypass';

  /**
   * value: "Illegible"
   * @const
   */
  Illegible = 'Illegible';

  /**
   * value: "NotAvailable"
   * @const
   */
  NotAvailable = 'NotAvailable';

  static constructFromObject(object) {
    return object;
  }
}

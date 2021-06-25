export default class CheckTransactionType {
  /**
   * value: "Unknown"
   * @const
   */
  Unknown = 'Unknown';

  /**
   * value: "Authorize"
   * @const
   */
  Authorize = 'Authorize';

  /**
   * value: "Void"
   * @const
   */
  Void = 'Void';

  /**
   * value: "Override"
   * @const
   */
  Override = 'Override';

  /**
   * value: "Payroll"
   * @const
   */
  Payroll = 'Payroll';

  /**
   * value: "Recurring"
   * @const
   */
  Recurring = 'Recurring';

  /**
   * value: "Refund"
   * @const
   */
  Refund = 'Refund';

  static constructFromObject (object) {
    return object;
  }
}

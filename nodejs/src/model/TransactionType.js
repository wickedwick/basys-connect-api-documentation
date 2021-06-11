export default class TransactionType {
  /**
   * value: "Sale"
   * @const
   */
  Sale = 'Sale';

  /**
   * value: "Credit"
   * @const
   */
  Credit = 'Credit';

  /**
   * value: "Authorization"
   * @const
   */
  Authorization = 'Authorization';

  /**
   * value: "PreAuth"
   * @const
   */
  PreAuth = 'PreAuth';

  /**
   * value: "PostAuth"
   * @const
   */
  PostAuth = 'PostAuth';

  /**
   * value: "ForceAuth"
   * @const
   */
  ForceAuth = 'ForceAuth';

  /**
   * value: "Void"
   * @const
   */
  Void = 'Void';

  /**
   * value: "Query"
   * @const
   */
  Query = 'Query';

  /**
   * value: "Verify"
   * @const
   */
  Verify = 'Verify';

  /**
   * value: "Mark"
   * @const
   */
  Mark = 'Mark';

  /**
   * value: "Return"
   * @const
   */
  Return = 'Return';

  /**
   * value: "Use"
   * @const
   */
  Use = 'Use';

  static constructFromObject(object) {
    return object;
  }
}

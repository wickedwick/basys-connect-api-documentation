import ApiClient from '../ApiClient';

export default class CheckAccountType {
        /**
         * value: "Unknown"
         * @const
         */
        Unknown = "Unknown";

        /**
         * value: "Checking"
         * @const
         */
        Checking = "Checking";

        /**
         * value: "Savings"
         * @const
         */
        Savings = "Savings";


    static constructFromObject(object) {
        return object;
    }
}

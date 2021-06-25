# JavaScript Models

# Address

    import ApiClient from '../ApiClient';

    export default class Address {
        constructor() {
            this.AddressLine1 = '';
            this.AddressLine2 = '';
            this.City = '';
            this.State = '';
            this.ZipCode = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new Address();

                if (Object.prototype.hasOwnProperty.call(data, 'AddressLine1')) {
                    obj['AddressLine1'] = ApiClient.convertToType(data['AddressLine1'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'AddressLine2')) {
                    obj['AddressLine2'] = ApiClient.convertToType(data['AddressLine2'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'City')) {
                    obj['City'] = ApiClient.convertToType(data['City'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'State')) {
                    obj['State'] = ApiClient.convertToType(data['State'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'ZipCode')) {
                    obj['ZipCode'] = ApiClient.convertToType(data['ZipCode'], 'String');
                }
            }
            return obj;
        }
    }

# Batch

    import ApiClient from '../ApiClient';

    export default class Batch {
        constructor() {
            this.BatchNumber = '';
            this.Started = undefined;
            this.Completed = undefined;
            this.SalesCount = '';
            this.SalesSum = 0;
            this.ReturnCount = '';
            this.ReturnSum = 0;
            this.BatchError = false;
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new Batch();

                if (Object.prototype.hasOwnProperty.call(data, 'BatchNumber')) {
                    obj['BatchNumber'] = ApiClient.convertToType(data['BatchNumber'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Started')) {
                    obj['Started'] = ApiClient.convertToType(data['Started'], 'Date');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Completed')) {
                    obj['Completed'] = ApiClient.convertToType(data['Completed'], 'Date');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'SalesCount')) {
                    obj['SalesCount'] = ApiClient.convertToType(data['SalesCount'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'SalesSum')) {
                    obj['SalesSum'] = ApiClient.convertToType(data['SalesSum'], 'Number');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'ReturnCount')) {
                    obj['ReturnCount'] = ApiClient.convertToType(data['ReturnCount'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'ReturnSum')) {
                    obj['ReturnSum'] = ApiClient.convertToType(data['ReturnSum'], 'Number');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'BatchError')) {
                    obj['BatchError'] = ApiClient.convertToType(data['BatchError'], 'Boolean');
                }
            }
            return obj;
        }
    }

# Business

import ApiClient from '../ApiClient';
import Address from './Address';

export default class Business {
constructor() {
this.Address = new Address();
this.Name = '';
this.Phone = '';
this.Fax = '';
this.WebSite = '';
}

    static constructFromObject(data, obj) {
        if (data) {
            obj = obj || new Business();

            if (Object.prototype.hasOwnProperty.call(data, 'Address')) {
                obj['Address'] = Address.constructFromObject(data['Address']);
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Name')) {
                obj['Name'] = ApiClient.convertToType(data['Name'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Phone')) {
                obj['Phone'] = ApiClient.convertToType(data['Phone'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'Fax')) {
                obj['Fax'] = ApiClient.convertToType(data['Fax'], 'String');
            }
            if (Object.prototype.hasOwnProperty.call(data, 'WebSite')) {
                obj['WebSite'] = ApiClient.convertToType(data['WebSite'], 'String');
            }
        }
        return obj;
    }

}

# CheckAccountType

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

# CheckTransaction

    import ApiClient from '../ApiClient';
    import CheckAccountType from './CheckAccountType';
    import CheckTransactionType from './CheckTransactionType';

    export default class CheckTransaction {
        constructor() {
            this.Terminal_ID = '';
            this.Account_Number = '';
            this.Account_Type = new CheckAccountType();
            this.Check_Number = '';
            this.Routing_Number = '';
            this.MICR_Data = '';
            this.First_Name = '';
            this.Last_Name = '';
            this.Company_Name = '';
            this.Address1 = '';
            this.Address2 = '';
            this.City = '';
            this.State = '';
            this.Zip = '';
            this.Phone_Number = '';
            this.DL_Number = '';
            this.DL_State = '';
            this.Courtesy_Card_ID = '';
            this.SSN4 = '';
            this.DOB_Year = '';
            this.Check_Amount = '';
            this.Tran_Type = '';
            this.Proc_ID = '';
            this.IP_Address = '';
            this.CustomerNumber = '';
            this.PONumber = '';
            this.InvoiceNumber = '';
            this.TranNote = '';
            this.EmailAddress = '';
            this.SEC_Code = '';
            this.Proc_Resp = '';
            this.Proc_Code = '';
            this.Proc_Mess = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new CheckTransaction();

                if (Object.prototype.hasOwnProperty.call(data, 'Terminal_ID')) {
                    obj['Terminal_ID'] = ApiClient.convertToType(data['Terminal_ID'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Account_Number')) {
                    obj['Account_Number'] = ApiClient.convertToType(data['Account_Number'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Account_Type')) {
                    obj['Account_Type'] = CheckAccountType.constructFromObject(data['Account_Type']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Check_Number')) {
                    obj['Check_Number'] = ApiClient.convertToType(data['Check_Number'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Routing_Number')) {
                    obj['Routing_Number'] = ApiClient.convertToType(data['Routing_Number'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'MICR_Data')) {
                    obj['MICR_Data'] = ApiClient.convertToType(data['MICR_Data'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'First_Name')) {
                    obj['First_Name'] = ApiClient.convertToType(data['First_Name'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Last_Name')) {
                    obj['Last_Name'] = ApiClient.convertToType(data['Last_Name'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Company_Name')) {
                    obj['Company_Name'] = ApiClient.convertToType(data['Company_Name'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Address1')) {
                    obj['Address1'] = ApiClient.convertToType(data['Address1'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Address2')) {
                    obj['Address2'] = ApiClient.convertToType(data['Address2'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'City')) {
                    obj['City'] = ApiClient.convertToType(data['City'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'State')) {
                    obj['State'] = ApiClient.convertToType(data['State'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Zip')) {
                    obj['Zip'] = ApiClient.convertToType(data['Zip'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Phone_Number')) {
                    obj['Phone_Number'] = ApiClient.convertToType(data['Phone_Number'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'DL_Number')) {
                    obj['DL_Number'] = ApiClient.convertToType(data['DL_Number'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'DL_State')) {
                    obj['DL_State'] = ApiClient.convertToType(data['DL_State'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Courtesy_Card_ID')) {
                    obj['Courtesy_Card_ID'] = ApiClient.convertToType(data['Courtesy_Card_ID'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'SSN4')) {
                    obj['SSN4'] = ApiClient.convertToType(data['SSN4'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'DOB_Year')) {
                    obj['DOB_Year'] = ApiClient.convertToType(data['DOB_Year'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Check_Amount')) {
                    obj['Check_Amount'] = ApiClient.convertToType(data['Check_Amount'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Tran_Type')) {
                    obj['Tran_Type'] = CheckTransactionType.constructFromObject(data['Tran_Type']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Proc_ID')) {
                    obj['Proc_ID'] = ApiClient.convertToType(data['Proc_ID'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'IP_Address')) {
                    obj['IP_Address'] = ApiClient.convertToType(data['IP_Address'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'CustomerNumber')) {
                    obj['CustomerNumber'] = ApiClient.convertToType(data['CustomerNumber'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'PONumber')) {
                    obj['PONumber'] = ApiClient.convertToType(data['PONumber'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'InvoiceNumber')) {
                    obj['InvoiceNumber'] = ApiClient.convertToType(data['InvoiceNumber'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'TranNote')) {
                    obj['TranNote'] = ApiClient.convertToType(data['TranNote'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'EmailAddress')) {
                    obj['EmailAddress'] = ApiClient.convertToType(data['EmailAddress'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'SEC_Code')) {
                    obj['SEC_Code'] = ApiClient.convertToType(data['SEC_Code'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Proc_Resp')) {
                    obj['Proc_Resp'] = ApiClient.convertToType(data['Proc_Resp'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Proc_Code')) {
                    obj['Proc_Code'] = ApiClient.convertToType(data['Proc_Code'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Proc_Mess')) {
                    obj['Proc_Mess'] = ApiClient.convertToType(data['Proc_Mess'], 'String');
                }
            }
            return obj;
        }
    }

# CheckTransactionSettings

    import ApiClient from '../ApiClient';
    import FieldInfo from './FieldInfo';

    export default class CheckTransactionSettings {
        constructor() {
            this.Reader = new FieldInfo();
            this.ContactName = new FieldInfo();
            this.ContactTitle = new FieldInfo();
            this.EmailAddress = new FieldInfo();
            this.PhoneDefault = '';
            this.Fax = new FieldInfo();
            this.BillingAddressDefault = '';
            this.BillingAddress2 = new FieldInfo();
            this.BillingCityDefault = '';
            this.BillingStateDefault = '';
            this.BillingZipDefault = '';
            this.PONumber = new FieldInfo();
            this.InvoiceNumber = new FieldInfo();
            this.BusinessName = new FieldInfo();
            this.CustomerNumber = new FieldInfo();
            this.ReferenceNote = new FieldInfo();
            this.DefaultSECCode = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new CheckTransactionSettings();

                if (Object.prototype.hasOwnProperty.call(data, 'Reader')) {
                    obj['Reader'] = FieldInfo.constructFromObject(data['Reader']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'ContactName')) {
                    obj['ContactName'] = FieldInfo.constructFromObject(data['ContactName']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'ContactTitle')) {
                    obj['ContactTitle'] = FieldInfo.constructFromObject(data['ContactTitle']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'EmailAddress')) {
                    obj['EmailAddress'] = FieldInfo.constructFromObject(data['EmailAddress']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'PhoneDefault')) {
                    obj['PhoneDefault'] = ApiClient.convertToType(data['PhoneDefault'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'Fax')) {
                    obj['Fax'] = FieldInfo.constructFromObject(data['Fax']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'BillingAddressDefault')) {
                    obj['BillingAddressDefault'] = ApiClient.convertToType(data['BillingAddressDefault'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'BillingAddress2')) {
                    obj['BillingAddress2'] = FieldInfo.constructFromObject(data['BillingAddress2']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'BillingCityDefault')) {
                    obj['BillingCityDefault'] = ApiClient.convertToType(data['BillingCityDefault'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'BillingStateDefault')) {
                    obj['BillingStateDefault'] = ApiClient.convertToType(data['BillingStateDefault'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'BillingZipDefault')) {
                    obj['BillingZipDefault'] = ApiClient.convertToType(data['BillingZipDefault'], 'String');
                }
                if (Object.prototype.hasOwnProperty.call(data, 'PONumber')) {
                    obj['PONumber'] = FieldInfo.constructFromObject(data['PONumber']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'InvoiceNumber')) {
                    obj['InvoiceNumber'] = FieldInfo.constructFromObject(data['InvoiceNumber']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'BusinessName')) {
                    obj['BusinessName'] = FieldInfo.constructFromObject(data['BusinessName']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'CustomerNumber')) {
                    obj['CustomerNumber'] = FieldInfo.constructFromObject(data['CustomerNumber']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'ReferenceNote')) {
                    obj['ReferenceNote'] = FieldInfo.constructFromObject(data['ReferenceNote']);
                }
                if (Object.prototype.hasOwnProperty.call(data, 'DefaultSECCode')) {
                    obj['DefaultSECCode'] = ApiClient.convertToType(data['DefaultSECCode'], 'String');
                }
            }
            return obj;
        }
    }

# CheckTransactionType

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

# Contact

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

# CreditCardTransactionSettings

    import ApiClient from '../ApiClient';
    import FieldInfo from './FieldInfo';
    import TransactionType from './TransactionType';

    export default class CreditCardTransactionSettings {
        constructor() {
            this.CVV = new FieldInfo();
            this.ContactName = new FieldInfo();
            this.ContactTitle = new FieldInfo();
            this.EmailAddress = new FieldInfo();
            this.Phone = new FieldInfo();
            this.Fax = new FieldInfo();
            this.BillingAddress = new FieldInfo();
            this.BillingAddress2 = new FieldInfo();
            this.BillingCity = new FieldInfo();
            this.BillingState = new FieldInfo();
            this.BillingZip = new FieldInfo();
            this.PONumber = new FieldInfo();
            this.InvoiceNumber = new FieldInfo();
            this.BusinessName = new FieldInfo();
            this.CustomerNumber = new FieldInfo();
            this.ReferenceNote = new FieldInfo();
            this.SalesTax = new FieldInfo();
            this.TaxExempt = new FieldInfo();
            this.CardTracks = new FieldInfo();
            this.CardZip = new FieldInfo();
            this.CardAddress = new FieldInfo();
            this.ItemDescription = '';
            this.DefaultTransactionType = TransactionType.Sale;
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new CreditCardTransactionSettings();

                if (data.hasOwnProperty('CVV')) {
                    obj['CVV'] = FieldInfo.constructFromObject(data['CVV']);
                }
                if (data.hasOwnProperty('ContactName')) {
                    obj['ContactName'] = FieldInfo.constructFromObject(data['ContactName']);
                }
                if (data.hasOwnProperty('ContactTitle')) {
                    obj['ContactTitle'] = FieldInfo.constructFromObject(data['ContactTitle']);
                }
                if (data.hasOwnProperty('EmailAddress')) {
                    obj['EmailAddress'] = FieldInfo.constructFromObject(data['EmailAddress']);
                }
                if (data.hasOwnProperty('Phone')) {
                    obj['Phone'] = FieldInfo.constructFromObject(data['Phone']);
                }
                if (data.hasOwnProperty('Fax')) {
                    obj['Fax'] = FieldInfo.constructFromObject(data['Fax']);
                }
                if (data.hasOwnProperty('BillingAddress')) {
                    obj['BillingAddress'] = FieldInfo.constructFromObject(data['BillingAddress']);
                }
                if (data.hasOwnProperty('BillingAddress2')) {
                    obj['BillingAddress2'] = FieldInfo.constructFromObject(data['BillingAddress2']);
                }
                if (data.hasOwnProperty('BillingCity')) {
                    obj['BillingCity'] = FieldInfo.constructFromObject(data['BillingCity']);
                }
                if (data.hasOwnProperty('BillingState')) {
                    obj['BillingState'] = FieldInfo.constructFromObject(data['BillingState']);
                }
                if (data.hasOwnProperty('BillingZip')) {
                    obj['BillingZip'] = FieldInfo.constructFromObject(data['BillingZip']);
                }
                if (data.hasOwnProperty('PONumber')) {
                    obj['PONumber'] = FieldInfo.constructFromObject(data['PONumber']);
                }
                if (data.hasOwnProperty('InvoiceNumber')) {
                    obj['InvoiceNumber'] = FieldInfo.constructFromObject(data['InvoiceNumber']);
                }
                if (data.hasOwnProperty('BusinessName')) {
                    obj['BusinessName'] = FieldInfo.constructFromObject(data['BusinessName']);
                }
                if (data.hasOwnProperty('CustomerNumber')) {
                    obj['CustomerNumber'] = FieldInfo.constructFromObject(data['CustomerNumber']);
                }
                if (data.hasOwnProperty('ReferenceNote')) {
                    obj['ReferenceNote'] = FieldInfo.constructFromObject(data['ReferenceNote']);
                }
                if (data.hasOwnProperty('SalesTax')) {
                    obj['SalesTax'] = FieldInfo.constructFromObject(data['SalesTax']);
                }
                if (data.hasOwnProperty('TaxExempt')) {
                    obj['TaxExempt'] = FieldInfo.constructFromObject(data['TaxExempt']);
                }
                if (data.hasOwnProperty('CardTracks')) {
                    obj['CardTracks'] = FieldInfo.constructFromObject(data['CardTracks']);
                }
                if (data.hasOwnProperty('CardZip')) {
                    obj['CardZip'] = FieldInfo.constructFromObject(data['CardZip']);
                }
                if (data.hasOwnProperty('CardAddress')) {
                    obj['CardAddress'] = FieldInfo.constructFromObject(data['CardAddress']);
                }
                if (data.hasOwnProperty('ItemDescription')) {
                    obj['ItemDescription'] = ApiClient.convertToType(data['ItemDescription'], 'String');
                }
                if (data.hasOwnProperty('DefaultTransactionType')) {
                    obj['DefaultTransactionType'] = TransactionType.constructFromObject(data['DefaultTransactionType']);
                }
            }
            return obj;
        }
    }

# CVVPresenceType

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

# EmailReceipt

    import ApiClient from '../ApiClient';

    export default class EmailReceipt {
        constructor() {
            this.TransactionID = '';
            this.ToAddresses = '';
            this.Subject = '';
            this.Header = '';
            this.Footer = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new EmailReceipt();

                if (data.hasOwnProperty('TransactionID')) {
                    obj['TransactionID'] = ApiClient.convertToType(data['TransactionID'], 'String');
                }
                if (data.hasOwnProperty('ToAddresses')) {
                    obj['ToAddresses'] = ApiClient.convertToType(data['ToAddresses'], 'String');
                }
                if (data.hasOwnProperty('Subject')) {
                    obj['Subject'] = ApiClient.convertToType(data['Subject'], 'String');
                }
                if (data.hasOwnProperty('Header')) {
                    obj['Header'] = ApiClient.convertToType(data['Header'], 'String');
                }
                if (data.hasOwnProperty('Footer')) {
                    obj['Footer'] = ApiClient.convertToType(data['Footer'], 'String');
                }
            }
            return obj;
        }
    }

# FieldAccess

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

# FieldInfo

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

# QueryTransaction

    import ApiClient from '../ApiClient';
    import TransactionItem from './TransactionItem';

    export default class QueryTransaction {
        constructor() {
            this.Tran_Sequence = '';
            this.Tran_Batch = '';
            this.Tran_Modified = '';
            this.Tran_Processed = '';
            this.Tran_Settled = '';
            this.Submit_Time = '';
            this.Tran_Type = '';
            this.Tran_Amt = 0;
            this.Tran_Tax = 0;
            this.Tran_Inv = '';
            this.Tran_PO = '';
            this.Tran_CNum = '';
            this.Tran_Note = '';
            this.Card_Num = '';
            this.Card_Name = '';
            this.Card_Exp = '';
            this.AVS_Street = '';
            this.AVS_Zip = '';
            this.CVV_Num = '';
            this.Proc_ID = '';
            this.Proc_Resp = '';
            this.Proc_Code = '';
            this.Proc_Mess = '';
            this.AVS_Code = '';
            this.AVS_Resp = '';
            this.CVV_Code = '';
            this.CVV_Resp = '';
            this.Items = [];
            this.Business_Name = '';
            this.Business_Address = '';
            this.Business_Address2 = '';
            this.Business_City = '';
            this.Business_State = '';
            this.Business_Zip = '';
            this.Business_Country = '';
            this.Business_Website = '';
            this.Contact_FirstName = '';
            this.Contact_LastName = '';
            this.Contact_Phone = '';
            this.Contact_Fax = '';
            this.Contact_Email = '';
            this.Contact_Title = '';
            this.IP = '';
            this.TaxExempt = false;
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new QueryTransaction();

                if (data.hasOwnProperty('Tran_Sequence')) {
                    obj['Tran_Sequence'] = ApiClient.convertToType(data['Tran_Sequence'], 'String');
                }
                if (data.hasOwnProperty('Tran_Batch')) {
                    obj['Tran_Batch'] = ApiClient.convertToType(data['Tran_Batch'], 'String');
                }
                if (data.hasOwnProperty('Tran_Modified')) {
                    obj['Tran_Modified'] = ApiClient.convertToType(data['Tran_Modified'], 'String');
                }
                if (data.hasOwnProperty('Tran_Processed')) {
                    obj['Tran_Processed'] = ApiClient.convertToType(data['Tran_Processed'], 'String');
                }
                if (data.hasOwnProperty('Tran_Settled')) {
                    obj['Tran_Settled'] = ApiClient.convertToType(data['Tran_Settled'], 'String');
                }
                if (data.hasOwnProperty('Submit_Time')) {
                    obj['Submit_Time'] = ApiClient.convertToType(data['Submit_Time'], 'String');
                }
                if (data.hasOwnProperty('Tran_Type')) {
                    obj['Tran_Type'] = ApiClient.convertToType(data['Tran_Type'], 'String');
                }
                if (data.hasOwnProperty('Tran_Amt')) {
                    obj['Tran_Amt'] = ApiClient.convertToType(data['Tran_Amt'], 'Number');
                }
                if (data.hasOwnProperty('Tran_Tax')) {
                    obj['Tran_Tax'] = ApiClient.convertToType(data['Tran_Tax'], 'Number');
                }
                if (data.hasOwnProperty('Tran_Inv')) {
                    obj['Tran_Inv'] = ApiClient.convertToType(data['Tran_Inv'], 'String');
                }
                if (data.hasOwnProperty('Tran_PO')) {
                    obj['Tran_PO'] = ApiClient.convertToType(data['Tran_PO'], 'String');
                }
                if (data.hasOwnProperty('Tran_CNum')) {
                    obj['Tran_CNum'] = ApiClient.convertToType(data['Tran_CNum'], 'String');
                }
                if (data.hasOwnProperty('Tran_Note')) {
                    obj['Tran_Note'] = ApiClient.convertToType(data['Tran_Note'], 'String');
                }
                if (data.hasOwnProperty('Card_Num')) {
                    obj['Card_Num'] = ApiClient.convertToType(data['Card_Num'], 'String');
                }
                if (data.hasOwnProperty('Card_Name')) {
                    obj['Card_Name'] = ApiClient.convertToType(data['Card_Name'], 'String');
                }
                if (data.hasOwnProperty('Card_Exp')) {
                    obj['Card_Exp'] = ApiClient.convertToType(data['Card_Exp'], 'String');
                }
                if (data.hasOwnProperty('AVS_Street')) {
                    obj['AVS_Street'] = ApiClient.convertToType(data['AVS_Street'], 'String');
                }
                if (data.hasOwnProperty('AVS_Zip')) {
                    obj['AVS_Zip'] = ApiClient.convertToType(data['AVS_Zip'], 'String');
                }
                if (data.hasOwnProperty('CVV_Num')) {
                    obj['CVV_Num'] = ApiClient.convertToType(data['CVV_Num'], 'String');
                }
                if (data.hasOwnProperty('Proc_ID')) {
                    obj['Proc_ID'] = ApiClient.convertToType(data['Proc_ID'], 'String');
                }
                if (data.hasOwnProperty('Proc_Resp')) {
                    obj['Proc_Resp'] = ApiClient.convertToType(data['Proc_Resp'], 'String');
                }
                if (data.hasOwnProperty('Proc_Code')) {
                    obj['Proc_Code'] = ApiClient.convertToType(data['Proc_Code'], 'String');
                }
                if (data.hasOwnProperty('Proc_Mess')) {
                    obj['Proc_Mess'] = ApiClient.convertToType(data['Proc_Mess'], 'String');
                }
                if (data.hasOwnProperty('AVS_Code')) {
                    obj['AVS_Code'] = ApiClient.convertToType(data['AVS_Code'], 'String');
                }
                if (data.hasOwnProperty('AVS_Resp')) {
                    obj['AVS_Resp'] = ApiClient.convertToType(data['AVS_Resp'], 'String');
                }
                if (data.hasOwnProperty('CVV_Code')) {
                    obj['CVV_Code'] = ApiClient.convertToType(data['CVV_Code'], 'String');
                }
                if (data.hasOwnProperty('CVV_Resp')) {
                    obj['CVV_Resp'] = ApiClient.convertToType(data['CVV_Resp'], 'String');
                }
                if (data.hasOwnProperty('Items')) {
                    obj['Items'] = ApiClient.convertToType(data['Items'], [TransactionItem]);
                }
                if (data.hasOwnProperty('Business_Name')) {
                    obj['Business_Name'] = ApiClient.convertToType(data['Business_Name'], 'String');
                }
                if (data.hasOwnProperty('Business_Address')) {
                    obj['Business_Address'] = ApiClient.convertToType(data['Business_Address'], 'String');
                }
                if (data.hasOwnProperty('Business_Address2')) {
                    obj['Business_Address2'] = ApiClient.convertToType(data['Business_Address2'], 'String');
                }
                if (data.hasOwnProperty('Business_City')) {
                    obj['Business_City'] = ApiClient.convertToType(data['Business_City'], 'String');
                }
                if (data.hasOwnProperty('Business_State')) {
                    obj['Business_State'] = ApiClient.convertToType(data['Business_State'], 'String');
                }
                if (data.hasOwnProperty('Business_Zip')) {
                    obj['Business_Zip'] = ApiClient.convertToType(data['Business_Zip'], 'String');
                }
                if (data.hasOwnProperty('Business_Country')) {
                    obj['Business_Country'] = ApiClient.convertToType(data['Business_Country'], 'String');
                }
                if (data.hasOwnProperty('Business_Website')) {
                    obj['Business_Website'] = ApiClient.convertToType(data['Business_Website'], 'String');
                }
                if (data.hasOwnProperty('Contact_FirstName')) {
                    obj['Contact_FirstName'] = ApiClient.convertToType(data['Contact_FirstName'], 'String');
                }
                if (data.hasOwnProperty('Contact_LastName')) {
                    obj['Contact_LastName'] = ApiClient.convertToType(data['Contact_LastName'], 'String');
                }
                if (data.hasOwnProperty('Contact_Phone')) {
                    obj['Contact_Phone'] = ApiClient.convertToType(data['Contact_Phone'], 'String');
                }
                if (data.hasOwnProperty('Contact_Fax')) {
                    obj['Contact_Fax'] = ApiClient.convertToType(data['Contact_Fax'], 'String');
                }
                if (data.hasOwnProperty('Contact_Email')) {
                    obj['Contact_Email'] = ApiClient.convertToType(data['Contact_Email'], 'String');
                }
                if (data.hasOwnProperty('Contact_Title')) {
                    obj['Contact_Title'] = ApiClient.convertToType(data['Contact_Title'], 'String');
                }
                if (data.hasOwnProperty('IP')) {
                    obj['IP'] = ApiClient.convertToType(data['IP'], 'String');
                }
                if (data.hasOwnProperty('TaxExempt')) {
                    obj['TaxExempt'] = ApiClient.convertToType(data['TaxExempt'], 'Boolean');
                }
            }
            return obj;
        }
    }

# Receipt

    import ReceiptCustomLines from './ReceiptCustomLines';

    export default class Receipt {
        constructor() {
            this.Header = new ReceiptCustomLines();
            this.Footer = new ReceiptCustomLines();
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new Receipt();

                if (data.hasOwnProperty('Header')) {
                    obj['Header'] = ReceiptCustomLines.constructFromObject(data['Header']);
                }
                if (data.hasOwnProperty('Footer')) {
                    obj['Footer'] = ReceiptCustomLines.constructFromObject(data['Footer']);
                }
            }
            return obj;
        }
    }

# ReceiptCustomLines

    import ApiClient from '../ApiClient';

    export default class ReceiptCustomLines {
        constructor() {
            this.CustomLine1 = '';
            this.CustomLine2 = '';
            this.CustomLine3 = '';
            this.CustomLine4 = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new ReceiptCustomLines();

                if (data.hasOwnProperty('CustomLine1')) {
                    obj['CustomLine1'] = ApiClient.convertToType(data['CustomLine1'], 'String');
                }
                if (data.hasOwnProperty('CustomLine2')) {
                    obj['CustomLine2'] = ApiClient.convertToType(data['CustomLine2'], 'String');
                }
                if (data.hasOwnProperty('CustomLine3')) {
                    obj['CustomLine3'] = ApiClient.convertToType(data['CustomLine3'], 'String');
                }
                if (data.hasOwnProperty('CustomLine4')) {
                    obj['CustomLine4'] = ApiClient.convertToType(data['CustomLine4'], 'String');
                }
            }
            return obj;
        }
    }

# Record

    import ApiClient from '../ApiClient';
    import Business from './Business';
    import Contact from './Contact';
    import Response from './Response';
    import VaultCheck from './VaultCheck';
    import VaultCreditCard from './VaultCreditCard';

    export default class Record {
        constructor() {
            this.Response = new Response();
            this.ID = 0;
            this.Reference = '';
            this.Business = new Business();
            this.Contact = new Contact();
            this.PO = '';
            this.Invoice = '';
            this.Customer = '';
            this.TaxExempt = false;
            this.Note = '';
            this.CreditCards = new VaultCreditCard();
            this.Checks = new VaultCheck();
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new Record();

                if (data.hasOwnProperty('Response')) {
                    obj['Response'] = Response.constructFromObject(data['Response']);
                }
                if (data.hasOwnProperty('ID')) {
                    obj['ID'] = ApiClient.convertToType(data['ID'], 'Number');
                }
                if (data.hasOwnProperty('Reference')) {
                    obj['Reference'] = ApiClient.convertToType(data['Reference'], 'String');
                }
                if (data.hasOwnProperty('Business')) {
                    obj['Business'] = Business.constructFromObject(data['Business']);
                }
                if (data.hasOwnProperty('Contact')) {
                    obj['Contact'] = Contact.constructFromObject(data['Contact']);
                }
                if (data.hasOwnProperty('PO')) {
                    obj['PO'] = ApiClient.convertToType(data['PO'], 'String');
                }
                if (data.hasOwnProperty('Invoice')) {
                    obj['Invoice'] = ApiClient.convertToType(data['Invoice'], 'String');
                }
                if (data.hasOwnProperty('Customer')) {
                    obj['Customer'] = ApiClient.convertToType(data['Customer'], 'String');
                }
                if (data.hasOwnProperty('TaxExempt')) {
                    obj['TaxExempt'] = ApiClient.convertToType(data['TaxExempt'], 'Boolean');
                }
                if (data.hasOwnProperty('Note')) {
                    obj['Note'] = ApiClient.convertToType(data['Note'], 'String');
                }
                if (data.hasOwnProperty('CreditCards')) {
                    obj['CreditCards'] = ApiClient.convertToType(data['CreditCards'], [VaultCreditCard]);
                }
                if (data.hasOwnProperty('Checks')) {
                    obj['Checks'] = ApiClient.convertToType(data['Checks'], [VaultCheck]);
                }
            }
            return obj;
        }
    }

# Response

    import ApiClient from '../ApiClient';

    export default class Response {
        constructor() {
            this.Error = false;
            this.Message = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new Response();

                if (data.hasOwnProperty('Error')) {
                    obj['Error'] = ApiClient.convertToType(data['Error'], 'Boolean');
                }
                if (data.hasOwnProperty('Message')) {
                    obj['Message'] = ApiClient.convertToType(data['Message'], 'String');
                }
            }
            return obj;
        }
    }

# SearchVault

    import ApiClient from '../ApiClient';

    export default class SearchVault {
        constructor() {
            this.Reference = '';
            this.BusinessName = '';
            this.FirstName = '';
            this.LastName = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new SearchVault();

                if (data.hasOwnProperty('Reference')) {
                    obj['Reference'] = ApiClient.convertToType(data['Reference'], 'String');
                }
                if (data.hasOwnProperty('BusinessName')) {
                    obj['BusinessName'] = ApiClient.convertToType(data['BusinessName'], 'String');
                }
                if (data.hasOwnProperty('FirstName')) {
                    obj['FirstName'] = ApiClient.convertToType(data['FirstName'], 'String');
                }
                if (data.hasOwnProperty('LastName')) {
                    obj['LastName'] = ApiClient.convertToType(data['LastName'], 'String');
                }
            }
            return obj;
        }
    }

# Settings

    import ApiClient from '../ApiClient';
    import Business from './Business';
    import CheckTransactionSettings from './CheckTransactionSettings';
    import Contact from './Contact';
    import CreditCardTransactionSettings from './CreditCardTransactionSettings';
    import FieldInfo from './FieldInfo';
    import Receipt from './Receipt';
    import Response from './Response';

    export default class Settings {
        constructor() {
            this.CreditCardTransactionSettings = new CreditCardTransactionSettings();
            this.CheckTransactionSettings = new CheckTransactionSettings();
            this.Business = new Business();
            this.MainContact = new Contact();
            this.Receipt40 = new Receipt();
            this.Receipt80 = new Receipt();
            this.PrintSignatureLine = false;
            this.Response = new Response();
            this.AccountID = '';
            this.CopyEmailReceipt = new FieldInfo();
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new Settings();

                if (data.hasOwnProperty('CreditCardTransactionSettings')) {
                    obj['CreditCardTransactionSettings'] = CreditCardTransactionSettings.constructFromObject(
                    data['CreditCardTransactionSettings']
                    );
                }
                if (data.hasOwnProperty('CheckTransactionSettings')) {
                    obj['CheckTransactionSettings'] = CheckTransactionSettings.constructFromObject(data['CheckTransactionSettings']);
                }
                if (data.hasOwnProperty('Business')) {
                    obj['Business'] = Business.constructFromObject(data['Business']);
                }
                if (data.hasOwnProperty('MainContact')) {
                    obj['MainContact'] = Contact.constructFromObject(data['MainContact']);
                }
                if (data.hasOwnProperty('Receipt40')) {
                    obj['Receipt40'] = Receipt.constructFromObject(data['Receipt40']);
                }
                if (data.hasOwnProperty('Receipt80')) {
                    obj['Receipt80'] = Receipt.constructFromObject(data['Receipt80']);
                }
                if (data.hasOwnProperty('PrintSignatureLine')) {
                    obj['PrintSignatureLine'] = ApiClient.convertToType(data['PrintSignatureLine'], 'Boolean');
                }
                if (data.hasOwnProperty('Response')) {
                    obj['Response'] = Response.constructFromObject(data['Response']);
                }
                if (data.hasOwnProperty('AccountID')) {
                    obj['AccountID'] = ApiClient.convertToType(data['AccountID'], 'String');
                }
                if (data.hasOwnProperty('CopyEmailReceipt')) {
                    obj['CopyEmailReceipt'] = FieldInfo.constructFromObject(data['CopyEmailReceipt']);
                }
            }
            return obj;
        }
    }

# TerminalSettings

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

# Transaction

    import ApiClient from '../ApiClient';
    import TransactionItem from './TransactionItem';

    export default class Transaction {
        constructor() {
            this.Submit_Time = undefined;
            this.Tran_Type = '';
            this.Tran_Amt = 0;
            this.Tran_Tax = 0;
            this.Tran_Inv = '';
            this.Tran_PO = '';
            this.Tran_CNum = '';
            this.Tran_Note = '';
            this.Card_Num = '';
            this.Card_Name = '';
            this.Card_Exp = '';
            this.Card_Type = '';
            this.AVS_Street = '';
            this.AVS_Zip = '';
            this.CVV_Num = '';
            this.Proc_ID = '';
            this.Proc_Resp = '';
            this.Proc_Code = '';
            this.Proc_Mess = '';
            this.AVS_Code = '';
            this.AVS_Resp = '';
            this.CVV_Code = '';
            this.CVV_Resp = '';
            this.Items = [];
            this.Business_Name = '';
            this.Business_Address = '';
            this.Business_Address2 = '';
            this.Business_City = '';
            this.Business_State = '';
            this.Business_Zip = '';
            this.Business_Country = '';
            this.Business_Website = '';
            this.Contact_FirstName = '';
            this.Contact_LastName = '';
            this.Contact_Phone = '';
            this.Contact_Fax = '';
            this.Contact_Email = '';
            this.Contact_Title = '';
            this.IP = '';
            this.TaxExempt = false;
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new Transaction();

                if (data.hasOwnProperty('Submit_Time')) {
                    obj['Submit_Time'] = ApiClient.convertToType(data['Submit_Time'], 'Date');
                }
                if (data.hasOwnProperty('Tran_Type')) {
                    obj['Tran_Type'] = ApiClient.convertToType(data['Tran_Type'], 'String');
                }
                if (data.hasOwnProperty('Tran_Amt')) {
                    obj['Tran_Amt'] = ApiClient.convertToType(data['Tran_Amt'], 'Number');
                }
                if (data.hasOwnProperty('Tran_Tax')) {
                    obj['Tran_Tax'] = ApiClient.convertToType(data['Tran_Tax'], 'Number');
                }
                if (data.hasOwnProperty('Tran_Inv')) {
                    obj['Tran_Inv'] = ApiClient.convertToType(data['Tran_Inv'], 'String');
                }
                if (data.hasOwnProperty('Tran_PO')) {
                    obj['Tran_PO'] = ApiClient.convertToType(data['Tran_PO'], 'String');
                }
                if (data.hasOwnProperty('Tran_CNum')) {
                    obj['Tran_CNum'] = ApiClient.convertToType(data['Tran_CNum'], 'String');
                }
                if (data.hasOwnProperty('Tran_Note')) {
                    obj['Tran_Note'] = ApiClient.convertToType(data['Tran_Note'], 'String');
                }
                if (data.hasOwnProperty('Card_Num')) {
                    obj['Card_Num'] = ApiClient.convertToType(data['Card_Num'], 'String');
                }
                if (data.hasOwnProperty('Card_Name')) {
                    obj['Card_Name'] = ApiClient.convertToType(data['Card_Name'], 'String');
                }
                if (data.hasOwnProperty('Card_Exp')) {
                    obj['Card_Exp'] = ApiClient.convertToType(data['Card_Exp'], 'String');
                }
                if (data.hasOwnProperty('Card_Type')) {
                    obj['Card_Type'] = ApiClient.convertToType(data['Card_Type'], 'String');
                }
                if (data.hasOwnProperty('AVS_Street')) {
                    obj['AVS_Street'] = ApiClient.convertToType(data['AVS_Street'], 'String');
                }
                if (data.hasOwnProperty('AVS_Zip')) {
                    obj['AVS_Zip'] = ApiClient.convertToType(data['AVS_Zip'], 'String');
                }
                if (data.hasOwnProperty('CVV_Num')) {
                    obj['CVV_Num'] = ApiClient.convertToType(data['CVV_Num'], 'String');
                }
                if (data.hasOwnProperty('Proc_ID')) {
                    obj['Proc_ID'] = ApiClient.convertToType(data['Proc_ID'], 'String');
                }
                if (data.hasOwnProperty('Proc_Resp')) {
                    obj['Proc_Resp'] = ApiClient.convertToType(data['Proc_Resp'], 'String');
                }
                if (data.hasOwnProperty('Proc_Code')) {
                    obj['Proc_Code'] = ApiClient.convertToType(data['Proc_Code'], 'String');
                }
                if (data.hasOwnProperty('Proc_Mess')) {
                    obj['Proc_Mess'] = ApiClient.convertToType(data['Proc_Mess'], 'String');
                }
                if (data.hasOwnProperty('AVS_Code')) {
                    obj['AVS_Code'] = ApiClient.convertToType(data['AVS_Code'], 'String');
                }
                if (data.hasOwnProperty('AVS_Resp')) {
                    obj['AVS_Resp'] = ApiClient.convertToType(data['AVS_Resp'], 'String');
                }
                if (data.hasOwnProperty('CVV_Code')) {
                    obj['CVV_Code'] = ApiClient.convertToType(data['CVV_Code'], 'String');
                }
                if (data.hasOwnProperty('CVV_Resp')) {
                    obj['CVV_Resp'] = ApiClient.convertToType(data['CVV_Resp'], 'String');
                }
                if (data.hasOwnProperty('Items')) {
                    obj['Items'] = ApiClient.convertToType(data['Items'], [TransactionItem]);
                }
                if (data.hasOwnProperty('Business_Name')) {
                    obj['Business_Name'] = ApiClient.convertToType(data['Business_Name'], 'String');
                }
                if (data.hasOwnProperty('Business_Address')) {
                    obj['Business_Address'] = ApiClient.convertToType(data['Business_Address'], 'String');
                }
                if (data.hasOwnProperty('Business_Address2')) {
                    obj['Business_Address2'] = ApiClient.convertToType(data['Business_Address2'], 'String');
                }
                if (data.hasOwnProperty('Business_City')) {
                    obj['Business_City'] = ApiClient.convertToType(data['Business_City'], 'String');
                }
                if (data.hasOwnProperty('Business_State')) {
                    obj['Business_State'] = ApiClient.convertToType(data['Business_State'], 'String');
                }
                if (data.hasOwnProperty('Business_Zip')) {
                    obj['Business_Zip'] = ApiClient.convertToType(data['Business_Zip'], 'String');
                }
                if (data.hasOwnProperty('Business_Country')) {
                    obj['Business_Country'] = ApiClient.convertToType(data['Business_Country'], 'String');
                }
                if (data.hasOwnProperty('Business_Website')) {
                    obj['Business_Website'] = ApiClient.convertToType(data['Business_Website'], 'String');
                }
                if (data.hasOwnProperty('Contact_FirstName')) {
                    obj['Contact_FirstName'] = ApiClient.convertToType(data['Contact_FirstName'], 'String');
                }
                if (data.hasOwnProperty('Contact_LastName')) {
                    obj['Contact_LastName'] = ApiClient.convertToType(data['Contact_LastName'], 'String');
                }
                if (data.hasOwnProperty('Contact_Phone')) {
                    obj['Contact_Phone'] = ApiClient.convertToType(data['Contact_Phone'], 'String');
                }
                if (data.hasOwnProperty('Contact_Fax')) {
                    obj['Contact_Fax'] = ApiClient.convertToType(data['Contact_Fax'], 'String');
                }
                if (data.hasOwnProperty('Contact_Email')) {
                    obj['Contact_Email'] = ApiClient.convertToType(data['Contact_Email'], 'String');
                }
                if (data.hasOwnProperty('Contact_Title')) {
                    obj['Contact_Title'] = ApiClient.convertToType(data['Contact_Title'], 'String');
                }
                if (data.hasOwnProperty('IP')) {
                    obj['IP'] = ApiClient.convertToType(data['IP'], 'String');
                }
                if (data.hasOwnProperty('TaxExempt')) {
                    obj['TaxExempt'] = ApiClient.convertToType(data['TaxExempt'], 'Boolean');
                }
            }
            return obj;
        }
    }

# TransactionItem

    import ApiClient from '../ApiClient';

    export default class TransactionItem {
        constructor() {
            this.TaxIncluded = false;
            this.Credit = false;
            this.ExtendedAmount = 0;
            this.ItemNumber = '';
            this.UnitCost = 0;
            this.Quantity = 0;
            this.Description = '';
            this.Discount = 0;
            this.Tax = 0;
            this.CommodityCode = '';
            this.UnitOfMeasure = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new TransactionItem();

                if (data.hasOwnProperty('TaxIncluded')) {
                    obj['TaxIncluded'] = ApiClient.convertToType(data['TaxIncluded'], 'Boolean');
                }
                if (data.hasOwnProperty('Credit')) {
                    obj['Credit'] = ApiClient.convertToType(data['Credit'], 'Boolean');
                }
                if (data.hasOwnProperty('ExtendedAmount')) {
                    obj['ExtendedAmount'] = ApiClient.convertToType(data['ExtendedAmount'], 'Number');
                }
                if (data.hasOwnProperty('ItemNumber')) {
                    obj['ItemNumber'] = ApiClient.convertToType(data['ItemNumber'], 'String');
                }
                if (data.hasOwnProperty('UnitCost')) {
                    obj['UnitCost'] = ApiClient.convertToType(data['UnitCost'], 'Number');
                }
                if (data.hasOwnProperty('Quantity')) {
                    obj['Quantity'] = ApiClient.convertToType(data['Quantity'], 'Number');
                }
                if (data.hasOwnProperty('Description')) {
                    obj['Description'] = ApiClient.convertToType(data['Description'], 'String');
                }
                if (data.hasOwnProperty('Discount')) {
                    obj['Discount'] = ApiClient.convertToType(data['Discount'], 'Number');
                }
                if (data.hasOwnProperty('Tax')) {
                    obj['Tax'] = ApiClient.convertToType(data['Tax'], 'Number');
                }
                if (data.hasOwnProperty('CommodityCode')) {
                    obj['CommodityCode'] = ApiClient.convertToType(data['CommodityCode'], 'String');
                }
                if (data.hasOwnProperty('UnitOfMeasure')) {
                    obj['UnitOfMeasure'] = ApiClient.convertToType(data['UnitOfMeasure'], 'String');
                }
            }
            return obj;
        }
    }

# TransactionType

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

# UpdateTransactionInfo

    import ApiClient from '../ApiClient';

    export default class UpdateTransactionInfo {
        constructor() {
            this.InvoiceNumber = '';
            this.CustomerNumber = '';
            this.PONumber = '';
            this.Note = '';
        }

        static constructFromObject(data, obj) {
            if (data) {
                obj = obj || new UpdateTransactionInfo();

                if (data.hasOwnProperty('InvoiceNumber')) {
                    obj['InvoiceNumber'] = ApiClient.convertToType(data['InvoiceNumber'], 'String');
                }
                if (data.hasOwnProperty('CustomerNumber')) {
                    obj['CustomerNumber'] = ApiClient.convertToType(data['CustomerNumber'], 'String');
                }
                if (data.hasOwnProperty('PONumber')) {
                    obj['PONumber'] = ApiClient.convertToType(data['PONumber'], 'String');
                }
                if (data.hasOwnProperty('Note')) {
                    obj['Note'] = ApiClient.convertToType(data['Note'], 'String');
                }
            }
            return obj;
        }
    }

# VaultCheck

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

# VaultCreditCard

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

# C# Models

# Address

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;


    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Address : IEquatable<Address>, IValidatableObject
        {
            public Address(stringaddressLine1 = default(string), stringaddressLine2 = default(string), stringcity = default(string), stringstate = default(string), stringzipCode = default(string))
            {
                this.AddressLine1 = addressLine1;
                this.AddressLine2 = addressLine2;
                this.City = city;
                this.State = state;
                this.ZipCode = zipCode;
            }

            [DataMember(Name="AddressLine1", EmitDefaultValue=false)]
            public stringAddressLine1 { get; set; }

            [DataMember(Name="AddressLine2", EmitDefaultValue=false)]
            public stringAddressLine2 { get; set; }

            [DataMember(Name="City", EmitDefaultValue=false)]
            public stringCity { get; set; }

            [DataMember(Name="State", EmitDefaultValue=false)]
            public stringState { get; set; }

            [DataMember(Name="ZipCode", EmitDefaultValue=false)]
            public stringZipCode { get; set; }
        }
    }

# Batch

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;


    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Batch : IEquatable<Batch>, IValidatableObject
        {
            public Batch(stringbatchNumber = default(string), DateTime? started = default(DateTime?), DateTime? completed = default(DateTime?), stringsalesCount = default(string), double? salesSum = default(double?), stringreturn Count = default(string), double? return Sum = default(double?), bool? batchError = default(bool?))
            {
                this.BatchNumber = batchNumber;
                this.Started = started;
                this.Completed = completed;
                this.SalesCount = salesCount;
                this.SalesSum = salesSum;
                this.ReturnCount = return Count;
                this.ReturnSum = return Sum;
                this.BatchError = batchError;
            }

            [DataMember(Name="BatchNumber", EmitDefaultValue=false)]
            public stringBatchNumber { get; set; }

            [DataMember(Name="Started", EmitDefaultValue=false)]
            public DateTime? Started { get; set; }

            [DataMember(Name="Completed", EmitDefaultValue=false)]
            public DateTime? Completed { get; set; }

            [DataMember(Name="SalesCount", EmitDefaultValue=false)]
            public stringSalesCount { get; set; }

            [DataMember(Name="SalesSum", EmitDefaultValue=false)]
            public double? SalesSum { get; set; }

            [DataMember(Name="ReturnCount", EmitDefaultValue=false)]
            public stringReturnCount { get; set; }

            [DataMember(Name="ReturnSum", EmitDefaultValue=false)]
            public double? ReturnSum { get; set; }

            [DataMember(Name="BatchError", EmitDefaultValue=false)]
            public bool? BatchError { get; set; }
        }
    }

# Business

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;


    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Business : IEquatable<Business>, IValidatableObject
        {
            public Business(Addressaddress = default(Address), stringname = default(string), stringphone = default(string), stringfax = default(string), stringwebSite = default(string))
            {
                this.Address = address;
                this.Name = name;
                this.Phone = phone;
                this.Fax = fax;
                this.WebSite = webSite;
            }

            [DataMember(Name="Address", EmitDefaultValue=false)]
            public AddressAddress { get; set; }

            [DataMember(Name="Name", EmitDefaultValue=false)]
            public stringName { get; set; }

            [DataMember(Name="Phone", EmitDefaultValue=false)]
            public stringPhone { get; set; }

            [DataMember(Name="Fax", EmitDefaultValue=false)]
            public stringFax { get; set; }

            [DataMember(Name="WebSite", EmitDefaultValue=false)]
            public stringWebSite { get; set; }
        }
    }

# CheckAccountType

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [JsonConverter(typeof(StringEnumConverter))]
        public enum CheckAccountType
        {
            [EnumMember(Value = "Unknown")]
            Unknown = 1,

            [EnumMember(Value = "Checking")]
            Checking = 2,

            [EnumMember(Value = "Savings")]
            Savings = 3
        }
    }

# CheckTransaction

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class CheckTransaction : IEquatable<CheckTransaction>, IValidatableObject
        {
            public CheckTransaction(stringterminalID = default(string), stringaccountNumber = default(string), CheckAccountTypeaccountType = default(CheckAccountType), stringcheckNumber = default(string), stringroutingNumber = default(string), stringmICRData = default(string), stringfirstName = default(string), stringlastName = default(string), stringcompanyName = default(string), stringaddress1 = default(string), stringaddress2 = default(string), stringcity = default(string), stringstate = default(string), stringzip = default(string), stringphoneNumber = default(string), stringdLNumber = default(string), stringdLState = default(string), stringcourtesyCardID = default(string), stringsSN4 = default(string), stringdOBYear = default(string), stringcheckAmount = default(string), CheckTransactionTypetranType = default(CheckTransactionType), stringprocID = default(string), stringiPAddress = default(string), stringcustomerNumber = default(string), stringpONumber = default(string), stringinvoiceNumber = default(string), stringtranNote = default(string), stringemailAddress = default(string), stringsECCode = default(string), stringprocResp = default(string), stringprocCode = default(string), stringprocMess = default(string))
            {
                this.TerminalID = terminalID;
                this.AccountNumber = accountNumber;
                this.AccountType = accountType;
                this.CheckNumber = checkNumber;
                this.RoutingNumber = routingNumber;
                this.MICRData = mICRData;
                this.FirstName = firstName;
                this.LastName = lastName;
                this.CompanyName = companyName;
                this.Address1 = address1;
                this.Address2 = address2;
                this.City = city;
                this.State = state;
                this.Zip = zip;
                this.PhoneNumber = phoneNumber;
                this.DLNumber = dLNumber;
                this.DLState = dLState;
                this.CourtesyCardID = courtesyCardID;
                this.SSN4 = sSN4;
                this.DOBYear = dOBYear;
                this.CheckAmount = checkAmount;
                this.TranType = tranType;
                this.ProcID = procID;
                this.IPAddress = iPAddress;
                this.CustomerNumber = customerNumber;
                this.PONumber = pONumber;
                this.InvoiceNumber = invoiceNumber;
                this.TranNote = tranNote;
                this.EmailAddress = emailAddress;
                this.SECCode = sECCode;
                this.ProcResp = procResp;
                this.ProcCode = procCode;
                this.ProcMess = procMess;
            }

            [DataMember(Name="Terminal_ID", EmitDefaultValue=false)]
            public stringTerminalID { get; set; }

            [DataMember(Name="Account_Number", EmitDefaultValue=false)]
            public stringAccountNumber { get; set; }

            [DataMember(Name="Account_Type", EmitDefaultValue=false)]
            public CheckAccountTypeAccountType { get; set; }

            [DataMember(Name="Check_Number", EmitDefaultValue=false)]
            public stringCheckNumber { get; set; }

            [DataMember(Name="Routing_Number", EmitDefaultValue=false)]
            public stringRoutingNumber { get; set; }

            [DataMember(Name="MICR_Data", EmitDefaultValue=false)]
            public stringMICRData { get; set; }

            [DataMember(Name="First_Name", EmitDefaultValue=false)]
            public stringFirstName { get; set; }

            [DataMember(Name="Last_Name", EmitDefaultValue=false)]
            public stringLastName { get; set; }

            [DataMember(Name="Company_Name", EmitDefaultValue=false)]
            public stringCompanyName { get; set; }

            [DataMember(Name="Address1", EmitDefaultValue=false)]
            public stringAddress1 { get; set; }

            [DataMember(Name="Address2", EmitDefaultValue=false)]
            public stringAddress2 { get; set; }

            [DataMember(Name="City", EmitDefaultValue=false)]
            public stringCity { get; set; }

            [DataMember(Name="State", EmitDefaultValue=false)]
            public stringState { get; set; }

            [DataMember(Name="Zip", EmitDefaultValue=false)]
            public stringZip { get; set; }

            [DataMember(Name="Phone_Number", EmitDefaultValue=false)]
            public stringPhoneNumber { get; set; }

            [DataMember(Name="DL_Number", EmitDefaultValue=false)]
            public stringDLNumber { get; set; }

            [DataMember(Name="DL_State", EmitDefaultValue=false)]
            public stringDLState { get; set; }

            [DataMember(Name="Courtesy_Card_ID", EmitDefaultValue=false)]
            public stringCourtesyCardID { get; set; }

            [DataMember(Name="SSN4", EmitDefaultValue=false)]
            public stringSSN4 { get; set; }

            [DataMember(Name="DOB_Year", EmitDefaultValue=false)]
            public stringDOBYear { get; set; }

            [DataMember(Name="Check_Amount", EmitDefaultValue=false)]
            public stringCheckAmount { get; set; }

            [DataMember(Name="Tran_Type", EmitDefaultValue=false)]
            public CheckTransactionTypeTranType { get; set; }

            [DataMember(Name="Proc_ID", EmitDefaultValue=false)]
            public stringProcID { get; set; }

            [DataMember(Name="IP_Address", EmitDefaultValue=false)]
            public stringIPAddress { get; set; }

            [DataMember(Name="CustomerNumber", EmitDefaultValue=false)]
            public stringCustomerNumber { get; set; }

            [DataMember(Name="PONumber", EmitDefaultValue=false)]
            public stringPONumber { get; set; }

            [DataMember(Name="InvoiceNumber", EmitDefaultValue=false)]
            public stringInvoiceNumber { get; set; }

            [DataMember(Name="TranNote", EmitDefaultValue=false)]
            public stringTranNote { get; set; }

            [DataMember(Name="EmailAddress", EmitDefaultValue=false)]
            public stringEmailAddress { get; set; }

            [DataMember(Name="SEC_Code", EmitDefaultValue=false)]
            public stringSECCode { get; set; }

            [DataMember(Name="Proc_Resp", EmitDefaultValue=false)]
            public stringProcResp { get; set; }

            [DataMember(Name="Proc_Code", EmitDefaultValue=false)]
            public stringProcCode { get; set; }

            [DataMember(Name="Proc_Mess", EmitDefaultValue=false)]
            public stringProcMess { get; set; }
        }
    }

# CheckTransactionSettings

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class CheckTransactionSettings : IEquatable<CheckTransactionSettings>, IValidatableObject
        {
            public CheckTransactionSettings(FieldInforeader = default(FieldInfo), FieldInfocontactName = default(FieldInfo), FieldInfocontactTitle = default(FieldInfo), FieldInfoemailAddress = default(FieldInfo), stringphoneDefault = default(string), FieldInfofax = default(FieldInfo), stringbillingAddressDefault = default(string), FieldInfobillingAddress2 = default(FieldInfo), stringbillingCityDefault = default(string), stringbillingStateDefault = default(string), stringbillingZipDefault = default(string), FieldInfopONumber = default(FieldInfo), FieldInfoinvoiceNumber = default(FieldInfo), FieldInfobusinessName = default(FieldInfo), FieldInfocustomerNumber = default(FieldInfo), FieldInforeferenceNote = default(FieldInfo), stringdefaultSECCode = default(string))
            {
                this.Reader = reader;
                this.ContactName = contactName;
                this.ContactTitle = contactTitle;
                this.EmailAddress = emailAddress;
                this.PhoneDefault = phoneDefault;
                this.Fax = fax;
                this.BillingAddressDefault = billingAddressDefault;
                this.BillingAddress2 = billingAddress2;
                this.BillingCityDefault = billingCityDefault;
                this.BillingStateDefault = billingStateDefault;
                this.BillingZipDefault = billingZipDefault;
                this.PONumber = pONumber;
                this.InvoiceNumber = invoiceNumber;
                this.BusinessName = businessName;
                this.CustomerNumber = customerNumber;
                this.ReferenceNote = referenceNote;
                this.DefaultSECCode = defaultSECCode;
            }

            [DataMember(Name="Reader", EmitDefaultValue=false)]
            public FieldInfoReader { get; set; }

            [DataMember(Name="ContactName", EmitDefaultValue=false)]
            public FieldInfoContactName { get; set; }

            [DataMember(Name="ContactTitle", EmitDefaultValue=false)]
            public FieldInfoContactTitle { get; set; }

            [DataMember(Name="EmailAddress", EmitDefaultValue=false)]
            public FieldInfoEmailAddress { get; set; }

            [DataMember(Name="PhoneDefault", EmitDefaultValue=false)]
            public stringPhoneDefault { get; set; }

            [DataMember(Name="Fax", EmitDefaultValue=false)]
            public FieldInfoFax { get; set; }

            [DataMember(Name="BillingAddressDefault", EmitDefaultValue=false)]
            public stringBillingAddressDefault { get; set; }

            [DataMember(Name="BillingAddress2", EmitDefaultValue=false)]
            public FieldInfoBillingAddress2 { get; set; }

            [DataMember(Name="BillingCityDefault", EmitDefaultValue=false)]
            public stringBillingCityDefault { get; set; }

            [DataMember(Name="BillingStateDefault", EmitDefaultValue=false)]
            public stringBillingStateDefault { get; set; }

            [DataMember(Name="BillingZipDefault", EmitDefaultValue=false)]
            public stringBillingZipDefault { get; set; }

            [DataMember(Name="PONumber", EmitDefaultValue=false)]
            public FieldInfoPONumber { get; set; }

            [DataMember(Name="InvoiceNumber", EmitDefaultValue=false)]
            public FieldInfoInvoiceNumber { get; set; }

            [DataMember(Name="BusinessName", EmitDefaultValue=false)]
            public FieldInfoBusinessName { get; set; }

            [DataMember(Name="CustomerNumber", EmitDefaultValue=false)]
            public FieldInfoCustomerNumber { get; set; }

            [DataMember(Name="ReferenceNote", EmitDefaultValue=false)]
            public FieldInfoReferenceNote { get; set; }

            [DataMember(Name="DefaultSECCode", EmitDefaultValue=false)]
            public stringDefaultSECCode { get; set; }
        }
    }

# CheckTransactionType

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [JsonConverter(typeof(StringEnumConverter))]
        public enum CheckTransactionType
        {
            [EnumMember(Value = "Unknown")]
            Unknown = 1,
            [EnumMember(Value = "Authorize")]
            Authorize = 2,
            [EnumMember(Value = "void ")]
            void = 3,
            [EnumMember(Value = "Override")]
            Override = 4,
            [EnumMember(Value = "Payroll")]
            Payroll = 5,
            [EnumMember(Value = "Recurring")]
            Recurring = 6,
            [EnumMember(Value = "Refund")]
            Refund = 7
        }
    }

# Contact

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Contact : IEquatable<Contact>, IValidatableObject
        {
            public Contact(stringfirstName = default(string), stringlastName = default(string), stringname = default(string), stringtitle = default(string), stringphone = default(string), stringemail = default(string))
            {
                this.FirstName = firstName;
                this.LastName = lastName;
                this.Name = name;
                this.Title = title;
                this.Phone = phone;
                this.Email = email;
            }

            [DataMember(Name="FirstName", EmitDefaultValue=false)]
            public stringFirstName { get; set; }

            [DataMember(Name="LastName", EmitDefaultValue=false)]
            public stringLastName { get; set; }

            [DataMember(Name="Name", EmitDefaultValue=false)]
            public stringName { get; set; }

            [DataMember(Name="Title", EmitDefaultValue=false)]
            public stringTitle { get; set; }

            [DataMember(Name="Phone", EmitDefaultValue=false)]
            public stringPhone { get; set; }

            [DataMember(Name="Email", EmitDefaultValue=false)]
            public stringEmail { get; set; }
        }
    }

# CreditCardTransactionSettings

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class CreditCardTransactionSettings : IEquatable<CreditCardTransactionSettings>, IValidatableObject
        {
            public CreditCardTransactionSettings(FieldInfocVV = default(FieldInfo), FieldInfocontactName = default(FieldInfo), FieldInfocontactTitle = default(FieldInfo), FieldInfoemailAddress = default(FieldInfo), FieldInfophone = default(FieldInfo), FieldInfofax = default(FieldInfo), FieldInfobillingAddress = default(FieldInfo), FieldInfobillingAddress2 = default(FieldInfo), FieldInfobillingCity = default(FieldInfo), FieldInfobillingState = default(FieldInfo), FieldInfobillingZip = default(FieldInfo), FieldInfopONumber = default(FieldInfo), FieldInfoinvoiceNumber = default(FieldInfo), FieldInfobusinessName = default(FieldInfo), FieldInfocustomerNumber = default(FieldInfo), FieldInforeferenceNote = default(FieldInfo), FieldInfosalesTax = default(FieldInfo), FieldInfotaxExempt = default(FieldInfo), FieldInfocardTracks = default(FieldInfo), FieldInfocardZip = default(FieldInfo), FieldInfocardAddress = default(FieldInfo), stringitemDescription = default(string), TransactionTypedefaultTransactionType = default(TransactionType))
            {
                this.CVV = cVV;
                this.ContactName = contactName;
                this.ContactTitle = contactTitle;
                this.EmailAddress = emailAddress;
                this.Phone = phone;
                this.Fax = fax;
                this.BillingAddress = billingAddress;
                this.BillingAddress2 = billingAddress2;
                this.BillingCity = billingCity;
                this.BillingState = billingState;
                this.BillingZip = billingZip;
                this.PONumber = pONumber;
                this.InvoiceNumber = invoiceNumber;
                this.BusinessName = businessName;
                this.CustomerNumber = customerNumber;
                this.ReferenceNote = referenceNote;
                this.SalesTax = salesTax;
                this.TaxExempt = taxExempt;
                this.CardTracks = cardTracks;
                this.CardZip = cardZip;
                this.CardAddress = cardAddress;
                this.ItemDescription = itemDescription;
                this.DefaultTransactionType = defaultTransactionType;
            }

            [DataMember(Name="CVV", EmitDefaultValue=false)]
            public FieldInfoCVV { get; set; }

            [DataMember(Name="ContactName", EmitDefaultValue=false)]
            public FieldInfoContactName { get; set; }

            [DataMember(Name="ContactTitle", EmitDefaultValue=false)]
            public FieldInfoContactTitle { get; set; }

            [DataMember(Name="EmailAddress", EmitDefaultValue=false)]
            public FieldInfoEmailAddress { get; set; }

            [DataMember(Name="Phone", EmitDefaultValue=false)]
            public FieldInfoPhone { get; set; }

            [DataMember(Name="Fax", EmitDefaultValue=false)]
            public FieldInfoFax { get; set; }

            [DataMember(Name="BillingAddress", EmitDefaultValue=false)]
            public FieldInfoBillingAddress { get; set; }

            [DataMember(Name="BillingAddress2", EmitDefaultValue=false)]
            public FieldInfoBillingAddress2 { get; set; }

            [DataMember(Name="BillingCity", EmitDefaultValue=false)]
            public FieldInfoBillingCity { get; set; }

            [DataMember(Name="BillingState", EmitDefaultValue=false)]
            public FieldInfoBillingState { get; set; }

            [DataMember(Name="BillingZip", EmitDefaultValue=false)]
            public FieldInfoBillingZip { get; set; }

            [DataMember(Name="PONumber", EmitDefaultValue=false)]
            public FieldInfoPONumber { get; set; }

            [DataMember(Name="InvoiceNumber", EmitDefaultValue=false)]
            public FieldInfoInvoiceNumber { get; set; }

            [DataMember(Name="BusinessName", EmitDefaultValue=false)]
            public FieldInfoBusinessName { get; set; }

            [DataMember(Name="CustomerNumber", EmitDefaultValue=false)]
            public FieldInfoCustomerNumber { get; set; }

            [DataMember(Name="ReferenceNote", EmitDefaultValue=false)]
            public FieldInfoReferenceNote { get; set; }

            [DataMember(Name="SalesTax", EmitDefaultValue=false)]
            public FieldInfoSalesTax { get; set; }

            [DataMember(Name="TaxExempt", EmitDefaultValue=false)]
            public FieldInfoTaxExempt { get; set; }

            [DataMember(Name="CardTracks", EmitDefaultValue=false)]
            public FieldInfoCardTracks { get; set; }

            [DataMember(Name="CardZip", EmitDefaultValue=false)]
            public FieldInfoCardZip { get; set; }

            [DataMember(Name="CardAddress", EmitDefaultValue=false)]
            public FieldInfoCardAddress { get; set; }

            [DataMember(Name="ItemDescription", EmitDefaultValue=false)]
            public stringItemDescription { get; set; }

            [DataMember(Name="DefaultTransactionType", EmitDefaultValue=false)]
            public TransactionTypeDefaultTransactionType { get; set; }
        }
    }

# CVVPresenceType

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [JsonConverter(typeof(StringEnumConverter))]
        public enum CVVPresenceType
        {
            [EnumMember(Value = "Normal")]
            Normal = 1,

            [EnumMember(Value = "Bypass")]
            Bypass = 2,

            [EnumMember(Value = "Illegible")]
            Illegible = 3,

            [EnumMember(Value = "NotAvailable")]
            NotAvailable = 4
        }
    }

# EmailReceipt

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class EmailReceipt : IEquatable<EmailReceipt>, IValidatableObject
        {
            public EmailReceipt(stringtransactionID = default(string), stringtoAddresses = default(string), stringsubject = default(string), stringheader = default(string), stringfooter = default(string))
            {
                this.TransactionID = transactionID;
                this.ToAddresses = toAddresses;
                this.Subject = subject;
                this.Header = header;
                this.Footer = footer;
            }

            [DataMember(Name="TransactionID", EmitDefaultValue=false)]
            public stringTransactionID { get; set; }

            [DataMember(Name="ToAddresses", EmitDefaultValue=false)]
            public stringToAddresses { get; set; }

            [DataMember(Name="Subject", EmitDefaultValue=false)]
            public stringSubject { get; set; }

            [DataMember(Name="Header", EmitDefaultValue=false)]
            public stringHeader { get; set; }

            [DataMember(Name="Footer", EmitDefaultValue=false)]
            public stringFooter { get; set; }
        }
    }

# FieldAccess

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [JsonConverter(typeof(StringEnumConverter))]
        public enum FieldAccess
        {
            [EnumMember(Value = "Disabled")]
            Disabled = 1,
            [EnumMember(Value = "Enabled")]
            Enabled = 2,
            [EnumMember(Value = "Required")]
            Required = 3
        }
    }

# FieldInfo

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class FieldInfo : IEquatable<FieldInfo>, IValidatableObject
        {
            public FieldInfo(FieldAccessaccess = default(FieldAccess), string_default = default(string))
            {
                this.Access = access;
                this._Default = _default;
            }

            [DataMember(Name="Access", EmitDefaultValue=false)]
            public FieldAccessAccess { get; set; }

            [DataMember(Name="Default", EmitDefaultValue=false)]
            public string_Default { get; set; }
        }
    }

# QueryTransaction

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class QueryTransaction : IEquatable<QueryTransaction>, IValidatableObject
        {
            public QueryTransaction(stringtranSequence = default(string), stringtranBatch = default(string), stringtranModified = default(string), stringtranProcessed = default(string), stringtranSettled = default(string), stringsubmitTime = default(string), stringtranType = default(string), double? tranAmt = default(double?), double? tranTax = default(double?), stringtranInv = default(string), stringtranPO = default(string), stringtranCNum = default(string), stringtranNote = default(string), stringcardNum = default(string), stringcardName = default(string), stringcardExp = default(string), stringaVSStreet = default(string), stringaVSZip = default(string), stringcVVNum = default(string), stringprocID = default(string), stringprocResp = default(string), stringprocCode = default(string), stringprocMess = default(string), stringaVSCode = default(string), stringaVSResp = default(string), stringcVVCode = default(string), stringcVVResp = default(string), List<TransactionItem> items = default(List<TransactionItem>), stringbusinessName = default(string), stringbusinessAddress = default(string), stringbusinessAddress2 = default(string), stringbusinessCity = default(string), stringbusinessState = default(string), stringbusinessZip = default(string), stringbusinessCountry = default(string), stringbusinessWebsite = default(string), stringcontactFirstName = default(string), stringcontactLastName = default(string), stringcontactPhone = default(string), stringcontactFax = default(string), stringcontactEmail = default(string), stringcontactTitle = default(string), stringiP = default(string), bool? taxExempt = default(bool?))
            {
                this.TranSequence = tranSequence;
                this.TranBatch = tranBatch;
                this.TranModified = tranModified;
                this.TranProcessed = tranProcessed;
                this.TranSettled = tranSettled;
                this.SubmitTime = submitTime;
                this.TranType = tranType;
                this.TranAmt = tranAmt;
                this.TranTax = tranTax;
                this.TranInv = tranInv;
                this.TranPO = tranPO;
                this.TranCNum = tranCNum;
                this.TranNote = tranNote;
                this.CardNum = cardNum;
                this.CardName = cardName;
                this.CardExp = cardExp;
                this.AVSStreet = aVSStreet;
                this.AVSZip = aVSZip;
                this.CVVNum = cVVNum;
                this.ProcID = procID;
                this.ProcResp = procResp;
                this.ProcCode = procCode;
                this.ProcMess = procMess;
                this.AVSCode = aVSCode;
                this.AVSResp = aVSResp;
                this.CVVCode = cVVCode;
                this.CVVResp = cVVResp;
                this.Items = items;
                this.BusinessName = businessName;
                this.BusinessAddress = businessAddress;
                this.BusinessAddress2 = businessAddress2;
                this.BusinessCity = businessCity;
                this.BusinessState = businessState;
                this.BusinessZip = businessZip;
                this.BusinessCountry = businessCountry;
                this.BusinessWebsite = businessWebsite;
                this.ContactFirstName = contactFirstName;
                this.ContactLastName = contactLastName;
                this.ContactPhone = contactPhone;
                this.ContactFax = contactFax;
                this.ContactEmail = contactEmail;
                this.ContactTitle = contactTitle;
                this.IP = iP;
                this.TaxExempt = taxExempt;
            }

            [DataMember(Name="Tran_Sequence", EmitDefaultValue=false)]
            public stringTranSequence { get; set; }

            [DataMember(Name="Tran_Batch", EmitDefaultValue=false)]
            public stringTranBatch { get; set; }

            [DataMember(Name="Tran_Modified", EmitDefaultValue=false)]
            public stringTranModified { get; set; }

            [DataMember(Name="Tran_Processed", EmitDefaultValue=false)]
            public stringTranProcessed { get; set; }

            [DataMember(Name="Tran_Settled", EmitDefaultValue=false)]
            public stringTranSettled { get; set; }

            [DataMember(Name="Submit_Time", EmitDefaultValue=false)]
            public stringSubmitTime { get; set; }

            [DataMember(Name="Tran_Type", EmitDefaultValue=false)]
            public stringTranType { get; set; }

            [DataMember(Name="Tran_Amt", EmitDefaultValue=false)]
            public double? TranAmt { get; set; }

            [DataMember(Name="Tran_Tax", EmitDefaultValue=false)]
            public double? TranTax { get; set; }

            [DataMember(Name="Tran_Inv", EmitDefaultValue=false)]
            public stringTranInv { get; set; }

            [DataMember(Name="Tran_PO", EmitDefaultValue=false)]
            public stringTranPO { get; set; }

            [DataMember(Name="Tran_CNum", EmitDefaultValue=false)]
            public stringTranCNum { get; set; }

            [DataMember(Name="Tran_Note", EmitDefaultValue=false)]
            public stringTranNote { get; set; }

            [DataMember(Name="Card_Num", EmitDefaultValue=false)]
            public stringCardNum { get; set; }

            [DataMember(Name="Card_Name", EmitDefaultValue=false)]
            public stringCardName { get; set; }

            [DataMember(Name="Card_Exp", EmitDefaultValue=false)]
            public stringCardExp { get; set; }

            [DataMember(Name="AVS_Street", EmitDefaultValue=false)]
            public stringAVSStreet { get; set; }

            [DataMember(Name="AVS_Zip", EmitDefaultValue=false)]
            public stringAVSZip { get; set; }

            [DataMember(Name="CVV_Num", EmitDefaultValue=false)]
            public stringCVVNum { get; set; }

            [DataMember(Name="Proc_ID", EmitDefaultValue=false)]
            public stringProcID { get; set; }

            [DataMember(Name="Proc_Resp", EmitDefaultValue=false)]
            public stringProcResp { get; set; }

            [DataMember(Name="Proc_Code", EmitDefaultValue=false)]
            public stringProcCode { get; set; }

            [DataMember(Name="Proc_Mess", EmitDefaultValue=false)]
            public stringProcMess { get; set; }

            [DataMember(Name="AVS_Code", EmitDefaultValue=false)]
            public stringAVSCode { get; set; }

            [DataMember(Name="AVS_Resp", EmitDefaultValue=false)]
            public stringAVSResp { get; set; }

            [DataMember(Name="CVV_Code", EmitDefaultValue=false)]
            public stringCVVCode { get; set; }

            [DataMember(Name="CVV_Resp", EmitDefaultValue=false)]
            public stringCVVResp { get; set; }

            [DataMember(Name="Items", EmitDefaultValue=false)]
            public List<TransactionItem> Items { get; set; }

            [DataMember(Name="Business_Name", EmitDefaultValue=false)]
            public stringBusinessName { get; set; }

            [DataMember(Name="Business_Address", EmitDefaultValue=false)]
            public stringBusinessAddress { get; set; }

            [DataMember(Name="Business_Address2", EmitDefaultValue=false)]
            public stringBusinessAddress2 { get; set; }

            [DataMember(Name="Business_City", EmitDefaultValue=false)]
            public stringBusinessCity { get; set; }

            [DataMember(Name="Business_State", EmitDefaultValue=false)]
            public stringBusinessState { get; set; }

            [DataMember(Name="Business_Zip", EmitDefaultValue=false)]
            public stringBusinessZip { get; set; }

            [DataMember(Name="Business_Country", EmitDefaultValue=false)]
            public stringBusinessCountry { get; set; }

            [DataMember(Name="Business_Website", EmitDefaultValue=false)]
            public stringBusinessWebsite { get; set; }

            [DataMember(Name="Contact_FirstName", EmitDefaultValue=false)]
            public stringContactFirstName { get; set; }

            [DataMember(Name="Contact_LastName", EmitDefaultValue=false)]
            public stringContactLastName { get; set; }

            [DataMember(Name="Contact_Phone", EmitDefaultValue=false)]
            public stringContactPhone { get; set; }

            [DataMember(Name="Contact_Fax", EmitDefaultValue=false)]
            public stringContactFax { get; set; }

            [DataMember(Name="Contact_Email", EmitDefaultValue=false)]
            public stringContactEmail { get; set; }

            [DataMember(Name="Contact_Title", EmitDefaultValue=false)]
            public stringContactTitle { get; set; }

            [DataMember(Name="IP", EmitDefaultValue=false)]
            public stringIP { get; set; }

            [DataMember(Name="TaxExempt", EmitDefaultValue=false)]
            public bool? TaxExempt { get; set; }
        }
    }

# Receipt

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Receipt : IEquatable<Receipt>, IValidatableObject
        {
            public Receipt(ReceiptCustomLinesheader = default(ReceiptCustomLines), ReceiptCustomLinesfooter = default(ReceiptCustomLines))
            {
                this.Header = header;
                this.Footer = footer;
            }

            [DataMember(Name="Header", EmitDefaultValue=false)]
            public ReceiptCustomLinesHeader { get; set; }

            [DataMember(Name="Footer", EmitDefaultValue=false)]
            public ReceiptCustomLinesFooter { get; set; }
        }
    }

# ReceiptCustomLines

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class ReceiptCustomLines : IEquatable<ReceiptCustomLines>, IValidatableObject
        {
            public ReceiptCustomLines(stringcustomLine1 = default(string), stringcustomLine2 = default(string), stringcustomLine3 = default(string), stringcustomLine4 = default(string))
            {
                this.CustomLine1 = customLine1;
                this.CustomLine2 = customLine2;
                this.CustomLine3 = customLine3;
                this.CustomLine4 = customLine4;
            }

            [DataMember(Name="CustomLine1", EmitDefaultValue=false)]
            public stringCustomLine1 { get; set; }

            [DataMember(Name="CustomLine2", EmitDefaultValue=false)]
            public stringCustomLine2 { get; set; }

            [DataMember(Name="CustomLine3", EmitDefaultValue=false)]
            public stringCustomLine3 { get; set; }

            [DataMember(Name="CustomLine4", EmitDefaultValue=false)]
            public stringCustomLine4 { get; set; }
        }
    }

# Record

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Record : IEquatable<Record>, IValidatableObject
        {
            public Record(Responseresponse = default(Response), int? iD = default(int?), stringreference = default(string), Businessbusiness = default(Business), Contactcontact = default(Contact), stringpO = default(string), stringinvoice = default(string), stringcustomer = default(string), bool? taxExempt = default(bool?), stringnote = default(string), List<VaultCreditCard> creditCards = default(List<VaultCreditCard>), List<VaultCheck> checks = default(List<VaultCheck>))
            {
                this.Response = response;
                this.ID = iD;
                this.Reference = reference;
                this.Business = business;
                this.Contact = contact;
                this.PO = pO;
                this.Invoice = invoice;
                this.Customer = customer;
                this.TaxExempt = taxExempt;
                this.Note = note;
                this.CreditCards = creditCards;
                this.Checks = checks;
            }

            [DataMember(Name="Response", EmitDefaultValue=false)]
            public ResponseResponse { get; set; }

            [DataMember(Name="ID", EmitDefaultValue=false)]
            public int? ID { get; set; }

            [DataMember(Name="Reference", EmitDefaultValue=false)]
            public stringReference { get; set; }

            [DataMember(Name="Business", EmitDefaultValue=false)]
            public BusinessBusiness { get; set; }

            [DataMember(Name="Contact", EmitDefaultValue=false)]
            public ContactContact { get; set; }

            [DataMember(Name="PO", EmitDefaultValue=false)]
            public stringPO { get; set; }

            [DataMember(Name="Invoice", EmitDefaultValue=false)]
            public stringInvoice { get; set; }

            [DataMember(Name="Customer", EmitDefaultValue=false)]
            public stringCustomer { get; set; }

            [DataMember(Name="TaxExempt", EmitDefaultValue=false)]
            public bool? TaxExempt { get; set; }

            [DataMember(Name="Note", EmitDefaultValue=false)]
            public stringNote { get; set; }

            [DataMember(Name="CreditCards", EmitDefaultValue=false)]
            public List<VaultCreditCard> CreditCards { get; set; }

            [DataMember(Name="Checks", EmitDefaultValue=false)]
            public List<VaultCheck> Checks { get; set; }
        }
    }

# Response

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Response : IEquatable<Response>, IValidatableObject
        {
            public Response(bool? error = default(bool?), stringmessage = default(string))
            {
                this.Error = error;
                this.Message = message;
            }

            [DataMember(Name="Error", EmitDefaultValue=false)]
            public bool? Error { get; set; }

            [DataMember(Name="Message", EmitDefaultValue=false)]
            public stringMessage { get; set; }
        }
    }

# SearchVault

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class SearchVault : IEquatable<SearchVault>, IValidatableObject
        {
            public SearchVault(stringreference = default(string), stringbusinessName = default(string), stringfirstName = default(string), stringlastName = default(string))
            {
                this.Reference = reference;
                this.BusinessName = businessName;
                this.FirstName = firstName;
                this.LastName = lastName;
            }

            [DataMember(Name="Reference", EmitDefaultValue=false)]
            public stringReference { get; set; }

            [DataMember(Name="BusinessName", EmitDefaultValue=false)]
            public stringBusinessName { get; set; }

            [DataMember(Name="FirstName", EmitDefaultValue=false)]
            public stringFirstName { get; set; }

            [DataMember(Name="LastName", EmitDefaultValue=false)]
            public stringLastName { get; set; }
        }
    }

# Settings

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Settings : IEquatable<Settings>, IValidatableObject
        {
            public Settings(CreditCardTransactionSettingscreditCardTransactionSettings = default(CreditCardTransactionSettings), CheckTransactionSettingscheckTransactionSettings = default(CheckTransactionSettings), Businessbusiness = default(Business), ContactmainContact = default(Contact), Receiptreceipt40 = default(Receipt), Receiptreceipt80 = default(Receipt), bool? printSignatureLine = default(bool?), Responseresponse = default(Response), stringaccountID = default(string), FieldInfocopyEmailReceipt = default(FieldInfo))
            {
                this.CreditCardTransactionSettings = creditCardTransactionSettings;
                this.CheckTransactionSettings = checkTransactionSettings;
                this.Business = business;
                this.MainContact = mainContact;
                this.Receipt40 = receipt40;
                this.Receipt80 = receipt80;
                this.PrintSignatureLine = printSignatureLine;
                this.Response = response;
                this.AccountID = accountID;
                this.CopyEmailReceipt = copyEmailReceipt;
            }

            [DataMember(Name="CreditCardTransactionSettings", EmitDefaultValue=false)]
            public CreditCardTransactionSettingsCreditCardTransactionSettings { get; set; }

            [DataMember(Name="CheckTransactionSettings", EmitDefaultValue=false)]
            public CheckTransactionSettingsCheckTransactionSettings { get; set; }

            [DataMember(Name="Business", EmitDefaultValue=false)]
            public BusinessBusiness { get; set; }

            [DataMember(Name="MainContact", EmitDefaultValue=false)]
            public ContactMainContact { get; set; }

            [DataMember(Name="Receipt40", EmitDefaultValue=false)]
            public ReceiptReceipt40 { get; set; }

            [DataMember(Name="Receipt80", EmitDefaultValue=false)]
            public ReceiptReceipt80 { get; set; }

            [DataMember(Name="PrintSignatureLine", EmitDefaultValue=false)]
            public bool? PrintSignatureLine { get; set; }

            [DataMember(Name="Response", EmitDefaultValue=false)]
            public ResponseResponse { get; set; }

            [DataMember(Name="AccountID", EmitDefaultValue=false)]
            public stringAccountID { get; set; }

            [DataMember(Name="CopyEmailReceipt", EmitDefaultValue=false)]
            public FieldInfoCopyEmailReceipt { get; set; }
        }
    }

# TerminalSettings

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class TerminalSettings : IEquatable<TerminalSettings>, IValidatableObject
        {
            public TerminalSettings(int? iD = default(int?), int? terminalID = default(int?), stringsECCode = default(string), bool? gatewayTerminal = default(bool?), bool? consumerCredits = default(bool?), bool? dLRequired = default(bool?), bool? checkVerify = default(bool?), bool? identityVerify = default(bool?))
            {
                this.ID = iD;
                this.TerminalID = terminalID;
                this.SECCode = sECCode;
                this.GatewayTerminal = gatewayTerminal;
                this.ConsumerCredits = consumerCredits;
                this.DLRequired = dLRequired;
                this.CheckVerify = checkVerify;
                this.IdentityVerify = identityVerify;
            }

            [DataMember(Name="ID", EmitDefaultValue=false)]
            public int? ID { get; set; }

            [DataMember(Name="Terminal_ID", EmitDefaultValue=false)]
            public int? TerminalID { get; set; }

            [DataMember(Name="SEC_Code", EmitDefaultValue=false)]
            public stringSECCode { get; set; }

            [DataMember(Name="Gateway_Terminal", EmitDefaultValue=false)]
            public bool? GatewayTerminal { get; set; }

            [DataMember(Name="Consumer_Credits", EmitDefaultValue=false)]
            public bool? ConsumerCredits { get; set; }

            [DataMember(Name="DL_Required", EmitDefaultValue=false)]
            public bool? DLRequired { get; set; }

            [DataMember(Name="Check_Verify", EmitDefaultValue=false)]
            public bool? CheckVerify { get; set; }

            [DataMember(Name="Identity_Verify", EmitDefaultValue=false)]
            public bool? IdentityVerify { get; set; }
        }
    }

# Transaction

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class Transaction : IEquatable<Transaction>, IValidatableObject
        {
            public Transaction(DateTime? submitTime = default(DateTime?), stringtranType = default(string), double? tranAmt = default(double?), double? tranTax = default(double?), stringtranInv = default(string), stringtranPO = default(string), stringtranCNum = default(string), stringtranNote = default(string), stringcardNum = default(string), stringcardName = default(string), stringcardExp = default(string), stringcardType = default(string), stringaVSStreet = default(string), stringaVSZip = default(string), stringcVVNum = default(string), stringprocID = default(string), stringprocResp = default(string), stringprocCode = default(string), stringprocMess = default(string), stringaVSCode = default(string), stringaVSResp = default(string), stringcVVCode = default(string), stringcVVResp = default(string), List<TransactionItem> items = default(List<TransactionItem>), stringbusinessName = default(string), stringbusinessAddress = default(string), stringbusinessAddress2 = default(string), stringbusinessCity = default(string), stringbusinessState = default(string), stringbusinessZip = default(string), stringbusinessCountry = default(string), stringbusinessWebsite = default(string), stringcontactFirstName = default(string), stringcontactLastName = default(string), stringcontactPhone = default(string), stringcontactFax = default(string), stringcontactEmail = default(string), stringcontactTitle = default(string), stringiP = default(string), bool? taxExempt = default(bool?))
            {
                this.SubmitTime = submitTime;
                this.TranType = tranType;
                this.TranAmt = tranAmt;
                this.TranTax = tranTax;
                this.TranInv = tranInv;
                this.TranPO = tranPO;
                this.TranCNum = tranCNum;
                this.TranNote = tranNote;
                this.CardNum = cardNum;
                this.CardName = cardName;
                this.CardExp = cardExp;
                this.CardType = cardType;
                this.AVSStreet = aVSStreet;
                this.AVSZip = aVSZip;
                this.CVVNum = cVVNum;
                this.ProcID = procID;
                this.ProcResp = procResp;
                this.ProcCode = procCode;
                this.ProcMess = procMess;
                this.AVSCode = aVSCode;
                this.AVSResp = aVSResp;
                this.CVVCode = cVVCode;
                this.CVVResp = cVVResp;
                this.Items = items;
                this.BusinessName = businessName;
                this.BusinessAddress = businessAddress;
                this.BusinessAddress2 = businessAddress2;
                this.BusinessCity = businessCity;
                this.BusinessState = businessState;
                this.BusinessZip = businessZip;
                this.BusinessCountry = businessCountry;
                this.BusinessWebsite = businessWebsite;
                this.ContactFirstName = contactFirstName;
                this.ContactLastName = contactLastName;
                this.ContactPhone = contactPhone;
                this.ContactFax = contactFax;
                this.ContactEmail = contactEmail;
                this.ContactTitle = contactTitle;
                this.IP = iP;
                this.TaxExempt = taxExempt;
            }

            [DataMember(Name="Submit_Time", EmitDefaultValue=false)]
            public DateTime? SubmitTime { get; set; }

            [DataMember(Name="Tran_Type", EmitDefaultValue=false)]
            public stringTranType { get; set; }

            [DataMember(Name="Tran_Amt", EmitDefaultValue=false)]
            public double? TranAmt { get; set; }

            [DataMember(Name="Tran_Tax", EmitDefaultValue=false)]
            public double? TranTax { get; set; }

            [DataMember(Name="Tran_Inv", EmitDefaultValue=false)]
            public stringTranInv { get; set; }

            [DataMember(Name="Tran_PO", EmitDefaultValue=false)]
            public stringTranPO { get; set; }

            [DataMember(Name="Tran_CNum", EmitDefaultValue=false)]
            public stringTranCNum { get; set; }

            [DataMember(Name="Tran_Note", EmitDefaultValue=false)]
            public stringTranNote { get; set; }

            [DataMember(Name="Card_Num", EmitDefaultValue=false)]
            public stringCardNum { get; set; }

            [DataMember(Name="Card_Name", EmitDefaultValue=false)]
            public stringCardName { get; set; }

            [DataMember(Name="Card_Exp", EmitDefaultValue=false)]
            public stringCardExp { get; set; }

            [DataMember(Name="Card_Type", EmitDefaultValue=false)]
            public stringCardType { get; set; }

            [DataMember(Name="AVS_Street", EmitDefaultValue=false)]
            public stringAVSStreet { get; set; }

            [DataMember(Name="AVS_Zip", EmitDefaultValue=false)]
            public stringAVSZip { get; set; }

            [DataMember(Name="CVV_Num", EmitDefaultValue=false)]
            public stringCVVNum { get; set; }

            [DataMember(Name="Proc_ID", EmitDefaultValue=false)]
            public stringProcID { get; set; }

            [DataMember(Name="Proc_Resp", EmitDefaultValue=false)]
            public stringProcResp { get; set; }

            [DataMember(Name="Proc_Code", EmitDefaultValue=false)]
            public stringProcCode { get; set; }

            [DataMember(Name="Proc_Mess", EmitDefaultValue=false)]
            public stringProcMess { get; set; }

            [DataMember(Name="AVS_Code", EmitDefaultValue=false)]
            public stringAVSCode { get; set; }

            [DataMember(Name="AVS_Resp", EmitDefaultValue=false)]
            public stringAVSResp { get; set; }

            [DataMember(Name="CVV_Code", EmitDefaultValue=false)]
            public stringCVVCode { get; set; }

            [DataMember(Name="CVV_Resp", EmitDefaultValue=false)]
            public stringCVVResp { get; set; }

            [DataMember(Name="Items", EmitDefaultValue=false)]
            public List<TransactionItem> Items { get; set; }

            [DataMember(Name="Business_Name", EmitDefaultValue=false)]
            public stringBusinessName { get; set; }

            [DataMember(Name="Business_Address", EmitDefaultValue=false)]
            public stringBusinessAddress { get; set; }

            [DataMember(Name="Business_Address2", EmitDefaultValue=false)]
            public stringBusinessAddress2 { get; set; }

            [DataMember(Name="Business_City", EmitDefaultValue=false)]
            public stringBusinessCity { get; set; }

            [DataMember(Name="Business_State", EmitDefaultValue=false)]
            public stringBusinessState { get; set; }

            [DataMember(Name="Business_Zip", EmitDefaultValue=false)]
            public stringBusinessZip { get; set; }

            [DataMember(Name="Business_Country", EmitDefaultValue=false)]
            public stringBusinessCountry { get; set; }

            [DataMember(Name="Business_Website", EmitDefaultValue=false)]
            public stringBusinessWebsite { get; set; }

            [DataMember(Name="Contact_FirstName", EmitDefaultValue=false)]
            public stringContactFirstName { get; set; }

            [DataMember(Name="Contact_LastName", EmitDefaultValue=false)]
            public stringContactLastName { get; set; }

            [DataMember(Name="Contact_Phone", EmitDefaultValue=false)]
            public stringContactPhone { get; set; }

            [DataMember(Name="Contact_Fax", EmitDefaultValue=false)]
            public stringContactFax { get; set; }

            [DataMember(Name="Contact_Email", EmitDefaultValue=false)]
            public stringContactEmail { get; set; }

            [DataMember(Name="Contact_Title", EmitDefaultValue=false)]
            public stringContactTitle { get; set; }

            [DataMember(Name="IP", EmitDefaultValue=false)]
            public stringIP { get; set; }

            [DataMember(Name="TaxExempt", EmitDefaultValue=false)]
            public bool? TaxExempt { get; set; }
        }
    }

# TransactionItem

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class TransactionItem : IEquatable<TransactionItem>, IValidatableObject
        {
            public TransactionItem(bool? taxIncluded = default(bool?), bool? credit = default(bool?), double? extendedAmount = default(double?), stringitemNumber = default(string), double? unitCost = default(double?), int? quantity = default(int?), stringdescription = default(string), double? discount = default(double?), double? tax = default(double?), stringcommodityCode = default(string), stringunitOfMeasure = default(string))
            {
                this.TaxIncluded = taxIncluded;
                this.Credit = credit;
                this.ExtendedAmount = extendedAmount;
                this.ItemNumber = itemNumber;
                this.UnitCost = unitCost;
                this.Quantity = quantity;
                this.Description = description;
                this.Discount = discount;
                this.Tax = tax;
                this.CommodityCode = commodityCode;
                this.UnitOfMeasure = unitOfMeasure;
            }

            [DataMember(Name="TaxIncluded", EmitDefaultValue=false)]
            public bool? TaxIncluded { get; set; }

            [DataMember(Name="Credit", EmitDefaultValue=false)]
            public bool? Credit { get; set; }

            [DataMember(Name="ExtendedAmount", EmitDefaultValue=false)]
            public double? ExtendedAmount { get; set; }

            [DataMember(Name="ItemNumber", EmitDefaultValue=false)]
            public stringItemNumber { get; set; }

            [DataMember(Name="UnitCost", EmitDefaultValue=false)]
            public double? UnitCost { get; set; }

            [DataMember(Name="Quantity", EmitDefaultValue=false)]
            public int? Quantity { get; set; }

            [DataMember(Name="Description", EmitDefaultValue=false)]
            public stringDescription { get; set; }

            [DataMember(Name="Discount", EmitDefaultValue=false)]
            public double? Discount { get; set; }

            [DataMember(Name="Tax", EmitDefaultValue=false)]
            public double? Tax { get; set; }

            [DataMember(Name="CommodityCode", EmitDefaultValue=false)]
            public stringCommodityCode { get; set; }

            [DataMember(Name="UnitOfMeasure", EmitDefaultValue=false)]
            public stringUnitOfMeasure { get; set; }
        }
    }

# UpdateTransactionInfo

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class UpdateTransactionInfo : IEquatable<UpdateTransactionInfo>, IValidatableObject
        {
            public UpdateTransactionInfo(stringinvoiceNumber = default(string), stringcustomerNumber = default(string), stringpONumber = default(string), stringnote = default(string))
            {
                this.InvoiceNumber = invoiceNumber;
                this.CustomerNumber = customerNumber;
                this.PONumber = pONumber;
                this.Note = note;
            }

            [DataMember(Name="InvoiceNumber", EmitDefaultValue=false)]
            public stringInvoiceNumber { get; set; }

            [DataMember(Name="CustomerNumber", EmitDefaultValue=false)]
            public stringCustomerNumber { get; set; }

            [DataMember(Name="PONumber", EmitDefaultValue=false)]
            public stringPONumber { get; set; }

            [DataMember(Name="Note", EmitDefaultValue=false)]
            public stringNote { get; set; }
        }
    }

# VaultCheck

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class VaultCheck : IEquatable<VaultCheck>, IValidatableObject
        {
            public VaultCheck(Responseresponse = default(Response), int? checkID = default(int?), bool? main = default(bool?), stringcheckRouting = default(string), stringcheckAccount = default(string), stringcheckNumber = default(string), stringcheckFirstName = default(string), stringcheckLastName = default(string), stringnote = default(string), stringmaskedRouting = default(string), stringmaskedAccount = default(string), stringaccountType = default(string))
            {
                this.Response = response;
                this.CheckID = checkID;
                this.Main = main;
                this.CheckRouting = checkRouting;
                this.CheckAccount = checkAccount;
                this.CheckNumber = checkNumber;
                this.CheckFirstName = checkFirstName;
                this.CheckLastName = checkLastName;
                this.Note = note;
                this.MaskedRouting = maskedRouting;
                this.MaskedAccount = maskedAccount;
                this.AccountType = accountType;
            }

            [DataMember(Name="Response", EmitDefaultValue=false)]
            public ResponseResponse { get; set; }

            [DataMember(Name="CheckID", EmitDefaultValue=false)]
            public int? CheckID { get; set; }

            [DataMember(Name="Main", EmitDefaultValue=false)]
            public bool? Main { get; set; }

            [DataMember(Name="CheckRouting", EmitDefaultValue=false)]
            public stringCheckRouting { get; set; }

            [DataMember(Name="CheckAccount", EmitDefaultValue=false)]
            public stringCheckAccount { get; set; }

            [DataMember(Name="CheckNumber", EmitDefaultValue=false)]
            public stringCheckNumber { get; set; }

            [DataMember(Name="CheckFirstName", EmitDefaultValue=false)]
            public stringCheckFirstName { get; set; }

            [DataMember(Name="CheckLastName", EmitDefaultValue=false)]
            public stringCheckLastName { get; set; }

            [DataMember(Name="Note", EmitDefaultValue=false)]
            public stringNote { get; set; }

            [DataMember(Name="MaskedRouting", EmitDefaultValue=false)]
            public stringMaskedRouting { get; set; }

            [DataMember(Name="MaskedAccount", EmitDefaultValue=false)]
            public stringMaskedAccount { get; set; }

            [DataMember(Name="AccountType", EmitDefaultValue=false)]
            public stringAccountType { get; set; }
        }
    }

# VaultCreditCard

    using System;
    using System.Linq;
    using System.IO;
    using System.Text;
    using System.Text.RegularExpressions;
    using System.Collections;
    using System.Collections.Generic;
    using System.Collections.ObjectModel;
    using System.Runtime.Serialization;
    using Newtonsoft.Json;
    using Newtonsoft.Json.Converters;
    using System.ComponentModel.DataAnnotations;
    using SwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespace IO.Swagger.Model
    {
        [DataContract]
        public partial class VaultCreditCard : IEquatable<VaultCreditCard>, IValidatableObject
        {
            public VaultCreditCard(stringmagneticTracks = default(string), stringtrack1 = default(string), stringtrack2 = default(string), stringnumber = default(string), stringmaskedNumber = default(string), stringholder = default(string), stringexpDate = default(string), stringcVV = default(string), stringaddress = default(string), stringcity = default(string), stringstate = default(string), stringzIP = default(string), bool? swiped = default(bool?), stringtypeString = default(string), CVVPresenceTypecVVType = default(CVVPresenceType), bool? notPresent = default(bool?), Responseresponse = default(Response), int? cardID = default(int?), stringnote = default(string), bool? main = default(bool?))
            {
                this.MagneticTracks = magneticTracks;
                this.Track1 = track1;
                this.Track2 = track2;
                this.Number = number;
                this.MaskedNumber = maskedNumber;
                this.Holder = holder;
                this.ExpDate = expDate;
                this.CVV = cVV;
                this.Address = address;
                this.City = city;
                this.State = state;
                this.ZIP = zIP;
                this.Swiped = swiped;
                this.TypeString = typeString;
                this.CVVType = cVVType;
                this.NotPresent = notPresent;
                this.Response = response;
                this.CardID = cardID;
                this.Note = note;
                this.Main = main;
            }

            [DataMember(Name="MagneticTracks", EmitDefaultValue=false)]
            public stringMagneticTracks { get; set; }

            [DataMember(Name="Track1", EmitDefaultValue=false)]
            public stringTrack1 { get; set; }

            [DataMember(Name="Track2", EmitDefaultValue=false)]
            public stringTrack2 { get; set; }

            [DataMember(Name="Number", EmitDefaultValue=false)]
            public stringNumber { get; set; }

            [DataMember(Name="MaskedNumber", EmitDefaultValue=false)]
            public stringMaskedNumber { get; set; }

            [DataMember(Name="Holder", EmitDefaultValue=false)]
            public stringHolder { get; set; }

            [DataMember(Name="ExpDate", EmitDefaultValue=false)]
            public stringExpDate { get; set; }

            [DataMember(Name="CVV", EmitDefaultValue=false)]
            public stringCVV { get; set; }

            [DataMember(Name="Address", EmitDefaultValue=false)]
            public stringAddress { get; set; }

            [DataMember(Name="City", EmitDefaultValue=false)]
            public stringCity { get; set; }

            [DataMember(Name="State", EmitDefaultValue=false)]
            public stringState { get; set; }

            [DataMember(Name="ZIP", EmitDefaultValue=false)]
            public stringZIP { get; set; }

            [DataMember(Name="Swiped", EmitDefaultValue=false)]
            public bool? Swiped { get; set; }

            [DataMember(Name="TypeString", EmitDefaultValue=false)]
            public stringTypeString { get; set; }

            [DataMember(Name="CVVType", EmitDefaultValue=false)]
            public CVVPresenceTypeCVVType { get; set; }

            [DataMember(Name="NotPresent", EmitDefaultValue=false)]
            public bool? NotPresent { get; set; }

            [DataMember(Name="Response", EmitDefaultValue=false)]
            public ResponseResponse { get; set; }

            [DataMember(Name="CardID", EmitDefaultValue=false)]
            public int? CardID { get; set; }

            [DataMember(Name="Note", EmitDefaultValue=false)]
            public stringNote { get; set; }

            [DataMember(Name="Main", EmitDefaultValue=false)]
            public bool? Main { get; set; }
        }
    }

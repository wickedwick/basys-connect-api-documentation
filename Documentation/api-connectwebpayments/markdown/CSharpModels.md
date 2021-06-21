# C# Models

# Address

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassAddress : IEquatable\&lt;Address\&gt;, IValidatableObject

    {

    publicAddress(stringaddressLine1 = default(string), stringaddressLine2 = default(string), stringcity = default(string), stringstate = default(string), stringzipCode = default(string))

    {

    this.AddressLine1 = addressLine1;

    this.AddressLine2 = addressLine2;

    this.City = city;

    this.State = state;

    this.ZipCode = zipCode;

    }

    [DataMember(Name=&quot;AddressLine1&quot;, EmitDefaultValue=false)]

    publicstringAddressLine1 { get; set; }

    [DataMember(Name=&quot;AddressLine2&quot;, EmitDefaultValue=false)]

    publicstringAddressLine2 { get; set; }

    [DataMember(Name=&quot;City&quot;, EmitDefaultValue=false)]

    publicstringCity { get; set; }

    [DataMember(Name=&quot;State&quot;, EmitDefaultValue=false)]

    publicstringState { get; set; }

    [DataMember(Name=&quot;ZipCode&quot;, EmitDefaultValue=false)]

    publicstringZipCode { get; set; }

    }

    }

# Batch

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassBatch : IEquatable\&lt;Batch\&gt;, IValidatableObject

    {

    publicBatch(stringbatchNumber = default(string), DateTime? started = default(DateTime?), DateTime? completed = default(DateTime?), stringsalesCount = default(string), double? salesSum = default(double?), stringreturnCount = default(string), double? returnSum = default(double?), bool? batchError = default(bool?))

    {

    this.BatchNumber = batchNumber;

    this.Started = started;

    this.Completed = completed;

    this.SalesCount = salesCount;

    this.SalesSum = salesSum;

    this.ReturnCount = returnCount;

    this.ReturnSum = returnSum;

    this.BatchError = batchError;

    }

    [DataMember(Name=&quot;BatchNumber&quot;, EmitDefaultValue=false)]

    publicstringBatchNumber { get; set; }

    [DataMember(Name=&quot;Started&quot;, EmitDefaultValue=false)]

    publicDateTime? Started { get; set; }

    [DataMember(Name=&quot;Completed&quot;, EmitDefaultValue=false)]

    publicDateTime? Completed { get; set; }

    [DataMember(Name=&quot;SalesCount&quot;, EmitDefaultValue=false)]

    publicstringSalesCount { get; set; }

    [DataMember(Name=&quot;SalesSum&quot;, EmitDefaultValue=false)]

    publicdouble? SalesSum { get; set; }

    [DataMember(Name=&quot;ReturnCount&quot;, EmitDefaultValue=false)]

    publicstringReturnCount { get; set; }

    [DataMember(Name=&quot;ReturnSum&quot;, EmitDefaultValue=false)]

    publicdouble? ReturnSum { get; set; }

    [DataMember(Name=&quot;BatchError&quot;, EmitDefaultValue=false)]

    publicbool? BatchError { get; set; }

    }

    }

# Business

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassBusiness : IEquatable\&lt;Business\&gt;, IValidatableObject

    {

    publicBusiness(Addressaddress = default(Address), stringname = default(string), stringphone = default(string), stringfax = default(string), stringwebSite = default(string))

    {

    this.Address = address;

    this.Name = name;

    this.Phone = phone;

    this.Fax = fax;

    this.WebSite = webSite;

    }

    [DataMember(Name=&quot;Address&quot;, EmitDefaultValue=false)]

    publicAddressAddress { get; set; }

    [DataMember(Name=&quot;Name&quot;, EmitDefaultValue=false)]

    publicstringName { get; set; }

    [DataMember(Name=&quot;Phone&quot;, EmitDefaultValue=false)]

    publicstringPhone { get; set; }

    [DataMember(Name=&quot;Fax&quot;, EmitDefaultValue=false)]

    publicstringFax { get; set; }

    [DataMember(Name=&quot;WebSite&quot;, EmitDefaultValue=false)]

    publicstringWebSite { get; set; }

    }

    }

# CheckAccountType

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [JsonConverter(typeof(StringEnumConverter))]

    publicenumCheckAccountType

    {

    [EnumMember(Value = &quot;Unknown&quot;)]

    Unknown = 1,

    [EnumMember(Value = &quot;Checking&quot;)]

    Checking = 2,

    [EnumMember(Value = &quot;Savings&quot;)]

    Savings = 3

    }

    }

# CheckTransaction

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassCheckTransaction : IEquatable\&lt;CheckTransaction\&gt;, IValidatableObject

    {

    publicCheckTransaction(stringterminalID = default(string), stringaccountNumber = default(string), CheckAccountTypeaccountType = default(CheckAccountType), stringcheckNumber = default(string), stringroutingNumber = default(string), stringmICRData = default(string), stringfirstName = default(string), stringlastName = default(string), stringcompanyName = default(string), stringaddress1 = default(string), stringaddress2 = default(string), stringcity = default(string), stringstate = default(string), stringzip = default(string), stringphoneNumber = default(string), stringdLNumber = default(string), stringdLState = default(string), stringcourtesyCardID = default(string), stringsSN4 = default(string), stringdOBYear = default(string), stringcheckAmount = default(string), CheckTransactionTypetranType = default(CheckTransactionType), stringprocID = default(string), stringiPAddress = default(string), stringcustomerNumber = default(string), stringpONumber = default(string), stringinvoiceNumber = default(string), stringtranNote = default(string), stringemailAddress = default(string), stringsECCode = default(string), stringprocResp = default(string), stringprocCode = default(string), stringprocMess = default(string))

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

    [DataMember(Name=&quot;Terminal\_ID&quot;, EmitDefaultValue=false)]

    publicstringTerminalID { get; set; }

    [DataMember(Name=&quot;Account\_Number&quot;, EmitDefaultValue=false)]

    publicstringAccountNumber { get; set; }

    [DataMember(Name=&quot;Account\_Type&quot;, EmitDefaultValue=false)]

    publicCheckAccountTypeAccountType { get; set; }

    [DataMember(Name=&quot;Check\_Number&quot;, EmitDefaultValue=false)]

    publicstringCheckNumber { get; set; }

    [DataMember(Name=&quot;Routing\_Number&quot;, EmitDefaultValue=false)]

    publicstringRoutingNumber { get; set; }

    [DataMember(Name=&quot;MICR\_Data&quot;, EmitDefaultValue=false)]

    publicstringMICRData { get; set; }

    [DataMember(Name=&quot;First\_Name&quot;, EmitDefaultValue=false)]

    publicstringFirstName { get; set; }

    [DataMember(Name=&quot;Last\_Name&quot;, EmitDefaultValue=false)]

    publicstringLastName { get; set; }

    [DataMember(Name=&quot;Company\_Name&quot;, EmitDefaultValue=false)]

    publicstringCompanyName { get; set; }

    [DataMember(Name=&quot;Address1&quot;, EmitDefaultValue=false)]

    publicstringAddress1 { get; set; }

    [DataMember(Name=&quot;Address2&quot;, EmitDefaultValue=false)]

    publicstringAddress2 { get; set; }

    [DataMember(Name=&quot;City&quot;, EmitDefaultValue=false)]

    publicstringCity { get; set; }

    [DataMember(Name=&quot;State&quot;, EmitDefaultValue=false)]

    publicstringState { get; set; }

    [DataMember(Name=&quot;Zip&quot;, EmitDefaultValue=false)]

    publicstringZip { get; set; }

    [DataMember(Name=&quot;Phone\_Number&quot;, EmitDefaultValue=false)]

    publicstringPhoneNumber { get; set; }

    [DataMember(Name=&quot;DL\_Number&quot;, EmitDefaultValue=false)]

    publicstringDLNumber { get; set; }

    [DataMember(Name=&quot;DL\_State&quot;, EmitDefaultValue=false)]

    publicstringDLState { get; set; }

    [DataMember(Name=&quot;Courtesy\_Card\_ID&quot;, EmitDefaultValue=false)]

    publicstringCourtesyCardID { get; set; }

    [DataMember(Name=&quot;SSN4&quot;, EmitDefaultValue=false)]

    publicstringSSN4 { get; set; }

    [DataMember(Name=&quot;DOB\_Year&quot;, EmitDefaultValue=false)]

    publicstringDOBYear { get; set; }

    [DataMember(Name=&quot;Check\_Amount&quot;, EmitDefaultValue=false)]

    publicstringCheckAmount { get; set; }

    [DataMember(Name=&quot;Tran\_Type&quot;, EmitDefaultValue=false)]

    publicCheckTransactionTypeTranType { get; set; }

    [DataMember(Name=&quot;Proc\_ID&quot;, EmitDefaultValue=false)]

    publicstringProcID { get; set; }

    [DataMember(Name=&quot;IP\_Address&quot;, EmitDefaultValue=false)]

    publicstringIPAddress { get; set; }

    [DataMember(Name=&quot;CustomerNumber&quot;, EmitDefaultValue=false)]

    publicstringCustomerNumber { get; set; }

    [DataMember(Name=&quot;PONumber&quot;, EmitDefaultValue=false)]

    publicstringPONumber { get; set; }

    [DataMember(Name=&quot;InvoiceNumber&quot;, EmitDefaultValue=false)]

    publicstringInvoiceNumber { get; set; }

    [DataMember(Name=&quot;TranNote&quot;, EmitDefaultValue=false)]

    publicstringTranNote { get; set; }

    [DataMember(Name=&quot;EmailAddress&quot;, EmitDefaultValue=false)]

    publicstringEmailAddress { get; set; }

    [DataMember(Name=&quot;SEC\_Code&quot;, EmitDefaultValue=false)]

    publicstringSECCode { get; set; }

    [DataMember(Name=&quot;Proc\_Resp&quot;, EmitDefaultValue=false)]

    publicstringProcResp { get; set; }

    [DataMember(Name=&quot;Proc\_Code&quot;, EmitDefaultValue=false)]

    publicstringProcCode { get; set; }

    [DataMember(Name=&quot;Proc\_Mess&quot;, EmitDefaultValue=false)]

    publicstringProcMess { get; set; }

    }

    }

# CheckTransactionSettings

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassCheckTransactionSettings : IEquatable\&lt;CheckTransactionSettings\&gt;, IValidatableObject

    {

    publicCheckTransactionSettings(FieldInforeader = default(FieldInfo), FieldInfocontactName = default(FieldInfo), FieldInfocontactTitle = default(FieldInfo), FieldInfoemailAddress = default(FieldInfo), stringphoneDefault = default(string), FieldInfofax = default(FieldInfo), stringbillingAddressDefault = default(string), FieldInfobillingAddress2 = default(FieldInfo), stringbillingCityDefault = default(string), stringbillingStateDefault = default(string), stringbillingZipDefault = default(string), FieldInfopONumber = default(FieldInfo), FieldInfoinvoiceNumber = default(FieldInfo), FieldInfobusinessName = default(FieldInfo), FieldInfocustomerNumber = default(FieldInfo), FieldInforeferenceNote = default(FieldInfo), stringdefaultSECCode = default(string))

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

    [DataMember(Name=&quot;Reader&quot;, EmitDefaultValue=false)]

    publicFieldInfoReader { get; set; }

    [DataMember(Name=&quot;ContactName&quot;, EmitDefaultValue=false)]

    publicFieldInfoContactName { get; set; }

    [DataMember(Name=&quot;ContactTitle&quot;, EmitDefaultValue=false)]

    publicFieldInfoContactTitle { get; set; }

    [DataMember(Name=&quot;EmailAddress&quot;, EmitDefaultValue=false)]

    publicFieldInfoEmailAddress { get; set; }

    [DataMember(Name=&quot;PhoneDefault&quot;, EmitDefaultValue=false)]

    publicstringPhoneDefault { get; set; }

    [DataMember(Name=&quot;Fax&quot;, EmitDefaultValue=false)]

    publicFieldInfoFax { get; set; }

    [DataMember(Name=&quot;BillingAddressDefault&quot;, EmitDefaultValue=false)]

    publicstringBillingAddressDefault { get; set; }

    [DataMember(Name=&quot;BillingAddress2&quot;, EmitDefaultValue=false)]

    publicFieldInfoBillingAddress2 { get; set; }

    [DataMember(Name=&quot;BillingCityDefault&quot;, EmitDefaultValue=false)]

    publicstringBillingCityDefault { get; set; }

    [DataMember(Name=&quot;BillingStateDefault&quot;, EmitDefaultValue=false)]

    publicstringBillingStateDefault { get; set; }

    [DataMember(Name=&quot;BillingZipDefault&quot;, EmitDefaultValue=false)]

    publicstringBillingZipDefault { get; set; }

    [DataMember(Name=&quot;PONumber&quot;, EmitDefaultValue=false)]

    publicFieldInfoPONumber { get; set; }

    [DataMember(Name=&quot;InvoiceNumber&quot;, EmitDefaultValue=false)]

    publicFieldInfoInvoiceNumber { get; set; }

    [DataMember(Name=&quot;BusinessName&quot;, EmitDefaultValue=false)]

    publicFieldInfoBusinessName { get; set; }

    [DataMember(Name=&quot;CustomerNumber&quot;, EmitDefaultValue=false)]

    publicFieldInfoCustomerNumber { get; set; }

    [DataMember(Name=&quot;ReferenceNote&quot;, EmitDefaultValue=false)]

    publicFieldInfoReferenceNote { get; set; }

    [DataMember(Name=&quot;DefaultSECCode&quot;, EmitDefaultValue=false)]

    publicstringDefaultSECCode { get; set; }

    }

    }

# CheckTransactionType

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [JsonConverter(typeof(StringEnumConverter))]

    publicenumCheckTransactionType

    {

    [EnumMember(Value = &quot;Unknown&quot;)]

    Unknown = 1,

    [EnumMember(Value = &quot;Authorize&quot;)]

    Authorize = 2,

    [EnumMember(Value = &quot;Void&quot;)]

    Void = 3,

    [EnumMember(Value = &quot;Override&quot;)]

    Override = 4,

    [EnumMember(Value = &quot;Payroll&quot;)]

    Payroll = 5,

    [EnumMember(Value = &quot;Recurring&quot;)]

    Recurring = 6,

    [EnumMember(Value = &quot;Refund&quot;)]

    Refund = 7 }

    }

# Contact

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassContact : IEquatable\&lt;Contact\&gt;, IValidatableObject

    {

    publicContact(stringfirstName = default(string), stringlastName = default(string), stringname = default(string), stringtitle = default(string), stringphone = default(string), stringemail = default(string))

    {

    this.FirstName = firstName;

    this.LastName = lastName;

    this.Name = name;

    this.Title = title;

    this.Phone = phone;

    this.Email = email;

    }

    [DataMember(Name=&quot;FirstName&quot;, EmitDefaultValue=false)]

    publicstringFirstName { get; set; }

    [DataMember(Name=&quot;LastName&quot;, EmitDefaultValue=false)]

    publicstringLastName { get; set; }

    [DataMember(Name=&quot;Name&quot;, EmitDefaultValue=false)]

    publicstringName { get; set; }

    [DataMember(Name=&quot;Title&quot;, EmitDefaultValue=false)]

    publicstringTitle { get; set; }

    [DataMember(Name=&quot;Phone&quot;, EmitDefaultValue=false)]

    publicstringPhone { get; set; }

    [DataMember(Name=&quot;Email&quot;, EmitDefaultValue=false)]

    publicstringEmail { get; set; }

    }

    }

# CreditCardTransactionSettings

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassCreditCardTransactionSettings : IEquatable\&lt;CreditCardTransactionSettings\&gt;, IValidatableObject

    {

    publicCreditCardTransactionSettings(FieldInfocVV = default(FieldInfo), FieldInfocontactName = default(FieldInfo), FieldInfocontactTitle = default(FieldInfo), FieldInfoemailAddress = default(FieldInfo), FieldInfophone = default(FieldInfo), FieldInfofax = default(FieldInfo), FieldInfobillingAddress = default(FieldInfo), FieldInfobillingAddress2 = default(FieldInfo), FieldInfobillingCity = default(FieldInfo), FieldInfobillingState = default(FieldInfo), FieldInfobillingZip = default(FieldInfo), FieldInfopONumber = default(FieldInfo), FieldInfoinvoiceNumber = default(FieldInfo), FieldInfobusinessName = default(FieldInfo), FieldInfocustomerNumber = default(FieldInfo), FieldInforeferenceNote = default(FieldInfo), FieldInfosalesTax = default(FieldInfo), FieldInfotaxExempt = default(FieldInfo), FieldInfocardTracks = default(FieldInfo), FieldInfocardZip = default(FieldInfo), FieldInfocardAddress = default(FieldInfo), stringitemDescription = default(string), TransactionTypedefaultTransactionType = default(TransactionType))

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

    [DataMember(Name=&quot;CVV&quot;, EmitDefaultValue=false)]

    publicFieldInfoCVV { get; set; }

    [DataMember(Name=&quot;ContactName&quot;, EmitDefaultValue=false)]

    publicFieldInfoContactName { get; set; }

    [DataMember(Name=&quot;ContactTitle&quot;, EmitDefaultValue=false)]

    publicFieldInfoContactTitle { get; set; }

    [DataMember(Name=&quot;EmailAddress&quot;, EmitDefaultValue=false)]

    publicFieldInfoEmailAddress { get; set; }

    [DataMember(Name=&quot;Phone&quot;, EmitDefaultValue=false)]

    publicFieldInfoPhone { get; set; }

    [DataMember(Name=&quot;Fax&quot;, EmitDefaultValue=false)]

    publicFieldInfoFax { get; set; }

    [DataMember(Name=&quot;BillingAddress&quot;, EmitDefaultValue=false)]

    publicFieldInfoBillingAddress { get; set; }

    [DataMember(Name=&quot;BillingAddress2&quot;, EmitDefaultValue=false)]

    publicFieldInfoBillingAddress2 { get; set; }

    [DataMember(Name=&quot;BillingCity&quot;, EmitDefaultValue=false)]

    publicFieldInfoBillingCity { get; set; }

    [DataMember(Name=&quot;BillingState&quot;, EmitDefaultValue=false)]

    publicFieldInfoBillingState { get; set; }

    [DataMember(Name=&quot;BillingZip&quot;, EmitDefaultValue=false)]

    publicFieldInfoBillingZip { get; set; }

    [DataMember(Name=&quot;PONumber&quot;, EmitDefaultValue=false)]

    publicFieldInfoPONumber { get; set; }

    [DataMember(Name=&quot;InvoiceNumber&quot;, EmitDefaultValue=false)]

    publicFieldInfoInvoiceNumber { get; set; }

    [DataMember(Name=&quot;BusinessName&quot;, EmitDefaultValue=false)]

    publicFieldInfoBusinessName { get; set; }

    [DataMember(Name=&quot;CustomerNumber&quot;, EmitDefaultValue=false)]

    publicFieldInfoCustomerNumber { get; set; }

    [DataMember(Name=&quot;ReferenceNote&quot;, EmitDefaultValue=false)]

    publicFieldInfoReferenceNote { get; set; }

    [DataMember(Name=&quot;SalesTax&quot;, EmitDefaultValue=false)]

    publicFieldInfoSalesTax { get; set; }

    [DataMember(Name=&quot;TaxExempt&quot;, EmitDefaultValue=false)]

    publicFieldInfoTaxExempt { get; set; }

    [DataMember(Name=&quot;CardTracks&quot;, EmitDefaultValue=false)]

    publicFieldInfoCardTracks { get; set; }

    [DataMember(Name=&quot;CardZip&quot;, EmitDefaultValue=false)]

    publicFieldInfoCardZip { get; set; }

    [DataMember(Name=&quot;CardAddress&quot;, EmitDefaultValue=false)]

    publicFieldInfoCardAddress { get; set; }

    [DataMember(Name=&quot;ItemDescription&quot;, EmitDefaultValue=false)]

    publicstringItemDescription { get; set; }

    [DataMember(Name=&quot;DefaultTransactionType&quot;, EmitDefaultValue=false)]

    publicTransactionTypeDefaultTransactionType { get; set; }

    }

    }

# CVVPresenceType

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [JsonConverter(typeof(StringEnumConverter))]

    publicenumCVVPresenceType

    {

    [EnumMember(Value = &quot;Normal&quot;)]

    Normal = 1,

    [EnumMember(Value = &quot;Bypass&quot;)]

    Bypass = 2,

    [EnumMember(Value = &quot;Illegible&quot;)]

    Illegible = 3,

    [EnumMember(Value = &quot;NotAvailable&quot;)]

    NotAvailable = 4

    }

    }

# EmailReceipt

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassEmailReceipt : IEquatable\&lt;EmailReceipt\&gt;, IValidatableObject

    {

    publicEmailReceipt(stringtransactionID = default(string), stringtoAddresses = default(string), stringsubject = default(string), stringheader = default(string), stringfooter = default(string))

    {

    this.TransactionID = transactionID;

    this.ToAddresses = toAddresses;

    this.Subject = subject;

    this.Header = header;

    this.Footer = footer;

    }

    [DataMember(Name=&quot;TransactionID&quot;, EmitDefaultValue=false)]

    publicstringTransactionID { get; set; }

    [DataMember(Name=&quot;ToAddresses&quot;, EmitDefaultValue=false)]

    publicstringToAddresses { get; set; }

    [DataMember(Name=&quot;Subject&quot;, EmitDefaultValue=false)]

    publicstringSubject { get; set; }

    [DataMember(Name=&quot;Header&quot;, EmitDefaultValue=false)]

    publicstringHeader { get; set; }

    [DataMember(Name=&quot;Footer&quot;, EmitDefaultValue=false)]

    publicstringFooter { get; set; }

    }

    }

# FieldAccess

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [JsonConverter(typeof(StringEnumConverter))]

    publicenumFieldAccess

    {

    [EnumMember(Value = &quot;Disabled&quot;)]

    Disabled = 1,

    [EnumMember(Value = &quot;Enabled&quot;)]

    Enabled = 2,

    [EnumMember(Value = &quot;Required&quot;)]

    Required = 3

    }

    }

# FieldInfo

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassFieldInfo : IEquatable\&lt;FieldInfo\&gt;, IValidatableObject

    {

    publicFieldInfo(FieldAccessaccess = default(FieldAccess), string\_default = default(string))

    {

    this.Access = access;

    this.\_Default = \_default;

    }

    [DataMember(Name=&quot;Access&quot;, EmitDefaultValue=false)]

    publicFieldAccessAccess { get; set; }

    [DataMember(Name=&quot;Default&quot;, EmitDefaultValue=false)]

    publicstring\_Default { get; set; }

    }

    }

# QueryTransaction

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassQueryTransaction : IEquatable\&lt;QueryTransaction\&gt;, IValidatableObject

    {

    publicQueryTransaction(stringtranSequence = default(string), stringtranBatch = default(string), stringtranModified = default(string), stringtranProcessed = default(string), stringtranSettled = default(string), stringsubmitTime = default(string), stringtranType = default(string), double? tranAmt = default(double?), double? tranTax = default(double?), stringtranInv = default(string), stringtranPO = default(string), stringtranCNum = default(string), stringtranNote = default(string), stringcardNum = default(string), stringcardName = default(string), stringcardExp = default(string), stringaVSStreet = default(string), stringaVSZip = default(string), stringcVVNum = default(string), stringprocID = default(string), stringprocResp = default(string), stringprocCode = default(string), stringprocMess = default(string), stringaVSCode = default(string), stringaVSResp = default(string), stringcVVCode = default(string), stringcVVResp = default(string), List\&lt;TransactionItem\&gt; items = default(List\&lt;TransactionItem\&gt;), stringbusinessName = default(string), stringbusinessAddress = default(string), stringbusinessAddress2 = default(string), stringbusinessCity = default(string), stringbusinessState = default(string), stringbusinessZip = default(string), stringbusinessCountry = default(string), stringbusinessWebsite = default(string), stringcontactFirstName = default(string), stringcontactLastName = default(string), stringcontactPhone = default(string), stringcontactFax = default(string), stringcontactEmail = default(string), stringcontactTitle = default(string), stringiP = default(string), bool? taxExempt = default(bool?))

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

    [DataMember(Name=&quot;Tran\_Sequence&quot;, EmitDefaultValue=false)]

    publicstringTranSequence { get; set; }

    [DataMember(Name=&quot;Tran\_Batch&quot;, EmitDefaultValue=false)]

    publicstringTranBatch { get; set; }

    [DataMember(Name=&quot;Tran\_Modified&quot;, EmitDefaultValue=false)]

    publicstringTranModified { get; set; }

    [DataMember(Name=&quot;Tran\_Processed&quot;, EmitDefaultValue=false)]

    publicstringTranProcessed { get; set; }

    [DataMember(Name=&quot;Tran\_Settled&quot;, EmitDefaultValue=false)]

    publicstringTranSettled { get; set; }

    [DataMember(Name=&quot;Submit\_Time&quot;, EmitDefaultValue=false)]

    publicstringSubmitTime { get; set; }

    [DataMember(Name=&quot;Tran\_Type&quot;, EmitDefaultValue=false)]

    publicstringTranType { get; set; }

    [DataMember(Name=&quot;Tran\_Amt&quot;, EmitDefaultValue=false)]

    publicdouble? TranAmt { get; set; }

    [DataMember(Name=&quot;Tran\_Tax&quot;, EmitDefaultValue=false)]

    publicdouble? TranTax { get; set; }

    [DataMember(Name=&quot;Tran\_Inv&quot;, EmitDefaultValue=false)]

    publicstringTranInv { get; set; }

    [DataMember(Name=&quot;Tran\_PO&quot;, EmitDefaultValue=false)]

    publicstringTranPO { get; set; }

    [DataMember(Name=&quot;Tran\_CNum&quot;, EmitDefaultValue=false)]

    publicstringTranCNum { get; set; }

    [DataMember(Name=&quot;Tran\_Note&quot;, EmitDefaultValue=false)]

    publicstringTranNote { get; set; }

    [DataMember(Name=&quot;Card\_Num&quot;, EmitDefaultValue=false)]

    publicstringCardNum { get; set; }

    [DataMember(Name=&quot;Card\_Name&quot;, EmitDefaultValue=false)]

    publicstringCardName { get; set; }

    [DataMember(Name=&quot;Card\_Exp&quot;, EmitDefaultValue=false)]

    publicstringCardExp { get; set; }

    [DataMember(Name=&quot;AVS\_Street&quot;, EmitDefaultValue=false)]

    publicstringAVSStreet { get; set; }

    [DataMember(Name=&quot;AVS\_Zip&quot;, EmitDefaultValue=false)]

    publicstringAVSZip { get; set; }

    [DataMember(Name=&quot;CVV\_Num&quot;, EmitDefaultValue=false)]

    publicstringCVVNum { get; set; }

    [DataMember(Name=&quot;Proc\_ID&quot;, EmitDefaultValue=false)]

    publicstringProcID { get; set; }

    [DataMember(Name=&quot;Proc\_Resp&quot;, EmitDefaultValue=false)]

    publicstringProcResp { get; set; }

    [DataMember(Name=&quot;Proc\_Code&quot;, EmitDefaultValue=false)]

    publicstringProcCode { get; set; }

    [DataMember(Name=&quot;Proc\_Mess&quot;, EmitDefaultValue=false)]

    publicstringProcMess { get; set; }

    [DataMember(Name=&quot;AVS\_Code&quot;, EmitDefaultValue=false)]

    publicstringAVSCode { get; set; }

    [DataMember(Name=&quot;AVS\_Resp&quot;, EmitDefaultValue=false)]

    publicstringAVSResp { get; set; }

    [DataMember(Name=&quot;CVV\_Code&quot;, EmitDefaultValue=false)]

    publicstringCVVCode { get; set; }

    [DataMember(Name=&quot;CVV\_Resp&quot;, EmitDefaultValue=false)]

    publicstringCVVResp { get; set; }

    [DataMember(Name=&quot;Items&quot;, EmitDefaultValue=false)]

    publicList\&lt;TransactionItem\&gt; Items { get; set; }

    [DataMember(Name=&quot;Business\_Name&quot;, EmitDefaultValue=false)]

    publicstringBusinessName { get; set; }

    [DataMember(Name=&quot;Business\_Address&quot;, EmitDefaultValue=false)]

    publicstringBusinessAddress { get; set; }

    [DataMember(Name=&quot;Business\_Address2&quot;, EmitDefaultValue=false)]

    publicstringBusinessAddress2 { get; set; }

    [DataMember(Name=&quot;Business\_City&quot;, EmitDefaultValue=false)]

    publicstringBusinessCity { get; set; }

    [DataMember(Name=&quot;Business\_State&quot;, EmitDefaultValue=false)]

    publicstringBusinessState { get; set; }

    [DataMember(Name=&quot;Business\_Zip&quot;, EmitDefaultValue=false)]

    publicstringBusinessZip { get; set; }

    [DataMember(Name=&quot;Business\_Country&quot;, EmitDefaultValue=false)]

    publicstringBusinessCountry { get; set; }

    [DataMember(Name=&quot;Business\_Website&quot;, EmitDefaultValue=false)]

    publicstringBusinessWebsite { get; set; }

    [DataMember(Name=&quot;Contact\_FirstName&quot;, EmitDefaultValue=false)]

    publicstringContactFirstName { get; set; }

    [DataMember(Name=&quot;Contact\_LastName&quot;, EmitDefaultValue=false)]

    publicstringContactLastName { get; set; }

    [DataMember(Name=&quot;Contact\_Phone&quot;, EmitDefaultValue=false)]

    publicstringContactPhone { get; set; }

    [DataMember(Name=&quot;Contact\_Fax&quot;, EmitDefaultValue=false)]

    publicstringContactFax { get; set; }

    [DataMember(Name=&quot;Contact\_Email&quot;, EmitDefaultValue=false)]

    publicstringContactEmail { get; set; }

    [DataMember(Name=&quot;Contact\_Title&quot;, EmitDefaultValue=false)]

    publicstringContactTitle { get; set; }

    [DataMember(Name=&quot;IP&quot;, EmitDefaultValue=false)]

    publicstringIP { get; set; }

    [DataMember(Name=&quot;TaxExempt&quot;, EmitDefaultValue=false)]

    publicbool? TaxExempt { get; set; }

    }

    }

# Receipt

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassReceipt : IEquatable\&lt;Receipt\&gt;, IValidatableObject

    {

    publicReceipt(ReceiptCustomLinesheader = default(ReceiptCustomLines), ReceiptCustomLinesfooter = default(ReceiptCustomLines))

    {

    this.Header = header;

    this.Footer = footer;

    }

    [DataMember(Name=&quot;Header&quot;, EmitDefaultValue=false)]

    publicReceiptCustomLinesHeader { get; set; }

    [DataMember(Name=&quot;Footer&quot;, EmitDefaultValue=false)]

    publicReceiptCustomLinesFooter { get; set; }

    }

    }

# ReceiptCustomLines

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassReceiptCustomLines : IEquatable\&lt;ReceiptCustomLines\&gt;, IValidatableObject

    {

    publicReceiptCustomLines(stringcustomLine1 = default(string), stringcustomLine2 = default(string), stringcustomLine3 = default(string), stringcustomLine4 = default(string))

    {

    this.CustomLine1 = customLine1;

    this.CustomLine2 = customLine2;

    this.CustomLine3 = customLine3;

    this.CustomLine4 = customLine4;

    }

    [DataMember(Name=&quot;CustomLine1&quot;, EmitDefaultValue=false)]

    publicstringCustomLine1 { get; set; }

    [DataMember(Name=&quot;CustomLine2&quot;, EmitDefaultValue=false)]

    publicstringCustomLine2 { get; set; }

    [DataMember(Name=&quot;CustomLine3&quot;, EmitDefaultValue=false)]

    publicstringCustomLine3 { get; set; }

    [DataMember(Name=&quot;CustomLine4&quot;, EmitDefaultValue=false)]

    publicstringCustomLine4 { get; set; }

    }

    }

# Record

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassRecord : IEquatable\&lt;Record\&gt;, IValidatableObject

    {

    publicRecord(Responseresponse = default(Response), int? iD = default(int?), stringreference = default(string), Businessbusiness = default(Business), Contactcontact = default(Contact), stringpO = default(string), stringinvoice = default(string), stringcustomer = default(string), bool? taxExempt = default(bool?), stringnote = default(string), List\&lt;VaultCreditCard\&gt; creditCards = default(List\&lt;VaultCreditCard\&gt;), List\&lt;VaultCheck\&gt; checks = default(List\&lt;VaultCheck\&gt;))

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

    [DataMember(Name=&quot;Response&quot;, EmitDefaultValue=false)]

    publicResponseResponse { get; set; }

    [DataMember(Name=&quot;ID&quot;, EmitDefaultValue=false)]

    publicint? ID { get; set; }

    [DataMember(Name=&quot;Reference&quot;, EmitDefaultValue=false)]

    publicstringReference { get; set; }

    [DataMember(Name=&quot;Business&quot;, EmitDefaultValue=false)]

    publicBusinessBusiness { get; set; }

    [DataMember(Name=&quot;Contact&quot;, EmitDefaultValue=false)]

    publicContactContact { get; set; }

    [DataMember(Name=&quot;PO&quot;, EmitDefaultValue=false)]

    publicstringPO { get; set; }

    [DataMember(Name=&quot;Invoice&quot;, EmitDefaultValue=false)]

    publicstringInvoice { get; set; }

    [DataMember(Name=&quot;Customer&quot;, EmitDefaultValue=false)]

    publicstringCustomer { get; set; }

    [DataMember(Name=&quot;TaxExempt&quot;, EmitDefaultValue=false)]

    publicbool? TaxExempt { get; set; }

    [DataMember(Name=&quot;Note&quot;, EmitDefaultValue=false)]

    publicstringNote { get; set; }

    [DataMember(Name=&quot;CreditCards&quot;, EmitDefaultValue=false)]

    publicList\&lt;VaultCreditCard\&gt; CreditCards { get; set; }

    [DataMember(Name=&quot;Checks&quot;, EmitDefaultValue=false)]

    publicList\&lt;VaultCheck\&gt; Checks { get; set; }

    }

    }

# Response

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassResponse : IEquatable\&lt;Response\&gt;, IValidatableObject

    {

    publicResponse(bool? error = default(bool?), stringmessage = default(string))

    {

    this.Error = error;

    this.Message = message;

    }

    [DataMember(Name=&quot;Error&quot;, EmitDefaultValue=false)]

    publicbool? Error { get; set; }

    [DataMember(Name=&quot;Message&quot;, EmitDefaultValue=false)]

    publicstringMessage { get; set; }

    }

    }

# SearchVault

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassSearchVault : IEquatable\&lt;SearchVault\&gt;, IValidatableObject

    {

    publicSearchVault(stringreference = default(string), stringbusinessName = default(string), stringfirstName = default(string), stringlastName = default(string))

    {

    this.Reference = reference;

    this.BusinessName = businessName;

    this.FirstName = firstName;

    this.LastName = lastName;

    }

    [DataMember(Name=&quot;Reference&quot;, EmitDefaultValue=false)]

    publicstringReference { get; set; }

    [DataMember(Name=&quot;BusinessName&quot;, EmitDefaultValue=false)]

    publicstringBusinessName { get; set; }

    [DataMember(Name=&quot;FirstName&quot;, EmitDefaultValue=false)]

    publicstringFirstName { get; set; }

    [DataMember(Name=&quot;LastName&quot;, EmitDefaultValue=false)]

    publicstringLastName { get; set; }

    }

    }

# Settings

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassSettings : IEquatable\&lt;Settings\&gt;, IValidatableObject

    {

    publicSettings(CreditCardTransactionSettingscreditCardTransactionSettings = default(CreditCardTransactionSettings), CheckTransactionSettingscheckTransactionSettings = default(CheckTransactionSettings), Businessbusiness = default(Business), ContactmainContact = default(Contact), Receiptreceipt40 = default(Receipt), Receiptreceipt80 = default(Receipt), bool? printSignatureLine = default(bool?), Responseresponse = default(Response), stringaccountID = default(string), FieldInfocopyEmailReceipt = default(FieldInfo))

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

    [DataMember(Name=&quot;CreditCardTransactionSettings&quot;, EmitDefaultValue=false)]

    publicCreditCardTransactionSettingsCreditCardTransactionSettings { get; set; }

    [DataMember(Name=&quot;CheckTransactionSettings&quot;, EmitDefaultValue=false)]

    publicCheckTransactionSettingsCheckTransactionSettings { get; set; }

    [DataMember(Name=&quot;Business&quot;, EmitDefaultValue=false)]

    publicBusinessBusiness { get; set; }

    [DataMember(Name=&quot;MainContact&quot;, EmitDefaultValue=false)]

    publicContactMainContact { get; set; }

    [DataMember(Name=&quot;Receipt40&quot;, EmitDefaultValue=false)]

    publicReceiptReceipt40 { get; set; }

    [DataMember(Name=&quot;Receipt80&quot;, EmitDefaultValue=false)]

    publicReceiptReceipt80 { get; set; }

    [DataMember(Name=&quot;PrintSignatureLine&quot;, EmitDefaultValue=false)]

    publicbool? PrintSignatureLine { get; set; }

    [DataMember(Name=&quot;Response&quot;, EmitDefaultValue=false)]

    publicResponseResponse { get; set; }

    [DataMember(Name=&quot;AccountID&quot;, EmitDefaultValue=false)]

    publicstringAccountID { get; set; }

    [DataMember(Name=&quot;CopyEmailReceipt&quot;, EmitDefaultValue=false)]

    publicFieldInfoCopyEmailReceipt { get; set; }

    }

    }

# TerminalSettings

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassTerminalSettings : IEquatable\&lt;TerminalSettings\&gt;, IValidatableObject

    {

    publicTerminalSettings(int? iD = default(int?), int? terminalID = default(int?), stringsECCode = default(string), bool? gatewayTerminal = default(bool?), bool? consumerCredits = default(bool?), bool? dLRequired = default(bool?), bool? checkVerify = default(bool?), bool? identityVerify = default(bool?))

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

    [DataMember(Name=&quot;ID&quot;, EmitDefaultValue=false)]

    publicint? ID { get; set; }

    [DataMember(Name=&quot;Terminal\_ID&quot;, EmitDefaultValue=false)]

    publicint? TerminalID { get; set; }

    [DataMember(Name=&quot;SEC\_Code&quot;, EmitDefaultValue=false)]

    publicstringSECCode { get; set; }

    [DataMember(Name=&quot;Gateway\_Terminal&quot;, EmitDefaultValue=false)]

    publicbool? GatewayTerminal { get; set; }

    [DataMember(Name=&quot;Consumer\_Credits&quot;, EmitDefaultValue=false)]

    publicbool? ConsumerCredits { get; set; }

    [DataMember(Name=&quot;DL\_Required&quot;, EmitDefaultValue=false)]

    publicbool? DLRequired { get; set; }

    [DataMember(Name=&quot;Check\_Verify&quot;, EmitDefaultValue=false)]

    publicbool? CheckVerify { get; set; }

    [DataMember(Name=&quot;Identity\_Verify&quot;, EmitDefaultValue=false)]

    publicbool? IdentityVerify { get; set; }

    }

    }

# Transaction

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassTransaction : IEquatable\&lt;Transaction\&gt;, IValidatableObject

    {

    publicTransaction(DateTime? submitTime = default(DateTime?), stringtranType = default(string), double? tranAmt = default(double?), double? tranTax = default(double?), stringtranInv = default(string), stringtranPO = default(string), stringtranCNum = default(string), stringtranNote = default(string), stringcardNum = default(string), stringcardName = default(string), stringcardExp = default(string), stringcardType = default(string), stringaVSStreet = default(string), stringaVSZip = default(string), stringcVVNum = default(string), stringprocID = default(string), stringprocResp = default(string), stringprocCode = default(string), stringprocMess = default(string), stringaVSCode = default(string), stringaVSResp = default(string), stringcVVCode = default(string), stringcVVResp = default(string), List\&lt;TransactionItem\&gt; items = default(List\&lt;TransactionItem\&gt;), stringbusinessName = default(string), stringbusinessAddress = default(string), stringbusinessAddress2 = default(string), stringbusinessCity = default(string), stringbusinessState = default(string), stringbusinessZip = default(string), stringbusinessCountry = default(string), stringbusinessWebsite = default(string), stringcontactFirstName = default(string), stringcontactLastName = default(string), stringcontactPhone = default(string), stringcontactFax = default(string), stringcontactEmail = default(string), stringcontactTitle = default(string), stringiP = default(string), bool? taxExempt = default(bool?))

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

    [DataMember(Name=&quot;Submit\_Time&quot;, EmitDefaultValue=false)]

    publicDateTime? SubmitTime { get; set; }

    [DataMember(Name=&quot;Tran\_Type&quot;, EmitDefaultValue=false)]

    publicstringTranType { get; set; }

    [DataMember(Name=&quot;Tran\_Amt&quot;, EmitDefaultValue=false)]

    publicdouble? TranAmt { get; set; }

    [DataMember(Name=&quot;Tran\_Tax&quot;, EmitDefaultValue=false)]

    publicdouble? TranTax { get; set; }

    [DataMember(Name=&quot;Tran\_Inv&quot;, EmitDefaultValue=false)]

    publicstringTranInv { get; set; }

    [DataMember(Name=&quot;Tran\_PO&quot;, EmitDefaultValue=false)]

    publicstringTranPO { get; set; }

    [DataMember(Name=&quot;Tran\_CNum&quot;, EmitDefaultValue=false)]

    publicstringTranCNum { get; set; }

    [DataMember(Name=&quot;Tran\_Note&quot;, EmitDefaultValue=false)]

    publicstringTranNote { get; set; }

    [DataMember(Name=&quot;Card\_Num&quot;, EmitDefaultValue=false)]

    publicstringCardNum { get; set; }

    [DataMember(Name=&quot;Card\_Name&quot;, EmitDefaultValue=false)]

    publicstringCardName { get; set; }

    [DataMember(Name=&quot;Card\_Exp&quot;, EmitDefaultValue=false)]

    publicstringCardExp { get; set; }

    [DataMember(Name=&quot;Card\_Type&quot;, EmitDefaultValue=false)]

    publicstringCardType { get; set; }

    [DataMember(Name=&quot;AVS\_Street&quot;, EmitDefaultValue=false)]

    publicstringAVSStreet { get; set; }

    [DataMember(Name=&quot;AVS\_Zip&quot;, EmitDefaultValue=false)]

    publicstringAVSZip { get; set; }

    [DataMember(Name=&quot;CVV\_Num&quot;, EmitDefaultValue=false)]

    publicstringCVVNum { get; set; }

    [DataMember(Name=&quot;Proc\_ID&quot;, EmitDefaultValue=false)]

    publicstringProcID { get; set; }

    [DataMember(Name=&quot;Proc\_Resp&quot;, EmitDefaultValue=false)]

    publicstringProcResp { get; set; }

    [DataMember(Name=&quot;Proc\_Code&quot;, EmitDefaultValue=false)]

    publicstringProcCode { get; set; }

    [DataMember(Name=&quot;Proc\_Mess&quot;, EmitDefaultValue=false)]

    publicstringProcMess { get; set; }

    [DataMember(Name=&quot;AVS\_Code&quot;, EmitDefaultValue=false)]

    publicstringAVSCode { get; set; }

    [DataMember(Name=&quot;AVS\_Resp&quot;, EmitDefaultValue=false)]

    publicstringAVSResp { get; set; }

    [DataMember(Name=&quot;CVV\_Code&quot;, EmitDefaultValue=false)]

    publicstringCVVCode { get; set; }

    [DataMember(Name=&quot;CVV\_Resp&quot;, EmitDefaultValue=false)]

    publicstringCVVResp { get; set; }

    [DataMember(Name=&quot;Items&quot;, EmitDefaultValue=false)]

    publicList\&lt;TransactionItem\&gt; Items { get; set; }

    [DataMember(Name=&quot;Business\_Name&quot;, EmitDefaultValue=false)]

    publicstringBusinessName { get; set; }

    [DataMember(Name=&quot;Business\_Address&quot;, EmitDefaultValue=false)]

    publicstringBusinessAddress { get; set; }

    [DataMember(Name=&quot;Business\_Address2&quot;, EmitDefaultValue=false)]

    publicstringBusinessAddress2 { get; set; }

    [DataMember(Name=&quot;Business\_City&quot;, EmitDefaultValue=false)]

    publicstringBusinessCity { get; set; }

    [DataMember(Name=&quot;Business\_State&quot;, EmitDefaultValue=false)]

    publicstringBusinessState { get; set; }

    [DataMember(Name=&quot;Business\_Zip&quot;, EmitDefaultValue=false)]

    publicstringBusinessZip { get; set; }

    [DataMember(Name=&quot;Business\_Country&quot;, EmitDefaultValue=false)]

    publicstringBusinessCountry { get; set; }

    [DataMember(Name=&quot;Business\_Website&quot;, EmitDefaultValue=false)]

    publicstringBusinessWebsite { get; set; }

    [DataMember(Name=&quot;Contact\_FirstName&quot;, EmitDefaultValue=false)]

    publicstringContactFirstName { get; set; }

    [DataMember(Name=&quot;Contact\_LastName&quot;, EmitDefaultValue=false)]

    publicstringContactLastName { get; set; }

    [DataMember(Name=&quot;Contact\_Phone&quot;, EmitDefaultValue=false)]

    publicstringContactPhone { get; set; }

    [DataMember(Name=&quot;Contact\_Fax&quot;, EmitDefaultValue=false)]

    publicstringContactFax { get; set; }

    [DataMember(Name=&quot;Contact\_Email&quot;, EmitDefaultValue=false)]

    publicstringContactEmail { get; set; }

    [DataMember(Name=&quot;Contact\_Title&quot;, EmitDefaultValue=false)]

    publicstringContactTitle { get; set; }

    [DataMember(Name=&quot;IP&quot;, EmitDefaultValue=false)]

    publicstringIP { get; set; }

    [DataMember(Name=&quot;TaxExempt&quot;, EmitDefaultValue=false)]

    publicbool? TaxExempt { get; set; }

    }

    }

# TransactionItem

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassTransactionItem : IEquatable\&lt;TransactionItem\&gt;, IValidatableObject

    {

    publicTransactionItem(bool? taxIncluded = default(bool?), bool? credit = default(bool?), double? extendedAmount = default(double?), stringitemNumber = default(string), double? unitCost = default(double?), int? quantity = default(int?), stringdescription = default(string), double? discount = default(double?), double? tax = default(double?), stringcommodityCode = default(string), stringunitOfMeasure = default(string))

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

    [DataMember(Name=&quot;TaxIncluded&quot;, EmitDefaultValue=false)]

    publicbool? TaxIncluded { get; set; }

    [DataMember(Name=&quot;Credit&quot;, EmitDefaultValue=false)]

    publicbool? Credit { get; set; }

    [DataMember(Name=&quot;ExtendedAmount&quot;, EmitDefaultValue=false)]

    publicdouble? ExtendedAmount { get; set; }

    [DataMember(Name=&quot;ItemNumber&quot;, EmitDefaultValue=false)]

    publicstringItemNumber { get; set; }

    [DataMember(Name=&quot;UnitCost&quot;, EmitDefaultValue=false)]

    publicdouble? UnitCost { get; set; }

    [DataMember(Name=&quot;Quantity&quot;, EmitDefaultValue=false)]

    publicint? Quantity { get; set; }

    [DataMember(Name=&quot;Description&quot;, EmitDefaultValue=false)]

    publicstringDescription { get; set; }

    [DataMember(Name=&quot;Discount&quot;, EmitDefaultValue=false)]

    publicdouble? Discount { get; set; }

    [DataMember(Name=&quot;Tax&quot;, EmitDefaultValue=false)]

    publicdouble? Tax { get; set; }

    [DataMember(Name=&quot;CommodityCode&quot;, EmitDefaultValue=false)]

    publicstringCommodityCode { get; set; }

    [DataMember(Name=&quot;UnitOfMeasure&quot;, EmitDefaultValue=false)]

    publicstringUnitOfMeasure { get; set; }

    }

    }

# UpdateTransactionInfo

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassUpdateTransactionInfo : IEquatable\&lt;UpdateTransactionInfo\&gt;, IValidatableObject

    {

    publicUpdateTransactionInfo(stringinvoiceNumber = default(string), stringcustomerNumber = default(string), stringpONumber = default(string), stringnote = default(string))

    {

    this.InvoiceNumber = invoiceNumber;

    this.CustomerNumber = customerNumber;

    this.PONumber = pONumber;

    this.Note = note;

    }

    [DataMember(Name=&quot;InvoiceNumber&quot;, EmitDefaultValue=false)]

    publicstringInvoiceNumber { get; set; }

    [DataMember(Name=&quot;CustomerNumber&quot;, EmitDefaultValue=false)]

    publicstringCustomerNumber { get; set; }

    [DataMember(Name=&quot;PONumber&quot;, EmitDefaultValue=false)]

    publicstringPONumber { get; set; }

    [DataMember(Name=&quot;Note&quot;, EmitDefaultValue=false)]

    publicstringNote { get; set; }

    }

    }

# VaultCheck

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassVaultCheck : IEquatable\&lt;VaultCheck\&gt;, IValidatableObject

    {

    publicVaultCheck(Responseresponse = default(Response), int? checkID = default(int?), bool? main = default(bool?), stringcheckRouting = default(string), stringcheckAccount = default(string), stringcheckNumber = default(string), stringcheckFirstName = default(string), stringcheckLastName = default(string), stringnote = default(string), stringmaskedRouting = default(string), stringmaskedAccount = default(string), stringaccountType = default(string))

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

    [DataMember(Name=&quot;Response&quot;, EmitDefaultValue=false)]

    publicResponseResponse { get; set; }

    [DataMember(Name=&quot;CheckID&quot;, EmitDefaultValue=false)]

    publicint? CheckID { get; set; }

    [DataMember(Name=&quot;Main&quot;, EmitDefaultValue=false)]

    publicbool? Main { get; set; }

    [DataMember(Name=&quot;CheckRouting&quot;, EmitDefaultValue=false)]

    publicstringCheckRouting { get; set; }

    [DataMember(Name=&quot;CheckAccount&quot;, EmitDefaultValue=false)]

    publicstringCheckAccount { get; set; }

    [DataMember(Name=&quot;CheckNumber&quot;, EmitDefaultValue=false)]

    publicstringCheckNumber { get; set; }

    [DataMember(Name=&quot;CheckFirstName&quot;, EmitDefaultValue=false)]

    publicstringCheckFirstName { get; set; }

    [DataMember(Name=&quot;CheckLastName&quot;, EmitDefaultValue=false)]

    publicstringCheckLastName { get; set; }

    [DataMember(Name=&quot;Note&quot;, EmitDefaultValue=false)]

    publicstringNote { get; set; }

    [DataMember(Name=&quot;MaskedRouting&quot;, EmitDefaultValue=false)]

    publicstringMaskedRouting { get; set; }

    [DataMember(Name=&quot;MaskedAccount&quot;, EmitDefaultValue=false)]

    publicstringMaskedAccount { get; set; }

    [DataMember(Name=&quot;AccountType&quot;, EmitDefaultValue=false)]

    publicstringAccountType { get; set; }

    }

    }

# VaultCreditCard

    usingSystem;

    usingSystem.Linq;

    usingSystem.IO;

    usingSystem.Text;

    usingSystem.Text.RegularExpressions;

    usingSystem.Collections;

    usingSystem.Collections.Generic;

    usingSystem.Collections.ObjectModel;

    usingSystem.Runtime.Serialization;

    usingNewtonsoft.Json;

    usingNewtonsoft.Json.Converters;

    usingSystem.ComponentModel.DataAnnotations;

    usingSwaggerDateConverter = IO.Swagger.Client.SwaggerDateConverter;

    namespaceIO.Swagger.Model

    {

    [DataContract]

    publicpartialclassVaultCreditCard : IEquatable\&lt;VaultCreditCard\&gt;, IValidatableObject

    {

    publicVaultCreditCard(stringmagneticTracks = default(string), stringtrack1 = default(string), stringtrack2 = default(string), stringnumber = default(string), stringmaskedNumber = default(string), stringholder = default(string), stringexpDate = default(string), stringcVV = default(string), stringaddress = default(string), stringcity = default(string), stringstate = default(string), stringzIP = default(string), bool? swiped = default(bool?), stringtypeString = default(string), CVVPresenceTypecVVType = default(CVVPresenceType), bool? notPresent = default(bool?), Responseresponse = default(Response), int? cardID = default(int?), stringnote = default(string), bool? main = default(bool?))

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

    [DataMember(Name=&quot;MagneticTracks&quot;, EmitDefaultValue=false)]

    publicstringMagneticTracks { get; set; }

    [DataMember(Name=&quot;Track1&quot;, EmitDefaultValue=false)]

    publicstringTrack1 { get; set; }

    [DataMember(Name=&quot;Track2&quot;, EmitDefaultValue=false)]

    publicstringTrack2 { get; set; }

    [DataMember(Name=&quot;Number&quot;, EmitDefaultValue=false)]

    publicstringNumber { get; set; }

    [DataMember(Name=&quot;MaskedNumber&quot;, EmitDefaultValue=false)]

    publicstringMaskedNumber { get; set; }

    [DataMember(Name=&quot;Holder&quot;, EmitDefaultValue=false)]

    publicstringHolder { get; set; }

    [DataMember(Name=&quot;ExpDate&quot;, EmitDefaultValue=false)]

    publicstringExpDate { get; set; }

    [DataMember(Name=&quot;CVV&quot;, EmitDefaultValue=false)]

    publicstringCVV { get; set; }

    [DataMember(Name=&quot;Address&quot;, EmitDefaultValue=false)]

    publicstringAddress { get; set; }

    [DataMember(Name=&quot;City&quot;, EmitDefaultValue=false)]

    publicstringCity { get; set; }

    [DataMember(Name=&quot;State&quot;, EmitDefaultValue=false)]

    publicstringState { get; set; }

    [DataMember(Name=&quot;ZIP&quot;, EmitDefaultValue=false)]

    publicstringZIP { get; set; }

    [DataMember(Name=&quot;Swiped&quot;, EmitDefaultValue=false)]

    publicbool? Swiped { get; set; }

    [DataMember(Name=&quot;TypeString&quot;, EmitDefaultValue=false)]

    publicstringTypeString { get; set; }

    [DataMember(Name=&quot;CVVType&quot;, EmitDefaultValue=false)]

    publicCVVPresenceTypeCVVType { get; set; }

    [DataMember(Name=&quot;NotPresent&quot;, EmitDefaultValue=false)]

    publicbool? NotPresent { get; set; }

    [DataMember(Name=&quot;Response&quot;, EmitDefaultValue=false)]

    publicResponseResponse { get; set; }

    [DataMember(Name=&quot;CardID&quot;, EmitDefaultValue=false)]

    publicint? CardID { get; set; }

    [DataMember(Name=&quot;Note&quot;, EmitDefaultValue=false)]

    publicstringNote { get; set; }

    [DataMember(Name=&quot;Main&quot;, EmitDefaultValue=false)]

    publicbool? Main { get; set; }

    }

    }

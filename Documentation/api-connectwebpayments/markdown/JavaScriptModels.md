# JavaScript Models

# Address

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassAddress {

    constructor() {

    this.AddressLine1 = &#39;&#39;;

    this.AddressLine2 = &#39;&#39;;

    this.City = &#39;&#39;;

    this.State = &#39;&#39;;

    this.ZipCode = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newAddress();

    if (Object.prototype.hasOwnProperty.call(data, &#39;AddressLine1&#39;)) {

    obj[&#39;AddressLine1&#39;] = ApiClient.convertToType(data[&#39;AddressLine1&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;AddressLine2&#39;)) {

    obj[&#39;AddressLine2&#39;] = ApiClient.convertToType(data[&#39;AddressLine2&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;City&#39;)) {

    obj[&#39;City&#39;] = ApiClient.convertToType(data[&#39;City&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;State&#39;)) {

    obj[&#39;State&#39;] = ApiClient.convertToType(data[&#39;State&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;ZipCode&#39;)) {

    obj[&#39;ZipCode&#39;] = ApiClient.convertToType(data[&#39;ZipCode&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# Batch

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassBatch {

    constructor() {

    this.BatchNumber = &#39;&#39;;

    this.Started = undefined;

    this.Completed = undefined;

    this.SalesCount = &#39;&#39;;

    this.SalesSum = 0;

    this.ReturnCount = &#39;&#39;;

    this.ReturnSum = 0;

    this.BatchError = false;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newBatch();

    if (Object.prototype.hasOwnProperty.call(data, &#39;BatchNumber&#39;)) {

    obj[&#39;BatchNumber&#39;] = ApiClient.convertToType(data[&#39;BatchNumber&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Started&#39;)) {

    obj[&#39;Started&#39;] = ApiClient.convertToType(data[&#39;Started&#39;], &#39;Date&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Completed&#39;)) {

    obj[&#39;Completed&#39;] = ApiClient.convertToType(data[&#39;Completed&#39;], &#39;Date&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;SalesCount&#39;)) {

    obj[&#39;SalesCount&#39;] = ApiClient.convertToType(data[&#39;SalesCount&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;SalesSum&#39;)) {

    obj[&#39;SalesSum&#39;] = ApiClient.convertToType(data[&#39;SalesSum&#39;], &#39;Number&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;ReturnCount&#39;)) {

    obj[&#39;ReturnCount&#39;] = ApiClient.convertToType(data[&#39;ReturnCount&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;ReturnSum&#39;)) {

    obj[&#39;ReturnSum&#39;] = ApiClient.convertToType(data[&#39;ReturnSum&#39;], &#39;Number&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;BatchError&#39;)) {

    obj[&#39;BatchError&#39;] = ApiClient.convertToType(data[&#39;BatchError&#39;], &#39;Boolean&#39;);

    }

    }

    returnobj;

    }

    }

# Business

    importApiClientfrom&#39;../ApiClient&#39;;

    importAddressfrom&#39;./Address&#39;;

    exportdefaultclassBusiness {

    constructor() {

    this.Address = newAddress();

    this.Name = &#39;&#39;;

    this.Phone = &#39;&#39;;

    this.Fax = &#39;&#39;;

    this.WebSite = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newBusiness();

    if (Object.prototype.hasOwnProperty.call(data, &#39;Address&#39;)) {

    obj[&#39;Address&#39;] = Address.constructFromObject(data[&#39;Address&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Name&#39;)) {

    obj[&#39;Name&#39;] = ApiClient.convertToType(data[&#39;Name&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Phone&#39;)) {

    obj[&#39;Phone&#39;] = ApiClient.convertToType(data[&#39;Phone&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Fax&#39;)) {

    obj[&#39;Fax&#39;] = ApiClient.convertToType(data[&#39;Fax&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;WebSite&#39;)) {

    obj[&#39;WebSite&#39;] = ApiClient.convertToType(data[&#39;WebSite&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# CheckAccountType

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassCheckAccountType {

    /\*\*

    \* value: &quot;Unknown&quot;

    \* @const

    \*/

    Unknown = &quot;Unknown&quot;;

    /\*\*

    \* value: &quot;Checking&quot;

    \* @const

    \*/

    Checking = &quot;Checking&quot;;

    /\*\*

    \* value: &quot;Savings&quot;

    \* @const

    \*/

    Savings = &quot;Savings&quot;;

    staticconstructFromObject(object) {

    returnobject;

    }

    }

# CheckTransaction

    importApiClientfrom&#39;../ApiClient&#39;;

    importCheckAccountTypefrom&#39;./CheckAccountType&#39;;

    importCheckTransactionTypefrom&#39;./CheckTransactionType&#39;;

    exportdefaultclassCheckTransaction {

    constructor() {

    this.Terminal\_ID = &#39;&#39;;

    this.Account\_Number = &#39;&#39;;

    this.Account\_Type = newCheckAccountType();

    this.Check\_Number = &#39;&#39;;

    this.Routing\_Number = &#39;&#39;;

    this.MICR\_Data = &#39;&#39;;

    this.First\_Name = &#39;&#39;;

    this.Last\_Name = &#39;&#39;;

    this.Company\_Name = &#39;&#39;;

    this.Address1 = &#39;&#39;;

    this.Address2 = &#39;&#39;;

    this.City = &#39;&#39;;

    this.State = &#39;&#39;;

    this.Zip = &#39;&#39;;

    this.Phone\_Number = &#39;&#39;;

    this.DL\_Number = &#39;&#39;;

    this.DL\_State = &#39;&#39;;

    this.Courtesy\_Card\_ID = &#39;&#39;;

    this.SSN4 = &#39;&#39;;

    this.DOB\_Year = &#39;&#39;;

    this.Check\_Amount = &#39;&#39;;

    this.Tran\_Type = &#39;&#39;;

    this.Proc\_ID = &#39;&#39;;

    this.IP\_Address = &#39;&#39;;

    this.CustomerNumber = &#39;&#39;;

    this.PONumber = &#39;&#39;;

    this.InvoiceNumber = &#39;&#39;;

    this.TranNote = &#39;&#39;;

    this.EmailAddress = &#39;&#39;;

    this.SEC\_Code = &#39;&#39;;

    this.Proc\_Resp = &#39;&#39;;

    this.Proc\_Code = &#39;&#39;;

    this.Proc\_Mess = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newCheckTransaction();

    if (Object.prototype.hasOwnProperty.call(data, &#39;Terminal\_ID&#39;)) {

    obj[&#39;Terminal\_ID&#39;] = ApiClient.convertToType(data[&#39;Terminal\_ID&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Account\_Number&#39;)) {

    obj[&#39;Account\_Number&#39;] = ApiClient.convertToType(data[&#39;Account\_Number&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Account\_Type&#39;)) {

    obj[&#39;Account\_Type&#39;] = CheckAccountType.constructFromObject(data[&#39;Account\_Type&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Check\_Number&#39;)) {

    obj[&#39;Check\_Number&#39;] = ApiClient.convertToType(data[&#39;Check\_Number&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Routing\_Number&#39;)) {

    obj[&#39;Routing\_Number&#39;] = ApiClient.convertToType(data[&#39;Routing\_Number&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;MICR\_Data&#39;)) {

    obj[&#39;MICR\_Data&#39;] = ApiClient.convertToType(data[&#39;MICR\_Data&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;First\_Name&#39;)) {

    obj[&#39;First\_Name&#39;] = ApiClient.convertToType(data[&#39;First\_Name&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Last\_Name&#39;)) {

    obj[&#39;Last\_Name&#39;] = ApiClient.convertToType(data[&#39;Last\_Name&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Company\_Name&#39;)) {

    obj[&#39;Company\_Name&#39;] = ApiClient.convertToType(data[&#39;Company\_Name&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Address1&#39;)) {

    obj[&#39;Address1&#39;] = ApiClient.convertToType(data[&#39;Address1&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Address2&#39;)) {

    obj[&#39;Address2&#39;] = ApiClient.convertToType(data[&#39;Address2&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;City&#39;)) {

    obj[&#39;City&#39;] = ApiClient.convertToType(data[&#39;City&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;State&#39;)) {

    obj[&#39;State&#39;] = ApiClient.convertToType(data[&#39;State&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Zip&#39;)) {

    obj[&#39;Zip&#39;] = ApiClient.convertToType(data[&#39;Zip&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Phone\_Number&#39;)) {

    obj[&#39;Phone\_Number&#39;] = ApiClient.convertToType(data[&#39;Phone\_Number&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;DL\_Number&#39;)) {

    obj[&#39;DL\_Number&#39;] = ApiClient.convertToType(data[&#39;DL\_Number&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;DL\_State&#39;)) {

    obj[&#39;DL\_State&#39;] = ApiClient.convertToType(data[&#39;DL\_State&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Courtesy\_Card\_ID&#39;)) {

    obj[&#39;Courtesy\_Card\_ID&#39;] = ApiClient.convertToType(data[&#39;Courtesy\_Card\_ID&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;SSN4&#39;)) {

    obj[&#39;SSN4&#39;] = ApiClient.convertToType(data[&#39;SSN4&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;DOB\_Year&#39;)) {

    obj[&#39;DOB\_Year&#39;] = ApiClient.convertToType(data[&#39;DOB\_Year&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Check\_Amount&#39;)) {

    obj[&#39;Check\_Amount&#39;] = ApiClient.convertToType(data[&#39;Check\_Amount&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Tran\_Type&#39;)) {

    obj[&#39;Tran\_Type&#39;] = CheckTransactionType.constructFromObject(data[&#39;Tran\_Type&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Proc\_ID&#39;)) {

    obj[&#39;Proc\_ID&#39;] = ApiClient.convertToType(data[&#39;Proc\_ID&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;IP\_Address&#39;)) {

    obj[&#39;IP\_Address&#39;] = ApiClient.convertToType(data[&#39;IP\_Address&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;CustomerNumber&#39;)) {

    obj[&#39;CustomerNumber&#39;] = ApiClient.convertToType(data[&#39;CustomerNumber&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;PONumber&#39;)) {

    obj[&#39;PONumber&#39;] = ApiClient.convertToType(data[&#39;PONumber&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;InvoiceNumber&#39;)) {

    obj[&#39;InvoiceNumber&#39;] = ApiClient.convertToType(data[&#39;InvoiceNumber&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;TranNote&#39;)) {

    obj[&#39;TranNote&#39;] = ApiClient.convertToType(data[&#39;TranNote&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;EmailAddress&#39;)) {

    obj[&#39;EmailAddress&#39;] = ApiClient.convertToType(data[&#39;EmailAddress&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;SEC\_Code&#39;)) {

    obj[&#39;SEC\_Code&#39;] = ApiClient.convertToType(data[&#39;SEC\_Code&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Proc\_Resp&#39;)) {

    obj[&#39;Proc\_Resp&#39;] = ApiClient.convertToType(data[&#39;Proc\_Resp&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Proc\_Code&#39;)) {

    obj[&#39;Proc\_Code&#39;] = ApiClient.convertToType(data[&#39;Proc\_Code&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Proc\_Mess&#39;)) {

    obj[&#39;Proc\_Mess&#39;] = ApiClient.convertToType(data[&#39;Proc\_Mess&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# CheckTransactionSettings

    importApiClientfrom&#39;../ApiClient&#39;;

    importFieldInfofrom&#39;./FieldInfo&#39;;

    exportdefaultclassCheckTransactionSettings {

    constructor() {

    this.Reader = newFieldInfo();

    this.ContactName = newFieldInfo();

    this.ContactTitle = newFieldInfo();

    this.EmailAddress = newFieldInfo();

    this.PhoneDefault = &#39;&#39;;

    this.Fax = newFieldInfo();

    this.BillingAddressDefault = &#39;&#39;;

    this.BillingAddress2 = newFieldInfo();

    this.BillingCityDefault = &#39;&#39;;

    this.BillingStateDefault = &#39;&#39;;

    this.BillingZipDefault = &#39;&#39;;

    this.PONumber = newFieldInfo();

    this.InvoiceNumber = newFieldInfo();

    this.BusinessName = newFieldInfo();

    this.CustomerNumber = newFieldInfo();

    this.ReferenceNote = newFieldInfo();

    this.DefaultSECCode = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newCheckTransactionSettings();

    if (Object.prototype.hasOwnProperty.call(data, &#39;Reader&#39;)) {

    obj[&#39;Reader&#39;] = FieldInfo.constructFromObject(data[&#39;Reader&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;ContactName&#39;)) {

    obj[&#39;ContactName&#39;] = FieldInfo.constructFromObject(data[&#39;ContactName&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;ContactTitle&#39;)) {

    obj[&#39;ContactTitle&#39;] = FieldInfo.constructFromObject(data[&#39;ContactTitle&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;EmailAddress&#39;)) {

    obj[&#39;EmailAddress&#39;] = FieldInfo.constructFromObject(data[&#39;EmailAddress&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;PhoneDefault&#39;)) {

    obj[&#39;PhoneDefault&#39;] = ApiClient.convertToType(data[&#39;PhoneDefault&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Fax&#39;)) {

    obj[&#39;Fax&#39;] = FieldInfo.constructFromObject(data[&#39;Fax&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;BillingAddressDefault&#39;)) {

    obj[&#39;BillingAddressDefault&#39;] = ApiClient.convertToType(data[&#39;BillingAddressDefault&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;BillingAddress2&#39;)) {

    obj[&#39;BillingAddress2&#39;] = FieldInfo.constructFromObject(data[&#39;BillingAddress2&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;BillingCityDefault&#39;)) {

    obj[&#39;BillingCityDefault&#39;] = ApiClient.convertToType(data[&#39;BillingCityDefault&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;BillingStateDefault&#39;)) {

    obj[&#39;BillingStateDefault&#39;] = ApiClient.convertToType(data[&#39;BillingStateDefault&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;BillingZipDefault&#39;)) {

    obj[&#39;BillingZipDefault&#39;] = ApiClient.convertToType(data[&#39;BillingZipDefault&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;PONumber&#39;)) {

    obj[&#39;PONumber&#39;] = FieldInfo.constructFromObject(data[&#39;PONumber&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;InvoiceNumber&#39;)) {

    obj[&#39;InvoiceNumber&#39;] = FieldInfo.constructFromObject(data[&#39;InvoiceNumber&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;BusinessName&#39;)) {

    obj[&#39;BusinessName&#39;] = FieldInfo.constructFromObject(data[&#39;BusinessName&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;CustomerNumber&#39;)) {

    obj[&#39;CustomerNumber&#39;] = FieldInfo.constructFromObject(data[&#39;CustomerNumber&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;ReferenceNote&#39;)) {

    obj[&#39;ReferenceNote&#39;] = FieldInfo.constructFromObject(data[&#39;ReferenceNote&#39;]);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;DefaultSECCode&#39;)) {

    obj[&#39;DefaultSECCode&#39;] = ApiClient.convertToType(data[&#39;DefaultSECCode&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# CheckTransactionType

    exportdefaultclassCheckTransactionType {

    /\*\*

    \* value: &quot;Unknown&quot;

    \* @const

    \*/

    Unknown = &#39;Unknown&#39;;

    /\*\*

    \* value: &quot;Authorize&quot;

    \* @const

    \*/

    Authorize = &#39;Authorize&#39;;

    /\*\*

    \* value: &quot;Void&quot;

    \* @const

    \*/

    Void = &#39;Void&#39;;

    /\*\*

    \* value: &quot;Override&quot;

    \* @const

    \*/

    Override = &#39;Override&#39;;

    /\*\*

    \* value: &quot;Payroll&quot;

    \* @const

    \*/

    Payroll = &#39;Payroll&#39;;

    /\*\*

    \* value: &quot;Recurring&quot;

    \* @const

    \*/

    Recurring = &#39;Recurring&#39;;

    /\*\*

    \* value: &quot;Refund&quot;

    \* @const

    \*/

    Refund = &#39;Refund&#39;;

    staticconstructFromObject(object) {

    returnobject;

    }

    }

# Contact

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassContact {

    constructor() {

    this.FirstName = &#39;&#39;;

    this.LastName = &#39;&#39;;

    this.Name = &#39;&#39;;

    this.Title = &#39;&#39;;

    this.Phone = &#39;&#39;;

    this.Email = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newContact();

    if (Object.prototype.hasOwnProperty.call(data, &#39;FirstName&#39;)) {

    obj[&#39;FirstName&#39;] = ApiClient.convertToType(data[&#39;FirstName&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;LastName&#39;)) {

    obj[&#39;LastName&#39;] = ApiClient.convertToType(data[&#39;LastName&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Name&#39;)) {

    obj[&#39;Name&#39;] = ApiClient.convertToType(data[&#39;Name&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Title&#39;)) {

    obj[&#39;Title&#39;] = ApiClient.convertToType(data[&#39;Title&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Phone&#39;)) {

    obj[&#39;Phone&#39;] = ApiClient.convertToType(data[&#39;Phone&#39;], &#39;String&#39;);

    }

    if (Object.prototype.hasOwnProperty.call(data, &#39;Email&#39;)) {

    obj[&#39;Email&#39;] = ApiClient.convertToType(data[&#39;Email&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# CreditCardTransactionSettings

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importFieldInfofrom&#39;./FieldInfo&#39;;

    importTransactionTypefrom&#39;./TransactionType&#39;;

    exportdefaultclassCreditCardTransactionSettings {

    constructor() {

    this.CVV = newFieldInfo();

    this.ContactName = newFieldInfo();

    this.ContactTitle = newFieldInfo();

    this.EmailAddress = newFieldInfo();

    this.Phone = newFieldInfo();

    this.Fax = newFieldInfo();

    this.BillingAddress = newFieldInfo();

    this.BillingAddress2 = newFieldInfo();

    this.BillingCity = newFieldInfo();

    this.BillingState = newFieldInfo();

    this.BillingZip = newFieldInfo();

    this.PONumber = newFieldInfo();

    this.InvoiceNumber = newFieldInfo();

    this.BusinessName = newFieldInfo();

    this.CustomerNumber = newFieldInfo();

    this.ReferenceNote = newFieldInfo();

    this.SalesTax = newFieldInfo();

    this.TaxExempt = newFieldInfo();

    this.CardTracks = newFieldInfo();

    this.CardZip = newFieldInfo();

    this.CardAddress = newFieldInfo();

    this.ItemDescription = &#39;&#39;;

    this.DefaultTransactionType = TransactionType.Sale;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newCreditCardTransactionSettings();

    if (data.hasOwnProperty(&#39;CVV&#39;)) {

    obj[&#39;CVV&#39;] = FieldInfo.constructFromObject(data[&#39;CVV&#39;]);

    }

    if (data.hasOwnProperty(&#39;ContactName&#39;)) {

    obj[&#39;ContactName&#39;] = FieldInfo.constructFromObject(data[&#39;ContactName&#39;]);

    }

    if (data.hasOwnProperty(&#39;ContactTitle&#39;)) {

    obj[&#39;ContactTitle&#39;] = FieldInfo.constructFromObject(data[&#39;ContactTitle&#39;]);

    }

    if (data.hasOwnProperty(&#39;EmailAddress&#39;)) {

    obj[&#39;EmailAddress&#39;] = FieldInfo.constructFromObject(data[&#39;EmailAddress&#39;]);

    }

    if (data.hasOwnProperty(&#39;Phone&#39;)) {

    obj[&#39;Phone&#39;] = FieldInfo.constructFromObject(data[&#39;Phone&#39;]);

    }

    if (data.hasOwnProperty(&#39;Fax&#39;)) {

    obj[&#39;Fax&#39;] = FieldInfo.constructFromObject(data[&#39;Fax&#39;]);

    }

    if (data.hasOwnProperty(&#39;BillingAddress&#39;)) {

    obj[&#39;BillingAddress&#39;] = FieldInfo.constructFromObject(data[&#39;BillingAddress&#39;]);

    }

    if (data.hasOwnProperty(&#39;BillingAddress2&#39;)) {

    obj[&#39;BillingAddress2&#39;] = FieldInfo.constructFromObject(data[&#39;BillingAddress2&#39;]);

    }

    if (data.hasOwnProperty(&#39;BillingCity&#39;)) {

    obj[&#39;BillingCity&#39;] = FieldInfo.constructFromObject(data[&#39;BillingCity&#39;]);

    }

    if (data.hasOwnProperty(&#39;BillingState&#39;)) {

    obj[&#39;BillingState&#39;] = FieldInfo.constructFromObject(data[&#39;BillingState&#39;]);

    }

    if (data.hasOwnProperty(&#39;BillingZip&#39;)) {

    obj[&#39;BillingZip&#39;] = FieldInfo.constructFromObject(data[&#39;BillingZip&#39;]);

    }

    if (data.hasOwnProperty(&#39;PONumber&#39;)) {

    obj[&#39;PONumber&#39;] = FieldInfo.constructFromObject(data[&#39;PONumber&#39;]);

    }

    if (data.hasOwnProperty(&#39;InvoiceNumber&#39;)) {

    obj[&#39;InvoiceNumber&#39;] = FieldInfo.constructFromObject(data[&#39;InvoiceNumber&#39;]);

    }

    if (data.hasOwnProperty(&#39;BusinessName&#39;)) {

    obj[&#39;BusinessName&#39;] = FieldInfo.constructFromObject(data[&#39;BusinessName&#39;]);

    }

    if (data.hasOwnProperty(&#39;CustomerNumber&#39;)) {

    obj[&#39;CustomerNumber&#39;] = FieldInfo.constructFromObject(data[&#39;CustomerNumber&#39;]);

    }

    if (data.hasOwnProperty(&#39;ReferenceNote&#39;)) {

    obj[&#39;ReferenceNote&#39;] = FieldInfo.constructFromObject(data[&#39;ReferenceNote&#39;]);

    }

    if (data.hasOwnProperty(&#39;SalesTax&#39;)) {

    obj[&#39;SalesTax&#39;] = FieldInfo.constructFromObject(data[&#39;SalesTax&#39;]);

    }

    if (data.hasOwnProperty(&#39;TaxExempt&#39;)) {

    obj[&#39;TaxExempt&#39;] = FieldInfo.constructFromObject(data[&#39;TaxExempt&#39;]);

    }

    if (data.hasOwnProperty(&#39;CardTracks&#39;)) {

    obj[&#39;CardTracks&#39;] = FieldInfo.constructFromObject(data[&#39;CardTracks&#39;]);

    }

    if (data.hasOwnProperty(&#39;CardZip&#39;)) {

    obj[&#39;CardZip&#39;] = FieldInfo.constructFromObject(data[&#39;CardZip&#39;]);

    }

    if (data.hasOwnProperty(&#39;CardAddress&#39;)) {

    obj[&#39;CardAddress&#39;] = FieldInfo.constructFromObject(data[&#39;CardAddress&#39;]);

    }

    if (data.hasOwnProperty(&#39;ItemDescription&#39;)) {

    obj[&#39;ItemDescription&#39;] = ApiClient.convertToType(data[&#39;ItemDescription&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;DefaultTransactionType&#39;)) {

    obj[&#39;DefaultTransactionType&#39;] = TransactionType.constructFromObject(data[&#39;DefaultTransactionType&#39;]);

    }

    }

    returnobj;

    }

    }

# CVVPresenceType

    exportdefaultclassCVVPresenceType {

    /\*\*

    \* value: &quot;Normal&quot;

    \* @const

    \*/

    Normal = &#39;Normal&#39;;

    /\*\*

    \* value: &quot;Bypass&quot;

    \* @const

    \*/

    Bypass = &#39;Bypass&#39;;

    /\*\*

    \* value: &quot;Illegible&quot;

    \* @const

    \*/

    Illegible = &#39;Illegible&#39;;

    /\*\*

    \* value: &quot;NotAvailable&quot;

    \* @const

    \*/

    NotAvailable = &#39;NotAvailable&#39;;

    staticconstructFromObject(object) {

    returnobject;

    }

    }

# EmailReceipt

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassEmailReceipt {

    constructor() {

    this.TransactionID = &#39;&#39;;

    this.ToAddresses = &#39;&#39;;

    this.Subject = &#39;&#39;;

    this.Header = &#39;&#39;;

    this.Footer = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newEmailReceipt();

    if (data.hasOwnProperty(&#39;TransactionID&#39;)) {

    obj[&#39;TransactionID&#39;] = ApiClient.convertToType(data[&#39;TransactionID&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;ToAddresses&#39;)) {

    obj[&#39;ToAddresses&#39;] = ApiClient.convertToType(data[&#39;ToAddresses&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Subject&#39;)) {

    obj[&#39;Subject&#39;] = ApiClient.convertToType(data[&#39;Subject&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Header&#39;)) {

    obj[&#39;Header&#39;] = ApiClient.convertToType(data[&#39;Header&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Footer&#39;)) {

    obj[&#39;Footer&#39;] = ApiClient.convertToType(data[&#39;Footer&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# FieldAccess

    exportdefaultclassFieldAccess {

    /\*\*

    \* value: &quot;Disabled&quot;

    \* @const

    \*/

    Disabled = &#39;Disabled&#39;;

    /\*\*

    \* value: &quot;Enabled&quot;

    \* @const

    \*/

    Enabled = &#39;Enabled&#39;;

    /\*\*

    \* value: &quot;Required&quot;

    \* @const

    \*/

    Required = &#39;Required&#39;;

    staticconstructFromObject(object) {

    returnobject;

    }

    }

# FieldInfo

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importFieldAccessfrom&#39;./FieldAccess&#39;;

    exportdefaultclassFieldInfo {

    constructor() {

    this.Access = FieldAccess.Enabled;

    this.Default = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newFieldInfo();

    if (data.hasOwnProperty(&#39;Access&#39;)) {

    obj[&#39;Access&#39;] = FieldAccess.constructFromObject(data[&#39;Access&#39;]);

    }

    if (data.hasOwnProperty(&#39;Default&#39;)) {

    obj[&#39;Default&#39;] = ApiClient.convertToType(data[&#39;Default&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# QueryTransaction

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importTransactionItemfrom&#39;./TransactionItem&#39;;

    exportdefaultclassQueryTransaction {

    constructor() {

    this.Tran\_Sequence = &#39;&#39;;

    this.Tran\_Batch = &#39;&#39;;

    this.Tran\_Modified = &#39;&#39;;

    this.Tran\_Processed = &#39;&#39;;

    this.Tran\_Settled = &#39;&#39;;

    this.Submit\_Time = &#39;&#39;;

    this.Tran\_Type = &#39;&#39;;

    this.Tran\_Amt = 0;

    this.Tran\_Tax = 0;

    this.Tran\_Inv = &#39;&#39;;

    this.Tran\_PO = &#39;&#39;;

    this.Tran\_CNum = &#39;&#39;;

    this.Tran\_Note = &#39;&#39;;

    this.Card\_Num = &#39;&#39;;

    this.Card\_Name = &#39;&#39;;

    this.Card\_Exp = &#39;&#39;;

    this.AVS\_Street = &#39;&#39;;

    this.AVS\_Zip = &#39;&#39;;

    this.CVV\_Num = &#39;&#39;;

    this.Proc\_ID = &#39;&#39;;

    this.Proc\_Resp = &#39;&#39;;

    this.Proc\_Code = &#39;&#39;;

    this.Proc\_Mess = &#39;&#39;;

    this.AVS\_Code = &#39;&#39;;

    this.AVS\_Resp = &#39;&#39;;

    this.CVV\_Code = &#39;&#39;;

    this.CVV\_Resp = &#39;&#39;;

    this.Items = [];

    this.Business\_Name = &#39;&#39;;

    this.Business\_Address = &#39;&#39;;

    this.Business\_Address2 = &#39;&#39;;

    this.Business\_City = &#39;&#39;;

    this.Business\_State = &#39;&#39;;

    this.Business\_Zip = &#39;&#39;;

    this.Business\_Country = &#39;&#39;;

    this.Business\_Website = &#39;&#39;;

    this.Contact\_FirstName = &#39;&#39;;

    this.Contact\_LastName = &#39;&#39;;

    this.Contact\_Phone = &#39;&#39;;

    this.Contact\_Fax = &#39;&#39;;

    this.Contact\_Email = &#39;&#39;;

    this.Contact\_Title = &#39;&#39;;

    this.IP = &#39;&#39;;

    this.TaxExempt = false;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newQueryTransaction();

    if (data.hasOwnProperty(&#39;Tran\_Sequence&#39;)) {

    obj[&#39;Tran\_Sequence&#39;] = ApiClient.convertToType(data[&#39;Tran\_Sequence&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Batch&#39;)) {

    obj[&#39;Tran\_Batch&#39;] = ApiClient.convertToType(data[&#39;Tran\_Batch&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Modified&#39;)) {

    obj[&#39;Tran\_Modified&#39;] = ApiClient.convertToType(data[&#39;Tran\_Modified&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Processed&#39;)) {

    obj[&#39;Tran\_Processed&#39;] = ApiClient.convertToType(data[&#39;Tran\_Processed&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Settled&#39;)) {

    obj[&#39;Tran\_Settled&#39;] = ApiClient.convertToType(data[&#39;Tran\_Settled&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Submit\_Time&#39;)) {

    obj[&#39;Submit\_Time&#39;] = ApiClient.convertToType(data[&#39;Submit\_Time&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Type&#39;)) {

    obj[&#39;Tran\_Type&#39;] = ApiClient.convertToType(data[&#39;Tran\_Type&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Amt&#39;)) {

    obj[&#39;Tran\_Amt&#39;] = ApiClient.convertToType(data[&#39;Tran\_Amt&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Tax&#39;)) {

    obj[&#39;Tran\_Tax&#39;] = ApiClient.convertToType(data[&#39;Tran\_Tax&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Inv&#39;)) {

    obj[&#39;Tran\_Inv&#39;] = ApiClient.convertToType(data[&#39;Tran\_Inv&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_PO&#39;)) {

    obj[&#39;Tran\_PO&#39;] = ApiClient.convertToType(data[&#39;Tran\_PO&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_CNum&#39;)) {

    obj[&#39;Tran\_CNum&#39;] = ApiClient.convertToType(data[&#39;Tran\_CNum&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Note&#39;)) {

    obj[&#39;Tran\_Note&#39;] = ApiClient.convertToType(data[&#39;Tran\_Note&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Card\_Num&#39;)) {

    obj[&#39;Card\_Num&#39;] = ApiClient.convertToType(data[&#39;Card\_Num&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Card\_Name&#39;)) {

    obj[&#39;Card\_Name&#39;] = ApiClient.convertToType(data[&#39;Card\_Name&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Card\_Exp&#39;)) {

    obj[&#39;Card\_Exp&#39;] = ApiClient.convertToType(data[&#39;Card\_Exp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Street&#39;)) {

    obj[&#39;AVS\_Street&#39;] = ApiClient.convertToType(data[&#39;AVS\_Street&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Zip&#39;)) {

    obj[&#39;AVS\_Zip&#39;] = ApiClient.convertToType(data[&#39;AVS\_Zip&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVV\_Num&#39;)) {

    obj[&#39;CVV\_Num&#39;] = ApiClient.convertToType(data[&#39;CVV\_Num&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_ID&#39;)) {

    obj[&#39;Proc\_ID&#39;] = ApiClient.convertToType(data[&#39;Proc\_ID&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_Resp&#39;)) {

    obj[&#39;Proc\_Resp&#39;] = ApiClient.convertToType(data[&#39;Proc\_Resp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_Code&#39;)) {

    obj[&#39;Proc\_Code&#39;] = ApiClient.convertToType(data[&#39;Proc\_Code&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_Mess&#39;)) {

    obj[&#39;Proc\_Mess&#39;] = ApiClient.convertToType(data[&#39;Proc\_Mess&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Code&#39;)) {

    obj[&#39;AVS\_Code&#39;] = ApiClient.convertToType(data[&#39;AVS\_Code&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Resp&#39;)) {

    obj[&#39;AVS\_Resp&#39;] = ApiClient.convertToType(data[&#39;AVS\_Resp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVV\_Code&#39;)) {

    obj[&#39;CVV\_Code&#39;] = ApiClient.convertToType(data[&#39;CVV\_Code&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVV\_Resp&#39;)) {

    obj[&#39;CVV\_Resp&#39;] = ApiClient.convertToType(data[&#39;CVV\_Resp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Items&#39;)) {

    obj[&#39;Items&#39;] = ApiClient.convertToType(data[&#39;Items&#39;], [TransactionItem]);

    }

    if (data.hasOwnProperty(&#39;Business\_Name&#39;)) {

    obj[&#39;Business\_Name&#39;] = ApiClient.convertToType(data[&#39;Business\_Name&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Address&#39;)) {

    obj[&#39;Business\_Address&#39;] = ApiClient.convertToType(data[&#39;Business\_Address&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Address2&#39;)) {

    obj[&#39;Business\_Address2&#39;] = ApiClient.convertToType(data[&#39;Business\_Address2&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_City&#39;)) {

    obj[&#39;Business\_City&#39;] = ApiClient.convertToType(data[&#39;Business\_City&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_State&#39;)) {

    obj[&#39;Business\_State&#39;] = ApiClient.convertToType(data[&#39;Business\_State&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Zip&#39;)) {

    obj[&#39;Business\_Zip&#39;] = ApiClient.convertToType(data[&#39;Business\_Zip&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Country&#39;)) {

    obj[&#39;Business\_Country&#39;] = ApiClient.convertToType(data[&#39;Business\_Country&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Website&#39;)) {

    obj[&#39;Business\_Website&#39;] = ApiClient.convertToType(data[&#39;Business\_Website&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_FirstName&#39;)) {

    obj[&#39;Contact\_FirstName&#39;] = ApiClient.convertToType(data[&#39;Contact\_FirstName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_LastName&#39;)) {

    obj[&#39;Contact\_LastName&#39;] = ApiClient.convertToType(data[&#39;Contact\_LastName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Phone&#39;)) {

    obj[&#39;Contact\_Phone&#39;] = ApiClient.convertToType(data[&#39;Contact\_Phone&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Fax&#39;)) {

    obj[&#39;Contact\_Fax&#39;] = ApiClient.convertToType(data[&#39;Contact\_Fax&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Email&#39;)) {

    obj[&#39;Contact\_Email&#39;] = ApiClient.convertToType(data[&#39;Contact\_Email&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Title&#39;)) {

    obj[&#39;Contact\_Title&#39;] = ApiClient.convertToType(data[&#39;Contact\_Title&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;IP&#39;)) {

    obj[&#39;IP&#39;] = ApiClient.convertToType(data[&#39;IP&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;TaxExempt&#39;)) {

    obj[&#39;TaxExempt&#39;] = ApiClient.convertToType(data[&#39;TaxExempt&#39;], &#39;Boolean&#39;);

    }

    }

    returnobj;

    }

    }

# Receipt

    /\* eslint-disable no-prototype-builtins \*/

    importReceiptCustomLinesfrom&#39;./ReceiptCustomLines&#39;;

    exportdefaultclassReceipt {

    constructor() {

    this.Header = newReceiptCustomLines();

    this.Footer = newReceiptCustomLines();

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newReceipt();

    if (data.hasOwnProperty(&#39;Header&#39;)) {

    obj[&#39;Header&#39;] = ReceiptCustomLines.constructFromObject(data[&#39;Header&#39;]);

    }

    if (data.hasOwnProperty(&#39;Footer&#39;)) {

    obj[&#39;Footer&#39;] = ReceiptCustomLines.constructFromObject(data[&#39;Footer&#39;]);

    }

    }

    returnobj;

    }

    }

# ReceiptCustomLines

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassReceiptCustomLines {

    constructor() {

    this.CustomLine1 = &#39;&#39;;

    this.CustomLine2 = &#39;&#39;;

    this.CustomLine3 = &#39;&#39;;

    this.CustomLine4 = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newReceiptCustomLines();

    if (data.hasOwnProperty(&#39;CustomLine1&#39;)) {

    obj[&#39;CustomLine1&#39;] = ApiClient.convertToType(data[&#39;CustomLine1&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CustomLine2&#39;)) {

    obj[&#39;CustomLine2&#39;] = ApiClient.convertToType(data[&#39;CustomLine2&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CustomLine3&#39;)) {

    obj[&#39;CustomLine3&#39;] = ApiClient.convertToType(data[&#39;CustomLine3&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CustomLine4&#39;)) {

    obj[&#39;CustomLine4&#39;] = ApiClient.convertToType(data[&#39;CustomLine4&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# Record

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importBusinessfrom&#39;./Business&#39;;

    importContactfrom&#39;./Contact&#39;;

    importResponsefrom&#39;./Response&#39;;

    importVaultCheckfrom&#39;./VaultCheck&#39;;

    importVaultCreditCardfrom&#39;./VaultCreditCard&#39;;

    exportdefaultclassRecord {

    constructor() {

    this.Response = newResponse();

    this.ID = 0;

    this.Reference = &#39;&#39;;

    this.Business = newBusiness();

    this.Contact = newContact();

    this.PO = &#39;&#39;;

    this.Invoice = &#39;&#39;;

    this.Customer = &#39;&#39;;

    this.TaxExempt = false;

    this.Note = &#39;&#39;;

    this.CreditCards = newVaultCreditCard();

    this.Checks = newVaultCheck();

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newRecord();

    if (data.hasOwnProperty(&#39;Response&#39;)) {

    obj[&#39;Response&#39;] = Response.constructFromObject(data[&#39;Response&#39;]);

    }

    if (data.hasOwnProperty(&#39;ID&#39;)) {

    obj[&#39;ID&#39;] = ApiClient.convertToType(data[&#39;ID&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Reference&#39;)) {

    obj[&#39;Reference&#39;] = ApiClient.convertToType(data[&#39;Reference&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business&#39;)) {

    obj[&#39;Business&#39;] = Business.constructFromObject(data[&#39;Business&#39;]);

    }

    if (data.hasOwnProperty(&#39;Contact&#39;)) {

    obj[&#39;Contact&#39;] = Contact.constructFromObject(data[&#39;Contact&#39;]);

    }

    if (data.hasOwnProperty(&#39;PO&#39;)) {

    obj[&#39;PO&#39;] = ApiClient.convertToType(data[&#39;PO&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Invoice&#39;)) {

    obj[&#39;Invoice&#39;] = ApiClient.convertToType(data[&#39;Invoice&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Customer&#39;)) {

    obj[&#39;Customer&#39;] = ApiClient.convertToType(data[&#39;Customer&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;TaxExempt&#39;)) {

    obj[&#39;TaxExempt&#39;] = ApiClient.convertToType(data[&#39;TaxExempt&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Note&#39;)) {

    obj[&#39;Note&#39;] = ApiClient.convertToType(data[&#39;Note&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CreditCards&#39;)) {

    obj[&#39;CreditCards&#39;] = ApiClient.convertToType(data[&#39;CreditCards&#39;], [VaultCreditCard]);

    }

    if (data.hasOwnProperty(&#39;Checks&#39;)) {

    obj[&#39;Checks&#39;] = ApiClient.convertToType(data[&#39;Checks&#39;], [VaultCheck]);

    }

    }

    returnobj;

    }

    }

# Response

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassResponse {

    constructor() {

    this.Error = false;

    this.Message = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newResponse();

    if (data.hasOwnProperty(&#39;Error&#39;)) {

    obj[&#39;Error&#39;] = ApiClient.convertToType(data[&#39;Error&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Message&#39;)) {

    obj[&#39;Message&#39;] = ApiClient.convertToType(data[&#39;Message&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# SearchVault

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassSearchVault {

    constructor() {

    this.Reference = &#39;&#39;;

    this.BusinessName = &#39;&#39;;

    this.FirstName = &#39;&#39;;

    this.LastName = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newSearchVault();

    if (data.hasOwnProperty(&#39;Reference&#39;)) {

    obj[&#39;Reference&#39;] = ApiClient.convertToType(data[&#39;Reference&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;BusinessName&#39;)) {

    obj[&#39;BusinessName&#39;] = ApiClient.convertToType(data[&#39;BusinessName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;FirstName&#39;)) {

    obj[&#39;FirstName&#39;] = ApiClient.convertToType(data[&#39;FirstName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;LastName&#39;)) {

    obj[&#39;LastName&#39;] = ApiClient.convertToType(data[&#39;LastName&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# Settings

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importBusinessfrom&#39;./Business&#39;;

    importCheckTransactionSettingsfrom&#39;./CheckTransactionSettings&#39;;

    importContactfrom&#39;./Contact&#39;;

    importCreditCardTransactionSettingsfrom&#39;./CreditCardTransactionSettings&#39;;

    importFieldInfofrom&#39;./FieldInfo&#39;;

    importReceiptfrom&#39;./Receipt&#39;;

    importResponsefrom&#39;./Response&#39;;

    exportdefaultclassSettings {

    constructor() {

    this.CreditCardTransactionSettings = newCreditCardTransactionSettings();

    this.CheckTransactionSettings = newCheckTransactionSettings();

    this.Business = newBusiness();

    this.MainContact = newContact();

    this.Receipt40 = newReceipt();

    this.Receipt80 = newReceipt();

    this.PrintSignatureLine = false;

    this.Response = newResponse();

    this.AccountID = &#39;&#39;;

    this.CopyEmailReceipt = newFieldInfo();

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newSettings();

    if (data.hasOwnProperty(&#39;CreditCardTransactionSettings&#39;)) {

    obj[&#39;CreditCardTransactionSettings&#39;] = CreditCardTransactionSettings.constructFromObject(

    data[&#39;CreditCardTransactionSettings&#39;]

    );

    }

    if (data.hasOwnProperty(&#39;CheckTransactionSettings&#39;)) {

    obj[&#39;CheckTransactionSettings&#39;] = CheckTransactionSettings.constructFromObject(data[&#39;CheckTransactionSettings&#39;]);

    }

    if (data.hasOwnProperty(&#39;Business&#39;)) {

    obj[&#39;Business&#39;] = Business.constructFromObject(data[&#39;Business&#39;]);

    }

    if (data.hasOwnProperty(&#39;MainContact&#39;)) {

    obj[&#39;MainContact&#39;] = Contact.constructFromObject(data[&#39;MainContact&#39;]);

    }

    if (data.hasOwnProperty(&#39;Receipt40&#39;)) {

    obj[&#39;Receipt40&#39;] = Receipt.constructFromObject(data[&#39;Receipt40&#39;]);

    }

    if (data.hasOwnProperty(&#39;Receipt80&#39;)) {

    obj[&#39;Receipt80&#39;] = Receipt.constructFromObject(data[&#39;Receipt80&#39;]);

    }

    if (data.hasOwnProperty(&#39;PrintSignatureLine&#39;)) {

    obj[&#39;PrintSignatureLine&#39;] = ApiClient.convertToType(data[&#39;PrintSignatureLine&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Response&#39;)) {

    obj[&#39;Response&#39;] = Response.constructFromObject(data[&#39;Response&#39;]);

    }

    if (data.hasOwnProperty(&#39;AccountID&#39;)) {

    obj[&#39;AccountID&#39;] = ApiClient.convertToType(data[&#39;AccountID&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CopyEmailReceipt&#39;)) {

    obj[&#39;CopyEmailReceipt&#39;] = FieldInfo.constructFromObject(data[&#39;CopyEmailReceipt&#39;]);

    }

    }

    returnobj;

    }

    }

# TerminalSettings

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassTerminalSettings {

    constructor() {

    this.ID = 0;

    this.Terminal\_ID = 0;

    this.SEC\_Code = &#39;&#39;;

    this.Gateway\_Terminal = false;

    this.Consumer\_Credits = false;

    this.DL\_Required = false;

    this.Check\_Verify = false;

    this.Identity\_Verify = false;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newTerminalSettings();

    if (data.hasOwnProperty(&#39;ID&#39;)) {

    obj[&#39;ID&#39;] = ApiClient.convertToType(data[&#39;ID&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Terminal\_ID&#39;)) {

    obj[&#39;Terminal\_ID&#39;] = ApiClient.convertToType(data[&#39;Terminal\_ID&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;SEC\_Code&#39;)) {

    obj[&#39;SEC\_Code&#39;] = ApiClient.convertToType(data[&#39;SEC\_Code&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Gateway\_Terminal&#39;)) {

    obj[&#39;Gateway\_Terminal&#39;] = ApiClient.convertToType(data[&#39;Gateway\_Terminal&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Consumer\_Credits&#39;)) {

    obj[&#39;Consumer\_Credits&#39;] = ApiClient.convertToType(data[&#39;Consumer\_Credits&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;DL\_Required&#39;)) {

    obj[&#39;DL\_Required&#39;] = ApiClient.convertToType(data[&#39;DL\_Required&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Check\_Verify&#39;)) {

    obj[&#39;Check\_Verify&#39;] = ApiClient.convertToType(data[&#39;Check\_Verify&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Identity\_Verify&#39;)) {

    obj[&#39;Identity\_Verify&#39;] = ApiClient.convertToType(data[&#39;Identity\_Verify&#39;], &#39;Boolean&#39;);

    }

    }

    returnobj;

    }

    }

# Transaction

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importTransactionItemfrom&#39;./TransactionItem&#39;;

    exportdefaultclassTransaction {

    constructor() {

    this.Submit\_Time = undefined;

    this.Tran\_Type = &#39;&#39;;

    this.Tran\_Amt = 0;

    this.Tran\_Tax = 0;

    this.Tran\_Inv = &#39;&#39;;

    this.Tran\_PO = &#39;&#39;;

    this.Tran\_CNum = &#39;&#39;;

    this.Tran\_Note = &#39;&#39;;

    this.Card\_Num = &#39;&#39;;

    this.Card\_Name = &#39;&#39;;

    this.Card\_Exp = &#39;&#39;;

    this.Card\_Type = &#39;&#39;;

    this.AVS\_Street = &#39;&#39;;

    this.AVS\_Zip = &#39;&#39;;

    this.CVV\_Num = &#39;&#39;;

    this.Proc\_ID = &#39;&#39;;

    this.Proc\_Resp = &#39;&#39;;

    this.Proc\_Code = &#39;&#39;;

    this.Proc\_Mess = &#39;&#39;;

    this.AVS\_Code = &#39;&#39;;

    this.AVS\_Resp = &#39;&#39;;

    this.CVV\_Code = &#39;&#39;;

    this.CVV\_Resp = &#39;&#39;;

    this.Items = [];

    this.Business\_Name = &#39;&#39;;

    this.Business\_Address = &#39;&#39;;

    this.Business\_Address2 = &#39;&#39;;

    this.Business\_City = &#39;&#39;;

    this.Business\_State = &#39;&#39;;

    this.Business\_Zip = &#39;&#39;;

    this.Business\_Country = &#39;&#39;;

    this.Business\_Website = &#39;&#39;;

    this.Contact\_FirstName = &#39;&#39;;

    this.Contact\_LastName = &#39;&#39;;

    this.Contact\_Phone = &#39;&#39;;

    this.Contact\_Fax = &#39;&#39;;

    this.Contact\_Email = &#39;&#39;;

    this.Contact\_Title = &#39;&#39;;

    this.IP = &#39;&#39;;

    this.TaxExempt = false;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newTransaction();

    if (data.hasOwnProperty(&#39;Submit\_Time&#39;)) {

    obj[&#39;Submit\_Time&#39;] = ApiClient.convertToType(data[&#39;Submit\_Time&#39;], &#39;Date&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Type&#39;)) {

    obj[&#39;Tran\_Type&#39;] = ApiClient.convertToType(data[&#39;Tran\_Type&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Amt&#39;)) {

    obj[&#39;Tran\_Amt&#39;] = ApiClient.convertToType(data[&#39;Tran\_Amt&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Tax&#39;)) {

    obj[&#39;Tran\_Tax&#39;] = ApiClient.convertToType(data[&#39;Tran\_Tax&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Inv&#39;)) {

    obj[&#39;Tran\_Inv&#39;] = ApiClient.convertToType(data[&#39;Tran\_Inv&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_PO&#39;)) {

    obj[&#39;Tran\_PO&#39;] = ApiClient.convertToType(data[&#39;Tran\_PO&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_CNum&#39;)) {

    obj[&#39;Tran\_CNum&#39;] = ApiClient.convertToType(data[&#39;Tran\_CNum&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Tran\_Note&#39;)) {

    obj[&#39;Tran\_Note&#39;] = ApiClient.convertToType(data[&#39;Tran\_Note&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Card\_Num&#39;)) {

    obj[&#39;Card\_Num&#39;] = ApiClient.convertToType(data[&#39;Card\_Num&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Card\_Name&#39;)) {

    obj[&#39;Card\_Name&#39;] = ApiClient.convertToType(data[&#39;Card\_Name&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Card\_Exp&#39;)) {

    obj[&#39;Card\_Exp&#39;] = ApiClient.convertToType(data[&#39;Card\_Exp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Card\_Type&#39;)) {

    obj[&#39;Card\_Type&#39;] = ApiClient.convertToType(data[&#39;Card\_Type&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Street&#39;)) {

    obj[&#39;AVS\_Street&#39;] = ApiClient.convertToType(data[&#39;AVS\_Street&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Zip&#39;)) {

    obj[&#39;AVS\_Zip&#39;] = ApiClient.convertToType(data[&#39;AVS\_Zip&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVV\_Num&#39;)) {

    obj[&#39;CVV\_Num&#39;] = ApiClient.convertToType(data[&#39;CVV\_Num&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_ID&#39;)) {

    obj[&#39;Proc\_ID&#39;] = ApiClient.convertToType(data[&#39;Proc\_ID&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_Resp&#39;)) {

    obj[&#39;Proc\_Resp&#39;] = ApiClient.convertToType(data[&#39;Proc\_Resp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_Code&#39;)) {

    obj[&#39;Proc\_Code&#39;] = ApiClient.convertToType(data[&#39;Proc\_Code&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Proc\_Mess&#39;)) {

    obj[&#39;Proc\_Mess&#39;] = ApiClient.convertToType(data[&#39;Proc\_Mess&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Code&#39;)) {

    obj[&#39;AVS\_Code&#39;] = ApiClient.convertToType(data[&#39;AVS\_Code&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AVS\_Resp&#39;)) {

    obj[&#39;AVS\_Resp&#39;] = ApiClient.convertToType(data[&#39;AVS\_Resp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVV\_Code&#39;)) {

    obj[&#39;CVV\_Code&#39;] = ApiClient.convertToType(data[&#39;CVV\_Code&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVV\_Resp&#39;)) {

    obj[&#39;CVV\_Resp&#39;] = ApiClient.convertToType(data[&#39;CVV\_Resp&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Items&#39;)) {

    obj[&#39;Items&#39;] = ApiClient.convertToType(data[&#39;Items&#39;], [TransactionItem]);

    }

    if (data.hasOwnProperty(&#39;Business\_Name&#39;)) {

    obj[&#39;Business\_Name&#39;] = ApiClient.convertToType(data[&#39;Business\_Name&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Address&#39;)) {

    obj[&#39;Business\_Address&#39;] = ApiClient.convertToType(data[&#39;Business\_Address&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Address2&#39;)) {

    obj[&#39;Business\_Address2&#39;] = ApiClient.convertToType(data[&#39;Business\_Address2&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_City&#39;)) {

    obj[&#39;Business\_City&#39;] = ApiClient.convertToType(data[&#39;Business\_City&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_State&#39;)) {

    obj[&#39;Business\_State&#39;] = ApiClient.convertToType(data[&#39;Business\_State&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Zip&#39;)) {

    obj[&#39;Business\_Zip&#39;] = ApiClient.convertToType(data[&#39;Business\_Zip&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Country&#39;)) {

    obj[&#39;Business\_Country&#39;] = ApiClient.convertToType(data[&#39;Business\_Country&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Business\_Website&#39;)) {

    obj[&#39;Business\_Website&#39;] = ApiClient.convertToType(data[&#39;Business\_Website&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_FirstName&#39;)) {

    obj[&#39;Contact\_FirstName&#39;] = ApiClient.convertToType(data[&#39;Contact\_FirstName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_LastName&#39;)) {

    obj[&#39;Contact\_LastName&#39;] = ApiClient.convertToType(data[&#39;Contact\_LastName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Phone&#39;)) {

    obj[&#39;Contact\_Phone&#39;] = ApiClient.convertToType(data[&#39;Contact\_Phone&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Fax&#39;)) {

    obj[&#39;Contact\_Fax&#39;] = ApiClient.convertToType(data[&#39;Contact\_Fax&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Email&#39;)) {

    obj[&#39;Contact\_Email&#39;] = ApiClient.convertToType(data[&#39;Contact\_Email&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Contact\_Title&#39;)) {

    obj[&#39;Contact\_Title&#39;] = ApiClient.convertToType(data[&#39;Contact\_Title&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;IP&#39;)) {

    obj[&#39;IP&#39;] = ApiClient.convertToType(data[&#39;IP&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;TaxExempt&#39;)) {

    obj[&#39;TaxExempt&#39;] = ApiClient.convertToType(data[&#39;TaxExempt&#39;], &#39;Boolean&#39;);

    }

    }

    returnobj;

    }

    }

# TransactionItem

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassTransactionItem {

    constructor() {

    this.TaxIncluded = false;

    this.Credit = false;

    this.ExtendedAmount = 0;

    this.ItemNumber = &#39;&#39;;

    this.UnitCost = 0;

    this.Quantity = 0;

    this.Description = &#39;&#39;;

    this.Discount = 0;

    this.Tax = 0;

    this.CommodityCode = &#39;&#39;;

    this.UnitOfMeasure = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newTransactionItem();

    if (data.hasOwnProperty(&#39;TaxIncluded&#39;)) {

    obj[&#39;TaxIncluded&#39;] = ApiClient.convertToType(data[&#39;TaxIncluded&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Credit&#39;)) {

    obj[&#39;Credit&#39;] = ApiClient.convertToType(data[&#39;Credit&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;ExtendedAmount&#39;)) {

    obj[&#39;ExtendedAmount&#39;] = ApiClient.convertToType(data[&#39;ExtendedAmount&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;ItemNumber&#39;)) {

    obj[&#39;ItemNumber&#39;] = ApiClient.convertToType(data[&#39;ItemNumber&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;UnitCost&#39;)) {

    obj[&#39;UnitCost&#39;] = ApiClient.convertToType(data[&#39;UnitCost&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Quantity&#39;)) {

    obj[&#39;Quantity&#39;] = ApiClient.convertToType(data[&#39;Quantity&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Description&#39;)) {

    obj[&#39;Description&#39;] = ApiClient.convertToType(data[&#39;Description&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Discount&#39;)) {

    obj[&#39;Discount&#39;] = ApiClient.convertToType(data[&#39;Discount&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Tax&#39;)) {

    obj[&#39;Tax&#39;] = ApiClient.convertToType(data[&#39;Tax&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;CommodityCode&#39;)) {

    obj[&#39;CommodityCode&#39;] = ApiClient.convertToType(data[&#39;CommodityCode&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;UnitOfMeasure&#39;)) {

    obj[&#39;UnitOfMeasure&#39;] = ApiClient.convertToType(data[&#39;UnitOfMeasure&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# TransactionType

    exportdefaultclassTransactionType {

    /\*\*

    \* value: &quot;Sale&quot;

    \* @const

    \*/

    Sale = &#39;Sale&#39;;

    /\*\*

    \* value: &quot;Credit&quot;

    \* @const

    \*/

    Credit = &#39;Credit&#39;;

    /\*\*

    \* value: &quot;Authorization&quot;

    \* @const

    \*/

    Authorization = &#39;Authorization&#39;;

    /\*\*

    \* value: &quot;PreAuth&quot;

    \* @const

    \*/

    PreAuth = &#39;PreAuth&#39;;

    /\*\*

    \* value: &quot;PostAuth&quot;

    \* @const

    \*/

    PostAuth = &#39;PostAuth&#39;;

    /\*\*

    \* value: &quot;ForceAuth&quot;

    \* @const

    \*/

    ForceAuth = &#39;ForceAuth&#39;;

    /\*\*

    \* value: &quot;Void&quot;

    \* @const

    \*/

    Void = &#39;Void&#39;;

    /\*\*

    \* value: &quot;Query&quot;

    \* @const

    \*/

    Query = &#39;Query&#39;;

    /\*\*

    \* value: &quot;Verify&quot;

    \* @const

    \*/

    Verify = &#39;Verify&#39;;

    /\*\*

    \* value: &quot;Mark&quot;

    \* @const

    \*/

    Mark = &#39;Mark&#39;;

    /\*\*

    \* value: &quot;Return&quot;

    \* @const

    \*/

    Return = &#39;Return&#39;;

    /\*\*

    \* value: &quot;Use&quot;

    \* @const

    \*/

    Use = &#39;Use&#39;;

    staticconstructFromObject(object) {

    returnobject;

    }

    }

# UpdateTransactionInfo

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    exportdefaultclassUpdateTransactionInfo {

    constructor() {

    this.InvoiceNumber = &#39;&#39;;

    this.CustomerNumber = &#39;&#39;;

    this.PONumber = &#39;&#39;;

    this.Note = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newUpdateTransactionInfo();

    if (data.hasOwnProperty(&#39;InvoiceNumber&#39;)) {

    obj[&#39;InvoiceNumber&#39;] = ApiClient.convertToType(data[&#39;InvoiceNumber&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CustomerNumber&#39;)) {

    obj[&#39;CustomerNumber&#39;] = ApiClient.convertToType(data[&#39;CustomerNumber&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;PONumber&#39;)) {

    obj[&#39;PONumber&#39;] = ApiClient.convertToType(data[&#39;PONumber&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Note&#39;)) {

    obj[&#39;Note&#39;] = ApiClient.convertToType(data[&#39;Note&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# VaultCheck

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importResponsefrom&#39;./Response&#39;;

    exportdefaultclassVaultCheck {

    constructor() {

    /\*\*

    \* @member{module:model/Response}Response

    \*/

    this.Response = newResponse();

    /\*\*

    \* @member{Number}CheckID

    \*/

    this.CheckID = 0;

    /\*\*

    \* @member{Boolean}Main

    \*/

    this.Main = false;

    /\*\*

    \* @member{String}CheckRouting

    \*/

    this.CheckRouting = &#39;&#39;;

    /\*\*

    \* @member{String}CheckAccount

    \*/

    this.CheckAccount = &#39;&#39;;

    /\*\*

    \* @member{String}CheckNumber

    \*/

    this.CheckNumber = &#39;&#39;;

    /\*\*

    \* @member{String}CheckFirstName

    \*/

    this.CheckFirstName = &#39;&#39;;

    /\*\*

    \* @member{String}CheckLastName

    \*/

    this.CheckLastName = &#39;&#39;;

    /\*\*

    \* @member{String}Note

    \*/

    this.Note = &#39;&#39;;

    /\*\*

    \* @member{String}MaskedRouting

    \*/

    this.MaskedRouting = &#39;&#39;;

    /\*\*

    \* @member{String}MaskedAccount

    \*/

    this.MaskedAccount = &#39;&#39;;

    /\*\*

    \* @member{String}AccountType

    \*/

    this.AccountType = &#39;&#39;;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newVaultCheck();

    if (data.hasOwnProperty(&#39;Response&#39;)) {

    obj[&#39;Response&#39;] = Response.constructFromObject(data[&#39;Response&#39;]);

    }

    if (data.hasOwnProperty(&#39;CheckID&#39;)) {

    obj[&#39;CheckID&#39;] = ApiClient.convertToType(data[&#39;CheckID&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Main&#39;)) {

    obj[&#39;Main&#39;] = ApiClient.convertToType(data[&#39;Main&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;CheckRouting&#39;)) {

    obj[&#39;CheckRouting&#39;] = ApiClient.convertToType(data[&#39;CheckRouting&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CheckAccount&#39;)) {

    obj[&#39;CheckAccount&#39;] = ApiClient.convertToType(data[&#39;CheckAccount&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CheckNumber&#39;)) {

    obj[&#39;CheckNumber&#39;] = ApiClient.convertToType(data[&#39;CheckNumber&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CheckFirstName&#39;)) {

    obj[&#39;CheckFirstName&#39;] = ApiClient.convertToType(data[&#39;CheckFirstName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CheckLastName&#39;)) {

    obj[&#39;CheckLastName&#39;] = ApiClient.convertToType(data[&#39;CheckLastName&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Note&#39;)) {

    obj[&#39;Note&#39;] = ApiClient.convertToType(data[&#39;Note&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;MaskedRouting&#39;)) {

    obj[&#39;MaskedRouting&#39;] = ApiClient.convertToType(data[&#39;MaskedRouting&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;MaskedAccount&#39;)) {

    obj[&#39;MaskedAccount&#39;] = ApiClient.convertToType(data[&#39;MaskedAccount&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;AccountType&#39;)) {

    obj[&#39;AccountType&#39;] = ApiClient.convertToType(data[&#39;AccountType&#39;], &#39;String&#39;);

    }

    }

    returnobj;

    }

    }

# VaultCreditCard

    /\* eslint-disable no-prototype-builtins \*/

    importApiClientfrom&#39;../ApiClient&#39;;

    importCVVPresenceTypefrom&#39;./CVVPresenceType&#39;;

    importResponsefrom&#39;./Response&#39;;

    exportdefaultclassVaultCreditCard {

    constructor() {

    this.MagneticTracks = &#39;&#39;;

    this.Track1 = &#39;&#39;;

    this.Track2 = &#39;&#39;;

    this.Number = &#39;&#39;;

    this.MaskedNumber = &#39;&#39;;

    this.Holder = &#39;&#39;;

    this.ExpDate = &#39;&#39;;

    this.CVV = &#39;&#39;;

    this.Address = &#39;&#39;;

    this.City = &#39;&#39;;

    this.State = &#39;&#39;;

    this.ZIP = &#39;&#39;;

    this.Swiped = false;

    this.TypeString = &#39;&#39;;

    this.CVVType = CVVPresenceType.Normal;

    this.NotPresent = false;

    this.Response = newResponse();

    this.CardID = 0;

    this.Note = &#39;&#39;;

    this.Main = false;

    }

    staticconstructFromObject(data, obj) {

    if (data) {

    obj = obj || newVaultCreditCard();

    if (data.hasOwnProperty(&#39;MagneticTracks&#39;)) {

    obj[&#39;MagneticTracks&#39;] = ApiClient.convertToType(data[&#39;MagneticTracks&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Track1&#39;)) {

    obj[&#39;Track1&#39;] = ApiClient.convertToType(data[&#39;Track1&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Track2&#39;)) {

    obj[&#39;Track2&#39;] = ApiClient.convertToType(data[&#39;Track2&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Number&#39;)) {

    obj[&#39;Number&#39;] = ApiClient.convertToType(data[&#39;Number&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;MaskedNumber&#39;)) {

    obj[&#39;MaskedNumber&#39;] = ApiClient.convertToType(data[&#39;MaskedNumber&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Holder&#39;)) {

    obj[&#39;Holder&#39;] = ApiClient.convertToType(data[&#39;Holder&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;ExpDate&#39;)) {

    obj[&#39;ExpDate&#39;] = ApiClient.convertToType(data[&#39;ExpDate&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVV&#39;)) {

    obj[&#39;CVV&#39;] = ApiClient.convertToType(data[&#39;CVV&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Address&#39;)) {

    obj[&#39;Address&#39;] = ApiClient.convertToType(data[&#39;Address&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;City&#39;)) {

    obj[&#39;City&#39;] = ApiClient.convertToType(data[&#39;City&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;State&#39;)) {

    obj[&#39;State&#39;] = ApiClient.convertToType(data[&#39;State&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;ZIP&#39;)) {

    obj[&#39;ZIP&#39;] = ApiClient.convertToType(data[&#39;ZIP&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Swiped&#39;)) {

    obj[&#39;Swiped&#39;] = ApiClient.convertToType(data[&#39;Swiped&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;TypeString&#39;)) {

    obj[&#39;TypeString&#39;] = ApiClient.convertToType(data[&#39;TypeString&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;CVVType&#39;)) {

    obj[&#39;CVVType&#39;] = CVVPresenceType.constructFromObject(data[&#39;CVVType&#39;]);

    }

    if (data.hasOwnProperty(&#39;NotPresent&#39;)) {

    obj[&#39;NotPresent&#39;] = ApiClient.convertToType(data[&#39;NotPresent&#39;], &#39;Boolean&#39;);

    }

    if (data.hasOwnProperty(&#39;Response&#39;)) {

    obj[&#39;Response&#39;] = Response.constructFromObject(data[&#39;Response&#39;]);

    }

    if (data.hasOwnProperty(&#39;CardID&#39;)) {

    obj[&#39;CardID&#39;] = ApiClient.convertToType(data[&#39;CardID&#39;], &#39;Number&#39;);

    }

    if (data.hasOwnProperty(&#39;Note&#39;)) {

    obj[&#39;Note&#39;] = ApiClient.convertToType(data[&#39;Note&#39;], &#39;String&#39;);

    }

    if (data.hasOwnProperty(&#39;Main&#39;)) {

    obj[&#39;Main&#39;] = ApiClient.convertToType(data[&#39;Main&#39;], &#39;Boolean&#39;);

    }

    }

    returnobj;

    }

    }

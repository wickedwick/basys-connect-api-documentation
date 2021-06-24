# Python Models

# Address

    # coding: utf-8

    classAddress(object):

    swagger_types = {

    'address_line1': 'str',

    'address_line2': 'str',

    'city': 'str',

    'state': 'str',

    'zip_code': 'str'

    }

    attribute_map = {

    'address_line1': 'AddressLine1',

    'address_line2': 'AddressLine2',

    'city': 'City',

    'state': 'State',

    'zip_code': 'ZipCode'

    }

    def__init__(self, address_line1=None, address_line2=None, city=None, state=None, zip_code=None): # noqa: E501

    """Address - a model defined in Swagger"""# noqa: E501

    self._address_line1 = None

    self._address_line2 = None

    self._city = None

    self._state = None

    self._zip_code = None

    self.discriminator = None

    ifaddress_line1isnotNone:

    self.address_line1 = address_line1

    ifaddress_line2isnotNone:

    self.address_line2 = address_line2

    ifcityisnotNone:

    self.city = city

    ifstateisnotNone:

    self.state = state

    ifzip_codeisnotNone:

    self.zip_code = zip_code

    @property

    defaddress_line1(self):

    return self._address_line1

    @address_line1.setter

    defaddress_line1(self, address_line1):

    self._address_line1 = address_line1

    @property

    defaddress_line2(self):

    return self._address_line2

    @address_line2.setter

    defaddress_line2(self, address_line2):

    self._address_line2 = address_line2

    @property

    defcity(self):

    return self._city

    @city.setter

    defcity(self, city):

    self._city = city

    @property

    defstate(self):

    return self._state

    @state.setter

    defstate(self, state):

    self._state = state

    @property

    defzip_code(self):

    return self._zip_code

    @zip_code.setter

    defzip_code(self, zip_code):

    self._zip_code = zip_code

# Batch

    # coding: utf-8

    classBatch(object):

    swagger_types = {

    'batch_number': 'str',

    'started': 'datetime',

    'completed': 'datetime',

    'sales_count': 'str',

    'sales_sum': 'float',

    'return _count': 'str',

    'return _sum': 'float',

    'batch_error': 'bool'

    }

    attribute_map = {

    'batch_number': 'BatchNumber',

    'started': 'Started',

    'completed': 'Completed',

    'sales_count': 'SalesCount',

    'sales_sum': 'SalesSum',

    'return _count': 'ReturnCount',

    'return _sum': 'ReturnSum',

    'batch_error': 'BatchError'

    }

    def__init__(self, batch_number=None, started=None, completed=None, sales_count=None, sales_sum=None, return _count=None, return _sum=None, batch_error=None): # noqa: E501

    """Batch - a model defined in Swagger"""# noqa: E501

    self._batch_number = None

    self._started = None

    self._completed = None

    self._sales_count = None

    self._sales_sum = None

    self._return _count = None

    self._return _sum = None

    self._batch_error = None

    self.discriminator = None

    ifbatch_numberisnotNone:

    self.batch_number = batch_number

    ifstartedisnotNone:

    self.started = started

    ifcompletedisnotNone:

    self.completed = completed

    ifsales_countisnotNone:

    self.sales_count = sales_count

    ifsales_sumisnotNone:

    self.sales_sum = sales_sum

    ifreturn _countisnotNone:

    self.return _count = return _count

    ifreturn _sumisnotNone:

    self.return _sum = return _sum

    ifbatch_errorisnotNone:

    self.batch_error = batch_error

    @property

    defbatch_number(self):

    return self._batch_number

    @batch_number.setter

    defbatch_number(self, batch_number):

    self._batch_number = batch_number

    @property

    defstarted(self):

    return self._started

    @started.setter

    defstarted(self, started):

    self._started = started

    @property

    defcompleted(self):

    return self._completed

    @completed.setter

    defcompleted(self, completed):

    self._completed = completed

    @property

    defsales_count(self):

    return self._sales_count

    @sales_count.setter

    defsales_count(self, sales_count):

    self._sales_count = sales_count

    @property

    defsales_sum(self):

    return self._sales_sum

    @sales_sum.setter

    defsales_sum(self, sales_sum):

    self._sales_sum = sales_sum

    @property

    defreturn _count(self):

    return self._return _count

    @return _count.setter

    defreturn _count(self, return _count):

    self._return _count = return _count

    @property

    defreturn _sum(self):

    return self._return _sum

    @return _sum.setter

    defreturn _sum(self, return _sum):

    self._return _sum = return _sum

    @property

    defbatch_error(self):

    return self._batch_error

    @batch_error.setter

    defbatch_error(self, batch_error):

    self._batch_error = batch_error

# Business

    # coding: utf-8

    classBusiness(object):

    swagger_types = {

    'address': 'Address',

    'name': 'str',

    'phone': 'str',

    'fax': 'str',

    'web_site': 'str'

    }

    attribute_map = {

    'address': 'Address',

    'name': 'Name',

    'phone': 'Phone',

    'fax': 'Fax',

    'web_site': 'WebSite'

    }

    def__init__(self, address=None, name=None, phone=None, fax=None, web_site=None): # noqa: E501

    """Business - a model defined in Swagger"""# noqa: E501

    self._address = None

    self._name = None

    self._phone = None

    self._fax = None

    self._web_site = None

    self.discriminator = None

    ifaddressisnotNone:

    self.address = address

    ifnameisnotNone:

    self.name = name

    ifphoneisnotNone:

    self.phone = phone

    iffaxisnotNone:

    self.fax = fax

    ifweb_siteisnotNone:

    self.web_site = web_site

    @property

    defaddress(self):

    return self._address

    @address.setter

    defaddress(self, address):

    self._address = address

    @property

    defname(self):

    return self._name

    @name.setter

    defname(self, name):

    self._name = name

    @property

    defphone(self):

    return self._phone

    @phone.setter

    defphone(self, phone):

    self._phone = phone

    @property

    deffax(self):

    return self._fax

    @fax.setter

    deffax(self, fax):

    self._fax = fax

    @property

    defweb_site(self):

    return self._web_site

    @web_site.setter

    defweb_site(self, web_site):

    self._web_site = web_site

# CheckAccountType

    # coding: utf-8

    classCheckAccountType(object):

    UNKNOWN = "Unknown"

    CHECKING = "Checking"

    SAVINGS = "Savings"

    swagger_types = {

    }

    attribute_map = {

    }

    def__init__(self): # noqa: E501

    """CheckAccountType - a model defined in Swagger"""# noqa: E501

    self.discriminator = None

# CheckTransaction

    # coding: utf-8

    classCheckTransaction(object):

    swagger_types = {

    'terminal_id': 'str',

    'account_number': 'str',

    'account_type': 'CheckAccountType',

    'check_number': 'str',

    'routing_number': 'str',

    'micr_data': 'str',

    'first_name': 'str',

    'last_name': 'str',

    'company_name': 'str',

    'address1': 'str',

    'address2': 'str',

    'city': 'str',

    'state': 'str',

    'zip': 'str',

    'phone_number': 'str',

    'dl_number': 'str',

    'dl_state': 'str',

    'courtesy_card_id': 'str',

    'ssn4': 'str',

    'dob_year': 'str',

    'check_amount': 'str',

    'tran_type': 'CheckTransactionType',

    'proc_id': 'str',

    'ip_address': 'str',

    'customer_number': 'str',

    'po_number': 'str',

    'invoice_number': 'str',

    'tran_note': 'str',

    'email_address': 'str',

    'sec_code': 'str',

    'proc_resp': 'str',

    'proc_code': 'str',

    'proc_mess': 'str'

    }

    attribute_map = {

    'terminal_id': 'Terminal_ID',

    'account_number': 'Account_Number',

    'account_type': 'Account_Type',

    'check_number': 'Check_Number',

    'routing_number': 'Routing_Number',

    'micr_data': 'MICR_Data',

    'first_name': 'First_Name',

    'last_name': 'Last_Name',

    'company_name': 'Company_Name',

    'address1': 'Address1',

    'address2': 'Address2',

    'city': 'City',

    'state': 'State',

    'zip': 'Zip',

    'phone_number': 'Phone_Number',

    'dl_number': 'DL_Number',

    'dl_state': 'DL_State',

    'courtesy_card_id': 'Courtesy_Card_ID',

    'ssn4': 'SSN4',

    'dob_year': 'DOB_Year',

    'check_amount': 'Check_Amount',

    'tran_type': 'Tran_Type',

    'proc_id': 'Proc_ID',

    'ip_address': 'IP_Address',

    'customer_number': 'CustomerNumber',

    'po_number': 'PONumber',

    'invoice_number': 'InvoiceNumber',

    'tran_note': 'TranNote',

    'email_address': 'EmailAddress',

    'sec_code': 'SEC_Code',

    'proc_resp': 'Proc_Resp',

    'proc_code': 'Proc_Code',

    'proc_mess': 'Proc_Mess'

    }

    def__init__(self, terminal_id=None, account_number=None, account_type=None, check_number=None, routing_number=None, micr_data=None, first_name=None, last_name=None, company_name=None, address1=None, address2=None, city=None, state=None, zip=None, phone_number=None, dl_number=None, dl_state=None, courtesy_card_id=None, ssn4=None, dob_year=None, check_amount=None, tran_type=None, proc_id=None, ip_address=None, customer_number=None, po_number=None, invoice_number=None, tran_note=None, email_address=None, sec_code=None, proc_resp=None, proc_code=None, proc_mess=None): # noqa: E501

    """CheckTransaction - a model defined in Swagger"""# noqa: E501

    self._terminal_id = None

    self._account_number = None

    self._account_type = None

    self._check_number = None

    self._routing_number = None

    self._micr_data = None

    self._first_name = None

    self._last_name = None

    self._company_name = None

    self._address1 = None

    self._address2 = None

    self._city = None

    self._state = None

    self._zip = None

    self._phone_number = None

    self._dl_number = None

    self._dl_state = None

    self._courtesy_card_id = None

    self._ssn4 = None

    self._dob_year = None

    self._check_amount = None

    self._tran_type = None

    self._proc_id = None

    self._ip_address = None

    self._customer_number = None

    self._po_number = None

    self._invoice_number = None

    self._tran_note = None

    self._email_address = None

    self._sec_code = None

    self._proc_resp = None

    self._proc_code = None

    self._proc_mess = None

    self.discriminator = None

    ifterminal_idisnotNone:

    self.terminal_id = terminal_id

    ifaccount_numberisnotNone:

    self.account_number = account_number

    ifaccount_typeisnotNone:

    self.account_type = account_type

    ifcheck_numberisnotNone:

    self.check_number = check_number

    ifrouting_numberisnotNone:

    self.routing_number = routing_number

    ifmicr_dataisnotNone:

    self.micr_data = micr_data

    iffirst_nameisnotNone:

    self.first_name = first_name

    iflast_nameisnotNone:

    self.last_name = last_name

    ifcompany_nameisnotNone:

    self.company_name = company_name

    ifaddress1isnotNone:

    self.address1 = address1

    ifaddress2isnotNone:

    self.address2 = address2

    ifcityisnotNone:

    self.city = city

    ifstateisnotNone:

    self.state = state

    ifzipisnotNone:

    self.zip = zip

    ifphone_numberisnotNone:

    self.phone_number = phone_number

    ifdl_numberisnotNone:

    self.dl_number = dl_number

    ifdl_stateisnotNone:

    self.dl_state = dl_state

    ifcourtesy_card_idisnotNone:

    self.courtesy_card_id = courtesy_card_id

    ifssn4isnotNone:

    self.ssn4 = ssn4

    ifdob_yearisnotNone:

    self.dob_year = dob_year

    ifcheck_amountisnotNone:

    self.check_amount = check_amount

    iftran_typeisnotNone:

    self.tran_type = tran_type

    ifproc_idisnotNone:

    self.proc_id = proc_id

    ifip_addressisnotNone:

    self.ip_address = ip_address

    ifcustomer_numberisnotNone:

    self.customer_number = customer_number

    ifpo_numberisnotNone:

    self.po_number = po_number

    ifinvoice_numberisnotNone:

    self.invoice_number = invoice_number

    iftran_noteisnotNone:

    self.tran_note = tran_note

    ifemail_addressisnotNone:

    self.email_address = email_address

    ifsec_codeisnotNone:

    self.sec_code = sec_code

    ifproc_respisnotNone:

    self.proc_resp = proc_resp

    ifproc_codeisnotNone:

    self.proc_code = proc_code

    ifproc_messisnotNone:

    self.proc_mess = proc_mess

    @property

    defterminal_id(self):

    return self._terminal_id

    @terminal_id.setter

    defterminal_id(self, terminal_id):

    self._terminal_id = terminal_id

    @property

    defaccount_number(self):

    return self._account_number

    @account_number.setter

    defaccount_number(self, account_number):

    self._account_number = account_number

    @property

    defaccount_type(self):

    return self._account_type

    @account_type.setter

    defaccount_type(self, account_type):

    self._account_type = account_type

    @property

    defcheck_number(self):

    return self._check_number

    @check_number.setter

    defcheck_number(self, check_number):

    self._check_number = check_number

    @property

    defrouting_number(self):

    return self._routing_number

    @routing_number.setter

    defrouting_number(self, routing_number):

    self._routing_number = routing_number

    @property

    defmicr_data(self):

    return self._micr_data

    @micr_data.setter

    defmicr_data(self, micr_data):

    self._micr_data = micr_data

    @property

    deffirst_name(self):

    return self._first_name

    @first_name.setter

    deffirst_name(self, first_name):

    self._first_name = first_name

    @property

    deflast_name(self):

    return self._last_name

    @last_name.setter

    deflast_name(self, last_name):

    self._last_name = last_name

    @property

    defcompany_name(self):

    return self._company_name

    @company_name.setter

    defcompany_name(self, company_name):

    self._company_name = company_name

    @property

    defaddress1(self):

    return self._address1

    @address1.setter

    defaddress1(self, address1):

    self._address1 = address1

    @property

    defaddress2(self):

    return self._address2

    @address2.setter

    defaddress2(self, address2):

    self._address2 = address2

    @property

    defcity(self):

    return self._city

    @city.setter

    defcity(self, city):

    self._city = city

    @property

    defstate(self):

    return self._state

    @state.setter

    defstate(self, state):

    self._state = state

    @property

    defzip(self):

    return self._zip

    @zip.setter

    defzip(self, zip):

    self._zip = zip

    @property

    defphone_number(self):

    return self._phone_number

    @phone_number.setter

    defphone_number(self, phone_number):

    self._phone_number = phone_number

    @property

    defdl_number(self):

    return self._dl_number

    @dl_number.setter

    defdl_number(self, dl_number):

    self._dl_number = dl_number

    @property

    defdl_state(self):

    return self._dl_state

    @dl_state.setter

    defdl_state(self, dl_state):

    self._dl_state = dl_state

    @property

    defcourtesy_card_id(self):

    return self._courtesy_card_id

    @courtesy_card_id.setter

    defcourtesy_card_id(self, courtesy_card_id):

    self._courtesy_card_id = courtesy_card_id

    @property

    defssn4(self):

    return self._ssn4

    @ssn4.setter

    defssn4(self, ssn4):

    self._ssn4 = ssn4

    @property

    defdob_year(self):

    return self._dob_year

    @dob_year.setter

    defdob_year(self, dob_year):

    self._dob_year = dob_year

    @property

    defcheck_amount(self):

    return self._check_amount

    @check_amount.setter

    defcheck_amount(self, check_amount):

    self._check_amount = check_amount

    @property

    deftran_type(self):

    return self._tran_type

    @tran_type.setter

    deftran_type(self, tran_type):

    self._tran_type = tran_type

    @property

    defproc_id(self):

    return self._proc_id

    @proc_id.setter

    defproc_id(self, proc_id):

    self._proc_id = proc_id

    @property

    defip_address(self):

    return self._ip_address

    @ip_address.setter

    defip_address(self, ip_address):

    self._ip_address = ip_address

    @property

    defcustomer_number(self):

    return self._customer_number

    @customer_number.setter

    defcustomer_number(self, customer_number):

    self._customer_number = customer_number

    @property

    defpo_number(self):

    return self._po_number

    @po_number.setter

    defpo_number(self, po_number):

    self._po_number = po_number

    @property

    definvoice_number(self):

    return self._invoice_number

    @invoice_number.setter

    definvoice_number(self, invoice_number):

    self._invoice_number = invoice_number

    @property

    deftran_note(self):

    return self._tran_note

    @tran_note.setter

    deftran_note(self, tran_note):

    self._tran_note = tran_note

    @property

    defemail_address(self):

    return self._email_address

    @email_address.setter

    defemail_address(self, email_address):

    self._email_address = email_address

    @property

    defsec_code(self):

    return self._sec_code

    @sec_code.setter

    defsec_code(self, sec_code):

    self._sec_code = sec_code

    @property

    defproc_resp(self):

    return self._proc_resp

    @proc_resp.setter

    defproc_resp(self, proc_resp):

    self._proc_resp = proc_resp

    @property

    defproc_code(self):

    return self._proc_code

    @proc_code.setter

    defproc_code(self, proc_code):

    self._proc_code = proc_code

    @property

    defproc_mess(self):

    return self._proc_mess

    @proc_mess.setter

    defproc_mess(self, proc_mess):

    self._proc_mess = proc_mess

# CheckTransactionSettings

    # coding: utf-8

    classCheckTransactionSettings(object):

    swagger_types = {

    'reader': 'FieldInfo',

    'contact_name': 'FieldInfo',

    'contact_title': 'FieldInfo',

    'email_address': 'FieldInfo',

    'phone_default': 'str',

    'fax': 'FieldInfo',

    'billing_address_default': 'str',

    'billing_address2': 'FieldInfo',

    'billing_city_default': 'str',

    'billing_state_default': 'str',

    'billing_zip_default': 'str',

    'po_number': 'FieldInfo',

    'invoice_number': 'FieldInfo',

    'business_name': 'FieldInfo',

    'customer_number': 'FieldInfo',

    'reference_note': 'FieldInfo',

    'default_sec_code': 'str'

    }

    attribute_map = {

    'reader': 'Reader',

    'contact_name': 'ContactName',

    'contact_title': 'ContactTitle',

    'email_address': 'EmailAddress',

    'phone_default': 'PhoneDefault',

    'fax': 'Fax',

    'billing_address_default': 'BillingAddressDefault',

    'billing_address2': 'BillingAddress2',

    'billing_city_default': 'BillingCityDefault',

    'billing_state_default': 'BillingStateDefault',

    'billing_zip_default': 'BillingZipDefault',

    'po_number': 'PONumber',

    'invoice_number': 'InvoiceNumber',

    'business_name': 'BusinessName',

    'customer_number': 'CustomerNumber',

    'reference_note': 'ReferenceNote',

    'default_sec_code': 'DefaultSECCode'

    }

    def__init__(self, reader=None, contact_name=None, contact_title=None, email_address=None, phone_default=None, fax=None, billing_address_default=None, billing_address2=None, billing_city_default=None, billing_state_default=None, billing_zip_default=None, po_number=None, invoice_number=None, business_name=None, customer_number=None, reference_note=None, default_sec_code=None): # noqa: E501

    """CheckTransactionSettings - a model defined in Swagger"""# noqa: E501

    self._reader = None

    self._contact_name = None

    self._contact_title = None

    self._email_address = None

    self._phone_default = None

    self._fax = None

    self._billing_address_default = None

    self._billing_address2 = None

    self._billing_city_default = None

    self._billing_state_default = None

    self._billing_zip_default = None

    self._po_number = None

    self._invoice_number = None

    self._business_name = None

    self._customer_number = None

    self._reference_note = None

    self._default_sec_code = None

    self.discriminator = None

    ifreaderisnotNone:

    self.reader = reader

    ifcontact_nameisnotNone:

    self.contact_name = contact_name

    ifcontact_titleisnotNone:

    self.contact_title = contact_title

    ifemail_addressisnotNone:

    self.email_address = email_address

    ifphone_defaultisnotNone:

    self.phone_default = phone_default

    iffaxisnotNone:

    self.fax = fax

    ifbilling_address_defaultisnotNone:

    self.billing_address_default = billing_address_default

    ifbilling_address2isnotNone:

    self.billing_address2 = billing_address2

    ifbilling_city_defaultisnotNone:

    self.billing_city_default = billing_city_default

    ifbilling_state_defaultisnotNone:

    self.billing_state_default = billing_state_default

    ifbilling_zip_defaultisnotNone:

    self.billing_zip_default = billing_zip_default

    ifpo_numberisnotNone:

    self.po_number = po_number

    ifinvoice_numberisnotNone:

    self.invoice_number = invoice_number

    ifbusiness_nameisnotNone:

    self.business_name = business_name

    ifcustomer_numberisnotNone:

    self.customer_number = customer_number

    ifreference_noteisnotNone:

    self.reference_note = reference_note

    ifdefault_sec_codeisnotNone:

    self.default_sec_code = default_sec_code

    @property

    defreader(self):

    return self._reader

    @reader.setter

    defreader(self, reader):

    self._reader = reader

    @property

    defcontact_name(self):

    return self._contact_name

    @contact_name.setter

    defcontact_name(self, contact_name):

    self._contact_name = contact_name

    @property

    defcontact_title(self):

    return self._contact_title

    @contact_title.setter

    defcontact_title(self, contact_title):

    self._contact_title = contact_title

    @property

    defemail_address(self):

    return self._email_address

    @email_address.setter

    defemail_address(self, email_address):

    self._email_address = email_address

    @property

    defphone_default(self):

    return self._phone_default

    @phone_default.setter

    defphone_default(self, phone_default):

    self._phone_default = phone_default

    @property

    deffax(self):

    return self._fax

    @fax.setter

    deffax(self, fax):

    self._fax = fax

    @property

    defbilling_address_default(self):

    return self._billing_address_default

    @billing_address_default.setter

    defbilling_address_default(self, billing_address_default):

    self._billing_address_default = billing_address_default

    @property

    defbilling_address2(self):

    return self._billing_address2

    @billing_address2.setter

    defbilling_address2(self, billing_address2):

    self._billing_address2 = billing_address2

    @property

    defbilling_city_default(self):

    return self._billing_city_default

    @billing_city_default.setter

    defbilling_city_default(self, billing_city_default):

    self._billing_city_default = billing_city_default

    @property

    defbilling_state_default(self):

    return self._billing_state_default

    @billing_state_default.setter

    defbilling_state_default(self, billing_state_default):

    self._billing_state_default = billing_state_default

    @property

    defbilling_zip_default(self):

    return self._billing_zip_default

    @billing_zip_default.setter

    defbilling_zip_default(self, billing_zip_default):

    self._billing_zip_default = billing_zip_default

    @property

    defpo_number(self):

    return self._po_number

    @po_number.setter

    defpo_number(self, po_number):

    self._po_number = po_number

    @property

    definvoice_number(self):

    return self._invoice_number

    @invoice_number.setter

    definvoice_number(self, invoice_number):

    self._invoice_number = invoice_number

    @property

    defbusiness_name(self):

    return self._business_name

    @business_name.setter

    defbusiness_name(self, business_name):

    self._business_name = business_name

    @property

    defcustomer_number(self):

    return self._customer_number

    @customer_number.setter

    defcustomer_number(self, customer_number):

    self._customer_number = customer_number

    @property

    defreference_note(self):

    return self._reference_note

    @reference_note.setter

    defreference_note(self, reference_note):

    self._reference_note = reference_note

    @property

    defdefault_sec_code(self):

    return self._default_sec_code

    @default_sec_code.setter

    defdefault_sec_code(self, default_sec_code):

    self._default_sec_code = default_sec_code

# CheckTransactionType

    # coding: utf-8

    classCheckTransactionType(object):

    UNKNOWN = "Unknown"

    AUTHORIZE = "Authorize"

    void = "void "

    OVERRIDE = "Override"

    PAYROLL = "Payroll"

    RECURRING = "Recurring"

    REFUND = "Refund"

    swagger_types = {

    }

    attribute_map = {

    }

    def__init__(self): # noqa: E501

    """CheckTransactionType - a model defined in Swagger"""# noqa: E501

    self.discriminator = None

# Contact

    # coding: utf-8

    classContact(object):

    swagger_types = {

    'first_name': 'str',

    'last_name': 'str',

    'name': 'str',

    'title': 'str',

    'phone': 'str',

    'email': 'str'

    }

    attribute_map = {

    'first_name': 'FirstName',

    'last_name': 'LastName',

    'name': 'Name',

    'title': 'Title',

    'phone': 'Phone',

    'email': 'Email'

    }

    def__init__(self, first_name=None, last_name=None, name=None, title=None, phone=None, email=None): # noqa: E501

    """Contact - a model defined in Swagger"""# noqa: E501

    self._first_name = None

    self._last_name = None

    self._name = None

    self._title = None

    self._phone = None

    self._email = None

    self.discriminator = None

    iffirst_nameisnotNone:

    self.first_name = first_name

    iflast_nameisnotNone:

    self.last_name = last_name

    ifnameisnotNone:

    self.name = name

    iftitleisnotNone:

    self.title = title

    ifphoneisnotNone:

    self.phone = phone

    ifemailisnotNone:

    self.email = email

    @property

    deffirst_name(self):

    return self._first_name

    @first_name.setter

    deffirst_name(self, first_name):

    self._first_name = first_name

    @property

    deflast_name(self):

    return self._last_name

    @last_name.setter

    deflast_name(self, last_name):

    self._last_name = last_name

    @property

    defname(self):

    return self._name

    @name.setter

    defname(self, name):

    self._name = name

    @property

    deftitle(self):

    return self._title

    @title.setter

    deftitle(self, title):

    self._title = title

    @property

    defphone(self):

    return self._phone

    @phone.setter

    defphone(self, phone):

    self._phone = phone

    @property

    defemail(self):

    return self._email

    @email.setter

    defemail(self, email):

    self._email = email

# CreditCardTransactionSettings

    # coding: utf-8

    classCreditCardTransactionSettings(object):

    swagger_types = {

    'cvv': 'FieldInfo',

    'contact_name': 'FieldInfo',

    'contact_title': 'FieldInfo',

    'email_address': 'FieldInfo',

    'phone': 'FieldInfo',

    'fax': 'FieldInfo',

    'billing_address': 'FieldInfo',

    'billing_address2': 'FieldInfo',

    'billing_city': 'FieldInfo',

    'billing_state': 'FieldInfo',

    'billing_zip': 'FieldInfo',

    'po_number': 'FieldInfo',

    'invoice_number': 'FieldInfo',

    'business_name': 'FieldInfo',

    'customer_number': 'FieldInfo',

    'reference_note': 'FieldInfo',

    'sales_tax': 'FieldInfo',

    'tax_exempt': 'FieldInfo',

    'card_tracks': 'FieldInfo',

    'card_zip': 'FieldInfo',

    'card_address': 'FieldInfo',

    'item_description': 'str',

    'default_transaction_type': 'TransactionType'

    }

    attribute_map = {

    'cvv': 'CVV',

    'contact_name': 'ContactName',

    'contact_title': 'ContactTitle',

    'email_address': 'EmailAddress',

    'phone': 'Phone',

    'fax': 'Fax',

    'billing_address': 'BillingAddress',

    'billing_address2': 'BillingAddress2',

    'billing_city': 'BillingCity',

    'billing_state': 'BillingState',

    'billing_zip': 'BillingZip',

    'po_number': 'PONumber',

    'invoice_number': 'InvoiceNumber',

    'business_name': 'BusinessName',

    'customer_number': 'CustomerNumber',

    'reference_note': 'ReferenceNote',

    'sales_tax': 'SalesTax',

    'tax_exempt': 'TaxExempt',

    'card_tracks': 'CardTracks',

    'card_zip': 'CardZip',

    'card_address': 'CardAddress',

    'item_description': 'ItemDescription',

    'default_transaction_type': 'DefaultTransactionType'

    }

    def__init__(self, cvv=None, contact_name=None, contact_title=None, email_address=None, phone=None, fax=None, billing_address=None, billing_address2=None, billing_city=None, billing_state=None, billing_zip=None, po_number=None, invoice_number=None, business_name=None, customer_number=None, reference_note=None, sales_tax=None, tax_exempt=None, card_tracks=None, card_zip=None, card_address=None, item_description=None, default_transaction_type=None): # noqa: E501

    """CreditCardTransactionSettings - a model defined in Swagger"""# noqa: E501

    self._cvv = None

    self._contact_name = None

    self._contact_title = None

    self._email_address = None

    self._phone = None

    self._fax = None

    self._billing_address = None

    self._billing_address2 = None

    self._billing_city = None

    self._billing_state = None

    self._billing_zip = None

    self._po_number = None

    self._invoice_number = None

    self._business_name = None

    self._customer_number = None

    self._reference_note = None

    self._sales_tax = None

    self._tax_exempt = None

    self._card_tracks = None

    self._card_zip = None

    self._card_address = None

    self._item_description = None

    self._default_transaction_type = None

    self.discriminator = None

    ifcvvisnotNone:

    self.cvv = cvv

    ifcontact_nameisnotNone:

    self.contact_name = contact_name

    ifcontact_titleisnotNone:

    self.contact_title = contact_title

    ifemail_addressisnotNone:

    self.email_address = email_address

    ifphoneisnotNone:

    self.phone = phone

    iffaxisnotNone:

    self.fax = fax

    ifbilling_addressisnotNone:

    self.billing_address = billing_address

    ifbilling_address2isnotNone:

    self.billing_address2 = billing_address2

    ifbilling_cityisnotNone:

    self.billing_city = billing_city

    ifbilling_stateisnotNone:

    self.billing_state = billing_state

    ifbilling_zipisnotNone:

    self.billing_zip = billing_zip

    ifpo_numberisnotNone:

    self.po_number = po_number

    ifinvoice_numberisnotNone:

    self.invoice_number = invoice_number

    ifbusiness_nameisnotNone:

    self.business_name = business_name

    ifcustomer_numberisnotNone:

    self.customer_number = customer_number

    ifreference_noteisnotNone:

    self.reference_note = reference_note

    ifsales_taxisnotNone:

    self.sales_tax = sales_tax

    iftax_exemptisnotNone:

    self.tax_exempt = tax_exempt

    ifcard_tracksisnotNone:

    self.card_tracks = card_tracks

    ifcard_zipisnotNone:

    self.card_zip = card_zip

    ifcard_addressisnotNone:

    self.card_address = card_address

    ifitem_descriptionisnotNone:

    self.item_description = item_description

    ifdefault_transaction_typeisnotNone:

    self.default_transaction_type = default_transaction_type

    @property

    defcvv(self):

    return self._cvv

    @cvv.setter

    defcvv(self, cvv):

    self._cvv = cvv

    @property

    defcontact_name(self):

    return self._contact_name

    @contact_name.setter

    defcontact_name(self, contact_name):

    self._contact_name = contact_name

    @property

    defcontact_title(self):

    return self._contact_title

    @contact_title.setter

    defcontact_title(self, contact_title):

    self._contact_title = contact_title

    @property

    defemail_address(self):

    return self._email_address

    @email_address.setter

    defemail_address(self, email_address):

    self._email_address = email_address

    @property

    defphone(self):

    return self._phone

    @phone.setter

    defphone(self, phone):

    self._phone = phone

    @property

    deffax(self):

    return self._fax

    @fax.setter

    deffax(self, fax):

    self._fax = fax

    @property

    defbilling_address(self):

    return self._billing_address

    @billing_address.setter

    defbilling_address(self, billing_address):

    self._billing_address = billing_address

    @property

    defbilling_address2(self):

    return self._billing_address2

    @billing_address2.setter

    defbilling_address2(self, billing_address2):

    self._billing_address2 = billing_address2

    @property

    defbilling_city(self):

    return self._billing_city

    @billing_city.setter

    defbilling_city(self, billing_city):

    self._billing_city = billing_city

    @property

    defbilling_state(self):

    return self._billing_state

    @billing_state.setter

    defbilling_state(self, billing_state):

    self._billing_state = billing_state

    @property

    defbilling_zip(self):

    return self._billing_zip

    @billing_zip.setter

    defbilling_zip(self, billing_zip):

    self._billing_zip = billing_zip

    @property

    defpo_number(self):

    return self._po_number

    @po_number.setter

    defpo_number(self, po_number):

    self._po_number = po_number

    @property

    definvoice_number(self):

    return self._invoice_number

    @invoice_number.setter

    definvoice_number(self, invoice_number):

    self._invoice_number = invoice_number

    @property

    defbusiness_name(self):

    return self._business_name

    @business_name.setter

    defbusiness_name(self, business_name):

    self._business_name = business_name

    @property

    defcustomer_number(self):

    return self._customer_number

    @customer_number.setter

    defcustomer_number(self, customer_number):

    self._customer_number = customer_number

    @property

    defreference_note(self):

    return self._reference_note

    @reference_note.setter

    defreference_note(self, reference_note):

    self._reference_note = reference_note

    @property

    defsales_tax(self):

    return self._sales_tax

    @sales_tax.setter

    defsales_tax(self, sales_tax):

    self._sales_tax = sales_tax

    @property

    deftax_exempt(self):

    return self._tax_exempt

    @tax_exempt.setter

    deftax_exempt(self, tax_exempt):

    self._tax_exempt = tax_exempt

    @property

    defcard_tracks(self):

    return self._card_tracks

    @card_tracks.setter

    defcard_tracks(self, card_tracks):

    self._card_tracks = card_tracks

    @property

    defcard_zip(self):

    return self._card_zip

    @card_zip.setter

    defcard_zip(self, card_zip):

    self._card_zip = card_zip

    @property

    defcard_address(self):

    return self._card_address

    @card_address.setter

    defcard_address(self, card_address):

    self._card_address = card_address

    @property

    defitem_description(self):

    return self._item_description

    @item_description.setter

    defitem_description(self, item_description):

    self._item_description = item_description

    @property

    defdefault_transaction_type(self):

    return self._default_transaction_type

    @default_transaction_type.setter

    defdefault_transaction_type(self, default_transaction_type):

    self._default_transaction_type = default_transaction_type

# CVVPresenceType

    # coding: utf-8

    classCVVPresenceType(object):

    NORMAL = "Normal"

    BYPASS = "Bypass"

    ILLEGIBLE = "Illegible"

    NOTAVAILABLE = "NotAvailable"

    swagger_types = {

    }

    attribute_map = {

    }

    def__init__(self): # noqa: E501

    """CVVPresenceType - a model defined in Swagger"""# noqa: E501

    self.discriminator = None

# EmailReceipt

    # coding: utf-8

    classEmailReceipt(object):

    swagger_types = {

    'transaction_id': 'str',

    'to_addresses': 'str',

    'subject': 'str',

    'header': 'str',

    'footer': 'str'

    }

    attribute_map = {

    'transaction_id': 'TransactionID',

    'to_addresses': 'ToAddresses',

    'subject': 'Subject',

    'header': 'Header',

    'footer': 'Footer'

    }

    def__init__(self, transaction_id=None, to_addresses=None, subject=None, header=None, footer=None): # noqa: E501

    """EmailReceipt - a model defined in Swagger"""# noqa: E501

    self._transaction_id = None

    self._to_addresses = None

    self._subject = None

    self._header = None

    self._footer = None

    self.discriminator = None

    iftransaction_idisnotNone:

    self.transaction_id = transaction_id

    ifto_addressesisnotNone:

    self.to_addresses = to_addresses

    ifsubjectisnotNone:

    self.subject = subject

    ifheaderisnotNone:

    self.header = header

    iffooterisnotNone:

    self.footer = footer

    @property

    deftransaction_id(self):

    return self._transaction_id

    @transaction_id.setter

    deftransaction_id(self, transaction_id):

    self._transaction_id = transaction_id

    @property

    defto_addresses(self):

    return self._to_addresses

    @to_addresses.setter

    defto_addresses(self, to_addresses):

    self._to_addresses = to_addresses

    @property

    defsubject(self):

    return self._subject

    @subject.setter

    defsubject(self, subject):

    self._subject = subject

    @property

    defheader(self):

    return self._header

    @header.setter

    defheader(self, header):

    self._header = header

    @property

    deffooter(self):

    return self._footer

    @footer.setter

    deffooter(self, footer):

    self._footer = footer

# FieldAccess

    # coding: utf-8

    classFieldAccess(object):

    DISABLED = "Disabled"

    ENABLED = "Enabled"

    REQUIRED = "Required"

    swagger_types = {

    }

    attribute_map = {

    }

    def__init__(self): # noqa: E501

    """FieldAccess - a model defined in Swagger"""# noqa: E501

    self.discriminator = None

# FieldInfo

    # coding: utf-8

    classFieldInfo(object):

    swagger_types = {

    'access': 'FieldAccess',

    'default': 'str'

    }

    attribute_map = {

    'access': 'Access',

    'default': 'Default'

    }

    def__init__(self, access=None, default=None): # noqa: E501

    """FieldInfo - a model defined in Swagger"""# noqa: E501

    self._access = None

    self._default = None

    self.discriminator = None

    ifaccessisnotNone:

    self.access = access

    ifdefaultisnotNone:

    self.default = default

    @property

    defaccess(self):

    return self._access

    @access.setter

    defaccess(self, access):

    self._access = access

    @property

    defdefault(self):

    return self._default

    @default.setter

    defdefault(self, default):

    self._default = default

# QueryTransaction

    # coding: utf-8

    classQueryTransaction(object):

    swagger_types = {

    'tran_sequence': 'str',

    'tran_batch': 'str',

    'tran_modified': 'str',

    'tran_processed': 'str',

    'tran_settled': 'str',

    'submit_time': 'str',

    'tran_type': 'str',

    'tran_amt': 'float',

    'tran_tax': 'float',

    'tran_inv': 'str',

    'tran_po': 'str',

    'tran_c_num': 'str',

    'tran_note': 'str',

    'card_num': 'str',

    'card_name': 'str',

    'card_exp': 'str',

    'avs_street': 'str',

    'avs_zip': 'str',

    'cvv_num': 'str',

    'proc_id': 'str',

    'proc_resp': 'str',

    'proc_code': 'str',

    'proc_mess': 'str',

    'avs_code': 'str',

    'avs_resp': 'str',

    'cvv_code': 'str',

    'cvv_resp': 'str',

    'items': 'list[TransactionItem]',

    'business_name': 'str',

    'business_address': 'str',

    'business_address2': 'str',

    'business_city': 'str',

    'business_state': 'str',

    'business_zip': 'str',

    'business_country': 'str',

    'business_website': 'str',

    'contact_first_name': 'str',

    'contact_last_name': 'str',

    'contact_phone': 'str',

    'contact_fax': 'str',

    'contact_email': 'str',

    'contact_title': 'str',

    'ip': 'str',

    'tax_exempt': 'bool'

    }

    attribute_map = {

    'tran_sequence': 'Tran_Sequence',

    'tran_batch': 'Tran_Batch',

    'tran_modified': 'Tran_Modified',

    'tran_processed': 'Tran_Processed',

    'tran_settled': 'Tran_Settled',

    'submit_time': 'Submit_Time',

    'tran_type': 'Tran_Type',

    'tran_amt': 'Tran_Amt',

    'tran_tax': 'Tran_Tax',

    'tran_inv': 'Tran_Inv',

    'tran_po': 'Tran_PO',

    'tran_c_num': 'Tran_CNum',

    'tran_note': 'Tran_Note',

    'card_num': 'Card_Num',

    'card_name': 'Card_Name',

    'card_exp': 'Card_Exp',

    'avs_street': 'AVS_Street',

    'avs_zip': 'AVS_Zip',

    'cvv_num': 'CVV_Num',

    'proc_id': 'Proc_ID',

    'proc_resp': 'Proc_Resp',

    'proc_code': 'Proc_Code',

    'proc_mess': 'Proc_Mess',

    'avs_code': 'AVS_Code',

    'avs_resp': 'AVS_Resp',

    'cvv_code': 'CVV_Code',

    'cvv_resp': 'CVV_Resp',

    'items': 'Items',

    'business_name': 'Business_Name',

    'business_address': 'Business_Address',

    'business_address2': 'Business_Address2',

    'business_city': 'Business_City',

    'business_state': 'Business_State',

    'business_zip': 'Business_Zip',

    'business_country': 'Business_Country',

    'business_website': 'Business_Website',

    'contact_first_name': 'Contact_FirstName',

    'contact_last_name': 'Contact_LastName',

    'contact_phone': 'Contact_Phone',

    'contact_fax': 'Contact_Fax',

    'contact_email': 'Contact_Email',

    'contact_title': 'Contact_Title',

    'ip': 'IP',

    'tax_exempt': 'TaxExempt'

    }

    def__init__(self, tran_sequence=None, tran_batch=None, tran_modified=None, tran_processed=None, tran_settled=None, submit_time=None, tran_type=None, tran_amt=None, tran_tax=None, tran_inv=None, tran_po=None, tran_c_num=None, tran_note=None, card_num=None, card_name=None, card_exp=None, avs_street=None, avs_zip=None, cvv_num=None, proc_id=None, proc_resp=None, proc_code=None, proc_mess=None, avs_code=None, avs_resp=None, cvv_code=None, cvv_resp=None, items=None, business_name=None, business_address=None, business_address2=None, business_city=None, business_state=None, business_zip=None, business_country=None, business_website=None, contact_first_name=None, contact_last_name=None, contact_phone=None, contact_fax=None, contact_email=None, contact_title=None, ip=None, tax_exempt=None): # noqa: E501

    """QueryTransaction - a model defined in Swagger"""# noqa: E501

    self._tran_sequence = None

    self._tran_batch = None

    self._tran_modified = None

    self._tran_processed = None

    self._tran_settled = None

    self._submit_time = None

    self._tran_type = None

    self._tran_amt = None

    self._tran_tax = None

    self._tran_inv = None

    self._tran_po = None

    self._tran_c_num = None

    self._tran_note = None

    self._card_num = None

    self._card_name = None

    self._card_exp = None

    self._avs_street = None

    self._avs_zip = None

    self._cvv_num = None

    self._proc_id = None

    self._proc_resp = None

    self._proc_code = None

    self._proc_mess = None

    self._avs_code = None

    self._avs_resp = None

    self._cvv_code = None

    self._cvv_resp = None

    self._items = None

    self._business_name = None

    self._business_address = None

    self._business_address2 = None

    self._business_city = None

    self._business_state = None

    self._business_zip = None

    self._business_country = None

    self._business_website = None

    self._contact_first_name = None

    self._contact_last_name = None

    self._contact_phone = None

    self._contact_fax = None

    self._contact_email = None

    self._contact_title = None

    self._ip = None

    self._tax_exempt = None

    self.discriminator = None

    iftran_sequenceisnotNone:

    self.tran_sequence = tran_sequence

    iftran_batchisnotNone:

    self.tran_batch = tran_batch

    iftran_modifiedisnotNone:

    self.tran_modified = tran_modified

    iftran_processedisnotNone:

    self.tran_processed = tran_processed

    iftran_settledisnotNone:

    self.tran_settled = tran_settled

    ifsubmit_timeisnotNone:

    self.submit_time = submit_time

    iftran_typeisnotNone:

    self.tran_type = tran_type

    iftran_amtisnotNone:

    self.tran_amt = tran_amt

    iftran_taxisnotNone:

    self.tran_tax = tran_tax

    iftran_invisnotNone:

    self.tran_inv = tran_inv

    iftran_poisnotNone:

    self.tran_po = tran_po

    iftran_c_numisnotNone:

    self.tran_c_num = tran_c_num

    iftran_noteisnotNone:

    self.tran_note = tran_note

    ifcard_numisnotNone:

    self.card_num = card_num

    ifcard_nameisnotNone:

    self.card_name = card_name

    ifcard_expisnotNone:

    self.card_exp = card_exp

    ifavs_streetisnotNone:

    self.avs_street = avs_street

    ifavs_zipisnotNone:

    self.avs_zip = avs_zip

    ifcvv_numisnotNone:

    self.cvv_num = cvv_num

    ifproc_idisnotNone:

    self.proc_id = proc_id

    ifproc_respisnotNone:

    self.proc_resp = proc_resp

    ifproc_codeisnotNone:

    self.proc_code = proc_code

    ifproc_messisnotNone:

    self.proc_mess = proc_mess

    ifavs_codeisnotNone:

    self.avs_code = avs_code

    ifavs_respisnotNone:

    self.avs_resp = avs_resp

    ifcvv_codeisnotNone:

    self.cvv_code = cvv_code

    ifcvv_respisnotNone:

    self.cvv_resp = cvv_resp

    ifitemsisnotNone:

    self.items = items

    ifbusiness_nameisnotNone:

    self.business_name = business_name

    ifbusiness_addressisnotNone:

    self.business_address = business_address

    ifbusiness_address2isnotNone:

    self.business_address2 = business_address2

    ifbusiness_cityisnotNone:

    self.business_city = business_city

    ifbusiness_stateisnotNone:

    self.business_state = business_state

    ifbusiness_zipisnotNone:

    self.business_zip = business_zip

    ifbusiness_countryisnotNone:

    self.business_country = business_country

    ifbusiness_websiteisnotNone:

    self.business_website = business_website

    ifcontact_first_nameisnotNone:

    self.contact_first_name = contact_first_name

    ifcontact_last_nameisnotNone:

    self.contact_last_name = contact_last_name

    ifcontact_phoneisnotNone:

    self.contact_phone = contact_phone

    ifcontact_faxisnotNone:

    self.contact_fax = contact_fax

    ifcontact_emailisnotNone:

    self.contact_email = contact_email

    ifcontact_titleisnotNone:

    self.contact_title = contact_title

    ifipisnotNone:

    self.ip = ip

    iftax_exemptisnotNone:

    self.tax_exempt = tax_exempt

    @property

    deftran_sequence(self):

    return self._tran_sequence

    @tran_sequence.setter

    deftran_sequence(self, tran_sequence):

    self._tran_sequence = tran_sequence

    @property

    deftran_batch(self):

    return self._tran_batch

    @tran_batch.setter

    deftran_batch(self, tran_batch):

    self._tran_batch = tran_batch

    @property

    deftran_modified(self):

    return self._tran_modified

    @tran_modified.setter

    deftran_modified(self, tran_modified):

    self._tran_modified = tran_modified

    @property

    deftran_processed(self):

    return self._tran_processed

    @tran_processed.setter

    deftran_processed(self, tran_processed):

    self._tran_processed = tran_processed

    @property

    deftran_settled(self):

    return self._tran_settled

    @tran_settled.setter

    deftran_settled(self, tran_settled):

    self._tran_settled = tran_settled

    @property

    defsubmit_time(self):

    return self._submit_time

    @submit_time.setter

    defsubmit_time(self, submit_time):

    self._submit_time = submit_time

    @property

    deftran_type(self):

    return self._tran_type

    @tran_type.setter

    deftran_type(self, tran_type):

    self._tran_type = tran_type

    @property

    deftran_amt(self):

    return self._tran_amt

    @tran_amt.setter

    deftran_amt(self, tran_amt):

    self._tran_amt = tran_amt

    @property

    deftran_tax(self):

    return self._tran_tax

    @tran_tax.setter

    deftran_tax(self, tran_tax):

    self._tran_tax = tran_tax

    @property

    deftran_inv(self):

    return self._tran_inv

    @tran_inv.setter

    deftran_inv(self, tran_inv):

    self._tran_inv = tran_inv

    @property

    deftran_po(self):

    return self._tran_po

    @tran_po.setter

    deftran_po(self, tran_po):

    self._tran_po = tran_po

    @property

    deftran_c_num(self):

    return self._tran_c_num

    @tran_c_num.setter

    deftran_c_num(self, tran_c_num):

    self._tran_c_num = tran_c_num

    @property

    deftran_note(self):

    return self._tran_note

    @tran_note.setter

    deftran_note(self, tran_note):

    self._tran_note = tran_note

    @property

    defcard_num(self):

    return self._card_num

    @card_num.setter

    defcard_num(self, card_num):

    self._card_num = card_num

    @property

    defcard_name(self):

    return self._card_name

    @card_name.setter

    defcard_name(self, card_name):

    self._card_name = card_name

    @property

    defcard_exp(self):

    return self._card_exp

    @card_exp.setter

    defcard_exp(self, card_exp):

    self._card_exp = card_exp

    @property

    defavs_street(self):

    return self._avs_street

    @avs_street.setter

    defavs_street(self, avs_street):

    self._avs_street = avs_street

    @property

    defavs_zip(self):

    return self._avs_zip

    @avs_zip.setter

    defavs_zip(self, avs_zip):

    self._avs_zip = avs_zip

    @property

    defcvv_num(self):

    return self._cvv_num

    @cvv_num.setter

    defcvv_num(self, cvv_num):

    self._cvv_num = cvv_num

    @property

    defproc_id(self):

    return self._proc_id

    @proc_id.setter

    defproc_id(self, proc_id):

    self._proc_id = proc_id

    @property

    defproc_resp(self):

    return self._proc_resp

    @proc_resp.setter

    defproc_resp(self, proc_resp):

    self._proc_resp = proc_resp

    @property

    defproc_code(self):

    return self._proc_code

    @proc_code.setter

    defproc_code(self, proc_code):

    self._proc_code = proc_code

    @property

    defproc_mess(self):

    return self._proc_mess

    @proc_mess.setter

    defproc_mess(self, proc_mess):

    self._proc_mess = proc_mess

    @property

    defavs_code(self):

    return self._avs_code

    @avs_code.setter

    defavs_code(self, avs_code):

    self._avs_code = avs_code

    @property

    defavs_resp(self):

    return self._avs_resp

    @avs_resp.setter

    defavs_resp(self, avs_resp):

    self._avs_resp = avs_resp

    @property

    defcvv_code(self):

    return self._cvv_code

    @cvv_code.setter

    defcvv_code(self, cvv_code):

    self._cvv_code = cvv_code

    @property

    defcvv_resp(self):

    return self._cvv_resp

    @cvv_resp.setter

    defcvv_resp(self, cvv_resp):

    self._cvv_resp = cvv_resp

    @property

    defitems(self):

    return self._items

    @items.setter

    defitems(self, items):

    self._items = items

    @property

    defbusiness_name(self):

    return self._business_name

    @business_name.setter

    defbusiness_name(self, business_name):

    self._business_name = business_name

    @property

    defbusiness_address(self):

    return self._business_address

    @business_address.setter

    defbusiness_address(self, business_address):

    self._business_address = business_address

    @property

    defbusiness_address2(self):

    return self._business_address2

    @business_address2.setter

    defbusiness_address2(self, business_address2):

    self._business_address2 = business_address2

    @property

    defbusiness_city(self):

    return self._business_city

    @business_city.setter

    defbusiness_city(self, business_city):

    self._business_city = business_city

    @property

    defbusiness_state(self):

    return self._business_state

    @business_state.setter

    defbusiness_state(self, business_state):

    self._business_state = business_state

    @property

    defbusiness_zip(self):

    return self._business_zip

    @business_zip.setter

    defbusiness_zip(self, business_zip):

    self._business_zip = business_zip

    @property

    defbusiness_country(self):

    return self._business_country

    @business_country.setter

    defbusiness_country(self, business_country):

    self._business_country = business_country

    @property

    defbusiness_website(self):

    return self._business_website

    @business_website.setter

    defbusiness_website(self, business_website):

    self._business_website = business_website

    @property

    defcontact_first_name(self):

    return self._contact_first_name

    @contact_first_name.setter

    defcontact_first_name(self, contact_first_name):

    self._contact_first_name = contact_first_name

    @property

    defcontact_last_name(self):

    return self._contact_last_name

    @contact_last_name.setter

    defcontact_last_name(self, contact_last_name):

    self._contact_last_name = contact_last_name

    @property

    defcontact_phone(self):

    return self._contact_phone

    @contact_phone.setter

    defcontact_phone(self, contact_phone):

    self._contact_phone = contact_phone

    @property

    defcontact_fax(self):

    return self._contact_fax

    @contact_fax.setter

    defcontact_fax(self, contact_fax):

    self._contact_fax = contact_fax

    @property

    defcontact_email(self):

    return self._contact_email

    @contact_email.setter

    defcontact_email(self, contact_email):

    self._contact_email = contact_email

    @property

    defcontact_title(self):

    return self._contact_title

    @contact_title.setter

    defcontact_title(self, contact_title):

    self._contact_title = contact_title

    @property

    defip(self):

    return self._ip

    @ip.setter

    defip(self, ip):

    self._ip = ip

    @property

    deftax_exempt(self):

    return self._tax_exempt

    @tax_exempt.setter

    deftax_exempt(self, tax_exempt):

    self._tax_exempt = tax_exempt

# Receipt

    # coding: utf-8

    classReceipt(object):

    swagger_types = {

    'header': 'ReceiptCustomLines',

    'footer': 'ReceiptCustomLines'

    }

    attribute_map = {

    'header': 'Header',

    'footer': 'Footer'

    }

    def__init__(self, header=None, footer=None): # noqa: E501

    """Receipt - a model defined in Swagger"""# noqa: E501

    self._header = None

    self._footer = None

    self.discriminator = None

    ifheaderisnotNone:

    self.header = header

    iffooterisnotNone:

    self.footer = footer

    @property

    defheader(self):

    return self._header

    @header.setter

    defheader(self, header):

    self._header = header

    @property

    deffooter(self):

    return self._footer

    @footer.setter

    deffooter(self, footer):

    self._footer = footer

# ReceiptCustomLines

    # coding: utf-8

    classReceiptCustomLines(object):

    swagger_types = {

    'custom_line1': 'str',

    'custom_line2': 'str',

    'custom_line3': 'str',

    'custom_line4': 'str'

    }

    attribute_map = {

    'custom_line1': 'CustomLine1',

    'custom_line2': 'CustomLine2',

    'custom_line3': 'CustomLine3',

    'custom_line4': 'CustomLine4'

    }

    def__init__(self, custom_line1=None, custom_line2=None, custom_line3=None, custom_line4=None): # noqa: E501

    """ReceiptCustomLines - a model defined in Swagger"""# noqa: E501

    self._custom_line1 = None

    self._custom_line2 = None

    self._custom_line3 = None

    self._custom_line4 = None

    self.discriminator = None

    ifcustom_line1isnotNone:

    self.custom_line1 = custom_line1

    ifcustom_line2isnotNone:

    self.custom_line2 = custom_line2

    ifcustom_line3isnotNone:

    self.custom_line3 = custom_line3

    ifcustom_line4isnotNone:

    self.custom_line4 = custom_line4

    @property

    defcustom_line1(self):

    return self._custom_line1

    @custom_line1.setter

    defcustom_line1(self, custom_line1):

    self._custom_line1 = custom_line1

    @property

    defcustom_line2(self):

    return self._custom_line2

    @custom_line2.setter

    defcustom_line2(self, custom_line2):

    self._custom_line2 = custom_line2

    @property

    defcustom_line3(self):

    return self._custom_line3

    @custom_line3.setter

    defcustom_line3(self, custom_line3):

    self._custom_line3 = custom_line3

    @property

    defcustom_line4(self):

    return self._custom_line4

    @custom_line4.setter

    defcustom_line4(self, custom_line4):

    self._custom_line4 = custom_line4

# Record

    # coding: utf-8

    classRecord(object):

    swagger_types = {

    'response': 'Response',

    'id': 'int',

    'reference': 'str',

    'business': 'Business',

    'contact': 'Contact',

    'po': 'str',

    'invoice': 'str',

    'customer': 'str',

    'tax_exempt': 'bool',

    'note': 'str',

    'credit_cards': 'list[VaultCreditCard]',

    'checks': 'list[VaultCheck]'

    }

    attribute_map = {

    'response': 'Response',

    'id': 'ID',

    'reference': 'Reference',

    'business': 'Business',

    'contact': 'Contact',

    'po': 'PO',

    'invoice': 'Invoice',

    'customer': 'Customer',

    'tax_exempt': 'TaxExempt',

    'note': 'Note',

    'credit_cards': 'CreditCards',

    'checks': 'Checks'

    }

    def__init__(self, response=None, id=None, reference=None, business=None, contact=None, po=None, invoice=None, customer=None, tax_exempt=None, note=None, credit_cards=None, checks=None): # noqa: E501

    """Record - a model defined in Swagger"""# noqa: E501

    self._response = None

    self._id = None

    self._reference = None

    self._business = None

    self._contact = None

    self._po = None

    self._invoice = None

    self._customer = None

    self._tax_exempt = None

    self._note = None

    self._credit_cards = None

    self._checks = None

    self.discriminator = None

    ifresponseisnotNone:

    self.response = response

    ifidisnotNone:

    self.id = id

    ifreferenceisnotNone:

    self.reference = reference

    ifbusinessisnotNone:

    self.business = business

    ifcontactisnotNone:

    self.contact = contact

    ifpoisnotNone:

    self.po = po

    ifinvoiceisnotNone:

    self.invoice = invoice

    ifcustomerisnotNone:

    self.customer = customer

    iftax_exemptisnotNone:

    self.tax_exempt = tax_exempt

    ifnoteisnotNone:

    self.note = note

    ifcredit_cardsisnotNone:

    self.credit_cards = credit_cards

    ifchecksisnotNone:

    self.checks = checks

    @property

    defresponse(self):

    return self._response

    @response.setter

    defresponse(self, response):

    self._response = response

    @property

    defid(self):

    return self._id

    @id.setter

    defid(self, id):

    self._id = id

    @property

    defreference(self):

    return self._reference

    @reference.setter

    defreference(self, reference):

    self._reference = reference

    @property

    defbusiness(self):

    return self._business

    @business.setter

    defbusiness(self, business):

    self._business = business

    @property

    defcontact(self):

    return self._contact

    @contact.setter

    defcontact(self, contact):

    self._contact = contact

    @property

    defpo(self):

    return self._po

    @po.setter

    defpo(self, po):

    self._po = po

    @property

    definvoice(self):

    return self._invoice

    @invoice.setter

    definvoice(self, invoice):

    self._invoice = invoice

    @property

    defcustomer(self):

    return self._customer

    @customer.setter

    defcustomer(self, customer):

    self._customer = customer

    @property

    deftax_exempt(self):

    return self._tax_exempt

    @tax_exempt.setter

    deftax_exempt(self, tax_exempt):

    self._tax_exempt = tax_exempt

    @property

    defnote(self):

    return self._note

    @note.setter

    defnote(self, note):

    self._note = note

    @property

    defcredit_cards(self):

    return self._credit_cards

    @credit_cards.setter

    defcredit_cards(self, credit_cards):

    self._credit_cards = credit_cards

    @property

    defchecks(self):

    return self._checks

    @checks.setter

    defchecks(self, checks):

    self._checks = checks

# Response

    # coding: utf-8

    classResponse(object):

    swagger_types = {

    'error': 'bool',

    'message': 'str'

    }

    attribute_map = {

    'error': 'Error',

    'message': 'Message'

    }

    def__init__(self, error=None, message=None): # noqa: E501

    """Response - a model defined in Swagger"""# noqa: E501

    self._error = None

    self._message = None

    self.discriminator = None

    iferrorisnotNone:

    self.error = error

    ifmessageisnotNone:

    self.message = message

    @property

    deferror(self):

    return self._error

    @error.setter

    deferror(self, error):

    self._error = error

    @property

    defmessage(self):

    return self._message

    @message.setter

    defmessage(self, message):

    self._message = message

# SearchVault

    # coding: utf-8

    classSearchVault(object):

    swagger_types = {

    'reference': 'str',

    'business_name': 'str',

    'first_name': 'str',

    'last_name': 'str'

    }

    attribute_map = {

    'reference': 'Reference',

    'business_name': 'BusinessName',

    'first_name': 'FirstName',

    'last_name': 'LastName'

    }

    def__init__(self, reference=None, business_name=None, first_name=None, last_name=None): # noqa: E501

    """SearchVault - a model defined in Swagger"""# noqa: E501

    self._reference = None

    self._business_name = None

    self._first_name = None

    self._last_name = None

    self.discriminator = None

    ifreferenceisnotNone:

    self.reference = reference

    ifbusiness_nameisnotNone:

    self.business_name = business_name

    iffirst_nameisnotNone:

    self.first_name = first_name

    iflast_nameisnotNone:

    self.last_name = last_name

    @property

    defreference(self):

    return self._reference

    @reference.setter

    defreference(self, reference):

    self._reference = reference

    @property

    defbusiness_name(self):

    return self._business_name

    @business_name.setter

    defbusiness_name(self, business_name):

    self._business_name = business_name

    @property

    deffirst_name(self):

    return self._first_name

    @first_name.setter

    deffirst_name(self, first_name):

    self._first_name = first_name

    @property

    deflast_name(self):

    return self._last_name

    @last_name.setter

    deflast_name(self, last_name):

    self._last_name = last_name

# Settings

    # coding: utf-8

    classSettings(object):

    swagger_types = {

    'credit_card_transaction_settings': 'CreditCardTransactionSettings',

    'check_transaction_settings': 'CheckTransactionSettings',

    'business': 'Business',

    'main_contact': 'Contact',

    'receipt40': 'Receipt',

    'receipt80': 'Receipt',

    'print_signature_line': 'bool',

    'response': 'Response',

    'account_id': 'str',

    'copy_email_receipt': 'FieldInfo'

    }

    attribute_map = {

    'credit_card_transaction_settings': 'CreditCardTransactionSettings',

    'check_transaction_settings': 'CheckTransactionSettings',

    'business': 'Business',

    'main_contact': 'MainContact',

    'receipt40': 'Receipt40',

    'receipt80': 'Receipt80',

    'print_signature_line': 'PrintSignatureLine',

    'response': 'Response',

    'account_id': 'AccountID',

    'copy_email_receipt': 'CopyEmailReceipt'

    }

    def__init__(self, credit_card_transaction_settings=None, check_transaction_settings=None, business=None, main_contact=None, receipt40=None, receipt80=None, print_signature_line=None, response=None, account_id=None, copy_email_receipt=None): # noqa: E501

    """Settings - a model defined in Swagger"""# noqa: E501

    self._credit_card_transaction_settings = None

    self._check_transaction_settings = None

    self._business = None

    self._main_contact = None

    self._receipt40 = None

    self._receipt80 = None

    self._print_signature_line = None

    self._response = None

    self._account_id = None

    self._copy_email_receipt = None

    self.discriminator = None

    ifcredit_card_transaction_settingsisnotNone:

    self.credit_card_transaction_settings = credit_card_transaction_settings

    ifcheck_transaction_settingsisnotNone:

    self.check_transaction_settings = check_transaction_settings

    ifbusinessisnotNone:

    self.business = business

    ifmain_contactisnotNone:

    self.main_contact = main_contact

    ifreceipt40isnotNone:

    self.receipt40 = receipt40

    ifreceipt80isnotNone:

    self.receipt80 = receipt80

    ifprint_signature_lineisnotNone:

    self.print_signature_line = print_signature_line

    ifresponseisnotNone:

    self.response = response

    ifaccount_idisnotNone:

    self.account_id = account_id

    ifcopy_email_receiptisnotNone:

    self.copy_email_receipt = copy_email_receipt

    @property

    defcredit_card_transaction_settings(self):

    return self._credit_card_transaction_settings

    @credit_card_transaction_settings.setter

    defcredit_card_transaction_settings(self, credit_card_transaction_settings):

    self._credit_card_transaction_settings = credit_card_transaction_settings

    @property

    defcheck_transaction_settings(self):

    return self._check_transaction_settings

    @check_transaction_settings.setter

    defcheck_transaction_settings(self, check_transaction_settings):

    self._check_transaction_settings = check_transaction_settings

    @property

    defbusiness(self):

    return self._business

    @business.setter

    defbusiness(self, business):

    self._business = business

    @property

    defmain_contact(self):

    return self._main_contact

    @main_contact.setter

    defmain_contact(self, main_contact):

    self._main_contact = main_contact

    @property

    defreceipt40(self):

    return self._receipt40

    @receipt40.setter

    defreceipt40(self, receipt40):

    self._receipt40 = receipt40

    @property

    defreceipt80(self):

    return self._receipt80

    @receipt80.setter

    defreceipt80(self, receipt80):

    self._receipt80 = receipt80

    @property

    defprint_signature_line(self):

    return self._print_signature_line

    @print_signature_line.setter

    defprint_signature_line(self, print_signature_line):

    self._print_signature_line = print_signature_line

    @property

    defresponse(self):

    return self._response

    @response.setter

    defresponse(self, response):

    self._response = response

    @property

    defaccount_id(self):

    return self._account_id

    @account_id.setter

    defaccount_id(self, account_id):

    self._account_id = account_id

    @property

    defcopy_email_receipt(self):

    return self._copy_email_receipt

    @copy_email_receipt.setter

    defcopy_email_receipt(self, copy_email_receipt):

    self._copy_email_receipt = copy_email_receipt

# TerminalSettings

    # coding: utf-8

    classTerminalSettings(object):

    swagger_types = {

    'id': 'int',

    'terminal_id': 'int',

    'sec_code': 'str',

    'gateway_terminal': 'bool',

    'consumer_credits': 'bool',

    'dl_required': 'bool',

    'check_verify': 'bool',

    'identity_verify': 'bool'

    }

    attribute_map = {

    'id': 'ID',

    'terminal_id': 'Terminal_ID',

    'sec_code': 'SEC_Code',

    'gateway_terminal': 'Gateway_Terminal',

    'consumer_credits': 'Consumer_Credits',

    'dl_required': 'DL_Required',

    'check_verify': 'Check_Verify',

    'identity_verify': 'Identity_Verify'

    }

    def__init__(self, id=None, terminal_id=None, sec_code=None, gateway_terminal=None, consumer_credits=None, dl_required=None, check_verify=None, identity_verify=None): # noqa: E501

    """TerminalSettings - a model defined in Swagger"""# noqa: E501

    self._id = None

    self._terminal_id = None

    self._sec_code = None

    self._gateway_terminal = None

    self._consumer_credits = None

    self._dl_required = None

    self._check_verify = None

    self._identity_verify = None

    self.discriminator = None

    ifidisnotNone:

    self.id = id

    ifterminal_idisnotNone:

    self.terminal_id = terminal_id

    ifsec_codeisnotNone:

    self.sec_code = sec_code

    ifgateway_terminalisnotNone:

    self.gateway_terminal = gateway_terminal

    ifconsumer_creditsisnotNone:

    self.consumer_credits = consumer_credits

    ifdl_requiredisnotNone:

    self.dl_required = dl_required

    ifcheck_verifyisnotNone:

    self.check_verify = check_verify

    ifidentity_verifyisnotNone:

    self.identity_verify = identity_verify

    @property

    defid(self):

    return self._id

    @id.setter

    defid(self, id):

    self._id = id

    @property

    defterminal_id(self):

    return self._terminal_id

    @terminal_id.setter

    defterminal_id(self, terminal_id):

    self._terminal_id = terminal_id

    @property

    defsec_code(self):

    return self._sec_code

    @sec_code.setter

    defsec_code(self, sec_code):

    self._sec_code = sec_code

    @property

    defgateway_terminal(self):

    return self._gateway_terminal

    @gateway_terminal.setter

    defgateway_terminal(self, gateway_terminal):

    self._gateway_terminal = gateway_terminal

    @property

    defconsumer_credits(self):

    return self._consumer_credits

    @consumer_credits.setter

    defconsumer_credits(self, consumer_credits):

    self._consumer_credits = consumer_credits

    @property

    defdl_required(self):

    return self._dl_required

    @dl_required.setter

    defdl_required(self, dl_required):

    self._dl_required = dl_required

    @property

    defcheck_verify(self):

    return self._check_verify

    @check_verify.setter

    defcheck_verify(self, check_verify):

    self._check_verify = check_verify

    @property

    defidentity_verify(self):

    return self._identity_verify

    @identity_verify.setter

    defidentity_verify(self, identity_verify):

    self._identity_verify = identity_verify

# Transaction

    # coding: utf-8

    classTransaction(object):

    swagger_types = {

    'submit_time': 'datetime',

    'tran_type': 'str',

    'tran_amt': 'float',

    'tran_tax': 'float',

    'tran_inv': 'str',

    'tran_po': 'str',

    'tran_c_num': 'str',

    'tran_note': 'str',

    'card_num': 'str',

    'card_name': 'str',

    'card_exp': 'str',

    'card_type': 'str',

    'avs_street': 'str',

    'avs_zip': 'str',

    'cvv_num': 'str',

    'proc_id': 'str',

    'proc_resp': 'str',

    'proc_code': 'str',

    'proc_mess': 'str',

    'avs_code': 'str',

    'avs_resp': 'str',

    'cvv_code': 'str',

    'cvv_resp': 'str',

    'items': 'list[TransactionItem]',

    'business_name': 'str',

    'business_address': 'str',

    'business_address2': 'str',

    'business_city': 'str',

    'business_state': 'str',

    'business_zip': 'str',

    'business_country': 'str',

    'business_website': 'str',

    'contact_first_name': 'str',

    'contact_last_name': 'str',

    'contact_phone': 'str',

    'contact_fax': 'str',

    'contact_email': 'str',

    'contact_title': 'str',

    'ip': 'str',

    'tax_exempt': 'bool'

    }

    attribute_map = {

    'submit_time': 'Submit_Time',

    'tran_type': 'Tran_Type',

    'tran_amt': 'Tran_Amt',

    'tran_tax': 'Tran_Tax',

    'tran_inv': 'Tran_Inv',

    'tran_po': 'Tran_PO',

    'tran_c_num': 'Tran_CNum',

    'tran_note': 'Tran_Note',

    'card_num': 'Card_Num',

    'card_name': 'Card_Name',

    'card_exp': 'Card_Exp',

    'card_type': 'Card_Type',

    'avs_street': 'AVS_Street',

    'avs_zip': 'AVS_Zip',

    'cvv_num': 'CVV_Num',

    'proc_id': 'Proc_ID',

    'proc_resp': 'Proc_Resp',

    'proc_code': 'Proc_Code',

    'proc_mess': 'Proc_Mess',

    'avs_code': 'AVS_Code',

    'avs_resp': 'AVS_Resp',

    'cvv_code': 'CVV_Code',

    'cvv_resp': 'CVV_Resp',

    'items': 'Items',

    'business_name': 'Business_Name',

    'business_address': 'Business_Address',

    'business_address2': 'Business_Address2',

    'business_city': 'Business_City',

    'business_state': 'Business_State',

    'business_zip': 'Business_Zip',

    'business_country': 'Business_Country',

    'business_website': 'Business_Website',

    'contact_first_name': 'Contact_FirstName',

    'contact_last_name': 'Contact_LastName',

    'contact_phone': 'Contact_Phone',

    'contact_fax': 'Contact_Fax',

    'contact_email': 'Contact_Email',

    'contact_title': 'Contact_Title',

    'ip': 'IP',

    'tax_exempt': 'TaxExempt'

    }

    def__init__(self, submit_time=None, tran_type=None, tran_amt=None, tran_tax=None, tran_inv=None, tran_po=None, tran_c_num=None, tran_note=None, card_num=None, card_name=None, card_exp=None, card_type=None, avs_street=None, avs_zip=None, cvv_num=None, proc_id=None, proc_resp=None, proc_code=None, proc_mess=None, avs_code=None, avs_resp=None, cvv_code=None, cvv_resp=None, items=None, business_name=None, business_address=None, business_address2=None, business_city=None, business_state=None, business_zip=None, business_country=None, business_website=None, contact_first_name=None, contact_last_name=None, contact_phone=None, contact_fax=None, contact_email=None, contact_title=None, ip=None, tax_exempt=None): # noqa: E501

    """Transaction - a model defined in Swagger"""# noqa: E501

    self._submit_time = None

    self._tran_type = None

    self._tran_amt = None

    self._tran_tax = None

    self._tran_inv = None

    self._tran_po = None

    self._tran_c_num = None

    self._tran_note = None

    self._card_num = None

    self._card_name = None

    self._card_exp = None

    self._card_type = None

    self._avs_street = None

    self._avs_zip = None

    self._cvv_num = None

    self._proc_id = None

    self._proc_resp = None

    self._proc_code = None

    self._proc_mess = None

    self._avs_code = None

    self._avs_resp = None

    self._cvv_code = None

    self._cvv_resp = None

    self._items = None

    self._business_name = None

    self._business_address = None

    self._business_address2 = None

    self._business_city = None

    self._business_state = None

    self._business_zip = None

    self._business_country = None

    self._business_website = None

    self._contact_first_name = None

    self._contact_last_name = None

    self._contact_phone = None

    self._contact_fax = None

    self._contact_email = None

    self._contact_title = None

    self._ip = None

    self._tax_exempt = None

    self.discriminator = None

    ifsubmit_timeisnotNone:

    self.submit_time = submit_time

    iftran_typeisnotNone:

    self.tran_type = tran_type

    iftran_amtisnotNone:

    self.tran_amt = tran_amt

    iftran_taxisnotNone:

    self.tran_tax = tran_tax

    iftran_invisnotNone:

    self.tran_inv = tran_inv

    iftran_poisnotNone:

    self.tran_po = tran_po

    iftran_c_numisnotNone:

    self.tran_c_num = tran_c_num

    iftran_noteisnotNone:

    self.tran_note = tran_note

    ifcard_numisnotNone:

    self.card_num = card_num

    ifcard_nameisnotNone:

    self.card_name = card_name

    ifcard_expisnotNone:

    self.card_exp = card_exp

    ifcard_typeisnotNone:

    self.card_type = card_type

    ifavs_streetisnotNone:

    self.avs_street = avs_street

    ifavs_zipisnotNone:

    self.avs_zip = avs_zip

    ifcvv_numisnotNone:

    self.cvv_num = cvv_num

    ifproc_idisnotNone:

    self.proc_id = proc_id

    ifproc_respisnotNone:

    self.proc_resp = proc_resp

    ifproc_codeisnotNone:

    self.proc_code = proc_code

    ifproc_messisnotNone:

    self.proc_mess = proc_mess

    ifavs_codeisnotNone:

    self.avs_code = avs_code

    ifavs_respisnotNone:

    self.avs_resp = avs_resp

    ifcvv_codeisnotNone:

    self.cvv_code = cvv_code

    ifcvv_respisnotNone:

    self.cvv_resp = cvv_resp

    ifitemsisnotNone:

    self.items = items

    ifbusiness_nameisnotNone:

    self.business_name = business_name

    ifbusiness_addressisnotNone:

    self.business_address = business_address

    ifbusiness_address2isnotNone:

    self.business_address2 = business_address2

    ifbusiness_cityisnotNone:

    self.business_city = business_city

    ifbusiness_stateisnotNone:

    self.business_state = business_state

    ifbusiness_zipisnotNone:

    self.business_zip = business_zip

    ifbusiness_countryisnotNone:

    self.business_country = business_country

    ifbusiness_websiteisnotNone:

    self.business_website = business_website

    ifcontact_first_nameisnotNone:

    self.contact_first_name = contact_first_name

    ifcontact_last_nameisnotNone:

    self.contact_last_name = contact_last_name

    ifcontact_phoneisnotNone:

    self.contact_phone = contact_phone

    ifcontact_faxisnotNone:

    self.contact_fax = contact_fax

    ifcontact_emailisnotNone:

    self.contact_email = contact_email

    ifcontact_titleisnotNone:

    self.contact_title = contact_title

    ifipisnotNone:

    self.ip = ip

    iftax_exemptisnotNone:

    self.tax_exempt = tax_exempt

    @property

    defsubmit_time(self):

    return self._submit_time

    @submit_time.setter

    defsubmit_time(self, submit_time):

    self._submit_time = submit_time

    @property

    deftran_type(self):

    return self._tran_type

    @tran_type.setter

    deftran_type(self, tran_type):

    self._tran_type = tran_type

    @property

    deftran_amt(self):

    return self._tran_amt

    @tran_amt.setter

    deftran_amt(self, tran_amt):

    self._tran_amt = tran_amt

    @property

    deftran_tax(self):

    return self._tran_tax

    @tran_tax.setter

    deftran_tax(self, tran_tax):

    self._tran_tax = tran_tax

    @property

    deftran_inv(self):

    return self._tran_inv

    @tran_inv.setter

    deftran_inv(self, tran_inv):

    self._tran_inv = tran_inv

    @property

    deftran_po(self):

    return self._tran_po

    @tran_po.setter

    deftran_po(self, tran_po):

    self._tran_po = tran_po

    @property

    deftran_c_num(self):

    return self._tran_c_num

    @tran_c_num.setter

    deftran_c_num(self, tran_c_num):

    self._tran_c_num = tran_c_num

    @property

    deftran_note(self):

    return self._tran_note

    @tran_note.setter

    deftran_note(self, tran_note):

    self._tran_note = tran_note

    @property

    defcard_num(self):

    return self._card_num

    @card_num.setter

    defcard_num(self, card_num):

    self._card_num = card_num

    @property

    defcard_name(self):

    return self._card_name

    @card_name.setter

    defcard_name(self, card_name):

    self._card_name = card_name

    @property

    defcard_exp(self):

    return self._card_exp

    @card_exp.setter

    defcard_exp(self, card_exp):

    self._card_exp = card_exp

    @property

    defcard_type(self):

    return self._card_type

    @card_type.setter

    defcard_type(self, card_type):

    self._card_type = card_type

    @property

    defavs_street(self):

    return self._avs_street

    @avs_street.setter

    defavs_street(self, avs_street):

    self._avs_street = avs_street

    @property

    defavs_zip(self):

    return self._avs_zip

    @avs_zip.setter

    defavs_zip(self, avs_zip):

    self._avs_zip = avs_zip

    @property

    defcvv_num(self):

    return self._cvv_num

    @cvv_num.setter

    defcvv_num(self, cvv_num):

    self._cvv_num = cvv_num

    @property

    defproc_id(self):

    return self._proc_id

    @proc_id.setter

    defproc_id(self, proc_id):

    self._proc_id = proc_id

    @property

    defproc_resp(self):

    return self._proc_resp

    @proc_resp.setter

    defproc_resp(self, proc_resp):

    self._proc_resp = proc_resp

    @property

    defproc_code(self):

    return self._proc_code

    @proc_code.setter

    defproc_code(self, proc_code):

    self._proc_code = proc_code

    @property

    defproc_mess(self):

    return self._proc_mess

    @proc_mess.setter

    defproc_mess(self, proc_mess):

    self._proc_mess = proc_mess

    @property

    defavs_code(self):

    return self._avs_code

    @avs_code.setter

    defavs_code(self, avs_code):

    self._avs_code = avs_code

    @property

    defavs_resp(self):

    return self._avs_resp

    @avs_resp.setter

    defavs_resp(self, avs_resp):

    self._avs_resp = avs_resp

    @property

    defcvv_code(self):

    return self._cvv_code

    @cvv_code.setter

    defcvv_code(self, cvv_code):

    self._cvv_code = cvv_code

    @property

    defcvv_resp(self):

    return self._cvv_resp

    @cvv_resp.setter

    defcvv_resp(self, cvv_resp):

    self._cvv_resp = cvv_resp

    @property

    defitems(self):

    return self._items

    @items.setter

    defitems(self, items):

    self._items = items

    @property

    defbusiness_name(self):

    return self._business_name

    @business_name.setter

    defbusiness_name(self, business_name):

    self._business_name = business_name

    @property

    defbusiness_address(self):

    return self._business_address

    @business_address.setter

    defbusiness_address(self, business_address):

    self._business_address = business_address

    @property

    defbusiness_address2(self):

    return self._business_address2

    @business_address2.setter

    defbusiness_address2(self, business_address2):

    self._business_address2 = business_address2

    @property

    defbusiness_city(self):

    return self._business_city

    @business_city.setter

    defbusiness_city(self, business_city):

    self._business_city = business_city

    @property

    defbusiness_state(self):

    return self._business_state

    @business_state.setter

    defbusiness_state(self, business_state):

    self._business_state = business_state

    @property

    defbusiness_zip(self):

    return self._business_zip

    @business_zip.setter

    defbusiness_zip(self, business_zip):

    self._business_zip = business_zip

    @property

    defbusiness_country(self):

    return self._business_country

    @business_country.setter

    defbusiness_country(self, business_country):

    self._business_country = business_country

    @property

    defbusiness_website(self):

    return self._business_website

    @business_website.setter

    defbusiness_website(self, business_website):

    self._business_website = business_website

    @property

    defcontact_first_name(self):

    return self._contact_first_name

    @contact_first_name.setter

    defcontact_first_name(self, contact_first_name):

    self._contact_first_name = contact_first_name

    @property

    defcontact_last_name(self):

    return self._contact_last_name

    @contact_last_name.setter

    defcontact_last_name(self, contact_last_name):

    self._contact_last_name = contact_last_name

    @property

    defcontact_phone(self):

    return self._contact_phone

    @contact_phone.setter

    defcontact_phone(self, contact_phone):

    self._contact_phone = contact_phone

    @property

    defcontact_fax(self):

    return self._contact_fax

    @contact_fax.setter

    defcontact_fax(self, contact_fax):

    self._contact_fax = contact_fax

    @property

    defcontact_email(self):

    return self._contact_email

    @contact_email.setter

    defcontact_email(self, contact_email):

    self._contact_email = contact_email

    @property

    defcontact_title(self):

    return self._contact_title

    @contact_title.setter

    defcontact_title(self, contact_title):

    self._contact_title = contact_title

    @property

    defip(self):

    return self._ip

    @ip.setter

    defip(self, ip):

    self._ip = ip

    @property

    deftax_exempt(self):

    return self._tax_exempt

    @tax_exempt.setter

    deftax_exempt(self, tax_exempt):

    self._tax_exempt = tax_exempt

# TransactionItem

    # coding: utf-8

    classTransactionItem(object):

    swagger_types = {

    'tax_included': 'bool',

    'credit': 'bool',

    'extended_amount': 'float',

    'item_number': 'str',

    'unit_cost': 'float',

    'quantity': 'int',

    'description': 'str',

    'discount': 'float',

    'tax': 'float',

    'commodity_code': 'str',

    'unit_of_measure': 'str'

    }

    attribute_map = {

    'tax_included': 'TaxIncluded',

    'credit': 'Credit',

    'extended_amount': 'ExtendedAmount',

    'item_number': 'ItemNumber',

    'unit_cost': 'UnitCost',

    'quantity': 'Quantity',

    'description': 'Description',

    'discount': 'Discount',

    'tax': 'Tax',

    'commodity_code': 'CommodityCode',

    'unit_of_measure': 'UnitOfMeasure'

    }

    def__init__(self, tax_included=None, credit=None, extended_amount=None, item_number=None, unit_cost=None, quantity=None, description=None, discount=None, tax=None, commodity_code=None, unit_of_measure=None): # noqa: E501

    """TransactionItem - a model defined in Swagger"""# noqa: E501

    self._tax_included = None

    self._credit = None

    self._extended_amount = None

    self._item_number = None

    self._unit_cost = None

    self._quantity = None

    self._description = None

    self._discount = None

    self._tax = None

    self._commodity_code = None

    self._unit_of_measure = None

    self.discriminator = None

    iftax_includedisnotNone:

    self.tax_included = tax_included

    ifcreditisnotNone:

    self.credit = credit

    ifextended_amountisnotNone:

    self.extended_amount = extended_amount

    ifitem_numberisnotNone:

    self.item_number = item_number

    ifunit_costisnotNone:

    self.unit_cost = unit_cost

    ifquantityisnotNone:

    self.quantity = quantity

    ifdescriptionisnotNone:

    self.description = description

    ifdiscountisnotNone:

    self.discount = discount

    iftaxisnotNone:

    self.tax = tax

    ifcommodity_codeisnotNone:

    self.commodity_code = commodity_code

    ifunit_of_measureisnotNone:

    self.unit_of_measure = unit_of_measure

    @property

    deftax_included(self):

    return self._tax_included

    @tax_included.setter

    deftax_included(self, tax_included):

    self._tax_included = tax_included

    @property

    defcredit(self):

    return self._credit

    @credit.setter

    defcredit(self, credit):

    self._credit = credit

    @property

    defextended_amount(self):

    return self._extended_amount

    @extended_amount.setter

    defextended_amount(self, extended_amount):

    self._extended_amount = extended_amount

    @property

    defitem_number(self):

    return self._item_number

    @item_number.setter

    defitem_number(self, item_number):

    self._item_number = item_number

    @property

    defunit_cost(self):

    return self._unit_cost

    @unit_cost.setter

    defunit_cost(self, unit_cost):

    self._unit_cost = unit_cost

    @property

    defquantity(self):

    return self._quantity

    @quantity.setter

    defquantity(self, quantity):

    self._quantity = quantity

    @property

    defdescription(self):

    return self._description

    @description.setter

    defdescription(self, description):

    self._description = description

    @property

    defdiscount(self):

    return self._discount

    @discount.setter

    defdiscount(self, discount):

    self._discount = discount

    @property

    deftax(self):

    return self._tax

    @tax.setter

    deftax(self, tax):

    self._tax = tax

    @property

    defcommodity_code(self):

    return self._commodity_code

    @commodity_code.setter

    defcommodity_code(self, commodity_code):

    self._commodity_code = commodity_code

    @property

    defunit_of_measure(self):

    return self._unit_of_measure

    @unit_of_measure.setter

    defunit_of_measure(self, unit_of_measure):

    self._unit_of_measure = unit_of_measure

# UpdateTransactionInfo

    # coding: utf-8

    classUpdateTransactionInfo(object):

    swagger_types = {

    'invoice_number': 'str',

    'customer_number': 'str',

    'po_number': 'str',

    'note': 'str'

    }

    attribute_map = {

    'invoice_number': 'InvoiceNumber',

    'customer_number': 'CustomerNumber',

    'po_number': 'PONumber',

    'note': 'Note'

    }

    def__init__(self, invoice_number=None, customer_number=None, po_number=None, note=None): # noqa: E501

    """UpdateTransactionInfo - a model defined in Swagger"""# noqa: E501

    self._invoice_number = None

    self._customer_number = None

    self._po_number = None

    self._note = None

    self.discriminator = None

    ifinvoice_numberisnotNone:

    self.invoice_number = invoice_number

    ifcustomer_numberisnotNone:

    self.customer_number = customer_number

    ifpo_numberisnotNone:

    self.po_number = po_number

    ifnoteisnotNone:

    self.note = note

    @property

    definvoice_number(self):

    return self._invoice_number

    @invoice_number.setter

    definvoice_number(self, invoice_number):

    self._invoice_number = invoice_number

    @property

    defcustomer_number(self):

    return self._customer_number

    @customer_number.setter

    defcustomer_number(self, customer_number):

    self._customer_number = customer_number

    @property

    defpo_number(self):

    return self._po_number

    @po_number.setter

    defpo_number(self, po_number):

    self._po_number = po_number

    @property

    defnote(self):

    return self._note

    @note.setter

    defnote(self, note):

    self._note = note

# VaultCheck

    # coding: utf-8

    classVaultCheck(object):

    swagger_types = {

    'response': 'Response',

    'check_id': 'int',

    'main': 'bool',

    'check_routing': 'str',

    'check_account': 'str',

    'check_number': 'str',

    'check_first_name': 'str',

    'check_last_name': 'str',

    'note': 'str',

    'masked_routing': 'str',

    'masked_account': 'str',

    'account_type': 'str'

    }

    attribute_map = {

    'response': 'Response',

    'check_id': 'CheckID',

    'main': 'Main',

    'check_routing': 'CheckRouting',

    'check_account': 'CheckAccount',

    'check_number': 'CheckNumber',

    'check_first_name': 'CheckFirstName',

    'check_last_name': 'CheckLastName',

    'note': 'Note',

    'masked_routing': 'MaskedRouting',

    'masked_account': 'MaskedAccount',

    'account_type': 'AccountType'

    }

    def__init__(self, response=None, check_id=None, main=None, check_routing=None, check_account=None, check_number=None, check_first_name=None, check_last_name=None, note=None, masked_routing=None, masked_account=None, account_type=None): # noqa: E501

    """VaultCheck - a model defined in Swagger"""# noqa: E501

    self._response = None

    self._check_id = None

    self._main = None

    self._check_routing = None

    self._check_account = None

    self._check_number = None

    self._check_first_name = None

    self._check_last_name = None

    self._note = None

    self._masked_routing = None

    self._masked_account = None

    self._account_type = None

    self.discriminator = None

    ifresponseisnotNone:

    self.response = response

    ifcheck_idisnotNone:

    self.check_id = check_id

    ifmainisnotNone:

    self.main = main

    ifcheck_routingisnotNone:

    self.check_routing = check_routing

    ifcheck_accountisnotNone:

    self.check_account = check_account

    ifcheck_numberisnotNone:

    self.check_number = check_number

    ifcheck_first_nameisnotNone:

    self.check_first_name = check_first_name

    ifcheck_last_nameisnotNone:

    self.check_last_name = check_last_name

    ifnoteisnotNone:

    self.note = note

    ifmasked_routingisnotNone:

    self.masked_routing = masked_routing

    ifmasked_accountisnotNone:

    self.masked_account = masked_account

    ifaccount_typeisnotNone:

    self.account_type = account_type

    @property

    defresponse(self):

    return self._response

    @response.setter

    defresponse(self, response):

    self._response = response

    @property

    defcheck_id(self):

    return self._check_id

    @check_id.setter

    defcheck_id(self, check_id):

    self._check_id = check_id

    @property

    defmain(self):

    return self._main

    @main.setter

    defmain(self, main):

    self._main = main

    @property

    defcheck_routing(self):

    return self._check_routing

    @check_routing.setter

    defcheck_routing(self, check_routing):

    self._check_routing = check_routing

    @property

    defcheck_account(self):

    return self._check_account

    @check_account.setter

    defcheck_account(self, check_account):

    self._check_account = check_account

    @property

    defcheck_number(self):

    return self._check_number

    @check_number.setter

    defcheck_number(self, check_number):

    self._check_number = check_number

    @property

    defcheck_first_name(self):

    return self._check_first_name

    @check_first_name.setter

    defcheck_first_name(self, check_first_name):

    self._check_first_name = check_first_name

    @property

    defcheck_last_name(self):

    return self._check_last_name

    @check_last_name.setter

    defcheck_last_name(self, check_last_name):

    self._check_last_name = check_last_name

    @property

    defnote(self):

    return self._note

    @note.setter

    defnote(self, note):

    self._note = note

    @property

    defmasked_routing(self):

    return self._masked_routing

    @masked_routing.setter

    defmasked_routing(self, masked_routing):

    self._masked_routing = masked_routing

    @property

    defmasked_account(self):

    return self._masked_account

    @masked_account.setter

    defmasked_account(self, masked_account):

    self._masked_account = masked_account

    @property

    defaccount_type(self):

    return self._account_type

    @account_type.setter

    defaccount_type(self, account_type):

    self._account_type = account_type

# VaultCreditCard

    # coding: utf-8

    classVaultCreditCard(object):

    swagger_types = {

    'magnetic_tracks': 'str',

    'track1': 'str',

    'track2': 'str',

    'number': 'str',

    'masked_number': 'str',

    'holder': 'str',

    'exp_date': 'str',

    'cvv': 'str',

    'address': 'str',

    'city': 'str',

    'state': 'str',

    'zip': 'str',

    'swiped': 'bool',

    'type_string': 'str',

    'cvv_type': 'CVVPresenceType',

    'not_present': 'bool',

    'response': 'Response',

    'card_id': 'int',

    'note': 'str',

    'main': 'bool'

    }

    attribute_map = {

    'magnetic_tracks': 'MagneticTracks',

    'track1': 'Track1',

    'track2': 'Track2',

    'number': 'Number',

    'masked_number': 'MaskedNumber',

    'holder': 'Holder',

    'exp_date': 'ExpDate',

    'cvv': 'CVV',

    'address': 'Address',

    'city': 'City',

    'state': 'State',

    'zip': 'ZIP',

    'swiped': 'Swiped',

    'type_string': 'TypeString',

    'cvv_type': 'CVVType',

    'not_present': 'NotPresent',

    'response': 'Response',

    'card_id': 'CardID',

    'note': 'Note',

    'main': 'Main'

    }

    def__init__(self, magnetic_tracks=None, track1=None, track2=None, number=None, masked_number=None, holder=None, exp_date=None, cvv=None, address=None, city=None, state=None, zip=None, swiped=None, type_string=None, cvv_type=None, not_present=None, response=None, card_id=None, note=None, main=None): # noqa: E501

    """VaultCreditCard - a model defined in Swagger"""# noqa: E501

    self._magnetic_tracks = None

    self._track1 = None

    self._track2 = None

    self._number = None

    self._masked_number = None

    self._holder = None

    self._exp_date = None

    self._cvv = None

    self._address = None

    self._city = None

    self._state = None

    self._zip = None

    self._swiped = None

    self._type_string = None

    self._cvv_type = None

    self._not_present = None

    self._response = None

    self._card_id = None

    self._note = None

    self._main = None

    self.discriminator = None

    ifmagnetic_tracksisnotNone:

    self.magnetic_tracks = magnetic_tracks

    iftrack1isnotNone:

    self.track1 = track1

    iftrack2isnotNone:

    self.track2 = track2

    ifnumberisnotNone:

    self.number = number

    ifmasked_numberisnotNone:

    self.masked_number = masked_number

    ifholderisnotNone:

    self.holder = holder

    ifexp_dateisnotNone:

    self.exp_date = exp_date

    ifcvvisnotNone:

    self.cvv = cvv

    ifaddressisnotNone:

    self.address = address

    ifcityisnotNone:

    self.city = city

    ifstateisnotNone:

    self.state = state

    ifzipisnotNone:

    self.zip = zip

    ifswipedisnotNone:

    self.swiped = swiped

    iftype_stringisnotNone:

    self.type_string = type_string

    ifcvv_typeisnotNone:

    self.cvv_type = cvv_type

    ifnot_presentisnotNone:

    self.not_present = not_present

    ifresponseisnotNone:

    self.response = response

    ifcard_idisnotNone:

    self.card_id = card_id

    ifnoteisnotNone:

    self.note = note

    ifmainisnotNone:

    self.main = main

    @property

    defmagnetic_tracks(self):

    return self._magnetic_tracks

    @magnetic_tracks.setter

    defmagnetic_tracks(self, magnetic_tracks):

    self._magnetic_tracks = magnetic_tracks

    @property

    deftrack1(self):

    return self._track1

    @track1.setter

    deftrack1(self, track1):

    self._track1 = track1

    @property

    deftrack2(self):

    return self._track2

    @track2.setter

    deftrack2(self, track2):

    self._track2 = track2

    @property

    defnumber(self):

    return self._number

    @number.setter

    defnumber(self, number):

    self._number = number

    @property

    defmasked_number(self):

    return self._masked_number

    @masked_number.setter

    defmasked_number(self, masked_number):

    self._masked_number = masked_number

    @property

    defholder(self):

    return self._holder

    @holder.setter

    defholder(self, holder):

    self._holder = holder

    @property

    defexp_date(self):

    return self._exp_date

    @exp_date.setter

    defexp_date(self, exp_date):

    self._exp_date = exp_date

    @property

    defcvv(self):

    return self._cvv

    @cvv.setter

    defcvv(self, cvv):

    self._cvv = cvv

    @property

    defaddress(self):

    return self._address

    @address.setter

    defaddress(self, address):

    self._address = address

    @property

    defcity(self):

    return self._city

    @city.setter

    defcity(self, city):

    self._city = city

    @property

    defstate(self):

    return self._state

    @state.setter

    defstate(self, state):

    self._state = state

    @property

    defzip(self):

    return self._zip

    @zip.setter

    defzip(self, zip):

    self._zip = zip

    @property

    defswiped(self):

    return self._swiped

    @swiped.setter

    defswiped(self, swiped):

    self._swiped = swiped

    @property

    deftype_string(self):

    return self._type_string

    @type_string.setter

    deftype_string(self, type_string):

    self._type_string = type_string

    @property

    defcvv_type(self):

    return self._cvv_type

    @cvv_type.setter

    defcvv_type(self, cvv_type):

    self._cvv_type = cvv_type

    @property

    defnot_present(self):

    return self._not_present

    @not_present.setter

    defnot_present(self, not_present):

    self._not_present = not_present

    @property

    defresponse(self):

    return self._response

    @response.setter

    defresponse(self, response):

    self._response = response

    @property

    defcard_id(self):

    return self._card_id

    @card_id.setter

    defcard_id(self, card_id):

    self._card_id = card_id

    @property

    defnote(self):

    return self._note

    @note.setter

    defnote(self, note):

    self._note = note

    @property

    defmain(self):

    return self._main

    @main.setter

    defmain(self, main):

    self._main = main

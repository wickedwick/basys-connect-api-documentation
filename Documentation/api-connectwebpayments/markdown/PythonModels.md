# Python Models

# Address

    class Address(object):
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

        def __init__(self, address_line1=None, address_line2=None, city=None, state=None, zip_code=None):  # noqa: E501
            """Address - a model defined in Swagger"""  # noqa: E501
            self._address_line1 = None
            self._address_line2 = None
            self._city = None
            self._state = None
            self._zip_code = None
            self.discriminator = None
            if address_line1 is not None:
                self.address_line1 = address_line1
            if address_line2 is not None:
                self.address_line2 = address_line2
            if city is not None:
                self.city = city
            if state is not None:
                self.state = state
            if zip_code is not None:
                self.zip_code = zip_code

        @property
        def address_line1(self):
            return self._address_line1

        @address_line1.setter
        def address_line1(self, address_line1):
            self._address_line1 = address_line1

        @property
        def address_line2(self):
            return self._address_line2

        @address_line2.setter
        def address_line2(self, address_line2):
            self._address_line2 = address_line2

        @property
        def city(self):
            return self._city

        @city.setter
        def city(self, city):
            self._city = city

        @property
        def state(self):
            return self._state

        @state.setter
        def state(self, state):
            self._state = state

        @property
        def zip_code(self):
            return self._zip_code

        @zip_code.setter
        def zip_code(self, zip_code):
            self._zip_code = zip_code

# Batch

    class Batch(object):
        swagger_types = {
            'batch_number': 'str',
            'started': 'datetime',
            'completed': 'datetime',
            'sales_count': 'str',
            'sales_sum': 'float',
            'return_count': 'str',
            'return_sum': 'float',
            'batch_error': 'bool'
        }

        attribute_map = {
            'batch_number': 'BatchNumber',
            'started': 'Started',
            'completed': 'Completed',
            'sales_count': 'SalesCount',
            'sales_sum': 'SalesSum',
            'return_count': 'ReturnCount',
            'return_sum': 'ReturnSum',
            'batch_error': 'BatchError'
        }

        def __init__(self, batch_number=None, started=None, completed=None, sales_count=None, sales_sum=None, return_count=None, return_sum=None, batch_error=None):  # noqa: E501
            """Batch - a model defined in Swagger"""  # noqa: E501
            self._batch_number = None
            self._started = None
            self._completed = None
            self._sales_count = None
            self._sales_sum = None
            self._return_count = None
            self._return_sum = None
            self._batch_error = None
            self.discriminator = None
            if batch_number is not None:
                self.batch_number = batch_number
            if started is not None:
                self.started = started
            if completed is not None:
                self.completed = completed
            if sales_count is not None:
                self.sales_count = sales_count
            if sales_sum is not None:
                self.sales_sum = sales_sum
            if return_count is not None:
                self.return_count = return_count
            if return_sum is not None:
                self.return_sum = return_sum
            if batch_error is not None:
                self.batch_error = batch_error

        @property
        def batch_number(self):
            return self._batch_number

        @batch_number.setter
        def batch_number(self, batch_number):
            self._batch_number = batch_number

        @property
        def started(self):
            return self._started

        @started.setter
        def started(self, started):
            self._started = started

        @property
        def completed(self):
            return self._completed

        @completed.setter
        def completed(self, completed):
            self._completed = completed

        @property
        def sales_count(self):
            return self._sales_count

        @sales_count.setter
        def sales_count(self, sales_count):
            self._sales_count = sales_count

        @property
        def sales_sum(self):
            return self._sales_sum

        @sales_sum.setter
        def sales_sum(self, sales_sum):
            self._sales_sum = sales_sum

        @property
        def return_count(self):
            return self._return_count

        @return_count.setter
        def return_count(self, return_count):
            self._return_count = return_count

        @property
        def return_sum(self):
            return self._return_sum

        @return_sum.setter
        def return_sum(self, return_sum):
            self._return_sum = return_sum

        @property
        def batch_error(self):
            return self._batch_error

        @batch_error.setter
        def batch_error(self, batch_error):
            self._batch_error = batch_error

# Business

class Business(object):
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

    def __init__(self, address=None, name=None, phone=None, fax=None, web_site=None):  # noqa: E501
        """Business - a model defined in Swagger"""  # noqa: E501
        self._address = None
        self._name = None
        self._phone = None
        self._fax = None
        self._web_site = None
        self.discriminator = None
        if address is not None:
            self.address = address
        if name is not None:
            self.name = name
        if phone is not None:
            self.phone = phone
        if fax is not None:
            self.fax = fax
        if web_site is not None:
            self.web_site = web_site

    @property
    def address(self):
        return self._address

    @address.setter
    def address(self, address):
        self._address = address

    @property
    def name(self):
        return self._name

    @name.setter
    def name(self, name):
        self._name = name

    @property
    def phone(self):
        return self._phone

    @phone.setter
    def phone(self, phone):
        self._phone = phone

    @property
    def fax(self):
        return self._fax

    @fax.setter
    def fax(self, fax):
        self._fax = fax

    @property
    def web_site(self):
        return self._web_site

    @web_site.setter
    def web_site(self, web_site):
        self._web_site = web_site

# CheckAccountType

    class CheckAccountType(object):
        UNKNOWN = "Unknown"
        CHECKING = "Checking"
        SAVINGS = "Savings"

        swagger_types = {
        }

        attribute_map = {
        }

        def __init__(self):  # noqa: E501
            """CheckAccountType - a model defined in Swagger"""  # noqa: E501
            self.discriminator = None

# CheckTransaction

    class CheckTransaction(object):
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

        def __init__(self, terminal_id=None, account_number=None, account_type=None, check_number=None, routing_number=None, micr_data=None, first_name=None, last_name=None, company_name=None, address1=None, address2=None, city=None, state=None, zip=None, phone_number=None, dl_number=None, dl_state=None, courtesy_card_id=None, ssn4=None, dob_year=None, check_amount=None, tran_type=None, proc_id=None, ip_address=None, customer_number=None, po_number=None, invoice_number=None, tran_note=None, email_address=None, sec_code=None, proc_resp=None, proc_code=None, proc_mess=None):  # noqa: E501
            """CheckTransaction - a model defined in Swagger"""  # noqa: E501
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
            if terminal_id is not None:
                self.terminal_id = terminal_id
            if account_number is not None:
                self.account_number = account_number
            if account_type is not None:
                self.account_type = account_type
            if check_number is not None:
                self.check_number = check_number
            if routing_number is not None:
                self.routing_number = routing_number
            if micr_data is not None:
                self.micr_data = micr_data
            if first_name is not None:
                self.first_name = first_name
            if last_name is not None:
                self.last_name = last_name
            if company_name is not None:
                self.company_name = company_name
            if address1 is not None:
                self.address1 = address1
            if address2 is not None:
                self.address2 = address2
            if city is not None:
                self.city = city
            if state is not None:
                self.state = state
            if zip is not None:
                self.zip = zip
            if phone_number is not None:
                self.phone_number = phone_number
            if dl_number is not None:
                self.dl_number = dl_number
            if dl_state is not None:
                self.dl_state = dl_state
            if courtesy_card_id is not None:
                self.courtesy_card_id = courtesy_card_id
            if ssn4 is not None:
                self.ssn4 = ssn4
            if dob_year is not None:
                self.dob_year = dob_year
            if check_amount is not None:
                self.check_amount = check_amount
            if tran_type is not None:
                self.tran_type = tran_type
            if proc_id is not None:
                self.proc_id = proc_id
            if ip_address is not None:
                self.ip_address = ip_address
            if customer_number is not None:
                self.customer_number = customer_number
            if po_number is not None:
                self.po_number = po_number
            if invoice_number is not None:
                self.invoice_number = invoice_number
            if tran_note is not None:
                self.tran_note = tran_note
            if email_address is not None:
                self.email_address = email_address
            if sec_code is not None:
                self.sec_code = sec_code
            if proc_resp is not None:
                self.proc_resp = proc_resp
            if proc_code is not None:
                self.proc_code = proc_code
            if proc_mess is not None:
                self.proc_mess = proc_mess

        @property
        def terminal_id(self):
            return self._terminal_id

        @terminal_id.setter
        def terminal_id(self, terminal_id):
            self._terminal_id = terminal_id

        @property
        def account_number(self):
            return self._account_number

        @account_number.setter
        def account_number(self, account_number):
            self._account_number = account_number

        @property
        def account_type(self):
            return self._account_type

        @account_type.setter
        def account_type(self, account_type):
            self._account_type = account_type

        @property
        def check_number(self):
            return self._check_number

        @check_number.setter
        def check_number(self, check_number):
            self._check_number = check_number

        @property
        def routing_number(self):
            return self._routing_number

        @routing_number.setter
        def routing_number(self, routing_number):
            self._routing_number = routing_number

        @property
        def micr_data(self):
            return self._micr_data

        @micr_data.setter
        def micr_data(self, micr_data):
            self._micr_data = micr_data

        @property
        def first_name(self):
            return self._first_name

        @first_name.setter
        def first_name(self, first_name):
            self._first_name = first_name

        @property
        def last_name(self):
            return self._last_name

        @last_name.setter
        def last_name(self, last_name):
            self._last_name = last_name

        @property
        def company_name(self):
            return self._company_name

        @company_name.setter
        def company_name(self, company_name):
            self._company_name = company_name

        @property
        def address1(self):
            return self._address1

        @address1.setter
        def address1(self, address1):
            self._address1 = address1

        @property
        def address2(self):
            return self._address2

        @address2.setter
        def address2(self, address2):
            self._address2 = address2

        @property
        def city(self):
            return self._city

        @city.setter
        def city(self, city):
            self._city = city

        @property
        def state(self):
            return self._state

        @state.setter
        def state(self, state):
            self._state = state

        @property
        def zip(self):
            return self._zip

        @zip.setter
        def zip(self, zip):
            self._zip = zip

        @property
        def phone_number(self):
            return self._phone_number

        @phone_number.setter
        def phone_number(self, phone_number):
            self._phone_number = phone_number

        @property
        def dl_number(self):
            return self._dl_number

        @dl_number.setter
        def dl_number(self, dl_number):
            self._dl_number = dl_number

        @property
        def dl_state(self):
            return self._dl_state

        @dl_state.setter
        def dl_state(self, dl_state):
            self._dl_state = dl_state

        @property
        def courtesy_card_id(self):
            return self._courtesy_card_id

        @courtesy_card_id.setter
        def courtesy_card_id(self, courtesy_card_id):
            self._courtesy_card_id = courtesy_card_id

        @property
        def ssn4(self):
            return self._ssn4

        @ssn4.setter
        def ssn4(self, ssn4):
            self._ssn4 = ssn4

        @property
        def dob_year(self):
            return self._dob_year

        @dob_year.setter
        def dob_year(self, dob_year):
            self._dob_year = dob_year

        @property
        def check_amount(self):
            return self._check_amount

        @check_amount.setter
        def check_amount(self, check_amount):
            self._check_amount = check_amount

        @property
        def tran_type(self):
            return self._tran_type

        @tran_type.setter
        def tran_type(self, tran_type):
            self._tran_type = tran_type

        @property
        def proc_id(self):
            return self._proc_id

        @proc_id.setter
        def proc_id(self, proc_id):
            self._proc_id = proc_id

        @property
        def ip_address(self):
            return self._ip_address

        @ip_address.setter
        def ip_address(self, ip_address):
            self._ip_address = ip_address

        @property
        def customer_number(self):
            return self._customer_number

        @customer_number.setter
        def customer_number(self, customer_number):
            self._customer_number = customer_number

        @property
        def po_number(self):
            return self._po_number

        @po_number.setter
        def po_number(self, po_number):
            self._po_number = po_number

        @property
        def invoice_number(self):
            return self._invoice_number

        @invoice_number.setter
        def invoice_number(self, invoice_number):
            self._invoice_number = invoice_number

        @property
        def tran_note(self):
            return self._tran_note

        @tran_note.setter
        def tran_note(self, tran_note):
            self._tran_note = tran_note

        @property
        def email_address(self):
            return self._email_address

        @email_address.setter
        def email_address(self, email_address):
            self._email_address = email_address

        @property
        def sec_code(self):
            return self._sec_code

        @sec_code.setter
        def sec_code(self, sec_code):
            self._sec_code = sec_code

        @property
        def proc_resp(self):
            return self._proc_resp

        @proc_resp.setter
        def proc_resp(self, proc_resp):
            self._proc_resp = proc_resp

        @property
        def proc_code(self):
            return self._proc_code

        @proc_code.setter
        def proc_code(self, proc_code):
            self._proc_code = proc_code

        @property
        def proc_mess(self):
            return self._proc_mess

        @proc_mess.setter
        def proc_mess(self, proc_mess):
            self._proc_mess = proc_mess

# CheckTransactionSettings

    class CheckTransactionSettings(object):
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

        def __init__(self, reader=None, contact_name=None, contact_title=None, email_address=None, phone_default=None, fax=None, billing_address_default=None, billing_address2=None, billing_city_default=None, billing_state_default=None, billing_zip_default=None, po_number=None, invoice_number=None, business_name=None, customer_number=None, reference_note=None, default_sec_code=None):  # noqa: E501
            """CheckTransactionSettings - a model defined in Swagger"""  # noqa: E501
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
            if reader is not None:
                self.reader = reader
            if contact_name is not None:
                self.contact_name = contact_name
            if contact_title is not None:
                self.contact_title = contact_title
            if email_address is not None:
                self.email_address = email_address
            if phone_default is not None:
                self.phone_default = phone_default
            if fax is not None:
                self.fax = fax
            if billing_address_default is not None:
                self.billing_address_default = billing_address_default
            if billing_address2 is not None:
                self.billing_address2 = billing_address2
            if billing_city_default is not None:
                self.billing_city_default = billing_city_default
            if billing_state_default is not None:
                self.billing_state_default = billing_state_default
            if billing_zip_default is not None:
                self.billing_zip_default = billing_zip_default
            if po_number is not None:
                self.po_number = po_number
            if invoice_number is not None:
                self.invoice_number = invoice_number
            if business_name is not None:
                self.business_name = business_name
            if customer_number is not None:
                self.customer_number = customer_number
            if reference_note is not None:
                self.reference_note = reference_note
            if default_sec_code is not None:
                self.default_sec_code = default_sec_code

        @property
        def reader(self):
            return self._reader

        @reader.setter
        def reader(self, reader):
            self._reader = reader

        @property
        def contact_name(self):
            return self._contact_name

        @contact_name.setter
        def contact_name(self, contact_name):
            self._contact_name = contact_name

        @property
        def contact_title(self):
            return self._contact_title

        @contact_title.setter
        def contact_title(self, contact_title):
            self._contact_title = contact_title

        @property
        def email_address(self):
            return self._email_address

        @email_address.setter
        def email_address(self, email_address):
            self._email_address = email_address

        @property
        def phone_default(self):
            return self._phone_default

        @phone_default.setter
        def phone_default(self, phone_default):
            self._phone_default = phone_default

        @property
        def fax(self):
            return self._fax

        @fax.setter
        def fax(self, fax):
            self._fax = fax

        @property
        def billing_address_default(self):
            return self._billing_address_default

        @billing_address_default.setter
        def billing_address_default(self, billing_address_default):
            self._billing_address_default = billing_address_default

        @property
        def billing_address2(self):
            return self._billing_address2

        @billing_address2.setter
        def billing_address2(self, billing_address2):
            self._billing_address2 = billing_address2

        @property
        def billing_city_default(self):
            return self._billing_city_default

        @billing_city_default.setter
        def billing_city_default(self, billing_city_default):
            self._billing_city_default = billing_city_default

        @property
        def billing_state_default(self):
            return self._billing_state_default

        @billing_state_default.setter
        def billing_state_default(self, billing_state_default):
            self._billing_state_default = billing_state_default

        @property
        def billing_zip_default(self):
            return self._billing_zip_default

        @billing_zip_default.setter
        def billing_zip_default(self, billing_zip_default):
            self._billing_zip_default = billing_zip_default

        @property
        def po_number(self):
            return self._po_number

        @po_number.setter
        def po_number(self, po_number):
            self._po_number = po_number

        @property
        def invoice_number(self):
            return self._invoice_number

        @invoice_number.setter
        def invoice_number(self, invoice_number):
            self._invoice_number = invoice_number

        @property
        def business_name(self):
            return self._business_name

        @business_name.setter
        def business_name(self, business_name):
            self._business_name = business_name

        @property
        def customer_number(self):
            return self._customer_number

        @customer_number.setter
        def customer_number(self, customer_number):
            self._customer_number = customer_number

        @property
        def reference_note(self):
            return self._reference_note

        @reference_note.setter
        def reference_note(self, reference_note):
            self._reference_note = reference_note

        @property
        def default_sec_code(self):
            return self._default_sec_code

        @default_sec_code.setter
        def default_sec_code(self, default_sec_code):
            self._default_sec_code = default_sec_code

# CheckTransactionType

    class CheckTransactionType(object):
        UNKNOWN = "Unknown"
        AUTHORIZE = "Authorize"
        VOID = "Void"
        OVERRIDE = "Override"
        PAYROLL = "Payroll"
        RECURRING = "Recurring"
        REFUND = "Refund"

        swagger_types = {
        }

        attribute_map = {
        }

        def __init__(self):  # noqa: E501
            """CheckTransactionType - a model defined in Swagger"""  # noqa: E501
            self.discriminator = None

# Contact

    class Contact(object):
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

        def __init__(self, first_name=None, last_name=None, name=None, title=None, phone=None, email=None):  # noqa: E501
            """Contact - a model defined in Swagger"""  # noqa: E501
            self._first_name = None
            self._last_name = None
            self._name = None
            self._title = None
            self._phone = None
            self._email = None
            self.discriminator = None
            if first_name is not None:
                self.first_name = first_name
            if last_name is not None:
                self.last_name = last_name
            if name is not None:
                self.name = name
            if title is not None:
                self.title = title
            if phone is not None:
                self.phone = phone
            if email is not None:
                self.email = email

        @property
        def first_name(self):
            return self._first_name

        @first_name.setter
        def first_name(self, first_name):
            self._first_name = first_name

        @property
        def last_name(self):
            return self._last_name

        @last_name.setter
        def last_name(self, last_name):
            self._last_name = last_name

        @property
        def name(self):
            return self._name

        @name.setter
        def name(self, name):
            self._name = name

        @property
        def title(self):
            return self._title

        @title.setter
        def title(self, title):
            self._title = title

        @property
        def phone(self):
            return self._phone

        @phone.setter
        def phone(self, phone):
            self._phone = phone

        @property
        def email(self):
            return self._email

        @email.setter
        def email(self, email):
            self._email = email

# CreditCardTransactionSettings

    class CreditCardTransactionSettings(object):
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

        def __init__(self, cvv=None, contact_name=None, contact_title=None, email_address=None, phone=None, fax=None, billing_address=None, billing_address2=None, billing_city=None, billing_state=None, billing_zip=None, po_number=None, invoice_number=None, business_name=None, customer_number=None, reference_note=None, sales_tax=None, tax_exempt=None, card_tracks=None, card_zip=None, card_address=None, item_description=None, default_transaction_type=None):  # noqa: E501
            """CreditCardTransactionSettings - a model defined in Swagger"""  # noqa: E501
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
            if cvv is not None:
                self.cvv = cvv
            if contact_name is not None:
                self.contact_name = contact_name
            if contact_title is not None:
                self.contact_title = contact_title
            if email_address is not None:
                self.email_address = email_address
            if phone is not None:
                self.phone = phone
            if fax is not None:
                self.fax = fax
            if billing_address is not None:
                self.billing_address = billing_address
            if billing_address2 is not None:
                self.billing_address2 = billing_address2
            if billing_city is not None:
                self.billing_city = billing_city
            if billing_state is not None:
                self.billing_state = billing_state
            if billing_zip is not None:
                self.billing_zip = billing_zip
            if po_number is not None:
                self.po_number = po_number
            if invoice_number is not None:
                self.invoice_number = invoice_number
            if business_name is not None:
                self.business_name = business_name
            if customer_number is not None:
                self.customer_number = customer_number
            if reference_note is not None:
                self.reference_note = reference_note
            if sales_tax is not None:
                self.sales_tax = sales_tax
            if tax_exempt is not None:
                self.tax_exempt = tax_exempt
            if card_tracks is not None:
                self.card_tracks = card_tracks
            if card_zip is not None:
                self.card_zip = card_zip
            if card_address is not None:
                self.card_address = card_address
            if item_description is not None:
                self.item_description = item_description
            if default_transaction_type is not None:
                self.default_transaction_type = default_transaction_type

        @property
        def cvv(self):
            return self._cvv

        @cvv.setter
        def cvv(self, cvv):
            self._cvv = cvv

        @property
        def contact_name(self):
            return self._contact_name

        @contact_name.setter
        def contact_name(self, contact_name):
            self._contact_name = contact_name

        @property
        def contact_title(self):
            return self._contact_title

        @contact_title.setter
        def contact_title(self, contact_title):
            self._contact_title = contact_title

        @property
        def email_address(self):
            return self._email_address

        @email_address.setter
        def email_address(self, email_address):
            self._email_address = email_address

        @property
        def phone(self):
            return self._phone

        @phone.setter
        def phone(self, phone):
            self._phone = phone

        @property
        def fax(self):
            return self._fax

        @fax.setter
        def fax(self, fax):
            self._fax = fax

        @property
        def billing_address(self):
            return self._billing_address

        @billing_address.setter
        def billing_address(self, billing_address):
            self._billing_address = billing_address

        @property
        def billing_address2(self):
            return self._billing_address2

        @billing_address2.setter
        def billing_address2(self, billing_address2):
            self._billing_address2 = billing_address2

        @property
        def billing_city(self):
            return self._billing_city

        @billing_city.setter
        def billing_city(self, billing_city):
            self._billing_city = billing_city

        @property
        def billing_state(self):
            return self._billing_state

        @billing_state.setter
        def billing_state(self, billing_state):
            self._billing_state = billing_state

        @property
        def billing_zip(self):
            return self._billing_zip

        @billing_zip.setter
        def billing_zip(self, billing_zip):
            self._billing_zip = billing_zip

        @property
        def po_number(self):
            return self._po_number

        @po_number.setter
        def po_number(self, po_number):
            self._po_number = po_number

        @property
        def invoice_number(self):
            return self._invoice_number

        @invoice_number.setter
        def invoice_number(self, invoice_number):
            self._invoice_number = invoice_number

        @property
        def business_name(self):
            return self._business_name

        @business_name.setter
        def business_name(self, business_name):
            self._business_name = business_name

        @property
        def customer_number(self):
            return self._customer_number

        @customer_number.setter
        def customer_number(self, customer_number):
            self._customer_number = customer_number

        @property
        def reference_note(self):
            return self._reference_note

        @reference_note.setter
        def reference_note(self, reference_note):
            self._reference_note = reference_note

        @property
        def sales_tax(self):
            return self._sales_tax

        @sales_tax.setter
        def sales_tax(self, sales_tax):
            self._sales_tax = sales_tax

        @property
        def tax_exempt(self):
            return self._tax_exempt

        @tax_exempt.setter
        def tax_exempt(self, tax_exempt):
            self._tax_exempt = tax_exempt

        @property
        def card_tracks(self):
            return self._card_tracks

        @card_tracks.setter
        def card_tracks(self, card_tracks):
            self._card_tracks = card_tracks

        @property
        def card_zip(self):
            return self._card_zip

        @card_zip.setter
        def card_zip(self, card_zip):
            self._card_zip = card_zip

        @property
        def card_address(self):
            return self._card_address

        @card_address.setter
        def card_address(self, card_address):
            self._card_address = card_address

        @property
        def item_description(self):
            return self._item_description

        @item_description.setter
        def item_description(self, item_description):
            self._item_description = item_description

        @property
        def default_transaction_type(self):
            return self._default_transaction_type

        @default_transaction_type.setter
        def default_transaction_type(self, default_transaction_type):
            self._default_transaction_type = default_transaction_type

# CVVPresenceType

    class CVVPresenceType(object):
        NORMAL = "Normal"
        BYPASS = "Bypass"
        ILLEGIBLE = "Illegible"
        NOTAVAILABLE = "NotAvailable"

        swagger_types = {
        }

        attribute_map = {
        }

        def __init__(self):  # noqa: E501
            """CVVPresenceType - a model defined in Swagger"""  # noqa: E501
            self.discriminator = None

# EmailReceipt

    class EmailReceipt(object):
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

        def __init__(self, transaction_id=None, to_addresses=None, subject=None, header=None, footer=None):  # noqa: E501
            """EmailReceipt - a model defined in Swagger"""  # noqa: E501
            self._transaction_id = None
            self._to_addresses = None
            self._subject = None
            self._header = None
            self._footer = None
            self.discriminator = None
            if transaction_id is not None:
                self.transaction_id = transaction_id
            if to_addresses is not None:
                self.to_addresses = to_addresses
            if subject is not None:
                self.subject = subject
            if header is not None:
                self.header = header
            if footer is not None:
                self.footer = footer

        @property
        def transaction_id(self):
            return self._transaction_id

        @transaction_id.setter
        def transaction_id(self, transaction_id):
            self._transaction_id = transaction_id

        @property
        def to_addresses(self):
            return self._to_addresses

        @to_addresses.setter
        def to_addresses(self, to_addresses):
            self._to_addresses = to_addresses

        @property
        def subject(self):
            return self._subject

        @subject.setter
        def subject(self, subject):
            self._subject = subject

        @property
        def header(self):
            return self._header

        @header.setter
        def header(self, header):
            self._header = header

        @property
        def footer(self):
            return self._footer

        @footer.setter
        def footer(self, footer):
            self._footer = footer

# FieldAccess

    class FieldAccess(object):
        DISABLED = "Disabled"
        ENABLED = "Enabled"
        REQUIRED = "Required"

        swagger_types = {
        }

        attribute_map = {
        }

        def __init__(self):  # noqa: E501
            """FieldAccess - a model defined in Swagger"""  # noqa: E501
            self.discriminator = None

# FieldInfo

    class FieldInfo(object):
        swagger_types = {
            'access': 'FieldAccess',
            'default': 'str'
        }

        attribute_map = {
            'access': 'Access',
            'default': 'Default'
        }

        def __init__(self, access=None, default=None):  # noqa: E501
            """FieldInfo - a model defined in Swagger"""  # noqa: E501
            self._access = None
            self._default = None
            self.discriminator = None
            if access is not None:
                self.access = access
            if default is not None:
                self.default = default

        @property
        def access(self):
            return self._access

        @access.setter
        def access(self, access):
            self._access = access

        @property
        def default(self):
            return self._default

        @default.setter
        def default(self, default):
            self._default = default

# QueryTransaction

    class QueryTransaction(object):
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

        def __init__(self, tran_sequence=None, tran_batch=None, tran_modified=None, tran_processed=None, tran_settled=None, submit_time=None, tran_type=None, tran_amt=None, tran_tax=None, tran_inv=None, tran_po=None, tran_c_num=None, tran_note=None, card_num=None, card_name=None, card_exp=None, avs_street=None, avs_zip=None, cvv_num=None, proc_id=None, proc_resp=None, proc_code=None, proc_mess=None, avs_code=None, avs_resp=None, cvv_code=None, cvv_resp=None, items=None, business_name=None, business_address=None, business_address2=None, business_city=None, business_state=None, business_zip=None, business_country=None, business_website=None, contact_first_name=None, contact_last_name=None, contact_phone=None, contact_fax=None, contact_email=None, contact_title=None, ip=None, tax_exempt=None):  # noqa: E501
            """QueryTransaction - a model defined in Swagger"""  # noqa: E501
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
            if tran_sequence is not None:
                self.tran_sequence = tran_sequence
            if tran_batch is not None:
                self.tran_batch = tran_batch
            if tran_modified is not None:
                self.tran_modified = tran_modified
            if tran_processed is not None:
                self.tran_processed = tran_processed
            if tran_settled is not None:
                self.tran_settled = tran_settled
            if submit_time is not None:
                self.submit_time = submit_time
            if tran_type is not None:
                self.tran_type = tran_type
            if tran_amt is not None:
                self.tran_amt = tran_amt
            if tran_tax is not None:
                self.tran_tax = tran_tax
            if tran_inv is not None:
                self.tran_inv = tran_inv
            if tran_po is not None:
                self.tran_po = tran_po
            if tran_c_num is not None:
                self.tran_c_num = tran_c_num
            if tran_note is not None:
                self.tran_note = tran_note
            if card_num is not None:
                self.card_num = card_num
            if card_name is not None:
                self.card_name = card_name
            if card_exp is not None:
                self.card_exp = card_exp
            if avs_street is not None:
                self.avs_street = avs_street
            if avs_zip is not None:
                self.avs_zip = avs_zip
            if cvv_num is not None:
                self.cvv_num = cvv_num
            if proc_id is not None:
                self.proc_id = proc_id
            if proc_resp is not None:
                self.proc_resp = proc_resp
            if proc_code is not None:
                self.proc_code = proc_code
            if proc_mess is not None:
                self.proc_mess = proc_mess
            if avs_code is not None:
                self.avs_code = avs_code
            if avs_resp is not None:
                self.avs_resp = avs_resp
            if cvv_code is not None:
                self.cvv_code = cvv_code
            if cvv_resp is not None:
                self.cvv_resp = cvv_resp
            if items is not None:
                self.items = items
            if business_name is not None:
                self.business_name = business_name
            if business_address is not None:
                self.business_address = business_address
            if business_address2 is not None:
                self.business_address2 = business_address2
            if business_city is not None:
                self.business_city = business_city
            if business_state is not None:
                self.business_state = business_state
            if business_zip is not None:
                self.business_zip = business_zip
            if business_country is not None:
                self.business_country = business_country
            if business_website is not None:
                self.business_website = business_website
            if contact_first_name is not None:
                self.contact_first_name = contact_first_name
            if contact_last_name is not None:
                self.contact_last_name = contact_last_name
            if contact_phone is not None:
                self.contact_phone = contact_phone
            if contact_fax is not None:
                self.contact_fax = contact_fax
            if contact_email is not None:
                self.contact_email = contact_email
            if contact_title is not None:
                self.contact_title = contact_title
            if ip is not None:
                self.ip = ip
            if tax_exempt is not None:
                self.tax_exempt = tax_exempt

        @property
        def tran_sequence(self):
            return self._tran_sequence

        @tran_sequence.setter
        def tran_sequence(self, tran_sequence):
            self._tran_sequence = tran_sequence

        @property
        def tran_batch(self):
            return self._tran_batch

        @tran_batch.setter
        def tran_batch(self, tran_batch):
            self._tran_batch = tran_batch

        @property
        def tran_modified(self):
            return self._tran_modified

        @tran_modified.setter
        def tran_modified(self, tran_modified):
            self._tran_modified = tran_modified

        @property
        def tran_processed(self):
            return self._tran_processed

        @tran_processed.setter
        def tran_processed(self, tran_processed):
            self._tran_processed = tran_processed

        @property
        def tran_settled(self):
            return self._tran_settled

        @tran_settled.setter
        def tran_settled(self, tran_settled):
            self._tran_settled = tran_settled

        @property
        def submit_time(self):
            return self._submit_time

        @submit_time.setter
        def submit_time(self, submit_time):
            self._submit_time = submit_time

        @property
        def tran_type(self):
            return self._tran_type

        @tran_type.setter
        def tran_type(self, tran_type):
            self._tran_type = tran_type

        @property
        def tran_amt(self):
            return self._tran_amt

        @tran_amt.setter
        def tran_amt(self, tran_amt):
            self._tran_amt = tran_amt

        @property
        def tran_tax(self):
            return self._tran_tax

        @tran_tax.setter
        def tran_tax(self, tran_tax):
            self._tran_tax = tran_tax

        @property
        def tran_inv(self):
            return self._tran_inv

        @tran_inv.setter
        def tran_inv(self, tran_inv):
            self._tran_inv = tran_inv

        @property
        def tran_po(self):
            return self._tran_po

        @tran_po.setter
        def tran_po(self, tran_po):
            self._tran_po = tran_po

        @property
        def tran_c_num(self):
            return self._tran_c_num

        @tran_c_num.setter
        def tran_c_num(self, tran_c_num):
            self._tran_c_num = tran_c_num

        @property
        def tran_note(self):
            return self._tran_note

        @tran_note.setter
        def tran_note(self, tran_note):
            self._tran_note = tran_note

        @property
        def card_num(self):
            return self._card_num

        @card_num.setter
        def card_num(self, card_num):
            self._card_num = card_num

        @property
        def card_name(self):
            return self._card_name

        @card_name.setter
        def card_name(self, card_name):
            self._card_name = card_name

        @property
        def card_exp(self):
            return self._card_exp

        @card_exp.setter
        def card_exp(self, card_exp):
            self._card_exp = card_exp

        @property
        def avs_street(self):
            return self._avs_street

        @avs_street.setter
        def avs_street(self, avs_street):
            self._avs_street = avs_street

        @property
        def avs_zip(self):
            return self._avs_zip

        @avs_zip.setter
        def avs_zip(self, avs_zip):
            self._avs_zip = avs_zip

        @property
        def cvv_num(self):
            return self._cvv_num

        @cvv_num.setter
        def cvv_num(self, cvv_num):
            self._cvv_num = cvv_num

        @property
        def proc_id(self):
            return self._proc_id

        @proc_id.setter
        def proc_id(self, proc_id):
            self._proc_id = proc_id

        @property
        def proc_resp(self):
            return self._proc_resp

        @proc_resp.setter
        def proc_resp(self, proc_resp):
            self._proc_resp = proc_resp

        @property
        def proc_code(self):
            return self._proc_code

        @proc_code.setter
        def proc_code(self, proc_code):
            self._proc_code = proc_code

        @property
        def proc_mess(self):
            return self._proc_mess

        @proc_mess.setter
        def proc_mess(self, proc_mess):
            self._proc_mess = proc_mess

        @property
        def avs_code(self):
            return self._avs_code

        @avs_code.setter
        def avs_code(self, avs_code):
            self._avs_code = avs_code

        @property
        def avs_resp(self):
            return self._avs_resp

        @avs_resp.setter
        def avs_resp(self, avs_resp):
            self._avs_resp = avs_resp

        @property
        def cvv_code(self):
            return self._cvv_code

        @cvv_code.setter
        def cvv_code(self, cvv_code):
            self._cvv_code = cvv_code

        @property
        def cvv_resp(self):
            return self._cvv_resp

        @cvv_resp.setter
        def cvv_resp(self, cvv_resp):
            self._cvv_resp = cvv_resp

        @property
        def items(self):
            return self._items

        @items.setter
        def items(self, items):
            self._items = items

        @property
        def business_name(self):
            return self._business_name

        @business_name.setter
        def business_name(self, business_name):
            self._business_name = business_name

        @property
        def business_address(self):
            return self._business_address

        @business_address.setter
        def business_address(self, business_address):
            self._business_address = business_address

        @property
        def business_address2(self):
            return self._business_address2

        @business_address2.setter
        def business_address2(self, business_address2):
            self._business_address2 = business_address2

        @property
        def business_city(self):
            return self._business_city

        @business_city.setter
        def business_city(self, business_city):
            self._business_city = business_city

        @property
        def business_state(self):
            return self._business_state

        @business_state.setter
        def business_state(self, business_state):
            self._business_state = business_state

        @property
        def business_zip(self):
            return self._business_zip

        @business_zip.setter
        def business_zip(self, business_zip):
            self._business_zip = business_zip

        @property
        def business_country(self):
            return self._business_country

        @business_country.setter
        def business_country(self, business_country):
            self._business_country = business_country

        @property
        def business_website(self):
            return self._business_website

        @business_website.setter
        def business_website(self, business_website):
            self._business_website = business_website

        @property
        def contact_first_name(self):
            return self._contact_first_name

        @contact_first_name.setter
        def contact_first_name(self, contact_first_name):
            self._contact_first_name = contact_first_name

        @property
        def contact_last_name(self):
            return self._contact_last_name

        @contact_last_name.setter
        def contact_last_name(self, contact_last_name):
            self._contact_last_name = contact_last_name

        @property
        def contact_phone(self):
            return self._contact_phone

        @contact_phone.setter
        def contact_phone(self, contact_phone):
            self._contact_phone = contact_phone

        @property
        def contact_fax(self):
            return self._contact_fax

        @contact_fax.setter
        def contact_fax(self, contact_fax):
            self._contact_fax = contact_fax

        @property
        def contact_email(self):
            return self._contact_email

        @contact_email.setter
        def contact_email(self, contact_email):
            self._contact_email = contact_email

        @property
        def contact_title(self):
            return self._contact_title

        @contact_title.setter
        def contact_title(self, contact_title):
            self._contact_title = contact_title

        @property
        def ip(self):
            return self._ip

        @ip.setter
        def ip(self, ip):
            self._ip = ip

        @property
        def tax_exempt(self):
            return self._tax_exempt

        @tax_exempt.setter
        def tax_exempt(self, tax_exempt):
            self._tax_exempt = tax_exempt

# Receipt

    class Receipt(object):
        swagger_types = {
            'header': 'ReceiptCustomLines',
            'footer': 'ReceiptCustomLines'
        }

        attribute_map = {
            'header': 'Header',
            'footer': 'Footer'
        }

        def __init__(self, header=None, footer=None):  # noqa: E501
            """Receipt - a model defined in Swagger"""  # noqa: E501
            self._header = None
            self._footer = None
            self.discriminator = None
            if header is not None:
                self.header = header
            if footer is not None:
                self.footer = footer

        @property
        def header(self):
            return self._header

        @header.setter
        def header(self, header):
            self._header = header

        @property
        def footer(self):
            return self._footer

        @footer.setter
        def footer(self, footer):
            self._footer = footer

# ReceiptCustomLines

    class ReceiptCustomLines(object):
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

        def __init__(self, custom_line1=None, custom_line2=None, custom_line3=None, custom_line4=None):  # noqa: E501
            """ReceiptCustomLines - a model defined in Swagger"""  # noqa: E501
            self._custom_line1 = None
            self._custom_line2 = None
            self._custom_line3 = None
            self._custom_line4 = None
            self.discriminator = None
            if custom_line1 is not None:
                self.custom_line1 = custom_line1
            if custom_line2 is not None:
                self.custom_line2 = custom_line2
            if custom_line3 is not None:
                self.custom_line3 = custom_line3
            if custom_line4 is not None:
                self.custom_line4 = custom_line4

        @property
        def custom_line1(self):
            return self._custom_line1

        @custom_line1.setter
        def custom_line1(self, custom_line1):
            self._custom_line1 = custom_line1

        @property
        def custom_line2(self):
            return self._custom_line2

        @custom_line2.setter
        def custom_line2(self, custom_line2):
            self._custom_line2 = custom_line2

        @property
        def custom_line3(self):
            return self._custom_line3

        @custom_line3.setter
        def custom_line3(self, custom_line3):
            self._custom_line3 = custom_line3

        @property
        def custom_line4(self):
            return self._custom_line4

        @custom_line4.setter
        def custom_line4(self, custom_line4):
            self._custom_line4 = custom_line4

# Record

    class Record(object):
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

        def __init__(self, response=None, id=None, reference=None, business=None, contact=None, po=None, invoice=None, customer=None, tax_exempt=None, note=None, credit_cards=None, checks=None):  # noqa: E501
            """Record - a model defined in Swagger"""  # noqa: E501
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
            if response is not None:
                self.response = response
            if id is not None:
                self.id = id
            if reference is not None:
                self.reference = reference
            if business is not None:
                self.business = business
            if contact is not None:
                self.contact = contact
            if po is not None:
                self.po = po
            if invoice is not None:
                self.invoice = invoice
            if customer is not None:
                self.customer = customer
            if tax_exempt is not None:
                self.tax_exempt = tax_exempt
            if note is not None:
                self.note = note
            if credit_cards is not None:
                self.credit_cards = credit_cards
            if checks is not None:
                self.checks = checks

        @property
        def response(self):
            return self._response

        @response.setter
        def response(self, response):
            self._response = response

        @property
        def id(self):
            return self._id

        @id.setter
        def id(self, id):
            self._id = id

        @property
        def reference(self):
            return self._reference

        @reference.setter
        def reference(self, reference):
            self._reference = reference

        @property
        def business(self):
            return self._business

        @business.setter
        def business(self, business):
            self._business = business

        @property
        def contact(self):
            return self._contact

        @contact.setter
        def contact(self, contact):
            self._contact = contact

        @property
        def po(self):
            return self._po

        @po.setter
        def po(self, po):
            self._po = po

        @property
        def invoice(self):
            return self._invoice

        @invoice.setter
        def invoice(self, invoice):
            self._invoice = invoice

        @property
        def customer(self):
            return self._customer

        @customer.setter
        def customer(self, customer):
            self._customer = customer

        @property
        def tax_exempt(self):
            return self._tax_exempt

        @tax_exempt.setter
        def tax_exempt(self, tax_exempt):
            self._tax_exempt = tax_exempt

        @property
        def note(self):
            return self._note

        @note.setter
        def note(self, note):
            self._note = note

        @property
        def credit_cards(self):
            return self._credit_cards

        @credit_cards.setter
        def credit_cards(self, credit_cards):
            self._credit_cards = credit_cards

        @property
        def checks(self):
            return self._checks

        @checks.setter
        def checks(self, checks):
            self._checks = checks

# Response

    class Response(object):
        swagger_types = {
            'error': 'bool',
            'message': 'str'
        }

        attribute_map = {
            'error': 'Error',
            'message': 'Message'
        }

        def __init__(self, error=None, message=None):  # noqa: E501
            """Response - a model defined in Swagger"""  # noqa: E501
            self._error = None
            self._message = None
            self.discriminator = None
            if error is not None:
                self.error = error
            if message is not None:
                self.message = message

        @property
        def error(self):
            return self._error

        @error.setter
        def error(self, error):
            self._error = error

        @property
        def message(self):
            return self._message

        @message.setter
        def message(self, message):
            self._message = message

# SearchVault

    class SearchVault(object):
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

        def __init__(self, reference=None, business_name=None, first_name=None, last_name=None):  # noqa: E501
            """SearchVault - a model defined in Swagger"""  # noqa: E501
            self._reference = None
            self._business_name = None
            self._first_name = None
            self._last_name = None
            self.discriminator = None
            if reference is not None:
                self.reference = reference
            if business_name is not None:
                self.business_name = business_name
            if first_name is not None:
                self.first_name = first_name
            if last_name is not None:
                self.last_name = last_name

        @property
        def reference(self):
            return self._reference

        @reference.setter
        def reference(self, reference):
            self._reference = reference

        @property
        def business_name(self):
            return self._business_name

        @business_name.setter
        def business_name(self, business_name):
            self._business_name = business_name

        @property
        def first_name(self):
            return self._first_name

        @first_name.setter
        def first_name(self, first_name):
            self._first_name = first_name

        @property
        def last_name(self):
            return self._last_name

        @last_name.setter
        def last_name(self, last_name):
            self._last_name = last_name

# Settings

    class Settings(object):
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

        def __init__(self, credit_card_transaction_settings=None, check_transaction_settings=None, business=None, main_contact=None, receipt40=None, receipt80=None, print_signature_line=None, response=None, account_id=None, copy_email_receipt=None):  # noqa: E501
            """Settings - a model defined in Swagger"""  # noqa: E501
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
            if credit_card_transaction_settings is not None:
                self.credit_card_transaction_settings = credit_card_transaction_settings
            if check_transaction_settings is not None:
                self.check_transaction_settings = check_transaction_settings
            if business is not None:
                self.business = business
            if main_contact is not None:
                self.main_contact = main_contact
            if receipt40 is not None:
                self.receipt40 = receipt40
            if receipt80 is not None:
                self.receipt80 = receipt80
            if print_signature_line is not None:
                self.print_signature_line = print_signature_line
            if response is not None:
                self.response = response
            if account_id is not None:
                self.account_id = account_id
            if copy_email_receipt is not None:
                self.copy_email_receipt = copy_email_receipt

        @property
        def credit_card_transaction_settings(self):
            return self._credit_card_transaction_settings

        @credit_card_transaction_settings.setter
        def credit_card_transaction_settings(self, credit_card_transaction_settings):
            self._credit_card_transaction_settings = credit_card_transaction_settings

        @property
        def check_transaction_settings(self):
            return self._check_transaction_settings

        @check_transaction_settings.setter
        def check_transaction_settings(self, check_transaction_settings):
            self._check_transaction_settings = check_transaction_settings

        @property
        def business(self):
            return self._business

        @business.setter
        def business(self, business):
            self._business = business

        @property
        def main_contact(self):
            return self._main_contact

        @main_contact.setter
        def main_contact(self, main_contact):
            self._main_contact = main_contact

        @property
        def receipt40(self):
            return self._receipt40

        @receipt40.setter
        def receipt40(self, receipt40):
            self._receipt40 = receipt40

        @property
        def receipt80(self):
            return self._receipt80

        @receipt80.setter
        def receipt80(self, receipt80):
            self._receipt80 = receipt80

        @property
        def print_signature_line(self):
            return self._print_signature_line

        @print_signature_line.setter
        def print_signature_line(self, print_signature_line):
            self._print_signature_line = print_signature_line

        @property
        def response(self):
            return self._response

        @response.setter
        def response(self, response):
            self._response = response

        @property
        def account_id(self):
            return self._account_id

        @account_id.setter
        def account_id(self, account_id):
            self._account_id = account_id

        @property
        def copy_email_receipt(self):
            return self._copy_email_receipt

        @copy_email_receipt.setter
        def copy_email_receipt(self, copy_email_receipt):
            self._copy_email_receipt = copy_email_receipt

# TerminalSettings

    class TerminalSettings(object):
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

        def __init__(self, id=None, terminal_id=None, sec_code=None, gateway_terminal=None, consumer_credits=None, dl_required=None, check_verify=None, identity_verify=None):  # noqa: E501
            """TerminalSettings - a model defined in Swagger"""  # noqa: E501
            self._id = None
            self._terminal_id = None
            self._sec_code = None
            self._gateway_terminal = None
            self._consumer_credits = None
            self._dl_required = None
            self._check_verify = None
            self._identity_verify = None
            self.discriminator = None
            if id is not None:
                self.id = id
            if terminal_id is not None:
                self.terminal_id = terminal_id
            if sec_code is not None:
                self.sec_code = sec_code
            if gateway_terminal is not None:
                self.gateway_terminal = gateway_terminal
            if consumer_credits is not None:
                self.consumer_credits = consumer_credits
            if dl_required is not None:
                self.dl_required = dl_required
            if check_verify is not None:
                self.check_verify = check_verify
            if identity_verify is not None:
                self.identity_verify = identity_verify

        @property
        def id(self):
            return self._id

        @id.setter
        def id(self, id):
            self._id = id

        @property
        def terminal_id(self):
            return self._terminal_id

        @terminal_id.setter
        def terminal_id(self, terminal_id):
            self._terminal_id = terminal_id

        @property
        def sec_code(self):
            return self._sec_code

        @sec_code.setter
        def sec_code(self, sec_code):
            self._sec_code = sec_code

        @property
        def gateway_terminal(self):
            return self._gateway_terminal

        @gateway_terminal.setter
        def gateway_terminal(self, gateway_terminal):
            self._gateway_terminal = gateway_terminal

        @property
        def consumer_credits(self):
            return self._consumer_credits

        @consumer_credits.setter
        def consumer_credits(self, consumer_credits):
            self._consumer_credits = consumer_credits

        @property
        def dl_required(self):
            return self._dl_required

        @dl_required.setter
        def dl_required(self, dl_required):
            self._dl_required = dl_required

        @property
        def check_verify(self):
            return self._check_verify

        @check_verify.setter
        def check_verify(self, check_verify):
            self._check_verify = check_verify

        @property
        def identity_verify(self):
            return self._identity_verify

        @identity_verify.setter
        def identity_verify(self, identity_verify):
            self._identity_verify = identity_verify

# Transaction

    class Transaction(object):
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

        def __init__(self, submit_time=None, tran_type=None, tran_amt=None, tran_tax=None, tran_inv=None, tran_po=None, tran_c_num=None, tran_note=None, card_num=None, card_name=None, card_exp=None, card_type=None, avs_street=None, avs_zip=None, cvv_num=None, proc_id=None, proc_resp=None, proc_code=None, proc_mess=None, avs_code=None, avs_resp=None, cvv_code=None, cvv_resp=None, items=None, business_name=None, business_address=None, business_address2=None, business_city=None, business_state=None, business_zip=None, business_country=None, business_website=None, contact_first_name=None, contact_last_name=None, contact_phone=None, contact_fax=None, contact_email=None, contact_title=None, ip=None, tax_exempt=None):  # noqa: E501
            """Transaction - a model defined in Swagger"""  # noqa: E501
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
            if submit_time is not None:
                self.submit_time = submit_time
            if tran_type is not None:
                self.tran_type = tran_type
            if tran_amt is not None:
                self.tran_amt = tran_amt
            if tran_tax is not None:
                self.tran_tax = tran_tax
            if tran_inv is not None:
                self.tran_inv = tran_inv
            if tran_po is not None:
                self.tran_po = tran_po
            if tran_c_num is not None:
                self.tran_c_num = tran_c_num
            if tran_note is not None:
                self.tran_note = tran_note
            if card_num is not None:
                self.card_num = card_num
            if card_name is not None:
                self.card_name = card_name
            if card_exp is not None:
                self.card_exp = card_exp
            if card_type is not None:
                self.card_type = card_type
            if avs_street is not None:
                self.avs_street = avs_street
            if avs_zip is not None:
                self.avs_zip = avs_zip
            if cvv_num is not None:
                self.cvv_num = cvv_num
            if proc_id is not None:
                self.proc_id = proc_id
            if proc_resp is not None:
                self.proc_resp = proc_resp
            if proc_code is not None:
                self.proc_code = proc_code
            if proc_mess is not None:
                self.proc_mess = proc_mess
            if avs_code is not None:
                self.avs_code = avs_code
            if avs_resp is not None:
                self.avs_resp = avs_resp
            if cvv_code is not None:
                self.cvv_code = cvv_code
            if cvv_resp is not None:
                self.cvv_resp = cvv_resp
            if items is not None:
                self.items = items
            if business_name is not None:
                self.business_name = business_name
            if business_address is not None:
                self.business_address = business_address
            if business_address2 is not None:
                self.business_address2 = business_address2
            if business_city is not None:
                self.business_city = business_city
            if business_state is not None:
                self.business_state = business_state
            if business_zip is not None:
                self.business_zip = business_zip
            if business_country is not None:
                self.business_country = business_country
            if business_website is not None:
                self.business_website = business_website
            if contact_first_name is not None:
                self.contact_first_name = contact_first_name
            if contact_last_name is not None:
                self.contact_last_name = contact_last_name
            if contact_phone is not None:
                self.contact_phone = contact_phone
            if contact_fax is not None:
                self.contact_fax = contact_fax
            if contact_email is not None:
                self.contact_email = contact_email
            if contact_title is not None:
                self.contact_title = contact_title
            if ip is not None:
                self.ip = ip
            if tax_exempt is not None:
                self.tax_exempt = tax_exempt

        @property
        def submit_time(self):
            return self._submit_time

        @submit_time.setter
        def submit_time(self, submit_time):
            self._submit_time = submit_time

        @property
        def tran_type(self):
            return self._tran_type

        @tran_type.setter
        def tran_type(self, tran_type):
            self._tran_type = tran_type

        @property
        def tran_amt(self):
            return self._tran_amt

        @tran_amt.setter
        def tran_amt(self, tran_amt):
            self._tran_amt = tran_amt

        @property
        def tran_tax(self):
            return self._tran_tax

        @tran_tax.setter
        def tran_tax(self, tran_tax):
            self._tran_tax = tran_tax

        @property
        def tran_inv(self):
            return self._tran_inv

        @tran_inv.setter
        def tran_inv(self, tran_inv):
            self._tran_inv = tran_inv

        @property
        def tran_po(self):
            return self._tran_po

        @tran_po.setter
        def tran_po(self, tran_po):
            self._tran_po = tran_po

        @property
        def tran_c_num(self):
            return self._tran_c_num

        @tran_c_num.setter
        def tran_c_num(self, tran_c_num):
            self._tran_c_num = tran_c_num

        @property
        def tran_note(self):
            return self._tran_note

        @tran_note.setter
        def tran_note(self, tran_note):
            self._tran_note = tran_note

        @property
        def card_num(self):
            return self._card_num

        @card_num.setter
        def card_num(self, card_num):
            self._card_num = card_num

        @property
        def card_name(self):
            return self._card_name

        @card_name.setter
        def card_name(self, card_name):
            self._card_name = card_name

        @property
        def card_exp(self):
            return self._card_exp

        @card_exp.setter
        def card_exp(self, card_exp):
            self._card_exp = card_exp

        @property
        def card_type(self):
            return self._card_type

        @card_type.setter
        def card_type(self, card_type):
            self._card_type = card_type

        @property
        def avs_street(self):
            return self._avs_street

        @avs_street.setter
        def avs_street(self, avs_street):
            self._avs_street = avs_street

        @property
        def avs_zip(self):
            return self._avs_zip

        @avs_zip.setter
        def avs_zip(self, avs_zip):
            self._avs_zip = avs_zip

        @property
        def cvv_num(self):
            return self._cvv_num

        @cvv_num.setter
        def cvv_num(self, cvv_num):
            self._cvv_num = cvv_num

        @property
        def proc_id(self):
            return self._proc_id

        @proc_id.setter
        def proc_id(self, proc_id):
            self._proc_id = proc_id

        @property
        def proc_resp(self):
            return self._proc_resp

        @proc_resp.setter
        def proc_resp(self, proc_resp):
            self._proc_resp = proc_resp

        @property
        def proc_code(self):
            return self._proc_code

        @proc_code.setter
        def proc_code(self, proc_code):
            self._proc_code = proc_code

        @property
        def proc_mess(self):
            return self._proc_mess

        @proc_mess.setter
        def proc_mess(self, proc_mess):
            self._proc_mess = proc_mess

        @property
        def avs_code(self):
            return self._avs_code

        @avs_code.setter
        def avs_code(self, avs_code):
            self._avs_code = avs_code

        @property
        def avs_resp(self):
            return self._avs_resp

        @avs_resp.setter
        def avs_resp(self, avs_resp):
            self._avs_resp = avs_resp

        @property
        def cvv_code(self):
            return self._cvv_code

        @cvv_code.setter
        def cvv_code(self, cvv_code):
            self._cvv_code = cvv_code

        @property
        def cvv_resp(self):
            return self._cvv_resp

        @cvv_resp.setter
        def cvv_resp(self, cvv_resp):
            self._cvv_resp = cvv_resp

        @property
        def items(self):
            return self._items

        @items.setter
        def items(self, items):
            self._items = items

        @property
        def business_name(self):
            return self._business_name

        @business_name.setter
        def business_name(self, business_name):
            self._business_name = business_name

        @property
        def business_address(self):
            return self._business_address

        @business_address.setter
        def business_address(self, business_address):
            self._business_address = business_address

        @property
        def business_address2(self):
            return self._business_address2

        @business_address2.setter
        def business_address2(self, business_address2):
            self._business_address2 = business_address2

        @property
        def business_city(self):
            return self._business_city

        @business_city.setter
        def business_city(self, business_city):
            self._business_city = business_city

        @property
        def business_state(self):
            return self._business_state

        @business_state.setter
        def business_state(self, business_state):
            self._business_state = business_state

        @property
        def business_zip(self):
            return self._business_zip

        @business_zip.setter
        def business_zip(self, business_zip):
            self._business_zip = business_zip

        @property
        def business_country(self):
            return self._business_country

        @business_country.setter
        def business_country(self, business_country):
            self._business_country = business_country

        @property
        def business_website(self):
            return self._business_website

        @business_website.setter
        def business_website(self, business_website):
            self._business_website = business_website

        @property
        def contact_first_name(self):
            return self._contact_first_name

        @contact_first_name.setter
        def contact_first_name(self, contact_first_name):
            self._contact_first_name = contact_first_name

        @property
        def contact_last_name(self):
            return self._contact_last_name

        @contact_last_name.setter
        def contact_last_name(self, contact_last_name):
            self._contact_last_name = contact_last_name

        @property
        def contact_phone(self):
            return self._contact_phone

        @contact_phone.setter
        def contact_phone(self, contact_phone):
            self._contact_phone = contact_phone

        @property
        def contact_fax(self):
            return self._contact_fax

        @contact_fax.setter
        def contact_fax(self, contact_fax):
            self._contact_fax = contact_fax

        @property
        def contact_email(self):
            return self._contact_email

        @contact_email.setter
        def contact_email(self, contact_email):
            self._contact_email = contact_email

        @property
        def contact_title(self):
            return self._contact_title

        @contact_title.setter
        def contact_title(self, contact_title):
            self._contact_title = contact_title

        @property
        def ip(self):
            return self._ip

        @ip.setter
        def ip(self, ip):
            self._ip = ip

        @property
        def tax_exempt(self):
            return self._tax_exempt

        @tax_exempt.setter
        def tax_exempt(self, tax_exempt):
            self._tax_exempt = tax_exempt

# TransactionItem

    class TransactionItem(object):
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

        def __init__(self, tax_included=None, credit=None, extended_amount=None, item_number=None, unit_cost=None, quantity=None, description=None, discount=None, tax=None, commodity_code=None, unit_of_measure=None):  # noqa: E501
            """TransactionItem - a model defined in Swagger"""  # noqa: E501
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
            if tax_included is not None:
                self.tax_included = tax_included
            if credit is not None:
                self.credit = credit
            if extended_amount is not None:
                self.extended_amount = extended_amount
            if item_number is not None:
                self.item_number = item_number
            if unit_cost is not None:
                self.unit_cost = unit_cost
            if quantity is not None:
                self.quantity = quantity
            if description is not None:
                self.description = description
            if discount is not None:
                self.discount = discount
            if tax is not None:
                self.tax = tax
            if commodity_code is not None:
                self.commodity_code = commodity_code
            if unit_of_measure is not None:
                self.unit_of_measure = unit_of_measure

        @property
        def tax_included(self):
            return self._tax_included

        @tax_included.setter
        def tax_included(self, tax_included):
            self._tax_included = tax_included

        @property
        def credit(self):
            return self._credit

        @credit.setter
        def credit(self, credit):
            self._credit = credit

        @property
        def extended_amount(self):
            return self._extended_amount

        @extended_amount.setter
        def extended_amount(self, extended_amount):
            self._extended_amount = extended_amount

        @property
        def item_number(self):
            return self._item_number

        @item_number.setter
        def item_number(self, item_number):
            self._item_number = item_number

        @property
        def unit_cost(self):
            return self._unit_cost

        @unit_cost.setter
        def unit_cost(self, unit_cost):
            self._unit_cost = unit_cost

        @property
        def quantity(self):
            return self._quantity

        @quantity.setter
        def quantity(self, quantity):
            self._quantity = quantity

        @property
        def description(self):
            return self._description

        @description.setter
        def description(self, description):
            self._description = description

        @property
        def discount(self):
            return self._discount

        @discount.setter
        def discount(self, discount):
            self._discount = discount

        @property
        def tax(self):
            return self._tax

        @tax.setter
        def tax(self, tax):
            self._tax = tax

        @property
        def commodity_code(self):
            return self._commodity_code

        @commodity_code.setter
        def commodity_code(self, commodity_code):
            self._commodity_code = commodity_code

        @property
        def unit_of_measure(self):
            return self._unit_of_measure

        @unit_of_measure.setter
        def unit_of_measure(self, unit_of_measure):
            self._unit_of_measure = unit_of_measure

# TransactionType

    class TransactionType(object):
        SALE = "Sale"
        CREDIT = "Credit"
        AUTHORIZATION = "Authorization"
        PREAUTH = "PreAuth"
        POSTAUTH = "PostAuth"
        FORCEAUTH = "ForceAuth"
        VOID = "Void"
        QUERY = "Query"
        VERIFY = "Verify"
        MARK = "Mark"
        RETURN = "Return"
        USE = "Use"

        swagger_types = {
        }

        attribute_map = {
        }

        def __init__(self):  # noqa: E501
            """TransactionType - a model defined in Swagger"""  # noqa: E501
            self.discriminator = None

# UpdateTransactionInfo

    class UpdateTransactionInfo(object):
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

        def __init__(self, invoice_number=None, customer_number=None, po_number=None, note=None):  # noqa: E501
            """UpdateTransactionInfo - a model defined in Swagger"""  # noqa: E501
            self._invoice_number = None
            self._customer_number = None
            self._po_number = None
            self._note = None
            self.discriminator = None
            if invoice_number is not None:
                self.invoice_number = invoice_number
            if customer_number is not None:
                self.customer_number = customer_number
            if po_number is not None:
                self.po_number = po_number
            if note is not None:
                self.note = note

        @property
        def invoice_number(self):
            return self._invoice_number

        @invoice_number.setter
        def invoice_number(self, invoice_number):
            self._invoice_number = invoice_number

        @property
        def customer_number(self):
            return self._customer_number

        @customer_number.setter
        def customer_number(self, customer_number):
            self._customer_number = customer_number

        @property
        def po_number(self):
            return self._po_number

        @po_number.setter
        def po_number(self, po_number):
            self._po_number = po_number

        @property
        def note(self):
            return self._note

        @note.setter
        def note(self, note):
            self._note = note

# VaultCheck

    class VaultCheck(object):
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

        def __init__(self, response=None, check_id=None, main=None, check_routing=None, check_account=None, check_number=None, check_first_name=None, check_last_name=None, note=None, masked_routing=None, masked_account=None, account_type=None):  # noqa: E501
            """VaultCheck - a model defined in Swagger"""  # noqa: E501
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
            if response is not None:
                self.response = response
            if check_id is not None:
                self.check_id = check_id
            if main is not None:
                self.main = main
            if check_routing is not None:
                self.check_routing = check_routing
            if check_account is not None:
                self.check_account = check_account
            if check_number is not None:
                self.check_number = check_number
            if check_first_name is not None:
                self.check_first_name = check_first_name
            if check_last_name is not None:
                self.check_last_name = check_last_name
            if note is not None:
                self.note = note
            if masked_routing is not None:
                self.masked_routing = masked_routing
            if masked_account is not None:
                self.masked_account = masked_account
            if account_type is not None:
                self.account_type = account_type

        @property
        def response(self):
            return self._response

        @response.setter
        def response(self, response):
            self._response = response

        @property
        def check_id(self):
            return self._check_id

        @check_id.setter
        def check_id(self, check_id):
            self._check_id = check_id

        @property
        def main(self):
            return self._main

        @main.setter
        def main(self, main):
            self._main = main

        @property
        def check_routing(self):
            return self._check_routing

        @check_routing.setter
        def check_routing(self, check_routing):
            self._check_routing = check_routing

        @property
        def check_account(self):
            return self._check_account

        @check_account.setter
        def check_account(self, check_account):
            self._check_account = check_account

        @property
        def check_number(self):
            return self._check_number

        @check_number.setter
        def check_number(self, check_number):
            self._check_number = check_number

        @property
        def check_first_name(self):
            return self._check_first_name

        @check_first_name.setter
        def check_first_name(self, check_first_name):
            self._check_first_name = check_first_name

        @property
        def check_last_name(self):
            return self._check_last_name

        @check_last_name.setter
        def check_last_name(self, check_last_name):
            self._check_last_name = check_last_name

        @property
        def note(self):
            return self._note

        @note.setter
        def note(self, note):
            self._note = note

        @property
        def masked_routing(self):
            return self._masked_routing

        @masked_routing.setter
        def masked_routing(self, masked_routing):
            self._masked_routing = masked_routing

        @property
        def masked_account(self):
            return self._masked_account

        @masked_account.setter
        def masked_account(self, masked_account):
            self._masked_account = masked_account

        @property
        def account_type(self):
            return self._account_type

        @account_type.setter
        def account_type(self, account_type):
            self._account_type = account_type

# VaultCreditCard

    class VaultCreditCard(object):
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

        def __init__(self, magnetic_tracks=None, track1=None, track2=None, number=None, masked_number=None, holder=None, exp_date=None, cvv=None, address=None, city=None, state=None, zip=None, swiped=None, type_string=None, cvv_type=None, not_present=None, response=None, card_id=None, note=None, main=None):  # noqa: E501
            """VaultCreditCard - a model defined in Swagger"""  # noqa: E501
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
            if magnetic_tracks is not None:
                self.magnetic_tracks = magnetic_tracks
            if track1 is not None:
                self.track1 = track1
            if track2 is not None:
                self.track2 = track2
            if number is not None:
                self.number = number
            if masked_number is not None:
                self.masked_number = masked_number
            if holder is not None:
                self.holder = holder
            if exp_date is not None:
                self.exp_date = exp_date
            if cvv is not None:
                self.cvv = cvv
            if address is not None:
                self.address = address
            if city is not None:
                self.city = city
            if state is not None:
                self.state = state
            if zip is not None:
                self.zip = zip
            if swiped is not None:
                self.swiped = swiped
            if type_string is not None:
                self.type_string = type_string
            if cvv_type is not None:
                self.cvv_type = cvv_type
            if not_present is not None:
                self.not_present = not_present
            if response is not None:
                self.response = response
            if card_id is not None:
                self.card_id = card_id
            if note is not None:
                self.note = note
            if main is not None:
                self.main = main

        @property
        def magnetic_tracks(self):
            return self._magnetic_tracks

        @magnetic_tracks.setter
        def magnetic_tracks(self, magnetic_tracks):
            self._magnetic_tracks = magnetic_tracks

        @property
        def track1(self):
            return self._track1

        @track1.setter
        def track1(self, track1):
            self._track1 = track1

        @property
        def track2(self):
            return self._track2

        @track2.setter
        def track2(self, track2):
            self._track2 = track2

        @property
        def number(self):
            return self._number

        @number.setter
        def number(self, number):
            self._number = number

        @property
        def masked_number(self):
            return self._masked_number

        @masked_number.setter
        def masked_number(self, masked_number):
            self._masked_number = masked_number

        @property
        def holder(self):
            return self._holder

        @holder.setter
        def holder(self, holder):
            self._holder = holder

        @property
        def exp_date(self):
            return self._exp_date

        @exp_date.setter
        def exp_date(self, exp_date):
            self._exp_date = exp_date

        @property
        def cvv(self):
            return self._cvv

        @cvv.setter
        def cvv(self, cvv):
            self._cvv = cvv

        @property
        def address(self):
            return self._address

        @address.setter
        def address(self, address):
            self._address = address

        @property
        def city(self):
            return self._city

        @city.setter
        def city(self, city):
            self._city = city

        @property
        def state(self):
            return self._state

        @state.setter
        def state(self, state):
            self._state = state

        @property
        def zip(self):
            return self._zip

        @zip.setter
        def zip(self, zip):
            self._zip = zip

        @property
        def swiped(self):
            return self._swiped

        @swiped.setter
        def swiped(self, swiped):
            self._swiped = swiped

        @property
        def type_string(self):
            return self._type_string

        @type_string.setter
        def type_string(self, type_string):
            self._type_string = type_string

        @property
        def cvv_type(self):
            return self._cvv_type

        @cvv_type.setter
        def cvv_type(self, cvv_type):
            self._cvv_type = cvv_type

        @property
        def not_present(self):
            return self._not_present

        @not_present.setter
        def not_present(self, not_present):
            self._not_present = not_present

        @property
        def response(self):
            return self._response

        @response.setter
        def response(self, response):
            self._response = response

        @property
        def card_id(self):
            return self._card_id

        @card_id.setter
        def card_id(self, card_id):
            self._card_id = card_id

        @property
        def note(self):
            return self._note

        @note.setter
        def note(self, note):
            self._note = note

        @property
        def main(self):
            return self._main

        @main.setter
        def main(self, main):
            self._main = main

# coding: utf-8

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

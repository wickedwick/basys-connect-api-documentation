# coding: utf-8

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

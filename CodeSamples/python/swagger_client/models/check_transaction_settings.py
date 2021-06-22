# coding: utf-8

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

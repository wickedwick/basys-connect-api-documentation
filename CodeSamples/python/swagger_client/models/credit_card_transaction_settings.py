# coding: utf-8

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

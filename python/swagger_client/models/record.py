# coding: utf-8

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

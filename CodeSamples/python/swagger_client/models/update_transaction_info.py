# coding: utf-8

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

# coding: utf-8

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

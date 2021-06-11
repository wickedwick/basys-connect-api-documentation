# coding: utf-8

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

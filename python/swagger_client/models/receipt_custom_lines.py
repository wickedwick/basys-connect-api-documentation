# coding: utf-8

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

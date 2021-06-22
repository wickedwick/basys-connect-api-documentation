# coding: utf-8

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

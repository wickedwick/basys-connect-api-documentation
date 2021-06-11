# coding: utf-8

class Business(object):
    swagger_types = {
        'address': 'Address',
        'name': 'str',
        'phone': 'str',
        'fax': 'str',
        'web_site': 'str'
    }

    attribute_map = {
        'address': 'Address',
        'name': 'Name',
        'phone': 'Phone',
        'fax': 'Fax',
        'web_site': 'WebSite'
    }

    def __init__(self, address=None, name=None, phone=None, fax=None, web_site=None):  # noqa: E501
        """Business - a model defined in Swagger"""  # noqa: E501
        self._address = None
        self._name = None
        self._phone = None
        self._fax = None
        self._web_site = None
        self.discriminator = None
        if address is not None:
            self.address = address
        if name is not None:
            self.name = name
        if phone is not None:
            self.phone = phone
        if fax is not None:
            self.fax = fax
        if web_site is not None:
            self.web_site = web_site

    @property
    def address(self):
        return self._address

    @address.setter
    def address(self, address):
        self._address = address

    @property
    def name(self):
        return self._name

    @name.setter
    def name(self, name):
        self._name = name

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
    def web_site(self):
        return self._web_site

    @web_site.setter
    def web_site(self, web_site):
        self._web_site = web_site

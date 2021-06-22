# coding: utf-8

class Address(object):
    swagger_types = {
        'address_line1': 'str',
        'address_line2': 'str',
        'city': 'str',
        'state': 'str',
        'zip_code': 'str'
    }

    attribute_map = {
        'address_line1': 'AddressLine1',
        'address_line2': 'AddressLine2',
        'city': 'City',
        'state': 'State',
        'zip_code': 'ZipCode'
    }

    def __init__(self, address_line1=None, address_line2=None, city=None, state=None, zip_code=None):  # noqa: E501
        """Address - a model defined in Swagger"""  # noqa: E501
        self._address_line1 = None
        self._address_line2 = None
        self._city = None
        self._state = None
        self._zip_code = None
        self.discriminator = None
        if address_line1 is not None:
            self.address_line1 = address_line1
        if address_line2 is not None:
            self.address_line2 = address_line2
        if city is not None:
            self.city = city
        if state is not None:
            self.state = state
        if zip_code is not None:
            self.zip_code = zip_code

    @property
    def address_line1(self):
        return self._address_line1

    @address_line1.setter
    def address_line1(self, address_line1):
        self._address_line1 = address_line1

    @property
    def address_line2(self):
        return self._address_line2

    @address_line2.setter
    def address_line2(self, address_line2):
        self._address_line2 = address_line2

    @property
    def city(self):
        return self._city

    @city.setter
    def city(self, city):
        self._city = city

    @property
    def state(self):
        return self._state

    @state.setter
    def state(self, state):
        self._state = state

    @property
    def zip_code(self):
        return self._zip_code

    @zip_code.setter
    def zip_code(self, zip_code):
        self._zip_code = zip_code

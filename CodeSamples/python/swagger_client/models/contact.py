# coding: utf-8

class Contact(object):
    swagger_types = {
        'first_name': 'str',
        'last_name': 'str',
        'name': 'str',
        'title': 'str',
        'phone': 'str',
        'email': 'str'
    }

    attribute_map = {
        'first_name': 'FirstName',
        'last_name': 'LastName',
        'name': 'Name',
        'title': 'Title',
        'phone': 'Phone',
        'email': 'Email'
    }

    def __init__(self, first_name=None, last_name=None, name=None, title=None, phone=None, email=None):  # noqa: E501
        """Contact - a model defined in Swagger"""  # noqa: E501
        self._first_name = None
        self._last_name = None
        self._name = None
        self._title = None
        self._phone = None
        self._email = None
        self.discriminator = None
        if first_name is not None:
            self.first_name = first_name
        if last_name is not None:
            self.last_name = last_name
        if name is not None:
            self.name = name
        if title is not None:
            self.title = title
        if phone is not None:
            self.phone = phone
        if email is not None:
            self.email = email

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

    @property
    def name(self):
        return self._name

    @name.setter
    def name(self, name):
        self._name = name

    @property
    def title(self):
        return self._title

    @title.setter
    def title(self, title):
        self._title = title

    @property
    def phone(self):
        return self._phone

    @phone.setter
    def phone(self, phone):
        self._phone = phone

    @property
    def email(self):
        return self._email

    @email.setter
    def email(self, email):
        self._email = email

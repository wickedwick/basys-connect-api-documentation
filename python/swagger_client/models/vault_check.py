# coding: utf-8

class VaultCheck(object):
    swagger_types = {
        'response': 'Response',
        'check_id': 'int',
        'main': 'bool',
        'check_routing': 'str',
        'check_account': 'str',
        'check_number': 'str',
        'check_first_name': 'str',
        'check_last_name': 'str',
        'note': 'str',
        'masked_routing': 'str',
        'masked_account': 'str',
        'account_type': 'str'
    }

    attribute_map = {
        'response': 'Response',
        'check_id': 'CheckID',
        'main': 'Main',
        'check_routing': 'CheckRouting',
        'check_account': 'CheckAccount',
        'check_number': 'CheckNumber',
        'check_first_name': 'CheckFirstName',
        'check_last_name': 'CheckLastName',
        'note': 'Note',
        'masked_routing': 'MaskedRouting',
        'masked_account': 'MaskedAccount',
        'account_type': 'AccountType'
    }

    def __init__(self, response=None, check_id=None, main=None, check_routing=None, check_account=None, check_number=None, check_first_name=None, check_last_name=None, note=None, masked_routing=None, masked_account=None, account_type=None):  # noqa: E501
        """VaultCheck - a model defined in Swagger"""  # noqa: E501
        self._response = None
        self._check_id = None
        self._main = None
        self._check_routing = None
        self._check_account = None
        self._check_number = None
        self._check_first_name = None
        self._check_last_name = None
        self._note = None
        self._masked_routing = None
        self._masked_account = None
        self._account_type = None
        self.discriminator = None
        if response is not None:
            self.response = response
        if check_id is not None:
            self.check_id = check_id
        if main is not None:
            self.main = main
        if check_routing is not None:
            self.check_routing = check_routing
        if check_account is not None:
            self.check_account = check_account
        if check_number is not None:
            self.check_number = check_number
        if check_first_name is not None:
            self.check_first_name = check_first_name
        if check_last_name is not None:
            self.check_last_name = check_last_name
        if note is not None:
            self.note = note
        if masked_routing is not None:
            self.masked_routing = masked_routing
        if masked_account is not None:
            self.masked_account = masked_account
        if account_type is not None:
            self.account_type = account_type

    @property
    def response(self):
        return self._response

    @response.setter
    def response(self, response):
        self._response = response

    @property
    def check_id(self):
        return self._check_id

    @check_id.setter
    def check_id(self, check_id):
        self._check_id = check_id

    @property
    def main(self):
        return self._main

    @main.setter
    def main(self, main):
        self._main = main

    @property
    def check_routing(self):
        return self._check_routing

    @check_routing.setter
    def check_routing(self, check_routing):
        self._check_routing = check_routing

    @property
    def check_account(self):
        return self._check_account

    @check_account.setter
    def check_account(self, check_account):
        self._check_account = check_account

    @property
    def check_number(self):
        return self._check_number

    @check_number.setter
    def check_number(self, check_number):
        self._check_number = check_number

    @property
    def check_first_name(self):
        return self._check_first_name

    @check_first_name.setter
    def check_first_name(self, check_first_name):
        self._check_first_name = check_first_name

    @property
    def check_last_name(self):
        return self._check_last_name

    @check_last_name.setter
    def check_last_name(self, check_last_name):
        self._check_last_name = check_last_name

    @property
    def note(self):
        return self._note

    @note.setter
    def note(self, note):
        self._note = note

    @property
    def masked_routing(self):
        return self._masked_routing

    @masked_routing.setter
    def masked_routing(self, masked_routing):
        self._masked_routing = masked_routing

    @property
    def masked_account(self):
        return self._masked_account

    @masked_account.setter
    def masked_account(self, masked_account):
        self._masked_account = masked_account

    @property
    def account_type(self):
        return self._account_type

    @account_type.setter
    def account_type(self, account_type):
        self._account_type = account_type

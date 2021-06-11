# coding: utf-8

class Settings(object):
    swagger_types = {
        'credit_card_transaction_settings': 'CreditCardTransactionSettings',
        'check_transaction_settings': 'CheckTransactionSettings',
        'business': 'Business',
        'main_contact': 'Contact',
        'receipt40': 'Receipt',
        'receipt80': 'Receipt',
        'print_signature_line': 'bool',
        'response': 'Response',
        'account_id': 'str',
        'copy_email_receipt': 'FieldInfo'
    }

    attribute_map = {
        'credit_card_transaction_settings': 'CreditCardTransactionSettings',
        'check_transaction_settings': 'CheckTransactionSettings',
        'business': 'Business',
        'main_contact': 'MainContact',
        'receipt40': 'Receipt40',
        'receipt80': 'Receipt80',
        'print_signature_line': 'PrintSignatureLine',
        'response': 'Response',
        'account_id': 'AccountID',
        'copy_email_receipt': 'CopyEmailReceipt'
    }

    def __init__(self, credit_card_transaction_settings=None, check_transaction_settings=None, business=None, main_contact=None, receipt40=None, receipt80=None, print_signature_line=None, response=None, account_id=None, copy_email_receipt=None):  # noqa: E501
        """Settings - a model defined in Swagger"""  # noqa: E501
        self._credit_card_transaction_settings = None
        self._check_transaction_settings = None
        self._business = None
        self._main_contact = None
        self._receipt40 = None
        self._receipt80 = None
        self._print_signature_line = None
        self._response = None
        self._account_id = None
        self._copy_email_receipt = None
        self.discriminator = None
        if credit_card_transaction_settings is not None:
            self.credit_card_transaction_settings = credit_card_transaction_settings
        if check_transaction_settings is not None:
            self.check_transaction_settings = check_transaction_settings
        if business is not None:
            self.business = business
        if main_contact is not None:
            self.main_contact = main_contact
        if receipt40 is not None:
            self.receipt40 = receipt40
        if receipt80 is not None:
            self.receipt80 = receipt80
        if print_signature_line is not None:
            self.print_signature_line = print_signature_line
        if response is not None:
            self.response = response
        if account_id is not None:
            self.account_id = account_id
        if copy_email_receipt is not None:
            self.copy_email_receipt = copy_email_receipt

    @property
    def credit_card_transaction_settings(self):
        return self._credit_card_transaction_settings

    @credit_card_transaction_settings.setter
    def credit_card_transaction_settings(self, credit_card_transaction_settings):
        self._credit_card_transaction_settings = credit_card_transaction_settings

    @property
    def check_transaction_settings(self):
        return self._check_transaction_settings

    @check_transaction_settings.setter
    def check_transaction_settings(self, check_transaction_settings):
        self._check_transaction_settings = check_transaction_settings

    @property
    def business(self):
        return self._business

    @business.setter
    def business(self, business):
        self._business = business

    @property
    def main_contact(self):
        return self._main_contact

    @main_contact.setter
    def main_contact(self, main_contact):
        self._main_contact = main_contact

    @property
    def receipt40(self):
        return self._receipt40

    @receipt40.setter
    def receipt40(self, receipt40):
        self._receipt40 = receipt40

    @property
    def receipt80(self):
        return self._receipt80

    @receipt80.setter
    def receipt80(self, receipt80):
        self._receipt80 = receipt80

    @property
    def print_signature_line(self):
        return self._print_signature_line

    @print_signature_line.setter
    def print_signature_line(self, print_signature_line):
        self._print_signature_line = print_signature_line

    @property
    def response(self):
        return self._response

    @response.setter
    def response(self, response):
        self._response = response

    @property
    def account_id(self):
        return self._account_id

    @account_id.setter
    def account_id(self, account_id):
        self._account_id = account_id

    @property
    def copy_email_receipt(self):
        return self._copy_email_receipt

    @copy_email_receipt.setter
    def copy_email_receipt(self, copy_email_receipt):
        self._copy_email_receipt = copy_email_receipt

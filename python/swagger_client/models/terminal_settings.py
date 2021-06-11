# coding: utf-8

class TerminalSettings(object):
    swagger_types = {
        'id': 'int',
        'terminal_id': 'int',
        'sec_code': 'str',
        'gateway_terminal': 'bool',
        'consumer_credits': 'bool',
        'dl_required': 'bool',
        'check_verify': 'bool',
        'identity_verify': 'bool'
    }

    attribute_map = {
        'id': 'ID',
        'terminal_id': 'Terminal_ID',
        'sec_code': 'SEC_Code',
        'gateway_terminal': 'Gateway_Terminal',
        'consumer_credits': 'Consumer_Credits',
        'dl_required': 'DL_Required',
        'check_verify': 'Check_Verify',
        'identity_verify': 'Identity_Verify'
    }

    def __init__(self, id=None, terminal_id=None, sec_code=None, gateway_terminal=None, consumer_credits=None, dl_required=None, check_verify=None, identity_verify=None):  # noqa: E501
        """TerminalSettings - a model defined in Swagger"""  # noqa: E501
        self._id = None
        self._terminal_id = None
        self._sec_code = None
        self._gateway_terminal = None
        self._consumer_credits = None
        self._dl_required = None
        self._check_verify = None
        self._identity_verify = None
        self.discriminator = None
        if id is not None:
            self.id = id
        if terminal_id is not None:
            self.terminal_id = terminal_id
        if sec_code is not None:
            self.sec_code = sec_code
        if gateway_terminal is not None:
            self.gateway_terminal = gateway_terminal
        if consumer_credits is not None:
            self.consumer_credits = consumer_credits
        if dl_required is not None:
            self.dl_required = dl_required
        if check_verify is not None:
            self.check_verify = check_verify
        if identity_verify is not None:
            self.identity_verify = identity_verify

    @property
    def id(self):
        return self._id

    @id.setter
    def id(self, id):
        self._id = id

    @property
    def terminal_id(self):
        return self._terminal_id

    @terminal_id.setter
    def terminal_id(self, terminal_id):
        self._terminal_id = terminal_id

    @property
    def sec_code(self):
        return self._sec_code

    @sec_code.setter
    def sec_code(self, sec_code):
        self._sec_code = sec_code

    @property
    def gateway_terminal(self):
        return self._gateway_terminal

    @gateway_terminal.setter
    def gateway_terminal(self, gateway_terminal):
        self._gateway_terminal = gateway_terminal

    @property
    def consumer_credits(self):
        return self._consumer_credits

    @consumer_credits.setter
    def consumer_credits(self, consumer_credits):
        self._consumer_credits = consumer_credits

    @property
    def dl_required(self):
        return self._dl_required

    @dl_required.setter
    def dl_required(self, dl_required):
        self._dl_required = dl_required

    @property
    def check_verify(self):
        return self._check_verify

    @check_verify.setter
    def check_verify(self, check_verify):
        self._check_verify = check_verify

    @property
    def identity_verify(self):
        return self._identity_verify

    @identity_verify.setter
    def identity_verify(self, identity_verify):
        self._identity_verify = identity_verify

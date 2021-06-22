# coding: utf-8

class Response(object):
    swagger_types = {
        'error': 'bool',
        'message': 'str'
    }

    attribute_map = {
        'error': 'Error',
        'message': 'Message'
    }

    def __init__(self, error=None, message=None):  # noqa: E501
        """Response - a model defined in Swagger"""  # noqa: E501
        self._error = None
        self._message = None
        self.discriminator = None
        if error is not None:
            self.error = error
        if message is not None:
            self.message = message

    @property
    def error(self):
        return self._error

    @error.setter
    def error(self, error):
        self._error = error

    @property
    def message(self):
        return self._message

    @message.setter
    def message(self, message):
        self._message = message

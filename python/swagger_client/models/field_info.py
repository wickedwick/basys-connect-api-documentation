# coding: utf-8

class FieldInfo(object):
    swagger_types = {
        'access': 'FieldAccess',
        'default': 'str'
    }

    attribute_map = {
        'access': 'Access',
        'default': 'Default'
    }

    def __init__(self, access=None, default=None):  # noqa: E501
        """FieldInfo - a model defined in Swagger"""  # noqa: E501
        self._access = None
        self._default = None
        self.discriminator = None
        if access is not None:
            self.access = access
        if default is not None:
            self.default = default

    @property
    def access(self):
        return self._access

    @access.setter
    def access(self, access):
        self._access = access

    @property
    def default(self):
        return self._default

    @default.setter
    def default(self, default):
        self._default = default

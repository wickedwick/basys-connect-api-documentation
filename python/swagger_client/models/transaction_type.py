# coding: utf-8

class TransactionType(object):
    SALE = "Sale"
    CREDIT = "Credit"
    AUTHORIZATION = "Authorization"
    PREAUTH = "PreAuth"
    POSTAUTH = "PostAuth"
    FORCEAUTH = "ForceAuth"
    VOID = "Void"
    QUERY = "Query"
    VERIFY = "Verify"
    MARK = "Mark"
    RETURN = "Return"
    USE = "Use"

    swagger_types = {
    }

    attribute_map = {
    }

    def __init__(self):  # noqa: E501
        """TransactionType - a model defined in Swagger"""  # noqa: E501
        self.discriminator = None

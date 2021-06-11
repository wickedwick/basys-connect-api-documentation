# coding: utf-8

class CheckTransactionType(object):
    UNKNOWN = "Unknown"
    AUTHORIZE = "Authorize"
    VOID = "Void"
    OVERRIDE = "Override"
    PAYROLL = "Payroll"
    RECURRING = "Recurring"
    REFUND = "Refund"

    swagger_types = {
    }

    attribute_map = {
    }

    def __init__(self):  # noqa: E501
        """CheckTransactionType - a model defined in Swagger"""  # noqa: E501
        self.discriminator = None

# coding: utf-8

class Batch(object):
    swagger_types = {
        'batch_number': 'str',
        'started': 'datetime',
        'completed': 'datetime',
        'sales_count': 'str',
        'sales_sum': 'float',
        'return_count': 'str',
        'return_sum': 'float',
        'batch_error': 'bool'
    }

    attribute_map = {
        'batch_number': 'BatchNumber',
        'started': 'Started',
        'completed': 'Completed',
        'sales_count': 'SalesCount',
        'sales_sum': 'SalesSum',
        'return_count': 'ReturnCount',
        'return_sum': 'ReturnSum',
        'batch_error': 'BatchError'
    }

    def __init__(self, batch_number=None, started=None, completed=None, sales_count=None, sales_sum=None, return_count=None, return_sum=None, batch_error=None):  # noqa: E501
        """Batch - a model defined in Swagger"""  # noqa: E501
        self._batch_number = None
        self._started = None
        self._completed = None
        self._sales_count = None
        self._sales_sum = None
        self._return_count = None
        self._return_sum = None
        self._batch_error = None
        self.discriminator = None
        if batch_number is not None:
            self.batch_number = batch_number
        if started is not None:
            self.started = started
        if completed is not None:
            self.completed = completed
        if sales_count is not None:
            self.sales_count = sales_count
        if sales_sum is not None:
            self.sales_sum = sales_sum
        if return_count is not None:
            self.return_count = return_count
        if return_sum is not None:
            self.return_sum = return_sum
        if batch_error is not None:
            self.batch_error = batch_error

    @property
    def batch_number(self):
        return self._batch_number

    @batch_number.setter
    def batch_number(self, batch_number):
        self._batch_number = batch_number

    @property
    def started(self):
        return self._started

    @started.setter
    def started(self, started):
        self._started = started

    @property
    def completed(self):
        return self._completed

    @completed.setter
    def completed(self, completed):
        self._completed = completed

    @property
    def sales_count(self):
        return self._sales_count

    @sales_count.setter
    def sales_count(self, sales_count):
        self._sales_count = sales_count

    @property
    def sales_sum(self):
        return self._sales_sum

    @sales_sum.setter
    def sales_sum(self, sales_sum):
        self._sales_sum = sales_sum

    @property
    def return_count(self):
        return self._return_count

    @return_count.setter
    def return_count(self, return_count):
        self._return_count = return_count

    @property
    def return_sum(self):
        return self._return_sum

    @return_sum.setter
    def return_sum(self, return_sum):
        self._return_sum = return_sum

    @property
    def batch_error(self):
        return self._batch_error

    @batch_error.setter
    def batch_error(self, batch_error):
        self._batch_error = batch_error

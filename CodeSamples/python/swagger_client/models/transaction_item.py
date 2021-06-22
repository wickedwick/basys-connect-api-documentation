# coding: utf-8

class TransactionItem(object):
    swagger_types = {
        'tax_included': 'bool',
        'credit': 'bool',
        'extended_amount': 'float',
        'item_number': 'str',
        'unit_cost': 'float',
        'quantity': 'int',
        'description': 'str',
        'discount': 'float',
        'tax': 'float',
        'commodity_code': 'str',
        'unit_of_measure': 'str'
    }

    attribute_map = {
        'tax_included': 'TaxIncluded',
        'credit': 'Credit',
        'extended_amount': 'ExtendedAmount',
        'item_number': 'ItemNumber',
        'unit_cost': 'UnitCost',
        'quantity': 'Quantity',
        'description': 'Description',
        'discount': 'Discount',
        'tax': 'Tax',
        'commodity_code': 'CommodityCode',
        'unit_of_measure': 'UnitOfMeasure'
    }

    def __init__(self, tax_included=None, credit=None, extended_amount=None, item_number=None, unit_cost=None, quantity=None, description=None, discount=None, tax=None, commodity_code=None, unit_of_measure=None):  # noqa: E501
        """TransactionItem - a model defined in Swagger"""  # noqa: E501
        self._tax_included = None
        self._credit = None
        self._extended_amount = None
        self._item_number = None
        self._unit_cost = None
        self._quantity = None
        self._description = None
        self._discount = None
        self._tax = None
        self._commodity_code = None
        self._unit_of_measure = None
        self.discriminator = None
        if tax_included is not None:
            self.tax_included = tax_included
        if credit is not None:
            self.credit = credit
        if extended_amount is not None:
            self.extended_amount = extended_amount
        if item_number is not None:
            self.item_number = item_number
        if unit_cost is not None:
            self.unit_cost = unit_cost
        if quantity is not None:
            self.quantity = quantity
        if description is not None:
            self.description = description
        if discount is not None:
            self.discount = discount
        if tax is not None:
            self.tax = tax
        if commodity_code is not None:
            self.commodity_code = commodity_code
        if unit_of_measure is not None:
            self.unit_of_measure = unit_of_measure

    @property
    def tax_included(self):
        return self._tax_included

    @tax_included.setter
    def tax_included(self, tax_included):
        self._tax_included = tax_included

    @property
    def credit(self):
        return self._credit

    @credit.setter
    def credit(self, credit):
        self._credit = credit

    @property
    def extended_amount(self):
        return self._extended_amount

    @extended_amount.setter
    def extended_amount(self, extended_amount):
        self._extended_amount = extended_amount

    @property
    def item_number(self):
        return self._item_number

    @item_number.setter
    def item_number(self, item_number):
        self._item_number = item_number

    @property
    def unit_cost(self):
        return self._unit_cost

    @unit_cost.setter
    def unit_cost(self, unit_cost):
        self._unit_cost = unit_cost

    @property
    def quantity(self):
        return self._quantity

    @quantity.setter
    def quantity(self, quantity):
        self._quantity = quantity

    @property
    def description(self):
        return self._description

    @description.setter
    def description(self, description):
        self._description = description

    @property
    def discount(self):
        return self._discount

    @discount.setter
    def discount(self, discount):
        self._discount = discount

    @property
    def tax(self):
        return self._tax

    @tax.setter
    def tax(self, tax):
        self._tax = tax

    @property
    def commodity_code(self):
        return self._commodity_code

    @commodity_code.setter
    def commodity_code(self, commodity_code):
        self._commodity_code = commodity_code

    @property
    def unit_of_measure(self):
        return self._unit_of_measure

    @unit_of_measure.setter
    def unit_of_measure(self, unit_of_measure):
        self._unit_of_measure = unit_of_measure

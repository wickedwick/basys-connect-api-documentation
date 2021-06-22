# coding: utf-8

class VaultCreditCard(object):
    swagger_types = {
        'magnetic_tracks': 'str',
        'track1': 'str',
        'track2': 'str',
        'number': 'str',
        'masked_number': 'str',
        'holder': 'str',
        'exp_date': 'str',
        'cvv': 'str',
        'address': 'str',
        'city': 'str',
        'state': 'str',
        'zip': 'str',
        'swiped': 'bool',
        'type_string': 'str',
        'cvv_type': 'CVVPresenceType',
        'not_present': 'bool',
        'response': 'Response',
        'card_id': 'int',
        'note': 'str',
        'main': 'bool'
    }

    attribute_map = {
        'magnetic_tracks': 'MagneticTracks',
        'track1': 'Track1',
        'track2': 'Track2',
        'number': 'Number',
        'masked_number': 'MaskedNumber',
        'holder': 'Holder',
        'exp_date': 'ExpDate',
        'cvv': 'CVV',
        'address': 'Address',
        'city': 'City',
        'state': 'State',
        'zip': 'ZIP',
        'swiped': 'Swiped',
        'type_string': 'TypeString',
        'cvv_type': 'CVVType',
        'not_present': 'NotPresent',
        'response': 'Response',
        'card_id': 'CardID',
        'note': 'Note',
        'main': 'Main'
    }

    def __init__(self, magnetic_tracks=None, track1=None, track2=None, number=None, masked_number=None, holder=None, exp_date=None, cvv=None, address=None, city=None, state=None, zip=None, swiped=None, type_string=None, cvv_type=None, not_present=None, response=None, card_id=None, note=None, main=None):  # noqa: E501
        """VaultCreditCard - a model defined in Swagger"""  # noqa: E501
        self._magnetic_tracks = None
        self._track1 = None
        self._track2 = None
        self._number = None
        self._masked_number = None
        self._holder = None
        self._exp_date = None
        self._cvv = None
        self._address = None
        self._city = None
        self._state = None
        self._zip = None
        self._swiped = None
        self._type_string = None
        self._cvv_type = None
        self._not_present = None
        self._response = None
        self._card_id = None
        self._note = None
        self._main = None
        self.discriminator = None
        if magnetic_tracks is not None:
            self.magnetic_tracks = magnetic_tracks
        if track1 is not None:
            self.track1 = track1
        if track2 is not None:
            self.track2 = track2
        if number is not None:
            self.number = number
        if masked_number is not None:
            self.masked_number = masked_number
        if holder is not None:
            self.holder = holder
        if exp_date is not None:
            self.exp_date = exp_date
        if cvv is not None:
            self.cvv = cvv
        if address is not None:
            self.address = address
        if city is not None:
            self.city = city
        if state is not None:
            self.state = state
        if zip is not None:
            self.zip = zip
        if swiped is not None:
            self.swiped = swiped
        if type_string is not None:
            self.type_string = type_string
        if cvv_type is not None:
            self.cvv_type = cvv_type
        if not_present is not None:
            self.not_present = not_present
        if response is not None:
            self.response = response
        if card_id is not None:
            self.card_id = card_id
        if note is not None:
            self.note = note
        if main is not None:
            self.main = main

    @property
    def magnetic_tracks(self):
        return self._magnetic_tracks

    @magnetic_tracks.setter
    def magnetic_tracks(self, magnetic_tracks):
        self._magnetic_tracks = magnetic_tracks

    @property
    def track1(self):
        return self._track1

    @track1.setter
    def track1(self, track1):
        self._track1 = track1

    @property
    def track2(self):
        return self._track2

    @track2.setter
    def track2(self, track2):
        self._track2 = track2

    @property
    def number(self):
        return self._number

    @number.setter
    def number(self, number):
        self._number = number

    @property
    def masked_number(self):
        return self._masked_number

    @masked_number.setter
    def masked_number(self, masked_number):
        self._masked_number = masked_number

    @property
    def holder(self):
        return self._holder

    @holder.setter
    def holder(self, holder):
        self._holder = holder

    @property
    def exp_date(self):
        return self._exp_date

    @exp_date.setter
    def exp_date(self, exp_date):
        self._exp_date = exp_date

    @property
    def cvv(self):
        return self._cvv

    @cvv.setter
    def cvv(self, cvv):
        self._cvv = cvv

    @property
    def address(self):
        return self._address

    @address.setter
    def address(self, address):
        self._address = address

    @property
    def city(self):
        return self._city

    @city.setter
    def city(self, city):
        self._city = city

    @property
    def state(self):
        return self._state

    @state.setter
    def state(self, state):
        self._state = state

    @property
    def zip(self):
        return self._zip

    @zip.setter
    def zip(self, zip):
        self._zip = zip

    @property
    def swiped(self):
        return self._swiped

    @swiped.setter
    def swiped(self, swiped):
        self._swiped = swiped

    @property
    def type_string(self):
        return self._type_string

    @type_string.setter
    def type_string(self, type_string):
        self._type_string = type_string

    @property
    def cvv_type(self):
        return self._cvv_type

    @cvv_type.setter
    def cvv_type(self, cvv_type):
        self._cvv_type = cvv_type

    @property
    def not_present(self):
        return self._not_present

    @not_present.setter
    def not_present(self, not_present):
        self._not_present = not_present

    @property
    def response(self):
        return self._response

    @response.setter
    def response(self, response):
        self._response = response

    @property
    def card_id(self):
        return self._card_id

    @card_id.setter
    def card_id(self, card_id):
        self._card_id = card_id

    @property
    def note(self):
        return self._note

    @note.setter
    def note(self, note):
        self._note = note

    @property
    def main(self):
        return self._main

    @main.setter
    def main(self, main):
        self._main = main

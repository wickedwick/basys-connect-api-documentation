# Python Models

# Address

    # coding: utf-8

    classAddress(object):

    swagger\_types = {

    &#39;address\_line1&#39;: &#39;str&#39;,

    &#39;address\_line2&#39;: &#39;str&#39;,

    &#39;city&#39;: &#39;str&#39;,

    &#39;state&#39;: &#39;str&#39;,

    &#39;zip\_code&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;address\_line1&#39;: &#39;AddressLine1&#39;,

    &#39;address\_line2&#39;: &#39;AddressLine2&#39;,

    &#39;city&#39;: &#39;City&#39;,

    &#39;state&#39;: &#39;State&#39;,

    &#39;zip\_code&#39;: &#39;ZipCode&#39;

    }

    def\_\_init\_\_(self, address\_line1=None, address\_line2=None, city=None, state=None, zip\_code=None): # noqa: E501

    &quot;&quot;&quot;Address - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_address\_line1 = None

    self.\_address\_line2 = None

    self.\_city = None

    self.\_state = None

    self.\_zip\_code = None

    self.discriminator = None

    ifaddress\_line1isnotNone:

    self.address\_line1 = address\_line1

    ifaddress\_line2isnotNone:

    self.address\_line2 = address\_line2

    ifcityisnotNone:

    self.city = city

    ifstateisnotNone:

    self.state = state

    ifzip\_codeisnotNone:

    self.zip\_code = zip\_code

    @property

    defaddress\_line1(self):

    returnself.\_address\_line1

    @address\_line1.setter

    defaddress\_line1(self, address\_line1):

    self.\_address\_line1 = address\_line1

    @property

    defaddress\_line2(self):

    returnself.\_address\_line2

    @address\_line2.setter

    defaddress\_line2(self, address\_line2):

    self.\_address\_line2 = address\_line2

    @property

    defcity(self):

    returnself.\_city

    @city.setter

    defcity(self, city):

    self.\_city = city

    @property

    defstate(self):

    returnself.\_state

    @state.setter

    defstate(self, state):

    self.\_state = state

    @property

    defzip\_code(self):

    returnself.\_zip\_code

    @zip\_code.setter

    defzip\_code(self, zip\_code):

    self.\_zip\_code = zip\_code

# Batch

    # coding: utf-8

    classBatch(object):

    swagger\_types = {

    &#39;batch\_number&#39;: &#39;str&#39;,

    &#39;started&#39;: &#39;datetime&#39;,

    &#39;completed&#39;: &#39;datetime&#39;,

    &#39;sales\_count&#39;: &#39;str&#39;,

    &#39;sales\_sum&#39;: &#39;float&#39;,

    &#39;return\_count&#39;: &#39;str&#39;,

    &#39;return\_sum&#39;: &#39;float&#39;,

    &#39;batch\_error&#39;: &#39;bool&#39;

    }

    attribute\_map = {

    &#39;batch\_number&#39;: &#39;BatchNumber&#39;,

    &#39;started&#39;: &#39;Started&#39;,

    &#39;completed&#39;: &#39;Completed&#39;,

    &#39;sales\_count&#39;: &#39;SalesCount&#39;,

    &#39;sales\_sum&#39;: &#39;SalesSum&#39;,

    &#39;return\_count&#39;: &#39;ReturnCount&#39;,

    &#39;return\_sum&#39;: &#39;ReturnSum&#39;,

    &#39;batch\_error&#39;: &#39;BatchError&#39;

    }

    def\_\_init\_\_(self, batch\_number=None, started=None, completed=None, sales\_count=None, sales\_sum=None, return\_count=None, return\_sum=None, batch\_error=None): # noqa: E501

    &quot;&quot;&quot;Batch - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_batch\_number = None

    self.\_started = None

    self.\_completed = None

    self.\_sales\_count = None

    self.\_sales\_sum = None

    self.\_return\_count = None

    self.\_return\_sum = None

    self.\_batch\_error = None

    self.discriminator = None

    ifbatch\_numberisnotNone:

    self.batch\_number = batch\_number

    ifstartedisnotNone:

    self.started = started

    ifcompletedisnotNone:

    self.completed = completed

    ifsales\_countisnotNone:

    self.sales\_count = sales\_count

    ifsales\_sumisnotNone:

    self.sales\_sum = sales\_sum

    ifreturn\_countisnotNone:

    self.return\_count = return\_count

    ifreturn\_sumisnotNone:

    self.return\_sum = return\_sum

    ifbatch\_errorisnotNone:

    self.batch\_error = batch\_error

    @property

    defbatch\_number(self):

    returnself.\_batch\_number

    @batch\_number.setter

    defbatch\_number(self, batch\_number):

    self.\_batch\_number = batch\_number

    @property

    defstarted(self):

    returnself.\_started

    @started.setter

    defstarted(self, started):

    self.\_started = started

    @property

    defcompleted(self):

    returnself.\_completed

    @completed.setter

    defcompleted(self, completed):

    self.\_completed = completed

    @property

    defsales\_count(self):

    returnself.\_sales\_count

    @sales\_count.setter

    defsales\_count(self, sales\_count):

    self.\_sales\_count = sales\_count

    @property

    defsales\_sum(self):

    returnself.\_sales\_sum

    @sales\_sum.setter

    defsales\_sum(self, sales\_sum):

    self.\_sales\_sum = sales\_sum

    @property

    defreturn\_count(self):

    returnself.\_return\_count

    @return\_count.setter

    defreturn\_count(self, return\_count):

    self.\_return\_count = return\_count

    @property

    defreturn\_sum(self):

    returnself.\_return\_sum

    @return\_sum.setter

    defreturn\_sum(self, return\_sum):

    self.\_return\_sum = return\_sum

    @property

    defbatch\_error(self):

    returnself.\_batch\_error

    @batch\_error.setter

    defbatch\_error(self, batch\_error):

    self.\_batch\_error = batch\_error

# Business

    # coding: utf-8

    classBusiness(object):

    swagger\_types = {

    &#39;address&#39;: &#39;Address&#39;,

    &#39;name&#39;: &#39;str&#39;,

    &#39;phone&#39;: &#39;str&#39;,

    &#39;fax&#39;: &#39;str&#39;,

    &#39;web\_site&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;address&#39;: &#39;Address&#39;,

    &#39;name&#39;: &#39;Name&#39;,

    &#39;phone&#39;: &#39;Phone&#39;,

    &#39;fax&#39;: &#39;Fax&#39;,

    &#39;web\_site&#39;: &#39;WebSite&#39;

    }

    def\_\_init\_\_(self, address=None, name=None, phone=None, fax=None, web\_site=None): # noqa: E501

    &quot;&quot;&quot;Business - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_address = None

    self.\_name = None

    self.\_phone = None

    self.\_fax = None

    self.\_web\_site = None

    self.discriminator = None

    ifaddressisnotNone:

    self.address = address

    ifnameisnotNone:

    self.name = name

    ifphoneisnotNone:

    self.phone = phone

    iffaxisnotNone:

    self.fax = fax

    ifweb\_siteisnotNone:

    self.web\_site = web\_site

    @property

    defaddress(self):

    returnself.\_address

    @address.setter

    defaddress(self, address):

    self.\_address = address

    @property

    defname(self):

    returnself.\_name

    @name.setter

    defname(self, name):

    self.\_name = name

    @property

    defphone(self):

    returnself.\_phone

    @phone.setter

    defphone(self, phone):

    self.\_phone = phone

    @property

    deffax(self):

    returnself.\_fax

    @fax.setter

    deffax(self, fax):

    self.\_fax = fax

    @property

    defweb\_site(self):

    returnself.\_web\_site

    @web\_site.setter

    defweb\_site(self, web\_site):

    self.\_web\_site = web\_site

# CheckAccountType

    # coding: utf-8

    classCheckAccountType(object):

    UNKNOWN = &quot;Unknown&quot;

    CHECKING = &quot;Checking&quot;

    SAVINGS = &quot;Savings&quot;

    swagger\_types = {

    }

    attribute\_map = {

    }

    def\_\_init\_\_(self): # noqa: E501

    &quot;&quot;&quot;CheckAccountType - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.discriminator = None

# CheckTransaction

    # coding: utf-8

    classCheckTransaction(object):

    swagger\_types = {

    &#39;terminal\_id&#39;: &#39;str&#39;,

    &#39;account\_number&#39;: &#39;str&#39;,

    &#39;account\_type&#39;: &#39;CheckAccountType&#39;,

    &#39;check\_number&#39;: &#39;str&#39;,

    &#39;routing\_number&#39;: &#39;str&#39;,

    &#39;micr\_data&#39;: &#39;str&#39;,

    &#39;first\_name&#39;: &#39;str&#39;,

    &#39;last\_name&#39;: &#39;str&#39;,

    &#39;company\_name&#39;: &#39;str&#39;,

    &#39;address1&#39;: &#39;str&#39;,

    &#39;address2&#39;: &#39;str&#39;,

    &#39;city&#39;: &#39;str&#39;,

    &#39;state&#39;: &#39;str&#39;,

    &#39;zip&#39;: &#39;str&#39;,

    &#39;phone\_number&#39;: &#39;str&#39;,

    &#39;dl\_number&#39;: &#39;str&#39;,

    &#39;dl\_state&#39;: &#39;str&#39;,

    &#39;courtesy\_card\_id&#39;: &#39;str&#39;,

    &#39;ssn4&#39;: &#39;str&#39;,

    &#39;dob\_year&#39;: &#39;str&#39;,

    &#39;check\_amount&#39;: &#39;str&#39;,

    &#39;tran\_type&#39;: &#39;CheckTransactionType&#39;,

    &#39;proc\_id&#39;: &#39;str&#39;,

    &#39;ip\_address&#39;: &#39;str&#39;,

    &#39;customer\_number&#39;: &#39;str&#39;,

    &#39;po\_number&#39;: &#39;str&#39;,

    &#39;invoice\_number&#39;: &#39;str&#39;,

    &#39;tran\_note&#39;: &#39;str&#39;,

    &#39;email\_address&#39;: &#39;str&#39;,

    &#39;sec\_code&#39;: &#39;str&#39;,

    &#39;proc\_resp&#39;: &#39;str&#39;,

    &#39;proc\_code&#39;: &#39;str&#39;,

    &#39;proc\_mess&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;terminal\_id&#39;: &#39;Terminal\_ID&#39;,

    &#39;account\_number&#39;: &#39;Account\_Number&#39;,

    &#39;account\_type&#39;: &#39;Account\_Type&#39;,

    &#39;check\_number&#39;: &#39;Check\_Number&#39;,

    &#39;routing\_number&#39;: &#39;Routing\_Number&#39;,

    &#39;micr\_data&#39;: &#39;MICR\_Data&#39;,

    &#39;first\_name&#39;: &#39;First\_Name&#39;,

    &#39;last\_name&#39;: &#39;Last\_Name&#39;,

    &#39;company\_name&#39;: &#39;Company\_Name&#39;,

    &#39;address1&#39;: &#39;Address1&#39;,

    &#39;address2&#39;: &#39;Address2&#39;,

    &#39;city&#39;: &#39;City&#39;,

    &#39;state&#39;: &#39;State&#39;,

    &#39;zip&#39;: &#39;Zip&#39;,

    &#39;phone\_number&#39;: &#39;Phone\_Number&#39;,

    &#39;dl\_number&#39;: &#39;DL\_Number&#39;,

    &#39;dl\_state&#39;: &#39;DL\_State&#39;,

    &#39;courtesy\_card\_id&#39;: &#39;Courtesy\_Card\_ID&#39;,

    &#39;ssn4&#39;: &#39;SSN4&#39;,

    &#39;dob\_year&#39;: &#39;DOB\_Year&#39;,

    &#39;check\_amount&#39;: &#39;Check\_Amount&#39;,

    &#39;tran\_type&#39;: &#39;Tran\_Type&#39;,

    &#39;proc\_id&#39;: &#39;Proc\_ID&#39;,

    &#39;ip\_address&#39;: &#39;IP\_Address&#39;,

    &#39;customer\_number&#39;: &#39;CustomerNumber&#39;,

    &#39;po\_number&#39;: &#39;PONumber&#39;,

    &#39;invoice\_number&#39;: &#39;InvoiceNumber&#39;,

    &#39;tran\_note&#39;: &#39;TranNote&#39;,

    &#39;email\_address&#39;: &#39;EmailAddress&#39;,

    &#39;sec\_code&#39;: &#39;SEC\_Code&#39;,

    &#39;proc\_resp&#39;: &#39;Proc\_Resp&#39;,

    &#39;proc\_code&#39;: &#39;Proc\_Code&#39;,

    &#39;proc\_mess&#39;: &#39;Proc\_Mess&#39;

    }

    def\_\_init\_\_(self, terminal\_id=None, account\_number=None, account\_type=None, check\_number=None, routing\_number=None, micr\_data=None, first\_name=None, last\_name=None, company\_name=None, address1=None, address2=None, city=None, state=None, zip=None, phone\_number=None, dl\_number=None, dl\_state=None, courtesy\_card\_id=None, ssn4=None, dob\_year=None, check\_amount=None, tran\_type=None, proc\_id=None, ip\_address=None, customer\_number=None, po\_number=None, invoice\_number=None, tran\_note=None, email\_address=None, sec\_code=None, proc\_resp=None, proc\_code=None, proc\_mess=None): # noqa: E501

    &quot;&quot;&quot;CheckTransaction - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_terminal\_id = None

    self.\_account\_number = None

    self.\_account\_type = None

    self.\_check\_number = None

    self.\_routing\_number = None

    self.\_micr\_data = None

    self.\_first\_name = None

    self.\_last\_name = None

    self.\_company\_name = None

    self.\_address1 = None

    self.\_address2 = None

    self.\_city = None

    self.\_state = None

    self.\_zip = None

    self.\_phone\_number = None

    self.\_dl\_number = None

    self.\_dl\_state = None

    self.\_courtesy\_card\_id = None

    self.\_ssn4 = None

    self.\_dob\_year = None

    self.\_check\_amount = None

    self.\_tran\_type = None

    self.\_proc\_id = None

    self.\_ip\_address = None

    self.\_customer\_number = None

    self.\_po\_number = None

    self.\_invoice\_number = None

    self.\_tran\_note = None

    self.\_email\_address = None

    self.\_sec\_code = None

    self.\_proc\_resp = None

    self.\_proc\_code = None

    self.\_proc\_mess = None

    self.discriminator = None

    ifterminal\_idisnotNone:

    self.terminal\_id = terminal\_id

    ifaccount\_numberisnotNone:

    self.account\_number = account\_number

    ifaccount\_typeisnotNone:

    self.account\_type = account\_type

    ifcheck\_numberisnotNone:

    self.check\_number = check\_number

    ifrouting\_numberisnotNone:

    self.routing\_number = routing\_number

    ifmicr\_dataisnotNone:

    self.micr\_data = micr\_data

    iffirst\_nameisnotNone:

    self.first\_name = first\_name

    iflast\_nameisnotNone:

    self.last\_name = last\_name

    ifcompany\_nameisnotNone:

    self.company\_name = company\_name

    ifaddress1isnotNone:

    self.address1 = address1

    ifaddress2isnotNone:

    self.address2 = address2

    ifcityisnotNone:

    self.city = city

    ifstateisnotNone:

    self.state = state

    ifzipisnotNone:

    self.zip = zip

    ifphone\_numberisnotNone:

    self.phone\_number = phone\_number

    ifdl\_numberisnotNone:

    self.dl\_number = dl\_number

    ifdl\_stateisnotNone:

    self.dl\_state = dl\_state

    ifcourtesy\_card\_idisnotNone:

    self.courtesy\_card\_id = courtesy\_card\_id

    ifssn4isnotNone:

    self.ssn4 = ssn4

    ifdob\_yearisnotNone:

    self.dob\_year = dob\_year

    ifcheck\_amountisnotNone:

    self.check\_amount = check\_amount

    iftran\_typeisnotNone:

    self.tran\_type = tran\_type

    ifproc\_idisnotNone:

    self.proc\_id = proc\_id

    ifip\_addressisnotNone:

    self.ip\_address = ip\_address

    ifcustomer\_numberisnotNone:

    self.customer\_number = customer\_number

    ifpo\_numberisnotNone:

    self.po\_number = po\_number

    ifinvoice\_numberisnotNone:

    self.invoice\_number = invoice\_number

    iftran\_noteisnotNone:

    self.tran\_note = tran\_note

    ifemail\_addressisnotNone:

    self.email\_address = email\_address

    ifsec\_codeisnotNone:

    self.sec\_code = sec\_code

    ifproc\_respisnotNone:

    self.proc\_resp = proc\_resp

    ifproc\_codeisnotNone:

    self.proc\_code = proc\_code

    ifproc\_messisnotNone:

    self.proc\_mess = proc\_mess

    @property

    defterminal\_id(self):

    returnself.\_terminal\_id

    @terminal\_id.setter

    defterminal\_id(self, terminal\_id):

    self.\_terminal\_id = terminal\_id

    @property

    defaccount\_number(self):

    returnself.\_account\_number

    @account\_number.setter

    defaccount\_number(self, account\_number):

    self.\_account\_number = account\_number

    @property

    defaccount\_type(self):

    returnself.\_account\_type

    @account\_type.setter

    defaccount\_type(self, account\_type):

    self.\_account\_type = account\_type

    @property

    defcheck\_number(self):

    returnself.\_check\_number

    @check\_number.setter

    defcheck\_number(self, check\_number):

    self.\_check\_number = check\_number

    @property

    defrouting\_number(self):

    returnself.\_routing\_number

    @routing\_number.setter

    defrouting\_number(self, routing\_number):

    self.\_routing\_number = routing\_number

    @property

    defmicr\_data(self):

    returnself.\_micr\_data

    @micr\_data.setter

    defmicr\_data(self, micr\_data):

    self.\_micr\_data = micr\_data

    @property

    deffirst\_name(self):

    returnself.\_first\_name

    @first\_name.setter

    deffirst\_name(self, first\_name):

    self.\_first\_name = first\_name

    @property

    deflast\_name(self):

    returnself.\_last\_name

    @last\_name.setter

    deflast\_name(self, last\_name):

    self.\_last\_name = last\_name

    @property

    defcompany\_name(self):

    returnself.\_company\_name

    @company\_name.setter

    defcompany\_name(self, company\_name):

    self.\_company\_name = company\_name

    @property

    defaddress1(self):

    returnself.\_address1

    @address1.setter

    defaddress1(self, address1):

    self.\_address1 = address1

    @property

    defaddress2(self):

    returnself.\_address2

    @address2.setter

    defaddress2(self, address2):

    self.\_address2 = address2

    @property

    defcity(self):

    returnself.\_city

    @city.setter

    defcity(self, city):

    self.\_city = city

    @property

    defstate(self):

    returnself.\_state

    @state.setter

    defstate(self, state):

    self.\_state = state

    @property

    defzip(self):

    returnself.\_zip

    @zip.setter

    defzip(self, zip):

    self.\_zip = zip

    @property

    defphone\_number(self):

    returnself.\_phone\_number

    @phone\_number.setter

    defphone\_number(self, phone\_number):

    self.\_phone\_number = phone\_number

    @property

    defdl\_number(self):

    returnself.\_dl\_number

    @dl\_number.setter

    defdl\_number(self, dl\_number):

    self.\_dl\_number = dl\_number

    @property

    defdl\_state(self):

    returnself.\_dl\_state

    @dl\_state.setter

    defdl\_state(self, dl\_state):

    self.\_dl\_state = dl\_state

    @property

    defcourtesy\_card\_id(self):

    returnself.\_courtesy\_card\_id

    @courtesy\_card\_id.setter

    defcourtesy\_card\_id(self, courtesy\_card\_id):

    self.\_courtesy\_card\_id = courtesy\_card\_id

    @property

    defssn4(self):

    returnself.\_ssn4

    @ssn4.setter

    defssn4(self, ssn4):

    self.\_ssn4 = ssn4

    @property

    defdob\_year(self):

    returnself.\_dob\_year

    @dob\_year.setter

    defdob\_year(self, dob\_year):

    self.\_dob\_year = dob\_year

    @property

    defcheck\_amount(self):

    returnself.\_check\_amount

    @check\_amount.setter

    defcheck\_amount(self, check\_amount):

    self.\_check\_amount = check\_amount

    @property

    deftran\_type(self):

    returnself.\_tran\_type

    @tran\_type.setter

    deftran\_type(self, tran\_type):

    self.\_tran\_type = tran\_type

    @property

    defproc\_id(self):

    returnself.\_proc\_id

    @proc\_id.setter

    defproc\_id(self, proc\_id):

    self.\_proc\_id = proc\_id

    @property

    defip\_address(self):

    returnself.\_ip\_address

    @ip\_address.setter

    defip\_address(self, ip\_address):

    self.\_ip\_address = ip\_address

    @property

    defcustomer\_number(self):

    returnself.\_customer\_number

    @customer\_number.setter

    defcustomer\_number(self, customer\_number):

    self.\_customer\_number = customer\_number

    @property

    defpo\_number(self):

    returnself.\_po\_number

    @po\_number.setter

    defpo\_number(self, po\_number):

    self.\_po\_number = po\_number

    @property

    definvoice\_number(self):

    returnself.\_invoice\_number

    @invoice\_number.setter

    definvoice\_number(self, invoice\_number):

    self.\_invoice\_number = invoice\_number

    @property

    deftran\_note(self):

    returnself.\_tran\_note

    @tran\_note.setter

    deftran\_note(self, tran\_note):

    self.\_tran\_note = tran\_note

    @property

    defemail\_address(self):

    returnself.\_email\_address

    @email\_address.setter

    defemail\_address(self, email\_address):

    self.\_email\_address = email\_address

    @property

    defsec\_code(self):

    returnself.\_sec\_code

    @sec\_code.setter

    defsec\_code(self, sec\_code):

    self.\_sec\_code = sec\_code

    @property

    defproc\_resp(self):

    returnself.\_proc\_resp

    @proc\_resp.setter

    defproc\_resp(self, proc\_resp):

    self.\_proc\_resp = proc\_resp

    @property

    defproc\_code(self):

    returnself.\_proc\_code

    @proc\_code.setter

    defproc\_code(self, proc\_code):

    self.\_proc\_code = proc\_code

    @property

    defproc\_mess(self):

    returnself.\_proc\_mess

    @proc\_mess.setter

    defproc\_mess(self, proc\_mess):

    self.\_proc\_mess = proc\_mess

# CheckTransactionSettings

    # coding: utf-8

    classCheckTransactionSettings(object):

    swagger\_types = {

    &#39;reader&#39;: &#39;FieldInfo&#39;,

    &#39;contact\_name&#39;: &#39;FieldInfo&#39;,

    &#39;contact\_title&#39;: &#39;FieldInfo&#39;,

    &#39;email\_address&#39;: &#39;FieldInfo&#39;,

    &#39;phone\_default&#39;: &#39;str&#39;,

    &#39;fax&#39;: &#39;FieldInfo&#39;,

    &#39;billing\_address\_default&#39;: &#39;str&#39;,

    &#39;billing\_address2&#39;: &#39;FieldInfo&#39;,

    &#39;billing\_city\_default&#39;: &#39;str&#39;,

    &#39;billing\_state\_default&#39;: &#39;str&#39;,

    &#39;billing\_zip\_default&#39;: &#39;str&#39;,

    &#39;po\_number&#39;: &#39;FieldInfo&#39;,

    &#39;invoice\_number&#39;: &#39;FieldInfo&#39;,

    &#39;business\_name&#39;: &#39;FieldInfo&#39;,

    &#39;customer\_number&#39;: &#39;FieldInfo&#39;,

    &#39;reference\_note&#39;: &#39;FieldInfo&#39;,

    &#39;default\_sec\_code&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;reader&#39;: &#39;Reader&#39;,

    &#39;contact\_name&#39;: &#39;ContactName&#39;,

    &#39;contact\_title&#39;: &#39;ContactTitle&#39;,

    &#39;email\_address&#39;: &#39;EmailAddress&#39;,

    &#39;phone\_default&#39;: &#39;PhoneDefault&#39;,

    &#39;fax&#39;: &#39;Fax&#39;,

    &#39;billing\_address\_default&#39;: &#39;BillingAddressDefault&#39;,

    &#39;billing\_address2&#39;: &#39;BillingAddress2&#39;,

    &#39;billing\_city\_default&#39;: &#39;BillingCityDefault&#39;,

    &#39;billing\_state\_default&#39;: &#39;BillingStateDefault&#39;,

    &#39;billing\_zip\_default&#39;: &#39;BillingZipDefault&#39;,

    &#39;po\_number&#39;: &#39;PONumber&#39;,

    &#39;invoice\_number&#39;: &#39;InvoiceNumber&#39;,

    &#39;business\_name&#39;: &#39;BusinessName&#39;,

    &#39;customer\_number&#39;: &#39;CustomerNumber&#39;,

    &#39;reference\_note&#39;: &#39;ReferenceNote&#39;,

    &#39;default\_sec\_code&#39;: &#39;DefaultSECCode&#39;

    }

    def\_\_init\_\_(self, reader=None, contact\_name=None, contact\_title=None, email\_address=None, phone\_default=None, fax=None, billing\_address\_default=None, billing\_address2=None, billing\_city\_default=None, billing\_state\_default=None, billing\_zip\_default=None, po\_number=None, invoice\_number=None, business\_name=None, customer\_number=None, reference\_note=None, default\_sec\_code=None): # noqa: E501

    &quot;&quot;&quot;CheckTransactionSettings - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_reader = None

    self.\_contact\_name = None

    self.\_contact\_title = None

    self.\_email\_address = None

    self.\_phone\_default = None

    self.\_fax = None

    self.\_billing\_address\_default = None

    self.\_billing\_address2 = None

    self.\_billing\_city\_default = None

    self.\_billing\_state\_default = None

    self.\_billing\_zip\_default = None

    self.\_po\_number = None

    self.\_invoice\_number = None

    self.\_business\_name = None

    self.\_customer\_number = None

    self.\_reference\_note = None

    self.\_default\_sec\_code = None

    self.discriminator = None

    ifreaderisnotNone:

    self.reader = reader

    ifcontact\_nameisnotNone:

    self.contact\_name = contact\_name

    ifcontact\_titleisnotNone:

    self.contact\_title = contact\_title

    ifemail\_addressisnotNone:

    self.email\_address = email\_address

    ifphone\_defaultisnotNone:

    self.phone\_default = phone\_default

    iffaxisnotNone:

    self.fax = fax

    ifbilling\_address\_defaultisnotNone:

    self.billing\_address\_default = billing\_address\_default

    ifbilling\_address2isnotNone:

    self.billing\_address2 = billing\_address2

    ifbilling\_city\_defaultisnotNone:

    self.billing\_city\_default = billing\_city\_default

    ifbilling\_state\_defaultisnotNone:

    self.billing\_state\_default = billing\_state\_default

    ifbilling\_zip\_defaultisnotNone:

    self.billing\_zip\_default = billing\_zip\_default

    ifpo\_numberisnotNone:

    self.po\_number = po\_number

    ifinvoice\_numberisnotNone:

    self.invoice\_number = invoice\_number

    ifbusiness\_nameisnotNone:

    self.business\_name = business\_name

    ifcustomer\_numberisnotNone:

    self.customer\_number = customer\_number

    ifreference\_noteisnotNone:

    self.reference\_note = reference\_note

    ifdefault\_sec\_codeisnotNone:

    self.default\_sec\_code = default\_sec\_code

    @property

    defreader(self):

    returnself.\_reader

    @reader.setter

    defreader(self, reader):

    self.\_reader = reader

    @property

    defcontact\_name(self):

    returnself.\_contact\_name

    @contact\_name.setter

    defcontact\_name(self, contact\_name):

    self.\_contact\_name = contact\_name

    @property

    defcontact\_title(self):

    returnself.\_contact\_title

    @contact\_title.setter

    defcontact\_title(self, contact\_title):

    self.\_contact\_title = contact\_title

    @property

    defemail\_address(self):

    returnself.\_email\_address

    @email\_address.setter

    defemail\_address(self, email\_address):

    self.\_email\_address = email\_address

    @property

    defphone\_default(self):

    returnself.\_phone\_default

    @phone\_default.setter

    defphone\_default(self, phone\_default):

    self.\_phone\_default = phone\_default

    @property

    deffax(self):

    returnself.\_fax

    @fax.setter

    deffax(self, fax):

    self.\_fax = fax

    @property

    defbilling\_address\_default(self):

    returnself.\_billing\_address\_default

    @billing\_address\_default.setter

    defbilling\_address\_default(self, billing\_address\_default):

    self.\_billing\_address\_default = billing\_address\_default

    @property

    defbilling\_address2(self):

    returnself.\_billing\_address2

    @billing\_address2.setter

    defbilling\_address2(self, billing\_address2):

    self.\_billing\_address2 = billing\_address2

    @property

    defbilling\_city\_default(self):

    returnself.\_billing\_city\_default

    @billing\_city\_default.setter

    defbilling\_city\_default(self, billing\_city\_default):

    self.\_billing\_city\_default = billing\_city\_default

    @property

    defbilling\_state\_default(self):

    returnself.\_billing\_state\_default

    @billing\_state\_default.setter

    defbilling\_state\_default(self, billing\_state\_default):

    self.\_billing\_state\_default = billing\_state\_default

    @property

    defbilling\_zip\_default(self):

    returnself.\_billing\_zip\_default

    @billing\_zip\_default.setter

    defbilling\_zip\_default(self, billing\_zip\_default):

    self.\_billing\_zip\_default = billing\_zip\_default

    @property

    defpo\_number(self):

    returnself.\_po\_number

    @po\_number.setter

    defpo\_number(self, po\_number):

    self.\_po\_number = po\_number

    @property

    definvoice\_number(self):

    returnself.\_invoice\_number

    @invoice\_number.setter

    definvoice\_number(self, invoice\_number):

    self.\_invoice\_number = invoice\_number

    @property

    defbusiness\_name(self):

    returnself.\_business\_name

    @business\_name.setter

    defbusiness\_name(self, business\_name):

    self.\_business\_name = business\_name

    @property

    defcustomer\_number(self):

    returnself.\_customer\_number

    @customer\_number.setter

    defcustomer\_number(self, customer\_number):

    self.\_customer\_number = customer\_number

    @property

    defreference\_note(self):

    returnself.\_reference\_note

    @reference\_note.setter

    defreference\_note(self, reference\_note):

    self.\_reference\_note = reference\_note

    @property

    defdefault\_sec\_code(self):

    returnself.\_default\_sec\_code

    @default\_sec\_code.setter

    defdefault\_sec\_code(self, default\_sec\_code):

    self.\_default\_sec\_code = default\_sec\_code

# CheckTransactionType

    # coding: utf-8

    classCheckTransactionType(object):

    UNKNOWN = &quot;Unknown&quot;

    AUTHORIZE = &quot;Authorize&quot;

    VOID = &quot;Void&quot;

    OVERRIDE = &quot;Override&quot;

    PAYROLL = &quot;Payroll&quot;

    RECURRING = &quot;Recurring&quot;

    REFUND = &quot;Refund&quot;

    swagger\_types = {

    }

    attribute\_map = {

    }

    def\_\_init\_\_(self): # noqa: E501

    &quot;&quot;&quot;CheckTransactionType - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.discriminator = None

# Contact

    # coding: utf-8

    classContact(object):

    swagger\_types = {

    &#39;first\_name&#39;: &#39;str&#39;,

    &#39;last\_name&#39;: &#39;str&#39;,

    &#39;name&#39;: &#39;str&#39;,

    &#39;title&#39;: &#39;str&#39;,

    &#39;phone&#39;: &#39;str&#39;,

    &#39;email&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;first\_name&#39;: &#39;FirstName&#39;,

    &#39;last\_name&#39;: &#39;LastName&#39;,

    &#39;name&#39;: &#39;Name&#39;,

    &#39;title&#39;: &#39;Title&#39;,

    &#39;phone&#39;: &#39;Phone&#39;,

    &#39;email&#39;: &#39;Email&#39;

    }

    def\_\_init\_\_(self, first\_name=None, last\_name=None, name=None, title=None, phone=None, email=None): # noqa: E501

    &quot;&quot;&quot;Contact - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_first\_name = None

    self.\_last\_name = None

    self.\_name = None

    self.\_title = None

    self.\_phone = None

    self.\_email = None

    self.discriminator = None

    iffirst\_nameisnotNone:

    self.first\_name = first\_name

    iflast\_nameisnotNone:

    self.last\_name = last\_name

    ifnameisnotNone:

    self.name = name

    iftitleisnotNone:

    self.title = title

    ifphoneisnotNone:

    self.phone = phone

    ifemailisnotNone:

    self.email = email

    @property

    deffirst\_name(self):

    returnself.\_first\_name

    @first\_name.setter

    deffirst\_name(self, first\_name):

    self.\_first\_name = first\_name

    @property

    deflast\_name(self):

    returnself.\_last\_name

    @last\_name.setter

    deflast\_name(self, last\_name):

    self.\_last\_name = last\_name

    @property

    defname(self):

    returnself.\_name

    @name.setter

    defname(self, name):

    self.\_name = name

    @property

    deftitle(self):

    returnself.\_title

    @title.setter

    deftitle(self, title):

    self.\_title = title

    @property

    defphone(self):

    returnself.\_phone

    @phone.setter

    defphone(self, phone):

    self.\_phone = phone

    @property

    defemail(self):

    returnself.\_email

    @email.setter

    defemail(self, email):

    self.\_email = email

# CreditCardTransactionSettings

    # coding: utf-8

    classCreditCardTransactionSettings(object):

    swagger\_types = {

    &#39;cvv&#39;: &#39;FieldInfo&#39;,

    &#39;contact\_name&#39;: &#39;FieldInfo&#39;,

    &#39;contact\_title&#39;: &#39;FieldInfo&#39;,

    &#39;email\_address&#39;: &#39;FieldInfo&#39;,

    &#39;phone&#39;: &#39;FieldInfo&#39;,

    &#39;fax&#39;: &#39;FieldInfo&#39;,

    &#39;billing\_address&#39;: &#39;FieldInfo&#39;,

    &#39;billing\_address2&#39;: &#39;FieldInfo&#39;,

    &#39;billing\_city&#39;: &#39;FieldInfo&#39;,

    &#39;billing\_state&#39;: &#39;FieldInfo&#39;,

    &#39;billing\_zip&#39;: &#39;FieldInfo&#39;,

    &#39;po\_number&#39;: &#39;FieldInfo&#39;,

    &#39;invoice\_number&#39;: &#39;FieldInfo&#39;,

    &#39;business\_name&#39;: &#39;FieldInfo&#39;,

    &#39;customer\_number&#39;: &#39;FieldInfo&#39;,

    &#39;reference\_note&#39;: &#39;FieldInfo&#39;,

    &#39;sales\_tax&#39;: &#39;FieldInfo&#39;,

    &#39;tax\_exempt&#39;: &#39;FieldInfo&#39;,

    &#39;card\_tracks&#39;: &#39;FieldInfo&#39;,

    &#39;card\_zip&#39;: &#39;FieldInfo&#39;,

    &#39;card\_address&#39;: &#39;FieldInfo&#39;,

    &#39;item\_description&#39;: &#39;str&#39;,

    &#39;default\_transaction\_type&#39;: &#39;TransactionType&#39;

    }

    attribute\_map = {

    &#39;cvv&#39;: &#39;CVV&#39;,

    &#39;contact\_name&#39;: &#39;ContactName&#39;,

    &#39;contact\_title&#39;: &#39;ContactTitle&#39;,

    &#39;email\_address&#39;: &#39;EmailAddress&#39;,

    &#39;phone&#39;: &#39;Phone&#39;,

    &#39;fax&#39;: &#39;Fax&#39;,

    &#39;billing\_address&#39;: &#39;BillingAddress&#39;,

    &#39;billing\_address2&#39;: &#39;BillingAddress2&#39;,

    &#39;billing\_city&#39;: &#39;BillingCity&#39;,

    &#39;billing\_state&#39;: &#39;BillingState&#39;,

    &#39;billing\_zip&#39;: &#39;BillingZip&#39;,

    &#39;po\_number&#39;: &#39;PONumber&#39;,

    &#39;invoice\_number&#39;: &#39;InvoiceNumber&#39;,

    &#39;business\_name&#39;: &#39;BusinessName&#39;,

    &#39;customer\_number&#39;: &#39;CustomerNumber&#39;,

    &#39;reference\_note&#39;: &#39;ReferenceNote&#39;,

    &#39;sales\_tax&#39;: &#39;SalesTax&#39;,

    &#39;tax\_exempt&#39;: &#39;TaxExempt&#39;,

    &#39;card\_tracks&#39;: &#39;CardTracks&#39;,

    &#39;card\_zip&#39;: &#39;CardZip&#39;,

    &#39;card\_address&#39;: &#39;CardAddress&#39;,

    &#39;item\_description&#39;: &#39;ItemDescription&#39;,

    &#39;default\_transaction\_type&#39;: &#39;DefaultTransactionType&#39;

    }

    def\_\_init\_\_(self, cvv=None, contact\_name=None, contact\_title=None, email\_address=None, phone=None, fax=None, billing\_address=None, billing\_address2=None, billing\_city=None, billing\_state=None, billing\_zip=None, po\_number=None, invoice\_number=None, business\_name=None, customer\_number=None, reference\_note=None, sales\_tax=None, tax\_exempt=None, card\_tracks=None, card\_zip=None, card\_address=None, item\_description=None, default\_transaction\_type=None): # noqa: E501

    &quot;&quot;&quot;CreditCardTransactionSettings - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_cvv = None

    self.\_contact\_name = None

    self.\_contact\_title = None

    self.\_email\_address = None

    self.\_phone = None

    self.\_fax = None

    self.\_billing\_address = None

    self.\_billing\_address2 = None

    self.\_billing\_city = None

    self.\_billing\_state = None

    self.\_billing\_zip = None

    self.\_po\_number = None

    self.\_invoice\_number = None

    self.\_business\_name = None

    self.\_customer\_number = None

    self.\_reference\_note = None

    self.\_sales\_tax = None

    self.\_tax\_exempt = None

    self.\_card\_tracks = None

    self.\_card\_zip = None

    self.\_card\_address = None

    self.\_item\_description = None

    self.\_default\_transaction\_type = None

    self.discriminator = None

    ifcvvisnotNone:

    self.cvv = cvv

    ifcontact\_nameisnotNone:

    self.contact\_name = contact\_name

    ifcontact\_titleisnotNone:

    self.contact\_title = contact\_title

    ifemail\_addressisnotNone:

    self.email\_address = email\_address

    ifphoneisnotNone:

    self.phone = phone

    iffaxisnotNone:

    self.fax = fax

    ifbilling\_addressisnotNone:

    self.billing\_address = billing\_address

    ifbilling\_address2isnotNone:

    self.billing\_address2 = billing\_address2

    ifbilling\_cityisnotNone:

    self.billing\_city = billing\_city

    ifbilling\_stateisnotNone:

    self.billing\_state = billing\_state

    ifbilling\_zipisnotNone:

    self.billing\_zip = billing\_zip

    ifpo\_numberisnotNone:

    self.po\_number = po\_number

    ifinvoice\_numberisnotNone:

    self.invoice\_number = invoice\_number

    ifbusiness\_nameisnotNone:

    self.business\_name = business\_name

    ifcustomer\_numberisnotNone:

    self.customer\_number = customer\_number

    ifreference\_noteisnotNone:

    self.reference\_note = reference\_note

    ifsales\_taxisnotNone:

    self.sales\_tax = sales\_tax

    iftax\_exemptisnotNone:

    self.tax\_exempt = tax\_exempt

    ifcard\_tracksisnotNone:

    self.card\_tracks = card\_tracks

    ifcard\_zipisnotNone:

    self.card\_zip = card\_zip

    ifcard\_addressisnotNone:

    self.card\_address = card\_address

    ifitem\_descriptionisnotNone:

    self.item\_description = item\_description

    ifdefault\_transaction\_typeisnotNone:

    self.default\_transaction\_type = default\_transaction\_type

    @property

    defcvv(self):

    returnself.\_cvv

    @cvv.setter

    defcvv(self, cvv):

    self.\_cvv = cvv

    @property

    defcontact\_name(self):

    returnself.\_contact\_name

    @contact\_name.setter

    defcontact\_name(self, contact\_name):

    self.\_contact\_name = contact\_name

    @property

    defcontact\_title(self):

    returnself.\_contact\_title

    @contact\_title.setter

    defcontact\_title(self, contact\_title):

    self.\_contact\_title = contact\_title

    @property

    defemail\_address(self):

    returnself.\_email\_address

    @email\_address.setter

    defemail\_address(self, email\_address):

    self.\_email\_address = email\_address

    @property

    defphone(self):

    returnself.\_phone

    @phone.setter

    defphone(self, phone):

    self.\_phone = phone

    @property

    deffax(self):

    returnself.\_fax

    @fax.setter

    deffax(self, fax):

    self.\_fax = fax

    @property

    defbilling\_address(self):

    returnself.\_billing\_address

    @billing\_address.setter

    defbilling\_address(self, billing\_address):

    self.\_billing\_address = billing\_address

    @property

    defbilling\_address2(self):

    returnself.\_billing\_address2

    @billing\_address2.setter

    defbilling\_address2(self, billing\_address2):

    self.\_billing\_address2 = billing\_address2

    @property

    defbilling\_city(self):

    returnself.\_billing\_city

    @billing\_city.setter

    defbilling\_city(self, billing\_city):

    self.\_billing\_city = billing\_city

    @property

    defbilling\_state(self):

    returnself.\_billing\_state

    @billing\_state.setter

    defbilling\_state(self, billing\_state):

    self.\_billing\_state = billing\_state

    @property

    defbilling\_zip(self):

    returnself.\_billing\_zip

    @billing\_zip.setter

    defbilling\_zip(self, billing\_zip):

    self.\_billing\_zip = billing\_zip

    @property

    defpo\_number(self):

    returnself.\_po\_number

    @po\_number.setter

    defpo\_number(self, po\_number):

    self.\_po\_number = po\_number

    @property

    definvoice\_number(self):

    returnself.\_invoice\_number

    @invoice\_number.setter

    definvoice\_number(self, invoice\_number):

    self.\_invoice\_number = invoice\_number

    @property

    defbusiness\_name(self):

    returnself.\_business\_name

    @business\_name.setter

    defbusiness\_name(self, business\_name):

    self.\_business\_name = business\_name

    @property

    defcustomer\_number(self):

    returnself.\_customer\_number

    @customer\_number.setter

    defcustomer\_number(self, customer\_number):

    self.\_customer\_number = customer\_number

    @property

    defreference\_note(self):

    returnself.\_reference\_note

    @reference\_note.setter

    defreference\_note(self, reference\_note):

    self.\_reference\_note = reference\_note

    @property

    defsales\_tax(self):

    returnself.\_sales\_tax

    @sales\_tax.setter

    defsales\_tax(self, sales\_tax):

    self.\_sales\_tax = sales\_tax

    @property

    deftax\_exempt(self):

    returnself.\_tax\_exempt

    @tax\_exempt.setter

    deftax\_exempt(self, tax\_exempt):

    self.\_tax\_exempt = tax\_exempt

    @property

    defcard\_tracks(self):

    returnself.\_card\_tracks

    @card\_tracks.setter

    defcard\_tracks(self, card\_tracks):

    self.\_card\_tracks = card\_tracks

    @property

    defcard\_zip(self):

    returnself.\_card\_zip

    @card\_zip.setter

    defcard\_zip(self, card\_zip):

    self.\_card\_zip = card\_zip

    @property

    defcard\_address(self):

    returnself.\_card\_address

    @card\_address.setter

    defcard\_address(self, card\_address):

    self.\_card\_address = card\_address

    @property

    defitem\_description(self):

    returnself.\_item\_description

    @item\_description.setter

    defitem\_description(self, item\_description):

    self.\_item\_description = item\_description

    @property

    defdefault\_transaction\_type(self):

    returnself.\_default\_transaction\_type

    @default\_transaction\_type.setter

    defdefault\_transaction\_type(self, default\_transaction\_type):

    self.\_default\_transaction\_type = default\_transaction\_type

# CVVPresenceType

    # coding: utf-8

    classCVVPresenceType(object):

    NORMAL = &quot;Normal&quot;

    BYPASS = &quot;Bypass&quot;

    ILLEGIBLE = &quot;Illegible&quot;

    NOTAVAILABLE = &quot;NotAvailable&quot;

    swagger\_types = {

    }

    attribute\_map = {

    }

    def\_\_init\_\_(self): # noqa: E501

    &quot;&quot;&quot;CVVPresenceType - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.discriminator = None

# EmailReceipt

    # coding: utf-8

    classEmailReceipt(object):

    swagger\_types = {

    &#39;transaction\_id&#39;: &#39;str&#39;,

    &#39;to\_addresses&#39;: &#39;str&#39;,

    &#39;subject&#39;: &#39;str&#39;,

    &#39;header&#39;: &#39;str&#39;,

    &#39;footer&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;transaction\_id&#39;: &#39;TransactionID&#39;,

    &#39;to\_addresses&#39;: &#39;ToAddresses&#39;,

    &#39;subject&#39;: &#39;Subject&#39;,

    &#39;header&#39;: &#39;Header&#39;,

    &#39;footer&#39;: &#39;Footer&#39;

    }

    def\_\_init\_\_(self, transaction\_id=None, to\_addresses=None, subject=None, header=None, footer=None): # noqa: E501

    &quot;&quot;&quot;EmailReceipt - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_transaction\_id = None

    self.\_to\_addresses = None

    self.\_subject = None

    self.\_header = None

    self.\_footer = None

    self.discriminator = None

    iftransaction\_idisnotNone:

    self.transaction\_id = transaction\_id

    ifto\_addressesisnotNone:

    self.to\_addresses = to\_addresses

    ifsubjectisnotNone:

    self.subject = subject

    ifheaderisnotNone:

    self.header = header

    iffooterisnotNone:

    self.footer = footer

    @property

    deftransaction\_id(self):

    returnself.\_transaction\_id

    @transaction\_id.setter

    deftransaction\_id(self, transaction\_id):

    self.\_transaction\_id = transaction\_id

    @property

    defto\_addresses(self):

    returnself.\_to\_addresses

    @to\_addresses.setter

    defto\_addresses(self, to\_addresses):

    self.\_to\_addresses = to\_addresses

    @property

    defsubject(self):

    returnself.\_subject

    @subject.setter

    defsubject(self, subject):

    self.\_subject = subject

    @property

    defheader(self):

    returnself.\_header

    @header.setter

    defheader(self, header):

    self.\_header = header

    @property

    deffooter(self):

    returnself.\_footer

    @footer.setter

    deffooter(self, footer):

    self.\_footer = footer

# FieldAccess

    # coding: utf-8

    classFieldAccess(object):

    DISABLED = &quot;Disabled&quot;

    ENABLED = &quot;Enabled&quot;

    REQUIRED = &quot;Required&quot;

    swagger\_types = {

    }

    attribute\_map = {

    }

    def\_\_init\_\_(self): # noqa: E501

    &quot;&quot;&quot;FieldAccess - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.discriminator = None

# FieldInfo

    # coding: utf-8

    classFieldInfo(object):

    swagger\_types = {

    &#39;access&#39;: &#39;FieldAccess&#39;,

    &#39;default&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;access&#39;: &#39;Access&#39;,

    &#39;default&#39;: &#39;Default&#39;

    }

    def\_\_init\_\_(self, access=None, default=None): # noqa: E501

    &quot;&quot;&quot;FieldInfo - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_access = None

    self.\_default = None

    self.discriminator = None

    ifaccessisnotNone:

    self.access = access

    ifdefaultisnotNone:

    self.default = default

    @property

    defaccess(self):

    returnself.\_access

    @access.setter

    defaccess(self, access):

    self.\_access = access

    @property

    defdefault(self):

    returnself.\_default

    @default.setter

    defdefault(self, default):

    self.\_default = default

# QueryTransaction

    # coding: utf-8

    classQueryTransaction(object):

    swagger\_types = {

    &#39;tran\_sequence&#39;: &#39;str&#39;,

    &#39;tran\_batch&#39;: &#39;str&#39;,

    &#39;tran\_modified&#39;: &#39;str&#39;,

    &#39;tran\_processed&#39;: &#39;str&#39;,

    &#39;tran\_settled&#39;: &#39;str&#39;,

    &#39;submit\_time&#39;: &#39;str&#39;,

    &#39;tran\_type&#39;: &#39;str&#39;,

    &#39;tran\_amt&#39;: &#39;float&#39;,

    &#39;tran\_tax&#39;: &#39;float&#39;,

    &#39;tran\_inv&#39;: &#39;str&#39;,

    &#39;tran\_po&#39;: &#39;str&#39;,

    &#39;tran\_c\_num&#39;: &#39;str&#39;,

    &#39;tran\_note&#39;: &#39;str&#39;,

    &#39;card\_num&#39;: &#39;str&#39;,

    &#39;card\_name&#39;: &#39;str&#39;,

    &#39;card\_exp&#39;: &#39;str&#39;,

    &#39;avs\_street&#39;: &#39;str&#39;,

    &#39;avs\_zip&#39;: &#39;str&#39;,

    &#39;cvv\_num&#39;: &#39;str&#39;,

    &#39;proc\_id&#39;: &#39;str&#39;,

    &#39;proc\_resp&#39;: &#39;str&#39;,

    &#39;proc\_code&#39;: &#39;str&#39;,

    &#39;proc\_mess&#39;: &#39;str&#39;,

    &#39;avs\_code&#39;: &#39;str&#39;,

    &#39;avs\_resp&#39;: &#39;str&#39;,

    &#39;cvv\_code&#39;: &#39;str&#39;,

    &#39;cvv\_resp&#39;: &#39;str&#39;,

    &#39;items&#39;: &#39;list[TransactionItem]&#39;,

    &#39;business\_name&#39;: &#39;str&#39;,

    &#39;business\_address&#39;: &#39;str&#39;,

    &#39;business\_address2&#39;: &#39;str&#39;,

    &#39;business\_city&#39;: &#39;str&#39;,

    &#39;business\_state&#39;: &#39;str&#39;,

    &#39;business\_zip&#39;: &#39;str&#39;,

    &#39;business\_country&#39;: &#39;str&#39;,

    &#39;business\_website&#39;: &#39;str&#39;,

    &#39;contact\_first\_name&#39;: &#39;str&#39;,

    &#39;contact\_last\_name&#39;: &#39;str&#39;,

    &#39;contact\_phone&#39;: &#39;str&#39;,

    &#39;contact\_fax&#39;: &#39;str&#39;,

    &#39;contact\_email&#39;: &#39;str&#39;,

    &#39;contact\_title&#39;: &#39;str&#39;,

    &#39;ip&#39;: &#39;str&#39;,

    &#39;tax\_exempt&#39;: &#39;bool&#39;

    }

    attribute\_map = {

    &#39;tran\_sequence&#39;: &#39;Tran\_Sequence&#39;,

    &#39;tran\_batch&#39;: &#39;Tran\_Batch&#39;,

    &#39;tran\_modified&#39;: &#39;Tran\_Modified&#39;,

    &#39;tran\_processed&#39;: &#39;Tran\_Processed&#39;,

    &#39;tran\_settled&#39;: &#39;Tran\_Settled&#39;,

    &#39;submit\_time&#39;: &#39;Submit\_Time&#39;,

    &#39;tran\_type&#39;: &#39;Tran\_Type&#39;,

    &#39;tran\_amt&#39;: &#39;Tran\_Amt&#39;,

    &#39;tran\_tax&#39;: &#39;Tran\_Tax&#39;,

    &#39;tran\_inv&#39;: &#39;Tran\_Inv&#39;,

    &#39;tran\_po&#39;: &#39;Tran\_PO&#39;,

    &#39;tran\_c\_num&#39;: &#39;Tran\_CNum&#39;,

    &#39;tran\_note&#39;: &#39;Tran\_Note&#39;,

    &#39;card\_num&#39;: &#39;Card\_Num&#39;,

    &#39;card\_name&#39;: &#39;Card\_Name&#39;,

    &#39;card\_exp&#39;: &#39;Card\_Exp&#39;,

    &#39;avs\_street&#39;: &#39;AVS\_Street&#39;,

    &#39;avs\_zip&#39;: &#39;AVS\_Zip&#39;,

    &#39;cvv\_num&#39;: &#39;CVV\_Num&#39;,

    &#39;proc\_id&#39;: &#39;Proc\_ID&#39;,

    &#39;proc\_resp&#39;: &#39;Proc\_Resp&#39;,

    &#39;proc\_code&#39;: &#39;Proc\_Code&#39;,

    &#39;proc\_mess&#39;: &#39;Proc\_Mess&#39;,

    &#39;avs\_code&#39;: &#39;AVS\_Code&#39;,

    &#39;avs\_resp&#39;: &#39;AVS\_Resp&#39;,

    &#39;cvv\_code&#39;: &#39;CVV\_Code&#39;,

    &#39;cvv\_resp&#39;: &#39;CVV\_Resp&#39;,

    &#39;items&#39;: &#39;Items&#39;,

    &#39;business\_name&#39;: &#39;Business\_Name&#39;,

    &#39;business\_address&#39;: &#39;Business\_Address&#39;,

    &#39;business\_address2&#39;: &#39;Business\_Address2&#39;,

    &#39;business\_city&#39;: &#39;Business\_City&#39;,

    &#39;business\_state&#39;: &#39;Business\_State&#39;,

    &#39;business\_zip&#39;: &#39;Business\_Zip&#39;,

    &#39;business\_country&#39;: &#39;Business\_Country&#39;,

    &#39;business\_website&#39;: &#39;Business\_Website&#39;,

    &#39;contact\_first\_name&#39;: &#39;Contact\_FirstName&#39;,

    &#39;contact\_last\_name&#39;: &#39;Contact\_LastName&#39;,

    &#39;contact\_phone&#39;: &#39;Contact\_Phone&#39;,

    &#39;contact\_fax&#39;: &#39;Contact\_Fax&#39;,

    &#39;contact\_email&#39;: &#39;Contact\_Email&#39;,

    &#39;contact\_title&#39;: &#39;Contact\_Title&#39;,

    &#39;ip&#39;: &#39;IP&#39;,

    &#39;tax\_exempt&#39;: &#39;TaxExempt&#39;

    }

    def\_\_init\_\_(self, tran\_sequence=None, tran\_batch=None, tran\_modified=None, tran\_processed=None, tran\_settled=None, submit\_time=None, tran\_type=None, tran\_amt=None, tran\_tax=None, tran\_inv=None, tran\_po=None, tran\_c\_num=None, tran\_note=None, card\_num=None, card\_name=None, card\_exp=None, avs\_street=None, avs\_zip=None, cvv\_num=None, proc\_id=None, proc\_resp=None, proc\_code=None, proc\_mess=None, avs\_code=None, avs\_resp=None, cvv\_code=None, cvv\_resp=None, items=None, business\_name=None, business\_address=None, business\_address2=None, business\_city=None, business\_state=None, business\_zip=None, business\_country=None, business\_website=None, contact\_first\_name=None, contact\_last\_name=None, contact\_phone=None, contact\_fax=None, contact\_email=None, contact\_title=None, ip=None, tax\_exempt=None): # noqa: E501

    &quot;&quot;&quot;QueryTransaction - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_tran\_sequence = None

    self.\_tran\_batch = None

    self.\_tran\_modified = None

    self.\_tran\_processed = None

    self.\_tran\_settled = None

    self.\_submit\_time = None

    self.\_tran\_type = None

    self.\_tran\_amt = None

    self.\_tran\_tax = None

    self.\_tran\_inv = None

    self.\_tran\_po = None

    self.\_tran\_c\_num = None

    self.\_tran\_note = None

    self.\_card\_num = None

    self.\_card\_name = None

    self.\_card\_exp = None

    self.\_avs\_street = None

    self.\_avs\_zip = None

    self.\_cvv\_num = None

    self.\_proc\_id = None

    self.\_proc\_resp = None

    self.\_proc\_code = None

    self.\_proc\_mess = None

    self.\_avs\_code = None

    self.\_avs\_resp = None

    self.\_cvv\_code = None

    self.\_cvv\_resp = None

    self.\_items = None

    self.\_business\_name = None

    self.\_business\_address = None

    self.\_business\_address2 = None

    self.\_business\_city = None

    self.\_business\_state = None

    self.\_business\_zip = None

    self.\_business\_country = None

    self.\_business\_website = None

    self.\_contact\_first\_name = None

    self.\_contact\_last\_name = None

    self.\_contact\_phone = None

    self.\_contact\_fax = None

    self.\_contact\_email = None

    self.\_contact\_title = None

    self.\_ip = None

    self.\_tax\_exempt = None

    self.discriminator = None

    iftran\_sequenceisnotNone:

    self.tran\_sequence = tran\_sequence

    iftran\_batchisnotNone:

    self.tran\_batch = tran\_batch

    iftran\_modifiedisnotNone:

    self.tran\_modified = tran\_modified

    iftran\_processedisnotNone:

    self.tran\_processed = tran\_processed

    iftran\_settledisnotNone:

    self.tran\_settled = tran\_settled

    ifsubmit\_timeisnotNone:

    self.submit\_time = submit\_time

    iftran\_typeisnotNone:

    self.tran\_type = tran\_type

    iftran\_amtisnotNone:

    self.tran\_amt = tran\_amt

    iftran\_taxisnotNone:

    self.tran\_tax = tran\_tax

    iftran\_invisnotNone:

    self.tran\_inv = tran\_inv

    iftran\_poisnotNone:

    self.tran\_po = tran\_po

    iftran\_c\_numisnotNone:

    self.tran\_c\_num = tran\_c\_num

    iftran\_noteisnotNone:

    self.tran\_note = tran\_note

    ifcard\_numisnotNone:

    self.card\_num = card\_num

    ifcard\_nameisnotNone:

    self.card\_name = card\_name

    ifcard\_expisnotNone:

    self.card\_exp = card\_exp

    ifavs\_streetisnotNone:

    self.avs\_street = avs\_street

    ifavs\_zipisnotNone:

    self.avs\_zip = avs\_zip

    ifcvv\_numisnotNone:

    self.cvv\_num = cvv\_num

    ifproc\_idisnotNone:

    self.proc\_id = proc\_id

    ifproc\_respisnotNone:

    self.proc\_resp = proc\_resp

    ifproc\_codeisnotNone:

    self.proc\_code = proc\_code

    ifproc\_messisnotNone:

    self.proc\_mess = proc\_mess

    ifavs\_codeisnotNone:

    self.avs\_code = avs\_code

    ifavs\_respisnotNone:

    self.avs\_resp = avs\_resp

    ifcvv\_codeisnotNone:

    self.cvv\_code = cvv\_code

    ifcvv\_respisnotNone:

    self.cvv\_resp = cvv\_resp

    ifitemsisnotNone:

    self.items = items

    ifbusiness\_nameisnotNone:

    self.business\_name = business\_name

    ifbusiness\_addressisnotNone:

    self.business\_address = business\_address

    ifbusiness\_address2isnotNone:

    self.business\_address2 = business\_address2

    ifbusiness\_cityisnotNone:

    self.business\_city = business\_city

    ifbusiness\_stateisnotNone:

    self.business\_state = business\_state

    ifbusiness\_zipisnotNone:

    self.business\_zip = business\_zip

    ifbusiness\_countryisnotNone:

    self.business\_country = business\_country

    ifbusiness\_websiteisnotNone:

    self.business\_website = business\_website

    ifcontact\_first\_nameisnotNone:

    self.contact\_first\_name = contact\_first\_name

    ifcontact\_last\_nameisnotNone:

    self.contact\_last\_name = contact\_last\_name

    ifcontact\_phoneisnotNone:

    self.contact\_phone = contact\_phone

    ifcontact\_faxisnotNone:

    self.contact\_fax = contact\_fax

    ifcontact\_emailisnotNone:

    self.contact\_email = contact\_email

    ifcontact\_titleisnotNone:

    self.contact\_title = contact\_title

    ifipisnotNone:

    self.ip = ip

    iftax\_exemptisnotNone:

    self.tax\_exempt = tax\_exempt

    @property

    deftran\_sequence(self):

    returnself.\_tran\_sequence

    @tran\_sequence.setter

    deftran\_sequence(self, tran\_sequence):

    self.\_tran\_sequence = tran\_sequence

    @property

    deftran\_batch(self):

    returnself.\_tran\_batch

    @tran\_batch.setter

    deftran\_batch(self, tran\_batch):

    self.\_tran\_batch = tran\_batch

    @property

    deftran\_modified(self):

    returnself.\_tran\_modified

    @tran\_modified.setter

    deftran\_modified(self, tran\_modified):

    self.\_tran\_modified = tran\_modified

    @property

    deftran\_processed(self):

    returnself.\_tran\_processed

    @tran\_processed.setter

    deftran\_processed(self, tran\_processed):

    self.\_tran\_processed = tran\_processed

    @property

    deftran\_settled(self):

    returnself.\_tran\_settled

    @tran\_settled.setter

    deftran\_settled(self, tran\_settled):

    self.\_tran\_settled = tran\_settled

    @property

    defsubmit\_time(self):

    returnself.\_submit\_time

    @submit\_time.setter

    defsubmit\_time(self, submit\_time):

    self.\_submit\_time = submit\_time

    @property

    deftran\_type(self):

    returnself.\_tran\_type

    @tran\_type.setter

    deftran\_type(self, tran\_type):

    self.\_tran\_type = tran\_type

    @property

    deftran\_amt(self):

    returnself.\_tran\_amt

    @tran\_amt.setter

    deftran\_amt(self, tran\_amt):

    self.\_tran\_amt = tran\_amt

    @property

    deftran\_tax(self):

    returnself.\_tran\_tax

    @tran\_tax.setter

    deftran\_tax(self, tran\_tax):

    self.\_tran\_tax = tran\_tax

    @property

    deftran\_inv(self):

    returnself.\_tran\_inv

    @tran\_inv.setter

    deftran\_inv(self, tran\_inv):

    self.\_tran\_inv = tran\_inv

    @property

    deftran\_po(self):

    returnself.\_tran\_po

    @tran\_po.setter

    deftran\_po(self, tran\_po):

    self.\_tran\_po = tran\_po

    @property

    deftran\_c\_num(self):

    returnself.\_tran\_c\_num

    @tran\_c\_num.setter

    deftran\_c\_num(self, tran\_c\_num):

    self.\_tran\_c\_num = tran\_c\_num

    @property

    deftran\_note(self):

    returnself.\_tran\_note

    @tran\_note.setter

    deftran\_note(self, tran\_note):

    self.\_tran\_note = tran\_note

    @property

    defcard\_num(self):

    returnself.\_card\_num

    @card\_num.setter

    defcard\_num(self, card\_num):

    self.\_card\_num = card\_num

    @property

    defcard\_name(self):

    returnself.\_card\_name

    @card\_name.setter

    defcard\_name(self, card\_name):

    self.\_card\_name = card\_name

    @property

    defcard\_exp(self):

    returnself.\_card\_exp

    @card\_exp.setter

    defcard\_exp(self, card\_exp):

    self.\_card\_exp = card\_exp

    @property

    defavs\_street(self):

    returnself.\_avs\_street

    @avs\_street.setter

    defavs\_street(self, avs\_street):

    self.\_avs\_street = avs\_street

    @property

    defavs\_zip(self):

    returnself.\_avs\_zip

    @avs\_zip.setter

    defavs\_zip(self, avs\_zip):

    self.\_avs\_zip = avs\_zip

    @property

    defcvv\_num(self):

    returnself.\_cvv\_num

    @cvv\_num.setter

    defcvv\_num(self, cvv\_num):

    self.\_cvv\_num = cvv\_num

    @property

    defproc\_id(self):

    returnself.\_proc\_id

    @proc\_id.setter

    defproc\_id(self, proc\_id):

    self.\_proc\_id = proc\_id

    @property

    defproc\_resp(self):

    returnself.\_proc\_resp

    @proc\_resp.setter

    defproc\_resp(self, proc\_resp):

    self.\_proc\_resp = proc\_resp

    @property

    defproc\_code(self):

    returnself.\_proc\_code

    @proc\_code.setter

    defproc\_code(self, proc\_code):

    self.\_proc\_code = proc\_code

    @property

    defproc\_mess(self):

    returnself.\_proc\_mess

    @proc\_mess.setter

    defproc\_mess(self, proc\_mess):

    self.\_proc\_mess = proc\_mess

    @property

    defavs\_code(self):

    returnself.\_avs\_code

    @avs\_code.setter

    defavs\_code(self, avs\_code):

    self.\_avs\_code = avs\_code

    @property

    defavs\_resp(self):

    returnself.\_avs\_resp

    @avs\_resp.setter

    defavs\_resp(self, avs\_resp):

    self.\_avs\_resp = avs\_resp

    @property

    defcvv\_code(self):

    returnself.\_cvv\_code

    @cvv\_code.setter

    defcvv\_code(self, cvv\_code):

    self.\_cvv\_code = cvv\_code

    @property

    defcvv\_resp(self):

    returnself.\_cvv\_resp

    @cvv\_resp.setter

    defcvv\_resp(self, cvv\_resp):

    self.\_cvv\_resp = cvv\_resp

    @property

    defitems(self):

    returnself.\_items

    @items.setter

    defitems(self, items):

    self.\_items = items

    @property

    defbusiness\_name(self):

    returnself.\_business\_name

    @business\_name.setter

    defbusiness\_name(self, business\_name):

    self.\_business\_name = business\_name

    @property

    defbusiness\_address(self):

    returnself.\_business\_address

    @business\_address.setter

    defbusiness\_address(self, business\_address):

    self.\_business\_address = business\_address

    @property

    defbusiness\_address2(self):

    returnself.\_business\_address2

    @business\_address2.setter

    defbusiness\_address2(self, business\_address2):

    self.\_business\_address2 = business\_address2

    @property

    defbusiness\_city(self):

    returnself.\_business\_city

    @business\_city.setter

    defbusiness\_city(self, business\_city):

    self.\_business\_city = business\_city

    @property

    defbusiness\_state(self):

    returnself.\_business\_state

    @business\_state.setter

    defbusiness\_state(self, business\_state):

    self.\_business\_state = business\_state

    @property

    defbusiness\_zip(self):

    returnself.\_business\_zip

    @business\_zip.setter

    defbusiness\_zip(self, business\_zip):

    self.\_business\_zip = business\_zip

    @property

    defbusiness\_country(self):

    returnself.\_business\_country

    @business\_country.setter

    defbusiness\_country(self, business\_country):

    self.\_business\_country = business\_country

    @property

    defbusiness\_website(self):

    returnself.\_business\_website

    @business\_website.setter

    defbusiness\_website(self, business\_website):

    self.\_business\_website = business\_website

    @property

    defcontact\_first\_name(self):

    returnself.\_contact\_first\_name

    @contact\_first\_name.setter

    defcontact\_first\_name(self, contact\_first\_name):

    self.\_contact\_first\_name = contact\_first\_name

    @property

    defcontact\_last\_name(self):

    returnself.\_contact\_last\_name

    @contact\_last\_name.setter

    defcontact\_last\_name(self, contact\_last\_name):

    self.\_contact\_last\_name = contact\_last\_name

    @property

    defcontact\_phone(self):

    returnself.\_contact\_phone

    @contact\_phone.setter

    defcontact\_phone(self, contact\_phone):

    self.\_contact\_phone = contact\_phone

    @property

    defcontact\_fax(self):

    returnself.\_contact\_fax

    @contact\_fax.setter

    defcontact\_fax(self, contact\_fax):

    self.\_contact\_fax = contact\_fax

    @property

    defcontact\_email(self):

    returnself.\_contact\_email

    @contact\_email.setter

    defcontact\_email(self, contact\_email):

    self.\_contact\_email = contact\_email

    @property

    defcontact\_title(self):

    returnself.\_contact\_title

    @contact\_title.setter

    defcontact\_title(self, contact\_title):

    self.\_contact\_title = contact\_title

    @property

    defip(self):

    returnself.\_ip

    @ip.setter

    defip(self, ip):

    self.\_ip = ip

    @property

    deftax\_exempt(self):

    returnself.\_tax\_exempt

    @tax\_exempt.setter

    deftax\_exempt(self, tax\_exempt):

    self.\_tax\_exempt = tax\_exempt

# Receipt

    # coding: utf-8

    classReceipt(object):

    swagger\_types = {

    &#39;header&#39;: &#39;ReceiptCustomLines&#39;,

    &#39;footer&#39;: &#39;ReceiptCustomLines&#39;

    }

    attribute\_map = {

    &#39;header&#39;: &#39;Header&#39;,

    &#39;footer&#39;: &#39;Footer&#39;

    }

    def\_\_init\_\_(self, header=None, footer=None): # noqa: E501

    &quot;&quot;&quot;Receipt - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_header = None

    self.\_footer = None

    self.discriminator = None

    ifheaderisnotNone:

    self.header = header

    iffooterisnotNone:

    self.footer = footer

    @property

    defheader(self):

    returnself.\_header

    @header.setter

    defheader(self, header):

    self.\_header = header

    @property

    deffooter(self):

    returnself.\_footer

    @footer.setter

    deffooter(self, footer):

    self.\_footer = footer

# ReceiptCustomLines

    # coding: utf-8

    classReceiptCustomLines(object):

    swagger\_types = {

    &#39;custom\_line1&#39;: &#39;str&#39;,

    &#39;custom\_line2&#39;: &#39;str&#39;,

    &#39;custom\_line3&#39;: &#39;str&#39;,

    &#39;custom\_line4&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;custom\_line1&#39;: &#39;CustomLine1&#39;,

    &#39;custom\_line2&#39;: &#39;CustomLine2&#39;,

    &#39;custom\_line3&#39;: &#39;CustomLine3&#39;,

    &#39;custom\_line4&#39;: &#39;CustomLine4&#39;

    }

    def\_\_init\_\_(self, custom\_line1=None, custom\_line2=None, custom\_line3=None, custom\_line4=None): # noqa: E501

    &quot;&quot;&quot;ReceiptCustomLines - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_custom\_line1 = None

    self.\_custom\_line2 = None

    self.\_custom\_line3 = None

    self.\_custom\_line4 = None

    self.discriminator = None

    ifcustom\_line1isnotNone:

    self.custom\_line1 = custom\_line1

    ifcustom\_line2isnotNone:

    self.custom\_line2 = custom\_line2

    ifcustom\_line3isnotNone:

    self.custom\_line3 = custom\_line3

    ifcustom\_line4isnotNone:

    self.custom\_line4 = custom\_line4

    @property

    defcustom\_line1(self):

    returnself.\_custom\_line1

    @custom\_line1.setter

    defcustom\_line1(self, custom\_line1):

    self.\_custom\_line1 = custom\_line1

    @property

    defcustom\_line2(self):

    returnself.\_custom\_line2

    @custom\_line2.setter

    defcustom\_line2(self, custom\_line2):

    self.\_custom\_line2 = custom\_line2

    @property

    defcustom\_line3(self):

    returnself.\_custom\_line3

    @custom\_line3.setter

    defcustom\_line3(self, custom\_line3):

    self.\_custom\_line3 = custom\_line3

    @property

    defcustom\_line4(self):

    returnself.\_custom\_line4

    @custom\_line4.setter

    defcustom\_line4(self, custom\_line4):

    self.\_custom\_line4 = custom\_line4

# Record

    # coding: utf-8

    classRecord(object):

    swagger\_types = {

    &#39;response&#39;: &#39;Response&#39;,

    &#39;id&#39;: &#39;int&#39;,

    &#39;reference&#39;: &#39;str&#39;,

    &#39;business&#39;: &#39;Business&#39;,

    &#39;contact&#39;: &#39;Contact&#39;,

    &#39;po&#39;: &#39;str&#39;,

    &#39;invoice&#39;: &#39;str&#39;,

    &#39;customer&#39;: &#39;str&#39;,

    &#39;tax\_exempt&#39;: &#39;bool&#39;,

    &#39;note&#39;: &#39;str&#39;,

    &#39;credit\_cards&#39;: &#39;list[VaultCreditCard]&#39;,

    &#39;checks&#39;: &#39;list[VaultCheck]&#39;

    }

    attribute\_map = {

    &#39;response&#39;: &#39;Response&#39;,

    &#39;id&#39;: &#39;ID&#39;,

    &#39;reference&#39;: &#39;Reference&#39;,

    &#39;business&#39;: &#39;Business&#39;,

    &#39;contact&#39;: &#39;Contact&#39;,

    &#39;po&#39;: &#39;PO&#39;,

    &#39;invoice&#39;: &#39;Invoice&#39;,

    &#39;customer&#39;: &#39;Customer&#39;,

    &#39;tax\_exempt&#39;: &#39;TaxExempt&#39;,

    &#39;note&#39;: &#39;Note&#39;,

    &#39;credit\_cards&#39;: &#39;CreditCards&#39;,

    &#39;checks&#39;: &#39;Checks&#39;

    }

    def\_\_init\_\_(self, response=None, id=None, reference=None, business=None, contact=None, po=None, invoice=None, customer=None, tax\_exempt=None, note=None, credit\_cards=None, checks=None): # noqa: E501

    &quot;&quot;&quot;Record - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_response = None

    self.\_id = None

    self.\_reference = None

    self.\_business = None

    self.\_contact = None

    self.\_po = None

    self.\_invoice = None

    self.\_customer = None

    self.\_tax\_exempt = None

    self.\_note = None

    self.\_credit\_cards = None

    self.\_checks = None

    self.discriminator = None

    ifresponseisnotNone:

    self.response = response

    ifidisnotNone:

    self.id = id

    ifreferenceisnotNone:

    self.reference = reference

    ifbusinessisnotNone:

    self.business = business

    ifcontactisnotNone:

    self.contact = contact

    ifpoisnotNone:

    self.po = po

    ifinvoiceisnotNone:

    self.invoice = invoice

    ifcustomerisnotNone:

    self.customer = customer

    iftax\_exemptisnotNone:

    self.tax\_exempt = tax\_exempt

    ifnoteisnotNone:

    self.note = note

    ifcredit\_cardsisnotNone:

    self.credit\_cards = credit\_cards

    ifchecksisnotNone:

    self.checks = checks

    @property

    defresponse(self):

    returnself.\_response

    @response.setter

    defresponse(self, response):

    self.\_response = response

    @property

    defid(self):

    returnself.\_id

    @id.setter

    defid(self, id):

    self.\_id = id

    @property

    defreference(self):

    returnself.\_reference

    @reference.setter

    defreference(self, reference):

    self.\_reference = reference

    @property

    defbusiness(self):

    returnself.\_business

    @business.setter

    defbusiness(self, business):

    self.\_business = business

    @property

    defcontact(self):

    returnself.\_contact

    @contact.setter

    defcontact(self, contact):

    self.\_contact = contact

    @property

    defpo(self):

    returnself.\_po

    @po.setter

    defpo(self, po):

    self.\_po = po

    @property

    definvoice(self):

    returnself.\_invoice

    @invoice.setter

    definvoice(self, invoice):

    self.\_invoice = invoice

    @property

    defcustomer(self):

    returnself.\_customer

    @customer.setter

    defcustomer(self, customer):

    self.\_customer = customer

    @property

    deftax\_exempt(self):

    returnself.\_tax\_exempt

    @tax\_exempt.setter

    deftax\_exempt(self, tax\_exempt):

    self.\_tax\_exempt = tax\_exempt

    @property

    defnote(self):

    returnself.\_note

    @note.setter

    defnote(self, note):

    self.\_note = note

    @property

    defcredit\_cards(self):

    returnself.\_credit\_cards

    @credit\_cards.setter

    defcredit\_cards(self, credit\_cards):

    self.\_credit\_cards = credit\_cards

    @property

    defchecks(self):

    returnself.\_checks

    @checks.setter

    defchecks(self, checks):

    self.\_checks = checks

# Response

    # coding: utf-8

    classResponse(object):

    swagger\_types = {

    &#39;error&#39;: &#39;bool&#39;,

    &#39;message&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;error&#39;: &#39;Error&#39;,

    &#39;message&#39;: &#39;Message&#39;

    }

    def\_\_init\_\_(self, error=None, message=None): # noqa: E501

    &quot;&quot;&quot;Response - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_error = None

    self.\_message = None

    self.discriminator = None

    iferrorisnotNone:

    self.error = error

    ifmessageisnotNone:

    self.message = message

    @property

    deferror(self):

    returnself.\_error

    @error.setter

    deferror(self, error):

    self.\_error = error

    @property

    defmessage(self):

    returnself.\_message

    @message.setter

    defmessage(self, message):

    self.\_message = message

# SearchVault

    # coding: utf-8

    classSearchVault(object):

    swagger\_types = {

    &#39;reference&#39;: &#39;str&#39;,

    &#39;business\_name&#39;: &#39;str&#39;,

    &#39;first\_name&#39;: &#39;str&#39;,

    &#39;last\_name&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;reference&#39;: &#39;Reference&#39;,

    &#39;business\_name&#39;: &#39;BusinessName&#39;,

    &#39;first\_name&#39;: &#39;FirstName&#39;,

    &#39;last\_name&#39;: &#39;LastName&#39;

    }

    def\_\_init\_\_(self, reference=None, business\_name=None, first\_name=None, last\_name=None): # noqa: E501

    &quot;&quot;&quot;SearchVault - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_reference = None

    self.\_business\_name = None

    self.\_first\_name = None

    self.\_last\_name = None

    self.discriminator = None

    ifreferenceisnotNone:

    self.reference = reference

    ifbusiness\_nameisnotNone:

    self.business\_name = business\_name

    iffirst\_nameisnotNone:

    self.first\_name = first\_name

    iflast\_nameisnotNone:

    self.last\_name = last\_name

    @property

    defreference(self):

    returnself.\_reference

    @reference.setter

    defreference(self, reference):

    self.\_reference = reference

    @property

    defbusiness\_name(self):

    returnself.\_business\_name

    @business\_name.setter

    defbusiness\_name(self, business\_name):

    self.\_business\_name = business\_name

    @property

    deffirst\_name(self):

    returnself.\_first\_name

    @first\_name.setter

    deffirst\_name(self, first\_name):

    self.\_first\_name = first\_name

    @property

    deflast\_name(self):

    returnself.\_last\_name

    @last\_name.setter

    deflast\_name(self, last\_name):

    self.\_last\_name = last\_name

# Settings

    # coding: utf-8

    classSettings(object):

    swagger\_types = {

    &#39;credit\_card\_transaction\_settings&#39;: &#39;CreditCardTransactionSettings&#39;,

    &#39;check\_transaction\_settings&#39;: &#39;CheckTransactionSettings&#39;,

    &#39;business&#39;: &#39;Business&#39;,

    &#39;main\_contact&#39;: &#39;Contact&#39;,

    &#39;receipt40&#39;: &#39;Receipt&#39;,

    &#39;receipt80&#39;: &#39;Receipt&#39;,

    &#39;print\_signature\_line&#39;: &#39;bool&#39;,

    &#39;response&#39;: &#39;Response&#39;,

    &#39;account\_id&#39;: &#39;str&#39;,

    &#39;copy\_email\_receipt&#39;: &#39;FieldInfo&#39;

    }

    attribute\_map = {

    &#39;credit\_card\_transaction\_settings&#39;: &#39;CreditCardTransactionSettings&#39;,

    &#39;check\_transaction\_settings&#39;: &#39;CheckTransactionSettings&#39;,

    &#39;business&#39;: &#39;Business&#39;,

    &#39;main\_contact&#39;: &#39;MainContact&#39;,

    &#39;receipt40&#39;: &#39;Receipt40&#39;,

    &#39;receipt80&#39;: &#39;Receipt80&#39;,

    &#39;print\_signature\_line&#39;: &#39;PrintSignatureLine&#39;,

    &#39;response&#39;: &#39;Response&#39;,

    &#39;account\_id&#39;: &#39;AccountID&#39;,

    &#39;copy\_email\_receipt&#39;: &#39;CopyEmailReceipt&#39;

    }

    def\_\_init\_\_(self, credit\_card\_transaction\_settings=None, check\_transaction\_settings=None, business=None, main\_contact=None, receipt40=None, receipt80=None, print\_signature\_line=None, response=None, account\_id=None, copy\_email\_receipt=None): # noqa: E501

    &quot;&quot;&quot;Settings - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_credit\_card\_transaction\_settings = None

    self.\_check\_transaction\_settings = None

    self.\_business = None

    self.\_main\_contact = None

    self.\_receipt40 = None

    self.\_receipt80 = None

    self.\_print\_signature\_line = None

    self.\_response = None

    self.\_account\_id = None

    self.\_copy\_email\_receipt = None

    self.discriminator = None

    ifcredit\_card\_transaction\_settingsisnotNone:

    self.credit\_card\_transaction\_settings = credit\_card\_transaction\_settings

    ifcheck\_transaction\_settingsisnotNone:

    self.check\_transaction\_settings = check\_transaction\_settings

    ifbusinessisnotNone:

    self.business = business

    ifmain\_contactisnotNone:

    self.main\_contact = main\_contact

    ifreceipt40isnotNone:

    self.receipt40 = receipt40

    ifreceipt80isnotNone:

    self.receipt80 = receipt80

    ifprint\_signature\_lineisnotNone:

    self.print\_signature\_line = print\_signature\_line

    ifresponseisnotNone:

    self.response = response

    ifaccount\_idisnotNone:

    self.account\_id = account\_id

    ifcopy\_email\_receiptisnotNone:

    self.copy\_email\_receipt = copy\_email\_receipt

    @property

    defcredit\_card\_transaction\_settings(self):

    returnself.\_credit\_card\_transaction\_settings

    @credit\_card\_transaction\_settings.setter

    defcredit\_card\_transaction\_settings(self, credit\_card\_transaction\_settings):

    self.\_credit\_card\_transaction\_settings = credit\_card\_transaction\_settings

    @property

    defcheck\_transaction\_settings(self):

    returnself.\_check\_transaction\_settings

    @check\_transaction\_settings.setter

    defcheck\_transaction\_settings(self, check\_transaction\_settings):

    self.\_check\_transaction\_settings = check\_transaction\_settings

    @property

    defbusiness(self):

    returnself.\_business

    @business.setter

    defbusiness(self, business):

    self.\_business = business

    @property

    defmain\_contact(self):

    returnself.\_main\_contact

    @main\_contact.setter

    defmain\_contact(self, main\_contact):

    self.\_main\_contact = main\_contact

    @property

    defreceipt40(self):

    returnself.\_receipt40

    @receipt40.setter

    defreceipt40(self, receipt40):

    self.\_receipt40 = receipt40

    @property

    defreceipt80(self):

    returnself.\_receipt80

    @receipt80.setter

    defreceipt80(self, receipt80):

    self.\_receipt80 = receipt80

    @property

    defprint\_signature\_line(self):

    returnself.\_print\_signature\_line

    @print\_signature\_line.setter

    defprint\_signature\_line(self, print\_signature\_line):

    self.\_print\_signature\_line = print\_signature\_line

    @property

    defresponse(self):

    returnself.\_response

    @response.setter

    defresponse(self, response):

    self.\_response = response

    @property

    defaccount\_id(self):

    returnself.\_account\_id

    @account\_id.setter

    defaccount\_id(self, account\_id):

    self.\_account\_id = account\_id

    @property

    defcopy\_email\_receipt(self):

    returnself.\_copy\_email\_receipt

    @copy\_email\_receipt.setter

    defcopy\_email\_receipt(self, copy\_email\_receipt):

    self.\_copy\_email\_receipt = copy\_email\_receipt

# TerminalSettings

    # coding: utf-8

    classTerminalSettings(object):

    swagger\_types = {

    &#39;id&#39;: &#39;int&#39;,

    &#39;terminal\_id&#39;: &#39;int&#39;,

    &#39;sec\_code&#39;: &#39;str&#39;,

    &#39;gateway\_terminal&#39;: &#39;bool&#39;,

    &#39;consumer\_credits&#39;: &#39;bool&#39;,

    &#39;dl\_required&#39;: &#39;bool&#39;,

    &#39;check\_verify&#39;: &#39;bool&#39;,

    &#39;identity\_verify&#39;: &#39;bool&#39;

    }

    attribute\_map = {

    &#39;id&#39;: &#39;ID&#39;,

    &#39;terminal\_id&#39;: &#39;Terminal\_ID&#39;,

    &#39;sec\_code&#39;: &#39;SEC\_Code&#39;,

    &#39;gateway\_terminal&#39;: &#39;Gateway\_Terminal&#39;,

    &#39;consumer\_credits&#39;: &#39;Consumer\_Credits&#39;,

    &#39;dl\_required&#39;: &#39;DL\_Required&#39;,

    &#39;check\_verify&#39;: &#39;Check\_Verify&#39;,

    &#39;identity\_verify&#39;: &#39;Identity\_Verify&#39;

    }

    def\_\_init\_\_(self, id=None, terminal\_id=None, sec\_code=None, gateway\_terminal=None, consumer\_credits=None, dl\_required=None, check\_verify=None, identity\_verify=None): # noqa: E501

    &quot;&quot;&quot;TerminalSettings - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_id = None

    self.\_terminal\_id = None

    self.\_sec\_code = None

    self.\_gateway\_terminal = None

    self.\_consumer\_credits = None

    self.\_dl\_required = None

    self.\_check\_verify = None

    self.\_identity\_verify = None

    self.discriminator = None

    ifidisnotNone:

    self.id = id

    ifterminal\_idisnotNone:

    self.terminal\_id = terminal\_id

    ifsec\_codeisnotNone:

    self.sec\_code = sec\_code

    ifgateway\_terminalisnotNone:

    self.gateway\_terminal = gateway\_terminal

    ifconsumer\_creditsisnotNone:

    self.consumer\_credits = consumer\_credits

    ifdl\_requiredisnotNone:

    self.dl\_required = dl\_required

    ifcheck\_verifyisnotNone:

    self.check\_verify = check\_verify

    ifidentity\_verifyisnotNone:

    self.identity\_verify = identity\_verify

    @property

    defid(self):

    returnself.\_id

    @id.setter

    defid(self, id):

    self.\_id = id

    @property

    defterminal\_id(self):

    returnself.\_terminal\_id

    @terminal\_id.setter

    defterminal\_id(self, terminal\_id):

    self.\_terminal\_id = terminal\_id

    @property

    defsec\_code(self):

    returnself.\_sec\_code

    @sec\_code.setter

    defsec\_code(self, sec\_code):

    self.\_sec\_code = sec\_code

    @property

    defgateway\_terminal(self):

    returnself.\_gateway\_terminal

    @gateway\_terminal.setter

    defgateway\_terminal(self, gateway\_terminal):

    self.\_gateway\_terminal = gateway\_terminal

    @property

    defconsumer\_credits(self):

    returnself.\_consumer\_credits

    @consumer\_credits.setter

    defconsumer\_credits(self, consumer\_credits):

    self.\_consumer\_credits = consumer\_credits

    @property

    defdl\_required(self):

    returnself.\_dl\_required

    @dl\_required.setter

    defdl\_required(self, dl\_required):

    self.\_dl\_required = dl\_required

    @property

    defcheck\_verify(self):

    returnself.\_check\_verify

    @check\_verify.setter

    defcheck\_verify(self, check\_verify):

    self.\_check\_verify = check\_verify

    @property

    defidentity\_verify(self):

    returnself.\_identity\_verify

    @identity\_verify.setter

    defidentity\_verify(self, identity\_verify):

    self.\_identity\_verify = identity\_verify

# Transaction

    # coding: utf-8

    classTransaction(object):

    swagger\_types = {

    &#39;submit\_time&#39;: &#39;datetime&#39;,

    &#39;tran\_type&#39;: &#39;str&#39;,

    &#39;tran\_amt&#39;: &#39;float&#39;,

    &#39;tran\_tax&#39;: &#39;float&#39;,

    &#39;tran\_inv&#39;: &#39;str&#39;,

    &#39;tran\_po&#39;: &#39;str&#39;,

    &#39;tran\_c\_num&#39;: &#39;str&#39;,

    &#39;tran\_note&#39;: &#39;str&#39;,

    &#39;card\_num&#39;: &#39;str&#39;,

    &#39;card\_name&#39;: &#39;str&#39;,

    &#39;card\_exp&#39;: &#39;str&#39;,

    &#39;card\_type&#39;: &#39;str&#39;,

    &#39;avs\_street&#39;: &#39;str&#39;,

    &#39;avs\_zip&#39;: &#39;str&#39;,

    &#39;cvv\_num&#39;: &#39;str&#39;,

    &#39;proc\_id&#39;: &#39;str&#39;,

    &#39;proc\_resp&#39;: &#39;str&#39;,

    &#39;proc\_code&#39;: &#39;str&#39;,

    &#39;proc\_mess&#39;: &#39;str&#39;,

    &#39;avs\_code&#39;: &#39;str&#39;,

    &#39;avs\_resp&#39;: &#39;str&#39;,

    &#39;cvv\_code&#39;: &#39;str&#39;,

    &#39;cvv\_resp&#39;: &#39;str&#39;,

    &#39;items&#39;: &#39;list[TransactionItem]&#39;,

    &#39;business\_name&#39;: &#39;str&#39;,

    &#39;business\_address&#39;: &#39;str&#39;,

    &#39;business\_address2&#39;: &#39;str&#39;,

    &#39;business\_city&#39;: &#39;str&#39;,

    &#39;business\_state&#39;: &#39;str&#39;,

    &#39;business\_zip&#39;: &#39;str&#39;,

    &#39;business\_country&#39;: &#39;str&#39;,

    &#39;business\_website&#39;: &#39;str&#39;,

    &#39;contact\_first\_name&#39;: &#39;str&#39;,

    &#39;contact\_last\_name&#39;: &#39;str&#39;,

    &#39;contact\_phone&#39;: &#39;str&#39;,

    &#39;contact\_fax&#39;: &#39;str&#39;,

    &#39;contact\_email&#39;: &#39;str&#39;,

    &#39;contact\_title&#39;: &#39;str&#39;,

    &#39;ip&#39;: &#39;str&#39;,

    &#39;tax\_exempt&#39;: &#39;bool&#39;

    }

    attribute\_map = {

    &#39;submit\_time&#39;: &#39;Submit\_Time&#39;,

    &#39;tran\_type&#39;: &#39;Tran\_Type&#39;,

    &#39;tran\_amt&#39;: &#39;Tran\_Amt&#39;,

    &#39;tran\_tax&#39;: &#39;Tran\_Tax&#39;,

    &#39;tran\_inv&#39;: &#39;Tran\_Inv&#39;,

    &#39;tran\_po&#39;: &#39;Tran\_PO&#39;,

    &#39;tran\_c\_num&#39;: &#39;Tran\_CNum&#39;,

    &#39;tran\_note&#39;: &#39;Tran\_Note&#39;,

    &#39;card\_num&#39;: &#39;Card\_Num&#39;,

    &#39;card\_name&#39;: &#39;Card\_Name&#39;,

    &#39;card\_exp&#39;: &#39;Card\_Exp&#39;,

    &#39;card\_type&#39;: &#39;Card\_Type&#39;,

    &#39;avs\_street&#39;: &#39;AVS\_Street&#39;,

    &#39;avs\_zip&#39;: &#39;AVS\_Zip&#39;,

    &#39;cvv\_num&#39;: &#39;CVV\_Num&#39;,

    &#39;proc\_id&#39;: &#39;Proc\_ID&#39;,

    &#39;proc\_resp&#39;: &#39;Proc\_Resp&#39;,

    &#39;proc\_code&#39;: &#39;Proc\_Code&#39;,

    &#39;proc\_mess&#39;: &#39;Proc\_Mess&#39;,

    &#39;avs\_code&#39;: &#39;AVS\_Code&#39;,

    &#39;avs\_resp&#39;: &#39;AVS\_Resp&#39;,

    &#39;cvv\_code&#39;: &#39;CVV\_Code&#39;,

    &#39;cvv\_resp&#39;: &#39;CVV\_Resp&#39;,

    &#39;items&#39;: &#39;Items&#39;,

    &#39;business\_name&#39;: &#39;Business\_Name&#39;,

    &#39;business\_address&#39;: &#39;Business\_Address&#39;,

    &#39;business\_address2&#39;: &#39;Business\_Address2&#39;,

    &#39;business\_city&#39;: &#39;Business\_City&#39;,

    &#39;business\_state&#39;: &#39;Business\_State&#39;,

    &#39;business\_zip&#39;: &#39;Business\_Zip&#39;,

    &#39;business\_country&#39;: &#39;Business\_Country&#39;,

    &#39;business\_website&#39;: &#39;Business\_Website&#39;,

    &#39;contact\_first\_name&#39;: &#39;Contact\_FirstName&#39;,

    &#39;contact\_last\_name&#39;: &#39;Contact\_LastName&#39;,

    &#39;contact\_phone&#39;: &#39;Contact\_Phone&#39;,

    &#39;contact\_fax&#39;: &#39;Contact\_Fax&#39;,

    &#39;contact\_email&#39;: &#39;Contact\_Email&#39;,

    &#39;contact\_title&#39;: &#39;Contact\_Title&#39;,

    &#39;ip&#39;: &#39;IP&#39;,

    &#39;tax\_exempt&#39;: &#39;TaxExempt&#39;

    }

    def\_\_init\_\_(self, submit\_time=None, tran\_type=None, tran\_amt=None, tran\_tax=None, tran\_inv=None, tran\_po=None, tran\_c\_num=None, tran\_note=None, card\_num=None, card\_name=None, card\_exp=None, card\_type=None, avs\_street=None, avs\_zip=None, cvv\_num=None, proc\_id=None, proc\_resp=None, proc\_code=None, proc\_mess=None, avs\_code=None, avs\_resp=None, cvv\_code=None, cvv\_resp=None, items=None, business\_name=None, business\_address=None, business\_address2=None, business\_city=None, business\_state=None, business\_zip=None, business\_country=None, business\_website=None, contact\_first\_name=None, contact\_last\_name=None, contact\_phone=None, contact\_fax=None, contact\_email=None, contact\_title=None, ip=None, tax\_exempt=None): # noqa: E501

    &quot;&quot;&quot;Transaction - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_submit\_time = None

    self.\_tran\_type = None

    self.\_tran\_amt = None

    self.\_tran\_tax = None

    self.\_tran\_inv = None

    self.\_tran\_po = None

    self.\_tran\_c\_num = None

    self.\_tran\_note = None

    self.\_card\_num = None

    self.\_card\_name = None

    self.\_card\_exp = None

    self.\_card\_type = None

    self.\_avs\_street = None

    self.\_avs\_zip = None

    self.\_cvv\_num = None

    self.\_proc\_id = None

    self.\_proc\_resp = None

    self.\_proc\_code = None

    self.\_proc\_mess = None

    self.\_avs\_code = None

    self.\_avs\_resp = None

    self.\_cvv\_code = None

    self.\_cvv\_resp = None

    self.\_items = None

    self.\_business\_name = None

    self.\_business\_address = None

    self.\_business\_address2 = None

    self.\_business\_city = None

    self.\_business\_state = None

    self.\_business\_zip = None

    self.\_business\_country = None

    self.\_business\_website = None

    self.\_contact\_first\_name = None

    self.\_contact\_last\_name = None

    self.\_contact\_phone = None

    self.\_contact\_fax = None

    self.\_contact\_email = None

    self.\_contact\_title = None

    self.\_ip = None

    self.\_tax\_exempt = None

    self.discriminator = None

    ifsubmit\_timeisnotNone:

    self.submit\_time = submit\_time

    iftran\_typeisnotNone:

    self.tran\_type = tran\_type

    iftran\_amtisnotNone:

    self.tran\_amt = tran\_amt

    iftran\_taxisnotNone:

    self.tran\_tax = tran\_tax

    iftran\_invisnotNone:

    self.tran\_inv = tran\_inv

    iftran\_poisnotNone:

    self.tran\_po = tran\_po

    iftran\_c\_numisnotNone:

    self.tran\_c\_num = tran\_c\_num

    iftran\_noteisnotNone:

    self.tran\_note = tran\_note

    ifcard\_numisnotNone:

    self.card\_num = card\_num

    ifcard\_nameisnotNone:

    self.card\_name = card\_name

    ifcard\_expisnotNone:

    self.card\_exp = card\_exp

    ifcard\_typeisnotNone:

    self.card\_type = card\_type

    ifavs\_streetisnotNone:

    self.avs\_street = avs\_street

    ifavs\_zipisnotNone:

    self.avs\_zip = avs\_zip

    ifcvv\_numisnotNone:

    self.cvv\_num = cvv\_num

    ifproc\_idisnotNone:

    self.proc\_id = proc\_id

    ifproc\_respisnotNone:

    self.proc\_resp = proc\_resp

    ifproc\_codeisnotNone:

    self.proc\_code = proc\_code

    ifproc\_messisnotNone:

    self.proc\_mess = proc\_mess

    ifavs\_codeisnotNone:

    self.avs\_code = avs\_code

    ifavs\_respisnotNone:

    self.avs\_resp = avs\_resp

    ifcvv\_codeisnotNone:

    self.cvv\_code = cvv\_code

    ifcvv\_respisnotNone:

    self.cvv\_resp = cvv\_resp

    ifitemsisnotNone:

    self.items = items

    ifbusiness\_nameisnotNone:

    self.business\_name = business\_name

    ifbusiness\_addressisnotNone:

    self.business\_address = business\_address

    ifbusiness\_address2isnotNone:

    self.business\_address2 = business\_address2

    ifbusiness\_cityisnotNone:

    self.business\_city = business\_city

    ifbusiness\_stateisnotNone:

    self.business\_state = business\_state

    ifbusiness\_zipisnotNone:

    self.business\_zip = business\_zip

    ifbusiness\_countryisnotNone:

    self.business\_country = business\_country

    ifbusiness\_websiteisnotNone:

    self.business\_website = business\_website

    ifcontact\_first\_nameisnotNone:

    self.contact\_first\_name = contact\_first\_name

    ifcontact\_last\_nameisnotNone:

    self.contact\_last\_name = contact\_last\_name

    ifcontact\_phoneisnotNone:

    self.contact\_phone = contact\_phone

    ifcontact\_faxisnotNone:

    self.contact\_fax = contact\_fax

    ifcontact\_emailisnotNone:

    self.contact\_email = contact\_email

    ifcontact\_titleisnotNone:

    self.contact\_title = contact\_title

    ifipisnotNone:

    self.ip = ip

    iftax\_exemptisnotNone:

    self.tax\_exempt = tax\_exempt

    @property

    defsubmit\_time(self):

    returnself.\_submit\_time

    @submit\_time.setter

    defsubmit\_time(self, submit\_time):

    self.\_submit\_time = submit\_time

    @property

    deftran\_type(self):

    returnself.\_tran\_type

    @tran\_type.setter

    deftran\_type(self, tran\_type):

    self.\_tran\_type = tran\_type

    @property

    deftran\_amt(self):

    returnself.\_tran\_amt

    @tran\_amt.setter

    deftran\_amt(self, tran\_amt):

    self.\_tran\_amt = tran\_amt

    @property

    deftran\_tax(self):

    returnself.\_tran\_tax

    @tran\_tax.setter

    deftran\_tax(self, tran\_tax):

    self.\_tran\_tax = tran\_tax

    @property

    deftran\_inv(self):

    returnself.\_tran\_inv

    @tran\_inv.setter

    deftran\_inv(self, tran\_inv):

    self.\_tran\_inv = tran\_inv

    @property

    deftran\_po(self):

    returnself.\_tran\_po

    @tran\_po.setter

    deftran\_po(self, tran\_po):

    self.\_tran\_po = tran\_po

    @property

    deftran\_c\_num(self):

    returnself.\_tran\_c\_num

    @tran\_c\_num.setter

    deftran\_c\_num(self, tran\_c\_num):

    self.\_tran\_c\_num = tran\_c\_num

    @property

    deftran\_note(self):

    returnself.\_tran\_note

    @tran\_note.setter

    deftran\_note(self, tran\_note):

    self.\_tran\_note = tran\_note

    @property

    defcard\_num(self):

    returnself.\_card\_num

    @card\_num.setter

    defcard\_num(self, card\_num):

    self.\_card\_num = card\_num

    @property

    defcard\_name(self):

    returnself.\_card\_name

    @card\_name.setter

    defcard\_name(self, card\_name):

    self.\_card\_name = card\_name

    @property

    defcard\_exp(self):

    returnself.\_card\_exp

    @card\_exp.setter

    defcard\_exp(self, card\_exp):

    self.\_card\_exp = card\_exp

    @property

    defcard\_type(self):

    returnself.\_card\_type

    @card\_type.setter

    defcard\_type(self, card\_type):

    self.\_card\_type = card\_type

    @property

    defavs\_street(self):

    returnself.\_avs\_street

    @avs\_street.setter

    defavs\_street(self, avs\_street):

    self.\_avs\_street = avs\_street

    @property

    defavs\_zip(self):

    returnself.\_avs\_zip

    @avs\_zip.setter

    defavs\_zip(self, avs\_zip):

    self.\_avs\_zip = avs\_zip

    @property

    defcvv\_num(self):

    returnself.\_cvv\_num

    @cvv\_num.setter

    defcvv\_num(self, cvv\_num):

    self.\_cvv\_num = cvv\_num

    @property

    defproc\_id(self):

    returnself.\_proc\_id

    @proc\_id.setter

    defproc\_id(self, proc\_id):

    self.\_proc\_id = proc\_id

    @property

    defproc\_resp(self):

    returnself.\_proc\_resp

    @proc\_resp.setter

    defproc\_resp(self, proc\_resp):

    self.\_proc\_resp = proc\_resp

    @property

    defproc\_code(self):

    returnself.\_proc\_code

    @proc\_code.setter

    defproc\_code(self, proc\_code):

    self.\_proc\_code = proc\_code

    @property

    defproc\_mess(self):

    returnself.\_proc\_mess

    @proc\_mess.setter

    defproc\_mess(self, proc\_mess):

    self.\_proc\_mess = proc\_mess

    @property

    defavs\_code(self):

    returnself.\_avs\_code

    @avs\_code.setter

    defavs\_code(self, avs\_code):

    self.\_avs\_code = avs\_code

    @property

    defavs\_resp(self):

    returnself.\_avs\_resp

    @avs\_resp.setter

    defavs\_resp(self, avs\_resp):

    self.\_avs\_resp = avs\_resp

    @property

    defcvv\_code(self):

    returnself.\_cvv\_code

    @cvv\_code.setter

    defcvv\_code(self, cvv\_code):

    self.\_cvv\_code = cvv\_code

    @property

    defcvv\_resp(self):

    returnself.\_cvv\_resp

    @cvv\_resp.setter

    defcvv\_resp(self, cvv\_resp):

    self.\_cvv\_resp = cvv\_resp

    @property

    defitems(self):

    returnself.\_items

    @items.setter

    defitems(self, items):

    self.\_items = items

    @property

    defbusiness\_name(self):

    returnself.\_business\_name

    @business\_name.setter

    defbusiness\_name(self, business\_name):

    self.\_business\_name = business\_name

    @property

    defbusiness\_address(self):

    returnself.\_business\_address

    @business\_address.setter

    defbusiness\_address(self, business\_address):

    self.\_business\_address = business\_address

    @property

    defbusiness\_address2(self):

    returnself.\_business\_address2

    @business\_address2.setter

    defbusiness\_address2(self, business\_address2):

    self.\_business\_address2 = business\_address2

    @property

    defbusiness\_city(self):

    returnself.\_business\_city

    @business\_city.setter

    defbusiness\_city(self, business\_city):

    self.\_business\_city = business\_city

    @property

    defbusiness\_state(self):

    returnself.\_business\_state

    @business\_state.setter

    defbusiness\_state(self, business\_state):

    self.\_business\_state = business\_state

    @property

    defbusiness\_zip(self):

    returnself.\_business\_zip

    @business\_zip.setter

    defbusiness\_zip(self, business\_zip):

    self.\_business\_zip = business\_zip

    @property

    defbusiness\_country(self):

    returnself.\_business\_country

    @business\_country.setter

    defbusiness\_country(self, business\_country):

    self.\_business\_country = business\_country

    @property

    defbusiness\_website(self):

    returnself.\_business\_website

    @business\_website.setter

    defbusiness\_website(self, business\_website):

    self.\_business\_website = business\_website

    @property

    defcontact\_first\_name(self):

    returnself.\_contact\_first\_name

    @contact\_first\_name.setter

    defcontact\_first\_name(self, contact\_first\_name):

    self.\_contact\_first\_name = contact\_first\_name

    @property

    defcontact\_last\_name(self):

    returnself.\_contact\_last\_name

    @contact\_last\_name.setter

    defcontact\_last\_name(self, contact\_last\_name):

    self.\_contact\_last\_name = contact\_last\_name

    @property

    defcontact\_phone(self):

    returnself.\_contact\_phone

    @contact\_phone.setter

    defcontact\_phone(self, contact\_phone):

    self.\_contact\_phone = contact\_phone

    @property

    defcontact\_fax(self):

    returnself.\_contact\_fax

    @contact\_fax.setter

    defcontact\_fax(self, contact\_fax):

    self.\_contact\_fax = contact\_fax

    @property

    defcontact\_email(self):

    returnself.\_contact\_email

    @contact\_email.setter

    defcontact\_email(self, contact\_email):

    self.\_contact\_email = contact\_email

    @property

    defcontact\_title(self):

    returnself.\_contact\_title

    @contact\_title.setter

    defcontact\_title(self, contact\_title):

    self.\_contact\_title = contact\_title

    @property

    defip(self):

    returnself.\_ip

    @ip.setter

    defip(self, ip):

    self.\_ip = ip

    @property

    deftax\_exempt(self):

    returnself.\_tax\_exempt

    @tax\_exempt.setter

    deftax\_exempt(self, tax\_exempt):

    self.\_tax\_exempt = tax\_exempt

# TransactionItem

    # coding: utf-8

    classTransactionItem(object):

    swagger\_types = {

    &#39;tax\_included&#39;: &#39;bool&#39;,

    &#39;credit&#39;: &#39;bool&#39;,

    &#39;extended\_amount&#39;: &#39;float&#39;,

    &#39;item\_number&#39;: &#39;str&#39;,

    &#39;unit\_cost&#39;: &#39;float&#39;,

    &#39;quantity&#39;: &#39;int&#39;,

    &#39;description&#39;: &#39;str&#39;,

    &#39;discount&#39;: &#39;float&#39;,

    &#39;tax&#39;: &#39;float&#39;,

    &#39;commodity\_code&#39;: &#39;str&#39;,

    &#39;unit\_of\_measure&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;tax\_included&#39;: &#39;TaxIncluded&#39;,

    &#39;credit&#39;: &#39;Credit&#39;,

    &#39;extended\_amount&#39;: &#39;ExtendedAmount&#39;,

    &#39;item\_number&#39;: &#39;ItemNumber&#39;,

    &#39;unit\_cost&#39;: &#39;UnitCost&#39;,

    &#39;quantity&#39;: &#39;Quantity&#39;,

    &#39;description&#39;: &#39;Description&#39;,

    &#39;discount&#39;: &#39;Discount&#39;,

    &#39;tax&#39;: &#39;Tax&#39;,

    &#39;commodity\_code&#39;: &#39;CommodityCode&#39;,

    &#39;unit\_of\_measure&#39;: &#39;UnitOfMeasure&#39;

    }

    def\_\_init\_\_(self, tax\_included=None, credit=None, extended\_amount=None, item\_number=None, unit\_cost=None, quantity=None, description=None, discount=None, tax=None, commodity\_code=None, unit\_of\_measure=None): # noqa: E501

    &quot;&quot;&quot;TransactionItem - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_tax\_included = None

    self.\_credit = None

    self.\_extended\_amount = None

    self.\_item\_number = None

    self.\_unit\_cost = None

    self.\_quantity = None

    self.\_description = None

    self.\_discount = None

    self.\_tax = None

    self.\_commodity\_code = None

    self.\_unit\_of\_measure = None

    self.discriminator = None

    iftax\_includedisnotNone:

    self.tax\_included = tax\_included

    ifcreditisnotNone:

    self.credit = credit

    ifextended\_amountisnotNone:

    self.extended\_amount = extended\_amount

    ifitem\_numberisnotNone:

    self.item\_number = item\_number

    ifunit\_costisnotNone:

    self.unit\_cost = unit\_cost

    ifquantityisnotNone:

    self.quantity = quantity

    ifdescriptionisnotNone:

    self.description = description

    ifdiscountisnotNone:

    self.discount = discount

    iftaxisnotNone:

    self.tax = tax

    ifcommodity\_codeisnotNone:

    self.commodity\_code = commodity\_code

    ifunit\_of\_measureisnotNone:

    self.unit\_of\_measure = unit\_of\_measure

    @property

    deftax\_included(self):

    returnself.\_tax\_included

    @tax\_included.setter

    deftax\_included(self, tax\_included):

    self.\_tax\_included = tax\_included

    @property

    defcredit(self):

    returnself.\_credit

    @credit.setter

    defcredit(self, credit):

    self.\_credit = credit

    @property

    defextended\_amount(self):

    returnself.\_extended\_amount

    @extended\_amount.setter

    defextended\_amount(self, extended\_amount):

    self.\_extended\_amount = extended\_amount

    @property

    defitem\_number(self):

    returnself.\_item\_number

    @item\_number.setter

    defitem\_number(self, item\_number):

    self.\_item\_number = item\_number

    @property

    defunit\_cost(self):

    returnself.\_unit\_cost

    @unit\_cost.setter

    defunit\_cost(self, unit\_cost):

    self.\_unit\_cost = unit\_cost

    @property

    defquantity(self):

    returnself.\_quantity

    @quantity.setter

    defquantity(self, quantity):

    self.\_quantity = quantity

    @property

    defdescription(self):

    returnself.\_description

    @description.setter

    defdescription(self, description):

    self.\_description = description

    @property

    defdiscount(self):

    returnself.\_discount

    @discount.setter

    defdiscount(self, discount):

    self.\_discount = discount

    @property

    deftax(self):

    returnself.\_tax

    @tax.setter

    deftax(self, tax):

    self.\_tax = tax

    @property

    defcommodity\_code(self):

    returnself.\_commodity\_code

    @commodity\_code.setter

    defcommodity\_code(self, commodity\_code):

    self.\_commodity\_code = commodity\_code

    @property

    defunit\_of\_measure(self):

    returnself.\_unit\_of\_measure

    @unit\_of\_measure.setter

    defunit\_of\_measure(self, unit\_of\_measure):

    self.\_unit\_of\_measure = unit\_of\_measure

# UpdateTransactionInfo

    # coding: utf-8

    classUpdateTransactionInfo(object):

    swagger\_types = {

    &#39;invoice\_number&#39;: &#39;str&#39;,

    &#39;customer\_number&#39;: &#39;str&#39;,

    &#39;po\_number&#39;: &#39;str&#39;,

    &#39;note&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;invoice\_number&#39;: &#39;InvoiceNumber&#39;,

    &#39;customer\_number&#39;: &#39;CustomerNumber&#39;,

    &#39;po\_number&#39;: &#39;PONumber&#39;,

    &#39;note&#39;: &#39;Note&#39;

    }

    def\_\_init\_\_(self, invoice\_number=None, customer\_number=None, po\_number=None, note=None): # noqa: E501

    &quot;&quot;&quot;UpdateTransactionInfo - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_invoice\_number = None

    self.\_customer\_number = None

    self.\_po\_number = None

    self.\_note = None

    self.discriminator = None

    ifinvoice\_numberisnotNone:

    self.invoice\_number = invoice\_number

    ifcustomer\_numberisnotNone:

    self.customer\_number = customer\_number

    ifpo\_numberisnotNone:

    self.po\_number = po\_number

    ifnoteisnotNone:

    self.note = note

    @property

    definvoice\_number(self):

    returnself.\_invoice\_number

    @invoice\_number.setter

    definvoice\_number(self, invoice\_number):

    self.\_invoice\_number = invoice\_number

    @property

    defcustomer\_number(self):

    returnself.\_customer\_number

    @customer\_number.setter

    defcustomer\_number(self, customer\_number):

    self.\_customer\_number = customer\_number

    @property

    defpo\_number(self):

    returnself.\_po\_number

    @po\_number.setter

    defpo\_number(self, po\_number):

    self.\_po\_number = po\_number

    @property

    defnote(self):

    returnself.\_note

    @note.setter

    defnote(self, note):

    self.\_note = note

# VaultCheck

    # coding: utf-8

    classVaultCheck(object):

    swagger\_types = {

    &#39;response&#39;: &#39;Response&#39;,

    &#39;check\_id&#39;: &#39;int&#39;,

    &#39;main&#39;: &#39;bool&#39;,

    &#39;check\_routing&#39;: &#39;str&#39;,

    &#39;check\_account&#39;: &#39;str&#39;,

    &#39;check\_number&#39;: &#39;str&#39;,

    &#39;check\_first\_name&#39;: &#39;str&#39;,

    &#39;check\_last\_name&#39;: &#39;str&#39;,

    &#39;note&#39;: &#39;str&#39;,

    &#39;masked\_routing&#39;: &#39;str&#39;,

    &#39;masked\_account&#39;: &#39;str&#39;,

    &#39;account\_type&#39;: &#39;str&#39;

    }

    attribute\_map = {

    &#39;response&#39;: &#39;Response&#39;,

    &#39;check\_id&#39;: &#39;CheckID&#39;,

    &#39;main&#39;: &#39;Main&#39;,

    &#39;check\_routing&#39;: &#39;CheckRouting&#39;,

    &#39;check\_account&#39;: &#39;CheckAccount&#39;,

    &#39;check\_number&#39;: &#39;CheckNumber&#39;,

    &#39;check\_first\_name&#39;: &#39;CheckFirstName&#39;,

    &#39;check\_last\_name&#39;: &#39;CheckLastName&#39;,

    &#39;note&#39;: &#39;Note&#39;,

    &#39;masked\_routing&#39;: &#39;MaskedRouting&#39;,

    &#39;masked\_account&#39;: &#39;MaskedAccount&#39;,

    &#39;account\_type&#39;: &#39;AccountType&#39;

    }

    def\_\_init\_\_(self, response=None, check\_id=None, main=None, check\_routing=None, check\_account=None, check\_number=None, check\_first\_name=None, check\_last\_name=None, note=None, masked\_routing=None, masked\_account=None, account\_type=None): # noqa: E501

    &quot;&quot;&quot;VaultCheck - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_response = None

    self.\_check\_id = None

    self.\_main = None

    self.\_check\_routing = None

    self.\_check\_account = None

    self.\_check\_number = None

    self.\_check\_first\_name = None

    self.\_check\_last\_name = None

    self.\_note = None

    self.\_masked\_routing = None

    self.\_masked\_account = None

    self.\_account\_type = None

    self.discriminator = None

    ifresponseisnotNone:

    self.response = response

    ifcheck\_idisnotNone:

    self.check\_id = check\_id

    ifmainisnotNone:

    self.main = main

    ifcheck\_routingisnotNone:

    self.check\_routing = check\_routing

    ifcheck\_accountisnotNone:

    self.check\_account = check\_account

    ifcheck\_numberisnotNone:

    self.check\_number = check\_number

    ifcheck\_first\_nameisnotNone:

    self.check\_first\_name = check\_first\_name

    ifcheck\_last\_nameisnotNone:

    self.check\_last\_name = check\_last\_name

    ifnoteisnotNone:

    self.note = note

    ifmasked\_routingisnotNone:

    self.masked\_routing = masked\_routing

    ifmasked\_accountisnotNone:

    self.masked\_account = masked\_account

    ifaccount\_typeisnotNone:

    self.account\_type = account\_type

    @property

    defresponse(self):

    returnself.\_response

    @response.setter

    defresponse(self, response):

    self.\_response = response

    @property

    defcheck\_id(self):

    returnself.\_check\_id

    @check\_id.setter

    defcheck\_id(self, check\_id):

    self.\_check\_id = check\_id

    @property

    defmain(self):

    returnself.\_main

    @main.setter

    defmain(self, main):

    self.\_main = main

    @property

    defcheck\_routing(self):

    returnself.\_check\_routing

    @check\_routing.setter

    defcheck\_routing(self, check\_routing):

    self.\_check\_routing = check\_routing

    @property

    defcheck\_account(self):

    returnself.\_check\_account

    @check\_account.setter

    defcheck\_account(self, check\_account):

    self.\_check\_account = check\_account

    @property

    defcheck\_number(self):

    returnself.\_check\_number

    @check\_number.setter

    defcheck\_number(self, check\_number):

    self.\_check\_number = check\_number

    @property

    defcheck\_first\_name(self):

    returnself.\_check\_first\_name

    @check\_first\_name.setter

    defcheck\_first\_name(self, check\_first\_name):

    self.\_check\_first\_name = check\_first\_name

    @property

    defcheck\_last\_name(self):

    returnself.\_check\_last\_name

    @check\_last\_name.setter

    defcheck\_last\_name(self, check\_last\_name):

    self.\_check\_last\_name = check\_last\_name

    @property

    defnote(self):

    returnself.\_note

    @note.setter

    defnote(self, note):

    self.\_note = note

    @property

    defmasked\_routing(self):

    returnself.\_masked\_routing

    @masked\_routing.setter

    defmasked\_routing(self, masked\_routing):

    self.\_masked\_routing = masked\_routing

    @property

    defmasked\_account(self):

    returnself.\_masked\_account

    @masked\_account.setter

    defmasked\_account(self, masked\_account):

    self.\_masked\_account = masked\_account

    @property

    defaccount\_type(self):

    returnself.\_account\_type

    @account\_type.setter

    defaccount\_type(self, account\_type):

    self.\_account\_type = account\_type

# VaultCreditCard

    # coding: utf-8

    classVaultCreditCard(object):

    swagger\_types = {

    &#39;magnetic\_tracks&#39;: &#39;str&#39;,

    &#39;track1&#39;: &#39;str&#39;,

    &#39;track2&#39;: &#39;str&#39;,

    &#39;number&#39;: &#39;str&#39;,

    &#39;masked\_number&#39;: &#39;str&#39;,

    &#39;holder&#39;: &#39;str&#39;,

    &#39;exp\_date&#39;: &#39;str&#39;,

    &#39;cvv&#39;: &#39;str&#39;,

    &#39;address&#39;: &#39;str&#39;,

    &#39;city&#39;: &#39;str&#39;,

    &#39;state&#39;: &#39;str&#39;,

    &#39;zip&#39;: &#39;str&#39;,

    &#39;swiped&#39;: &#39;bool&#39;,

    &#39;type\_string&#39;: &#39;str&#39;,

    &#39;cvv\_type&#39;: &#39;CVVPresenceType&#39;,

    &#39;not\_present&#39;: &#39;bool&#39;,

    &#39;response&#39;: &#39;Response&#39;,

    &#39;card\_id&#39;: &#39;int&#39;,

    &#39;note&#39;: &#39;str&#39;,

    &#39;main&#39;: &#39;bool&#39;

    }

    attribute\_map = {

    &#39;magnetic\_tracks&#39;: &#39;MagneticTracks&#39;,

    &#39;track1&#39;: &#39;Track1&#39;,

    &#39;track2&#39;: &#39;Track2&#39;,

    &#39;number&#39;: &#39;Number&#39;,

    &#39;masked\_number&#39;: &#39;MaskedNumber&#39;,

    &#39;holder&#39;: &#39;Holder&#39;,

    &#39;exp\_date&#39;: &#39;ExpDate&#39;,

    &#39;cvv&#39;: &#39;CVV&#39;,

    &#39;address&#39;: &#39;Address&#39;,

    &#39;city&#39;: &#39;City&#39;,

    &#39;state&#39;: &#39;State&#39;,

    &#39;zip&#39;: &#39;ZIP&#39;,

    &#39;swiped&#39;: &#39;Swiped&#39;,

    &#39;type\_string&#39;: &#39;TypeString&#39;,

    &#39;cvv\_type&#39;: &#39;CVVType&#39;,

    &#39;not\_present&#39;: &#39;NotPresent&#39;,

    &#39;response&#39;: &#39;Response&#39;,

    &#39;card\_id&#39;: &#39;CardID&#39;,

    &#39;note&#39;: &#39;Note&#39;,

    &#39;main&#39;: &#39;Main&#39;

    }

    def\_\_init\_\_(self, magnetic\_tracks=None, track1=None, track2=None, number=None, masked\_number=None, holder=None, exp\_date=None, cvv=None, address=None, city=None, state=None, zip=None, swiped=None, type\_string=None, cvv\_type=None, not\_present=None, response=None, card\_id=None, note=None, main=None): # noqa: E501

    &quot;&quot;&quot;VaultCreditCard - a model defined in Swagger&quot;&quot;&quot;# noqa: E501

    self.\_magnetic\_tracks = None

    self.\_track1 = None

    self.\_track2 = None

    self.\_number = None

    self.\_masked\_number = None

    self.\_holder = None

    self.\_exp\_date = None

    self.\_cvv = None

    self.\_address = None

    self.\_city = None

    self.\_state = None

    self.\_zip = None

    self.\_swiped = None

    self.\_type\_string = None

    self.\_cvv\_type = None

    self.\_not\_present = None

    self.\_response = None

    self.\_card\_id = None

    self.\_note = None

    self.\_main = None

    self.discriminator = None

    ifmagnetic\_tracksisnotNone:

    self.magnetic\_tracks = magnetic\_tracks

    iftrack1isnotNone:

    self.track1 = track1

    iftrack2isnotNone:

    self.track2 = track2

    ifnumberisnotNone:

    self.number = number

    ifmasked\_numberisnotNone:

    self.masked\_number = masked\_number

    ifholderisnotNone:

    self.holder = holder

    ifexp\_dateisnotNone:

    self.exp\_date = exp\_date

    ifcvvisnotNone:

    self.cvv = cvv

    ifaddressisnotNone:

    self.address = address

    ifcityisnotNone:

    self.city = city

    ifstateisnotNone:

    self.state = state

    ifzipisnotNone:

    self.zip = zip

    ifswipedisnotNone:

    self.swiped = swiped

    iftype\_stringisnotNone:

    self.type\_string = type\_string

    ifcvv\_typeisnotNone:

    self.cvv\_type = cvv\_type

    ifnot\_presentisnotNone:

    self.not\_present = not\_present

    ifresponseisnotNone:

    self.response = response

    ifcard\_idisnotNone:

    self.card\_id = card\_id

    ifnoteisnotNone:

    self.note = note

    ifmainisnotNone:

    self.main = main

    @property

    defmagnetic\_tracks(self):

    returnself.\_magnetic\_tracks

    @magnetic\_tracks.setter

    defmagnetic\_tracks(self, magnetic\_tracks):

    self.\_magnetic\_tracks = magnetic\_tracks

    @property

    deftrack1(self):

    returnself.\_track1

    @track1.setter

    deftrack1(self, track1):

    self.\_track1 = track1

    @property

    deftrack2(self):

    returnself.\_track2

    @track2.setter

    deftrack2(self, track2):

    self.\_track2 = track2

    @property

    defnumber(self):

    returnself.\_number

    @number.setter

    defnumber(self, number):

    self.\_number = number

    @property

    defmasked\_number(self):

    returnself.\_masked\_number

    @masked\_number.setter

    defmasked\_number(self, masked\_number):

    self.\_masked\_number = masked\_number

    @property

    defholder(self):

    returnself.\_holder

    @holder.setter

    defholder(self, holder):

    self.\_holder = holder

    @property

    defexp\_date(self):

    returnself.\_exp\_date

    @exp\_date.setter

    defexp\_date(self, exp\_date):

    self.\_exp\_date = exp\_date

    @property

    defcvv(self):

    returnself.\_cvv

    @cvv.setter

    defcvv(self, cvv):

    self.\_cvv = cvv

    @property

    defaddress(self):

    returnself.\_address

    @address.setter

    defaddress(self, address):

    self.\_address = address

    @property

    defcity(self):

    returnself.\_city

    @city.setter

    defcity(self, city):

    self.\_city = city

    @property

    defstate(self):

    returnself.\_state

    @state.setter

    defstate(self, state):

    self.\_state = state

    @property

    defzip(self):

    returnself.\_zip

    @zip.setter

    defzip(self, zip):

    self.\_zip = zip

    @property

    defswiped(self):

    returnself.\_swiped

    @swiped.setter

    defswiped(self, swiped):

    self.\_swiped = swiped

    @property

    deftype\_string(self):

    returnself.\_type\_string

    @type\_string.setter

    deftype\_string(self, type\_string):

    self.\_type\_string = type\_string

    @property

    defcvv\_type(self):

    returnself.\_cvv\_type

    @cvv\_type.setter

    defcvv\_type(self, cvv\_type):

    self.\_cvv\_type = cvv\_type

    @property

    defnot\_present(self):

    returnself.\_not\_present

    @not\_present.setter

    defnot\_present(self, not\_present):

    self.\_not\_present = not\_present

    @property

    defresponse(self):

    returnself.\_response

    @response.setter

    defresponse(self, response):

    self.\_response = response

    @property

    defcard\_id(self):

    returnself.\_card\_id

    @card\_id.setter

    defcard\_id(self, card\_id):

    self.\_card\_id = card\_id

    @property

    defnote(self):

    returnself.\_note

    @note.setter

    defnote(self, note):

    self.\_note = note

    @property

    defmain(self):

    returnself.\_main

    @main.setter

    defmain(self, main):

    self.\_main = main

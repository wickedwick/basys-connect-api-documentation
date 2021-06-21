# Python

# API Client

    defcall\_api(

    self, resource\_path, method, path\_params=None,

    query\_params=None, header\_params=None, body=None, post\_params=None,

    files=None, response\_type=None, auth\_settings=None,

    \_return\_http\_data\_only=None, collection\_formats=None,

    \_preload\_content=True, \_request\_timeout=None):

    config = self.configuration

    # header parameters

    header\_params = header\_paramsor {}

    header\_params.update(self.default\_headers)

    ifself.cookie:

    header\_params[&#39;Cookie&#39;] = self.cookie

    ifheader\_params:

    header\_params = self.sanitize\_for\_serialization(header\_params)

    header\_params = dict(self.parameters\_to\_tuples(header\_params,

    collection\_formats))

    # path parameters

    ifpath\_params:

    path\_params = self.sanitize\_for\_serialization(path\_params)

    path\_params = self.parameters\_to\_tuples(path\_params,

    collection\_formats)

    fork, vinpath\_params:

    # specified safe chars, encode everything

    resource\_path = resource\_path.replace(

    &#39;{%s}&#39; % k,

    quote(str(v), safe=config.safe\_chars\_for\_path\_param)

    )

    # query parameters

    ifquery\_params:

    query\_params = self.sanitize\_for\_serialization(query\_params)

    query\_params = self.parameters\_to\_tuples(query\_params,

    collection\_formats)

    # post parameters

    ifpost\_paramsorfiles:

    post\_params = self.prepare\_post\_parameters(post\_params, files)

    post\_params = self.sanitize\_for\_serialization(post\_params)

    post\_params = self.parameters\_to\_tuples(post\_params,

    collection\_formats)

    # auth setting

    self.update\_params\_for\_auth(header\_params, query\_params, auth\_settings)

    # body

    ifbody:

    body = self.sanitize\_for\_serialization(body)

    # request url

    url = self.configuration.host + resource\_path

    # perform request and return response

    response\_data = self.request(

    method, url, query\_params=query\_params, headers=header\_params,

    post\_params=post\_params, body=body,

    \_preload\_content=\_preload\_content,

    \_request\_timeout=\_request\_timeout)

    self.last\_response = response\_data

    return\_data = response\_data

    if\_preload\_content:

    # deserialize response data

    ifresponse\_type:

    return\_data = self.deserialize(response\_data, response\_type)

    else:

    return\_data = None

    if\_return\_http\_data\_only:

    return(return\_data)

    else:

    return (return\_data, response\_data.status,

    response\_data.getheaders())

# Account API

## /api/v1/Account/GetAccountSettings

    defapi\_v1\_account\_get\_account\_settings\_get\_with\_http\_info(self, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_account\_get\_account\_settings\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_account_get_account_settings_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_account_get_account_settings_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Account/GetAccountSettings&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Settings&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

# Communication API

## /api/v1/Communication/EmailReceipt

    defapi\_v1\_communication\_email\_receipt\_post\_with\_http\_info(self, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_communication\_email\_receipt\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_communication_email_receipt_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_communication_email_receipt_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Communication/EmailReceipt&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

# Reporting API

## /api/v1/Reporting/GetBatchesByDate/{batchDate}

    defapi\_v1\_reporting\_get\_batches\_by\_date\_batch\_date\_get\_with\_http\_info(self, batch\_date, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;batch\_date&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_reporting\_get\_batches\_by\_date\_batch\_date\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;batch\_date&#39; is set

    if (&#39;batch\_date&#39;notinparamsor

    params[&#39;batch\_date&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `batch_date` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;batch\_date&#39;inparams:

    path\_params[&#39;batchDate&#39;] = params[&#39;batch\_date&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Reporting/GetBatchesByDate/{batchDate}&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;list[Batch]&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Reporting/GetCheckTerminals

    defapi\_v1\_reporting\_get\_check\_terminal\_settings\_by\_sec\_sec\_code\_get\_with\_http\_info(self, sec\_code, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;sec\_code&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_reporting\_get\_check\_terminal\_settings\_by\_sec\_sec\_code\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;sec\_code&#39; is set

    if (&#39;sec\_code&#39;notinparamsor

    params[&#39;sec\_code&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `sec_code` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;sec\_code&#39;inparams:

    path\_params[&#39;secCode&#39;] = params[&#39;sec\_code&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;list[TerminalSettings]&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}

    defapi\_v1\_reporting\_get\_check\_terminal\_settings\_by\_sec\_sec\_code\_get\_with\_http\_info(self, sec\_code, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;sec\_code&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_reporting\_get\_check\_terminal\_settings\_by\_sec\_sec\_code\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;sec\_code&#39; is set

    if (&#39;sec\_code&#39;notinparamsor

    params[&#39;sec\_code&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `sec_code` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;sec\_code&#39;inparams:

    path\_params[&#39;secCode&#39;] = params[&#39;sec\_code&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;list[TerminalSettings]&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Reporting/GetCheckTerminalSettings/{terminalID}

    defapi\_v1\_reporting\_get\_check\_terminal\_settings\_terminal\_id\_get\_with\_http\_info(self, terminal\_id, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;terminal\_id&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_reporting\_get\_check\_terminal\_settings\_terminal\_id\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;terminal\_id&#39; is set

    if (&#39;terminal\_id&#39;notinparamsor

    params[&#39;terminal\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `terminal_id` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;terminal\_id&#39;inparams:

    path\_params[&#39;terminalID&#39;] = params[&#39;terminal\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Reporting/GetCheckTerminalSettings/{terminalID}&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;list[TerminalSettings]&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Reporting/GetTransactionsByBatch/{batch}

    defapi\_v1\_reporting\_get\_transactions\_by\_batch\_batch\_get\_with\_http\_info(self, batch, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;batch&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_reporting\_get\_transactions\_by\_batch\_batch\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;batch&#39; is set

    if (&#39;batch&#39;notinparamsor

    params[&#39;batch&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `batch` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;batch&#39;inparams:

    path\_params[&#39;batch&#39;] = params[&#39;batch&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Reporting/GetTransactionsByBatch/{batch}&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;list[QueryTransaction]&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Reporting/GetTransactionsByDate/{transactionDate}

    defapi\_v1\_reporting\_get\_transactions\_by\_date\_transaction\_date\_get\_with\_http\_info(self, transaction\_date, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;transaction\_date&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_reporting\_get\_transactions\_by\_date\_transaction\_date\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;transaction\_date&#39; is set

    if (&#39;transaction\_date&#39;notinparamsor

    params[&#39;transaction\_date&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `transaction_date` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;transaction\_date&#39;inparams:

    path\_params[&#39;transactionDate&#39;] = params[&#39;transaction\_date&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Reporting/GetTransactionsByDate/{transactionDate}&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;list[QueryTransaction]&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

# Vault API

## /api/v1/Vault/GetVaultRecord/{reference}

    defapi\_v1\_vault\_get\_vault\_record\_reference\_get\_with\_http\_info(self, reference, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;reference&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_get\_vault\_record\_reference\_get&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;reference&#39; is set

    if (&#39;reference&#39;notinparamsor

    params[&#39;reference&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `reference` when calling `api_v1_vault_get_vault_record_reference_get`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_get_vault_record_reference_get`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_get_vault_record_reference_get`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;reference&#39;inparams:

    path\_params[&#39;reference&#39;] = params[&#39;reference&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/GetVaultRecord/{reference}&#39;, &#39;GET&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Record&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Vault/SaveVault

    defapi\_v1\_vault\_save\_vault\_card\_vault\_id\_post\_with\_http\_info(self, account, password, vault\_id, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;vault\_id&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_save\_vault\_card\_vault\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_save_vault_card_vault_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_save_vault_card_vault_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;vault\_id&#39; is set

    if (&#39;vault\_id&#39;notinparamsor

    params[&#39;vault\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `vault_id` when calling `api_v1_vault_save_vault_card_vault_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;vault\_id&#39;inparams:

    path\_params[&#39;vaultID&#39;] = params[&#39;vault\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/SaveVaultCard/{vaultID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Vault/SaveVaultCard/{vaultID}

    defapi\_v1\_vault\_save\_vault\_card\_vault\_id\_post\_with\_http\_info(self, account, password, vault\_id, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;vault\_id&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_save\_vault\_card\_vault\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_save_vault_card_vault_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_save_vault_card_vault_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;vault\_id&#39; is set

    if (&#39;vault\_id&#39;notinparamsor

    params[&#39;vault\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `vault_id` when calling `api_v1_vault_save_vault_card_vault_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;vault\_id&#39;inparams:

    path\_params[&#39;vaultID&#39;] = params[&#39;vault\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/SaveVaultCard/{vaultID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Vault/SearchVault

    defapi\_v1\_vault\_search\_vault\_post\_with\_http\_info(self, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_search\_vault\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_search_vault_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_search_vault_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/SearchVault&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;list[Record]&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Vault/DeleteVaultCardByID/{vaultCardID}

    defapi\_v1\_vault\_delete\_vault\_card\_by\_id\_vault\_card\_id\_post\_with\_http\_info(self, vault\_card\_id, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;vault\_card\_id&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_delete\_vault\_card\_by\_id\_vault\_card\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;vault\_card\_id&#39; is set

    if (&#39;vault\_card\_id&#39;notinparamsor

    params[&#39;vault\_card\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `vault_card_id` when calling `api_v1_vault_delete_vault_card_by_id_vault_card_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_delete_vault_card_by_id_vault_card_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_delete_vault_card_by_id_vault_card_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;vault\_card\_id&#39;inparams:

    path\_params[&#39;vaultCardID&#39;] = params[&#39;vault\_card\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/DeleteVaultCardByID/{vaultCardID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}

    defapi\_v1\_vault\_delete\_vault\_check\_by\_id\_vault\_check\_id\_post\_with\_http\_info(self, vault\_check\_id, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;vault\_check\_id&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_delete\_vault\_check\_by\_id\_vault\_check\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;vault\_check\_id&#39; is set

    if (&#39;vault\_check\_id&#39;notinparamsor

    params[&#39;vault\_check\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `vault_check_id` when calling `api_v1_vault_delete_vault_check_by_id_vault_check_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_delete_vault_check_by_id_vault_check_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_delete_vault_check_by_id_vault_check_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;vault\_check\_id&#39;inparams:

    path\_params[&#39;vaultCheckID&#39;] = params[&#39;vault\_check\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}

    defapi\_v1\_vault\_submit\_check\_with\_vault\_check\_id\_vault\_check\_id\_post\_with\_http\_info(self, account, password, vault\_check\_id, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;vault\_check\_id&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_submit\_check\_with\_vault\_check\_id\_vault\_check\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;vault\_check\_id&#39; is set

    if (&#39;vault\_check\_id&#39;notinparamsor

    params[&#39;vault\_check\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `vault_check_id` when calling `api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;vault\_check\_id&#39;inparams:

    path\_params[&#39;vaultCheckID&#39;] = params[&#39;vault\_check\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;CheckTransaction&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}

    defapi\_v1\_vault\_submit\_with\_vault\_card\_id\_vault\_card\_id\_post\_with\_http\_info(self, account, password, vault\_card\_id, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;vault\_card\_id&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_vault\_submit\_with\_vault\_card\_id\_vault\_card\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_vault_submit_with_vault_card_id_vault_card_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_vault_submit_with_vault_card_id_vault_card_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;vault\_card\_id&#39; is set

    if (&#39;vault\_card\_id&#39;notinparamsor

    params[&#39;vault\_card\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `vault_card_id` when calling `api_v1_vault_submit_with_vault_card_id_vault_card_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;vault\_card\_id&#39;inparams:

    path\_params[&#39;vaultCardID&#39;] = params[&#39;vault\_card\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Transaction&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

# VirtualTerminal API

## /api/v1/VirtualTerminal/Submit

    defapi\_v1\_virtual\_terminal\_submit\_check\_post\_with\_http\_info(self, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_virtual\_terminal\_submit\_check\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_virtual_terminal_submit_check_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_virtual_terminal_submit_check_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/VirtualTerminal/SubmitCheck&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;CheckTransaction&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/VirtualTerminal/SubmitCheck

    defapi\_v1\_virtual\_terminal\_submit\_check\_post\_with\_http\_info(self, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_virtual\_terminal\_submit\_check\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_virtual_terminal_submit_check_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_virtual_terminal_submit_check_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/VirtualTerminal/SubmitCheck&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;CheckTransaction&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/VirtualTerminal/Mark/{transactionID}

    defapi\_v1\_virtual\_terminal\_mark\_transaction\_id\_post\_with\_http\_info(self, transaction\_id, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;transaction\_id&#39;, &#39;account&#39;, &#39;password&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_virtual\_terminal\_mark\_transaction\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;transaction\_id&#39; is set

    if (&#39;transaction\_id&#39;notinparamsor

    params[&#39;transaction\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `transaction_id` when calling `api_v1_virtual_terminal_mark_transaction_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_virtual_terminal_mark_transaction_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_virtual_terminal_mark_transaction_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;transaction\_id&#39;inparams:

    path\_params[&#39;transactionID&#39;] = params[&#39;transaction\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/VirtualTerminal/Mark/{transactionID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/VirtualTerminal/MarkTransactions

    defapi\_v1\_virtual\_terminal\_mark\_transactions\_post\_with\_http\_info(self, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_virtual\_terminal\_mark\_transactions\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_virtual_terminal_mark_transactions_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_virtual_terminal_mark_transactions_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/VirtualTerminal/MarkTransactions&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/VirtualTerminal/Query

    defapi\_v1\_virtual\_terminal\_query\_post\_with\_http\_info(self, account, password, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_virtual\_terminal\_query\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_virtual_terminal_query_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_virtual_terminal_query_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/VirtualTerminal/Query&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;QueryTransaction&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

## /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}

    defapi\_v1\_virtual\_terminal\_update\_transaction\_info\_transaction\_id\_post\_with\_http\_info(self, account, password, transaction\_id, \*\*kwargs): # noqa: E501

    all\_params = [&#39;account&#39;, &#39;password&#39;, &#39;transaction\_id&#39;, &#39;body&#39;] # noqa: E501

    all\_params.append(&#39;async\_req&#39;)

    all\_params.append(&#39;\_return\_http\_data\_only&#39;)

    all\_params.append(&#39;\_preload\_content&#39;)

    all\_params.append(&#39;\_request\_timeout&#39;)

    params = locals()

    forkey, valinsix.iteritems(params[&#39;kwargs&#39;]):

    ifkeynotinall\_params:

    raiseTypeError(

    &quot;Got an unexpected keyword argument &#39;%s&#39;&quot;

    &quot; to method api\_v1\_virtual\_terminal\_update\_transaction\_info\_transaction\_id\_post&quot; % key

    )

    params[key] = val

    delparams[&#39;kwargs&#39;]

    # verify the required parameter &#39;account&#39; is set

    if (&#39;account&#39;notinparamsor

    params[&#39;account&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `account` when calling `api_v1_virtual_terminal_update_transaction_info_transaction_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;password&#39; is set

    if (&#39;password&#39;notinparamsor

    params[&#39;password&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `password` when calling `api_v1_virtual_terminal_update_transaction_info_transaction_id_post`&quot;) # noqa: E501

    # verify the required parameter &#39;transaction\_id&#39; is set

    if (&#39;transaction\_id&#39;notinparamsor

    params[&#39;transaction\_id&#39;] isNone):

    raiseValueError(&quot;Missing the required parameter `transaction_id` when calling `api_v1_virtual_terminal_update_transaction_info_transaction_id_post`&quot;) # noqa: E501

    collection\_formats = {}

    path\_params = {}

    if&#39;transaction\_id&#39;inparams:

    path\_params[&#39;transactionID&#39;] = params[&#39;transaction\_id&#39;] # noqa: E501

    query\_params = []

    header\_params = {}

    if&#39;account&#39;inparams:

    header\_params[&#39;Account&#39;] = params[&#39;account&#39;] # noqa: E501

    if&#39;password&#39;inparams:

    header\_params[&#39;Password&#39;] = params[&#39;password&#39;] # noqa: E501

    form\_params = []

    local\_var\_files = {}

    body\_params = None

    if&#39;body&#39;inparams:

    body\_params = params[&#39;body&#39;]

    # HTTP header `Accept`

    header\_params[&#39;Accept&#39;] = self.api\_client.select\_header\_accept(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]) # noqa: E501

    # HTTP header `Content-Type`

    header\_params[&#39;Content-Type&#39;] = self.api\_client.select\_header\_content\_type( # noqa: E501

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\*+json&#39;]) # noqa: E501

    # Authentication setting

    auth\_settings = [] # noqa: E501

    returnself.api\_client.call\_api(

    &#39;/api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}&#39;, &#39;POST&#39;,

    path\_params,

    query\_params,

    header\_params,

    body=body\_params,

    post\_params=form\_params,

    files=local\_var\_files,

    response\_type=&#39;Response&#39;, # noqa: E501

    auth\_settings=auth\_settings,

    async\_req=params.get(&#39;async\_req&#39;),

    \_return\_http\_data\_only=params.get(&#39;\_return\_http\_data\_only&#39;),

    \_preload\_content=params.get(&#39;\_preload\_content&#39;, True),

    \_request\_timeout=params.get(&#39;\_request\_timeout&#39;),

    collection\_formats=collection\_formats)

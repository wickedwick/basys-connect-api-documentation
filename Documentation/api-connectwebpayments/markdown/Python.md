# Python

# API Client

    defcall_api(

    self, resource_path, method, path_params=None,

    query_params=None, header_params=None, body=None, post_params=None,

    files=None, response_type=None, auth_settings=None,

    _return _http_data_only=None, collection_formats=None,

    _preload_content=True, _request_timeout=None):

    config = self.configuration

    # header parameters

    header_params = header_paramsor {}

    header_params.update(self.default_headers)

    ifself.cookie:

    header_params['Cookie'] = self.cookie

    ifheader_params:

    header_params = self.sanitize_for_serialization(header_params)

    header_params = dict(self.parameters_to_tuples(header_params,

    collection_formats))

    # path parameters

    ifpath_params:

    path_params = self.sanitize_for_serialization(path_params)

    path_params = self.parameters_to_tuples(path_params,

    collection_formats)

    fork, vinpath_params:

    # specified safe chars, encode everything

    resource_path = resource_path.replace(

    '{%s}' % k,

    quote(str(v), safe=config.safe_chars_for_path_param)

    )

    # query parameters

    ifquery_params:

    query_params = self.sanitize_for_serialization(query_params)

    query_params = self.parameters_to_tuples(query_params,

    collection_formats)

    # post parameters

    ifpost_paramsorfiles:

    post_params = self.prepare_post_parameters(post_params, files)

    post_params = self.sanitize_for_serialization(post_params)

    post_params = self.parameters_to_tuples(post_params,

    collection_formats)

    # auth setting

    self.update_params_for_auth(header_params, query_params, auth_settings)

    # body

    ifbody:

    body = self.sanitize_for_serialization(body)

    # request url

    url = self.configuration.host + resource_path

    # perform request and return response

    response_data = self.request(

    method, url, query_params=query_params, headers=header_params,

    post_params=post_params, body=body,

    _preload_content=_preload_content,

    _request_timeout=_request_timeout)

    self.last_response = response_data

    return _data = response_data

    if_preload_content:

    # deserialize response data

    ifresponse_type:

    return _data = self.deserialize(response_data, response_type)

    else:

    return _data = None

    if_return _http_data_only:

    return (return _data)

    else:

    return (return _data, response_data.status,

    response_data.getheaders())

# Account API

## /api/v1/Account/GetAccountSettings

    defapi_v1_account_get_account_settings_get_with_http_info(self, account, password, **kwargs): # noqa: E501

    all_params = ['account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_account_get_account_settings_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_account_get_account_settings_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_account_get_account_settings_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Account/GetAccountSettings', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Settings', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

# Communication API

## /api/v1/Communication/EmailReceipt

    defapi_v1_communication_email_receipt_post_with_http_info(self, account, password, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_communication_email_receipt_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_communication_email_receipt_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_communication_email_receipt_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Communication/EmailReceipt', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

# Reporting API

## /api/v1/Reporting/GetBatchesByDate/{batchDate}

    defapi_v1_reporting_get_batches_by_date_batch_date_get_with_http_info(self, batch_date, account, password, **kwargs): # noqa: E501

    all_params = ['batch_date', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_reporting_get_batches_by_date_batch_date_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'batch_date' is set

    if ('batch_date'notinparamsor

    params['batch_date'] isNone):

    raiseValueError("Missing the required parameter `batch_date` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'batch_date'inparams:

    path_params['batchDate'] = params['batch_date'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Reporting/GetBatchesByDate/{batchDate}', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='list[Batch]', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Reporting/GetCheckTerminals

    defapi_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get_with_http_info(self, sec_code, account, password, **kwargs): # noqa: E501

    all_params = ['sec_code', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'sec_code' is set

    if ('sec_code'notinparamsor

    params['sec_code'] isNone):

    raiseValueError("Missing the required parameter `sec_code` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'sec_code'inparams:

    path_params['secCode'] = params['sec_code'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='list[TerminalSettings]', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}

    defapi_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get_with_http_info(self, sec_code, account, password, **kwargs): # noqa: E501

    all_params = ['sec_code', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'sec_code' is set

    if ('sec_code'notinparamsor

    params['sec_code'] isNone):

    raiseValueError("Missing the required parameter `sec_code` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'sec_code'inparams:

    path_params['secCode'] = params['sec_code'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='list[TerminalSettings]', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Reporting/GetCheckTerminalSettings/{terminalID}

    defapi_v1_reporting_get_check_terminal_settings_terminal_id_get_with_http_info(self, terminal_id, account, password, **kwargs): # noqa: E501

    all_params = ['terminal_id', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_reporting_get_check_terminal_settings_terminal_id_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'terminal_id' is set

    if ('terminal_id'notinparamsor

    params['terminal_id'] isNone):

    raiseValueError("Missing the required parameter `terminal_id` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'terminal_id'inparams:

    path_params['terminalID'] = params['terminal_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Reporting/GetCheckTerminalSettings/{terminalID}', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='list[TerminalSettings]', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Reporting/GetTransactionsByBatch/{batch}

    defapi_v1_reporting_get_transactions_by_batch_batch_get_with_http_info(self, batch, account, password, **kwargs): # noqa: E501

    all_params = ['batch', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_reporting_get_transactions_by_batch_batch_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'batch' is set

    if ('batch'notinparamsor

    params['batch'] isNone):

    raiseValueError("Missing the required parameter `batch` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'batch'inparams:

    path_params['batch'] = params['batch'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Reporting/GetTransactionsByBatch/{batch}', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='list[QueryTransaction]', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Reporting/GetTransactionsByDate/{transactionDate}

    defapi_v1_reporting_get_transactions_by_date_transaction_date_get_with_http_info(self, transaction_date, account, password, **kwargs): # noqa: E501

    all_params = ['transaction_date', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_reporting_get_transactions_by_date_transaction_date_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'transaction_date' is set

    if ('transaction_date'notinparamsor

    params['transaction_date'] isNone):

    raiseValueError("Missing the required parameter `transaction_date` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'transaction_date'inparams:

    path_params['transactionDate'] = params['transaction_date'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Reporting/GetTransactionsByDate/{transactionDate}', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='list[QueryTransaction]', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

# Vault API

## /api/v1/Vault/GetVaultRecord/{reference}

    defapi_v1_vault_get_vault_record_reference_get_with_http_info(self, reference, account, password, **kwargs): # noqa: E501

    all_params = ['reference', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_get_vault_record_reference_get" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'reference' is set

    if ('reference'notinparamsor

    params['reference'] isNone):

    raiseValueError("Missing the required parameter `reference` when calling `api_v1_vault_get_vault_record_reference_get`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_get_vault_record_reference_get`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_get_vault_record_reference_get`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'reference'inparams:

    path_params['reference'] = params['reference'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/GetVaultRecord/{reference}', 'GET',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Record', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Vault/SaveVault

    defapi_v1_vault_save_vault_card_vault_id_post_with_http_info(self, account, password, vault_id, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'vault_id', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_save_vault_card_vault_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_save_vault_card_vault_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_save_vault_card_vault_id_post`") # noqa: E501

    # verify the required parameter 'vault_id' is set

    if ('vault_id'notinparamsor

    params['vault_id'] isNone):

    raiseValueError("Missing the required parameter `vault_id` when calling `api_v1_vault_save_vault_card_vault_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'vault_id'inparams:

    path_params['vaultID'] = params['vault_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/SaveVaultCard/{vaultID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Vault/SaveVaultCard/{vaultID}

    defapi_v1_vault_save_vault_card_vault_id_post_with_http_info(self, account, password, vault_id, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'vault_id', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_save_vault_card_vault_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_save_vault_card_vault_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_save_vault_card_vault_id_post`") # noqa: E501

    # verify the required parameter 'vault_id' is set

    if ('vault_id'notinparamsor

    params['vault_id'] isNone):

    raiseValueError("Missing the required parameter `vault_id` when calling `api_v1_vault_save_vault_card_vault_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'vault_id'inparams:

    path_params['vaultID'] = params['vault_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/SaveVaultCard/{vaultID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Vault/SearchVault

    defapi_v1_vault_search_vault_post_with_http_info(self, account, password, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_search_vault_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_search_vault_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_search_vault_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/SearchVault', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='list[Record]', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Vault/DeleteVaultCardByID/{vaultCardID}

    defapi_v1_vault_delete_vault_card_by_id_vault_card_id_post_with_http_info(self, vault_card_id, account, password, **kwargs): # noqa: E501

    all_params = ['vault_card_id', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_delete_vault_card_by_id_vault_card_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'vault_card_id' is set

    if ('vault_card_id'notinparamsor

    params['vault_card_id'] isNone):

    raiseValueError("Missing the required parameter `vault_card_id` when calling `api_v1_vault_delete_vault_card_by_id_vault_card_id_post`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_delete_vault_card_by_id_vault_card_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_delete_vault_card_by_id_vault_card_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'vault_card_id'inparams:

    path_params['vaultCardID'] = params['vault_card_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/DeleteVaultCardByID/{vaultCardID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}

    defapi_v1_vault_delete_vault_check_by_id_vault_check_id_post_with_http_info(self, vault_check_id, account, password, **kwargs): # noqa: E501

    all_params = ['vault_check_id', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_delete_vault_check_by_id_vault_check_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'vault_check_id' is set

    if ('vault_check_id'notinparamsor

    params['vault_check_id'] isNone):

    raiseValueError("Missing the required parameter `vault_check_id` when calling `api_v1_vault_delete_vault_check_by_id_vault_check_id_post`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_delete_vault_check_by_id_vault_check_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_delete_vault_check_by_id_vault_check_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'vault_check_id'inparams:

    path_params['vaultCheckID'] = params['vault_check_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}

    defapi_v1_vault_submit_check_with_vault_check_id_vault_check_id_post_with_http_info(self, account, password, vault_check_id, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'vault_check_id', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post`") # noqa: E501

    # verify the required parameter 'vault_check_id' is set

    if ('vault_check_id'notinparamsor

    params['vault_check_id'] isNone):

    raiseValueError("Missing the required parameter `vault_check_id` when calling `api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'vault_check_id'inparams:

    path_params['vaultCheckID'] = params['vault_check_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='CheckTransaction', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}

    defapi_v1_vault_submit_with_vault_card_id_vault_card_id_post_with_http_info(self, account, password, vault_card_id, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'vault_card_id', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_vault_submit_with_vault_card_id_vault_card_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_vault_submit_with_vault_card_id_vault_card_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_vault_submit_with_vault_card_id_vault_card_id_post`") # noqa: E501

    # verify the required parameter 'vault_card_id' is set

    if ('vault_card_id'notinparamsor

    params['vault_card_id'] isNone):

    raiseValueError("Missing the required parameter `vault_card_id` when calling `api_v1_vault_submit_with_vault_card_id_vault_card_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'vault_card_id'inparams:

    path_params['vaultCardID'] = params['vault_card_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Transaction', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

# VirtualTerminal API

## /api/v1/VirtualTerminal/Submit

    defapi_v1_virtual_terminal_submit_check_post_with_http_info(self, account, password, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_virtual_terminal_submit_check_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_virtual_terminal_submit_check_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_virtual_terminal_submit_check_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/VirtualTerminal/SubmitCheck', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='CheckTransaction', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/VirtualTerminal/SubmitCheck

    defapi_v1_virtual_terminal_submit_check_post_with_http_info(self, account, password, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_virtual_terminal_submit_check_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_virtual_terminal_submit_check_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_virtual_terminal_submit_check_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/VirtualTerminal/SubmitCheck', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='CheckTransaction', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/VirtualTerminal/Mark/{transactionID}

    defapi_v1_virtual_terminal_mark_transaction_id_post_with_http_info(self, transaction_id, account, password, **kwargs): # noqa: E501

    all_params = ['transaction_id', 'account', 'password'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_virtual_terminal_mark_transaction_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'transaction_id' is set

    if ('transaction_id'notinparamsor

    params['transaction_id'] isNone):

    raiseValueError("Missing the required parameter `transaction_id` when calling `api_v1_virtual_terminal_mark_transaction_id_post`") # noqa: E501

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_virtual_terminal_mark_transaction_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_virtual_terminal_mark_transaction_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'transaction_id'inparams:

    path_params['transactionID'] = params['transaction_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/VirtualTerminal/Mark/{transactionID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/VirtualTerminal/MarkTransactions

    defapi_v1_virtual_terminal_mark_transactions_post_with_http_info(self, account, password, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_virtual_terminal_mark_transactions_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_virtual_terminal_mark_transactions_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_virtual_terminal_mark_transactions_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/VirtualTerminal/MarkTransactions', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/VirtualTerminal/Query

    defapi_v1_virtual_terminal_query_post_with_http_info(self, account, password, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_virtual_terminal_query_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_virtual_terminal_query_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_virtual_terminal_query_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/VirtualTerminal/Query', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='QueryTransaction', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

## /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}

    defapi_v1_virtual_terminal_update_transaction_info_transaction_id_post_with_http_info(self, account, password, transaction_id, **kwargs): # noqa: E501

    all_params = ['account', 'password', 'transaction_id', 'body'] # noqa: E501

    all_params.append('async_req')

    all_params.append('_return _http_data_only')

    all_params.append('_preload_content')

    all_params.append('_request_timeout')

    params = locals()

    forkey, valinsix.iteritems(params['kwargs']):

    ifkeynotinall_params:

    raiseTypeError(

    "Got an unexpected keyword argument '%s'"

    " to method api_v1_virtual_terminal_update_transaction_info_transaction_id_post" % key

    )

    params[key] = val

    delparams['kwargs']

    # verify the required parameter 'account' is set

    if ('account'notinparamsor

    params['account'] isNone):

    raiseValueError("Missing the required parameter `account` when calling `api_v1_virtual_terminal_update_transaction_info_transaction_id_post`") # noqa: E501

    # verify the required parameter 'password' is set

    if ('password'notinparamsor

    params['password'] isNone):

    raiseValueError("Missing the required parameter `password` when calling `api_v1_virtual_terminal_update_transaction_info_transaction_id_post`") # noqa: E501

    # verify the required parameter 'transaction_id' is set

    if ('transaction_id'notinparamsor

    params['transaction_id'] isNone):

    raiseValueError("Missing the required parameter `transaction_id` when calling `api_v1_virtual_terminal_update_transaction_info_transaction_id_post`") # noqa: E501

    collection_formats = {}

    path_params = {}

    if'transaction_id'inparams:

    path_params['transactionID'] = params['transaction_id'] # noqa: E501

    query_params = []

    header_params = {}

    if'account'inparams:

    header_params['Account'] = params['account'] # noqa: E501

    if'password'inparams:

    header_params['Password'] = params['password'] # noqa: E501

    form_params = []

    local_var_files = {}

    body_params = None

    if'body'inparams:

    body_params = params['body']

    # HTTP header `Accept`

    header_params['Accept'] = self.api_client.select_header_accept(

    ['text/plain', 'application/json', 'text/json']) # noqa: E501

    # HTTP header `Content-Type`

    header_params['Content-Type'] = self.api_client.select_header_content_type( # noqa: E501

    ['application/json', 'text/json', 'application/*+json']) # noqa: E501

    # Authentication setting

    auth_settings = [] # noqa: E501

    return self.api_client.call_api(

    '/api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}', 'POST',

    path_params,

    query_params,

    header_params,

    body=body_params,

    post_params=form_params,

    files=local_var_files,

    response_type='Response', # noqa: E501

    auth_settings=auth_settings,

    async_req=params.get('async_req'),

    _return _http_data_only=params.get('_return _http_data_only'),

    _preload_content=params.get('_preload_content', True),

    _request_timeout=params.get('_request_timeout'),

    collection_formats=collection_formats)

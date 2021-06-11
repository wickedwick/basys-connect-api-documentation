# coding: utf-8

from __future__ import absolute_import

import re  # noqa: F401

# python 2 and python 3 compatibility library
import six

from swagger_client.api_client import ApiClient


class ReportingApi(object):
    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client

    def api_v1_reporting_get_batches_by_date_batch_date_get(self, batch_date, account, password, **kwargs):  # noqa: E501
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.api_v1_reporting_get_batches_by_date_batch_date_get_with_http_info(batch_date, account, password, **kwargs)  # noqa: E501
        else:
            (data) = self.api_v1_reporting_get_batches_by_date_batch_date_get_with_http_info(batch_date, account, password, **kwargs)  # noqa: E501
            return data

    def api_v1_reporting_get_batches_by_date_batch_date_get_with_http_info(self, batch_date, account, password, **kwargs):  # noqa: E501
        all_params = ['batch_date', 'account', 'password']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_v1_reporting_get_batches_by_date_batch_date_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'batch_date' is set
        if ('batch_date' not in params or
                params['batch_date'] is None):
            raise ValueError("Missing the required parameter `batch_date` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`")  # noqa: E501
        # verify the required parameter 'account' is set
        if ('account' not in params or
                params['account'] is None):
            raise ValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`")  # noqa: E501
        # verify the required parameter 'password' is set
        if ('password' not in params or
                params['password'] is None):
            raise ValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_batches_by_date_batch_date_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'batch_date' in params:
            path_params['batchDate'] = params['batch_date']  # noqa: E501

        query_params = []

        header_params = {}
        if 'account' in params:
            header_params['Account'] = params['account']  # noqa: E501
        if 'password' in params:
            header_params['Password'] = params['password']  # noqa: E501

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['text/plain', 'application/json', 'text/json'])  # noqa: E501

        # Authentication setting
        auth_settings = []  # noqa: E501

        return self.api_client.call_api(
            '/api/v1/Reporting/GetBatchesByDate/{batchDate}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='list[Batch]',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get(self, sec_code, account, password, **kwargs):  # noqa: E501
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get_with_http_info(sec_code, account, password, **kwargs)  # noqa: E501
        else:
            (data) = self.api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get_with_http_info(sec_code, account, password, **kwargs)  # noqa: E501
            return data

    def api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get_with_http_info(self, sec_code, account, password, **kwargs):  # noqa: E501
        all_params = ['sec_code', 'account', 'password']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'sec_code' is set
        if ('sec_code' not in params or
                params['sec_code'] is None):
            raise ValueError("Missing the required parameter `sec_code` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`")  # noqa: E501
        # verify the required parameter 'account' is set
        if ('account' not in params or
                params['account'] is None):
            raise ValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`")  # noqa: E501
        # verify the required parameter 'password' is set
        if ('password' not in params or
                params['password'] is None):
            raise ValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'sec_code' in params:
            path_params['secCode'] = params['sec_code']  # noqa: E501

        query_params = []

        header_params = {}
        if 'account' in params:
            header_params['Account'] = params['account']  # noqa: E501
        if 'password' in params:
            header_params['Password'] = params['password']  # noqa: E501

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['text/plain', 'application/json', 'text/json'])  # noqa: E501

        # Authentication setting
        auth_settings = []  # noqa: E501

        return self.api_client.call_api(
            '/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='list[TerminalSettings]',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def api_v1_reporting_get_check_terminal_settings_terminal_id_get(self, terminal_id, account, password, **kwargs):  # noqa: E501
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.api_v1_reporting_get_check_terminal_settings_terminal_id_get_with_http_info(terminal_id, account, password, **kwargs)  # noqa: E501
        else:
            (data) = self.api_v1_reporting_get_check_terminal_settings_terminal_id_get_with_http_info(terminal_id, account, password, **kwargs)  # noqa: E501
            return data

    def api_v1_reporting_get_check_terminal_settings_terminal_id_get_with_http_info(self, terminal_id, account, password, **kwargs):  # noqa: E501
        all_params = ['terminal_id', 'account', 'password']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_v1_reporting_get_check_terminal_settings_terminal_id_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'terminal_id' is set
        if ('terminal_id' not in params or
                params['terminal_id'] is None):
            raise ValueError("Missing the required parameter `terminal_id` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`")  # noqa: E501
        # verify the required parameter 'account' is set
        if ('account' not in params or
                params['account'] is None):
            raise ValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`")  # noqa: E501
        # verify the required parameter 'password' is set
        if ('password' not in params or
                params['password'] is None):
            raise ValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminal_settings_terminal_id_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'terminal_id' in params:
            path_params['terminalID'] = params['terminal_id']  # noqa: E501

        query_params = []

        header_params = {}
        if 'account' in params:
            header_params['Account'] = params['account']  # noqa: E501
        if 'password' in params:
            header_params['Password'] = params['password']  # noqa: E501

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['text/plain', 'application/json', 'text/json'])  # noqa: E501

        # Authentication setting
        auth_settings = []  # noqa: E501

        return self.api_client.call_api(
            '/api/v1/Reporting/GetCheckTerminalSettings/{terminalID}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='list[TerminalSettings]',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def api_v1_reporting_get_check_terminals_get(self, account, password, **kwargs):  # noqa: E501
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.api_v1_reporting_get_check_terminals_get_with_http_info(account, password, **kwargs)  # noqa: E501
        else:
            (data) = self.api_v1_reporting_get_check_terminals_get_with_http_info(account, password, **kwargs)  # noqa: E501
            return data

    def api_v1_reporting_get_check_terminals_get_with_http_info(self, account, password, **kwargs):  # noqa: E501
        all_params = ['account', 'password']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_v1_reporting_get_check_terminals_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'account' is set
        if ('account' not in params or
                params['account'] is None):
            raise ValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_check_terminals_get`")  # noqa: E501
        # verify the required parameter 'password' is set
        if ('password' not in params or
                params['password'] is None):
            raise ValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_check_terminals_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}

        query_params = []

        header_params = {}
        if 'account' in params:
            header_params['Account'] = params['account']  # noqa: E501
        if 'password' in params:
            header_params['Password'] = params['password']  # noqa: E501

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['text/plain', 'application/json', 'text/json'])  # noqa: E501

        # Authentication setting
        auth_settings = []  # noqa: E501

        return self.api_client.call_api(
            '/api/v1/Reporting/GetCheckTerminals', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='list[TerminalSettings]',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def api_v1_reporting_get_transactions_by_batch_batch_get(self, batch, account, password, **kwargs):  # noqa: E501
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.api_v1_reporting_get_transactions_by_batch_batch_get_with_http_info(batch, account, password, **kwargs)  # noqa: E501
        else:
            (data) = self.api_v1_reporting_get_transactions_by_batch_batch_get_with_http_info(batch, account, password, **kwargs)  # noqa: E501
            return data

    def api_v1_reporting_get_transactions_by_batch_batch_get_with_http_info(self, batch, account, password, **kwargs):  # noqa: E501
        all_params = ['batch', 'account', 'password']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_v1_reporting_get_transactions_by_batch_batch_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'batch' is set
        if ('batch' not in params or
                params['batch'] is None):
            raise ValueError("Missing the required parameter `batch` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`")  # noqa: E501
        # verify the required parameter 'account' is set
        if ('account' not in params or
                params['account'] is None):
            raise ValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`")  # noqa: E501
        # verify the required parameter 'password' is set
        if ('password' not in params or
                params['password'] is None):
            raise ValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_transactions_by_batch_batch_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'batch' in params:
            path_params['batch'] = params['batch']  # noqa: E501

        query_params = []

        header_params = {}
        if 'account' in params:
            header_params['Account'] = params['account']  # noqa: E501
        if 'password' in params:
            header_params['Password'] = params['password']  # noqa: E501

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['text/plain', 'application/json', 'text/json'])  # noqa: E501

        # Authentication setting
        auth_settings = []  # noqa: E501

        return self.api_client.call_api(
            '/api/v1/Reporting/GetTransactionsByBatch/{batch}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='list[QueryTransaction]',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

    def api_v1_reporting_get_transactions_by_date_transaction_date_get(self, transaction_date, account, password, **kwargs):  # noqa: E501
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.api_v1_reporting_get_transactions_by_date_transaction_date_get_with_http_info(transaction_date, account, password, **kwargs)  # noqa: E501
        else:
            (data) = self.api_v1_reporting_get_transactions_by_date_transaction_date_get_with_http_info(transaction_date, account, password, **kwargs)  # noqa: E501
            return data

    def api_v1_reporting_get_transactions_by_date_transaction_date_get_with_http_info(self, transaction_date, account, password, **kwargs):  # noqa: E501
        all_params = ['transaction_date', 'account', 'password']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_v1_reporting_get_transactions_by_date_transaction_date_get" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'transaction_date' is set
        if ('transaction_date' not in params or
                params['transaction_date'] is None):
            raise ValueError("Missing the required parameter `transaction_date` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`")  # noqa: E501
        # verify the required parameter 'account' is set
        if ('account' not in params or
                params['account'] is None):
            raise ValueError("Missing the required parameter `account` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`")  # noqa: E501
        # verify the required parameter 'password' is set
        if ('password' not in params or
                params['password'] is None):
            raise ValueError("Missing the required parameter `password` when calling `api_v1_reporting_get_transactions_by_date_transaction_date_get`")  # noqa: E501

        collection_formats = {}

        path_params = {}
        if 'transaction_date' in params:
            path_params['transactionDate'] = params['transaction_date']  # noqa: E501

        query_params = []

        header_params = {}
        if 'account' in params:
            header_params['Account'] = params['account']  # noqa: E501
        if 'password' in params:
            header_params['Password'] = params['password']  # noqa: E501

        form_params = []
        local_var_files = {}

        body_params = None
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['text/plain', 'application/json', 'text/json'])  # noqa: E501

        # Authentication setting
        auth_settings = []  # noqa: E501

        return self.api_client.call_api(
            '/api/v1/Reporting/GetTransactionsByDate/{transactionDate}', 'GET',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='list[QueryTransaction]',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

# coding: utf-8

from __future__ import absolute_import

import re  # noqa: F401

# python 2 and python 3 compatibility library
import six

from swagger_client.api_client import ApiClient


class CommunicationApi(object):

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client

    def api_v1_communication_email_receipt_post(self, account, password, **kwargs):  # noqa: E501
        kwargs['_return_http_data_only'] = True
        if kwargs.get('async_req'):
            return self.api_v1_communication_email_receipt_post_with_http_info(account, password, **kwargs)  # noqa: E501
        else:
            (data) = self.api_v1_communication_email_receipt_post_with_http_info(account, password, **kwargs)  # noqa: E501
            return data

    def api_v1_communication_email_receipt_post_with_http_info(self, account, password, **kwargs):  # noqa: E501
        all_params = ['account', 'password', 'body']  # noqa: E501
        all_params.append('async_req')
        all_params.append('_return_http_data_only')
        all_params.append('_preload_content')
        all_params.append('_request_timeout')

        params = locals()
        for key, val in six.iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method api_v1_communication_email_receipt_post" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'account' is set
        if ('account' not in params or
                params['account'] is None):
            raise ValueError("Missing the required parameter `account` when calling `api_v1_communication_email_receipt_post`")  # noqa: E501
        # verify the required parameter 'password' is set
        if ('password' not in params or
                params['password'] is None):
            raise ValueError("Missing the required parameter `password` when calling `api_v1_communication_email_receipt_post`")  # noqa: E501

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
        if 'body' in params:
            body_params = params['body']
        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.select_header_accept(
            ['text/plain', 'application/json', 'text/json'])  # noqa: E501

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.select_header_content_type(  # noqa: E501
            ['application/json', 'text/json', 'application/*+json'])  # noqa: E501

        # Authentication setting
        auth_settings = []  # noqa: E501

        return self.api_client.call_api(
            '/api/v1/Communication/EmailReceipt', 'POST',
            path_params,
            query_params,
            header_params,
            body=body_params,
            post_params=form_params,
            files=local_var_files,
            response_type='Response',  # noqa: E501
            auth_settings=auth_settings,
            async_req=params.get('async_req'),
            _return_http_data_only=params.get('_return_http_data_only'),
            _preload_content=params.get('_preload_content', True),
            _request_timeout=params.get('_request_timeout'),
            collection_formats=collection_formats)

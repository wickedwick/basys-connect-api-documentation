# coding: utf-8

"""
    Connect16RESTful v1

    No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)  # noqa: E501

    OpenAPI spec version: v1
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""

from __future__ import absolute_import

import unittest

import swagger_client
from swagger_client.api.reporting_api import ReportingApi  # noqa: E501
from swagger_client.rest import ApiException


class TestReportingApi(unittest.TestCase):
    """ReportingApi unit test stubs"""

    def setUp(self):
        self.api = ReportingApi()  # noqa: E501

    def tearDown(self):
        pass

    def test_api_v1_reporting_get_batches_by_date_batch_date_get(self):
        """Test case for api_v1_reporting_get_batches_by_date_batch_date_get

        Used for getting batches by date  # noqa: E501
        """
        pass

    def test_api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get(self):
        """Test case for api_v1_reporting_get_check_terminal_settings_by_sec_sec_code_get

        Used for getting check terminal settings information filtered by SEC code  # noqa: E501
        """
        pass

    def test_api_v1_reporting_get_check_terminal_settings_terminal_id_get(self):
        """Test case for api_v1_reporting_get_check_terminal_settings_terminal_id_get

        Used for getting check terminal settings information by the terminal ID  # noqa: E501
        """
        pass

    def test_api_v1_reporting_get_check_terminals_get(self):
        """Test case for api_v1_reporting_get_check_terminals_get

        Used for getting check terminal information  # noqa: E501
        """
        pass

    def test_api_v1_reporting_get_transactions_by_batch_batch_get(self):
        """Test case for api_v1_reporting_get_transactions_by_batch_batch_get

        Used for getting transactions by batch  # noqa: E501
        """
        pass

    def test_api_v1_reporting_get_transactions_by_date_transaction_date_get(self):
        """Test case for api_v1_reporting_get_transactions_by_date_transaction_date_get

        Used for getting transactions by date  # noqa: E501
        """
        pass


if __name__ == '__main__':
    unittest.main()

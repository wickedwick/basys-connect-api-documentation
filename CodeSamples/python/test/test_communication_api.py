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
from swagger_client.api.communication_api import CommunicationApi  # noqa: E501
from swagger_client.rest import ApiException


class TestCommunicationApi(unittest.TestCase):
    """CommunicationApi unit test stubs"""

    def setUp(self):
        self.api = CommunicationApi()  # noqa: E501

    def tearDown(self):
        pass

    def test_api_v1_communication_email_receipt_post(self):
        """Test case for api_v1_communication_email_receipt_post

        Used for sending an email receipt of a transaction  # noqa: E501
        """
        pass


if __name__ == '__main__':
    unittest.main()

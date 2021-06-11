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
from swagger_client.api.vault_api import VaultApi  # noqa: E501
from swagger_client.rest import ApiException


class TestVaultApi(unittest.TestCase):
    """VaultApi unit test stubs"""

    def setUp(self):
        self.api = VaultApi()  # noqa: E501

    def tearDown(self):
        pass

    def test_api_v1_vault_delete_vault_card_by_id_vault_card_id_post(self):
        """Test case for api_v1_vault_delete_vault_card_by_id_vault_card_id_post

        Used for deleting Vault card by Vault card ID  # noqa: E501
        """
        pass

    def test_api_v1_vault_delete_vault_check_by_id_vault_check_id_post(self):
        """Test case for api_v1_vault_delete_vault_check_by_id_vault_check_id_post

        Used for deleting a Vault check by Vault check ID  # noqa: E501
        """
        pass

    def test_api_v1_vault_get_vault_record_reference_get(self):
        """Test case for api_v1_vault_get_vault_record_reference_get

        Used for getting a Vault record by reference  # noqa: E501
        """
        pass

    def test_api_v1_vault_save_vault_card_vault_id_post(self):
        """Test case for api_v1_vault_save_vault_card_vault_id_post

        Used for saving a Vault card by vauld ID  # noqa: E501
        """
        pass

    def test_api_v1_vault_save_vault_post(self):
        """Test case for api_v1_vault_save_vault_post

        Used for saving a Vault record  # noqa: E501
        """
        pass

    def test_api_v1_vault_search_vault_post(self):
        """Test case for api_v1_vault_search_vault_post

        Used for searching Vault records  # noqa: E501
        """
        pass

    def test_api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post(self):
        """Test case for api_v1_vault_submit_check_with_vault_check_id_vault_check_id_post

        Used for submitting a check with a Vault check ID  # noqa: E501
        """
        pass

    def test_api_v1_vault_submit_with_vault_card_id_vault_card_id_post(self):
        """Test case for api_v1_vault_submit_with_vault_card_id_vault_card_id_post

        Used for submitting with a Vault card ID  # noqa: E501
        """
        pass


if __name__ == '__main__':
    unittest.main()
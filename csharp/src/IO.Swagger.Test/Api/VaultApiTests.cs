/* 
 * Connect16RESTful v1
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */
using System;
using System.IO;
using System.Collections.Generic;
using System.Collections.ObjectModel;
using System.Linq;
using System.Reflection;
using RestSharp;
using NUnit.Framework;

using IO.Swagger.Client;
using IO.Swagger.Api;
using IO.Swagger.Model;

namespace IO.Swagger.Test
{
    /// <summary>
    ///  Class for testing VaultApi
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the API endpoint.
    /// </remarks>
    [TestFixture]
    public class VaultApiTests
    {
        private VaultApi instance;

        /// <summary>
        /// Setup before each unit test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new VaultApi();
        }

        /// <summary>
        /// Clean up after each unit test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of VaultApi
        /// </summary>
        [Test]
        public void InstanceTest()
        {
            // TODO uncomment below to test 'IsInstanceOfType' VaultApi
            //Assert.IsInstanceOfType(typeof(VaultApi), instance, "instance is a VaultApi");
        }

        /// <summary>
        /// Test ApiV1VaultDeleteVaultCardByIDVaultCardIDPost
        /// </summary>
        [Test]
        public void ApiV1VaultDeleteVaultCardByIDVaultCardIDPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? vaultCardID = null;
            //string account = null;
            //string password = null;
            //var response = instance.ApiV1VaultDeleteVaultCardByIDVaultCardIDPost(vaultCardID, account, password);
            //Assert.IsInstanceOf<Response> (response, "response is Response");
        }
        /// <summary>
        /// Test ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost
        /// </summary>
        [Test]
        public void ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //int? vaultCheckID = null;
            //string account = null;
            //string password = null;
            //var response = instance.ApiV1VaultDeleteVaultCheckByIDVaultCheckIDPost(vaultCheckID, account, password);
            //Assert.IsInstanceOf<Response> (response, "response is Response");
        }
        /// <summary>
        /// Test ApiV1VaultGetVaultRecordReferenceGet
        /// </summary>
        [Test]
        public void ApiV1VaultGetVaultRecordReferenceGetTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string reference = null;
            //string account = null;
            //string password = null;
            //var response = instance.ApiV1VaultGetVaultRecordReferenceGet(reference, account, password);
            //Assert.IsInstanceOf<Record> (response, "response is Record");
        }
        /// <summary>
        /// Test ApiV1VaultSaveVaultCardVaultIDPost
        /// </summary>
        [Test]
        public void ApiV1VaultSaveVaultCardVaultIDPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string account = null;
            //string password = null;
            //int? vaultID = null;
            //VaultCreditCard body = null;
            //var response = instance.ApiV1VaultSaveVaultCardVaultIDPost(account, password, vaultID, body);
            //Assert.IsInstanceOf<Response> (response, "response is Response");
        }
        /// <summary>
        /// Test ApiV1VaultSaveVaultPost
        /// </summary>
        [Test]
        public void ApiV1VaultSaveVaultPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string account = null;
            //string password = null;
            //Record body = null;
            //var response = instance.ApiV1VaultSaveVaultPost(account, password, body);
            //Assert.IsInstanceOf<List<Response>> (response, "response is List<Response>");
        }
        /// <summary>
        /// Test ApiV1VaultSearchVaultPost
        /// </summary>
        [Test]
        public void ApiV1VaultSearchVaultPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string account = null;
            //string password = null;
            //SearchVault body = null;
            //var response = instance.ApiV1VaultSearchVaultPost(account, password, body);
            //Assert.IsInstanceOf<List<Record>> (response, "response is List<Record>");
        }
        /// <summary>
        /// Test ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost
        /// </summary>
        [Test]
        public void ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string account = null;
            //string password = null;
            //int? vaultCheckID = null;
            //CheckTransaction body = null;
            //var response = instance.ApiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPost(account, password, vaultCheckID, body);
            //Assert.IsInstanceOf<CheckTransaction> (response, "response is CheckTransaction");
        }
        /// <summary>
        /// Test ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost
        /// </summary>
        [Test]
        public void ApiV1VaultSubmitWithVaultCardIDVaultCardIDPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string account = null;
            //string password = null;
            //int? vaultCardID = null;
            //Transaction body = null;
            //var response = instance.ApiV1VaultSubmitWithVaultCardIDVaultCardIDPost(account, password, vaultCardID, body);
            //Assert.IsInstanceOf<Transaction> (response, "response is Transaction");
        }
    }

}

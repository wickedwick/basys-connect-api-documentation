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
    ///  Class for testing CommunicationApi
    /// </summary>
    /// <remarks>
    /// This file is automatically generated by Swagger Codegen.
    /// Please update the test case below to test the API endpoint.
    /// </remarks>
    [TestFixture]
    public class CommunicationApiTests
    {
        private CommunicationApi instance;

        /// <summary>
        /// Setup before each unit test
        /// </summary>
        [SetUp]
        public void Init()
        {
            instance = new CommunicationApi();
        }

        /// <summary>
        /// Clean up after each unit test
        /// </summary>
        [TearDown]
        public void Cleanup()
        {

        }

        /// <summary>
        /// Test an instance of CommunicationApi
        /// </summary>
        [Test]
        public void InstanceTest()
        {
            // TODO uncomment below to test 'IsInstanceOfType' CommunicationApi
            //Assert.IsInstanceOfType(typeof(CommunicationApi), instance, "instance is a CommunicationApi");
        }

        /// <summary>
        /// Test ApiV1CommunicationEmailReceiptPost
        /// </summary>
        [Test]
        public void ApiV1CommunicationEmailReceiptPostTest()
        {
            // TODO uncomment below to test the method and replace null with proper value
            //string account = null;
            //string password = null;
            //EmailReceipt body = null;
            //var response = instance.ApiV1CommunicationEmailReceiptPost(account, password, body);
            //Assert.IsInstanceOf<Response> (response, "response is Response");
        }
    }

}

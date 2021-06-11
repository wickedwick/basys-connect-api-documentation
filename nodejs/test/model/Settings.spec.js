/**
 * Connect16RESTful v1
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 *
 */
(function(root, factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD.
    define(['expect.js', '../../src/index'], factory);
  } else if (typeof module === 'object' && module.exports) {
    // CommonJS-like environments that support module.exports, like Node.
    factory(require('expect.js'), require('../../src/index'));
  } else {
    // Browser globals (root is window)
    factory(root.expect, root.Connect16ResTfulV1);
  }
}(this, function(expect, Connect16ResTfulV1) {
  'use strict';

  var instance;

  beforeEach(function() {
    instance = new Connect16ResTfulV1.Settings();
  });

  var getProperty = function(object, getter, property) {
    // Use getter method if present; otherwise, get the property directly.
    if (typeof object[getter] === 'function')
      return object[getter]();
    else
      return object[property];
  }

  var setProperty = function(object, setter, property, value) {
    // Use setter method if present; otherwise, set the property directly.
    if (typeof object[setter] === 'function')
      object[setter](value);
    else
      object[property] = value;
  }

  describe('Settings', function() {
    it('should create an instance of Settings', function() {
      // uncomment below and update the code to test Settings
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be.a(Connect16ResTfulV1.Settings);
    });

    it('should have the property creditCardTransactionSettings (base name: "CreditCardTransactionSettings")', function() {
      // uncomment below and update the code to test the property creditCardTransactionSettings
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property checkTransactionSettings (base name: "CheckTransactionSettings")', function() {
      // uncomment below and update the code to test the property checkTransactionSettings
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property business (base name: "Business")', function() {
      // uncomment below and update the code to test the property business
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property mainContact (base name: "MainContact")', function() {
      // uncomment below and update the code to test the property mainContact
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property receipt40 (base name: "Receipt40")', function() {
      // uncomment below and update the code to test the property receipt40
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property receipt80 (base name: "Receipt80")', function() {
      // uncomment below and update the code to test the property receipt80
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property printSignatureLine (base name: "PrintSignatureLine")', function() {
      // uncomment below and update the code to test the property printSignatureLine
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property response (base name: "Response")', function() {
      // uncomment below and update the code to test the property response
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property accountID (base name: "AccountID")', function() {
      // uncomment below and update the code to test the property accountID
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

    it('should have the property copyEmailReceipt (base name: "CopyEmailReceipt")', function() {
      // uncomment below and update the code to test the property copyEmailReceipt
      //var instane = new Connect16ResTfulV1.Settings();
      //expect(instance).to.be();
    });

  });

}));

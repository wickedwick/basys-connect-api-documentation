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
    instance = new Connect16ResTfulV1.Record();
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

  describe('Record', function() {
    it('should create an instance of Record', function() {
      // uncomment below and update the code to test Record
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be.a(Connect16ResTfulV1.Record);
    });

    it('should have the property response (base name: "Response")', function() {
      // uncomment below and update the code to test the property response
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property ID (base name: "ID")', function() {
      // uncomment below and update the code to test the property ID
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property reference (base name: "Reference")', function() {
      // uncomment below and update the code to test the property reference
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property business (base name: "Business")', function() {
      // uncomment below and update the code to test the property business
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property contact (base name: "Contact")', function() {
      // uncomment below and update the code to test the property contact
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property PO (base name: "PO")', function() {
      // uncomment below and update the code to test the property PO
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property invoice (base name: "Invoice")', function() {
      // uncomment below and update the code to test the property invoice
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property customer (base name: "Customer")', function() {
      // uncomment below and update the code to test the property customer
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property taxExempt (base name: "TaxExempt")', function() {
      // uncomment below and update the code to test the property taxExempt
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property note (base name: "Note")', function() {
      // uncomment below and update the code to test the property note
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property creditCards (base name: "CreditCards")', function() {
      // uncomment below and update the code to test the property creditCards
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

    it('should have the property checks (base name: "Checks")', function() {
      // uncomment below and update the code to test the property checks
      //var instane = new Connect16ResTfulV1.Record();
      //expect(instance).to.be();
    });

  });

}));

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
    instance = new Connect16ResTfulV1.Batch();
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

  describe('Batch', function() {
    it('should create an instance of Batch', function() {
      // uncomment below and update the code to test Batch
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be.a(Connect16ResTfulV1.Batch);
    });

    it('should have the property batchNumber (base name: "BatchNumber")', function() {
      // uncomment below and update the code to test the property batchNumber
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

    it('should have the property started (base name: "Started")', function() {
      // uncomment below and update the code to test the property started
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

    it('should have the property completed (base name: "Completed")', function() {
      // uncomment below and update the code to test the property completed
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

    it('should have the property salesCount (base name: "SalesCount")', function() {
      // uncomment below and update the code to test the property salesCount
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

    it('should have the property salesSum (base name: "SalesSum")', function() {
      // uncomment below and update the code to test the property salesSum
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

    it('should have the property returnCount (base name: "ReturnCount")', function() {
      // uncomment below and update the code to test the property returnCount
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

    it('should have the property returnSum (base name: "ReturnSum")', function() {
      // uncomment below and update the code to test the property returnSum
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

    it('should have the property batchError (base name: "BatchError")', function() {
      // uncomment below and update the code to test the property batchError
      //var instane = new Connect16ResTfulV1.Batch();
      //expect(instance).to.be();
    });

  });

}));

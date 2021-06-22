import ApiClient from "../ApiClient";
import Batch from '../model/Batch';
import QueryTransaction from '../model/QueryTransaction';
import TerminalSettings from '../model/TerminalSettings';

export default class ReportingApi {
    constructor(apiClient) {
        this.apiClient = apiClient || ApiClient.instance;
    }

    getBatchesByDate(batchDate, account, password, callback) {
      const postBody = null;
      const pathParams = {
        'batchDate': batchDate
      };
      const headerParams = {
        'Account': account,
        'Password': password
      };
      const contentTypes = [];
      const accepts = ['text/plain', 'application/json', 'text/json'];
      const returnType = [Batch];

      return this.apiClient.callApi(
        `/api/v1/Reporting/GetBatchesByDate/${batchDate}`,
        'GET',
        pathParams,
        headerParams,
        postBody,
        contentTypes,
        accepts,
        returnType,
        callback
      );
    }

    getCheckTerminalSettingsBySecCode(secCode, account, password, callback) {
      const postBody = null;
      const pathParams = {
        'secCode': secCode
      };
      const headerParams = {
        'Account': account,
        'Password': password
      };
      const contentTypes = [];
      const accepts = ['text/plain', 'application/json', 'text/json'];
      const returnType = [TerminalSettings];

      return this.apiClient.callApi(
        `/api/v1/Reporting/GetCheckTerminalSettingsBySEC/${secCode}`,
        'GET',
        pathParams, 
        headerParams, 
        postBody,
        contentTypes,
        accepts,
        returnType,
        callback
      );
    }
    
    getCheckTerminalSettingsById(terminalID, account, password, callback) {
      const postBody = null;
      const pathParams = {
        'terminalID': terminalID
      };
      const headerParams = {
        'Account': account,
        'Password': password
      };
      const contentTypes = [];
      const accepts = ['text/plain', 'application/json', 'text/json'];
      const returnType = [TerminalSettings];

      return this.apiClient.callApi(
        `/api/v1/Reporting/GetCheckTerminalSettings/${terminalID}`,
        'GET',
        pathParams,
        headerParams, 
        postBody,
        contentTypes,
        accepts,
        returnType,
        callback
      );
    }
    
    getTerminalsSettings(account, password, callback) {
      const postBody = null;
      const pathParams = {};
      const headerParams = {
        'Account': account,
        'Password': password
      };
      const contentTypes = [];
      const accepts = ['text/plain', 'application/json', 'text/json'];
      const returnType = [TerminalSettings];

      return this.apiClient.callApi(
        '/api/v1/Reporting/GetCheckTerminals',
        'GET',
        pathParams, 
        headerParams,
        postBody,
        contentTypes,
        accepts,
        returnType,
        callback
      );
    }
    
    getTransactionsByBatch(batch, account, password, callback) {
      const postBody = null;
      const pathParams = {
        'batch': batch
      };
      const headerParams = {
        'Account': account,
        'Password': password
      };
      const contentTypes = [];
      const accepts = ['text/plain', 'application/json', 'text/json'];
      const returnType = [QueryTransaction];

      return this.apiClient.callApi(
        `/api/v1/Reporting/GetTransactionsByBatch/${batch}`,
        'GET',
        pathParams,
        headerParams, 
        postBody,
        contentTypes,
        accepts,
        returnType,
        callback
      );
    }
    
    getTransactionsByDate(transactionDate, account, password, callback) {
      const postBody = null;
      const pathParams = {
        'transactionDate': transactionDate
      };
      const headerParams = {
        'Account': account,
        'Password': password
      };
      const contentTypes = [];
      const accepts = ['text/plain', 'application/json', 'text/json'];
      const returnType = [QueryTransaction];

      return this.apiClient.callApi(
        `/api/v1/Reporting/GetTransactionsByDate/${transactionDate}`,
        'GET',
        pathParams,
        headerParams, 
        postBody,
        contentTypes,
        accepts,
        returnType,
        callback
      );
    }
}

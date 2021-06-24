# ES6 JavaScript

# API Client

    importsuperagentfrom"superagent";

    exportdefaultclassApiClient {

    constructor() {

    this.basePath = '/'.replace(/\/+$/, '');

    this.authentications = {

    type:'basic',

    username:'<username>',

    };

    this.defaultHeaders = {};

    this.timeout = 60000;

    this.cache = true;

    this.enableCookies = false;

    if (typeofwindow === 'undefined') {

    this.agent = new superagent.agent();

    }

    this.requestAgent = null;

    }

    paramToString(param) {

    if (param == undefined || param == null) {

    return '';

    }

    if (paraminstanceofDate) {

    return param.toJSON();

    }

    return param.toString();

    }

    buildUrl(path, pathParams) {

    if (!path.match(/^\//)) {

    path = '/' + path;

    }

    varurl = this.basePath + path;

    url = url.replace(/\{([\w-]+)\}/g, (fullMatch, key) => {

    varvalue;

    if (pathParams.hasOwnProperty(key)) {

    value = this.paramToString(pathParams[key]);

    } else {

    value = fullMatch;

    }

    return encodeURIComponent(value);

    });

    return url;

    }

    isJsonMime(contentType) {

    return Boolean(contentType != null && contentType.match(/^application\/json(;.*)?$/i));

    }

    jsonPreferredMime(contentTypes) {

    for (vari = 0; i < contentTypes.length; i++) {

    if (this.isJsonMime(contentTypes[i])) {

    return contentTypes[i];

    }

    }

    return contentTypes[0];

    }

    normalizeParams(params) {

    varnew Params = {};

    for (varkeyinparams) {

    if (params.hasOwnProperty(key) && params[key] != undefined && params[key] != null) {

    varvalue = params[key];

    if (Array.isArray(value)) {

    new Params[key] = value;

    } else {

    new Params[key] = this.paramToString(value);

    }

    }

    }

    return new Params;

    }

    deserialize(response, return Type) {

    if (response == null || return Type == null || response.status == 204) {

    return null;

    }

    vardata = response.body;

    if (data == null || (typeofdata === 'object' && typeofdata.length === 'undefined' && !Object.keys(data).length)) {

    data = response.text;

    }

    return ApiClient.convertToType(data, return Type);

    }

    callApi(path, httpMethod, pathParams,

    headerParams, bodyParam, contentTypes, accepts,

    return Type, callback) {

    varurl = this.buildUrl(path, pathParams);

    varrequest = superagent(httpMethod, url);

    // set header parameters

    request.set(this.defaultHeaders).set(this.normalizeParams(headerParams));

    // set requestAgent if it is set by user

    if (this.requestAgent) {

    request.agent(this.requestAgent);

    }

    // set request timeout

    request.timeout(this.timeout);

    varcontentType = this.jsonPreferredMime(contentTypes);

    if (contentType) {

    // Issue with superagent and multipart/form-data (https://github.com/visionmedia/superagent/issues/746)

    if(contentType != 'multipart/form-data') {

    request.type(contentType);

    }

    } elseif (!request.header['Content-Type']) {

    request.type('application/json');

    }

    if (bodyParam) {

    request.send(bodyParam);

    }

    varaccept = this.jsonPreferredMime(accepts);

    if (accept) {

    request.accept(accept);

    }

    if (return Type === 'Blob') {

    request.responseType('blob');

    } elseif (return Type === 'String') {

    request.responseType('string');

    }

    // Attach previously saved cookies, if enabled

    if (this.enableCookies){

    if (typeofwindow === 'undefined') {

    this.agent.attachCookies(request);

    }

    else {

    request.withCredentials();

    }

    }

    request.end((error, response) => {

    if (callback) {

    vardata = null;

    if (!error) {

    try {

    data = this.deserialize(response, return Type);

    if (this.enableCookies && typeofwindow === 'undefined'){

    this.agent.saveCookies(response);

    }

    } catch (err) {

    error = err;

    }

    }

    callback(error, data, response);

    }

    });

    return request;

    }

    staticparseDate(str) {

    return new Date(str);

    }

    staticconvertToType(data, type) {

    if (data === null || data === undefined)

    return data

    switch (type) {

    case'Boolean':

    return Boolean(data);

    case'Integer':

    return parseInt(data, 10);

    case'Number':

    return parseFloat(data);

    case'String':

    return String(data);

    case'Date':

    return ApiClient.parseDate(String(data));

    case'Blob':

    return data;

    default:

    if (type === Object) {

    // generic object, return directly

    return data;

    } elseif (typeoftype === 'function') {

    // for model type like: User

    return type.constructFromObject(data);

    } elseif (Array.isArray(type)) {

    // for array type like: ['String']

    varitemType = type[0];

    return data.map((item) => {

    return ApiClient.convertToType(item, itemType);

    });

    } elseif (typeoftype === 'object') {

    // for plain object type like: {'String': 'Integer'}

    varkeyType, valueType;

    for (varkintype) {

    if (type.hasOwnProperty(k)) {

    keyType = k;

    valueType = type[k];

    break;

    }

    }

    varresult = {};

    for (vardindata) {

    if (data.hasOwnProperty(d)) {

    varkey = ApiClient.convertToType(d, keyType);

    varvalue = ApiClient.convertToType(data[d], valueType);

    result[key] = value;

    }

    }

    return result;

    } else {

    // for unknown type, return the data directly

    return data;

    }

    }

    }

    staticconstructFromObject(data, obj, itemType) {

    if (Array.isArray(data)) {

    for (vari = 0; i < data.length; i++) {

    if (data.hasOwnProperty(i))

    obj[i] = ApiClient.convertToType(data[i], itemType);

    }

    } else {

    for (varkindata) {

    if (data.hasOwnProperty(k))

    obj[k] = ApiClient.convertToType(data[k], itemType);

    }

    }

    }

    }

    ApiClient.instance = new ApiClient();

# Account API

## /api/v1/Account/GetAccountSettings

    importApiClientfrom"../ApiClient";

    importSettingsfrom'../model/Settings';

    exportdefaultclassAccountApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    getAccountSettings(account, password, callback) {

    constpostBody = null;

    constpathParams = {};

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Settings;

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    return this.apiClient.callApi(

    '/api/v1/Account/GetAccountSettings',

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

    }

# Communication API

## /api/v1/Communication/EmailReceipt

    importApiClientfrom"../ApiClient";

    importResponsefrom'../model/Response';

    exportdefaultclassCommunicationApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    postEmailReceipt(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {};

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Response;

    return this.apiClient.callApi(

    '/api/v1/Communication/EmailReceipt',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

    }

# Reporting API

## /api/v1/Reporting/GetBatchesByDate/{batchDate}

    importApiClientfrom"../ApiClient";

    importBatchfrom'../model/Batch';

    importQueryTransactionfrom'../model/QueryTransaction';

    importTerminalSettingsfrom'../model/TerminalSettings';

    exportdefaultclassReportingApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    getBatchesByDate(batchDate, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'batchDate':batchDate

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [Batch];

    return this.apiClient.callApi(

    `/api/v1/Reporting/GetBatchesByDate/${batchDate}`,

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Reporting/GetCheckTerminals

    getTerminalsSettings(account, password, callback) {

    constpostBody = null;

    constpathParams = {};

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [TerminalSettings];

    return this.apiClient.callApi(

    '/api/v1/Reporting/GetCheckTerminals',

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}

    getCheckTerminalSettingsBySecCode(secCode, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'secCode':secCode

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [TerminalSettings];

    return this.apiClient.callApi(

    `/api/v1/Reporting/GetCheckTerminalSettingsBySEC/${secCode}`,

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Reporting/GetCheckTerminalSettings/{terminalID}

    getCheckTerminalSettingsById(terminalID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'terminalID':terminalID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [TerminalSettings];

    return this.apiClient.callApi(

    `/api/v1/Reporting/GetCheckTerminalSettings/${terminalID}`,

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Reporting/GetTransactionsByBatch/{batch}

    getTransactionsByBatch(batch, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'batch':batch

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [QueryTransaction];

    return this.apiClient.callApi(

    `/api/v1/Reporting/GetTransactionsByBatch/${batch}`,

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Reporting/GetTransactionsByDate/{transactionDate}

    getTransactionsByDate(transactionDate, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'transactionDate':transactionDate

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [QueryTransaction];

    return this.apiClient.callApi(

    `/api/v1/Reporting/GetTransactionsByDate/${transactionDate}`,

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

# Vault API

## /api/v1/Vault/GetVaultRecord/{reference}

    importApiClientfrom"../ApiClient";

    importCheckTransactionfrom'../model/CheckTransaction';

    importRecordfrom'../model/Record';

    importResponsefrom'../model/Response';

    importTransactionfrom'../model/Transaction';

    exportdefaultclassVaultApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    getVaultRecordReference(reference, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'reference':reference

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Record;

    return this.apiClient.callApi(

    `/api/v1/Vault/GetVaultRecord/${reference}`,

    'GET',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Vault/SaveVault

    saveVault(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [Response];

    return this.apiClient.callApi(

    '/api/v1/Vault/SaveVault',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Vault/SaveVaultCard/{vaultID}

    saveVaultCardVaultId(vaultID, account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {

    'vaultID':vaultID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Response;

    return this.apiClient.callApi(

    `/api/v1/Vault/SaveVaultCard/${vaultID}`,

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Vault/SearchVault

    searchVault(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = [Record];

    return this.apiClient.callApi(

    '/api/v1/Vault/SearchVault',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Vault/DeleteVaultCardByID/{vaultCardID}

    deleteVaultCardByID(vaultCardID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'vaultCardID':vaultCardID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Response;

    return this.apiClient.callApi(

    `/api/v1/Vault/DeleteVaultCardByID/${vaultCardID}`,

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}

    deleteVaultCheckByID(vaultCheckID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'vaultCheckID':vaultCheckID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Response;

    return this.apiClient.callApi(

    `/api/v1/Vault/DeleteVaultCheckByID/${vaultCheckID}`,

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}

    submitCheckWithVaultCheckId(vaultCheckID, account, password, opts,callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {

    'vaultCheckID':vaultCheckID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = CheckTransaction;

    return this.apiClient.callApi(

    '/api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}

    submitWithVaultCardId(vaultCardID, account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {

    'vaultCardID':vaultCardID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Transaction;

    return this.apiClient.callApi(

    '/api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

# VirtualTerminal API

## /api/v1/VirtualTerminal/Submit

    importApiClientfrom"../ApiClient";

    importCheckTransactionfrom'../model/CheckTransaction';

    importQueryTransactionfrom'../model/QueryTransaction';

    importResponsefrom'../model/Response';

    importTransactionfrom'../model/Transaction';

    exportdefaultclassVirtualTerminalApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    terminalSubmit(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {};

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Transaction;

    return this.apiClient.callApi(

    '/api/v1/VirtualTerminal/Submit',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/VirtualTerminal/SubmitCheck

    terminalSubmitCheck(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {};

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = CheckTransaction;

    return this.apiClient.callApi(

    '/api/v1/VirtualTerminal/SubmitCheck',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/VirtualTerminal/Mark/{transactionID}

    markTransactionId(transactionID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    'transactionID':transactionID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = [];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Response;

    return this.apiClient.callApi(

    `/api/v1/VirtualTerminal/Mark/${transactionID}`,

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/VirtualTerminal/MarkTransactions

    markTransactions(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {};

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Response;

    return this.apiClient.callApi(

    '/api/v1/VirtualTerminal/MarkTransactions',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/VirtualTerminal/Query

    terminalQuery(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {};

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = QueryTransaction;

    return this.apiClient.callApi(

    '/api/v1/VirtualTerminal/Query',

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

## /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}

    terminalUpdateTransactionInfo(transactionID, account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts['body'];

    constpathParams = {

    'transactionID':transactionID

    };

    constheaderParams = {

    'Account':account,

    'Password':password

    };

    constcontentTypes = ['application/json', 'text/json', 'application/_*+json'];

    constaccepts = ['text/plain', 'application/json', 'text/json'];

    constreturn Type = Response;

    return this.apiClient.callApi(

    `/api/v1/VirtualTerminal/UpdateTransactionInfo/${transactionID}`,

    'POST',

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    return Type,

    callback

    );

    }

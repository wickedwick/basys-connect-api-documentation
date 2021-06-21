# ES6 JavaScript

# API Client

    importsuperagentfrom&quot;superagent&quot;;

    exportdefaultclassApiClient {

    constructor() {

    this.basePath = &#39;/&#39;.replace(/\/+$/, &#39;&#39;);

    this.authentications = {

    type:&#39;basic&#39;,

    username:&#39;\&lt;username\&gt;&#39;,

    };

    this.defaultHeaders = {};

    this.timeout = 60000;

    this.cache = true;

    this.enableCookies = false;

    if (typeofwindow === &#39;undefined&#39;) {

    this.agent = newsuperagent.agent();

    }

    this.requestAgent = null;

    }

    paramToString(param) {

    if (param == undefined || param == null) {

    return&#39;&#39;;

    }

    if (paraminstanceofDate) {

    returnparam.toJSON();

    }

    returnparam.toString();

    }

    buildUrl(path, pathParams) {

    if (!path.match(/^\//)) {

    path = &#39;/&#39; + path;

    }

    varurl = this.basePath + path;

    url = url.replace(/\{([\w-]+)\}/g, (fullMatch, key) =\&gt; {

    varvalue;

    if (pathParams.hasOwnProperty(key)) {

    value = this.paramToString(pathParams[key]);

    } else {

    value = fullMatch;

    }

    returnencodeURIComponent(value);

    });

    returnurl;

    }

    isJsonMime(contentType) {

    returnBoolean(contentType != null &amp;&amp; contentType.match(/^application\/json(;.\*)?$/i));

    }

    jsonPreferredMime(contentTypes) {

    for (vari = 0; i \&lt; contentTypes.length; i++) {

    if (this.isJsonMime(contentTypes[i])) {

    returncontentTypes[i];

    }

    }

    returncontentTypes[0];

    }

    normalizeParams(params) {

    varnewParams = {};

    for (varkeyinparams) {

    if (params.hasOwnProperty(key) &amp;&amp; params[key] != undefined &amp;&amp; params[key] != null) {

    varvalue = params[key];

    if (Array.isArray(value)) {

    newParams[key] = value;

    } else {

    newParams[key] = this.paramToString(value);

    }

    }

    }

    returnnewParams;

    }

    deserialize(response, returnType) {

    if (response == null || returnType == null || response.status == 204) {

    returnnull;

    }

    vardata = response.body;

    if (data == null || (typeofdata === &#39;object&#39; &amp;&amp; typeofdata.length === &#39;undefined&#39; &amp;&amp; !Object.keys(data).length)) {

    data = response.text;

    }

    returnApiClient.convertToType(data, returnType);

    }

    callApi(path, httpMethod, pathParams,

    headerParams, bodyParam, contentTypes, accepts,

    returnType, callback) {

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

    if(contentType != &#39;multipart/form-data&#39;) {

    request.type(contentType);

    }

    } elseif (!request.header[&#39;Content-Type&#39;]) {

    request.type(&#39;application/json&#39;);

    }

    if (bodyParam) {

    request.send(bodyParam);

    }

    varaccept = this.jsonPreferredMime(accepts);

    if (accept) {

    request.accept(accept);

    }

    if (returnType === &#39;Blob&#39;) {

    request.responseType(&#39;blob&#39;);

    } elseif (returnType === &#39;String&#39;) {

    request.responseType(&#39;string&#39;);

    }

    // Attach previously saved cookies, if enabled

    if (this.enableCookies){

    if (typeofwindow === &#39;undefined&#39;) {

    this.agent.attachCookies(request);

    }

    else {

    request.withCredentials();

    }

    }

    request.end((error, response) =\&gt; {

    if (callback) {

    vardata = null;

    if (!error) {

    try {

    data = this.deserialize(response, returnType);

    if (this.enableCookies &amp;&amp; typeofwindow === &#39;undefined&#39;){

    this.agent.saveCookies(response);

    }

    } catch (err) {

    error = err;

    }

    }

    callback(error, data, response);

    }

    });

    returnrequest;

    }

    staticparseDate(str) {

    returnnewDate(str);

    }

    staticconvertToType(data, type) {

    if (data === null || data === undefined)

    returndata

    switch (type) {

    case&#39;Boolean&#39;:

    returnBoolean(data);

    case&#39;Integer&#39;:

    returnparseInt(data, 10);

    case&#39;Number&#39;:

    returnparseFloat(data);

    case&#39;String&#39;:

    returnString(data);

    case&#39;Date&#39;:

    returnApiClient.parseDate(String(data));

    case&#39;Blob&#39;:

    returndata;

    default:

    if (type === Object) {

    // generic object, return directly

    returndata;

    } elseif (typeoftype === &#39;function&#39;) {

    // for model type like: User

    returntype.constructFromObject(data);

    } elseif (Array.isArray(type)) {

    // for array type like: [&#39;String&#39;]

    varitemType = type[0];

    returndata.map((item) =\&gt; {

    returnApiClient.convertToType(item, itemType);

    });

    } elseif (typeoftype === &#39;object&#39;) {

    // for plain object type like: {&#39;String&#39;: &#39;Integer&#39;}

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

    returnresult;

    } else {

    // for unknown type, return the data directly

    returndata;

    }

    }

    }

    staticconstructFromObject(data, obj, itemType) {

    if (Array.isArray(data)) {

    for (vari = 0; i \&lt; data.length; i++) {

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

    ApiClient.instance = newApiClient();

# Account API

## /api/v1/Account/GetAccountSettings

    importApiClientfrom&quot;../ApiClient&quot;;

    importSettingsfrom&#39;../model/Settings&#39;;

    exportdefaultclassAccountApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    getAccountSettings(account, password, callback) {

    constpostBody = null;

    constpathParams = {};

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Settings;

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    returnthis.apiClient.callApi(

    &#39;/api/v1/Account/GetAccountSettings&#39;,

    &#39;GET&#39;,

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

# Communication API

## /api/v1/Communication/EmailReceipt

    importApiClientfrom&quot;../ApiClient&quot;;

    importResponsefrom&#39;../model/Response&#39;;

    exportdefaultclassCommunicationApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    postEmailReceipt(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {};

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Response;

    returnthis.apiClient.callApi(

    &#39;/api/v1/Communication/EmailReceipt&#39;,

    &#39;POST&#39;,

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

# Reporting API

## /api/v1/Reporting/GetBatchesByDate/{batchDate}

    importApiClientfrom&quot;../ApiClient&quot;;

    importBatchfrom&#39;../model/Batch&#39;;

    importQueryTransactionfrom&#39;../model/QueryTransaction&#39;;

    importTerminalSettingsfrom&#39;../model/TerminalSettings&#39;;

    exportdefaultclassReportingApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    getBatchesByDate(batchDate, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;batchDate&#39;:batchDate

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [Batch];

    returnthis.apiClient.callApi(

    `/api/v1/Reporting/GetBatchesByDate/${batchDate}`,

    &#39;GET&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Reporting/GetCheckTerminals

    getTerminalsSettings(account, password, callback) {

    constpostBody = null;

    constpathParams = {};

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [TerminalSettings];

    returnthis.apiClient.callApi(

    &#39;/api/v1/Reporting/GetCheckTerminals&#39;,

    &#39;GET&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}

    getCheckTerminalSettingsBySecCode(secCode, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;secCode&#39;:secCode

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [TerminalSettings];

    returnthis.apiClient.callApi(

    `/api/v1/Reporting/GetCheckTerminalSettingsBySEC/${secCode}`,

    &#39;GET&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Reporting/GetCheckTerminalSettings/{terminalID}

    getCheckTerminalSettingsById(terminalID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;terminalID&#39;:terminalID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [TerminalSettings];

    returnthis.apiClient.callApi(

    `/api/v1/Reporting/GetCheckTerminalSettings/${terminalID}`,

    &#39;GET&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Reporting/GetTransactionsByBatch/{batch}

    getTransactionsByBatch(batch, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;batch&#39;:batch

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [QueryTransaction];

    returnthis.apiClient.callApi(

    `/api/v1/Reporting/GetTransactionsByBatch/${batch}`,

    &#39;GET&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Reporting/GetTransactionsByDate/{transactionDate}

    getTransactionsByDate(transactionDate, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;transactionDate&#39;:transactionDate

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [QueryTransaction];

    returnthis.apiClient.callApi(

    `/api/v1/Reporting/GetTransactionsByDate/${transactionDate}`,

    &#39;GET&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

# Vault API

## /api/v1/Vault/GetVaultRecord/{reference}

    importApiClientfrom&quot;../ApiClient&quot;;

    importCheckTransactionfrom&#39;../model/CheckTransaction&#39;;

    importRecordfrom&#39;../model/Record&#39;;

    importResponsefrom&#39;../model/Response&#39;;

    importTransactionfrom&#39;../model/Transaction&#39;;

    exportdefaultclassVaultApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    getVaultRecordReference(reference, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;reference&#39;:reference

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Record;

    returnthis.apiClient.callApi(

    `/api/v1/Vault/GetVaultRecord/${reference}`,

    &#39;GET&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Vault/SaveVault

    saveVault(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [Response];

    returnthis.apiClient.callApi(

    &#39;/api/v1/Vault/SaveVault&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Vault/SaveVaultCard/{vaultID}

    saveVaultCardVaultId(vaultID, account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {

    &#39;vaultID&#39;:vaultID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Response;

    returnthis.apiClient.callApi(

    `/api/v1/Vault/SaveVaultCard/${vaultID}`,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Vault/SearchVault

    searchVault(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = [Record];

    returnthis.apiClient.callApi(

    &#39;/api/v1/Vault/SearchVault&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Vault/DeleteVaultCardByID/{vaultCardID}

    deleteVaultCardByID(vaultCardID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;vaultCardID&#39;:vaultCardID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Response;

    returnthis.apiClient.callApi(

    `/api/v1/Vault/DeleteVaultCardByID/${vaultCardID}`,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}

    deleteVaultCheckByID(vaultCheckID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;vaultCheckID&#39;:vaultCheckID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Response;

    returnthis.apiClient.callApi(

    `/api/v1/Vault/DeleteVaultCheckByID/${vaultCheckID}`,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}

    submitCheckWithVaultCheckId(vaultCheckID, account, password, opts,callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {

    &#39;vaultCheckID&#39;:vaultCheckID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = CheckTransaction;

    returnthis.apiClient.callApi(

    &#39;/api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}

    submitWithVaultCardId(vaultCardID, account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {

    &#39;vaultCardID&#39;:vaultCardID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Transaction;

    returnthis.apiClient.callApi(

    &#39;/api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

# VirtualTerminal API

## /api/v1/VirtualTerminal/Submit

    importApiClientfrom&quot;../ApiClient&quot;;

    importCheckTransactionfrom&#39;../model/CheckTransaction&#39;;

    importQueryTransactionfrom&#39;../model/QueryTransaction&#39;;

    importResponsefrom&#39;../model/Response&#39;;

    importTransactionfrom&#39;../model/Transaction&#39;;

    exportdefaultclassVirtualTerminalApi {

    constructor(apiClient) {

    this.apiClient = apiClient || ApiClient.instance;

    }

    terminalSubmit(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {};

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Transaction;

    returnthis.apiClient.callApi(

    &#39;/api/v1/VirtualTerminal/Submit&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/VirtualTerminal/SubmitCheck

    terminalSubmitCheck(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {};

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = CheckTransaction;

    returnthis.apiClient.callApi(

    &#39;/api/v1/VirtualTerminal/SubmitCheck&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/VirtualTerminal/Mark/{transactionID}

    markTransactionId(transactionID, account, password, callback) {

    constpostBody = null;

    constpathParams = {

    &#39;transactionID&#39;:transactionID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Response;

    returnthis.apiClient.callApi(

    `/api/v1/VirtualTerminal/Mark/${transactionID}`,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/VirtualTerminal/MarkTransactions

    markTransactions(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {};

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Response;

    returnthis.apiClient.callApi(

    &#39;/api/v1/VirtualTerminal/MarkTransactions&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/VirtualTerminal/Query

    terminalQuery(account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {};

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = QueryTransaction;

    returnthis.apiClient.callApi(

    &#39;/api/v1/VirtualTerminal/Query&#39;,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

## /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}

    terminalUpdateTransactionInfo(transactionID, account, password, opts, callback) {

    opts = opts || {};

    constpostBody = opts[&#39;body&#39;];

    constpathParams = {

    &#39;transactionID&#39;:transactionID

    };

    constheaderParams = {

    &#39;Account&#39;:account,

    &#39;Password&#39;:password

    };

    constcontentTypes = [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;];

    constaccepts = [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;];

    constreturnType = Response;

    returnthis.apiClient.callApi(

    `/api/v1/VirtualTerminal/UpdateTransactionInfo/${transactionID}`,

    &#39;POST&#39;,

    pathParams,

    headerParams,

    postBody,

    contentTypes,

    accepts,

    returnType,

    callback

    );

    }

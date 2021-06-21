# PHP

# Account API

## /api/v1/Account/GetAccountSettings

    protectedfunctionapiV1AccountGetAccountSettingsGetRequest($account, $password)

    {

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1AccountGetAccountSettingsGet&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1AccountGetAccountSettingsGet&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Account/GetAccountSettings&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;GET&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

# Communication API

## /api/v1/Communication/EmailReceipt

    protectedfunctionapiV1CommunicationEmailReceiptPostRequest($account, $password, $body = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1CommunicationEmailReceiptPost&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1CommunicationEmailReceiptPost&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Communication/EmailReceipt&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // body params

    $\_tempBody = null;

    if (isset($body)) {

    $\_tempBody = $body;

    }

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;]

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;POST&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

# Reporting API

## /api/v1/Reporting/GetBatchesByDate/{batchDate}

    protectedfunctionapiV1ReportingGetBatchesByDateBatchDateGetRequest($batch\_date, $account, $password)

    {

    // verify the required parameter &#39;batch\_date&#39; is set

    if ($batch\_date === null || (is\_array($batch\_date) &amp;&amp; count($batch\_date) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $batch\_date when calling apiV1ReportingGetBatchesByDateBatchDateGet&#39;

    );

    }

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1ReportingGetBatchesByDateBatchDateGet&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1ReportingGetBatchesByDateBatchDateGet&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Reporting/GetBatchesByDate/{batchDate}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($batch\_date !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;batchDate&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($batch\_date),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;GET&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/Reporting/GetCheckTerminals

    protectedfunctionapiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetRequest($sec\_code, $account, $password)

    {

    // verify the required parameter &#39;sec\_code&#39; is set

    if ($sec\_code === null || (is\_array($sec\_code) &amp;&amp; count($sec\_code) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $sec\_code when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&#39;

    );

    }

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($sec\_code !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;secCode&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($sec\_code),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;GET&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}

    protectedfunctionapiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetRequest($sec\_code, $account, $password)

    {

    // verify the required parameter &#39;sec\_code&#39; is set

    if ($sec\_code === null || (is\_array($sec\_code) &amp;&amp; count($sec\_code) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $sec\_code when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&#39;

    );

    }

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($sec\_code !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;secCode&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($sec\_code),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;GET&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/Reporting/GetCheckTerminalSettings/{terminalID}

    protectedfunctionapiV1ReportingGetCheckTerminalSettingsTerminalIDGetRequest($terminal\_id, $account, $password)

    {

    // verify the required parameter &#39;terminal\_id&#39; is set

    if ($terminal\_id === null || (is\_array($terminal\_id) &amp;&amp; count($terminal\_id) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $terminal\_id when calling apiV1ReportingGetCheckTerminalSettingsTerminalIDGet&#39;

    );

    }

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1ReportingGetCheckTerminalSettingsTerminalIDGet&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1ReportingGetCheckTerminalSettingsTerminalIDGet&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Reporting/GetCheckTerminalSettings/{terminalID}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($terminal\_id !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;terminalID&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($terminal\_id),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;GET&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/Reporting/GetTransactionsByBatch/{batch}

    protectedfunctionapiV1ReportingGetTransactionsByBatchBatchGetRequest($batch, $account, $password)

    {

    // verify the required parameter &#39;batch&#39; is set

    if ($batch === null || (is\_array($batch) &amp;&amp; count($batch) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $batch when calling apiV1ReportingGetTransactionsByBatchBatchGet&#39;

    );

    }

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1ReportingGetTransactionsByBatchBatchGet&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1ReportingGetTransactionsByBatchBatchGet&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Reporting/GetTransactionsByBatch/{batch}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($batch !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;batch&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($batch),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;GET&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/Reporting/GetTransactionsByDate/{transactionDate}

    protectedfunctionapiV1ReportingGetTransactionsByDateTransactionDateGetRequest($transaction\_date, $account, $password)

    {

    // verify the required parameter &#39;transaction\_date&#39; is set

    if ($transaction\_date === null || (is\_array($transaction\_date) &amp;&amp; count($transaction\_date) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $transaction\_date when calling apiV1ReportingGetTransactionsByDateTransactionDateGet&#39;

    );

    }

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1ReportingGetTransactionsByDateTransactionDateGet&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1ReportingGetTransactionsByDateTransactionDateGet&#39;

    );

    }

    $resourcePath = &#39;/api/v1/Reporting/GetTransactionsByDate/{transactionDate}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($transaction\_date !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;transactionDate&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($transaction\_date),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;GET&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

# Vault API

## /api/v1/Vault/GetVaultRecord/{reference}

    public function apiV1VaultGetVaultRecordReferenceGetAsync($reference, $account, $password)
    {
        $returnType = '\Swagger\Client\Model\Record';
        $request = $this->apiV1VaultGetVaultRecordReferenceGetRequest($reference, $account, $password);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

## /api/v1/Vault/SaveVault

    publicfunctionapiV1VaultSaveVaultPostAsyncWithHttpInfo($account, $password, $body = null)

    {

    $returnType = &#39;\Swagger\Client\Model\Response[]&#39;;

    $request = $this-\&gt;apiV1VaultSaveVaultPostRequest($account, $password, $body);

    return$this-\&gt;client

    -\&gt;sendAsync($request, $this-\&gt;createHttpClientOption())

    -\&gt;then(

    function ($response) use ($returnType) {

    $responseBody = $response-\&gt;getBody();

    if ($returnType === &#39;\SplFileObject&#39;) {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody-\&gt;getContents();

    if ($returnType !== &#39;string&#39;) {

    $content = json\_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $returnType, []),

    $response-\&gt;getStatusCode(),

    $response-\&gt;getHeaders()

    ];

    },

    function ($exception) {

    $response = $exception-\&gt;getResponse();

    $statusCode = $response-\&gt;getStatusCode();

    thrownewApiException(

    sprintf(

    &#39;[%d] Error connecting to the API (%s)&#39;,

    $statusCode,

    $exception-\&gt;getRequest()-\&gt;getUri()

    ),

    $statusCode,

    $response-\&gt;getHeaders(),

    $response-\&gt;getBody()

    );

    }

    );

    }

## /api/v1/Vault/SaveVaultCard/{vaultID}

    publicfunctionapiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo($account, $password, $vault\_id, $body = null)

    {

    $returnType = &#39;\Swagger\Client\Model\Response&#39;;

    $request = $this-\&gt;apiV1VaultSaveVaultCardVaultIDPostRequest($account, $password, $vault\_id, $body);

    return$this-\&gt;client

    -\&gt;sendAsync($request, $this-\&gt;createHttpClientOption())

    -\&gt;then(

    function ($response) use ($returnType) {

    $responseBody = $response-\&gt;getBody();

    if ($returnType === &#39;\SplFileObject&#39;) {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody-\&gt;getContents();

    if ($returnType !== &#39;string&#39;) {

    $content = json\_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $returnType, []),

    $response-\&gt;getStatusCode(),

    $response-\&gt;getHeaders()

    ];

    },

    function ($exception) {

    $response = $exception-\&gt;getResponse();

    $statusCode = $response-\&gt;getStatusCode();

    thrownewApiException(

    sprintf(

    &#39;[%d] Error connecting to the API (%s)&#39;,

    $statusCode,

    $exception-\&gt;getRequest()-\&gt;getUri()

    ),

    $statusCode,

    $response-\&gt;getHeaders(),

    $response-\&gt;getBody()

    );

    }

    );

    }

## /api/v1/Vault/SearchVault

    publicfunctionapiV1VaultSearchVaultPostAsyncWithHttpInfo($account, $password, $body = null)

    {

    $returnType = &#39;\Swagger\Client\Model\Record[]&#39;;

    $request = $this-\&gt;apiV1VaultSearchVaultPostRequest($account, $password, $body);

    return$this-\&gt;client

    -\&gt;sendAsync($request, $this-\&gt;createHttpClientOption())

    -\&gt;then(

    function ($response) use ($returnType) {

    $responseBody = $response-\&gt;getBody();

    if ($returnType === &#39;\SplFileObject&#39;) {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody-\&gt;getContents();

    if ($returnType !== &#39;string&#39;) {

    $content = json\_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $returnType, []),

    $response-\&gt;getStatusCode(),

    $response-\&gt;getHeaders()

    ];

    },

    function ($exception) {

    $response = $exception-\&gt;getResponse();

    $statusCode = $response-\&gt;getStatusCode();

    thrownewApiException(

    sprintf(

    &#39;[%d] Error connecting to the API (%s)&#39;,

    $statusCode,

    $exception-\&gt;getRequest()-\&gt;getUri()

    ),

    $statusCode,

    $response-\&gt;getHeaders(),

    $response-\&gt;getBody()

    );

    }

    );

    }

## /api/v1/Vault/DeleteVaultCardByID/{vaultCardID}

    publicfunctionapiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo($vault\_card\_id, $account, $password)

    {

    $returnType = &#39;\Swagger\Client\Model\Response&#39;;

    $request = $this-\&gt;apiV1VaultDeleteVaultCardByIDVaultCardIDPostRequest($vault\_card\_id, $account, $password);

    return$this-\&gt;client

    -\&gt;sendAsync($request, $this-\&gt;createHttpClientOption())

    -\&gt;then(

    function ($response) use ($returnType) {

    $responseBody = $response-\&gt;getBody();

    if ($returnType === &#39;\SplFileObject&#39;) {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody-\&gt;getContents();

    if ($returnType !== &#39;string&#39;) {

    $content = json\_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $returnType, []),

    $response-\&gt;getStatusCode(),

    $response-\&gt;getHeaders()

    ];

    },

    function ($exception) {

    $response = $exception-\&gt;getResponse();

    $statusCode = $response-\&gt;getStatusCode();

    thrownewApiException(

    sprintf(

    &#39;[%d] Error connecting to the API (%s)&#39;,

    $statusCode,

    $exception-\&gt;getRequest()-\&gt;getUri()

    ),

    $statusCode,

    $response-\&gt;getHeaders(),

    $response-\&gt;getBody()

    );

    }

    );

    }

## /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}

    publicfunctionapiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo($vault\_check\_id, $account, $password)

    {

    $returnType = &#39;\Swagger\Client\Model\Response&#39;;

    $request = $this-\&gt;apiV1VaultDeleteVaultCheckByIDVaultCheckIDPostRequest($vault\_check\_id, $account, $password);

    return$this-\&gt;client

    -\&gt;sendAsync($request, $this-\&gt;createHttpClientOption())

    -\&gt;then(

    function ($response) use ($returnType) {

    $responseBody = $response-\&gt;getBody();

    if ($returnType === &#39;\SplFileObject&#39;) {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody-\&gt;getContents();

    if ($returnType !== &#39;string&#39;) {

    $content = json\_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $returnType, []),

    $response-\&gt;getStatusCode(),

    $response-\&gt;getHeaders()

    ];

    },

    function ($exception) {

    $response = $exception-\&gt;getResponse();

    $statusCode = $response-\&gt;getStatusCode();

    thrownewApiException(

    sprintf(

    &#39;[%d] Error connecting to the API (%s)&#39;,

    $statusCode,

    $exception-\&gt;getRequest()-\&gt;getUri()

    ),

    $statusCode,

    $response-\&gt;getHeaders(),

    $response-\&gt;getBody()

    );

    }

    );

    }

## /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}

    publicfunctionapiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo($account, $password, $vault\_check\_id, $body = null)

    {

    $returnType = &#39;\Swagger\Client\Model\CheckTransaction&#39;;

    $request = $this-\&gt;apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostRequest($account, $password, $vault\_check\_id, $body);

    return$this-\&gt;client

    -\&gt;sendAsync($request, $this-\&gt;createHttpClientOption())

    -\&gt;then(

    function ($response) use ($returnType) {

    $responseBody = $response-\&gt;getBody();

    if ($returnType === &#39;\SplFileObject&#39;) {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody-\&gt;getContents();

    if ($returnType !== &#39;string&#39;) {

    $content = json\_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $returnType, []),

    $response-\&gt;getStatusCode(),

    $response-\&gt;getHeaders()

    ];

    },

    function ($exception) {

    $response = $exception-\&gt;getResponse();

    $statusCode = $response-\&gt;getStatusCode();

    thrownewApiException(

    sprintf(

    &#39;[%d] Error connecting to the API (%s)&#39;,

    $statusCode,

    $exception-\&gt;getRequest()-\&gt;getUri()

    ),

    $statusCode,

    $response-\&gt;getHeaders(),

    $response-\&gt;getBody()

    );

    }

    );

    }

## /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}

    publicfunctionapiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo($account, $password, $vault\_card\_id, $body = null)

    {

    $returnType = &#39;\Swagger\Client\Model\Transaction&#39;;

    $request = $this-\&gt;apiV1VaultSubmitWithVaultCardIDVaultCardIDPostRequest($account, $password, $vault\_card\_id, $body);

    return$this-\&gt;client

    -\&gt;sendAsync($request, $this-\&gt;createHttpClientOption())

    -\&gt;then(

    function ($response) use ($returnType) {

    $responseBody = $response-\&gt;getBody();

    if ($returnType === &#39;\SplFileObject&#39;) {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody-\&gt;getContents();

    if ($returnType !== &#39;string&#39;) {

    $content = json\_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $returnType, []),

    $response-\&gt;getStatusCode(),

    $response-\&gt;getHeaders()

    ];

    },

    function ($exception) {

    $response = $exception-\&gt;getResponse();

    $statusCode = $response-\&gt;getStatusCode();

    thrownewApiException(

    sprintf(

    &#39;[%d] Error connecting to the API (%s)&#39;,

    $statusCode,

    $exception-\&gt;getRequest()-\&gt;getUri()

    ),

    $statusCode,

    $response-\&gt;getHeaders(),

    $response-\&gt;getBody()

    );

    }

    );

    }

# VirtualTerminal API

## /api/v1/VirtualTerminal/Submit

    protectedfunctionapiV1VirtualTerminalSubmitPostRequest($account, $password, $body = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1VirtualTerminalSubmitPost&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1VirtualTerminalSubmitPost&#39;

    );

    }

    $resourcePath = &#39;/api/v1/VirtualTerminal/Submit&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // body params

    $\_tempBody = null;

    if (isset($body)) {

    $\_tempBody = $body;

    }

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;]

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;POST&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/VirtualTerminal/SubmitCheck

    protectedfunctionapiV1VirtualTerminalSubmitCheckPostRequest($account, $password, $body = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1VirtualTerminalSubmitCheckPost&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1VirtualTerminalSubmitCheckPost&#39;

    );

    }

    $resourcePath = &#39;/api/v1/VirtualTerminal/SubmitCheck&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // body params

    $\_tempBody = null;

    if (isset($body)) {

    $\_tempBody = $body;

    }

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;]

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;POST&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/VirtualTerminal/Mark/{transactionID}

    protectedfunctionapiV1VirtualTerminalMarkTransactionIDPostRequest($transaction\_id, $account, $password)

    {

    // verify the required parameter &#39;transaction\_id&#39; is set

    if ($transaction\_id === null || (is\_array($transaction\_id) &amp;&amp; count($transaction\_id) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $transaction\_id when calling apiV1VirtualTerminalMarkTransactionIDPost&#39;

    );

    }

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1VirtualTerminalMarkTransactionIDPost&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1VirtualTerminalMarkTransactionIDPost&#39;

    );

    }

    $resourcePath = &#39;/api/v1/VirtualTerminal/Mark/{transactionID}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($transaction\_id !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;transactionID&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($transaction\_id),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    []

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;POST&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/VirtualTerminal/MarkTransactions

    protectedfunctionapiV1VirtualTerminalMarkTransactionsPostRequest($account, $password, $body = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1VirtualTerminalMarkTransactionsPost&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1VirtualTerminalMarkTransactionsPost&#39;

    );

    }

    $resourcePath = &#39;/api/v1/VirtualTerminal/MarkTransactions&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // body params

    $\_tempBody = null;

    if (isset($body)) {

    $\_tempBody = $body;

    }

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;]

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;POST&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/VirtualTerminal/Query

    protectedfunctionapiV1VirtualTerminalQueryPostRequest($account, $password, $body = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1VirtualTerminalQueryPost&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1VirtualTerminalQueryPost&#39;

    );

    }

    $resourcePath = &#39;/api/v1/VirtualTerminal/Query&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // body params

    $\_tempBody = null;

    if (isset($body)) {

    $\_tempBody = $body;

    }

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;]

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;POST&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

## /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}

    protectedfunctionapiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostRequest($account, $password, $transaction\_id, $body = null)

    {

    // verify the required parameter &#39;account&#39; is set

    if ($account === null || (is\_array($account) &amp;&amp; count($account) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $account when calling apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost&#39;

    );

    }

    // verify the required parameter &#39;password&#39; is set

    if ($password === null || (is\_array($password) &amp;&amp; count($password) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $password when calling apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost&#39;

    );

    }

    // verify the required parameter &#39;transaction\_id&#39; is set

    if ($transaction\_id === null || (is\_array($transaction\_id) &amp;&amp; count($transaction\_id) === 0)) {

    thrownew\InvalidArgumentException(

    &#39;Missing the required parameter $transaction\_id when calling apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost&#39;

    );

    }

    $resourcePath = &#39;/api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}&#39;;

    $formParams = [];

    $queryParams = [];

    $headerParams = [];

    $httpBody = &#39;&#39;;

    $multipart = false;

    // header params

    if ($account !== null) {

    $headerParams[&#39;Account&#39;] = ObjectSerializer::toHeaderValue($account);

    }

    // header params

    if ($password !== null) {

    $headerParams[&#39;Password&#39;] = ObjectSerializer::toHeaderValue($password);

    }

    // path params

    if ($transaction\_id !== null) {

    $resourcePath = str\_replace(

    &#39;{&#39; . &#39;transactionID&#39; . &#39;}&#39;,

    ObjectSerializer::toPathValue($transaction\_id),

    $resourcePath

    );

    }

    // body params

    $\_tempBody = null;

    if (isset($body)) {

    $\_tempBody = $body;

    }

    if ($multipart) {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeadersForMultipart(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;]

    );

    } else {

    $headers = $this-\&gt;headerSelector-\&gt;selectHeaders(

    [&#39;text/plain&#39;, &#39;application/json&#39;, &#39;text/json&#39;],

    [&#39;application/json&#39;, &#39;text/json&#39;, &#39;application/\_\*+json&#39;]

    );

    }

    // for model (json/xml)

    if (isset($\_tempBody)) {

    // $\_tempBody is the method argument, if present

    $httpBody = $\_tempBody;

    // \stdClass has no \_\_toString(), so we should encode it manually

    if ($httpBody instanceof \stdClass &amp;&amp; $headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($httpBody);

    }

    } elseif (count($formParams) \&gt; 0) {

    if ($multipart) {

    $multipartContents = [];

    foreach ($formParams as $formParamName =\&gt; $formParamValue) {

    $multipartContents[] = [

    &#39;name&#39; =\&gt; $formParamName,

    &#39;contents&#39; =\&gt; $formParamValue

    ];

    }

    // for HTTP post (form)

    $httpBody = newMultipartStream($multipartContents);

    } elseif ($headers[&#39;Content-Type&#39;] === &#39;application/json&#39;) {

    $httpBody = \GuzzleHttp\json\_encode($formParams);

    } else {

    // for HTTP post (form)

    $httpBody = \GuzzleHttp\Psr7\build\_query($formParams);

    }

    }

    $defaultHeaders = [];

    if ($this-\&gt;config-\&gt;getUserAgent()) {

    $defaultHeaders[&#39;User-Agent&#39;] = $this-\&gt;config-\&gt;getUserAgent();

    }

    $headers = array\_merge(

    $defaultHeaders,

    $headerParams,

    $headers

    );

    $query = \GuzzleHttp\Psr7\build\_query($queryParams);

    returnnewRequest(

    &#39;POST&#39;,

    $this-\&gt;config-\&gt;getHost() . $resourcePath . ($query ? &quot;?{$query}&quot; : &#39;&#39;),

    $headers,

    $httpBody

    );

    }

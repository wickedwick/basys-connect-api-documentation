# PHP

# Account API

## /api/v1/Account/GetAccountSettings

    protected function apiV1AccountGetAccountSettingsGetRequest($account, $password)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1AccountGetAccountSettingsGet'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1AccountGetAccountSettingsGet'
            );
        }

        $resourcePath = '/api/v1/Account/GetAccountSettings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

# Communication API

## /api/v1/Communication/EmailReceipt

    protected function apiV1CommunicationEmailReceiptPostRequest($account, $password, $body = null)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1CommunicationEmailReceiptPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1CommunicationEmailReceiptPost'
            );
        }

        $resourcePath = '/api/v1/Communication/EmailReceipt';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

# Reporting API

## /api/v1/Reporting/GetBatchesByDate/{batchDate}

    protected function apiV1ReportingGetBatchesByDateBatchDateGetRequest($batch_date, $account, $password)
    {
        // verify the required parameter 'batch_date' is set
        if ($batch_date === null || (is_array($batch_date) && count($batch_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch_date when calling apiV1ReportingGetBatchesByDateBatchDateGet'
            );
        }
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1ReportingGetBatchesByDateBatchDateGet'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1ReportingGetBatchesByDateBatchDateGet'
            );
        }

        $resourcePath = '/api/v1/Reporting/GetBatchesByDate/{batchDate}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($batch_date !== null) {
            $resourcePath = str_replace(
                '{' . 'batchDate' . '}',
                ObjectSerializer::toPathValue($batch_date),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/Reporting/GetCheckTerminals

    protected function apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetRequest($sec_code, $account, $password)
    {
        // verify the required parameter 'sec_code' is set
        if ($sec_code === null || (is_array($sec_code) && count($sec_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sec_code when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet'
            );
        }
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet'
            );
        }

        $resourcePath = '/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($sec_code !== null) {
            $resourcePath = str_replace(
                '{' . 'secCode' . '}',
                ObjectSerializer::toPathValue($sec_code),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}

    protected function apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGetRequest($sec_code, $account, $password)
    {
        // verify the required parameter 'sec_code' is set
        if ($sec_code === null || (is_array($sec_code) && count($sec_code) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sec_code when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet'
            );
        }
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1ReportingGetCheckTerminalSettingsBySECSecCodeGet'
            );
        }

        $resourcePath = '/api/v1/Reporting/GetCheckTerminalSettingsBySEC/{secCode}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($sec_code !== null) {
            $resourcePath = str_replace(
                '{' . 'secCode' . '}',
                ObjectSerializer::toPathValue($sec_code),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/Reporting/GetCheckTerminalSettings/{terminalID}

    protected function apiV1ReportingGetCheckTerminalSettingsTerminalIDGetRequest($terminal_id, $account, $password)
    {
        // verify the required parameter 'terminal_id' is set
        if ($terminal_id === null || (is_array($terminal_id) && count($terminal_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $terminal_id when calling apiV1ReportingGetCheckTerminalSettingsTerminalIDGet'
            );
        }
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1ReportingGetCheckTerminalSettingsTerminalIDGet'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1ReportingGetCheckTerminalSettingsTerminalIDGet'
            );
        }

        $resourcePath = '/api/v1/Reporting/GetCheckTerminalSettings/{terminalID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($terminal_id !== null) {
            $resourcePath = str_replace(
                '{' . 'terminalID' . '}',
                ObjectSerializer::toPathValue($terminal_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/Reporting/GetTransactionsByBatch/{batch}

    protected function apiV1ReportingGetTransactionsByBatchBatchGetRequest($batch, $account, $password)
    {
        // verify the required parameter 'batch' is set
        if ($batch === null || (is_array($batch) && count($batch) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $batch when calling apiV1ReportingGetTransactionsByBatchBatchGet'
            );
        }
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1ReportingGetTransactionsByBatchBatchGet'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1ReportingGetTransactionsByBatchBatchGet'
            );
        }

        $resourcePath = '/api/v1/Reporting/GetTransactionsByBatch/{batch}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($batch !== null) {
            $resourcePath = str_replace(
                '{' . 'batch' . '}',
                ObjectSerializer::toPathValue($batch),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/Reporting/GetTransactionsByDate/{transactionDate}

    protected function apiV1ReportingGetTransactionsByDateTransactionDateGetRequest($transaction_date, $account, $password)
    {
        // verify the required parameter 'transaction_date' is set
        if ($transaction_date === null || (is_array($transaction_date) && count($transaction_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_date when calling apiV1ReportingGetTransactionsByDateTransactionDateGet'
            );
        }
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1ReportingGetTransactionsByDateTransactionDateGet'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1ReportingGetTransactionsByDateTransactionDateGet'
            );
        }

        $resourcePath = '/api/v1/Reporting/GetTransactionsByDate/{transactionDate}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($transaction_date !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionDate' . '}',
                ObjectSerializer::toPathValue($transaction_date),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

# Vault API

## /api/v1/Vault/GetVaultRecord/{reference}

    public function apiV1VaultGetVaultRecordReferenceGetAsync($reference, $account, $password)
    {
        $return Type = '\Swagger\Client\Model\Record';
        $request = $this->apiV1VaultGetVaultRecordReferenceGetRequest($reference, $account, $password);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($return Type) {
                    $responseBody = $response->getBody();
                    if ($return Type === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($return Type !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $return Type, []),
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

    public functionapiV1VaultSaveVaultPostAsyncWithHttpInfo($account, $password, $body = null)

    {

    $return Type = '\Swagger\Client\Model\Response[]';

    $request = $this->apiV1VaultSaveVaultPostRequest($account, $password, $body);

    return $this->client

    ->sendAsync($request, $this->createHttpClientOption())

    ->then(

    function ($response) use ($return Type) {

    $responseBody = $response->getBody();

    if ($return Type === '\SplFileObject') {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody->getContents();

    if ($return Type !== 'string') {

    $content = json_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $return Type, []),

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

## /api/v1/Vault/SaveVaultCard/{vaultID}

    public functionapiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo($account, $password, $vault_id, $body = null)

    {

    $return Type = '\Swagger\Client\Model\Response';

    $request = $this->apiV1VaultSaveVaultCardVaultIDPostRequest($account, $password, $vault_id, $body);

    return $this->client

    ->sendAsync($request, $this->createHttpClientOption())

    ->then(

    function ($response) use ($return Type) {

    $responseBody = $response->getBody();

    if ($return Type === '\SplFileObject') {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody->getContents();

    if ($return Type !== 'string') {

    $content = json_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $return Type, []),

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

## /api/v1/Vault/SearchVault

    public functionapiV1VaultSearchVaultPostAsyncWithHttpInfo($account, $password, $body = null)

    {

    $return Type = '\Swagger\Client\Model\Record[]';

    $request = $this->apiV1VaultSearchVaultPostRequest($account, $password, $body);

    return $this->client

    ->sendAsync($request, $this->createHttpClientOption())

    ->then(

    function ($response) use ($return Type) {

    $responseBody = $response->getBody();

    if ($return Type === '\SplFileObject') {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody->getContents();

    if ($return Type !== 'string') {

    $content = json_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $return Type, []),

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

## /api/v1/Vault/DeleteVaultCardByID/{vaultCardID}

    public functionapiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo($vault_card_id, $account, $password)

    {

    $return Type = '\Swagger\Client\Model\Response';

    $request = $this->apiV1VaultDeleteVaultCardByIDVaultCardIDPostRequest($vault_card_id, $account, $password);

    return $this->client

    ->sendAsync($request, $this->createHttpClientOption())

    ->then(

    function ($response) use ($return Type) {

    $responseBody = $response->getBody();

    if ($return Type === '\SplFileObject') {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody->getContents();

    if ($return Type !== 'string') {

    $content = json_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $return Type, []),

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

## /api/v1/Vault/DeleteVaultCheckByID/{vaultCheckID}

    public functionapiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo($vault_check_id, $account, $password)

    {

    $return Type = '\Swagger\Client\Model\Response';

    $request = $this->apiV1VaultDeleteVaultCheckByIDVaultCheckIDPostRequest($vault_check_id, $account, $password);

    return $this->client

    ->sendAsync($request, $this->createHttpClientOption())

    ->then(

    function ($response) use ($return Type) {

    $responseBody = $response->getBody();

    if ($return Type === '\SplFileObject') {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody->getContents();

    if ($return Type !== 'string') {

    $content = json_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $return Type, []),

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

## /api/v1/Vault/SubmitCheckWithVaultCheckID/{vaultCheckID}

    public functionapiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo($account, $password, $vault_check_id, $body = null)

    {

    $return Type = '\Swagger\Client\Model\CheckTransaction';

    $request = $this->apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostRequest($account, $password, $vault_check_id, $body);

    return $this->client

    ->sendAsync($request, $this->createHttpClientOption())

    ->then(

    function ($response) use ($return Type) {

    $responseBody = $response->getBody();

    if ($return Type === '\SplFileObject') {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody->getContents();

    if ($return Type !== 'string') {

    $content = json_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $return Type, []),

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

## /api/v1/Vault/SubmitWithVaultCardID/{vaultCardID}

    public functionapiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo($account, $password, $vault_card_id, $body = null)

    {

    $return Type = '\Swagger\Client\Model\Transaction';

    $request = $this->apiV1VaultSubmitWithVaultCardIDVaultCardIDPostRequest($account, $password, $vault_card_id, $body);

    return $this->client

    ->sendAsync($request, $this->createHttpClientOption())

    ->then(

    function ($response) use ($return Type) {

    $responseBody = $response->getBody();

    if ($return Type === '\SplFileObject') {

    $content = $responseBody; //stream goes to serializer

    } else {

    $content = $responseBody->getContents();

    if ($return Type !== 'string') {

    $content = json_decode($content);

    }

    }

    return [

    ObjectSerializer::deserialize($content, $return Type, []),

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

# VirtualTerminal API

## /api/v1/VirtualTerminal/Submit

    protected function apiV1VirtualTerminalSubmitCheckPostRequest($account, $password, $body = null)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1VirtualTerminalSubmitCheckPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1VirtualTerminalSubmitCheckPost'
            );
        }

        $resourcePath = '/api/v1/VirtualTerminal/SubmitCheck';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/VirtualTerminal/SubmitCheck

    protected function apiV1VirtualTerminalSubmitCheckPostRequest($account, $password, $body = null)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1VirtualTerminalSubmitCheckPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1VirtualTerminalSubmitCheckPost'
            );
        }

        $resourcePath = '/api/v1/VirtualTerminal/SubmitCheck';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/VirtualTerminal/Mark/{transactionID}

    protected function apiV1VirtualTerminalMarkTransactionIDPostRequest($transaction_id, $account, $password)
    {
        // verify the required parameter 'transaction_id' is set
        if ($transaction_id === null || (is_array($transaction_id) && count($transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_id when calling apiV1VirtualTerminalMarkTransactionIDPost'
            );
        }
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1VirtualTerminalMarkTransactionIDPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1VirtualTerminalMarkTransactionIDPost'
            );
        }

        $resourcePath = '/api/v1/VirtualTerminal/Mark/{transactionID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($transaction_id !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionID' . '}',
                ObjectSerializer::toPathValue($transaction_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/VirtualTerminal/MarkTransactions

    protected function apiV1VirtualTerminalMarkTransactionsPostRequest($account, $password, $body = null)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1VirtualTerminalMarkTransactionsPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1VirtualTerminalMarkTransactionsPost'
            );
        }

        $resourcePath = '/api/v1/VirtualTerminal/MarkTransactions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/VirtualTerminal/Query

    protected function apiV1VirtualTerminalQueryPostRequest($account, $password, $body = null)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1VirtualTerminalQueryPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1VirtualTerminalQueryPost'
            );
        }

        $resourcePath = '/api/v1/VirtualTerminal/Query';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

## /api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}

    protected function apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostRequest($account, $password, $transaction_id, $body = null)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost'
            );
        }
        // verify the required parameter 'transaction_id' is set
        if ($transaction_id === null || (is_array($transaction_id) && count($transaction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $transaction_id when calling apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost'
            );
        }

        $resourcePath = '/api/v1/VirtualTerminal/UpdateTransactionInfo/{transactionID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($account !== null) {
            $headerParams['Account'] = ObjectSerializer::toHeaderValue($account);
        }
        // header params
        if ($password !== null) {
            $headerParams['Password'] = ObjectSerializer::toHeaderValue($password);
        }

        // path params
        if ($transaction_id !== null) {
            $resourcePath = str_replace(
                '{' . 'transactionID' . '}',
                ObjectSerializer::toPathValue($transaction_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

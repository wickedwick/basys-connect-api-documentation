<?php
namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

class VirtualTerminalApi
{
    protected $client;
    protected $config;
    protected $headerSelector;

    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    public function getConfig()
    {
        return $this->config;
    }

    public function apiV1VirtualTerminalMarkTransactionIDPost($transaction_id, $account, $password)
    {
        list($response) = $this->apiV1VirtualTerminalMarkTransactionIDPostWithHttpInfo($transaction_id, $account, $password);
        return $response;
    }

    public function apiV1VirtualTerminalMarkTransactionIDPostWithHttpInfo($transaction_id, $account, $password)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VirtualTerminalMarkTransactionIDPostRequest($transaction_id, $account, $password);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    public function apiV1VirtualTerminalMarkTransactionIDPostAsync($transaction_id, $account, $password)
    {
        return $this->apiV1VirtualTerminalMarkTransactionIDPostAsyncWithHttpInfo($transaction_id, $account, $password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VirtualTerminalMarkTransactionIDPostAsyncWithHttpInfo($transaction_id, $account, $password)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VirtualTerminalMarkTransactionIDPostRequest($transaction_id, $account, $password);

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

    public function apiV1VirtualTerminalMarkTransactionsPost($account, $password, $body = null)
    {
        list($response) = $this->apiV1VirtualTerminalMarkTransactionsPostWithHttpInfo($account, $password, $body);
        return $response;
    }

    public function apiV1VirtualTerminalMarkTransactionsPostWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VirtualTerminalMarkTransactionsPostRequest($account, $password, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    public function apiV1VirtualTerminalMarkTransactionsPostAsync($account, $password, $body = null)
    {
        return $this->apiV1VirtualTerminalMarkTransactionsPostAsyncWithHttpInfo($account, $password, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VirtualTerminalMarkTransactionsPostAsyncWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VirtualTerminalMarkTransactionsPostRequest($account, $password, $body);

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

    public function apiV1VirtualTerminalQueryPost($account, $password, $body = null)
    {
        list($response) = $this->apiV1VirtualTerminalQueryPostWithHttpInfo($account, $password, $body);
        return $response;
    }

    public function apiV1VirtualTerminalQueryPostWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\QueryTransaction';
        $request = $this->apiV1VirtualTerminalQueryPostRequest($account, $password, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\QueryTransaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    public function apiV1VirtualTerminalQueryPostAsync($account, $password, $body = null)
    {
        return $this->apiV1VirtualTerminalQueryPostAsyncWithHttpInfo($account, $password, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VirtualTerminalQueryPostAsyncWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\QueryTransaction';
        $request = $this->apiV1VirtualTerminalQueryPostRequest($account, $password, $body);

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

    public function apiV1VirtualTerminalSubmitCheckPost($account, $password, $body = null)
    {
        list($response) = $this->apiV1VirtualTerminalSubmitCheckPostWithHttpInfo($account, $password, $body);
        return $response;
    }

    public function apiV1VirtualTerminalSubmitCheckPostWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\CheckTransaction';
        $request = $this->apiV1VirtualTerminalSubmitCheckPostRequest($account, $password, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\CheckTransaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    public function apiV1VirtualTerminalSubmitCheckPostAsync($account, $password, $body = null)
    {
        return $this->apiV1VirtualTerminalSubmitCheckPostAsyncWithHttpInfo($account, $password, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VirtualTerminalSubmitCheckPostAsyncWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\CheckTransaction';
        $request = $this->apiV1VirtualTerminalSubmitCheckPostRequest($account, $password, $body);

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

    public function apiV1VirtualTerminalSubmitPost($account, $password, $body = null)
    {
        list($response) = $this->apiV1VirtualTerminalSubmitPostWithHttpInfo($account, $password, $body);
        return $response;
    }

    public function apiV1VirtualTerminalSubmitPostWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Transaction';
        $request = $this->apiV1VirtualTerminalSubmitPostRequest($account, $password, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Transaction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    public function apiV1VirtualTerminalSubmitPostAsync($account, $password, $body = null)
    {
        return $this->apiV1VirtualTerminalSubmitPostAsyncWithHttpInfo($account, $password, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VirtualTerminalSubmitPostAsyncWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Transaction';
        $request = $this->apiV1VirtualTerminalSubmitPostRequest($account, $password, $body);

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

    protected function apiV1VirtualTerminalSubmitPostRequest($account, $password, $body = null)
    {
        // verify the required parameter 'account' is set
        if ($account === null || (is_array($account) && count($account) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account when calling apiV1VirtualTerminalSubmitPost'
            );
        }
        // verify the required parameter 'password' is set
        if ($password === null || (is_array($password) && count($password) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $password when calling apiV1VirtualTerminalSubmitPost'
            );
        }

        $resourcePath = '/api/v1/VirtualTerminal/Submit';
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

    public function apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPost($account, $password, $transaction_id, $body = null)
    {
        list($response) = $this->apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostWithHttpInfo($account, $password, $transaction_id, $body);
        return $response;
    }

    public function apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostWithHttpInfo($account, $password, $transaction_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostRequest($account, $password, $transaction_id, $body);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\Response',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    public function apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostAsync($account, $password, $transaction_id, $body = null)
    {
        return $this->apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostAsyncWithHttpInfo($account, $password, $transaction_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostAsyncWithHttpInfo($account, $password, $transaction_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VirtualTerminalUpdateTransactionInfoTransactionIDPostRequest($account, $password, $transaction_id, $body);

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

    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}

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

class VaultApi
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

    public function apiV1VaultDeleteVaultCardByIDVaultCardIDPostAsync($vault_card_id, $account, $password)
    {
        return $this->apiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo($vault_card_id, $account, $password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultDeleteVaultCardByIDVaultCardIDPostAsyncWithHttpInfo($vault_card_id, $account, $password)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VaultDeleteVaultCardByIDVaultCardIDPostRequest($vault_card_id, $account, $password);

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

    public function apiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsync($vault_check_id, $account, $password)
    {
        return $this->apiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo($vault_check_id, $account, $password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultDeleteVaultCheckByIDVaultCheckIDPostAsyncWithHttpInfo($vault_check_id, $account, $password)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VaultDeleteVaultCheckByIDVaultCheckIDPostRequest($vault_check_id, $account, $password);

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

    public function apiV1VaultGetVaultRecordReferenceGetAsync($reference, $account, $password)
    {
        return $this->apiV1VaultGetVaultRecordReferenceGetAsyncWithHttpInfo($reference, $account, $password)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultGetVaultRecordReferenceGetAsyncWithHttpInfo($reference, $account, $password)
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

    public function apiV1VaultSaveVaultCardVaultIDPostAsync($account, $password, $vault_id, $body = null)
    {
        return $this->apiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo($account, $password, $vault_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultSaveVaultCardVaultIDPostAsyncWithHttpInfo($account, $password, $vault_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Response';
        $request = $this->apiV1VaultSaveVaultCardVaultIDPostRequest($account, $password, $vault_id, $body);

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

    public function apiV1VaultSaveVaultPostAsync($account, $password, $body = null)
    {
        return $this->apiV1VaultSaveVaultPostAsyncWithHttpInfo($account, $password, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultSaveVaultPostAsyncWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Response[]';
        $request = $this->apiV1VaultSaveVaultPostRequest($account, $password, $body);

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

    public function apiV1VaultSearchVaultPostAsync($account, $password, $body = null)
    {
        return $this->apiV1VaultSearchVaultPostAsyncWithHttpInfo($account, $password, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultSearchVaultPostAsyncWithHttpInfo($account, $password, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Record[]';
        $request = $this->apiV1VaultSearchVaultPostRequest($account, $password, $body);

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

    public function apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsync($account, $password, $vault_check_id, $body = null)
    {
        return $this->apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo($account, $password, $vault_check_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostAsyncWithHttpInfo($account, $password, $vault_check_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\CheckTransaction';
        $request = $this->apiV1VaultSubmitCheckWithVaultCheckIDVaultCheckIDPostRequest($account, $password, $vault_check_id, $body);

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

    public function apiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsync($account, $password, $vault_card_id, $body = null)
    {
        return $this->apiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo($account, $password, $vault_card_id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    public function apiV1VaultSubmitWithVaultCardIDVaultCardIDPostAsyncWithHttpInfo($account, $password, $vault_card_id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\Transaction';
        $request = $this->apiV1VaultSubmitWithVaultCardIDVaultCardIDPostRequest($account, $password, $vault_card_id, $body);

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

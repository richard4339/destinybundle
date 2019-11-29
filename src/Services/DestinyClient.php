<?php


namespace Destiny\ClientBundle\Services;


use Destiny\ClientBundle\Enums\GroupType;
use Destiny\ClientBundle\Exceptions\ApiKeyException;
use Destiny\ClientBundle\Objects\GlobalAlert;
use Destiny\ClientBundle\Objects\GroupMember;
use Destiny\ClientBundle\Objects\Responses\BaseGlobalAlertsResponse;
use Destiny\ClientBundle\Objects\Responses\BaseGroupMemberResponse;
use Destiny\ClientBundle\Objects\Responses\BaseGroupResponse;
use Destiny\ClientBundle\Objects\GroupResponse;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class DestinyClient
 * @package Destiny\ClientBundle\Services
 */
class DestinyClient
{
    /**
     *
     */
    const METHOD_GET = 'GET';
    /**
     *
     */
    const METHOD_POST = 'POST';
    /**
     * @var string Bungie API uri/host
     */
    protected $uri = "https://www.bungie.net/Platform";
    /**
     * @var string Destiny API Key
     */
    protected $apiKey;
    /**
     * @var string Destiny Application Client ID
     * @link https://www.bungie.net/en/Application/
     */
    protected $clientID;
    /**
     * @var string Destiny Application Client Secret (for confidential only)
     * @link https://www.bungie.net/en/Application/
     */
    protected $clientSecret;
    /**
     * @var string Destiny OAuth Token
     */
    protected $oauthToken;
    /**
     * @var bool Automatically retry the API call if it errors out?
     */
    protected $retryOnRateLimit = true;
    /**
     * @var int Number of times to re-attempt an API call
     */
    protected $maxReplyAttempts = 5;
    /**
     * Used for User-Agent field
     * @var string
     */
    protected $appName;
    /**
     * Used for User-Agent field
     * @var string
     */
    protected $appVersion;
    /**
     * Used for User-Agent field
     * @var string
     */
    protected $appIDNumber;
    /**
     * Used for User-Agent field
     * Do not include http:// or similar, ex. www.sample.net
     * @var string
     */
    protected $appURL;
    /**
     * Used for User-Agent field
     * @var string
     */
    protected $appEmail;
    /**
     * @var HttpClientInterface
     */
    protected $httpClient;
    /**
     * @var SerializerInterface
     */
    protected $serializer;
    /**
     * Has $this->initialize() been run?
     * @var bool
     */
    protected $initialized = false;

    /**
     * DestinyClient constructor.
     * @param string $clientID
     * @param string $clientSecret
     * @param string $apiKey
     * @param string $appName
     * @param string $appVersion
     * @param string $appIDNumber
     * @param string $appURL
     * @param string $appEmail
     * @param SerializerInterface $serializer
     */
    public function __construct(string $clientID, string $clientSecret, string $apiKey, string $appName, string $appVersion, string $appIDNumber, string $appURL, string $appEmail, SerializerInterface $serializer)
    {
        $this->clientID = $clientID;
        $this->clientSecret = $clientSecret;
        $this->apiKey = $apiKey;
        $this->appName = $appName;
        $this->appVersion = $appVersion;
        $this->appIDNumber = $appIDNumber;
        $this->appURL = $appURL;
        $this->appEmail = $appEmail;
        $this->serializer = $serializer;
    }

    /**
     * @param HttpClientInterface $httpClient
     * @return DestinyClient
     */
    public function setHttpClient(HttpClientInterface $httpClient): self
    {
        $this->httpClient = $httpClient;
        return $this;
    }

    /**
     * @param int|string $group
     * @param int $groupType
     *
     * @return GroupResponse|null
     *
     * @throws ApiKeyException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function getGroup($group, $groupType = GroupType::CLAN)
    {
        if (is_integer($group)) {
            $response = $this->request($this->buildRequestString('GroupV2', [$group]));
        } else {
            $response = $this->request($this->buildRequestString('GroupV2', ['Name', $group, $groupType]));
        }

        /** @var BaseGroupResponse $baseResponse */
        $baseResponse = $this->serializer->deserialize($response->getContent(), BaseGroupResponse::class, 'json');
        return $baseResponse->getResponse();
    }

    /**
     * @param string $url
     * @param string $method
     * @param mixed|null $body
     * @param array|null $headers
     *
     * @return \Symfony\Contracts\HttpClient\ResponseInterface
     *
     * @throws ApiKeyException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    protected function request(string $url, string $method = 'GET', $body = null, array $headers = null)
    {
        if (!$this->initialized) {
            $this->initialize();
        }
        $params = [];

        if (!empty($headers)) {
            $params['headers'] = $headers;
        }

        $method = strtoupper($method);
        if ($method != 'POST') {
            $method = 'GET';
        }
        if (!empty($body)) {
            if (is_array($body)) {
                $params['json'] = $body;
            } else {
                $params['body'] = $body;
            }
        }

        $response = $this->httpClient->request($method, $url, $params);

        switch ($response->getStatusCode()) {
            case 200:
                return $response;
                break;
            default:
                $response->getContent(true);
                break;
        }
    }

    /**
     * @throws ApiKeyException
     * @link https://github.com/symfony/symfony/blob/4.3/src/Symfony/Contracts/HttpClient/HttpClientInterface.php
     */
    protected function initialize()
    {
        if (empty($this->apiKey)) {
            throw new ApiKeyException("API Key is not set");
        }

        $params = [];
        $headers = [];
        if (!empty($this->headers)) {
            $headers = $this->headers;
        }
        $headers['User-Agent'] = sprintf('%s/%s AppId/%s (+%s;%s)', $this->appName ?? '', $this->appVersion ?? '',
            $this->appIDNumber ?? '', $this->appURL ?? '', $this->appEmail ?? '');
        $headers['X-Api-Key'] = $this->apiKey;

        if (!empty($headers)) {
            $params['headers'] = $headers;
        }
        if (!empty($this->bearerToken)) {
            $params['auth_bearer'] = $this->bearerToken;
        }

        //$params['verify_peer'] = false;
        //$params['verify_host'] = false;

        $this->httpClient = HttpClient::createForBaseUri($this->uri, $params);
        $this->postCreateHttpClient();

        $this->initialized = true;
    }

    /**
     * Overloadable for inherited classes
     */
    protected function postCreateHttpClient()
    {

    }

    /**
     * @param string $endpoint
     * @param array|null $uriParams
     * @param array|null $queryParams
     * @return string
     */
    protected function buildRequestString($endpoint, array $uriParams = null, array $queryParams = null)
    {
        $query = '';
        if (!empty($queryParams)) {
            $query = http_build_query($queryParams);
        }
        $url = '';
        if (!empty($uriParams)) {
            $url = sprintf("%s/%s/%s/?%s", $this->uri, $endpoint, implode("/", $uriParams), $query);
        } else {
            $url = sprintf("%s/%s/?%s", $this->uri, $endpoint, $query);
        }
        $url = rtrim($url, '?');
        return $url;
    }

    /**
     * Gets any active global alert for display in the forum banners, help pages, etc. Usually used for DOC alerts.
     *
     * @param bool $includeStreaming Determines whether Streaming Alerts are included in results
     * @return GlobalAlert[]|null
     *
     * @throws ApiKeyException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     *
     * @link https://bungie-net.github.io/multi/operation_get_-GetGlobalAlerts.html#operation_get_-GetGlobalAlerts
     *
     * @todo Needs to support includeStreaming, currently ignores the parameter. We need valid output for when includestreaming returns something to write this properly. Also _buildRequestString converts the true/false to integers which Bungie will not accept.
     */
    public function getGlobalAlerts(bool $includeStreaming = false)
    {

        $includeStreaming = false;

        $queryParms = [];
        if ($includeStreaming) {
            $queryParms['includestreaming'] = $includeStreaming;
        }
        $response = $this->request($this->buildRequestString('GlobalAlerts', [],
            $queryParms));

        /** @var BaseGlobalAlertsResponse $baseResponse */
        $baseResponse = $this->serializer->deserialize($response->getContent(), BaseGlobalAlertsResponse::class, 'json');
        return $baseResponse->getResponse();
    }


    /**
     * @param $clanID
     * @param int $currentPage
     *
     * @return GroupMember[]|null
     *
     * @throws ApiKeyException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     *
     * @link https://bungie-net.github.io/multi/operation_get_GroupV2-GetMembersOfGroup.html#operation_get_GroupV2-GetMembersOfGroup
     */
    public function getClanMembers($clanID, $currentPage = 1)
    {
        $response = $this->request($this->buildRequestString('GroupV2', [$clanID, 'Members'],
            ['currentPage' => $currentPage]));

        /** @var BaseGroupMemberResponse $baseResponse */
        $baseResponse = $this->serializer->deserialize($response->getContent(), BaseGroupMemberResponse::class, 'json');
        return $baseResponse->getResponse()->getResults();
    }

    /**
     * @param $clanID
     * @param int $currentPage
     *
     * @return GroupMember[]|null
     *
     * @throws ApiKeyException
     * @throws \Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     *
     * @link https://bungie-net.github.io/multi/operation_get_GroupV2-GetMembersOfGroup.html#operation_get_GroupV2-GetMembersOfGroup
     */
    public function getClanAdminsAndFounder($clanID, $currentPage = 1)
    {
        $response = $this->request($this->buildRequestString('GroupV2', [$clanID, 'AdminsAndFounder'],
            ['currentPage' => $currentPage]));

        /** @var BaseGroupMemberResponse $baseResponse */
        $baseResponse = $this->serializer->deserialize($response->getContent(), BaseGroupMemberResponse::class, 'json');
        return $baseResponse->getResponse()->getResults();
    }

}
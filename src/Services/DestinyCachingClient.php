<?php


namespace Destiny\ClientBundle\Services;


use Symfony\Component\HttpClient\CachingHttpClient;
use Symfony\Component\HttpKernel\HttpCache\Store;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class DestinyCachingClient
 * @package Destiny\ClientBundle\Services
 */
class DestinyCachingClient extends DestinyClient
{
    /**
     * @var string
     */
    protected $cacheLocation;

    /**
     * @var array
     */
    protected $httpCacheOptions;

    /**
     * DestinyCachingClient constructor.
     * @param string $clientID
     * @param string $clientSecret
     * @param string $apiKey
     * @param string $appName
     * @param string $appVersion
     * @param string $appIDNumber
     * @param string $appURL
     * @param string $appEmail
     * @param SerializerInterface $serializer
     * @param string $cacheLocation
     */
    public function __construct(string $clientID, string $clientSecret, string $apiKey, string $appName, string $appVersion, string $appIDNumber, string $appURL, string $appEmail, SerializerInterface $serializer, string $cacheLocation)
    {
        parent::__construct($clientID, $clientSecret, $apiKey, $appName, $appVersion, $appIDNumber, $appURL, $appEmail, $serializer);
        $this->cacheLocation = $cacheLocation;

        $this->setHttpCacheOptions([
            'default_ttl' => 600 // 10 minutes
        ]);
    }

    /**
     * @param array $httpCacheOptions
     * @return DestinyCachingClient
     */
    public function setHttpCacheOptions(array $httpCacheOptions): self
    {
        $this->httpCacheOptions = $httpCacheOptions;
        return $this;
    }

    /**
     * Converts the existing HttpClient into a CachingHttpClient
     */
    protected function postCreateHttpClient()
    {
        parent::postCreateHttpClient();

        $store = new Store($this->cacheLocation);

        $this->httpClient = new CachingHttpClient($this->httpClient, $store, $this->httpCacheOptions);
    }
}
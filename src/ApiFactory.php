<?php
/**
 * @link https://github.com/springimport/magento2-api-v1
 * @license MIT
 */

namespace springimport\magento2\apiv1;

use GuzzleHttp\Client,
    GuzzleHttp\HandlerStack,
    GuzzleHttp\Subscriber\Oauth\Oauth1;

/**
 * Factory for api client
 */
class ApiFactory
{
    /**
     * @var Configuration
     */
    protected $configuration;

    /**
     * Constructor.
     *
     * @param Configuration $configuration
     */
    public function __construct(Configuration $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * Get new api client.
     *
     * @return Client
     */
    public function getApiClient()
    {
        $stack = HandlerStack::create();

        $middleware = new Oauth1([
            'consumer_key' => $this->configuration->getConsumerKey(),
            'consumer_secret' => $this->configuration->getConsumerSecret(),
            'token' => $this->configuration->getToken(),
            'token_secret' => $this->configuration->getTokenSecret()
        ]);
        $stack->push($middleware);

        $client = new Client([
            'base_uri' => $this->configuration->getBaseUri(),
            'handler' => $stack,
            'auth' => 'oauth',
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);

        return $client;
    }

    /**
     * Get the configuration.
     *
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}

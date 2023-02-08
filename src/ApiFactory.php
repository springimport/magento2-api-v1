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
     * @var ConfigurationInterface
     */
    protected $configuration;

    /**
     * Constructor.
     *
     * @param ConfigurationInterface $configuration
     */
    public function __construct(ConfigurationInterface $configuration)
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
        $oauth_params = [
          'consumer_key' => $this->configuration->getConsumerKey(),
          'consumer_secret' => $this->configuration->getConsumerSecret(),
          'token' => $this->configuration->getToken(),
          'token_secret' => $this->configuration->getTokenSecret(),
        ];
        // Check if signature method is set.
        $signature_method = $this->configuration->getSignatureMethod();
        if ($signature_method) {
          $oauth_params['signature_method'] = $signature_method;
        }

        $middleware = new Oauth1($oauth_params);
        $stack->push($middleware);

        $client = new Client([
            'base_uri' => $this->configuration->getBaseUri(),
            'handler' => $stack,
            'auth' => 'oauth',
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'http_errors' => $this->configuration->getHttpErrors(),
        ]);

        return $client;
    }

    /**
     * Get the configuration.
     *
     * @return ConfigurationInterface
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }
}

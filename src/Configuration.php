<?php
/**
 * @link https://github.com/springimport/magento2-api-v1
 * @license MIT
 */

namespace springimport\magento2\apiv1;

/**
 * Configuration for factory
 */
class Configuration
{
    /**
     * @var string consumer key
     */
    protected $consumerKey;

    /**
     * @var string consumer secret
     */
    protected $consumerSecret;

    /**
     * @var string token
     */
    protected $token;

    /**
     * @var string token secret
     */
    protected $tokenSecret;

    /**
     * @var string base uri
     */
    protected $baseUri;

    /**
     * Assigns consumer key.
     *
     * @param string $key
     */
    public function setConsumerKey($key)
    {
        $this->consumerKey = $key;
    }

    /**
     * Returns consumer key.
     *
     * @return string consumer key
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Assigns consumer secret.
     *
     * @param string $secret
     */
    public function setConsumerSecret($secret)
    {
        $this->consumerSecret = $secret;
    }

    /**
     * Returns consumer secret.
     *
     * @return string consumer secret
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * Assigns token.
     *
     * @param string $token
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Returns token.
     *
     * @return string token
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Assigns token secret.
     *
     * @param string $tokenSecret
     */
    public function setTokenSecret($tokenSecret)
    {
        $this->tokenSecret = $tokenSecret;
    }

    /**
     * Returns token secret.
     *
     * @return string token secret
     */
    public function getTokenSecret()
    {
        return $this->tokenSecret;
    }

    /**
     * Assigns base uri.
     *
     * @param string $baseUri
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
    }

    /**
     * Returns base uri.
     *
     * @return string base uri
     */
    public function getBaseUri()
    {
        return $this->baseUri;
    }
}

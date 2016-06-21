<?php

namespace springimport\magento2\apiv1;

/**
 * Configuration Class
 * PHP version 5.4
 *
 * @category Class
 * @package  springimport\magento2\apiv1
 */
class Configuration
{
    protected $consumerKey;
    protected $consumerSecret;
    protected $token;
    protected $tokenSecret;
    protected $baseUri;

    public function setConsumerKey($key)
    {
        $this->consumerKey = $key;
    }

    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    public function setConsumerSecret($secret)
    {
        $this->consumerSecret = $secret;
    }

    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setTokenSecret($tokenSecret)
    {
        $this->tokenSecret = $tokenSecret;
    }

    public function getTokenSecret()
    {
        return $this->tokenSecret;
    }

    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
    }

    public function getBaseUri()
    {
        return $this->baseUri;
    }
}

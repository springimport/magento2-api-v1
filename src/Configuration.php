<?php
/**
 * @link https://github.com/springimport/magento2-api-v1
 * @license MIT
 */

namespace springimport\magento2\apiv1;

/**
 * Configuration for factory.
 *
 * @implements ConfigurationInterface
 */
class Configuration implements ConfigurationInterface
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
     * @var string signature method
     */
    protected $signatureMethod;

  /**
     * @var string base uri
     */
    protected $baseUri;

    /**
     * @var http errors
     */
    protected $httpErrors;

    /**
     * @inheritdoc
     */
    public function setConsumerKey($key)
    {
        $this->consumerKey = $key;
    }

    /**
     * @inheritdoc
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * @inheritdoc
     */
    public function setConsumerSecret($secret)
    {
        $this->consumerSecret = $secret;
    }

    /**
     * @inheritdoc
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * @inheritdoc
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * @inheritdoc
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @inheritdoc
     */
    public function setTokenSecret($tokenSecret)
    {
        $this->tokenSecret = $tokenSecret;
    }

    /**
     * @inheritdoc
     */
    public function getTokenSecret()
    {
        return $this->tokenSecret;
    }

    /**
     * @inheritdoc
     */
    public function setSignatureMethod($signatureMethod)
    {
      return $this->signatureMethod = $signatureMethod;
    }

    /**
     * @inheritdoc
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

  /**
     * @inheritdoc
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
    }

    /**
     * @inheritdoc
     */
    public function getBaseUri()
    {
        return $this->baseUri;
    }

    /**
     * @inheritdoc
     */
    public function setHttpErrors($httpErrors)
    {
        $this->httpErrors = $httpErrors;
    }

    /**
     * @inheritdoc
     */
    public function getHttpErrors()
    {
        return $this->httpErrors;
    }
}

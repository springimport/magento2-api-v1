<?php
/**
 * @link https://github.com/springimport/magento2-api-v1
 * @license MIT
 */

namespace springimport\magento2\apiv1;

/**
 * Configuration interface for factory
 */
interface ConfigurationInterface
{

    /**
     * Assigns consumer key.
     *
     * @param string $key
     */
    public function setConsumerKey($key);

    /**
     * Returns consumer key.
     *
     * @return string consumer key
     */
    public function getConsumerKey();

    /**
     * Assigns consumer secret.
     *
     * @param string $secret
     */
    public function setConsumerSecret($secret);

    /**
     * Returns consumer secret.
     *
     * @return string consumer secret
     */
    public function getConsumerSecret();

    /**
     * Assigns token.
     *
     * @param string $token
     */
    public function setToken($token);

    /**
     * Returns token.
     *
     * @return string token
     */
    public function getToken();

    /**
     * Assigns token secret.
     *
     * @param string $tokenSecret
     */
    public function setTokenSecret($tokenSecret);

    /**
     * Returns token secret.
     *
     * @return string token secret
     */
    public function getTokenSecret();

    /**
     * Assign signature method.
     *
     * @param  string $signatureMethod
     */
    public function setSignatureMethod($signatureMethod);

    /**
     * Returns signature method.
     *
     * @return string signature method
     */
    public function getSignatureMethod();

    /**
     * Assigns base uri.
     *
     * @param string $baseUri
     */
    public function setBaseUri($baseUri);

    /**
     * Returns base uri.
     *
     * @return string base uri
     */
    public function getBaseUri();

    /**
     * Assigns http errors.
     *
     * @param bool $httpErrors
     */
    public function setHttpErrors($httpErrors);

    /**
     * Returns http errors.
     *
     * @return bool http errors
     */
    public function getHttpErrors();
}

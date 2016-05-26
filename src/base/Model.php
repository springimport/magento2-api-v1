<?php

namespace springimport\magento2apiv1\base;

use GuzzleHttp\Client;

class Model extends Client
{

    public $namespace = '';

    public function get($uri, array $options = [])
    {
        return $this->callMethod(__FUNCTION__, $uri, $options);
    }

    public function post($uri, array $options = [])
    {
        return $this->callMethod(__FUNCTION__, $uri, $options);
    }

    public function put($uri, array $options = [])
    {
        return $this->callMethod(__FUNCTION__, $uri, $options);
    }

    public function patch($uri, array $options = [])
    {
        return $this->callMethod(__FUNCTION__, $uri, $options);
    }

    public function delete($uri, array $options = [])
    {
        return $this->callMethod(__FUNCTION__, $uri, $options);
    }

    public function head($uri, array $options = [])
    {
        return $this->callMethod(__FUNCTION__, $uri, $options);
    }

    public function options($uri, array $options = [])
    {
        return $this->callMethod(__FUNCTION__, $uri, $options);
    }

    private function callMethod($method, $uri, array $options = [])
    {
        $uri = $this->namespace . $uri;

        return parent::$method($uri, $options);
    }

}

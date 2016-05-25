<?php

namespace springimport\magento2apiv1\base;

use GuzzleHttp\Client;
//use springimport\magento2apiv1\Config;

class Model extends Client
{

    const TOKEN_TEMPLATE = 'Bearer %s';
    private $configList;
    public $namespace = '';

    public function __construct(Config $config)
    {
        $this->configList = $config;
        
        parent::__construct([
            'base_uri' => $this->configList->baseUri,
            'headers' => [
                //'Content-Type' => $this->configList->contentType,
                'Authorization' => sprintf(self::TOKEN_TEMPLATE, $this->configList->token),
            ]
        ]);
    }
    
    public function __call($method, array $args)
    {
        $args[0] = $this->namespace . $args[0];
        
        parent::__call($method, $args);
    }

}

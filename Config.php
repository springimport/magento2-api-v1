<?php

namespace springimport\magento2apiv1;

use springimport\magento2apiv1\base\Config as BaseConfig;

class Config extends BaseConfig
{

    public $baseUri;
    public $contentType = 'application/json';
    public $token;
    private $required = [
        'baseUrl',
    ];

}

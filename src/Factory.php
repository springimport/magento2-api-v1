<?php

namespace springimport\magento2apiv1;

use springimport\magento2apiv1\base\Exception;

class Factory
{

    const TOKEN_TEMPLATE = 'Bearer %s';

    public $modelsPath = 'springimport\magento2apiv1\models\\';
    protected $config;

    public function __construct(array $config)
    {
        $this->setConfig($config);
    }

    public function model($name)
    {
        $className = $this->modelsPath . $name;

        if (class_exists($className)) {
            $config = [
                'base_uri' => $this->config['baseUri'],
                'headers' => [
                    'Content-Type' => $this->config['contentType'],
                ],
                'usertype' => $this->config['usertype'],
                'username' => $this->config['username'],
                'password' => $this->config['password'],
            ];
            
            if ($this->config['token']) {
                $config['headers']['Authorization'] = sprintf(self::TOKEN_TEMPLATE, $this->config['token']);
            }
            
            return new $className($config);
        }

        throw new Exception("Rest model \"$className\" not found.");
    }

    public function setConfig($config)
    {
        $this->config = $config;
    }

}

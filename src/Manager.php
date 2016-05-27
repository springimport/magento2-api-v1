<?php

namespace springimport\magento2apiv1;

use springimport\magento2apiv1\base\Exception;

class Manager
{

    protected $config;
    protected $factory;

    public function __construct(array $config)
    {
        $config = array_merge($this->getDefaultConfig(), $config);

        $this->setConfig($config);
    }

    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    public function getFactory()
    {
        if (!$this->factory instanceof Factory) {
            $this->factory = new Factory($this->config);
        }

        return $this->factory;
    }

    public function auth()
    {
        $factory = $this->getFactory();

        if (!isset($this->config['token']) || $this->config['token'] == '') {
            // getting new token
            $integrationModel = $factory->model('Integration');

            $result = $integrationModel->getToken();

            if ($result) {
                $token = str_replace('"', "", $result);

                $this->config['token'] = $token;

                $factory->setConfig($config);

                return $token;
            }
        }
    }

    public function getDefaultConfig()
    {
        return [
            'contentType' => 'application/json',
        ];
    }

}

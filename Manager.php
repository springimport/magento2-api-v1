<?php

namespace springimport\magento2apiv1;

use springimport\magento2apiv1\base\Exception;

class Manager
{

    public $modelsPath = 'springimport\magento2apiv1\models\\';
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
        
        $this->validate();
        
        $this->auth();
    }

    public function model($name)
    {
        $className = $this->modelsPath . $name;

        if (class_exists($className)) {
            return new $className($this->config);
        }

        throw new Exception("Rest model \"$className\" not found.");
    }
    
    private function validate()
    {
        if (!$this->config->validate()) {
            throw new Exception('Not given the required parameters for rest.');
        }
    }

    private function auth()
    {
        if (is_null($this->config->token)) {
            // getting new token
            
            $integrationModel = $this->model('Integration');
            
            $integrationModel->post('/admin/token', [
                'auth' => [
                    'username' => '',
                    'password' => '',
                ]
            ]);
        }
    }

}

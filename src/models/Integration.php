<?php

namespace springimport\magento2apiv1\models;

class Integration extends \springimport\magento2apiv1\base\Model
{

    public $namespace = 'integration';
    
    public function getToken()
    {
        $config = $this->getConfig();
        
        try {
            $this->post('/' . $this->getConfig('usertype') . '/token', [
                'query' => [
                    'username' => $this->getConfig('username'),
                    'password' => $this->getConfig('password'),
                ]
            ]);
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                return Psr7\str($e->getResponse());
            }
        }
        
        return false;
    }
    
}

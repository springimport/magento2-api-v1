<?php

namespace springimport\magento2apiv1\models;

use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class Integration extends \springimport\magento2apiv1\base\Model
{

    public $namespace = 'integration';
    
    public function getToken()
    {
        $config = $this->getConfig();
        
        try {
            $test = $this->post('/' . $this->getConfig('usertype') . '/token', [
                'query' => [
                    'username' => $this->getConfig('username'),
                    'password' => $this->getConfig('password'),
                ]
            ]);
            
            return $test->getBody();
        } catch (RequestException $e) {
            if ($e->hasResponse()) {
                //return Psr7\str($e->getResponse());
            }
        }
        
        return false;
    }
    
}

<?php

namespace springimport\magento2apiv1;

class BaseModel
{

    private $rest;

    public function __construct($rest)
    {
        $this->rest = $rest;
    }

    public function __call($name, $arguments)
    {
        
    }

}

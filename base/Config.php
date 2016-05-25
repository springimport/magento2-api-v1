<?php

namespace springimport\magento2apiv1\base;

class Config
{

    private $required = [];

    public function validate()
    {
        if ($this->required) {
            foreach ($this->required as $rule) {
                if (!isset($this->$rule) || is_null($this->$rule)) {
                    return false;
                }
            }
        }
        
        return true;
    }

}

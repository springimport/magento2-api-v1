<?php

namespace springimport\magento2apiv1\base;

class Config
{

    const REQUIRED = 'required';

    private $fields;
    
    public function __construct(array $params)
    {
        $this->fields = $params;
    }

    protected function rules()
    {
        return [];
    }

    public function validate()
    {
        if ($this->rules()) {
            foreach ($this->rules() as $rule) {
                if (!count($rule)) {
                    continue;
                }

                if (is_array($rule[0])) {
                    $fields = $rule[0];
                } else {
                    $fields = [$rule[0]];
                }

                foreach ($fields as $field) {
                    if ($rule[1] == self::REQUIRED && !isset($this->fields[$field])) {
                        return false;
                    }
                }
            }
        }

        return true;
    }
    
    public function __set($name, $value)
    {
        $this->fields[$name] = $value;
    }
    
    public function __get($name)
    {
        if (isset($this->fields[$name])) {
            return $this->fields[$name];
        }
    }

}

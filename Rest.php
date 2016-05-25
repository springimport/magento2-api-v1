<?php

namespace springimport\magento2apiv1;

class Rest
{

    //$modelsPath = 'springimport\magento2apiv1\models\\';

    public function model($name)
    {
        $className = $this->modelsPath . $name;

        if (class_exists($class_name)) {
            return new $className(self);
        }

        throw new Exception('Rest model not found.');
    }

}

<?php

namespace springimport\magento2apiv1;

class Config extends \springimport\magento2apiv1\base\Config
{

    public function rules()
    {
        return [
            [['baseUri', 'usertype', 'username', 'password'], 'required'],
            ['token']
        ];
    }

}

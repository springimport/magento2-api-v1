Rest client for Magento 2
======================
Base Rest API v1

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```
php composer.phar require --prefer-dist springimport/magento2-api-v1 "*"
```
or
```
"springimport/magento2-api-v1": "*"
```


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php

use springimport\magento2\apiv1\Configuration,
    springimport\magento2\apiv1\ApiFactory;

class ApiClient
{

    public static function get()
    {
        $configuration = new Configuration;
        $configuration->setBaseUri('baseUri');
        $configuration->setConsumerKey('consumerKey');
        $configuration->setConsumerSecret('consumerSecret');
        $configuration->setToken('accessToken');
        $configuration->setTokenSecret('tokenSecret');

        return new ApiFactory($configuration);
    }
}
```
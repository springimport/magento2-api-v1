Rest client for Magento 2
======================
Base Rest API v1

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist springimport/magento2-api-v1 "*"
```

or add

```
"springimport/magento2-api-v1": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
...

use yii;
use springimport\magento2\apiv1\Configuration,
    springimport\magento2\apiv1\ApiFactory;

class ApiClient
{

    public static function get()
    {
        $configuration = new Configuration;
        $configuration->setBaseUri(Yii::$app->params['magento2Api']['baseUri']);
        $configuration->setConsumerKey(Yii::$app->params['magento2Api']['consumerKey']);
        $configuration->setConsumerSecret(Yii::$app->params['magento2Api']['consumerSecret']);
        $configuration->setToken(Yii::$app->params['magento2Api']['accessToken']);
        $configuration->setTokenSecret(Yii::$app->params['magento2Api']['tokenSecret']);

        $apiClientFactory = new ApiFactory($configuration);

        return $apiClientFactory->getApiClient();
    }
}
```
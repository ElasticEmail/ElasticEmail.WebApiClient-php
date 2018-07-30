**This library allows you to quickly and easily use the Elastic Email Web API v2 via PHP.**

# Prerequisites #
* [An Elastic Email account](https://elasticemail.com/account/)

# Instalation #
```
composer require elastic-email/web-api-client
```
# API #
API documentation you can find on [Elastic Email website](https://api.elasticemail.com/public/help).

# Examples #

##### Load account #####
```
    $loader = require_once(__DIR__.'/../vendor/autoload.php');

    $configuration = new \ElasticEmailClient\ApiConfiguration([
        'apiUrl' => 'https://api.elasticemail.com/v2/',
        'apiKey' => 'yourApiKey'
    ]);

    $client = new \ElasticEmailClient\ElasticClient($configuration);

    $clientData = $client->Account->Load();
```
##### Send email #####
```
    $loader = require_once(__DIR__.'/../vendor/autoload.php');

    $configuration = new \ElasticEmailClient\ApiConfiguration([
        'apiUrl' => 'https://api.elasticemail.com/v2/',
        'apiKey' => 'yourApiKey'
    ]);

    $client = new \ElasticEmailClient\ElasticClient($configuration);

    $client->Email->Send(
        "from.example@bar.com",
        "John Doe",
        "sender.example@baz.com",
        "Don John",
        null,
        null,
        "reply.to@foo.com",
        "ReplyTo Name",
        "to@baf.com",
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        null,
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "utf-8"
    );
```

# About #
ElasticEmail.WebApiClient is guided and supported by the ElasticEmail Dev Team.

ElasticEmail.WebApiClient is maintained and funded by Elastic Email Inc. The names and logos for ElasticEmail.WebApiClient are trademarks of Elastic Email Inc.

![logo](https://elasticemail.com/files/ee_200x200.png)
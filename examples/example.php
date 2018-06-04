<?php
    /**
     * Created by PhpStorm.
     * User: pawelpodolak
     * Date: 30.05.2018
     * Time: 13:52
     */

    $loader = require_once(__DIR__.'/../vendor/autoload.php');

    $configuration = new \ElasticEmailClient\ApiConfiguration([
        'apiUrl' => 'https://api.elasticemail.com/v2/',
        'apiKey' => 'yourApiKey'
    ]);

    $client = new \ElasticEmailClient\ElasticClient($configuration);

    $clientData = $client->Account->Load();
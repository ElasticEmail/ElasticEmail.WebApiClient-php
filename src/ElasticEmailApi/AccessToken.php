<?php
	namespace ElasticEmailApi; 

class AccessToken extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Add new AccessToken with appropriate AccessLevel (permission).
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tokenName Name of the AccessToken for ease of reference.
     * @param \ElasticEmailEnums\AccessLevel $accessLevel Level of access (permission) to our API.
     * @return string
     */
    public function Add($tokenName, $accessLevel) {
        return $this->sendRequest('accesstoken/add', array(
                    'tokenName' => $tokenName,
                    'accessLevel' => $accessLevel));
    }

    /**
     * Permanently delete AccessToken from your Account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tokenName Name of the AccessToken for ease of reference.
     */
    public function EEDelete($tokenName) {
        return $this->sendRequest('accesstoken/delete', array(
                    'tokenName' => $tokenName));
    }

    /**
     * List all the AccessToken's in your Account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\AccessToken>
     */
    public function EEList() {
        return $this->sendRequest('accesstoken/list', array());
    }

    /**
     * Update AccessToken with a new name or AccessLevel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tokenName Name of the AccessToken for ease of reference.
     * @param \ElasticEmailEnums\AccessLevel $accessLevel Level of access (permission) to our API.
     * @param string $newTokenName New name of the AccessToken.
     */
    public function Update($tokenName, $accessLevel, $newTokenName = null) {
        return $this->sendRequest('accesstoken/update', array(
                    'tokenName' => $tokenName,
                    'accessLevel' => $accessLevel,
                    'newTokenName' => $newTokenName));
    }

}

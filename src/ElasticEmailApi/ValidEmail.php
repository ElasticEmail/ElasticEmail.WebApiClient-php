<?php
	namespace ElasticEmailApi; 

class ValidEmail extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Add new email to account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $emailAddress 
     * @param string $returnUrl URL to navigate to after Account creation
     * @return \ElasticEmailEnums\ValidEmail
     */
    public function Add($emailAddress, $returnUrl = null) {
        return $this->sendRequest('validemail/add', array(
                    'emailAddress' => $emailAddress,
                    'returnUrl' => $returnUrl));
    }

    /**
     * Get list of all valid emails of account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\ValidEmail>
     */
    public function EEList() {
        return $this->sendRequest('validemail/list', array());
    }

    /**
     * Delete valid email from account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $validEmailID 
     */
    public function Remove($validEmailID) {
        return $this->sendRequest('validemail/remove', array(
                    'validEmailID' => $validEmailID));
    }

    /**
     * Resends email verification.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $emailAddress 
     * @param string $returnUrl URL to navigate to after Account creation
     */
    public function ResendEmailVerification($emailAddress, $returnUrl = null) {
        return $this->sendRequest('validemail/resendemailverification', array(
                    'emailAddress' => $emailAddress,
                    'returnUrl' => $returnUrl));
    }

}

<?php
	namespace ElasticEmailApi; 

class Domain extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Add a new domain to be registered and secured to an Account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @param \ElasticEmailEnums\TrackingType $trackingType 
     * @param bool $setAsDefault Set this domain as the default domain for the Account.
     */
    public function Add($domain, $trackingType = \ElasticEmailEnums\TrackingType::Http, $setAsDefault = false) {
        return $this->sendRequest('domain/add', array(
                    'domain' => $domain,
                    'trackingType' => $trackingType,
                    'setAsDefault' => $setAsDefault));
    }

    /**
     * Deletes a domain from the Account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     */
    public function EEDelete($domain) {
        return $this->sendRequest('domain/delete', array(
                    'domain' => $domain));
    }

    /**
     * Lists all the domains configured for this Account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\DomainDetail>
     */
    public function EEList() {
        return $this->sendRequest('domain/list', array());
    }

    /**
     * Sets the default sender for the Account as an email address from a verified domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Email address of a verified domain to be used as default when sending from non-verified domains.
     */
    public function SetDefault($email) {
        return $this->sendRequest('domain/setdefault', array(
                    'email' => $email));
    }

    /**
     * Allow to use VERP on given domain and specify custom bounces domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Name of selected domain.
     * @param bool $isVerp 
     * @param string $customBouncesDomain 
     * @param bool $isCustomBouncesDomainDefault 
     */
    public function SetVerp($domain, $isVerp, $customBouncesDomain = null, $isCustomBouncesDomainDefault = false) {
        return $this->sendRequest('domain/setverp', array(
                    'domain' => $domain,
                    'isVerp' => $isVerp,
                    'customBouncesDomain' => $customBouncesDomain,
                    'isCustomBouncesDomainDefault' => $isCustomBouncesDomainDefault));
    }

    /**
     * Verifies proper DKIM DNS configuration for the domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Domain name to verify.
     * @return string
     */
    public function VerifyDkim($domain) {
        return $this->sendRequest('domain/verifydkim', array(
                    'domain' => $domain));
    }

    /**
     * Verifies proper MX DNS configuration for the domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Domain name to verify.
     * @return string
     */
    public function VerifyMX($domain) {
        return $this->sendRequest('domain/verifymx', array(
                    'domain' => $domain));
    }

    /**
     * Verifies proper SPF DNS configuration for the domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Domain name to verifiy.
     * @return \ElasticEmailEnums\ValidationStatus
     */
    public function VerifySpf($domain) {
        return $this->sendRequest('domain/verifyspf', array(
                    'domain' => $domain));
    }

    /**
     * Verifies proper CNAME DNS configuration for the tracking domain.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $domain Domain name to verify.
     * @param \ElasticEmailEnums\TrackingType $trackingType 
     * @return string
     */
    public function VerifyTracking($domain, $trackingType = \ElasticEmailEnums\TrackingType::Http) {
        return $this->sendRequest('domain/verifytracking', array(
                    'domain' => $domain,
                    'trackingType' => $trackingType));
    }

}

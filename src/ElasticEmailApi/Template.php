<?php
	namespace ElasticEmailApi; 

class Template extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Create new Template. Needs to be sent using POST method
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name Filename
     * @param string $subject Default subject of email.
     * @param string $fromEmail Default From: email address.
     * @param string $fromName Default From: name.
     * @param \ElasticEmailEnums\TemplateType $templateType 0 for API connections
     * @param \ElasticEmailEnums\TemplateScope $templateScope Enum: 0 - private, 1 - public, 2 - mockup
     * @param string $bodyHtml HTML code of email (needs escaping).
     * @param string $bodyText Text body of email.
     * @param string $css CSS style
     * @param int $originalTemplateID ID number of original template.
     * @return int
     */
    public function Add($name, $subject, $fromEmail, $fromName, $templateType = \ElasticEmailEnums\TemplateType::RawHTML, $templateScope = \ElasticEmailEnums\TemplateScope::EEPrivate, $bodyHtml = null, $bodyText = null, $css = null, $originalTemplateID = 0) {
        return $this->sendRequest('template/add', array(
                    'name' => $name,
                    'subject' => $subject,
                    'fromEmail' => $fromEmail,
                    'fromName' => $fromName,
                    'templateType' => $templateType,
                    'templateScope' => $templateScope,
                    'bodyHtml' => $bodyHtml,
                    'bodyText' => $bodyText,
                    'css' => $css,
                    'originalTemplateID' => $originalTemplateID
        ));
    }

    /**
     * Check if template is used by campaign.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     * @return bool
     */
    public function CheckUsage($templateID) {
        return $this->sendRequest('template/checkusage', array(
                    'templateID' => $templateID
        ));
    }

    /**
     * Copy Selected Template
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     * @param string $name Filename
     * @param string $subject Default subject of email.
     * @param string $fromEmail Default From: email address.
     * @param string $fromName Default From: name.
     * @return \ElasticEmailEnums\Template
     */
    public function EECopy($templateID, $name, $subject, $fromEmail, $fromName) {
        return $this->sendRequest('template/copy', array(
                    'templateID' => $templateID,
                    'name' => $name,
                    'subject' => $subject,
                    'fromEmail' => $fromEmail,
                    'fromName' => $fromName
        ));
    }

    /**
     * Delete template with the specified ID
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     */
    public function EEDelete($templateID) {
        return $this->sendRequest('template/delete', array(
                    'templateID' => $templateID
        ));
    }

    /**
     * Search for references to images and replaces them with base64 code.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     * @return string
     */
    public function GetEmbeddedHtml($templateID) {
        return $this->sendRequest('template/getembeddedhtml', array(
                    'templateID' => $templateID
        ));
    }

    /**
     * Lists your templates
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum of loaded items.
     * @param int $offset How many items should be loaded ahead.
     * @return \ElasticEmailEnums\TemplateList
     */
    public function GetList($limit = 500, $offset = 0) {
        return $this->sendRequest('template/getlist', array(
                    'limit' => $limit,
                    'offset' => $offset
        ));
    }

    /**
     * Load template with content
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     * @param bool $ispublic 
     * @return \ElasticEmailEnums\Template
     */
    public function LoadTemplate($templateID, $ispublic = false) {
        return $this->sendRequest('template/loadtemplate', array(
                    'templateID' => $templateID,
                    'ispublic' => $ispublic
        ));
    }

    /**
     * Removes previously generated screenshot of template
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     */
    public function RemoveScreenshot($templateID) {
        return $this->sendRequest('template/removescreenshot', array(
                    'templateID' => $templateID
        ));
    }

    /**
     * Saves screenshot of chosen Template
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $base64Image Image, base64 coded.
     * @param int $templateID ID number of template.
     * @return string
     */
    public function SaveScreenshot($base64Image, $templateID) {
        return $this->sendRequest('template/savescreenshot', array(
                    'base64Image' => $base64Image,
                    'templateID' => $templateID
        ));
    }

    /**
     * Update existing template, overwriting existing data. Needs to be sent using POST method.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     * @param \ElasticEmailEnums\TemplateScope $templateScope Enum: 0 - private, 1 - public, 2 - mockup
     * @param string $name Filename
     * @param string $subject Default subject of email.
     * @param string $fromEmail Default From: email address.
     * @param string $fromName Default From: name.
     * @param string $bodyHtml HTML code of email (needs escaping).
     * @param string $bodyText Text body of email.
     * @param string $css CSS style
     * @param bool $removeScreenshot 
     */
    public function Update($templateID, $templateScope = \ElasticEmailEnums\TemplateScope::EEPrivate, $name = null, $subject = null, $fromEmail = null, $fromName = null, $bodyHtml = null, $bodyText = null, $css = null, $removeScreenshot = true) {
        return $this->sendRequest('template/update', array(
                    'templateID' => $templateID,
                    'templateScope' => $templateScope,
                    'name' => $name,
                    'subject' => $subject,
                    'fromEmail' => $fromEmail,
                    'fromName' => $fromName,
                    'bodyHtml' => $bodyHtml,
                    'bodyText' => $bodyText,
                    'css' => $css,
                    'removeScreenshot' => $removeScreenshot
        ));
    }

}

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
     * @param \ElasticEmailEnums\TemplateScope $templateScope Enum: 0 - private, 1 - public, 2 - mockup
     * @param string $bodyHtml HTML code of email (needs escaping).
     * @param string $bodyText Text body of email.
     * @param string $css CSS style
     * @param int $originalTemplateID ID number of original template.
     * @param array<string> $tags 
     * @param string $bodyAmp AMP code of email (needs escaping).
     * @return int
     */
    public function Add($name, $subject, $fromEmail, $fromName, $templateScope = \ElasticEmailEnums\TemplateScope::EEPrivate, $bodyHtml = null, $bodyText = null, $css = null, $originalTemplateID = 0, array $tags = array(), $bodyAmp = null) {
        return $this->sendRequest('template/add', array(
                    'name' => $name,
                    'subject' => $subject,
                    'fromEmail' => $fromEmail,
                    'fromName' => $fromName,
                    'templateScope' => $templateScope,
                    'bodyHtml' => $bodyHtml,
                    'bodyText' => $bodyText,
                    'css' => $css,
                    'originalTemplateID' => $originalTemplateID,
                    'tags' => (count($tags) === 0) ? null : join(';', $tags),
                    'bodyAmp' => $bodyAmp));
    }

    /**
     * Create a new Tag to be used in your Templates
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tag Tag's value
     * @return \ElasticEmailEnums\TemplateTag
     */
    public function AddTag($tag) {
        return $this->sendRequest('template/addtag', array(
                    'tag' => $tag));
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
                    'fromName' => $fromName));
    }

    /**
     * Delete template with the specified ID
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     */
    public function EEDelete($templateID) {
        return $this->sendRequest('template/delete', array(
                    'templateID' => $templateID));
    }

    /**
     * Delete templates with the specified ID
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<int> $templateIDs 
     */
    public function DeleteBulk($templateIDs) {
        return $this->sendRequest('template/deletebulk', array(
                    'templateIDs' => (count($templateIDs) === 0) ? null : join(';', $templateIDs)));
    }

    /**
     * Delete a tag, removing it from all Templates
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $tag 
     */
    public function DeleteTag($tag) {
        return $this->sendRequest('template/deletetag', array(
                    'tag' => $tag));
    }

    /**
     * Lists your templates, optionally searching by Tags
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $tags 
     * @param array<\ElasticEmailEnums\TemplateType> $templateTypes 
     * @param int $limit If provided, returns templates with these tags
     * @param int $offset Filters on template type
     * @return \ElasticEmailEnums\TemplateList
     */
    public function GetList(array $tags = array(), array $templateTypes = array(), $limit = 500, $offset = 0) {
        return $this->sendRequest('template/getlist', array(
                    'tags' => (count($tags) === 0) ? null : join(';', $tags),
                    'templateTypes' => (count($templateTypes) === 0) ? null : join(';', $templateTypes),
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * Retrieve a list of your Tags
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\TemplateTagList
     */
    public function GetTagList() {
        return $this->sendRequest('template/gettaglist', array());
    }

    /**
     * Check if template is used by campaign.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     * @return bool
     */
    public function IsUsedByCampaign($templateID) {
        return $this->sendRequest('template/isusedbycampaign', array(
                    'templateID' => $templateID));
    }

    /**
     * Load template with content
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $templateID ID number of template.
     * @return \ElasticEmailEnums\Template
     */
    public function LoadTemplate($templateID) {
        return $this->sendRequest('template/loadtemplate', array(
                    'templateID' => $templateID));
    }

    /**
     * Read Rss feed
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $url Rss feed url.
     * @param int $count Number of item tags to read.
     * @return string
     */
    public function ReadRssFeed($url, $count = 3) {
        return $this->sendRequest('template/readrssfeed', array(
                    'url' => $url,
                    'count' => $count));
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
     * @param array<string> $tags 
     * @param string $bodyAmp AMP code of email (needs escaping).
     */
    public function Update($templateID, $templateScope = \ElasticEmailEnums\TemplateScope::EEPrivate, $name = null, $subject = null, $fromEmail = null, $fromName = null, $bodyHtml = null, $bodyText = null, $css = null, $removeScreenshot = true, array $tags = array(), $bodyAmp = null) {
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
                    'removeScreenshot' => $removeScreenshot,
                    'tags' => (count($tags) === 0) ? null : join(';', $tags),
                    'bodyAmp' => $bodyAmp));
    }

    /**
     * Bulk change default options and the scope of your templates
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<int> $templateIDs 
     * @param string $subject Default subject of email.
     * @param string $fromEmail Default From: email address.
     * @param string $fromName Default From: name.
     * @param \ElasticEmailEnums\TemplateScope $templateScope Enum: 0 - private, 1 - public, 2 - mockup
     */
    public function UpdateDefaultOptions($templateIDs, $subject = null, $fromEmail = null, $fromName = null, $templateScope = \ElasticEmailEnums\TemplateScope::EEPrivate) {
        return $this->sendRequest('template/updatedefaultoptions', array(
                    'templateIDs' => (count($templateIDs) === 0) ? null : join(';', $templateIDs),
                    'subject' => $subject,
                    'fromEmail' => $fromEmail,
                    'fromName' => $fromName,
                    'templateScope' => $templateScope));
    }

}

<?php
	namespace ElasticEmailApi; 

class Contact extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Add a new contact and optionally to one of your lists.  Note that your API KEY is not required for this call.
     * @param string $publicAccountID 
     * @param string $email Proper email address.
     * @param array<string> $publicListID ID code of list
     * @param array<string> $listName Name of your list.
     * @param string $firstName First name.
     * @param string $lastName Last name.
     * @param \ElasticEmailEnums\ContactSource $source Specifies the way of uploading the contact
     * @param string $returnUrl URL to navigate to after Account creation
     * @param string $sourceUrl URL from which request was sent.
     * @param string $activationReturnUrl The url to return the contact to after activation.
     * @param string $activationTemplate Custom template to use for sending double opt-in activation emails.
     * @param bool $sendActivation True, if you want to send activation email to this contact. Otherwise, false
     * @param ?DateTime $consentDate Date of consent to send this contact(s) your email. If not provided current date is used for consent.
     * @param string $consentIP IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
     * @param array<string, string> $field Custom contact field like companyname, customernumber, city etc. Request parameters prefixed by field_ like field_companyname, field_customernumber, field_city
     * @param string $notifyEmail Emails, separated by semicolon, to which the notification about contact subscribing should be sent to
     * @param string $alreadyActiveUrl Url to navigate to if contact already is subscribed
     * @param \ElasticEmailEnums\ConsentTracking $consentTracking 
     * @return string
     */
    public function Add($publicAccountID, $email, array $publicListID = array(), array $listName = array(), $firstName = null, $lastName = null, $source = \ElasticEmailEnums\ContactSource::ContactApi, $returnUrl = null, $sourceUrl = null, $activationReturnUrl = null, $activationTemplate = null, $sendActivation = true, $consentDate = null, $consentIP = null, array $field = array(), $notifyEmail = null, $alreadyActiveUrl = null, $consentTracking = \ElasticEmailEnums\ConsentTracking::Unknown) {
        $arr = array(
                    'publicAccountID' => $publicAccountID,
                    'email' => $email,
                    'publicListID' => (count($publicListID) === 0) ? null : join(';', $publicListID),
                    'listName' => (count($listName) === 0) ? null : join(';', $listName),
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'source' => $source,
                    'returnUrl' => $returnUrl,
                    'sourceUrl' => $sourceUrl,
                    'activationReturnUrl' => $activationReturnUrl,
                    'activationTemplate' => $activationTemplate,
                    'sendActivation' => $sendActivation,
                    'consentDate' => $consentDate,
                    'consentIP' => $consentIP,
                    'notifyEmail' => $notifyEmail,
                    'alreadyActiveUrl' => $alreadyActiveUrl,
                    'consentTracking' => $consentTracking);
        foreach(array_keys($field) as $key) {
            $arr['field_'.$key] = $field[$key]; 
        }
        return $this->sendRequest('contact/add', $arr);
    }

    /**
     * Manually add or update a contacts status to Abuse or Unsubscribed status (blocked).
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Proper email address.
     * @param \ElasticEmailEnums\ContactStatus $status Status of the given resource
     */
    public function AddBlocked($email, $status) {
        return $this->sendRequest('contact/addblocked', array(
                    'email' => $email,
                    'status' => $status));
    }

    /**
     * Change any property on the contact record.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Proper email address.
     * @param string $name Name of the contact property you want to change.
     * @param string $value Value you would like to change the contact property to.
     */
    public function ChangeProperty($email, $name, $value) {
        return $this->sendRequest('contact/changeproperty', array(
                    'email' => $email,
                    'name' => $name,
                    'value' => $value));
    }

    /**
     * Changes status of selected Contacts. You may provide RULE for selection or specify list of Contact IDs.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\ContactStatus $status Status of the given resource
     * @param string $rule Query used for filtering.
     * @param array<string> $emails Comma delimited list of contact emails
     */
    public function ChangeStatus($status, $rule = null, array $emails = array()) {
        return $this->sendRequest('contact/changestatus', array(
                    'status' => $status,
                    'rule' => $rule,
                    'emails' => (count($emails) === 0) ? null : join(';', $emails)));
    }

    /**
     * Returns number of Contacts, RULE specifies contact Status.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $rule Query used for filtering.
     * @return \ElasticEmailEnums\ContactStatusCounts
     */
    public function CountByStatus($rule = null) {
        return $this->sendRequest('contact/countbystatus', array(
                    'rule' => $rule));
    }

    /**
     * Returns count of unsubscribe reasons for unsubscribed and complaint contacts.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @return \ElasticEmailEnums\ContactUnsubscribeReasonCounts
     */
    public function CountByUnsubscribeReason($from = null, $to = null) {
        return $this->sendRequest('contact/countbyunsubscribereason', array(
                    'from' => $from,
                    'to' => $to));
    }

    /**
     * Permanantly deletes the contacts provided.  You can provide either a qualified rule or a list of emails (comma separated string).
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $rule Query used for filtering.
     * @param array<string> $emails Comma delimited list of contact emails
     */
    public function EEDelete($rule = null, array $emails = array()) {
        return $this->sendRequest('contact/delete', array(
                    'rule' => $rule,
                    'emails' => (count($emails) === 0) ? null : join(';', $emails)));
    }

    /**
     * Export selected Contacts to file.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param string $rule Query used for filtering.
     * @param array<string> $emails Comma delimited list of contact emails
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export($fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $rule = null, array $emails = array(), $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('contact/export', array(
                    'fileFormat' => $fileFormat,
                    'rule' => $rule,
                    'emails' => (count($emails) === 0) ? null : join(';', $emails),
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName));
    }

    /**
     * Export contacts' unsubscribe reasons count to file.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function ExportUnsubscribeReasonCount($from = null, $to = null, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('contact/exportunsubscribereasoncount', array(
                    'from' => $from,
                    'to' => $to,
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName));
    }

    /**
     * Finds all Lists and Segments this email belongs to.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Proper email address.
     * @return \ElasticEmailEnums\ContactCollection
     */
    public function FindContact($email) {
        return $this->sendRequest('contact/findcontact', array(
                    'email' => $email));
    }

    /**
     * List of Contacts for provided List
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $listName Name of your list.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\Contact>
     */
    public function GetContactsByList($listName, $limit = 20, $offset = 0) {
        return $this->sendRequest('contact/getcontactsbylist', array(
                    'listName' => $listName,
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * List of Contacts for provided Segment
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $segmentName Name of your segment.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\Contact>
     */
    public function GetContactsBySegment($segmentName, $limit = 20, $offset = 0) {
        return $this->sendRequest('contact/getcontactsbysegment', array(
                    'segmentName' => $segmentName,
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * List of all contacts. If you have not specified RULE, all Contacts will be listed.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $rule Query used for filtering.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @param ?\ElasticEmailEnums\ContactSort $sort 
     * @return Array<\ElasticEmailEnums\Contact>
     */
    public function EEList($rule = null, $limit = 20, $offset = 0, $sort = null) {
        return $this->sendRequest('contact/list', array(
                    'rule' => $rule,
                    'limit' => $limit,
                    'offset' => $offset,
                    'sort' => $sort));
    }

    /**
     * Load blocked contacts
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<\ElasticEmailEnums\ContactStatus> $statuses List of blocked statuses: Abuse, Bounced or Unsubscribed
     * @param string $search Text fragment used for searching.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\BlockedContact>
     */
    public function LoadBlocked($statuses, $search = null, $limit = 0, $offset = 0) {
        return $this->sendRequest('contact/loadblocked', array(
                    'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
                    'search' => $search,
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * Load detailed contact information
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Proper email address.
     * @return \ElasticEmailEnums\Contact
     */
    public function LoadContact($email) {
        return $this->sendRequest('contact/loadcontact', array(
                    'email' => $email));
    }

    /**
     * Shows detailed history of chosen Contact.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Proper email address.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\ContactHistory>
     */
    public function LoadHistory($email, $limit = 0, $offset = 0) {
        return $this->sendRequest('contact/loadhistory', array(
                    'email' => $email,
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * Add new Contact to one of your Lists.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $emails Comma delimited list of contact emails
     * @param string $firstName First name.
     * @param string $lastName Last name.
     * @param string $publicListID ID code of list
     * @param string $listName Name of your list.
     * @param \ElasticEmailEnums\ContactStatus $status Status of the given resource
     * @param string $notes Free form field of notes
     * @param ?DateTime $consentDate Date of consent to send this contact(s) your email. If not provided current date is used for consent.
     * @param string $consentIP IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
     * @param array<string, string> $field Custom contact field like companyname, customernumber, city etc. Request parameters prefixed by field_ like field_companyname, field_customernumber, field_city
     * @param string $notifyEmail Emails, separated by semicolon, to which the notification about contact subscribing should be sent to
     * @param \ElasticEmailEnums\ConsentTracking $consentTracking 
     * @param \ElasticEmailEnums\ContactSource $source Specifies the way of uploading the contact
     */
    public function QuickAdd($emails, $firstName = null, $lastName = null, $publicListID = null, $listName = null, $status = \ElasticEmailEnums\ContactStatus::Active, $notes = null, $consentDate = null, $consentIP = null, array $field = array(), $notifyEmail = null, $consentTracking = \ElasticEmailEnums\ConsentTracking::Unknown, $source = \ElasticEmailEnums\ContactSource::ManualInput) {
        $arr = array(
                    'emails' => (count($emails) === 0) ? null : join(';', $emails),
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'publicListID' => $publicListID,
                    'listName' => $listName,
                    'status' => $status,
                    'notes' => $notes,
                    'consentDate' => $consentDate,
                    'consentIP' => $consentIP,
                    'notifyEmail' => $notifyEmail,
                    'consentTracking' => $consentTracking,
                    'source' => $source);
        foreach(array_keys($field) as $key) {
            $arr['field_'.$key] = $field[$key]; 
        }
        return $this->sendRequest('contact/quickadd', $arr);
    }

    /**
     * Basic double opt-in email subscribe form for your account.  This can be used for contacts that need to re-subscribe as well.
     * @param string $publicAccountID 
     * @return string
     */
    public function Subscribe($publicAccountID) {
        return $this->sendRequest('contact/subscribe', array(
                    'publicAccountID' => $publicAccountID));
    }

    /**
     * Update selected contact. Omitted contact's fields will be reset by default (see the clearRestOfFields parameter)
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Proper email address.
     * @param string $firstName First name.
     * @param string $lastName Last name.
     * @param bool $clearRestOfFields States if the fields that were omitted in this request are to be reset or should they be left with their current value
     * @param array<string, string> $field Custom contact field like companyname, customernumber, city etc. Request parameters prefixed by field_ like field_companyname, field_customernumber, field_city
     * @param string $customFields Custom contact field like companyname, customernumber, city etc. JSON serialized text like { "city":"london" } 
     * @return \ElasticEmailEnums\Contact
     */
    public function Update($email, $firstName = null, $lastName = null, $clearRestOfFields = true, array $field = array(), $customFields = null) {
        $arr = array(
                    'email' => $email,
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'clearRestOfFields' => $clearRestOfFields,
                    'customFields' => $customFields);
        foreach(array_keys($field) as $key) {
            $arr['field_'.$key] = $field[$key]; 
        }
        return $this->sendRequest('contact/update', $arr);
    }

    /**
     * Upload contacts in CSV file.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param File $contactFile Name of CSV file with Contacts.
     * @param bool $allowUnsubscribe True: Allow unsubscribing from this (optional) newly created list. Otherwise, false
     * @param ?int $listID ID number of selected list.
     * @param string $listName Name of your list to upload contacts to, or how the new, automatically created list should be named
     * @param \ElasticEmailEnums\ContactStatus $status Status of the given resource
     * @param ?DateTime $consentDate Date of consent to send this contact(s) your email. If not provided current date is used for consent.
     * @param string $consentIP IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
     * @param \ElasticEmailEnums\ConsentTracking $consentTracking 
     * @return int
     */
    public function Upload($contactFile, $allowUnsubscribe = false, $listID = null, $listName = null, $status = \ElasticEmailEnums\ContactStatus::Active, $consentDate = null, $consentIP = null, $consentTracking = \ElasticEmailEnums\ConsentTracking::Unknown) {
        return $this->sendRequest('contact/upload', array(
                    'allowUnsubscribe' => $allowUnsubscribe,
                    'listID' => $listID,
                    'listName' => $listName,
                    'status' => $status,
                    'consentDate' => $consentDate,
                    'consentIP' => $consentIP,
                    'consentTracking' => $consentTracking), "POST", $contactFile);
    }

}

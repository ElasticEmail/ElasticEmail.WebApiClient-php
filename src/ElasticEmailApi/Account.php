<?php
	namespace ElasticEmailApi; 

class Account extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Request premium support for your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\SupportPlan $supportPlan 
     */
    public function AddDedicatedSupport($supportPlan) {
        return $this->sendRequest('account/adddedicatedsupport', array(
                    'supportPlan' => $supportPlan));
    }

    /**
     * Create new subaccount and provide most important data about it.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $email Proper email address.
     * @param string $password Current password.
     * @param string $confirmPassword Repeat new password.
     * @param bool $allow2fa True, if you want to allow two-factor authentication.  Otherwise, false.
     * @param bool $requiresEmailCredits True, if Account needs credits to send emails. Otherwise, false
     * @param int $maxContacts Maximum number of contacts the Account can have
     * @param bool $enablePrivateIPRequest True, if Account can request for private IP on its own. Otherwise, false
     * @param bool $sendActivation True, if you want to send activation email to this Account. Otherwise, false
     * @param string $returnUrl URL to navigate to after Account creation
     * @param ?\ElasticEmailEnums\SendingPermission $sendingPermission Sending permission setting for Account
     * @param ?bool $enableContactFeatures Private IP required. Name of the custom IP Pool which Sub Account should use to send its emails. Leave empty for the default one or if no Private IPs have been bought
     * @param string $poolName Name of your custom IP Pool to be used in the sending process
     * @param int $emailSizeLimit Maximum size of email including attachments in MB's
     * @param ?int $dailySendLimit Amount of emails Account can send daily
     * @return string
     */
    public function AddSubAccount($email, $password, $confirmPassword, $allow2fa = false, $requiresEmailCredits = false, $maxContacts = 0, $enablePrivateIPRequest = true, $sendActivation = false, $returnUrl = null, $sendingPermission = null, $enableContactFeatures = null, $poolName = null, $emailSizeLimit = 10, $dailySendLimit = null) {
        return $this->sendRequest('account/addsubaccount', array(
                    'email' => $email,
                    'password' => $password,
                    'confirmPassword' => $confirmPassword,
                    'allow2fa' => $allow2fa,
                    'requiresEmailCredits' => $requiresEmailCredits,
                    'maxContacts' => $maxContacts,
                    'enablePrivateIPRequest' => $enablePrivateIPRequest,
                    'sendActivation' => $sendActivation,
                    'returnUrl' => $returnUrl,
                    'sendingPermission' => $sendingPermission,
                    'enableContactFeatures' => $enableContactFeatures,
                    'poolName' => $poolName,
                    'emailSizeLimit' => $emailSizeLimit,
                    'dailySendLimit' => $dailySendLimit));
    }

    /**
     * Add email credits to a sub-account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $credits Amount of credits to add
     * @param string $notes Specific notes about the transaction
     * @param string $subAccountEmail Email address of Sub-Account
     * @param string $publicAccountID Public key of sub-account to add credits to. Use subAccountEmail or publicAccountID not both.
     */
    public function AddSubAccountCredits($credits, $notes, $subAccountEmail = null, $publicAccountID = null) {
        return $this->sendRequest('account/addsubaccountcredits', array(
                    'credits' => $credits,
                    'notes' => $notes,
                    'subAccountEmail' => $subAccountEmail,
                    'publicAccountID' => $publicAccountID));
    }

    /**
     * Add notifications webhook
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $webNotificationUrl URL address to receive web notifications to parse and process.
     * @param string $name Filename
     * @param ?bool $notifyOncePerEmail 
     * @param ?bool $notificationForSent 
     * @param ?bool $notificationForOpened 
     * @param ?bool $notificationForClicked 
     * @param ?bool $notificationForUnsubscribed 
     * @param ?bool $notificationForAbuseReport 
     * @param ?bool $notificationForError 
     * @return string
     */
    public function AddWebhook($webNotificationUrl, $name, $notifyOncePerEmail = null, $notificationForSent = null, $notificationForOpened = null, $notificationForClicked = null, $notificationForUnsubscribed = null, $notificationForAbuseReport = null, $notificationForError = null) {
        return $this->sendRequest('account/addwebhook', array(
                    'webNotificationUrl' => $webNotificationUrl,
                    'name' => $name,
                    'notifyOncePerEmail' => $notifyOncePerEmail,
                    'notificationForSent' => $notificationForSent,
                    'notificationForOpened' => $notificationForOpened,
                    'notificationForClicked' => $notificationForClicked,
                    'notificationForUnsubscribed' => $notificationForUnsubscribed,
                    'notificationForAbuseReport' => $notificationForAbuseReport,
                    'notificationForError' => $notificationForError));
    }

    /**
     * Change your email address. Remember, that your email address is used as login!
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $newEmail New email address.
     * @param string $confirmEmail New email address.
     * @param string $sourceUrl URL from which request was sent.
     * @return string
     */
    public function ChangeEmail($newEmail, $confirmEmail, $sourceUrl = "https://elasticemail.com/account/") {
        return $this->sendRequest('account/changeemail', array(
                    'newEmail' => $newEmail,
                    'confirmEmail' => $confirmEmail,
                    'sourceUrl' => $sourceUrl));
    }

    /**
     * Create new password for your account. Password needs to be at least 6 characters long.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $newPassword New password for Account.
     * @param string $confirmPassword Repeat new password.
     * @param bool $resetApiKey 
     * @param string $currentPassword Current password.
     */
    public function ChangePassword($newPassword, $confirmPassword, $resetApiKey = false, $currentPassword = null) {
        return $this->sendRequest('account/changepassword', array(
                    'newPassword' => $newPassword,
                    'confirmPassword' => $confirmPassword,
                    'resetApiKey' => $resetApiKey,
                    'currentPassword' => $currentPassword));
    }

    /**
     * Create new password for subaccount. Password needs to be at least 6 characters long.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $newPassword New password for Account.
     * @param string $confirmPassword Repeat new password.
     * @param string $subAccountEmail Email address of Sub-Account
     * @param bool $resetApiKey 
     */
    public function ChangeSubAccountPassword($newPassword, $confirmPassword, $subAccountEmail, $resetApiKey = false) {
        return $this->sendRequest('account/changesubaccountpassword', array(
                    'newPassword' => $newPassword,
                    'confirmPassword' => $confirmPassword,
                    'subAccountEmail' => $subAccountEmail,
                    'resetApiKey' => $resetApiKey));
    }

    /**
     * Deletes specified Subaccount
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $subAccountEmail Email address of Sub-Account
     * @param string $publicAccountID Public key of sub-account to delete. Use subAccountEmail or publicAccountID not both.
     */
    public function DeleteSubAccount($subAccountEmail = null, $publicAccountID = null) {
        return $this->sendRequest('account/deletesubaccount', array(
                    'subAccountEmail' => $subAccountEmail,
                    'publicAccountID' => $publicAccountID));
    }

    /**
     * Delete notifications webhook
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $webhookID 
     */
    public function DeleteWebhook($webhookID) {
        return $this->sendRequest('account/deletewebhook', array(
                    'webhookID' => $webhookID));
    }

    /**
     * Returns API Key for the given Sub Account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $subAccountEmail Email address of Sub-Account
     * @param string $publicAccountID Public key of sub-account to retrieve sub-account API Key. Use subAccountEmail or publicAccountID not both.
     * @return string
     */
    public function GetSubAccountApiKey($subAccountEmail = null, $publicAccountID = null) {
        return $this->sendRequest('account/getsubaccountapikey', array(
                    'subAccountEmail' => $subAccountEmail,
                    'publicAccountID' => $publicAccountID));
    }

    /**
     * Lists all of your subaccounts
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @param string $email Proper email address.
     * @return Array<\ElasticEmailEnums\SubAccount>
     */
    public function GetSubAccountList($limit = 0, $offset = 0, $email = null) {
        return $this->sendRequest('account/getsubaccountlist', array(
                    'limit' => $limit,
                    'offset' => $offset,
                    'email' => $email));
    }

    /**
     * Loads your account. Returns detailed information about your account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\Account
     */
    public function Load() {
        return $this->sendRequest('account/load', array());
    }

    /**
     * Load advanced options of your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\AdvancedOptions
     */
    public function LoadAdvancedOptions() {
        return $this->sendRequest('account/loadadvancedoptions', array());
    }

    /**
     * Lists email credits history
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\EmailCredits>
     */
    public function LoadEmailCreditsHistory() {
        return $this->sendRequest('account/loademailcreditshistory', array());
    }

    /**
     * Load inbound options of your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\InboundOptions
     */
    public function LoadInboundOptions() {
        return $this->sendRequest('account/loadinboundoptions', array());
    }

    /**
     * Lists all payments
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @param DateTime $fromDate Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param DateTime $toDate Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @return Array<\ElasticEmailEnums\Payment>
     */
    public function LoadPaymentHistory($limit, $offset, $fromDate, $toDate) {
        return $this->sendRequest('account/loadpaymenthistory', array(
                    'limit' => $limit,
                    'offset' => $offset,
                    'fromDate' => $fromDate,
                    'toDate' => $toDate));
    }

    /**
     * Lists all referral payout history
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\Payment>
     */
    public function LoadPayoutHistory() {
        return $this->sendRequest('account/loadpayouthistory', array());
    }

    /**
     * Shows information about your referral details
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\Referral
     */
    public function LoadReferralDetails() {
        return $this->sendRequest('account/loadreferraldetails', array());
    }

    /**
     * Shows latest changes in your sending reputation
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\ReputationHistory>
     */
    public function LoadReputationHistory() {
        return $this->sendRequest('account/loadreputationhistory', array());
    }

    /**
     * Shows detailed information about your actual reputation score
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\ReputationDetail
     */
    public function LoadReputationImpact() {
        return $this->sendRequest('account/loadreputationimpact', array());
    }

    /**
     * Returns detailed spam check.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\SpamCheck>
     */
    public function LoadSpamCheck($limit = 20, $offset = 0) {
        return $this->sendRequest('account/loadspamcheck', array(
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * Lists email credits history for sub-account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $subAccountEmail Email address of Sub-Account
     * @param string $publicAccountID Public key of sub-account to list history for. Use subAccountEmail or publicAccountID not both.
     * @return Array<\ElasticEmailEnums\EmailCredits>
     */
    public function LoadSubAccountsEmailCreditsHistory($subAccountEmail = null, $publicAccountID = null) {
        return $this->sendRequest('account/loadsubaccountsemailcreditshistory', array(
                    'subAccountEmail' => $subAccountEmail,
                    'publicAccountID' => $publicAccountID));
    }

    /**
     * Loads settings of subaccount
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $subAccountEmail Email address of Sub-Account
     * @param string $publicAccountID Public key of sub-account to load settings for. Use subAccountEmail or publicAccountID not both.
     * @return \ElasticEmailEnums\SubAccountSettings
     */
    public function LoadSubAccountSettings($subAccountEmail = null, $publicAccountID = null) {
        return $this->sendRequest('account/loadsubaccountsettings', array(
                    'subAccountEmail' => $subAccountEmail,
                    'publicAccountID' => $publicAccountID));
    }

    /**
     * Shows usage of your account in given time.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param bool $loadSubaccountsUsage 
     * @return Array<\ElasticEmailEnums\Usage>
     */
    public function LoadUsage($from, $to, $loadSubaccountsUsage = true) {
        return $this->sendRequest('account/loadusage', array(
                    'from' => $from,
                    'to' => $to,
                    'loadSubaccountsUsage' => $loadSubaccountsUsage));
    }

    /**
     * Load notifications webhooks
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\Webhook>
     */
    public function LoadWebhook($limit = 0, $offset = 0) {
        return $this->sendRequest('account/loadwebhook', array(
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * Load web notification options of your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\WebNotificationOptions
     */
    public function LoadWebNotificationOptions() {
        return $this->sendRequest('account/loadwebnotificationoptions', array());
    }

    /**
     * Shows summary for your account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\AccountOverview
     */
    public function Overview() {
        return $this->sendRequest('account/overview', array());
    }

    /**
     * Shows you account's profile basic overview
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return \ElasticEmailEnums\Profile
     */
    public function ProfileOverview() {
        return $this->sendRequest('account/profileoverview', array());
    }

    /**
     * Remove email credits from a sub-account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $notes Specific notes about the transaction
     * @param string $subAccountEmail Email address of Sub-Account
     * @param string $publicAccountID Public key of sub-account to remove credits from. Use subAccountEmail or publicAccountID not both.
     * @param ?int $credits Amount of credits to remove
     * @param bool $removeAll Remove all credits of this type from sub-account (overrides credits if provided)
     */
    public function RemoveSubAccountCredits($notes, $subAccountEmail = null, $publicAccountID = null, $credits = null, $removeAll = false) {
        return $this->sendRequest('account/removesubaccountcredits', array(
                    'notes' => $notes,
                    'subAccountEmail' => $subAccountEmail,
                    'publicAccountID' => $publicAccountID,
                    'credits' => $credits,
                    'removeAll' => $removeAll));
    }

    /**
     * Request a new default APIKey.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return string
     */
    public function RequestNewApiKey() {
        return $this->sendRequest('account/requestnewapikey', array());
    }

    /**
     * Request premium support for your account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     */
    public function RequestPremiumSupport() {
        return $this->sendRequest('account/requestpremiumsupport', array());
    }

    /**
     * Request a private IP for your Account
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $count Number of items.
     * @param string $notes Free form field of notes
     */
    public function RequestPrivateIP($count, $notes) {
        return $this->sendRequest('account/requestprivateip', array(
                    'count' => $count,
                    'notes' => $notes));
    }

    /**
     * Update sending and tracking options of your account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?bool $enableClickTracking True, if you want to track clicks. Otherwise, false
     * @param ?bool $enableLinkClickTracking True, if you want to track by link tracking. Otherwise, false
     * @param ?bool $manageSubscriptions True, if you want to display your labels on your unsubscribe form. Otherwise, false
     * @param ?bool $manageSubscribedOnly True, if you want to only display labels that the contact is subscribed to on your unsubscribe form. Otherwise, false
     * @param ?bool $transactionalOnUnsubscribe True, if you want to display an option for the contact to opt into transactional email only on your unsubscribe form. Otherwise, false
     * @param ?bool $skipListUnsubscribe True, if you do not want to use list-unsubscribe headers. Otherwise, false
     * @param ?bool $autoTextFromHtml True, if text BODY of message should be created automatically. Otherwise, false
     * @param ?bool $allowCustomHeaders True, if you want to apply custom headers to your emails. Otherwise, false
     * @param string $bccEmail Email address to send a copy of all email to.
     * @param string $contentTransferEncoding Type of content encoding
     * @param ?bool $emailNotificationForError True, if you want bounce notifications returned. Otherwise, false
     * @param string $emailNotificationEmail Specific email address to send bounce email notifications to.
     * @param ?bool $lowCreditNotification True, if you want to receive low credit email notifications. Otherwise, false
     * @param ?bool $enableUITooltips True, if Account has tooltips active. Otherwise, false
     * @param string $notificationsEmails Email addresses to send a copy of all notifications from our system. Separated by semicolon
     * @param string $unsubscribeNotificationsEmails Emails, separated by semicolon, to which the notification about contact unsubscribing should be sent to
     * @param string $logoUrl URL to your logo image.
     * @param ?bool $enableTemplateScripting True, if you want to use template scripting in your emails {{}}. Otherwise, false
     * @param ?int $staleContactScore (0 means this functionality is NOT enabled) Score, depending on the number of times you have sent to a recipient, at which the given recipient should be moved to the Stale status
     * @param ?int $staleContactInactiveDays (0 means this functionality is NOT enabled) Number of days of inactivity for a contact after which the given recipient should be moved to the Stale status
     * @param string $deliveryReason Why your clients are receiving your emails.
     * @param ?bool $tutorialsEnabled True, if you want to enable Dashboard Tutotials
     * @param ?bool $enableOpenTracking True, if you want to track opens. Otherwise, false
     * @param ?bool $consentTrackingOnUnsubscribe 
     * @return \ElasticEmailEnums\AdvancedOptions
     */
    public function UpdateAdvancedOptions($enableClickTracking = null, $enableLinkClickTracking = null, $manageSubscriptions = null, $manageSubscribedOnly = null, $transactionalOnUnsubscribe = null, $skipListUnsubscribe = null, $autoTextFromHtml = null, $allowCustomHeaders = null, $bccEmail = null, $contentTransferEncoding = null, $emailNotificationForError = null, $emailNotificationEmail = null, $lowCreditNotification = null, $enableUITooltips = null, $notificationsEmails = null, $unsubscribeNotificationsEmails = null, $logoUrl = null, $enableTemplateScripting = true, $staleContactScore = null, $staleContactInactiveDays = null, $deliveryReason = null, $tutorialsEnabled = null, $enableOpenTracking = null, $consentTrackingOnUnsubscribe = null) {
        return $this->sendRequest('account/updateadvancedoptions', array(
                    'enableClickTracking' => $enableClickTracking,
                    'enableLinkClickTracking' => $enableLinkClickTracking,
                    'manageSubscriptions' => $manageSubscriptions,
                    'manageSubscribedOnly' => $manageSubscribedOnly,
                    'transactionalOnUnsubscribe' => $transactionalOnUnsubscribe,
                    'skipListUnsubscribe' => $skipListUnsubscribe,
                    'autoTextFromHtml' => $autoTextFromHtml,
                    'allowCustomHeaders' => $allowCustomHeaders,
                    'bccEmail' => $bccEmail,
                    'contentTransferEncoding' => $contentTransferEncoding,
                    'emailNotificationForError' => $emailNotificationForError,
                    'emailNotificationEmail' => $emailNotificationEmail,
                    'lowCreditNotification' => $lowCreditNotification,
                    'enableUITooltips' => $enableUITooltips,
                    'notificationsEmails' => $notificationsEmails,
                    'unsubscribeNotificationsEmails' => $unsubscribeNotificationsEmails,
                    'logoUrl' => $logoUrl,
                    'enableTemplateScripting' => $enableTemplateScripting,
                    'staleContactScore' => $staleContactScore,
                    'staleContactInactiveDays' => $staleContactInactiveDays,
                    'deliveryReason' => $deliveryReason,
                    'tutorialsEnabled' => $tutorialsEnabled,
                    'enableOpenTracking' => $enableOpenTracking,
                    'consentTrackingOnUnsubscribe' => $consentTrackingOnUnsubscribe));
    }

    /**
     * Update settings of your private branding. These settings are needed, if you want to use Elastic Email under your brand.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param bool $enablePrivateBranding True: Turn on or off ability to send mails under your brand. Otherwise, false
     * @param string $logoUrl URL to your logo image.
     * @param string $supportLink Address to your support.
     * @param string $privateBrandingUrl Subdomain for your rebranded service
     * @param string $smtpAddress Address of SMTP server.
     * @param string $smtpAlternative Address of alternative SMTP server.
     * @param string $paymentUrl URL for making payments.
     * @param string $customBouncesDomain 
     */
    public function UpdateCustomBranding($enablePrivateBranding = false, $logoUrl = null, $supportLink = null, $privateBrandingUrl = null, $smtpAddress = null, $smtpAlternative = null, $paymentUrl = null, $customBouncesDomain = null) {
        return $this->sendRequest('account/updatecustombranding', array(
                    'enablePrivateBranding' => $enablePrivateBranding,
                    'logoUrl' => $logoUrl,
                    'supportLink' => $supportLink,
                    'privateBrandingUrl' => $privateBrandingUrl,
                    'smtpAddress' => $smtpAddress,
                    'smtpAlternative' => $smtpAlternative,
                    'paymentUrl' => $paymentUrl,
                    'customBouncesDomain' => $customBouncesDomain));
    }

    /**
     * Update inbound notifications options of your account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?bool $inboundContactsOnly True, if you want inbound email to only process contacts from your Account. Otherwise, false
     * @param string $hubCallBackUrl URL used for tracking action of inbound emails
     * @param string $inboundDomain Domain you use as your inbound domain
     * @return \ElasticEmailEnums\InboundOptions
     */
    public function UpdateInboundNotifications($inboundContactsOnly = null, $hubCallBackUrl = "", $inboundDomain = null) {
        return $this->sendRequest('account/updateinboundnotifications', array(
                    'inboundContactsOnly' => $inboundContactsOnly,
                    'hubCallBackUrl' => $hubCallBackUrl,
                    'inboundDomain' => $inboundDomain));
    }

    /**
     * Update your profile.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $firstName First name.
     * @param string $lastName Last name.
     * @param string $address1 First line of address.
     * @param string $city City.
     * @param string $state State or province.
     * @param string $zip Zip/postal code.
     * @param int $countryID Numeric ID of country. A file with the list of countries is available <a href="http://api.elasticemail.com/public/countries"><b>here</b></a>
     * @param ?bool $marketingConsent True if you want to receive newsletters from Elastic Email. Otherwise, false. Empty to leave the current value.
     * @param string $address2 Second line of address.
     * @param string $company Company name.
     * @param string $website HTTP address of your website.
     * @param string $logoUrl URL to your logo image.
     * @param string $taxCode Code used for tax purposes.
     * @param string $phone Phone number
     */
    public function UpdateProfile($firstName, $lastName, $address1, $city, $state, $zip, $countryID, $marketingConsent = null, $address2 = null, $company = null, $website = null, $logoUrl = null, $taxCode = null, $phone = null) {
        return $this->sendRequest('account/updateprofile', array(
                    'firstName' => $firstName,
                    'lastName' => $lastName,
                    'address1' => $address1,
                    'city' => $city,
                    'state' => $state,
                    'zip' => $zip,
                    'countryID' => $countryID,
                    'marketingConsent' => $marketingConsent,
                    'address2' => $address2,
                    'company' => $company,
                    'website' => $website,
                    'logoUrl' => $logoUrl,
                    'taxCode' => $taxCode,
                    'phone' => $phone));
    }

    /**
     * Updates settings of specified subaccount
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param bool $requiresEmailCredits True, if Account needs credits to send emails. Otherwise, false
     * @param ?bool $allow2fa True, if you want to allow two-factor authentication.  Otherwise, false.
     * @param int $monthlyRefillCredits Amount of credits added to Account automatically
     * @param ?int $dailySendLimit Amount of emails Account can send daily
     * @param int $emailSizeLimit Maximum size of email including attachments in MB's
     * @param bool $enablePrivateIPRequest True, if Account can request for private IP on its own. Otherwise, false
     * @param int $maxContacts Maximum number of contacts the Account can have
     * @param string $subAccountEmail Email address of Sub-Account
     * @param string $publicAccountID Public key of sub-account to update. Use subAccountEmail or publicAccountID not both.
     * @param ?\ElasticEmailEnums\SendingPermission $sendingPermission Sending permission setting for Account
     * @param ?bool $enableContactFeatures True, if you want to use Contact Delivery Tools.  Otherwise, false
     * @param string $poolName Name of your custom IP Pool to be used in the sending process
     */
    public function UpdateSubAccountSettings($requiresEmailCredits = false, $allow2fa = null, $monthlyRefillCredits = 0, $dailySendLimit = null, $emailSizeLimit = 10, $enablePrivateIPRequest = false, $maxContacts = 0, $subAccountEmail = null, $publicAccountID = null, $sendingPermission = null, $enableContactFeatures = null, $poolName = null) {
        return $this->sendRequest('account/updatesubaccountsettings', array(
                    'requiresEmailCredits' => $requiresEmailCredits,
                    'allow2fa' => $allow2fa,
                    'monthlyRefillCredits' => $monthlyRefillCredits,
                    'dailySendLimit' => $dailySendLimit,
                    'emailSizeLimit' => $emailSizeLimit,
                    'enablePrivateIPRequest' => $enablePrivateIPRequest,
                    'maxContacts' => $maxContacts,
                    'subAccountEmail' => $subAccountEmail,
                    'publicAccountID' => $publicAccountID,
                    'sendingPermission' => $sendingPermission,
                    'enableContactFeatures' => $enableContactFeatures,
                    'poolName' => $poolName));
    }

    /**
     * Update notification webhook
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $webhookID 
     * @param string $name Filename
     * @param string $webNotificationUrl URL address to receive web notifications to parse and process.
     * @param ?bool $notifyOncePerEmail 
     * @param ?bool $notificationForSent 
     * @param ?bool $notificationForOpened 
     * @param ?bool $notificationForClicked 
     * @param ?bool $notificationForUnsubscribed 
     * @param ?bool $notificationForAbuseReport 
     * @param ?bool $notificationForError 
     */
    public function UpdateWebhook($webhookID, $name = null, $webNotificationUrl = null, $notifyOncePerEmail = null, $notificationForSent = null, $notificationForOpened = null, $notificationForClicked = null, $notificationForUnsubscribed = null, $notificationForAbuseReport = null, $notificationForError = null) {
        return $this->sendRequest('account/updatewebhook', array(
                    'webhookID' => $webhookID,
                    'name' => $name,
                    'webNotificationUrl' => $webNotificationUrl,
                    'notifyOncePerEmail' => $notifyOncePerEmail,
                    'notificationForSent' => $notificationForSent,
                    'notificationForOpened' => $notificationForOpened,
                    'notificationForClicked' => $notificationForClicked,
                    'notificationForUnsubscribed' => $notificationForUnsubscribed,
                    'notificationForAbuseReport' => $notificationForAbuseReport,
                    'notificationForError' => $notificationForError));
    }

}

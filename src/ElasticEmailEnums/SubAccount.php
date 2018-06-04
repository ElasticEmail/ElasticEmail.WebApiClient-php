<?php
	namespace ElasticEmailEnums; 

class SubAccount
{
    /**
     * Public key for limited access to your account such as contact/add so you can use it safely on public websites.
     */
    public /*string*/ $PublicAccountID;

    /**
     * ApiKey that gives you access to our SMTP and HTTP API's.
     */
    public /*string*/ $ApiKey;

    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * ID number of mailer
     */
    public /*string*/ $MailerID;

    /**
     * Name of your custom IP Pool to be used in the sending process
     */
    public /*string*/ $PoolName;

    /**
     * Date of last activity on account
     */
    public /*string*/ $LastActivity;

    /**
     * Amount of email credits
     */
    public /*string*/ $EmailCredits;

    /**
     * True, if account needs credits to send emails. Otherwise, false
     */
    public /*bool*/ $RequiresEmailCredits;

    /**
     * Amount of credits added to account automatically
     */
    public /*double*/ $MonthlyRefillCredits;

    /**
     * True, if account needs credits to buy templates. Otherwise, false
     */
    public /*bool*/ $RequiresTemplateCredits;

    /**
     * Amount of Litmus credits
     */
    public /*decimal*/ $LitmusCredits;

    /**
     * True, if account is able to send template tests to Litmus. Otherwise, false
     */
    public /*bool*/ $EnableLitmusTest;

    /**
     * True, if account needs credits to send emails. Otherwise, false
     */
    public /*bool*/ $RequiresLitmusCredits;

    /**
     * True, if account can buy templates on its own. Otherwise, false
     */
    public /*bool*/ $EnablePremiumTemplates;

    /**
     * True, if account can request for private IP on its own. Otherwise, false
     */
    public /*bool*/ $EnablePrivateIPRequest;

    /**
     * Amount of emails sent from this account
     */
    public /*long*/ $TotalEmailsSent;

    /**
     * Percent of Unknown users - users that couldn't be found
     */
    public /*double*/ $UnknownUsersPercent;

    /**
     * Percent of Complaining users - those, who do not want to receive email from you.
     */
    public /*double*/ $AbusePercent;

    /**
     * Percent of Bounced users
     */
    public /*double*/ $FailedSpamPercent;

    /**
     * Numeric reputation
     */
    public /*double*/ $Reputation;

    /**
     * Amount of emails account can send daily
     */
    public /*long*/ $DailySendLimit;

    /**
     * Name of account's status: Deleted, Disabled, UnderReview, NoPaymentsAllowed, NeverSignedIn, Active, SystemPaused
     */
    public /*string*/ $Status;

    /**
     * Maximum size of email including attachments in MB's
     */
    public /*int*/ $EmailSizeLimit;

    /**
     * Maximum number of contacts the account can have
     */
    public /*int*/ $MaxContacts;

    /**
     * True, if you want to use Contact Delivery Tools.  Otherwise, false
     */
    public /*bool*/ $EnableContactFeatures;

    /**
     * Sending permission setting for account
     */
    public /*\ElasticEmailEnums\SendingPermission*/ $SendingPermission;

}

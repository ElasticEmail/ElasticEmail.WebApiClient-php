<?php
	namespace ElasticEmailEnums; 

class SubAccount
{
    /**
     * 
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
     * Date of last activity on Account
     */
    public /*string*/ $LastActivity;

    /**
     * Amount of email credits
     */
    public /*string*/ $EmailCredits;

    /**
     * True, if Account needs credits to send emails. Otherwise, false
     */
    public /*bool*/ $RequiresEmailCredits;

    /**
     * Amount of credits added to Account automatically
     */
    public /*double*/ $MonthlyRefillCredits;

    /**
     * True, if Account can request for private IP on its own. Otherwise, false
     */
    public /*bool*/ $EnablePrivateIPRequest;

    /**
     * Amount of emails sent from this Account
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
     * Amount of emails Account can send daily
     */
    public /*long*/ $DailySendLimit;

    /**
     * Account's current status.
     */
    public /*string*/ $Status;

    /**
     * Maximum size of email including attachments in MB's
     */
    public /*int*/ $EmailSizeLimit;

    /**
     * Maximum number of contacts the Account can have
     */
    public /*int*/ $MaxContacts;

    /**
     * Sending permission setting for Account
     */
    public /*\ElasticEmailEnums\SendingPermission*/ $SendingPermission;

    /**
     * 
     */
    public /*bool*/ $HasModify2FA;

    /**
     * 
     */
    public /*int*/ $ContactsCount;

}

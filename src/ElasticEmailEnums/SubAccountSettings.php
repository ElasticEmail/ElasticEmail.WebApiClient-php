<?php
	namespace ElasticEmailEnums; 

class SubAccountSettings
{
    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * True, if account needs credits to send emails. Otherwise, false
     */
    public /*bool*/ $RequiresEmailCredits;

    /**
     * True, if account needs credits to buy templates. Otherwise, false
     */
    public /*bool*/ $RequiresTemplateCredits;

    /**
     * Amount of credits added to account automatically
     */
    public /*double*/ $MonthlyRefillCredits;

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
     * Maximum size of email including attachments in MB's
     */
    public /*int*/ $EmailSizeLimit;

    /**
     * Amount of emails account can send daily
     */
    public /*int*/ $DailySendLimit;

    /**
     * Maximum number of contacts the account can have
     */
    public /*int*/ $MaxContacts;

    /**
     * True, if account can request for private IP on its own. Otherwise, false
     */
    public /*bool*/ $EnablePrivateIPRequest;

    /**
     * True, if you want to use Contact Delivery Tools.  Otherwise, false
     */
    public /*bool*/ $EnableContactFeatures;

    /**
     * Sending permission setting for account
     */
    public /*\ElasticEmailEnums\SendingPermission*/ $SendingPermission;

    /**
     * Name of your custom IP Pool to be used in the sending process
     */
    public /*string*/ $PoolName;

    /**
     * Public key for limited access to your account such as contact/add so you can use it safely on public websites.
     */
    public /*string*/ $PublicAccountID;

}

<?php
	namespace ElasticEmailEnums; 

class SubAccountSettings
{
    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * True, if Account needs credits to send emails. Otherwise, false
     */
    public /*bool*/ $RequiresEmailCredits;

    /**
     * Amount of credits added to Account automatically
     */
    public /*double*/ $MonthlyRefillCredits;

    /**
     * Maximum size of email including attachments in MB's
     */
    public /*int*/ $EmailSizeLimit;

    /**
     * Amount of emails Account can send daily
     */
    public /*int*/ $DailySendLimit;

    /**
     * Maximum number of contacts the Account can have
     */
    public /*int*/ $MaxContacts;

    /**
     * True, if Account can request for private IP on its own. Otherwise, false
     */
    public /*bool*/ $EnablePrivateIPRequest;

    /**
     * True, if you want to use Contact Delivery Tools.  Otherwise, false
     */
    public /*bool*/ $EnableContactFeatures;

    /**
     * Sending permission setting for Account
     */
    public /*\ElasticEmailEnums\SendingPermission*/ $SendingPermission;

    /**
     * Name of your custom IP Pool to be used in the sending process
     */
    public /*string*/ $PoolName;

    /**
     * 
     */
    public /*string*/ $PublicAccountID;

    /**
     * True, if you want to allow two-factor authentication.  Otherwise, false.
     */
    public /*?bool*/ $Allow2FA;

}

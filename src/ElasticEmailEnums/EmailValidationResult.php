<?php
	namespace ElasticEmailEnums; 

class EmailValidationResult
{
    /**
     * 
     */
    public /*string*/ $Account;

    /**
     * Name of selected domain.
     */
    public /*string*/ $Domain;

    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * 
     */
    public /*string*/ $SuggestedSpelling;

    /**
     * 
     */
    public /*bool*/ $Disposable;

    /**
     * 
     */
    public /*bool*/ $Role;

    /**
     * Reason for blocking (1 - bounced, 2 - unsubscribed, 3 - spam).
     */
    public /*string*/ $Reason;

    /**
     * 
     */
    public /*\ElasticEmailEnums\EmailValidationStatus*/ $Result;

}

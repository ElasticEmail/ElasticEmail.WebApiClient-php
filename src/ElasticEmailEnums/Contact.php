<?php
	namespace ElasticEmailEnums; 

class Contact
{
    /**
     * 
     */
    public /*int*/ $ContactScore;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $DateAdded;

    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * First name.
     */
    public /*string*/ $FirstName;

    /**
     * Last name.
     */
    public /*string*/ $LastName;

    /**
     * Status of the given resource
     */
    public /*\ElasticEmailEnums\ContactStatus*/ $Status;

    /**
     * RFC Error code
     */
    public /*?int*/ $BouncedErrorCode;

    /**
     * RFC error message
     */
    public /*string*/ $BouncedErrorMessage;

    /**
     * Total emails sent.
     */
    public /*int*/ $TotalSent;

    /**
     * Total emails failed.
     */
    public /*int*/ $TotalFailed;

    /**
     * Total emails opened.
     */
    public /*int*/ $TotalOpened;

    /**
     * Total emails clicked
     */
    public /*int*/ $TotalClicked;

    /**
     * Date of first failed message
     */
    public /*?DateTime*/ $FirstFailedDate;

    /**
     * Number of fails in sending to this Contact
     */
    public /*int*/ $LastFailedCount;

    /**
     * Last change date
     */
    public /*DateTime*/ $DateUpdated;

    /**
     * Source of URL of payment
     */
    public /*\ElasticEmailEnums\ContactSource*/ $Source;

    /**
     * RFC Error code
     */
    public /*?int*/ $ErrorCode;

    /**
     * RFC error message
     */
    public /*string*/ $FriendlyErrorMessage;

    /**
     * IP address
     */
    public /*string*/ $CreatedFromIP;

    /**
     * IP address of consent to send this contact(s) your email. If not provided your current public IP address is used for consent.
     */
    public /*string*/ $ConsentIP;

    /**
     * Date of consent to send this contact(s) your email. If not provided current date is used for consent.
     */
    public /*?DateTime*/ $ConsentDate;

    /**
     * 
     */
    public /*\ElasticEmailEnums\ConsentTracking*/ $ConsentTracking;

    /**
     * Unsubscribed date in YYYY-MM-DD format
     */
    public /*?DateTime*/ $UnsubscribedDate;

    /**
     * Free form field of notes
     */
    public /*string*/ $Notes;

    /**
     * Website of contact
     */
    public /*string*/ $WebsiteUrl;

    /**
     * Date this contact last opened an email
     */
    public /*?DateTime*/ $LastOpened;

    /**
     * 
     */
    public /*?DateTime*/ $LastClicked;

    /**
     * 
     */
    public /*int*/ $BounceCount;

    /**
     * Custom contact field like companyname, customernumber, city etc. JSON serialized text like { "city":"london" } 
     */
    public /*array<string, string>*/ $CustomFields;

}

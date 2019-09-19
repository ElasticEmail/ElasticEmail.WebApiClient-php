<?php
	namespace ElasticEmailEnums; 

class Recipient
{
    /**
     * True, if message is SMS. Otherwise, false
     */
    public /*bool*/ $IsSms;

    /**
     * ID number of selected message.
     */
    public /*string*/ $MsgID;

    /**
     * Ending date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*string*/ $To;

    /**
     * Name of recipient's status: Submitted, ReadyToSend, WaitingToRetry, Sending, Bounced, Sent, Opened, Clicked, Unsubscribed, AbuseReport
     */
    public /*string*/ $Status;

    /**
     * Name of selected Channel.
     */
    public /*string*/ $Channel;

    /**
     * Creation date
     */
    public /*string*/ $Date;

    /**
     * Date when the email was sent
     */
    public /*string*/ $DateSent;

    /**
     * Date when the email changed the status to 'opened'
     */
    public /*string*/ $DateOpened;

    /**
     * Date when the email changed the status to 'clicked'
     */
    public /*string*/ $DateClicked;

    /**
     * Content of message, HTML encoded
     */
    public /*string*/ $Message;

    /**
     * True, if message category should be shown. Otherwise, false
     */
    public /*bool*/ $ShowCategory;

    /**
     * Name of message category
     */
    public /*string*/ $MessageCategory;

    /**
     * ID of message category
     */
    public /*?\ElasticEmailEnums\MessageCategory*/ $MessageCategoryID;

    /**
     * Date of last status change.
     */
    public /*string*/ $StatusChangeDate;

    /**
     * Date of next try
     */
    public /*string*/ $NextTryOn;

    /**
     * Default subject of email.
     */
    public /*string*/ $Subject;

    /**
     * Default From: email address.
     */
    public /*string*/ $FromEmail;

    /**
     * 
     */
    public /*string*/ $EnvelopeFrom;

    /**
     * ID of certain mail job
     */
    public /*string*/ $JobID;

    /**
     * True, if message is a SMS and status is not yet confirmed. Otherwise, false
     */
    public /*bool*/ $SmsUpdateRequired;

    /**
     * Content of message
     */
    public /*string*/ $TextMessage;

    /**
     * Comma separated ID numbers of messages.
     */
    public /*string*/ $MessageSid;

    /**
     * Recipient's last bounce error because of which this e-mail was suppressed
     */
    public /*string*/ $ContactLastError;

    /**
     * 
     */
    public /*string*/ $IPAddress;

}

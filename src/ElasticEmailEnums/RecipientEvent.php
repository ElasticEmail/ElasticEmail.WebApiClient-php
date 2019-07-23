<?php
	namespace ElasticEmailEnums; 

class RecipientEvent
{
    /**
     * ID of certain mail job
     */
    public /*string*/ $JobID;

    /**
     * ID number of selected message.
     */
    public /*string*/ $MsgID;

    /**
     * Default From: email address.
     */
    public /*string*/ $FromEmail;

    /**
     * Ending date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*string*/ $To;

    /**
     * Default subject of email.
     */
    public /*string*/ $Subject;

    /**
     * Name of recipient's status: Submitted, ReadyToSend, WaitingToRetry, Sending, Bounced, Sent, Opened, Clicked, Unsubscribed, AbuseReport
     */
    public /*string*/ $EventType;

    /**
     * Creation date
     */
    public /*string*/ $EventDate;

    /**
     * Name of selected Channel.
     */
    public /*string*/ $Channel;

    /**
     * ID number of selected Channel.
     */
    public /*?int*/ $ChannelID;

    /**
     * Name of message category
     */
    public /*string*/ $MessageCategory;

    /**
     * Date of next try
     */
    public /*string*/ $NextTryOn;

    /**
     * Content of message, HTML encoded
     */
    public /*string*/ $Message;

    /**
     * 
     */
    public /*string*/ $IPAddress;

    /**
     * 
     */
    public /*string*/ $IPPoolName;

}

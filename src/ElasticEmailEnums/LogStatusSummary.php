<?php
	namespace ElasticEmailEnums; 

class LogStatusSummary
{
    /**
     * Starting date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*string*/ $From;

    /**
     * Ending date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*string*/ $To;

    /**
     * Overall duration
     */
    public /*double*/ $Duration;

    /**
     * Number of recipients
     */
    public /*long*/ $Recipients;

    /**
     * Number of emails
     */
    public /*long*/ $EmailTotal;

    /**
     * Number of SMS
     */
    public /*long*/ $SmsTotal;

    /**
     * Number of delivered messages
     */
    public /*long*/ $Delivered;

    /**
     * Number of bounced messages
     */
    public /*long*/ $Bounced;

    /**
     * Number of messages in progress
     */
    public /*long*/ $InProgress;

    /**
     * Number of opened messages
     */
    public /*long*/ $Opened;

    /**
     * Number of clicked messages
     */
    public /*long*/ $Clicked;

    /**
     * Number of unsubscribed messages
     */
    public /*long*/ $Unsubscribed;

    /**
     * Number of complaint messages
     */
    public /*long*/ $Complaints;

    /**
     * Number of inbound messages
     */
    public /*long*/ $Inbound;

    /**
     * Number of manually cancelled messages
     */
    public /*long*/ $ManualCancel;

    /**
     * Number of messages flagged with 'Not Delivered'
     */
    public /*long*/ $NotDelivered;

    /**
     * ID number of template used
     */
    public /*bool*/ $TemplateChannel;

}

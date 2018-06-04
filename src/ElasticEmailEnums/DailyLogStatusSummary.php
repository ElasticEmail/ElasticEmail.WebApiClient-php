<?php
	namespace ElasticEmailEnums; 

class DailyLogStatusSummary
{
    /**
     * Date in YYYY-MM-DDThh:ii:ss format
     */
    public /*string*/ $Date;

    /**
     * Proper email address.
     */
    public /*int*/ $Email;

    /**
     * Number of SMS
     */
    public /*int*/ $Sms;

    /**
     * Number of delivered messages
     */
    public /*int*/ $Delivered;

    /**
     * Number of opened messages
     */
    public /*int*/ $Opened;

    /**
     * Number of clicked messages
     */
    public /*int*/ $Clicked;

    /**
     * Number of unsubscribed messages
     */
    public /*int*/ $Unsubscribed;

    /**
     * Number of complaint messages
     */
    public /*int*/ $Complaint;

    /**
     * Number of bounced messages
     */
    public /*int*/ $Bounced;

    /**
     * Number of inbound messages
     */
    public /*int*/ $Inbound;

    /**
     * Number of manually cancelled messages
     */
    public /*int*/ $ManualCancel;

    /**
     * Number of messages flagged with 'Not Delivered'
     */
    public /*int*/ $NotDelivered;

}

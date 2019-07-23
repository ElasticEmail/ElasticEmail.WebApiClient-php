<?php
	namespace ElasticEmailEnums; 

class Webhook
{
    /**
     * Public webhook ID
     */
    public /*string*/ $WebhookID;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * Creation date.
     */
    public /*?DateTime*/ $DateCreated;

    /**
     * Last change date
     */
    public /*?DateTime*/ $DateUpdated;

    /**
     * URL of notification.
     */
    public /*string*/ $URL;

    /**
     * 
     */
    public /*bool*/ $NotifyOncePerEmail;

    /**
     * 
     */
    public /*bool*/ $NotificationForSent;

    /**
     * 
     */
    public /*bool*/ $NotificationForOpened;

    /**
     * 
     */
    public /*bool*/ $NotificationForClicked;

    /**
     * 
     */
    public /*bool*/ $NotificationForUnsubscribed;

    /**
     * 
     */
    public /*bool*/ $NotificationForAbuseReport;

    /**
     * 
     */
    public /*bool*/ $NotificationForError;

}

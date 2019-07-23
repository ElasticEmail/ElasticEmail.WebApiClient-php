<?php
	namespace ElasticEmailEnums; 

class WebNotificationOptions
{
    /**
     * URL address to receive web notifications to parse and process.
     */
    public /*string*/ $WebNotificationUrl;

    /**
     * True, if you want to send web notifications for sent email. Otherwise, false
     */
    public /*bool*/ $WebNotificationForSent;

    /**
     * True, if you want to send web notifications for opened email. Otherwise, false
     */
    public /*bool*/ $WebNotificationForOpened;

    /**
     * True, if you want to send web notifications for clicked email. Otherwise, false
     */
    public /*bool*/ $WebNotificationForClicked;

    /**
     * True, if you want to send web notifications for unsubscribed email. Otherwise, false
     */
    public /*bool*/ $WebnotificationForUnsubscribed;

    /**
     * True, if you want to send web notifications for complaint email. Otherwise, false
     */
    public /*bool*/ $WebNotificationForAbuse;

    /**
     * True, if you want to send web notifications for bounced email. Otherwise, false
     */
    public /*bool*/ $WebNotificationForError;

    /**
     * True, if you want to receive notifications for each type only once per email. Otherwise, false
     */
    public /*bool*/ $WebNotificationNotifyOncePerEmail;

}

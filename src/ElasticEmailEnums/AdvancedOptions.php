<?php
	namespace ElasticEmailEnums; 

class AdvancedOptions
{
    /**
     * True, if you want to track clicks. Otherwise, false
     */
    public /*bool*/ $EnableClickTracking;

    /**
     * True, if you want to track by link tracking. Otherwise, false
     */
    public /*bool*/ $EnableLinkClickTracking;

    /**
     * True, if you want to use template scripting in your emails {{}}. Otherwise, false
     */
    public /*bool*/ $EnableTemplateScripting;

    /**
     * True, if text BODY of message should be created automatically. Otherwise, false
     */
    public /*bool*/ $AutoTextFormat;

    /**
     * True, if you want bounce notifications returned. Otherwise, false
     */
    public /*bool*/ $EmailNotificationForError;

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

    /**
     * True, if you want to receive low credit email notifications. Otherwise, false
     */
    public /*bool*/ $LowCreditNotification;

    /**
     * True, if you want inbound email to only process contacts from your account. Otherwise, false
     */
    public /*bool*/ $InboundContactsOnly;

    /**
     * True, if this account is a sub-account. Otherwise, false
     */
    public /*bool*/ $IsSubAccount;

    /**
     * True, if this account resells Elastic Email. Otherwise, false.
     */
    public /*bool*/ $IsOwnedByReseller;

    /**
     * True, if you want to enable list-unsubscribe header. Otherwise, false
     */
    public /*bool*/ $EnableUnsubscribeHeader;

    /**
     * True, if you want to display your labels on your unsubscribe form. Otherwise, false
     */
    public /*bool*/ $ManageSubscriptions;

    /**
     * True, if you want to only display labels that the contact is subscribed to on your unsubscribe form. Otherwise, false
     */
    public /*bool*/ $ManageSubscribedOnly;

    /**
     * True, if you want to display an option for the contact to opt into transactional email only on your unsubscribe form. Otherwise, false
     */
    public /*bool*/ $TransactionalOnUnsubscribe;

    /**
     * 
     */
    public /*bool*/ $ConsentTrackingOnUnsubscribe;

    /**
     * 
     */
    public /*string*/ $PreviewMessageID;

    /**
     * True, if you want to apply custom headers to your emails. Otherwise, false
     */
    public /*bool*/ $AllowCustomHeaders;

    /**
     * Email address to send a copy of all email to.
     */
    public /*string*/ $BccEmail;

    /**
     * Type of content encoding
     */
    public /*string*/ $ContentTransferEncoding;

    /**
     * True, if you want to receive bounce email notifications. Otherwise, false
     */
    public /*string*/ $EmailNotification;

    /**
     * Email addresses to send a copy of all notifications from our system. Separated by semicolon
     */
    public /*string*/ $NotificationsEmails;

    /**
     * Emails, separated by semicolon, to which the notification about contact unsubscribing should be sent to
     */
    public /*string*/ $UnsubscribeNotificationEmails;

    /**
     * URL address to receive web notifications to parse and process.
     */
    public /*string*/ $WebNotificationUrl;

    /**
     * URL used for tracking action of inbound emails
     */
    public /*string*/ $HubCallbackUrl;

    /**
     * Domain you use as your inbound domain
     */
    public /*string*/ $InboundDomain;

    /**
     * True, if account has tooltips active. Otherwise, false
     */
    public /*bool*/ $EnableUITooltips;

    /**
     * True, if you want to use Contact Delivery Tools.  Otherwise, false
     */
    public /*bool*/ $EnableContactFeatures;

    /**
     * URL to your logo image.
     */
    public /*string*/ $LogoUrl;

    /**
     * (0 means this functionality is NOT enabled) Score, depending on the number of times you have sent to a recipient, at which the given recipient should be moved to the Stale status
     */
    public /*int*/ $StaleContactScore;

    /**
     * (0 means this functionality is NOT enabled) Number of days of inactivity for a contact after which the given recipient should be moved to the Stale status
     */
    public /*int*/ $StaleContactInactiveDays;

    /**
     * Why your clients are receiving your emails.
     */
    public /*string*/ $DeliveryReason;

}

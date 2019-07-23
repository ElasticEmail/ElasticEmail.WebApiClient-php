<?php
	namespace ElasticEmailEnums; 

class Channel
{
    /**
     * Channel identifier.
     */
    public /*int*/ $ChannelID;

    /**
     * Descriptive name of the channel.
     */
    public /*string*/ $Name;

    /**
     * The date the channel was added to your account.
     */
    public /*DateTime*/ $DateAdded;

    /**
     * The date the channel was last sent through.
     */
    public /*?DateTime*/ $LastActivity;

    /**
     * The number of email jobs this channel has been used with.
     */
    public /*int*/ $JobCount;

    /**
     * The number of emails that have been clicked within this channel.
     */
    public /*int*/ $ClickedCount;

    /**
     * The number of emails that have been opened within this channel.
     */
    public /*int*/ $OpenedCount;

    /**
     * The number of emails attempted to be sent within this channel.
     */
    public /*int*/ $RecipientCount;

    /**
     * The number of emails that have been sent within this channel.
     */
    public /*int*/ $SentCount;

    /**
     * The number of emails that have been bounced within this channel.
     */
    public /*int*/ $FailedCount;

    /**
     * The number of emails that have been unsubscribed within this channel.
     */
    public /*int*/ $UnsubscribedCount;

    /**
     * The number of emails that have been marked as abuse or complaint within this channel.
     */
    public /*int*/ $FailedAbuse;

    /**
     * The total cost for emails/attachments within this channel.
     */
    public /*decimal*/ $Cost;

}

<?php
	namespace ElasticEmailEnums; 

class BouncedCategorySummary
{
    /**
     * Number of messages marked as SPAM
     */
    public /*long*/ $Spam;

    /**
     * Number of blacklisted messages
     */
    public /*long*/ $BlackListed;

    /**
     * Number of messages flagged with 'No Mailbox'
     */
    public /*long*/ $NoMailbox;

    /**
     * Number of messages flagged with 'Grey Listed'
     */
    public /*long*/ $GreyListed;

    /**
     * Number of messages flagged with 'Throttled'
     */
    public /*long*/ $Throttled;

    /**
     * Number of messages flagged with 'Timeout'
     */
    public /*long*/ $Timeout;

    /**
     * Number of messages flagged with 'Connection Problem'
     */
    public /*long*/ $ConnectionProblem;

    /**
     * Number of messages flagged with 'SPF Problem'
     */
    public /*long*/ $SpfProblem;

    /**
     * Number of messages flagged with 'Account Problem'
     */
    public /*long*/ $AccountProblem;

    /**
     * Number of messages flagged with 'DNS Problem'
     */
    public /*long*/ $DnsProblem;

    /**
     * Number of messages flagged with 'WhiteListing Problem'
     */
    public /*long*/ $WhitelistingProblem;

    /**
     * Number of messages flagged with 'Code Error'
     */
    public /*long*/ $CodeError;

    /**
     * Number of messages flagged with 'Not Delivered'
     */
    public /*long*/ $NotDelivered;

    /**
     * Number of manually cancelled messages
     */
    public /*long*/ $ManualCancel;

    /**
     * Number of messages flagged with 'Connection terminated'
     */
    public /*long*/ $ConnectionTerminated;

}

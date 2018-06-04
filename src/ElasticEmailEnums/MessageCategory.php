<?php
	namespace ElasticEmailEnums; 

abstract class MessageCategory
{
    /**
     * 
     */
    const Unknown = 0;

    /**
     * 
     */
    const Ignore = 1;

    /**
     * Number of messages marked as SPAM
     */
    const Spam = 2;

    /**
     * Number of blacklisted messages
     */
    const BlackListed = 3;

    /**
     * Number of messages flagged with 'No Mailbox'
     */
    const NoMailbox = 4;

    /**
     * Number of messages flagged with 'Grey Listed'
     */
    const GreyListed = 5;

    /**
     * Number of messages flagged with 'Throttled'
     */
    const Throttled = 6;

    /**
     * Number of messages flagged with 'Timeout'
     */
    const Timeout = 7;

    /**
     * Number of messages flagged with 'Connection Problem'
     */
    const ConnectionProblem = 8;

    /**
     * Number of messages flagged with 'SPF Problem'
     */
    const SPFProblem = 9;

    /**
     * Number of messages flagged with 'Account Problem'
     */
    const AccountProblem = 10;

    /**
     * Number of messages flagged with 'DNS Problem'
     */
    const DNSProblem = 11;

    /**
     * 
     */
    const NotDeliveredCancelled = 12;

    /**
     * Number of messages flagged with 'Code Error'
     */
    const CodeError = 13;

    /**
     * Number of manually cancelled messages
     */
    const ManualCancel = 14;

    /**
     * Number of messages flagged with 'Connection terminated'
     */
    const ConnectionTerminated = 15;

    /**
     * Number of messages flagged with 'Not Delivered'
     */
    const NotDelivered = 16;

}

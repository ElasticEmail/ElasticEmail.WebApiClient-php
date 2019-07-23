<?php
	namespace ElasticEmailEnums; 

abstract class LogEventStatus
{
    /**
     * Email is queued for sending.
     */
    const ReadyToSend = 1;

    /**
     * Email has soft bounced and is scheduled to retry.
     */
    const WaitingToRetry = 2;

    /**
     * Email is currently sending.
     */
    const Sending = 3;

    /**
     * Email has errored or bounced for some reason.
     */
    const Error = 4;

    /**
     * Email has been successfully delivered.
     */
    const Sent = 5;

    /**
     * Email has been opened by the recipient.
     */
    const Opened = 6;

    /**
     * Email has had at least one link clicked by the recipient.
     */
    const Clicked = 7;

    /**
     * Email has been unsubscribed by the recipient.
     */
    const Unsubscribed = 8;

    /**
     * Email has been complained about or marked as spam by the recipient.
     */
    const AbuseReport = 9;

}

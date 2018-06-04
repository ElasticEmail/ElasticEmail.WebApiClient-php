<?php
	namespace ElasticEmailEnums; 

abstract class ContactStatus
{
    /**
     * Only transactional email can be sent to contacts with this status.
     */
    const Transactional = -2;

    /**
     * Contact has had an open or click in the last 6 months.
     */
    const Engaged = -1;

    /**
     * Contact is eligible to be sent to.
     */
    const Active = 0;

    /**
     * Contact has had a hard bounce and is no longer eligible to be sent to.
     */
    const Bounced = 1;

    /**
     * Contact has unsubscribed and is no longer eligible to be sent to.
     */
    const Unsubscribed = 2;

    /**
     * Contact has complained and is no longer eligible to be sent to.
     */
    const Abuse = 3;

    /**
     * Contact has not been activated or has been de-activated and is not eligible to be sent to.
     */
    const Inactive = 4;

    /**
     * Contact has not been opening emails for a long period of time and is not eligible to be sent to.
     */
    const Stale = 5;

    /**
     * Contact has not confirmed their double opt-in activation and is not eligible to be sent to.
     */
    const NotConfirmed = 6;

}

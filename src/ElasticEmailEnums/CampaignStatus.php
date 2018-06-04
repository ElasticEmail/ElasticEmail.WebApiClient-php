<?php
	namespace ElasticEmailEnums; 

abstract class CampaignStatus
{
    /**
     * Campaign is logically deleted and not returned by API or interface calls.
     */
    const Deleted = -1;

    /**
     * Campaign is curently active and available.
     */
    const Active = 0;

    /**
     * Campaign is currently being processed for delivery.
     */
    const Processing = 1;

    /**
     * Campaign is currently sending.
     */
    const Sending = 2;

    /**
     * Campaign has completed sending.
     */
    const Completed = 3;

    /**
     * Campaign is currently paused and not sending.
     */
    const Paused = 4;

    /**
     * Campaign has been cancelled during delivery.
     */
    const Cancelled = 5;

    /**
     * Campaign is save as draft and not processing.
     */
    const Draft = 6;

}

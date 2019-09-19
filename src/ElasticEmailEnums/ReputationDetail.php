<?php
	namespace ElasticEmailEnums; 

class ReputationDetail
{
    /**
     * Overall reputation impact, based on the most important factors.
     */
    public /*\ElasticEmailEnums\ReputationImpact*/ $Impact;

    /**
     * Percent of Complaining users - those, who do not want to receive email from you.
     */
    public /*double*/ $AbusePercent;

    /**
     * Percent of Unknown users - users that couldn't be found
     */
    public /*double*/ $UnknownUsersPercent;

    /**
     * 
     */
    public /*double*/ $OpenedPercent;

    /**
     * 
     */
    public /*double*/ $ClickedPercent;

    /**
     * Penalty from messages marked as spam.
     */
    public /*double*/ $AverageSpamScore;

    /**
     * Percent of Bounced users
     */
    public /*double*/ $FailedSpamPercent;

}

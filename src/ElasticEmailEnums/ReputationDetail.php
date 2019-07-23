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

    /**
     * Points from quantity of your emails.
     */
    public /*double*/ $RepEmailsSent;

    /**
     * Average reputation.
     */
    public /*double*/ $AverageReputation;

    /**
     * Actual price level.
     */
    public /*double*/ $PriceLevelReputation;

    /**
     * Reputation needed to change pricing.
     */
    public /*double*/ $NextPriceLevelReputation;

    /**
     * Amount of emails sent from this Account
     */
    public /*string*/ $PriceLevel;

    /**
     * True, if tracking domain is correctly configured. Otherwise, false.
     */
    public /*bool*/ $TrackingDomainValid;

    /**
     * True, if sending domain is correctly configured. Otherwise, false.
     */
    public /*bool*/ $SenderDomainValid;

}

<?php
	namespace ElasticEmailEnums; 

class ReputationHistory
{
    /**
     * Creation date.
     */
    public /*string*/ $DateCreated;

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
     * Points from proper setup of your account
     */
    public /*double*/ $SetupScore;

    /**
     * Points from quantity of your emails.
     */
    public /*double*/ $RepEmailsSent;

    /**
     * Numeric reputation
     */
    public /*double*/ $Reputation;

}

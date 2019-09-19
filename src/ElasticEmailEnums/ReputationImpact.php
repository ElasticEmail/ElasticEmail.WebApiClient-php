<?php
	namespace ElasticEmailEnums; 

class ReputationImpact
{
    /**
     * Abuses - mails sent to user without their consent
     */
    public /*double*/ $Abuse;

    /**
     * Users, that could not be reached.
     */
    public /*double*/ $UnknownUsers;

    /**
     * Number of opened messages
     */
    public /*double*/ $Opened;

    /**
     * Number of clicked messages
     */
    public /*double*/ $Clicked;

    /**
     * Penalty from messages marked as spam.
     */
    public /*double*/ $AverageSpamScore;

    /**
     * Content analysis.
     */
    public /*double*/ $ServerFilter;

}

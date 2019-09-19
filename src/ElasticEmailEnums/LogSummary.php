<?php
	namespace ElasticEmailEnums; 

class LogSummary
{
    /**
     * Summary of log status, based on specified date range.
     */
    public /*\ElasticEmailEnums\LogStatusSummary*/ $LogStatusSummary;

    /**
     * Summary of bounced categories, based on specified date range.
     */
    public /*\ElasticEmailEnums\BouncedCategorySummary*/ $BouncedCategorySummary;

    /**
     * Daily summary of log status, based on specified date range.
     */
    public /*Array<\ElasticEmailEnums\DailyLogStatusSummary>*/ $DailyLogStatusSummary;

    /**
     * 
     */
    public /*\ElasticEmailEnums\SubaccountSummary*/ $SubaccountSummary;

}

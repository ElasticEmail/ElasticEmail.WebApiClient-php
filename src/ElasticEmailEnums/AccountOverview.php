<?php
	namespace ElasticEmailEnums; 

class AccountOverview
{
    /**
     * Amount of emails sent from this account
     */
    public /*long*/ $TotalEmailsSent;

    /**
     * Amount of emails sent from this account
     */
    public /*decimal*/ $Credit;

    /**
     * Cost of 1000 emails
     */
    public /*decimal*/ $CostPerThousand;

    /**
     * Number of messages in progress
     */
    public /*long*/ $InProgressCount;

    /**
     * Number of contacts currently with blocked status of Unsubscribed, Complaint, Bounced or InActive
     */
    public /*long*/ $BlockedContactsCount;

    /**
     * Numeric reputation
     */
    public /*double*/ $Reputation;

    /**
     * Number of contacts
     */
    public /*long*/ $ContactCount;

    /**
     * Number of created campaigns
     */
    public /*long*/ $CampaignCount;

    /**
     * Number of available templates
     */
    public /*long*/ $TemplateCount;

    /**
     * Number of created subaccounts
     */
    public /*long*/ $SubAccountCount;

    /**
     * Number of active referrals
     */
    public /*long*/ $ReferralCount;

}

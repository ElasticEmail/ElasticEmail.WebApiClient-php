<?php
	namespace ElasticEmailEnums; 

class CampaignChannel
{
    /**
     * ID number of selected Channel.
     */
    public /*int*/ $ChannelID;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * True, if you are sending a campaign. Otherwise, false.
     */
    public /*bool*/ $IsCampaign;

    /**
     * Name of your custom IP Pool to be used in the sending process
     */
    public /*string*/ $PoolName;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $DateAdded;

    /**
     * Name of campaign's status
     */
    public /*\ElasticEmailEnums\CampaignStatus*/ $Status;

    /**
     * Date of last activity on Account
     */
    public /*?DateTime*/ $LastActivity;

    /**
     * Datetime of last action done on campaign.
     */
    public /*?DateTime*/ $LastProcessed;

    /**
     * Id number of parent channel
     */
    public /*int*/ $ParentChannelID;

    /**
     * 
     */
    public /*string*/ $ParentChannelName;

    /**
     * List of Segment and List IDs, preceded with 'l' for Lists and 's' for Segments, comma separated
     */
    public /*Array<string>*/ $Targets;

    /**
     * Number of event, triggering mail sending
     */
    public /*\ElasticEmailEnums\CampaignTriggerType*/ $TriggerType;

    /**
     * Date of triggered send
     */
    public /*?DateTime*/ $TriggerDate;

    /**
     * How far into the future should the campaign be sent, in minutes
     */
    public /*double*/ $TriggerDelay;

    /**
     * When your next automatic mail will be sent, in minutes
     */
    public /*double*/ $TriggerFrequency;

    /**
     * How many times should the campaign be sent
     */
    public /*int*/ $TriggerCount;

    /**
     * Which Channel's event should trigger this Campaign
     */
    public /*int*/ $TriggerChannelID;

    /**
     * 
     */
    public /*string*/ $TriggerChannelName;

    /**
     * Data for filtering event campaigns such as specific link addresses.
     */
    public /*string*/ $TriggerData;

    /**
     * What should be checked for choosing the winner: opens or clicks
     */
    public /*\ElasticEmailEnums\SplitOptimization*/ $SplitOptimization;

    /**
     * Number of minutes between sends during optimization period
     */
    public /*int*/ $SplitOptimizationMinutes;

    /**
     * 
     */
    public /*int*/ $TimingOption;

    /**
     * ID number of template.
     */
    public /*?int*/ $TemplateID;

    /**
     * Name of template.
     */
    public /*string*/ $TemplateName;

    /**
     * Default subject of email.
     */
    public /*string*/ $TemplateSubject;

    /**
     * Default From: email address.
     */
    public /*string*/ $TemplateFromEmail;

    /**
     * Default From: name.
     */
    public /*string*/ $TemplateFromName;

    /**
     * Default Reply: email address.
     */
    public /*string*/ $TemplateReplyEmail;

    /**
     * Default Reply: name.
     */
    public /*string*/ $TemplateReplyName;

    /**
     * Total emails clicked
     */
    public /*int*/ $ClickedCount;

    /**
     * Total emails opened.
     */
    public /*int*/ $OpenedCount;

    /**
     * Overall number of recipients
     */
    public /*int*/ $RecipientCount;

    /**
     * Total emails sent.
     */
    public /*int*/ $SentCount;

    /**
     * Total emails failed.
     */
    public /*int*/ $FailedCount;

    /**
     * Total emails unsubscribed
     */
    public /*int*/ $UnsubscribedCount;

    /**
     * Abuses - mails sent to user without their consent
     */
    public /*int*/ $FailedAbuse;

    /**
     * List of CampaignTemplate for sending A-X split testing.
     */
    public /*Array<\ElasticEmailEnums\CampaignChannel>*/ $TemplateChannels;

    /**
     * Should the opens be tracked? If no value has been provided, Account's default setting will be used.
     */
    public /*?bool*/ $TrackOpens;

    /**
     * Should the clicks be tracked? If no value has been provided, Account's default setting will be used.
     */
    public /*?bool*/ $TrackClicks;

    /**
     * The utm_source marketing parameter appended to each link in the campaign.
     */
    public /*string*/ $UtmSource;

    /**
     * The utm_medium marketing parameter appended to each link in the campaign.
     */
    public /*string*/ $UtmMedium;

    /**
     * The utm_campaign marketing parameter appended to each link in the campaign.
     */
    public /*string*/ $UtmCampaign;

    /**
     * The utm_content marketing parameter appended to each link in the campaign.
     */
    public /*string*/ $UtmContent;

}

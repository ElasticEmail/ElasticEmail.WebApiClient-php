<?php
	namespace ElasticEmailEnums; 

class CampaignTemplate
{
    /**
     * 
     */
    public /*?int*/ $CampaignTemplateID;

    /**
     * 
     */
    public /*string*/ $CampaignTemplateName;

    /**
     * Name of campaign's status
     */
    public /*\ElasticEmailEnums\CampaignStatus*/ $Status;

    /**
     * Name of your custom IP Pool to be used in the sending process
     */
    public /*string*/ $PoolName;

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

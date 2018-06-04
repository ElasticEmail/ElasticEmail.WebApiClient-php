<?php
	namespace ElasticEmailEnums; 

class CampaignTemplate
{
    /**
     * ID number of selected Channel.
     */
    public /*?int*/ $ChannelID;

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

}

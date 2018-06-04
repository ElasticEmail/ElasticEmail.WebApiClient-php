<?php
	namespace ElasticEmailEnums; 

abstract class CampaignTriggerType
{
    /**
     * 
     */
    const SendNow = 1;

    /**
     * 
     */
    const FutureScheduled = 2;

    /**
     * 
     */
    const OnAdd = 3;

    /**
     * 
     */
    const OnOpen = 4;

    /**
     * 
     */
    const OnClick = 5;

}

<?php
	namespace ElasticEmailEnums; 

class InboundOptions
{
    /**
     * URL used for tracking action of inbound emails
     */
    public /*string*/ $HubCallbackUrl;

    /**
     * Domain you use as your inbound domain
     */
    public /*string*/ $InboundDomain;

    /**
     * True, if you want inbound email to only process contacts from your Account. Otherwise, false
     */
    public /*bool*/ $InboundContactsOnly;

}

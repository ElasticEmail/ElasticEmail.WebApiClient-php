<?php
	namespace ElasticEmailEnums; 

class ContactStatusCounts
{
    /**
     * Number of engaged contacts
     */
    public /*long*/ $Engaged;

    /**
     * Number of active contacts
     */
    public /*long*/ $Active;

    /**
     * Number of complaint messages
     */
    public /*long*/ $Complaint;

    /**
     * Number of unsubscribed messages
     */
    public /*long*/ $Unsubscribed;

    /**
     * Number of bounced messages
     */
    public /*long*/ $Bounced;

    /**
     * Number of inactive contacts
     */
    public /*long*/ $Inactive;

    /**
     * Number of transactional contacts
     */
    public /*long*/ $Transactional;

    /**
     * 
     */
    public /*long*/ $Stale;

    /**
     * 
     */
    public /*long*/ $NotConfirmed;

}

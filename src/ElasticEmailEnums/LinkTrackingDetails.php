<?php
	namespace ElasticEmailEnums; 

class LinkTrackingDetails
{
    /**
     * Number of items.
     */
    public /*int*/ $Count;

    /**
     * True, if there are more detailed data available. Otherwise, false
     */
    public /*bool*/ $MoreAvailable;

    /**
     * 
     */
    public /*Array<\ElasticEmailEnums\TrackedLink>*/ $TrackedLink;

}

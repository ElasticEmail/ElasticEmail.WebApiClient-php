<?php
	namespace ElasticEmailEnums; 

class EventLog
{
    /**
     * Starting date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*?DateTime*/ $From;

    /**
     * Ending date for search in YYYY-MM-DDThh:mm:ss format.
     */
    public /*?DateTime*/ $To;

    /**
     * Number of recipients
     */
    public /*Array<\ElasticEmailEnums\RecipientEvent>*/ $Recipients;

}

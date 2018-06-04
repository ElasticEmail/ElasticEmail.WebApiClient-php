<?php
	namespace ElasticEmailEnums; 

class ContactHistory
{
    /**
     * ID of history of selected Contact.
     */
    public /*long*/ $ContactHistoryID;

    /**
     * Type of event occured on this Contact.
     */
    public /*string*/ $EventType;

    /**
     * Numeric code of event occured on this Contact.
     */
    public /*\ElasticEmailEnums\ContactHistEventType*/ $EventTypeValue;

    /**
     * Formatted date of event.
     */
    public /*string*/ $EventDate;

    /**
     * Name of selected channel.
     */
    public /*string*/ $ChannelName;

    /**
     * Name of template.
     */
    public /*string*/ $TemplateName;

    /**
     * IP Address of the event.
     */
    public /*string*/ $IPAddress;

    /**
     * Country of the event.
     */
    public /*string*/ $Country;

    /**
     * Information about the event
     */
    public /*string*/ $Data;

}

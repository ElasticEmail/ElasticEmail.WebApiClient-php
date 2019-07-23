<?php
	namespace ElasticEmailEnums; 

class BlockedContact
{
    /**
     * Proper email address.
     */
    public /*string*/ $Email;

    /**
     * Status of the given resource
     */
    public /*string*/ $Status;

    /**
     * RFC error message
     */
    public /*string*/ $FriendlyErrorMessage;

    /**
     * Last change date
     */
    public /*string*/ $DateUpdated;

}

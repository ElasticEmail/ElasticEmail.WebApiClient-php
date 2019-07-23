<?php
	namespace ElasticEmailEnums; 

abstract class ContactSort
{
    /**
     * 
     */
    const Unknown = 0;

    /**
     * Sort by date added ascending order
     */
    const DateAddedAsc = 1;

    /**
     * Sort by date added descending order
     */
    const DateAddedDesc = 2;

    /**
     * Sort by date updated ascending order
     */
    const DateUpdatedAsc = 3;

    /**
     * Sort by date updated descending order
     */
    const DateUpdatedDesc = 4;

}

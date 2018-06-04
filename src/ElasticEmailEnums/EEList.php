<?php
	namespace ElasticEmailEnums; 

class EEList
{
    /**
     * ID number of selected list.
     */
    public /*int*/ $ListID;

    /**
     * Name of your list.
     */
    public /*string*/ $ListName;

    /**
     * Number of items.
     */
    public /*int*/ $Count;

    /**
     * ID code of list
     */
    public /*?Guid*/ $PublicListID;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $DateAdded;

    /**
     * True: Allow unsubscribing from this list. Otherwise, false
     */
    public /*bool*/ $AllowUnsubscribe;

    /**
     * Query used for filtering.
     */
    public /*string*/ $Rule;

}

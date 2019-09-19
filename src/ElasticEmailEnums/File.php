<?php
	namespace ElasticEmailEnums; 

class File
{
    /**
     * Name of your file including extension.
     */
    public /*string*/ $FileName;

    /**
     * Size of your attachment (in bytes).
     */
    public /*?int*/ $Size;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $DateAdded;

    /**
     * Date when the file be deleted from your Account.
     */
    public /*?DateTime*/ $ExpirationDate;

    /**
     * Content type of the file.
     */
    public /*string*/ $ContentType;

}

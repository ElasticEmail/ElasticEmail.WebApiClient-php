<?php
	namespace ElasticEmailEnums; 

class Export
{
    /**
     * 
     */
    public /*Guid*/ $PublicExportID;

    /**
     * Date the export was created
     */
    public /*DateTime*/ $DateAdded;

    /**
     * Type of export
     */
    public /*string*/ $Type;

    /**
     * Current status of export
     */
    public /*string*/ $Status;

    /**
     * Long description of the export
     */
    public /*string*/ $Info;

    /**
     * Name of the file
     */
    public /*string*/ $Filename;

    /**
     * Link to download the export
     */
    public /*string*/ $Link;

    /**
     * Log start date (for Type = Log only)
     */
    public /*?DateTime*/ $LogFrom;

    /**
     * Log end date (for Type = Log only)
     */
    public /*?DateTime*/ $LogTo;

}

<?php
	namespace ElasticEmailEnums; 

class Export
{
    /**
     * ID of the exported file
     */
    public /*Guid*/ $PublicExportID;

    /**
     * Date the export was created.
     */
    public /*DateTime*/ $DateAdded;

    /**
     * Type of export
     */
    public /*\ElasticEmailEnums\ExportType*/ $ExportType;

    /**
     * Status of the export
     */
    public /*\ElasticEmailEnums\ExportStatus*/ $ExportStatus;

    /**
     * Long description of the export.
     */
    public /*string*/ $Info;

    /**
     * Name of the exported file.
     */
    public /*string*/ $Filename;

    /**
     * Link to download the export.
     */
    public /*string*/ $Link;

    /**
     * Log start date (for Type = Log only).
     */
    public /*?DateTime*/ $LogFrom;

    /**
     * Log end date (for Type = Log only).
     */
    public /*?DateTime*/ $LogTo;

}

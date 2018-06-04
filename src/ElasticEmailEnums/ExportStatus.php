<?php
	namespace ElasticEmailEnums; 

abstract class ExportStatus
{
    /**
     * Export had an error and can not be downloaded.
     */
    const Error = -1;

    /**
     * Export is currently loading and can not be downloaded.
     */
    const Loading = 0;

    /**
     * Export is currently available for downloading.
     */
    const Ready = 1;

    /**
     * Export is no longer available for downloading.
     */
    const Expired = 2;

}

<?php
	namespace ElasticEmailApi; 

class Export extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Check the current status of the export.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicExportID ID of the exported file
     * @return \ElasticEmailEnums\ExportStatus
     */
    public function CheckStatus($publicExportID) {
        return $this->sendRequest('export/checkstatus', array(
                    'publicExportID' => $publicExportID));
    }

    /**
     * Delete the specified export.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param Guid $publicExportID ID of the exported file
     */
    public function EEDelete($publicExportID) {
        return $this->sendRequest('export/delete', array(
                    'publicExportID' => $publicExportID));
    }

    /**
     * Download the specified export files in one package
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<Guid> $publicExportIDs 
     * @return File
     */
    public function DownloadBulk($publicExportIDs) {
        return $this->sendRequest('export/downloadbulk', array(
                    'publicExportIDs' => (count($publicExportIDs) === 0) ? null : join(';', $publicExportIDs)));
    }

    /**
     * Returns a list of all exported data.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\Export>
     */
    public function EEList($limit = 0, $offset = 0) {
        return $this->sendRequest('export/list', array(
                    'limit' => $limit,
                    'offset' => $offset));
    }

}

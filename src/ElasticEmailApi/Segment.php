<?php
	namespace ElasticEmailApi; 

class Segment extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Create new segment, based on specified RULE.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $segmentName Name of your segment.
     * @param string $rule Query used for filtering.
     * @return \ElasticEmailEnums\Segment
     */
    public function Add($segmentName, $rule) {
        return $this->sendRequest('segment/add', array(
                    'segmentName' => $segmentName,
                    'rule' => $rule));
    }

    /**
     * Copy your existing Segment with the optional new rule and custom name
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $sourceSegmentName The name of the segment you want to copy
     * @param string $newSegmentName New name of your segment if you want to change it.
     * @param string $rule Query used for filtering.
     * @return \ElasticEmailEnums\Segment
     */
    public function EECopy($sourceSegmentName, $newSegmentName = null, $rule = null) {
        return $this->sendRequest('segment/copy', array(
                    'sourceSegmentName' => $sourceSegmentName,
                    'newSegmentName' => $newSegmentName,
                    'rule' => $rule));
    }

    /**
     * Delete existing segment.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $segmentName Name of your segment.
     */
    public function EEDelete($segmentName) {
        return $this->sendRequest('segment/delete', array(
                    'segmentName' => $segmentName));
    }

    /**
     * Exports all the contacts from the provided segment
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $segmentName Name of your segment.
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export($segmentName, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('segment/export', array(
                    'segmentName' => $segmentName,
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName));
    }

    /**
     * Lists all your available Segments
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param bool $includeHistory True: Include history of last 30 days. Otherwise, false.
     * @param ?DateTime $from From what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to To what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.
     * @return Array<\ElasticEmailEnums\Segment>
     */
    public function EEList($includeHistory = false, $from = null, $to = null) {
        return $this->sendRequest('segment/list', array(
                    'includeHistory' => $includeHistory,
                    'from' => $from,
                    'to' => $to));
    }

    /**
     * Lists your available Segments using the provided names
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $segmentNames Names of segments you want to load. Will load all contacts if left empty or the 'All Contacts' name has been provided
     * @param bool $includeHistory True: Include history of last 30 days. Otherwise, false.
     * @param ?DateTime $from From what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to To what date should the segment history be shown. In YYYY-MM-DDThh:mm:ss format.
     * @return Array<\ElasticEmailEnums\Segment>
     */
    public function LoadByName($segmentNames, $includeHistory = false, $from = null, $to = null) {
        return $this->sendRequest('segment/loadbyname', array(
                    'segmentNames' => (count($segmentNames) === 0) ? null : join(';', $segmentNames),
                    'includeHistory' => $includeHistory,
                    'from' => $from,
                    'to' => $to));
    }

    /**
     * Rename or change RULE for your segment
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $segmentName Name of your segment.
     * @param string $newSegmentName New name of your segment if you want to change it.
     * @param string $rule Query used for filtering.
     * @return \ElasticEmailEnums\Segment
     */
    public function Update($segmentName, $newSegmentName = null, $rule = null) {
        return $this->sendRequest('segment/update', array(
                    'segmentName' => $segmentName,
                    'newSegmentName' => $newSegmentName,
                    'rule' => $rule));
    }

}

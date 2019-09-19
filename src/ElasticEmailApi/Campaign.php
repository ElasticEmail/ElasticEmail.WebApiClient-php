<?php
	namespace ElasticEmailApi; 

class Campaign extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Adds a Campaign to the queue for processing based on the configuration.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\Campaign $campaign JSON representation of a campaign
     * @return int
     */
    public function Add($campaign) {
        return $this->sendRequest('campaign/add', array(
                    'campaign' => $campaign));
    }

    /**
     * Makes a copy of a campaign configuration and leaves it in draft mode for further editing.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $channelID ID number of selected Channel.
     * @param string $newCampaignName 
     * @return int
     */
    public function EECopy($channelID, $newCampaignName = null) {
        return $this->sendRequest('campaign/copy', array(
                    'channelID' => $channelID,
                    'newCampaignName' => $newCampaignName));
    }

    /**
     * Deletes the Campaign.  This will not cancel emails that are in progress, see /log/cancelinprogress for this option.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $channelID ID number of selected Channel.
     */
    public function EEDelete($channelID) {
        return $this->sendRequest('campaign/delete', array(
                    'channelID' => $channelID));
    }

    /**
     * Export Campaign data to the chosen file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<int> $channelIDs List of campaign IDs used for processing
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export(array $channelIDs = array(), $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('campaign/export', array(
                    'channelIDs' => (count($channelIDs) === 0) ? null : join(';', $channelIDs),
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName));
    }

    /**
     * Returns a list all of your Campaigns.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $search Text fragment used for searching.
     * @param int $offset How many items should be returned ahead.
     * @param int $limit Maximum number of returned items.
     * @return Array<\ElasticEmailEnums\CampaignChannel>
     */
    public function EEList($search = null, $offset = 0, $limit = 0) {
        return $this->sendRequest('campaign/list', array(
                    'search' => $search,
                    'offset' => $offset,
                    'limit' => $limit));
    }

    /**
     * Updates a previously added Campaign.  Only Active and Paused campaigns can be updated.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param \ElasticEmailEnums\Campaign $campaign JSON representation of a campaign
     * @return int
     */
    public function Update($campaign) {
        return $this->sendRequest('campaign/update', array(
                    'campaign' => $campaign));
    }

}

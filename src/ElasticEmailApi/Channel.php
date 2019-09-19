<?php
	namespace ElasticEmailApi; 

class Channel extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Manually add a Channel to your Account to group email.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name Descriptive name of the channel.
     * @return string
     */
    public function Add($name) {
        return $this->sendRequest('channel/add', array(
                    'name' => $name));
    }

    /**
     * Delete the selected Channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the Channel to delete.
     */
    public function EEDelete($name) {
        return $this->sendRequest('channel/delete', array(
                    'name' => $name));
    }

    /**
     * Export selected Channels to chosen file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<string> $channelNames List of channel names used for processing
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export($channelNames, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('channel/export', array(
                    'channelNames' => (count($channelNames) === 0) ? null : join(';', $channelNames),
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName));
    }

    /**
     * Returns a list your Channels.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return Array<\ElasticEmailEnums\Channel>
     */
    public function EEList($limit = 0, $offset = 0) {
        return $this->sendRequest('channel/list', array(
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * Rename an existing Channel.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $name The name of the Channel to update.
     * @param string $newName The new name for the Channel.
     * @return string
     */
    public function Update($name, $newName) {
        return $this->sendRequest('channel/update', array(
                    'name' => $name,
                    'newName' => $newName));
    }

}

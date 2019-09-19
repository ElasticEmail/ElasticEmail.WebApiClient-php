<?php
	namespace ElasticEmailApi; 

class File extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Permanently deletes the file from your Account.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?int $fileID Unique identifier for the file stored in your Account.
     * @param string $filename Name of your file including extension.
     */
    public function EEDelete($fileID = null, $filename = null) {
        return $this->sendRequest('file/delete', array(
                    'fileID' => $fileID,
                    'filename' => $filename));
    }

    /**
     * Downloads the file to your local device.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $filename Name of your file including extension.
     * @param ?int $fileID Unique identifier for the file stored in your Account.
     * @return File
     */
    public function Download($filename = null, $fileID = null) {
        return $this->sendRequest('file/download', array(
                    'filename' => $filename,
                    'fileID' => $fileID));
    }

    /**
     * Lists all your available files.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @return Array<\ElasticEmailEnums\File>
     */
    public function ListAll() {
        return $this->sendRequest('file/listall', array());
    }

    /**
     * Returns detailed file information for the given file.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $filename Name of your file including extension.
     * @return \ElasticEmailEnums\File
     */
    public function Load($filename) {
        return $this->sendRequest('file/load', array(
                    'filename' => $filename));
    }

    /**
     * Uploads selected file to your Account using http form upload format (MIME multipart/form-data) or PUT method.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param File $file 
     * @param string $name Filename
     * @param ?int $expiresAfterDays Number of days the file should be stored for.
     * @param bool $enforceUniqueFileName If a file exists with the same name do not upload and override the file.
     * @return \ElasticEmailEnums\File
     */
    public function Upload($file, $name = null, $expiresAfterDays = 35, $enforceUniqueFileName = false) {
        return $this->sendRequest('file/upload', array(
                    'name' => $name,
                    'expiresAfterDays' => $expiresAfterDays,
                    'enforceUniqueFileName' => $enforceUniqueFileName), "POST", $file);
    }

}

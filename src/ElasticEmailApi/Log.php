<?php
	namespace ElasticEmailApi; 

class Log extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Cancels emails that are waiting to be sent.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $channelName Name of selected channel.
     * @param string $transactionID ID number of transaction
     */
    public function CancelInProgress($channelName = null, $transactionID = null) {
        return $this->sendRequest('log/cancelinprogress', array(
                    'channelName' => $channelName,
                    'transactionID' => $transactionID));
    }

    /**
     * Returns log of delivery events filtered by specified parameters.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<\ElasticEmailEnums\LogEventStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param string $channelName Name of selected channel.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @return \ElasticEmailEnums\EventLog
     */
    public function Events(array $statuses = array(), $from = null, $to = null, $channelName = null, $limit = 0, $offset = 0) {
        return $this->sendRequest('log/events', array(
                    'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
                    'from' => $from,
                    'to' => $to,
                    'channelName' => $channelName,
                    'limit' => $limit,
                    'offset' => $offset));
    }

    /**
     * Export email log information to the specified file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<\ElasticEmailEnums\LogJobStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param ?DateTime $from Start date.
     * @param ?DateTime $to End date.
     * @param string $channelName Name of selected channel.
     * @param bool $includeEmail True: Search includes emails. Otherwise, false.
     * @param bool $includeSms True: Search includes SMS. Otherwise, false.
     * @param array<\ElasticEmailEnums\MessageCategory> $messageCategory ID of message category
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @param string $email Proper email address.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function Export($statuses, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $from = null, $to = null, $channelName = null, $includeEmail = true, $includeSms = true, array $messageCategory = array(), $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null, $email = null) {
        return $this->sendRequest('log/export', array(
                    'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
                    'fileFormat' => $fileFormat,
                    'from' => $from,
                    'to' => $to,
                    'channelName' => $channelName,
                    'includeEmail' => $includeEmail,
                    'includeSms' => $includeSms,
                    'messageCategory' => (count($messageCategory) === 0) ? null : join(';', $messageCategory),
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName,
                    'email' => $email));
    }

    /**
     * Export delivery events log information to the specified file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<\ElasticEmailEnums\LogEventStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param string $channelName Name of selected channel.
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function ExportEvents(array $statuses = array(), $from = null, $to = null, $channelName = null, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('log/exportevents', array(
                    'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
                    'from' => $from,
                    'to' => $to,
                    'channelName' => $channelName,
                    'fileFormat' => $fileFormat,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName));
    }

    /**
     * Export detailed link tracking information to the specified file format.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param string $channelName Name of selected channel.
     * @param \ElasticEmailEnums\ExportFileFormats $fileFormat Format of the exported file
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @param \ElasticEmailEnums\CompressionFormat $compressionFormat FileResponse compression format. None or Zip.
     * @param string $fileName Name of your file including extension.
     * @return \ElasticEmailEnums\ExportLink
     */
    public function ExportLinkTracking($from, $to, $channelName = null, $fileFormat = \ElasticEmailEnums\ExportFileFormats::Csv, $limit = 0, $offset = 0, $compressionFormat = \ElasticEmailEnums\CompressionFormat::None, $fileName = null) {
        return $this->sendRequest('log/exportlinktracking', array(
                    'from' => $from,
                    'to' => $to,
                    'channelName' => $channelName,
                    'fileFormat' => $fileFormat,
                    'limit' => $limit,
                    'offset' => $offset,
                    'compressionFormat' => $compressionFormat,
                    'fileName' => $fileName));
    }

    /**
     * Track link clicks
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @param string $channelName Name of selected channel.
     * @return \ElasticEmailEnums\LinkTrackingDetails
     */
    public function LinkTracking($from = null, $to = null, $limit = 0, $offset = 0, $channelName = null) {
        return $this->sendRequest('log/linktracking', array(
                    'from' => $from,
                    'to' => $to,
                    'limit' => $limit,
                    'offset' => $offset,
                    'channelName' => $channelName));
    }

    /**
     * Returns logs filtered by specified parameters.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<\ElasticEmailEnums\LogJobStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param string $channelName Name of selected channel.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @param bool $includeEmail True: Search includes emails. Otherwise, false.
     * @param bool $includeSms True: Search includes SMS. Otherwise, false.
     * @param array<\ElasticEmailEnums\MessageCategory> $messageCategory ID of message category
     * @param string $email Proper email address.
     * @param string $ipaddress Search for recipients that we sent through this IP address
     * @return \ElasticEmailEnums\Log
     */
    public function Load($statuses, $from = null, $to = null, $channelName = null, $limit = 0, $offset = 0, $includeEmail = true, $includeSms = true, array $messageCategory = array(), $email = null, $ipaddress = null) {
        return $this->sendRequest('log/load', array(
                    'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
                    'from' => $from,
                    'to' => $to,
                    'channelName' => $channelName,
                    'limit' => $limit,
                    'offset' => $offset,
                    'includeEmail' => $includeEmail,
                    'includeSms' => $includeSms,
                    'messageCategory' => (count($messageCategory) === 0) ? null : join(';', $messageCategory),
                    'email' => $email,
                    'ipaddress' => $ipaddress));
    }

    /**
     * Returns notification logs filtered by specified parameters.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param array<\ElasticEmailEnums\LogJobStatus> $statuses List of comma separated message statuses: 0 for all, 1 for ReadyToSend, 2 for InProgress, 4 for Bounced, 5 for Sent, 6 for Opened, 7 for Clicked, 8 for Unsubscribed, 9 for Abuse Report
     * @param ?DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param ?DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param int $limit Maximum number of returned items.
     * @param int $offset How many items should be returned ahead.
     * @param array<\ElasticEmailEnums\MessageCategory> $messageCategory ID of message category
     * @param bool $useStatusChangeDate True, if 'from' and 'to' parameters should resolve to the Status Change date. To resolve to the creation date - false
     * @param \ElasticEmailEnums\NotificationType $notificationType 
     * @return \ElasticEmailEnums\Log
     */
    public function LoadNotifications($statuses, $from = null, $to = null, $limit = 0, $offset = 0, array $messageCategory = array(), $useStatusChangeDate = false, $notificationType = \ElasticEmailEnums\NotificationType::All) {
        return $this->sendRequest('log/loadnotifications', array(
                    'statuses' => (count($statuses) === 0) ? null : join(';', $statuses),
                    'from' => $from,
                    'to' => $to,
                    'limit' => $limit,
                    'offset' => $offset,
                    'messageCategory' => (count($messageCategory) === 0) ? null : join(';', $messageCategory),
                    'useStatusChangeDate' => $useStatusChangeDate,
                    'notificationType' => $notificationType));
    }

    /**
     * Loads summary information about activity in chosen date range.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param DateTime $from Starting date for search in YYYY-MM-DDThh:mm:ss format.
     * @param DateTime $to Ending date for search in YYYY-MM-DDThh:mm:ss format.
     * @param string $channelName Name of selected channel.
     * @param \ElasticEmailEnums\IntervalType $interval 'Hourly' for detailed information, 'summary' for daily overview
     * @param string $transactionID ID number of transaction
     * @return \ElasticEmailEnums\LogSummary
     */
    public function Summary($from, $to, $channelName = null, $interval = \ElasticEmailEnums\IntervalType::Summary, $transactionID = null) {
        return $this->sendRequest('log/summary', array(
                    'from' => $from,
                    'to' => $to,
                    'channelName' => $channelName,
                    'interval' => $interval,
                    'transactionID' => $transactionID));
    }

}

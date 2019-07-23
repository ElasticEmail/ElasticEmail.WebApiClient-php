<?php
	namespace ElasticEmailApi; 

class SMS extends \ElasticEmailClient\ElasticRequest
{
    public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
    {
        parent::__construct($apiConfiguration);
    }
    /**
     * Send a short SMS Message (maximum of 1600 characters) to any mobile phone.
     * @param string $apikey ApiKey that gives you access to our SMTP and HTTP API's.
     * @param string $to Mobile number you want to message. Can be any valid mobile number in E.164 format. To provide the country code you need to provide "+" before the number.  If your URL is not encoded then you need to replace the "+" with "%2B" instead.
     * @param string $body Body of your message. The maximum body length is 160 characters.  If the message body is greater than 160 characters it is split into multiple messages and you are charged per message for the number of messages required to send your length
     */
    public function Send($to, $body) {
        return $this->sendRequest('sms/send', array(
                    'to' => $to,
                    'body' => $body));
    }

}

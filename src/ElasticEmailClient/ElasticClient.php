<?php
	namespace ElasticEmailClient; 

    class ElasticClient
    {
        /**
         * ElasticClient constructor.
         * @param \ElasticEmailClient\ApiConfiguration $apiConfiguration
         */
        public function __construct(\ElasticEmailClient\ApiConfiguration $apiConfiguration)
        {            $this->AccessToken= new \ElasticEmailApi\AccessToken($apiConfiguration);
            $this->Account= new \ElasticEmailApi\Account($apiConfiguration);
            $this->Campaign= new \ElasticEmailApi\Campaign($apiConfiguration);
            $this->Channel= new \ElasticEmailApi\Channel($apiConfiguration);
            $this->Contact= new \ElasticEmailApi\Contact($apiConfiguration);
            $this->Domain= new \ElasticEmailApi\Domain($apiConfiguration);
            $this->Email= new \ElasticEmailApi\Email($apiConfiguration);
            $this->Export= new \ElasticEmailApi\Export($apiConfiguration);
            $this->File= new \ElasticEmailApi\File($apiConfiguration);
            $this->EEList= new \ElasticEmailApi\EEList($apiConfiguration);
            $this->Log= new \ElasticEmailApi\Log($apiConfiguration);
            $this->Segment= new \ElasticEmailApi\Segment($apiConfiguration);
            $this->SMS= new \ElasticEmailApi\SMS($apiConfiguration);
            $this->Template= new \ElasticEmailApi\Template($apiConfiguration);
            $this->ValidEmail= new \ElasticEmailApi\ValidEmail($apiConfiguration);

        }
        public $AccessToken;
        public $Account;
        public $Campaign;
        public $Channel;
        public $Contact;
        public $Domain;
        public $Email;
        public $Export;
        public $File;
        public $EEList;
        public $Log;
        public $Segment;
        public $SMS;
        public $Template;
        public $ValidEmail;

    }

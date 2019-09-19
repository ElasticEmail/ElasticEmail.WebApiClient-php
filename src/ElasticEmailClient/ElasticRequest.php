<?php
	namespace ElasticEmailClient; 

    abstract class ElasticRequest {
        /**
         * @var \ElasticEmailClient\ApiConfiguration ApiConfiguration
         */
        protected $configuration;

        /**
         * @var \GuzzleHttp\ClientInterface
         */
        private $httpClient;

        public function __construct(\ElasticEmailClient\ApiConfiguration $conf)
        {
            $this->configuration = $conf;

            if ($conf->getClientInterface()) {
                $this->httpClient = $conf->getClientInterface();
            } else {
                $this->httpClient = new \GuzzleHttp\Client([
                    'timeout'  => $this->configuration->getTimeout()
                ]);
            }
        }

        /**
         * @param string $url
         * @param array $data
         * @param string $method
         * @param array $attachments
         * @return \Psr\Http\Message\ResponseInterface
         * @throws \Exception
         */
        protected function sendRequest(string $url, array $data = [], string $method = 'POST', array $attachments = [])
        {
            $method = strtoupper($method);

                    if (!in_array($method, \ElasticEmailClient\ApiConfiguration::AVAILABLE_REQUEST_METHODS))
                    {
                        throw new \Exception('Unallowed request method type');
                    }

            $options = [];
            $data['apikey'] = $this->configuration->getApiKey();

            if (!empty($attachments) && $method === 'POST') {
                $options['multipart'] = $this->parseMultipart($attachments, $data);
            } else {
                if (!empty($data) && empty($attachments) && $method === 'POST') {
                    $options['form_params'] = $data;
                } else {
                    $url.= '?'.http_build_query($data, null, '&');
                }
            }

            $url = $this->configuration->getApiUrl(). $url;

            try
            {
                $response = $this->httpClient->request($method, $url, $options);
                $resp = json_decode($response->getBody()->getContents());
            } catch (\Exception $e) {
                throw $e;
            }

            if (!$resp->success) {
                throw new \Exception($resp->error);
            }

            if (isset($resp->data) && $resp->data) { return $resp->data; }

            return $resp;
        }

        /**
            * @param array $attachments
            * @param array $params
            * @return array
            */
        private function parseMultipart(array $attachments, array $params): array
        {
            $result = [];

            foreach ($attachments as $key => $attachment) {
                $result[] = [
                    'name' => 'file_'.$key,
                    'contents' => fopen($attachment, 'r'),
                    'filename' => basename($attachment)
                ];
            }

            foreach ($params as $key => $param) {
                $result[] = [
                    'name' => $key,
                    'contents' => $param
                ];
            }

            return $result;
        }

        public function setHttpClient($client)
        {
            $this->httpClient = $client;
            return $this;
        }

        /**
        * @return \GuzzleHttp\ClientInterface
        */
        public function getHttpClient()
        {
            return $this->httpClient;
        }

        /**
            * @param \ElasticEmailClient\ApiConfiguration $config
            * @return $this
            */
        public function setConfiguration(\ElasticEmailClient\ApiConfiguration $config)
        {
            $this->configuration = $config;

            return $this;
        }

        /**
            * @return \ElasticEmailClient\ApiConfiguration
            */
        public function getConfiguration()
        {
            return $this->configuration;
        }

    }

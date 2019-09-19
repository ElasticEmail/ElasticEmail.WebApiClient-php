<?php
	namespace ElasticEmailEnums; 

abstract class TrackingType
{
    /**
     * Tracking protocal that is not encrypted.
     */
    const Http = 0;

    /**
     * Tracking protocal using an external SSL Certificate for encryption.
     */
    const ExternalHttps = 1;

    /**
     * Tracking protocal using an internal SSL Certificate for encyrption.
     */
    const InternalCertHttps = 2;

    /**
     * Tracking protocal using LetsEncrypt Certificate for encryption.
     */
    const LetsEncryptCert = 3;

}

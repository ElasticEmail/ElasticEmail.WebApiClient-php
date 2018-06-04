<?php
	namespace ElasticEmailEnums; 

abstract class TrackingType
{
    /**
     * 
     */
    const None = -2;

    /**
     * 
     */
    const EEDelete = -1;

    /**
     * 
     */
    const Http = 0;

    /**
     * 
     */
    const ExternalHttps = 1;

    /**
     * 
     */
    const InternalCertHttps = 2;

    /**
     * 
     */
    const LetsEncryptCert = 3;

}

<?php
	namespace ElasticEmailEnums; 

class DomainDetail
{
    /**
     * Name of selected domain.
     */
    public /*string*/ $Domain;

    /**
     * True, if domain is used as default. Otherwise, false,
     */
    public /*bool*/ $DefaultDomain;

    /**
     * True, if SPF record is verified
     */
    public /*bool*/ $Spf;

    /**
     * True, if DKIM record is verified
     */
    public /*bool*/ $Dkim;

    /**
     * True, if MX record is verified
     */
    public /*bool*/ $MX;

    /**
     * 
     */
    public /*bool*/ $DMARC;

    /**
     * True, if tracking CNAME record is verified
     */
    public /*bool*/ $IsRewriteDomainValid;

    /**
     * True, if verification is available
     */
    public /*bool*/ $Verify;

    /**
     * 
     */
    public /*\ElasticEmailEnums\TrackingType*/ $Type;

    /**
     * 0 - Validated successfully, 1 - NotValidated , 2 - Invalid, 3 - Broken (tracking was frequnetly verfied in given period and still is invalid). For statuses: 0, 1, 3 tracking will be verified in normal periods. For status 2 tracking will be verified in high frequent periods.
     */
    public /*\ElasticEmailEnums\TrackingValidationStatus*/ $TrackingStatus;

    /**
     * 
     */
    public /*\ElasticEmailEnums\CertificateValidationStatus*/ $CertificateStatus;

    /**
     * 
     */
    public /*string*/ $CertificateValidationError;

    /**
     * 
     */
    public /*?\ElasticEmailEnums\TrackingType*/ $TrackingTypeUserRequest;

    /**
     * 
     */
    public /*bool*/ $VERP;

    /**
     * 
     */
    public /*string*/ $CustomBouncesDomain;

    /**
     * 
     */
    public /*bool*/ $IsCustomBouncesDomainDefault;

}

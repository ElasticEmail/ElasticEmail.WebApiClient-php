<?php
	namespace ElasticEmailEnums; 

abstract class AccessLevel
{
    /**
     * 
     */
    const None = 0;

    /**
     * 
     */
    const ViewAccount = 1;

    /**
     * 
     */
    const ViewContacts = 2;

    /**
     * 
     */
    const ViewForms = 4;

    /**
     * 
     */
    const ViewTemplates = 8;

    /**
     * 
     */
    const ViewCampaigns = 16;

    /**
     * 
     */
    const ViewChannels = 32;

    /**
     * 
     */
    const ViewAutomations = 64;

    /**
     * 
     */
    const ViewSurveys = 128;

    /**
     * 
     */
    const ViewSettings = 256;

    /**
     * 
     */
    const ViewBilling = 512;

    /**
     * 
     */
    const ViewSubAccounts = 1024;

    /**
     * 
     */
    const ViewUsers = 2048;

    /**
     * 
     */
    const ViewFiles = 4096;

    /**
     * 
     */
    const ViewReports = 8192;

    /**
     * 
     */
    const ModifyAccount = 16384;

    /**
     * 
     */
    const ModifyContacts = 32768;

    /**
     * 
     */
    const ModifyForms = 65536;

    /**
     * 
     */
    const ModifyTemplates = 131072;

    /**
     * 
     */
    const ModifyCampaigns = 262144;

    /**
     * 
     */
    const ModifyChannels = 524288;

    /**
     * 
     */
    const ModifyAutomations = 1048576;

    /**
     * 
     */
    const ModifySurveys = 2097152;

    /**
     * 
     */
    const ModifyFiles = 4194304;

    /**
     * 
     */
    const Export = 8388608;

    /**
     * 
     */
    const SendSmtp = 16777216;

    /**
     * 
     */
    const SendSMS = 33554432;

    /**
     * 
     */
    const ModifySettings = 67108864;

    /**
     * 
     */
    const ModifyBilling = 134217728;

    /**
     * 
     */
    const ModifyProfile = 268435456;

    /**
     * 
     */
    const ModifySubAccounts = 536870912;

    /**
     * 
     */
    const ModifyUsers = 1073741824;

    /**
     * 
     */
    const Security = 2147483648;

    /**
     * 
     */
    const ModifyLanguage = 4294967296;

    /**
     * 
     */
    const ViewSupport = 8589934592;

    /**
     * 
     */
    const SendHttp = 17179869184;

    /**
     * 
     */
    const Modify2FA = 34359738368;

    /**
     * 
     */
    const ModifySupport = 68719476736;

    /**
     * 
     */
    const ViewCustomFields = 137438953472;

    /**
     * 
     */
    const ModifyCustomFields = 274877906944;

    /**
     * 
     */
    const ModifyWebNotifications = 549755813888;

    /**
     * 
     */
    const ExtendedLogs = 1099511627776;

    /**
     * 
     */
    const VerifyEmails = 2199023255552;

}

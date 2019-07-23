<?php
	namespace ElasticEmailEnums; 

class UsageData
{
    /**
     * Date in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $Date;

    /**
     * Number of finished tasks
     */
    public /*int*/ $JobCount;

    /**
     * Overall number of recipients
     */
    public /*int*/ $RecipientCount;

    /**
     * Number of inbound emails
     */
    public /*int*/ $InboundCount;

    /**
     * Number of attachments sent
     */
    public /*int*/ $AttachmentCount;

    /**
     * Size of attachments sent
     */
    public /*long*/ $AttachmentsSize;

    /**
     * Calculated cost of sending
     */
    public /*decimal*/ $Cost;

    /**
     * Number of pricate IPs
     */
    public /*?int*/ $PrivateIPCount;

    /**
     * 
     */
    public /*decimal*/ $PrivateIPCost;

    /**
     * Number of SMS
     */
    public /*?int*/ $SmsCount;

    /**
     * Overall cost of SMS
     */
    public /*decimal*/ $SmsCost;

    /**
     * Cost of email credits
     */
    public /*?int*/ $EmailCreditsCost;

    /**
     * Daily cost of Contact Delivery Tools
     */
    public /*decimal*/ $ContactCost;

    /**
     * Number of contacts
     */
    public /*long*/ $ContactCount;

    /**
     * 
     */
    public /*decimal*/ $SupportCost;

    /**
     * 
     */
    public /*decimal*/ $EmailCost;

    /**
     * 
     */
    public /*decimal*/ $VerificationCost;

    /**
     * 
     */
    public /*int*/ $VerificationCount;

    /**
     * 
     */
    public /*decimal*/ $InboundEmailCost;

    /**
     * 
     */
    public /*int*/ $InboundEmailCount;

}

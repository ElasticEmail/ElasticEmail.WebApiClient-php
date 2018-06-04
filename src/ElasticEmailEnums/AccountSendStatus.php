<?php
	namespace ElasticEmailEnums; 

abstract class AccountSendStatus
{
    /**
     * Account doesn't have enough credits
     */
    const NotEnoughCredits = 1;

    /**
     * Account can send e-mails but only without the attachments
     */
    const CanSendEmailsNoAttachments = 2;

    /**
     * Account has exceeded his daily send limit
     */
    const DailySendLimitExceeded = 3;

    /**
     * Account is ready to send e-mails
     */
    const CanSendEmails = 4;

}

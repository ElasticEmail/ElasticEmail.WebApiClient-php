<?php
	namespace ElasticEmailEnums; 

class EmailStatus
{
    /**
     * Email address this email was sent from.
     */
    public /*string*/ $From;

    /**
     * Email address this email was sent to.
     */
    public /*string*/ $To;

    /**
     * Date the email was submitted.
     */
    public /*DateTime*/ $Date;

    /**
     * Value of email's status
     */
    public /*\ElasticEmailEnums\LogJobStatus*/ $Status;

    /**
     * Name of email's status
     */
    public /*string*/ $StatusName;

    /**
     * Date of last status change.
     */
    public /*DateTime*/ $StatusChangeDate;

    /**
     * Date when the email was sent
     */
    public /*DateTime*/ $DateSent;

    /**
     * Date when the email changed the status to 'opened'
     */
    public /*?DateTime*/ $DateOpened;

    /**
     * Date when the email changed the status to 'clicked'
     */
    public /*?DateTime*/ $DateClicked;

    /**
     * Detailed error or bounced message.
     */
    public /*string*/ $ErrorMessage;

    /**
     * ID number of transaction
     */
    public /*Guid*/ $TransactionID;

}

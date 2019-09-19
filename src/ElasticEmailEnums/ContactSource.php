<?php
	namespace ElasticEmailEnums; 

abstract class ContactSource
{
    /**
     * Source of the contact is from sending an email via our SMTP or HTTP API's
     */
    const DeliveryApi = 0;

    /**
     * Contact was manually entered from the interface.
     */
    const ManualInput = 1;

    /**
     * Contact was uploaded via a file such as CSV.
     */
    const FileUpload = 2;

    /**
     * Contact was added from a public web form.
     */
    const WebForm = 3;

    /**
     * Contact was added from the contact api.
     */
    const ContactApi = 4;

    /**
     * Contact was added via the verification api.
     */
    const VerificationApi = 5;

    /**
     * Contacts were added via bulk verification api.
     */
    const FileVerificationApi = 6;

}

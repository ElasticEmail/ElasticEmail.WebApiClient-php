<?php
	namespace ElasticEmailEnums; 

abstract class ContactHistEventType
{
    /**
     * Contact opened an e-mail
     */
    const Opened = 2;

    /**
     * Contact clicked an e-mail
     */
    const Clicked = 3;

    /**
     * E-mail sent to the contact bounced
     */
    const Bounced = 10;

    /**
     * Contact unsubscribed
     */
    const Unsubscribed = 11;

    /**
     * Contact complained to an e-mail
     */
    const Complained = 12;

    /**
     * Contact clicked an activation link
     */
    const Activated = 20;

    /**
     * Contact has opted to receive Transactional-only e-mails
     */
    const TransactionalUnsubscribed = 21;

    /**
     * Contact's status was changed manually
     */
    const ManualStatusChange = 22;

    /**
     * An Activation e-mail was sent
     */
    const ActivationSent = 24;

    /**
     * Contact was deleted
     */
    const Deleted = 28;

}

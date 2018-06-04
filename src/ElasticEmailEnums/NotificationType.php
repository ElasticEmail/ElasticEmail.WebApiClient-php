<?php
	namespace ElasticEmailEnums; 

abstract class NotificationType
{
    /**
     * Both, email and web, notifications
     */
    const All = 0;

    /**
     * Only email notifications
     */
    const Email = 1;

    /**
     * Only web notifications
     */
    const Web = 2;

}

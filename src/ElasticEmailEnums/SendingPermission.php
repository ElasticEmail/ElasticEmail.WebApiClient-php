<?php
	namespace ElasticEmailEnums; 

abstract class SendingPermission
{
    /**
     * Sending not allowed.
     */
    const None = 0;

    /**
     * Allow sending via SMTP only.
     */
    const Smtp = 1;

    /**
     * Allow sending via HTTP API only.
     */
    const HttpApi = 2;

    /**
     * Allow sending via SMTP and HTTP API.
     */
    const SmtpAndHttpApi = 3;

    /**
     * Allow sending via the website interface only.
     */
    const EEInterface = 4;

    /**
     * Allow sending via SMTP and the website interface.
     */
    const SmtpAndInterface = 5;

    /**
     * Allow sendnig via HTTP API and the website interface.
     */
    const HttpApiAndInterface = 6;

    /**
     * Use access level sending permission.
     */
    const UseAccessLevel = 16;

    /**
     * Sending allowed via SMTP, HTTP API and the website interface.
     */
    const All = 255;

}

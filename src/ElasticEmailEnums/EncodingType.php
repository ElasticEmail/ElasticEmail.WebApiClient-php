<?php
	namespace ElasticEmailEnums; 

abstract class EncodingType
{
    /**
     * Encoding of the email is provided by the sender and not altered.
     */
    const UserProvided = -1;

    /**
     * No endcoding is set for the email.
     */
    const None = 0;

    /**
     * Encoding of the email is in Raw7bit format.
     */
    const Raw7bit = 1;

    /**
     * Encoding of the email is in Raw8bit format.
     */
    const Raw8bit = 2;

    /**
     * Encoding of the email is in QuotedPrintable format.
     */
    const QuotedPrintable = 3;

    /**
     * Encoding of the email is in Base64 format.
     */
    const Base64 = 4;

    /**
     * Encoding of the email is in Uue format.
     */
    const Uue = 5;

}

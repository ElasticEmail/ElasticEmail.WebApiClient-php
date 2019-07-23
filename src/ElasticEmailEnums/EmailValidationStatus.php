<?php
	namespace ElasticEmailEnums; 

abstract class EmailValidationStatus
{
    /**
     * 
     */
    const None = 0;

    /**
     * 
     */
    const Valid = 1;

    /**
     * 
     */
    const Unknown = 2;

    /**
     * 
     */
    const Risky = 3;

    /**
     * 
     */
    const Invalid = 4;

}

<?php
	namespace ElasticEmailEnums; 

class Payment
{
    /**
     * Date in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $Date;

    /**
     * Amount of money in transaction
     */
    public /*decimal*/ $Amount;

    /**
     * 
     */
    public /*decimal*/ $RegularAmount;

    /**
     * 
     */
    public /*decimal*/ $DiscountPercent;

    /**
     * Source of URL of payment
     */
    public /*string*/ $Source;

}

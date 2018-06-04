<?php
	namespace ElasticEmailEnums; 

class SpamCheck
{
    /**
     * Total spam score from
     */
    public /*string*/ $TotalScore;

    /**
     * Date in YYYY-MM-DDThh:ii:ss format
     */
    public /*string*/ $Date;

    /**
     * Default subject of email.
     */
    public /*string*/ $Subject;

    /**
     * Default From: email address.
     */
    public /*string*/ $FromEmail;

    /**
     * ID number of selected message.
     */
    public /*string*/ $MsgID;

    /**
     * Name of selected channel.
     */
    public /*string*/ $ChannelName;

    /**
     * 
     */
    public /*Array<\ElasticEmailEnums\SpamRule>*/ $Rules;

}

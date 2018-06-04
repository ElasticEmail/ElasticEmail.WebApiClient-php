<?php
	namespace ElasticEmailEnums; 

class AccessToken
{
    /**
     * Access which this Token grants
     */
    public /*\ElasticEmailEnums\AccessLevel*/ $AccessLevel;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * When was this AccessToken used last
     */
    public /*?DateTime*/ $LastUse;

}

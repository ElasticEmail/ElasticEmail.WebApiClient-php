<?php
	namespace ElasticEmailEnums; 

class AccessToken
{
    /**
     * Access level or permission to be assigned to this Access Token.
     */
    public /*\ElasticEmailEnums\AccessLevel*/ $AccessLevel;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * Date this AccessToken was last used.
     */
    public /*?DateTime*/ $LastUse;

}

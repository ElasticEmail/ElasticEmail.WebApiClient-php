<?php
	namespace ElasticEmailEnums; 

abstract class TemplateScope
{
    /**
     * Template is available for this account only.
     */
    const EEPrivate = 0;

    /**
     * Template is available for this account and it's sub-accounts.
     */
    const EEPublic = 1;

    /**
     * Template is a temporary draft, not to be used permanently.
     */
    const Draft = 2;

}

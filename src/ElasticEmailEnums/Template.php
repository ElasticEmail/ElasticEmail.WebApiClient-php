<?php
	namespace ElasticEmailEnums; 

class Template
{
    /**
     * ID number of template.
     */
    public /*int*/ $TemplateID;

    /**
     * 0 for API connections
     */
    public /*\ElasticEmailEnums\TemplateType*/ $TemplateType;

    /**
     * Filename
     */
    public /*string*/ $Name;

    /**
     * Date of creation in YYYY-MM-DDThh:ii:ss format
     */
    public /*DateTime*/ $DateAdded;

    /**
     * CSS style
     */
    public /*string*/ $Css;

    /**
     * Default subject of email.
     */
    public /*string*/ $Subject;

    /**
     * Default From: email address.
     */
    public /*string*/ $FromEmail;

    /**
     * Default From: name.
     */
    public /*string*/ $FromName;

    /**
     * HTML code of email (needs escaping).
     */
    public /*string*/ $BodyHtml;

    /**
     * AMP code of email (needs escaping).
     */
    public /*string*/ $BodyAmp;

    /**
     * Text body of email.
     */
    public /*string*/ $BodyText;

    /**
     * ID number of original template.
     */
    public /*int*/ $OriginalTemplateID;

    /**
     * 
     */
    public /*string*/ $OriginalTemplateName;

    /**
     * Enum: 0 - private, 1 - public, 2 - mockup
     */
    public /*\ElasticEmailEnums\TemplateScope*/ $TemplateScope;

    /**
     * Template's Tags
     */
    public /*Array<string>*/ $Tags;

}

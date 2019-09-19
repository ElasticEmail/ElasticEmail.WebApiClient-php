<?php
	namespace ElasticEmailEnums; 

abstract class TemplateType
{
    /**
     * Template supports any valid HTML
     */
    const RawHTML = 0;

    /**
     * Template is created for email and can only be modified in the drag and drop email editor
     */
    const DragDropEditor = 1;

    /**
     * Template is created for landing page and can only be modified in the drag and drop langing page editor
     */
    const LandingPageEditor = 2;

}

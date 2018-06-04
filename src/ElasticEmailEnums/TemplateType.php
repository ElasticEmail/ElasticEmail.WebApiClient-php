<?php
	namespace ElasticEmailEnums; 

abstract class TemplateType
{
    /**
     * Template supports any valid HTML
     */
    const RawHTML = 0;

    /**
     * Template is created and can only be modified in drag and drop editor
     */
    const DragDropEditor = 1;

}

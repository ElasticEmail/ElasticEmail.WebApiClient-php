<?php
	namespace ElasticEmailEnums; 

abstract class ExportType
{
    /**
     * Export contains detailed email log information.
     */
    const Log = 1;

    /**
     * Export contains detailed contact information.
     */
    const Contact = 2;

    /**
     * Export contains detailed campaign information.
     */
    const Campaign = 3;

    /**
     * Export contains detailed link tracking information.
     */
    const LinkTracking = 4;

    /**
     * Export contains detailed survey information.
     */
    const Survey = 5;

}

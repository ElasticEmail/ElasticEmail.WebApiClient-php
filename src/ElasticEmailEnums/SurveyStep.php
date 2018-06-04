<?php
	namespace ElasticEmailEnums; 

class SurveyStep
{
    /**
     * Identifier of the step
     */
    public /*int*/ $SurveyStepID;

    /**
     * Type of the step
     */
    public /*\ElasticEmailEnums\SurveyStepType*/ $SurveyStepType;

    /**
     * Type of the question
     */
    public /*\ElasticEmailEnums\QuestionType*/ $QuestionType;

    /**
     * Answer's content
     */
    public /*string*/ $Content;

    /**
     * Is the answer required
     */
    public /*bool*/ $Required;

    /**
     * Sequence of the answers
     */
    public /*int*/ $Sequence;

    /**
     * 
     */
    public /*Array<\ElasticEmailEnums\SurveyStepAnswer>*/ $SurveyStepAnswers;

}

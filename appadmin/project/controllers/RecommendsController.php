<?php

class Project_RecommendsController extends BaseController
{
	/**
	 *
	 * @var ProjectModel
	 */
	protected $model;
	
	public function init ()
	{
		
	}
	
	public function indexAction ()
    {
        $this->render('recommends-index');
    }
}
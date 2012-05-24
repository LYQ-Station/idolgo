<?php

class Project_HotspotController extends BaseController
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
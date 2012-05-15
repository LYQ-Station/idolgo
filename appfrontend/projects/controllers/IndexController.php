<?php

class Projects_IndexController extends BaseController
{
	/**
	 * @var ProjectsModel
	 */
	protected $model;
	
	public function init ()
	{
		$this->model = new ProjectsModel();
	}
	
	public function indexAction ()
	{
        $this->render('index');
	}
	
	public function infoAction ()
	{
		$this->render('info');
	}
	
	public function votersAction ()
	{
		$this->render('voters');
	}
	
	public function followAction ()
	{
		
	}
	
	public function voteAction ()
	{
		
	}
}
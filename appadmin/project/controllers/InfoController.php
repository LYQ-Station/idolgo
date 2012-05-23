<?php

class Project_InfoController extends BaseController
{
	/**
	 *
	 * @var ProjectModel
	 */
	protected $model;
	
	public function init ()
	{
		$this->model = new ProjectModel();
	}
	
	public function detailsAction ()
	{
		$this->render('project-details');
	}
	
	public function postsAction ()
	{
		$this->render('project-post-list');
	}
	
	public function followersAction ()
	{
		echo 'project followers';
	}
}
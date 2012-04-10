<?php

/**
 * 项目支持控制器
 *
 */
class Project_ProvideController extends BaseController
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
	
	public function optionsAction ()
	{
        $this->render('project-provide-options');
	}
	
	public function deleteoptAction ()
	{
		
	}
}
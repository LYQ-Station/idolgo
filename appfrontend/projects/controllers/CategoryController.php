<?php

class Projects_CategoryController extends BaseController
{
	public function indexAction ()
	{
		$this->render('category-index');
	}
	
	public function forAction ()
	{
		$this->render('projects-category');
	}
}
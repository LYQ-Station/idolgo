<?php

class Projects_IndexController extends BaseController
{
	public function indexAction ()
	{
        $this->render('index');
	}
	
	public function infoAction ()
	{
		$this->render('info');
	}
	
	public function addmyprojectAction ()
	{
		$this->render('add-my-project');
	}

	public function addpageAction ()
	{
		$this->render('addpage');
	}
	
	public function addAction ()
	{
		$this->forward('info');
	}
}
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

	public function addbasepageAction ()
	{
		$sn = substr(md5(microtime() . 'kaigan8'), 0, 16);
		
		$this->view->sn = $sn;
		$this->render('add-base-page');
	}
	
	public function addbaseAction ()
	{
		
	}

	public function adddescpageAction ()
	{
		$this->render('add-desc-page');
	}
	
	public function adddescAction ()
	{
		
	}
	
	public function addprovidepageAction ()
	{
		$this->render('add-level-page');
	}
	
	public function addprovideAction ()
	{
		
	}
}
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
}
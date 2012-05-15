<?php

class Profile_IndexController extends BaseController
{
	public function indexAction ()
	{
        $this->render('index');
	}
	
	public function votedAction ()
	{
		$this->render('voted');
	}
}
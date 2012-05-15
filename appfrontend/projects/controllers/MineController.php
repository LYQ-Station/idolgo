<?php

class Projects_MineController extends BaseController
{
	public function postedAction ()
	{
		$this->render('mine-posted');
	}
	
	public function votedAction ()
	{
		$this->render('mine-voted');
	}
	
	public function followedAction ()
	{
		$this->render('mine-followed');
	}
}
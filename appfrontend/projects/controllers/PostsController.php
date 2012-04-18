<?php

class Projects_PostsController extends BaseController
{
	public function ajaxlistAction ()
	{
		$this->_helper->layout->disableLayout();
		
        $this->render('posts-list');
	}
	
	public function ajaxpostAction ()
	{
		$this->_helper->layout->disableLayout();
	}
}
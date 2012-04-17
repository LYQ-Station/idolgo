<?php

/**
 * 首页控制器
 *
 */
class Index_IndexController extends BaseController
{
    /**
     *
     * @var IndexModel
     */
    protected $model;

    public function init ()
    {
        
    }
    
	public function indexAction ()
	{
		$this->model = new IndexModel();
        $this->render('index');
	}
}
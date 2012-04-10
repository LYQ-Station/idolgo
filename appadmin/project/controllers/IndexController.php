<?php

/**
 * 项目管理控制器
 *
 */
class Project_IndexController extends BaseController
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
	
	public function listAction ()
	{
		$page_no = intval($this->_request->page_no);
        
        if ($this->_request->keyword)
        {
            $params['keyword'] = addslashes($this->_request->keyword);
        }
        
        if ($this->_request->c)
        {
            $params['c'] = $this->_request->c;
        }
        
        $list = $this->model->get_list($page_no, $params);
        $this->view->items = $list->data;
        $this->view->navigator = $list->pager->get_navigator_str($this->build_url('list',null,null,$params));
		
        $this->render('project-list');
	}
	
	public function infoAction ()
	{
		$proj_id = intval($this->_request->proj_id);
		
		$this->render('project-info');
	}
	
	public function approvalAction ()
	{
		
	}
	
	public function closeAction ()
	{
		
	}
	
	public function setproductAction ()
	{
		
	}
	
	public function unsetproductAction ()
	{
		
	}
    
    public function searchfieldsAction ()
    {
        $this->_helper->layout->disableLayout();
        
        AjaxUtils::json(array(
            array('l'=>'ID', 'f'=>'id', 't'=>'str'),
            array('l'=>'父ID', 'f'=>'pid', 't'=>'str'),
            array('l'=>'标题', 'f'=>'title', 't'=>'str'),
            array('l'=>'发布时间', 'f'=>'crate_time', 't'=>'date')
        ));
    }
}
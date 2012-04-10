<?php

/**
 * 项目相关动态控制器
 *
 */
class Project_PostController extends BaseController
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
		$proj_id = intval($this->_request->proj_id);
		$page_no = intval($this->_request->page_no);
//        
//        if ($this->_request->keyword)
//        {
//            $params['keyword'] = addslashes($this->_request->keyword);
//        }
//        
//        if ($this->_request->c)
//        {
//            $params['c'] = $this->_request->c;
//        }
//        
//        $list = $this->model->get_post_list($proj_id, $page_no, $params);
//        $this->view->items = $list->data;
//        $this->view->navigator = $list->pager->get_navigator_str($this->build_url('list',null,null,$params));
		
        $this->render('project-post-list');
	}
	
	public function closeAction ()
	{
		
	}
}
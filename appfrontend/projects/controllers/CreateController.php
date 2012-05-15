<?php

class Projects_CreateController extends BaseController
{
	/**
	 * @var ProjectsModel
	 */
	protected $model;
	
	public function init ()
	{
		$this->model = new ProjectsModel();
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
		$params = $this->_request->getParams();
		$params = array_intersect_key($params, ProjectsModel::db_fields());
		
		$id = $this->model->add_project($params);
		
		$this->forward('adddescpage', null, null, array('id'=>$id));
	}

	public function adddescpageAction ()
	{
		$this->render('add-desc-page');
	}
	
	public function adddescAction ()
	{
		$id = intval($this->_request->id);
		
		$params = $this->_request->getParams();
		$params = array_intersect_key($params, ProjectsModel::db_fields());
		unset($params['id']);
		
		$this->model->update_project($id, $params);
		
		$this->forward('addprovidepage', null, null, array('id'=>$id));
	}
	
	public function addprovidepageAction ()
	{
		$this->render('add-provide-page');
	}
	
	public function addprovideAction ()
	{
		$id = intval($this->_request->id);
		
		$params = $this->_request->p;
		
//		print_r($params);exit;
		
		foreach ($params as $v)
		{
			$p = array_intersect_key($v, ProjectsModel::provide_db_fields());
			$this->model->add_project_provide($id, $p);
		}
		
		$this->forward('info', null, null, array('id'=>$id));
	}
}
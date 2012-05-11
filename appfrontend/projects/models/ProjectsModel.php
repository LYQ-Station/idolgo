<?php

/**
 * 首页处理模型
 *
 */
class ProjectsModel extends BaseModel
{
	static public function db_fields ()
	{
		return array(
			'id'	=> 1,
			'title'	=> 1,
			'manager_id'	=> 1,
			'create_location'	=> 1,
			'contents'	=> 1,
			'cover'	=> 1,
			'ctime'	=> 1,
			'deadline'	=> 1,
			'is_product'	=> 1,
			'in_store'	=> 1,
			'total_amount'	=> 1,
			'online_days'	=> 1,
			'creator_id'	=> 1,
			'status'	=> 1
		);
	}
	
	static public function provide_db_fields ()
	{
		return array(
			'pid'	=> 1,
			'amount'	=> 1,
			'contents'	=> 1,
			'ems'		=> 1,
			'person_limit'	=> 1
		);
	}
	
	public function add_project ($property)
	{
		$this->db->insert(DBTables::PROJECT, $property);
		return $this->db->lastInsertId();
	}
	
	public function update_project ($id, $property)
	{
		$where = $this->db->quoteInto("id = ?", $id);
	    $this->db->update(DBTables::PROJECT, $property, $where);
	}
	
	public function add_project_provide ($pid, $item)
	{
		$this->db->insert(DBTables::PROJECT_PROVIDE_OPTION, $item);
	}
	
}


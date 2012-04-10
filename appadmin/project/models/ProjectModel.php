<?php
/**
 * 分类模型
 * 
 */
class ProjectModel extends BaseModel
{
    public function get_list ($page_no, $params = null)
    {
        $select = $this->db->select()
                ->from(DBTables::PROJECT)
                ->order('ctime DESC');
        
        if (!empty($params))
        {
            if (isset($params['keyword']))
            {
                $select->orWhere('id=?', $params['keyword']);
                $select->orWhere('title=?', $params['keyword']);
                $select->orWhere('ctime=?', $params['keyword']);
            }
            else if (isset($params['c']))
            {
                $select->where(SearchFilter::decode($params['c']));
            }
        }
        
        $pager = new Pager($this->db, $select);
        $sql = $pager->get_page($page_no);
        
        $ret = new stdClass();
        $ret->data = $this->db->fetchAll($sql);
        $ret->pager = $pager;
        
        return $ret;
    }
	
	public function add ($tag)
	{
		$this->db->insert(DBTables::TAG, array(
			'title'			=> $tag,
			'ctime'	=> TimeUtils::db_time(),
			'status'		=> 0
		));
	}
	
	public function delete ($id)
	{
		$this->db->delete(DBTables::TAG, $this->db->quoteInto('id=?', $id));
	}
	
	public function edit ($id, array $fields)
	{
		$this->db->update(DBTables::TAG, $fields, $this->db->quoteInto('id=?', $id));
	}
	
	public function status ($id, $status = 0)
	{
		$this->edit($id, array('status'=>$status));
	}
	
	public function get_post_list ($proj_id, $page_no, $params = null)
	{
		$select = $this->db->select()
                ->from(DBTables::PROJECT)
				->where('proj_id=?', $proj_id)
                ->order('ctime DESC');
		
		$pager = new Pager($this->db, $select);
        $sql = $pager->get_page($page_no);
        
        $ret = new stdClass();
        $ret->data = $this->db->fetchAll($sql);
        $ret->pager = $pager;
        
        return $ret;
	}
}


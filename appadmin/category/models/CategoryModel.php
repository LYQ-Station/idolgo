<?php
/**
 * 分类模型
 * 
 */
class CategoryModel extends BaseModel
{
    public function get_list ($page_no, $params = null)
    {
        $select = $this->db->select()
                ->from(DBTables::CATEGORY)
                ->order('ctime DESC');
        
        if (!empty($params))
        {
            if (isset($params['keyword']))
            {
                $select->orWhere('id=?', $params['keyword']);
				$select->orWhere('sn=?', $params['keyword']);
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
	
	public function add ($category_property)
	{
		$this->db->insert(DBTables::CATEGORY, array(
			'sn'			=> $category_property['sn'],
			'title'			=> $category_property['title'],
			'condition'		=> $category_property['condition'],
			'ctime'			=> TimeUtils::db_time(),
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
}


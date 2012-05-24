<div class="page_head">
    <div class="page_title">Hotspot projects for index page</div>
    <div class="page_nav">
    	<button id="btn_save">Save</button>
        <button id="btn_cancel">Cancel</button>
        <a href="<?=$this->buildUrl('list', 'index', 'project')?>">Close</a>
    </div>
</div>
<div class="page_body_b">
	<table class="ttable">
        <tr>
            <th width="25"><input type="checkbox" /></th>
            <th width="70">ID</th>
            <th>项目名</th>
            <th>发起人</th>
            <th>创建地点</th>
            <th width="140">创建时间</th>
            <th width="30%">简介</th>
            <th width="120">操作</th>
        </tr>
        <?php if (!$this->items):?>
        <tr>
        	<td colspan="8" align="center">暂无记录。</td>
        </tr>
        <?php else: foreach ($this->items as $item):?>
        <tr>
            <td width="25"><input type="checkbox" /></td>
            <td><?=$item['id']?></td>
            <td><a href="<?=$this->buildUrl('info', null, null, array('proj_id'=>$item['id']))?>"><?=$item['title']?></a></td>
            <td><?=$item['manager_id']?></td>
			<td><?=$item['cloction']?></td>
			<td><?=$item['ctime']?></td>
			<td><?=$item['contents']?></td>
            <td width="150" class="op">
            	<a href="#" class="a_dis" lang="<?=$item['id']?>" status="<?=$item['status']?>"><?=HTMLUtils::pick_value2($item['status'],'Enable','Disable')?></a>
                <a href="#" class="a_del" lang="<?=$item['id']?>">Del</a>
            </td>
        </tr>
        <?php endforeach; endif;?>
    </table>
</div>
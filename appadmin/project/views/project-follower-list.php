<div class="page_body" style="top:0">
    <table class="ttable">
        <tr>
            <th width="25"><input type="checkbox" /></th>
            <th>ID</th>
            <th>Username</th>
			<th>ctime</th>
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
            <td><?=$item['title']?></td>
			<td><?=$item['ctime']?></td>
            <td width="120" class="op">
            	<a href="#" class="a_dis" lang="<?=$item['id']?>" status="<?=$item['status']?>"><?=HTMLUtils::pick_value2($item['status'],'Enable','Disable')?></a>
                <a href="#" class="a_del" lang="<?=$item['id']?>">Del</a>
            </td>
        </tr>
        <?php endforeach; endif;?>
    </table>
</div>
<div class="page_foot">
    <div class="right">
        <?=$this->navigator?>
    </div>
</div>
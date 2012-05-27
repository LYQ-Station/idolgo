<div class="page_body" style="top:0">
    <table class="ttable">
        <tr>
            <th width="25"><input type="checkbox" /></th>
            <th width="70">ID</th>
            <th>项目名</th>
            <th>发起人</th>
			<th>创建地点</th>
			<th width="140">创建时间</th>
			<th width="30%">简介</th>
        </tr>
        <?php if (!$this->items):?>
        <tr>
        	<td colspan="8" align="center">暂无记录。</td>
        </tr>
        <?php else: foreach ($this->items as $item):?>
        <tr>
            <td width="25"><input type="checkbox" /></td>
            <td><?=$item['id']?></td>
            <td><a href="<?=$this->buildUrl('info', 'info', 'project', array('proj_id'=>$item['id']))?>"><?=$item['title']?></a></td>
            <td><?=$item['manager_id']?></td>
			<td><?=$item['cloction']?></td>
			<td><?=$item['ctime']?></td>
			<td><?=$item['contents']?></td>
        </tr>
        <?php endforeach; endif;?>
    </table>
</div>
<div class="page_foot">
    <div class="right">
        <?=$this->navigator?>
    </div>
</div>
<?=JsUtils::ob_start();?>
<script>
$(function ()
{
	$('.ttable').tablex();
	
	$.ajaxSetup({
		global: false,
		type: "POST",
		dataType: 'json'
	});
});
</script>
<?=JsUtils::ob_end();?>
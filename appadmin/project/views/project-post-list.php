<div class="page_body" style="top:0">
    <table class="ttable">
        <tr>
            <th width="25"><input type="checkbox" /></th>
            <th>ID</th>
            <th>title</th>
            <th>creator</th>
			<th>ctime</th>
			<th>contents</th>
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
            <td><?=$item['creator']?></td>
			<td><?=$item['ctime']?></td>
			<td><?=$item['contents']?></td>
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
	
	$('.a_dis').live('click', function ()
	{
		var self = $(this);
		var tip = self.html();
		
		if (!confirm('Do you want to ' + tip + ' this Tag?'))
			return false;
		
		$.ajax({
			url: '<?=$this->buildUrl('ajaxdisable')?>',
			data: $.param({id:self.attr('lang'), status:self.attr('status')}),
			success: function (data)
			{
				if (data.err_no)
				{
					alert(data.err_text);
					return false;
				}
				
				self.html('0' == self.attr('status') ? 'Enable' : 'Disable');
			}
		});
	});
	
	$('.a_del').live('click', function ()
	{
		if (!confirm('Do you want to delete this Tag?'))
			return false;
		
		var self = $(this);
		
		$.ajax({
			url: '<?=$this->buildUrl('ajaxdelete')?>',
			data: $.param({id:self.attr('lang')}),
			success: function (data)
			{
				if (data.err_no)
				{
					alert(data.err_text);
					return false;
				}
				
				self.closest('tr').remove();
			}
		});
	});
});
</script>
<?=JsUtils::ob_end();?>
<div class="page_head">
    <div class="page_title">分类列表</div>
    <div class="page_nav">
    	<button id="btn_add">新增</button>
    	<a href="<?=$this->buildUrl('list')?>">全部</a>
    	<a href="<?=$this->buildUrl('list',null,null,array('c'=>SearchFilter::encode('status<>0')))?>">被禁用</a>
    </div>
    <div class="page_tools">
    	<form action="" method="get">
            <input type="text" name="keyword" value="<?=$this->request->keyword?>" />
            <input type="submit" value="查询" />
            <button id="srh_adv_btn">高级查询</button>
        </form>
    </div>
</div>
<div class="page_body">
    <table class="ttable">
        <tr>
            <th width="25"><input type="checkbox" /></th>
            <th>ID</th>
            <th>分类名</th>
            <th>创建时间</th>
            <th width="120">操作</th>
        </tr>
        <?php if (!$this->items):?>
        <tr>
        	<td colspan="5" align="center">暂无记录。</td>
        </tr>
        <?php else: foreach ($this->items as $item):?>
        <tr>
            <td width="25"><input type="checkbox" /></td>
            <td><?=$item['id']?></td>
            <td><?=$item['tag']?></td>
            <td><?=$item['create_time']?></td>
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
<div class="dialog">
	<form name="dialog_frm" id="dialog_frm">
		<table>
			<tr>
				<td>分类名:</td>
				<td><input type="text" name="new_category_name" /></td>
			</tr>
			<tr>
				<td>查询:</td>
				<td><textarea></textarea></td>
			</tr>
		</table>
	</form>
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
	
	$('#btn_add').click(function ()
	{
		$('.dialog').dialog({
			title : '添加新分类',
			buttons : {
				'确定' : function ()
				{
					var frm = document.forms['dialog_frm'];
					var text = frm['new_category_name'].value;
					if (0 == text.length)
					{
						alert('请填写分类名!');
						return false;
					}
					
					$.ajax({
						url: '<?=$this->buildUrl('ajaxadd')?>',
						data: $.param({category:text}),
						success: function (data)
						{
							if (data.err_no)
							{
								alert(data.err_text);
								return false;
							}
						}
					});
					
					$('.dialog').dialog('close');
				},
				'关闭' : function ()
				{
					$('.dialog').dialog('close');
				}
			}
		});
		
		return false;
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
	
	//-------------------------------- 高级查询窗口 --------------------------------
	var srh_win = null;
	$('#srh_adv_btn').click(function ()
	{
		$.ajax({
			url: '<?=$this->buildUrl('searchfields')?>',
			success: function (data)
			{	
				if (data.err_no)
				{
					alert(data.err_text);
					return false;
				}
				
				if (srh_win)
					srh_win.close();
								
				srh_win = open('<?=$this->buildUrl('index','search','default')?>', '', 'menubar=no,width=650,height=500');
				
				srh_win.navigator['data'] = data.content;
				var ob = {};
				srh_win.navigator['listener'] = $(ob);
				$(ob).bind('submit', function (evn, data)
				{
					window.location = '<?=$this->buildUrl('list')?>' + '?c=' + data;
				});
				
				srh_win.focus();
			}
		});
		
		return false;
	});
});
</script>
<?=JsUtils::ob_end();?>
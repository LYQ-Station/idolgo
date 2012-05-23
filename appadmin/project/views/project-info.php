<div class="page_head">
    <div class="page_title">项目内容</div>
    <div class="page_nav">
    	<button id="btn_approval" lang="0">Approval</button>
        <button id="btn_cancel">Cancel</button>
        <a href="<?=$this->buildUrl('list')?>">Close</a>
        
        <label id="tabs">
        <a href="<?=$this->buildUrl('details', 'info')?>">Details</a>
        <a href="<?=$this->buildUrl('posts', 'info')?>">Posts</a>
        <a href="<?=$this->buildUrl('followers', 'info')?>">Followers</a>
        </label>
    </div>
</div>
<div class="page_body_b">
	<iframe id="iframe" name="iframe" frameborder="0" style="position:absolute;top:0;left:0;bottom:0;right:0;width:100%;height:100%"></iframe>
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
	
	$('#btn_approval').click(function () {
		var self = this;
		
		if ('0' == self.lang)
		{
			$.ajax({
				url: '<?=$this->buildUrl('ajaxapproval')?>',
				data: $.param({id:<?=$this->request->proj_id?>}),
				success: function (data)
				{
					if (data.err_no)
					{
						alert(data.err_text);
						return false;
					}
					
					self.innerHTML = 'Unapproval';
					self.lang = 1;
					alert('have approval!');
					
					return false;
				}
			});
		}
		else
		{
			$.ajax({
				url: '<?=$this->buildUrl('ajaxunapproval')?>',
				data: $.param({id:<?=$this->request->proj_id?>}),
				success: function (data)
				{
					if (data.err_no)
					{
						alert(data.err_text);
						return false;
					}
					
					self.innerHTML = 'Approval';
					self.lang = 0;
					alert('have unapproval!');
					
					return false;
				}
			});
		}
	});
	
	$('#tabs>a').bind('click', function ()
	{
		$('#iframe').attr('src', this.href);
		return false;
	});
	
	$('#iframe').attr('src', $('#tabs>a').first().attr('href'));
});
</script>
<?=JsUtils::ob_end();?>
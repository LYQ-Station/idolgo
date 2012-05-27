<div class="page_head">
    <div class="page_title">User information</div>
    <div class="page_nav">
    	<button id="btn_disable" lang="0">Disable</button>
        <a href="<?=$this->buildUrl('list')?>">Close</a>
        
        <label id="tabs">
            <a href="<?=$this->buildUrl('details', 'user')?>">Details</a>
            <a href="<?=$this->buildUrl('projects', 'user')?>">Projects</a>
            <a href="<?=$this->buildUrl('followers', 'user')?>">Followers</a>
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
	$.ajaxSetup({
		global: false,
		type: "POST",
		dataType: 'json'
	});
	
	$('#btn_disable').click(function () {
		var self = this;
		
		if ('0' == self.lang)
		{
			$.ajax({
				url: '<?=$this->buildUrl('ajaxdisable')?>',
				data: $.param({id:<?=$this->request->id?>}),
				success: function (data)
				{
					if (data.err_no)
					{
						alert(data.err_text);
						return false;
					}
					
					self.innerHTML = 'Enable';
					self.lang = 1;
					alert('have disabled!');
					
					return false;
				}
			});
		}
		else
		{
			$.ajax({
				url: '<?=$this->buildUrl('ajaxenable')?>',
				data: $.param({id:<?=$this->request->id?>}),
				success: function (data)
				{
					if (data.err_no)
					{
						alert(data.err_text);
						return false;
					}
					
					self.innerHTML = 'Disable';
					self.lang = 0;
					alert('have enabled!');
					
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
	
	document.title = $('#tabs>a').first().attr('href');
	$('#iframe').attr('src', $('#tabs>a').first().attr('href'));
});
</script>
<?=JsUtils::ob_end();?>
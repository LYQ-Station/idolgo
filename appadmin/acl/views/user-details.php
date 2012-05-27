<div class="page_body_b" style="top:0">
	<table class="tinfo">
    	<tr>
			<td class="tlabel"><label class="r">Avatar:</label></td>
			<td><img width="350" height="550" /></td>
		</tr>
		<tr>
			<td class="tlabel"><label class="r">Username:</label></td>
			<td><input type="text" value="999" /></td>
		</tr>
		<tr>
			<td class="tlabel"><label class="r">Nickname:</label></td>
			<td><input type="text" value="999" /></td>
		</tr>
		<tr>
			<td class="tlabel"><label class="r">Memo:</label></td>
			<td>
				<textarea>xxxxx</textarea>
			</td>
		</tr>
		<tr>
			<td class="tlabel"><label class="r">web: </label></td>
			<td>
            	<div>Sina:<input type="text" value="http://weibo.com" /></div>
            	<div>QQ:<input type="text" value="999" /></div>
                <div>Q+:<input type="text" value="999" /></div>
                <div>Fackbook:<input type="text" value="999" /></div>
                <div>Twiter:<input type="text" value="999" /></div>
            </td>
		</tr>
		<tr>
			<td class="tlabel"><label class="r">last login ip:</label></td>
			<td><input type="text" value="999" /></td>
		</tr>
		<tr>
			<td class="tlabel"><label class="r">last login time:</label></td>
			<td><input type="text" value="999" /></td>
		</tr>
		<tr>
			<td class="tlabel"><label class="r">status: </label></td>
			<td>Enabled</td>
		</tr>
	</table>
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
});
</script>
<?=JsUtils::ob_end();?>
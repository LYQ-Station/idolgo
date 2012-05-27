<div class="page_body" style="top:0">
    <table class="ttable">
        <tr>
            <th width="25"><input type="checkbox" /></th>
            <th>ID</th>
            <th>Username</th>
			<th>ctime</th>
        </tr>
        <?php if (!$this->items):?>
        <tr>
        	<td colspan="4" align="center">暂无记录。</td>
        </tr>
        <?php else: foreach ($this->items as $item):?>
        <tr>
            <td width="25"><input type="checkbox" /></td>
            <td><?=$item['id']?></td>
            <td><?=$item['title']?></td>
			<td><?=$item['ctime']?></td>
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
});
</script>
<?=JsUtils::ob_end();?>
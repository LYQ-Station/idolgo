<div class="page_head">
    <div class="page_title">项目 provide options</div>
    <div class="page_nav">
    	<button id="btn_add">新增</button>
        <a href="<?=$this->buildUrl('list')?>">全部</a>
    </div>
</div>
<div class="page_body_b">
	<div>暂无记录。</div>
    
    <?php for ($i=0; $i<18; $i++): ?>
	<table class="tinfo">
    	<tr>
            <td class="tlabel"><label class="r">amount:</label></td>
            <td><input type="text" value="999" /></td>
        </tr>
        <tr>
        	<td class="tlabel"><label class="r">...</label></td>
            <td><textarea>xxxxxxxxxxggggggg</textarea></td>
        </tr>
    </table>
	<?php endfor;?>
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
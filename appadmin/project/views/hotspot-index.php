<style>
.proj_select_box {
	position:absolute;
	left:0;
	top:0;
	bottom:0;
	width:450px;
}

.buttons {
	position:absolute;
	top:0;
	left:450px;
	bottom:0;
	width:50px;
	text-align:center;
	padding-top:100px;
}

.proj_list {
	position:absolute;
	top:0;
	left:500px;
	right:0;
	bottom:0;
}
</style>
<div class="page_head">
    <div class="page_title">Hotspot projects for index page</div>
    <div class="page_nav">
    	<button id="btn_save">Save</button>
        <button id="btn_cancel">Cancel</button>
        <a href="<?=$this->buildUrl('list', 'index', 'project')?>">Close</a>
    </div>
</div>
<div class="page_body_b">
    <select class="proj_select_box" multiple="multiple">
    
    </select>
    <div class="buttons">
    	<button>&lt;</button><br /><br />
        <button>&gt;</button><br /><br />
        <button>↑</button><br /><br />
        <button>↓</button>
    </div>
    <div class="proj_list">
    	<div>
        	<form action="" method="post">
            	<input type="text" />
                <button>Search</button>
            </form>
        </div>
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
                <td><a href="<?=$this->buildUrl('info', null, null, array('proj_id'=>$item['id']))?>"><?=$item['title']?></a></td>
                <td><?=$item['manager_id']?></td>
                <td><?=$item['cloction']?></td>
                <td><?=$item['ctime']?></td>
                <td><?=$item['contents']?></td>
            </tr>
            <?php endforeach; endif;?>
        </table>
    </div>
</div>
<?=JsUtils::ob_start();?>
<script type="text/javascript">
$(function ()
{
	$('.ttable').tablex();
});
</script>
<?=JsUtils::ob_end();?>
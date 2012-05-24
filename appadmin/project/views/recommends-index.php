<div class="page_head">
    <div class="page_title">Recommend projects for index page</div>
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
	<table class="ttable">
        <tr>
            <th width="25"><input type="checkbox" /></th>
            <th width="70">ID</th>
            <th>项目名</th>
            <th>发起人</th>
            <th>创建地点</th>
            <th width="140">创建时间</th>
            <th width="30%">简介</th>
            <th width="120">操作</th>
        </tr>
    </table>
</div>
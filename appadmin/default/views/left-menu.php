<ul id="navigation" class="treeview">
    <ul>
        <li><span>项目分类</span>
            <ul class="sub">
                <li><a href="<?=$this->buildUrl('list','index','category')?>">分类列表</a></li>
                <li><a href="<?=$this->buildUrl('addpage','index','category')?>">添加分类</a></li>
            </ul>
        </li>
    </ul>
    
	<ul>
        <li><span>项目</span>
            <ul class="sub">
                <li><a href="<?=$this->buildUrl('list','index','project')?>">项目列表</a></li>
<!--                <li><a href="<?=$this->buildUrl('addpage','index','project')?>">添加项目</a></li>-->
            </ul>
        </li>
    </ul>
    
    <ul>
        <li><span>账目</span>
            <ul class="sub">
                <li><a href="<?=$this->buildUrl('list','index','payment')?>">支持资金列表</a></li>
                <li><a href="#">报表</a></li>
            </ul>
        </li>
    </ul>
	
    <ul>
    
        <li><span>Tags</span>
            <ul class="sub">
                <li><a href="<?=$this->buildUrl('addpage','index','tags')?>">Add Tag</a></li>
                <li><a href="<?=$this->buildUrl('list','index','tags')?>">Tags</a></li>
            </ul>
        </li>
    </ul>
    
<!--    <ul>
        <li><span>日志管理</span>
            <ul class="sub">
                <li><a href="#">前端日志</a></li>
                <li><a href="<?=$this->buildUrl('index','adminlog','default')?>">管理日志</a></li>
            </ul>
        </li>
    </ul>-->
	
	<ul>
        <li><span>系统设置</span>
            <ul class="sub">
                <li><a href="#">站点信息</a></li>
                <li><a href="#">缓存管理</a></li>
            </ul>
        </li>
    </ul>
    
    <ul>
        <li><span>Core Settings</span>
            <ul class="sub">
                <!--<li><span>基础资料设置</span>
                    <ul class="sub">
                        <li><a href="#">可选地区设置</a></li>
                        <li><a href="#">可选汽车设置</a></li>
                        <li><a href="#">常用标签</a></li>
                        <li><a href="#">常用分组类型</a></li>
                        <li><a href="#">常用活动类型</a></li>
                    </ul>
                </li>-->
                
                <li><span>ACL</span>
                    <ul class="sub">
                        <li><a href="<?=$this->buildUrl('index','group','acl')?>">组织架构权限树</a></li>
                        <li><a href="<?=$this->buildUrl('list','permitbasic','acl')?>">权限列表</a></li>
						<li><a href="<?=$this->buildUrl('index','role','acl')?>">角色</a></li>
                        <li><a href="<?=$this->buildUrl('list','user','acl')?>">用户</a></li>
                        <li><a href="<?=$this->buildUrl('list','token','acl')?>">当前令牌</a></li>
                    </ul>
                </li>
        
            </ul>
        </li>
    </ul>
</ul>
<?=JsUtils::ob_start();?>
<script type="text/javascript">
$(function ()
{
    $("#navigation").treeview({
        collapsed: false,
        click: function ()
        {
            $(top).trigger('set_frame', this);
            return false;
        }
    });
});
</script>
<?=JsUtils::ob_end();?>
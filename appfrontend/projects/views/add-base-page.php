project add page      项目简介
<hr />

<form action="<?=$this->buildUrl('add', 'index', 'projects')?>" method="post">
<table>
	<tr>
    	<td>项目类别</td>
        <td>
        	<select></select>
        </td>
    </tr>
    
    <tr>
    	<td>项目名称</td>
        <td>
        	<input type="text" name="title" />
        </td>
    </tr>
    
    <tr>
    	<td>发起地点</td>
        <td>
        	<select></select>
            <select></select>
        </td>
    </tr>
    
    <tr>
    	<td>简要说明</td>
        <td>
        	<textarea name="desc"></textarea>
        </td>
    </tr>
    
    <tr>
    	<td>缩略图</td>
        <td>
        	<input type="file" name="thumb" />
        </td>
    </tr>
    
    <tr>
    	<td>募集金额</td>
        <td>
        	<input type="text" name="total_amount" />
        </td>
    </tr>
    
    <tr>
    	<td>上线天数</td>
        <td>
        	<input type="text" name="online_days" />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><input type="submit" /></td>
    </tr>
</table>
</form>
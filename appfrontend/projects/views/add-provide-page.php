project add page      项目简介
<hr />

<form action="<?=$this->buildUrl('addprovide', 'index', 'projects')?>" method="post">
<input type="hidden" name="sn" value="<?=$this->sn?>" />
<table>
	<tr>
    	<td>支持金额</td>
        <td>
        	<input type="text" name="amount" />
        </td>
    </tr>
    
    <tr>
    	<td>回报内容</td>
        <td>
        	<input type="text" name="provide" />
        </td>
    </tr>
    
    <tr>
    	<td>说明图片</td>
        <td>
        	<select></select>
            <select></select>
        </td>
    </tr>
    
    <tr>
    	<td>限定名额</td>
        <td>
        	<input type="radio" name="limit" value="0" />
            <input type="radio" name="limit" value="1" />
            <input type="text" name="limit_num" />
        </td>
    </tr>
    
    <tr>
    	<td>是否邮寄</td>
        <td>
        	<input type="radio" name="ems" value="0" />
            <input type="radio" name="ems" value="1" />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><input type="submit" /></td>
    </tr>
</table>
</form>
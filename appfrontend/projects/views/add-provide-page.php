project add page      项目简介
<hr />

<form action="<?=$this->buildUrl('addprovide', 'index', 'projects')?>" method="post">
<input type="hidden" name="id" value="<?=$this->request->id?>" />
<table>
	<tr>
    	<td>支持金额</td>
        <td>
        	<input type="text" name="p[0][amount]" />
        </td>
    </tr>
    
    <tr>
    	<td>回报内容</td>
        <td>
        	<input type="text" name="p[0][contents]" />
        </td>
    </tr>
    
    <tr>
    	<td>说明图片</td>
        <td>
        	<input type="text" />
        </td>
    </tr>
    
    <tr>
    	<td>限定名额</td>
        <td>
        	<input type="radio" name="p[0][limit]" value="0" checked="checked" />
            <input type="radio" name="p[0][limit]" value="1" />
            <input type="text" name="p[0][person_limit]" />
        </td>
    </tr>
    
    <tr>
    	<td>是否邮寄</td>
        <td>
        	<input type="radio" name="p[0][ems]" value="0" checked="checked" />
            <input type="radio" name="p[0][ems]" value="1" />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><hr /></td>
    </tr>
    
    <tr>
    	<td>支持金额</td>
        <td>
        	<input type="text" name="p[1][amount]" />
        </td>
    </tr>
    
    <tr>
    	<td>回报内容</td>
        <td>
        	<input type="text" name="p[1][contents]" />
        </td>
    </tr>
    
    <tr>
    	<td>说明图片</td>
        <td>
        	<input type="text" />
        </td>
    </tr>
    
    <tr>
    	<td>限定名额</td>
        <td>
        	<input type="radio" name="p[1][limit]" value="0" checked="checked" />
            <input type="radio" name="p[1][limit]" value="1" />
            <input type="text" name="p[1][person_limit]" />
        </td>
    </tr>
    
    <tr>
    	<td>是否邮寄</td>
        <td>
        	<input type="radio" name="p[1][ems]" value="0" checked="checked" />
            <input type="radio" name="p[1][ems]" value="1" />
        </td>
    </tr>
    
    <tr>
    	<td colspan="2"><hr /></td>
    </tr>
    
    <tr>
    	<td>支持金额</td>
        <td>
        	<input type="text" name="p[2][amount]" />
        </td>
    </tr>
    
    <tr>
    	<td>回报内容</td>
        <td>
        	<input type="text" name="p[2][contents]" />
        </td>
    </tr>
    
    <tr>
    	<td>说明图片</td>
        <td>
        	<input type="text" />
        </td>
    </tr>
    
    <tr>
    	<td>限定名额</td>
        <td>
        	<input type="radio" name="p[2][limit]" value="0" checked="checked" />
            <input type="radio" name="p[2][limit]" value="1" />
            <input type="text" name="p[2][person_limit]" />
        </td>
    </tr>
    
    <tr>
    	<td>是否邮寄</td>
        <td>
        	<input type="radio" name="p[2][ems]" value="0" checked="checked" />
            <input type="radio" name="p[2][ems]" value="1" />
        </td>
    </tr>
    
</table>
<input type="submit" />
</form>
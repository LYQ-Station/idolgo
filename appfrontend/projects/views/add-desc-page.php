project add desc      项目简介
<hr />

<form action="<?=$this->buildUrl('adddesc', 'index', 'projects')?>" method="post">
<input type="hidden" name="id" value="<?=$this->request->id?>" />
<table>
	<tr>
    	<td>link</td>
        <td>
        	<input type="text" name="link" />
        </td>
    </tr>
    
    <tr>
    	<td>descript</td>
        <td>
        	<input type="text" name="contents" />
        </td>
    </tr>
        
    <tr>
    	<td colspan="2"><input type="submit" /></td>
    </tr>
</table>
</form>
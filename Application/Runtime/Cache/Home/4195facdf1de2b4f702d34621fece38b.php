<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ECSHOP 管理中心 - 商品 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="/tp/admin.28.com/Public/Styles/general.css" rel="stylesheet" type="text/css" />
<link href="/tp/admin.28.com/Public/Styles/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>
    <span class="action-span"><a href="/tp/admin.28.com/index.php/Home/Auth/add">添加</a></span>
    <span class="action-span1"><a href="#">ECSHOP 管理中心</a></span>
    <span id="search_id" class="action-span1"> -  </span>

    <div style="clear:both"></div>

</h1>

<form method="post" action="/tp/admin.28.com/index.php/Home/Auth/mdel" name="listForm">
    <div class="list-div" id="listDiv">
        <table cellpadding="3" cellspacing="1">

	
            <tr>
			<th width="30"> <input type="checkbox"/> </th>
			 				
				<th>ID</th>
				
                
							
				<th>名称</th>
				
                
							
				<th>父ID</th>
				
                
							
				<th>模块名</th>
				
                
							
				<th>控制器</th>
				
                
							
				<th>操作方法</th>
				
                
							
				<th>权限等级</th>
				
                
						<th>操作</th>
            </tr>

		
			<?php foreach($admin_array['list'] as $k=>$v):?>      
				
				
			<tr>
				<td><input type="checkbox" name="ids[]" value="<?php echo $v['auth_id'];?>"/></td>
				

												
												<td><?php echo $v['auth_id'];?></td>
												<td><?php echo str_repeat('&nbsp;&nbsp;',($v['auth_level'])*4).$v['auth_name'];?></td>
												<td><?php echo $v['auth_pid'];?></td>
												<td><?php echo $v['auth_m'];?></td>
												<td><?php echo $v['auth_c'];?></td>
												<td><?php echo $v['auth_a'];?></td>
												<td><?php echo $v['auth_level'];?></td>
								<td>
				
                <a href="/tp/admin.28.com/index.php/Home/Auth/update/id/<?php echo $v['auth_id'];?>" title="编辑">编辑</a> 
			
                <a href="/tp/admin.28.com/index.php/Home/Auth/del/id/<?php echo $v['auth_id'];?>" title="编辑">移除</a> 
			
                </td>
            </tr>
           <?php endforeach; ?>			<tr>
					<td><input type="submit" value="删除所选"/></td>
					<td align="right" nowrap="true" colspan="7"></td>
			</tr>
        </table>
    </div>

	</form>

<?php echo $admin_array['show'];?>
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="/tp/admin.28.com/Public/css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
          
        </div>
        <div></div>
		<h2>当位置:添加</h2>
        <div style="font-size: 13px;margin: 10px 5px">
            <form action="/tp/admin.28.com/index.php/Goods/Type/add" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">

			
					
					                <tr>
                    <td>名称</td>
                    <td><input type="text" name="type_name" /></td>
				<td>
								<span class="require-field">*</span>
								</td>
                </tr>
				
				


				 
			            </table>

			 <input type="submit" value="添加">
            </form>
        </div>
    </body>
</html>
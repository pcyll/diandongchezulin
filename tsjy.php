<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="width: 100%; height: 100%; margin: 0; padding: 0; ">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="ico.ico" rel="shortcut icon" />
		<title>类型管理</title>
	</head>

	<body style=" width: 100%; height: 100%; margin: 0; padding: 0;">
			<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="f6f6f6">
				<tr>
					<td colspan="3" padding="0">
						<img src="images/banner_dlcg.jpg" style="width: 100%; height: auto; overflow: hidden;" />
					</td>
				</tr>
				<tr bgcolor="#b2222b">
					<td align="center" style="width: 20%; border: 1px solid #FFF;">
						<a href="glydlcg.php" style="padding: 6px 0; color: #fff; display: inline-block; width: 20%; height: 100%;float: left;">用户管理</a>					
						<a href="clgl.php" style="padding: 6px 0; color: #fff; display: inline-block; width: 20%; height: 100%;float: left;">车辆管理</a>
						<a href="lxgl.php" style="padding: 6px 0; color: #fff; display: inline-block; width: 20%; height: 100%;float: left;">车辆类型</a>
						<a href="tsjy.php" style="padding: 6px 0; color: #fff; display: inline-block; width: 20%; height: 100%;float: left;">投诉建议</a>
						<a href="glyddgl.php" style="padding: 6px 0; color: #fff; display: inline-block; width: 20%; height: 100%;float: left;">订单管理</a>
					</td>
				</tr>
				<tr>
				<tr>
					<td height="465" colspan="3" align="right" valign="top">
						<table height="338" border="1" align="center" style="width: 100%; margin-top: 30px;">
							<tr>
                            	<td height="50" colspan="6" align="center">投诉建议列表</td> 
							</tr>
							<tr>
								<td width="14%" align="center">用户编号</td>
							  <td width="19%" align="center">用户名称</td>
							  <td width="12%" align="center">联系方式</td>
							  <td width="32%" align="center">投诉建议</td>
								<td width="23%" align="center">操作</td>
							</tr>

							<tr align="center">
								<td class="id">1</td>
								<td class="yhm">A</td>
								<td class="zcsj">12345</td>
								<td class="dq">建议内容建议内容11111</td>
                                <td>
                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_bj" style="padding: 0.3rem 0.8rem;font-size: 12px;">编辑</button>
                                    <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal_sc" style="padding: 0.3rem 0.8rem;font-size: 12px;">删除</button>
								</td>
							</tr>
							<tr align="center">
								<td class="id">2</td>
								<td class="yhm">B</td>
								<td class="zcsj">12345</td>
								<td class="dq">建议内容建议内容2222</td>
                                <td>
                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_bj" style="padding: 0.3rem 0.8rem;font-size: 12px;">编辑</button>
                                    <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal_sc" style="padding: 0.3rem 0.8rem;font-size: 12px;">删除</button>
								</td>
							</tr>
							<tr align="center">
								<td class="id">3</td>
								<td class="yhm">C</td>
								<td class="zcsj">12345</td>
								<td class="dq">建议内容建议内容3333</td>
                                <td>
                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_bj" style="padding: 0.3rem 0.8rem;font-size: 12px;">编辑</button>
                                    <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal_sc" style="padding: 0.3rem 0.8rem;font-size: 12px;">删除</button>
								</td>
							</tr>
							<tr align="center">
								<td class="id">4</td>
								<td class="yhm">D</td>
								<td class="zcsj">12345</td>
								<td class="dq">建议内容建议内容44444</td>
                                <td>
                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_bj" style="padding: 0.3rem 0.8rem;font-size: 12px;">编辑</button>
                                    <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal_sc" style="padding: 0.3rem 0.8rem;font-size: 12px;">删除</button>
								</td>
							</tr>
							<tr align="center">
								<td class="id">5</td>
								<td class="yhm">E</td>
								<td class="zcsj">12345</td>
								<td class="dq">建议内容建议内容55555</td>
                                <td>
                                    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_bj" style="padding: 0.3rem 0.8rem;font-size: 12px;">编辑</button>
                                    <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal_sc" style="padding: 0.3rem 0.8rem;font-size: 12px;">删除</button>
								</td>
							</tr>
						</table>
					</td>
				</tr>
                <tr>
                    <td>
                      <p align="right" style="width: 95%; overflow: hidden; margin: 0 auto; text-align: right;"> <a href="#">首页</a> / <a href="#">上页</a> / <a href="#">下页</a> / <a href="#">尾页</a> </p>
                    </td>
                </tr>
              </table>
              <p style="text-align: center; padding: 5px 0;">© 电动车租赁管理系统版权所有 All Rights Reserved.</p>
                 
            <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script> 
            <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> 
            
            <style>
				.Table {width: 100%;font-size: 12px;border-width: 1px;border-style: solid;border-color: rgb(204, 204, 204);border-image: initial;background: rgb(245, 249, 251);}
            	.Table tr {height: 34px;}
				.Table td.td_tar {text-align: right;padding-right: 10px;width: 30%;}
				.Table th, .Table td {text-align: center;border-width: 1px;border-style: solid;border-color: rgb(204, 204, 204);border-image: initial;}
            </style>
            
            
            <!-- 模态框（Modal） -->
            
            <div class="modal fade" id="myModal_bj" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="margin: 10% auto; width:300px;">
                <div class="modal-content">
                  <div class="modal-header">        
                    <h4 class="modal-title" id="myModalLabel"> 编辑投诉信息 </h4>
                  </div>
                  <div class="modal-body">
                  	<table class="Table mtk_table">
                        <tr>
                            <td class="td_tar">用户编号：</td>
                            <td class="td_tal">
                            	<input type="text" class='id'/>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_tar">用户名称：</td>
                            <td class="td_tal">
                            	<input type="text" class='yhm'/>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_tar">联系方式：</td>
                            <td class="td_tal">
                            	<input type="text" class='zcsj'/>
                            </td>
                        </tr>
                        <tr>
                            <td class="td_tar">投诉建议：</td>
                            <td class="td_tal">
                            	<input type="text" class='dq'/>
                            </td>
                        </tr>
					</table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭 </button>
                    <button type="button" class="btn btn-success" data-dismiss="modal"> 确定 </button>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="modal fade" id="myModal_sc" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog" style="margin: 10% auto; width:300px;">
                <div class="modal-content">
                  <div class="modal-header">        
                    <h4 class="modal-title" id="myModalLabel"> 删除提示 </h4>
                  </div>
                  <div class="modal-body"> 恭喜你，删除成功！ </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭 </button>
                    <button type="button" class="btn btn-success" data-dismiss="modal"> 确定 </button>
                  </div>
                </div>
              </div>
            </div>
            
            <script>
            	$('table .btn.btn-primary').click(function(){
					var id = $(this).parent().siblings('td.id').text();
					var yhm = $(this).parent().siblings('td.yhm').text();
					var zcsj = $(this).parent().siblings('td.zcsj').text();
					var dq = $(this).parent().siblings('td.dq').text();
					$('#myModal_bj .id').val( id );
					$('#myModal_bj .yhm').val( yhm );
					$('#myModal_bj .zcsj').val( zcsj );
					$('#myModal_bj .dq').val( dq );
				});
				
				$('table .btn.btn-danger').click(function(){
					$(this).parent().parent().hide();
				});
				
				$('#myModal_bj .btn.btn-success').click(function(){
					window.location.href='http://localhost/diandongchezulin/tsjy.php';
				});
				$('#myModal_xz .btn.btn-success').click(function(){
					window.location.href='http://localhost/diandongchezulin/tsjy.php';
				});
            </script>
	</body>
</html>

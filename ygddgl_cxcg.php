<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="width: 100%; height: 100%; margin: 0; padding: 0; ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="ico.ico" rel="shortcut icon" />
<title>员工订单管理</title>
</head>

<body style=" width: 100%; height: 100%; margin: 0; padding: 0;">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="f6f6f6">
    <tr>
      <td colspan="3" padding="0"><img src="images/banner_dlcg.jpg" style="width: 100%; height: auto; overflow: hidden;" /></td>
    </tr>
    <tr bgcolor="#b2222b">
        <td align="center" style="width: 20%; border: 1px solid #FFF;">
            <a href="ygdlcg.php" style="padding: 6px 0; color: #fff; display: inline-block; width: 50%; height: 100%;float: left;">车辆信息管理</a>					
            <a href="ygddgl.php" style="padding: 6px 0; color: #fff; display: inline-block; width: 50%; height: 100%;float: left;">车辆订单管理</a>
        </td>
    </tr>
    <tr>
      <td height="363" colspan="3" align="right" valign="top">
      	<div align="center">
          <table height="214" border="1" align="center" style="width: 100%; margin-top: 30px;">
            <tr>
              <td colspan="8" align="center">
              <label for="textfield">查询订单：</label>
              <input name="textfield" type="text" id="textfield" placeholder="请输入订单号"/>
              <a href="glyddgl_cxcg.php" style="border: 1px solid #aaa;padding: 0.2rem 0.5rem;border-radius: 3px;background: #eee; font-size:12px;">查询</a>
            </tr>
            <tr>
              <td width="151" align="center">车辆编号</td>
              <td width="209" align="center">订单号</td>
              <td width="209" align="center">用户名</td>
              <td width="209" align="center">联系方式</td>
              <td width="198" align="center">订单日期</td>
              <td width="105" align="center">时长</td>
              <td width="112" align="center">总费用</td>
              <td width="259" align="center">操作</td>
            </tr>
            <tr align="center">
              	<td class="id">1</td>
             	<td class="ddh">1</td>
              	<td class="yhm">A</td>
              	<td class="lxfs">12345</td>
              	<td class="ddrq">2020-5-31 09:16</td>
              	<td class="sc">1.5H</td>
              	<td class="zfy">￥：99.54</td>
            	<td>
                <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal_bj" style="padding: 0.3rem 0.8rem;font-size: 12px;">编辑</button>
                <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal_sc" style="padding: 0.3rem 0.8rem;font-size: 12px;">删除</button>
            	</td>
            </tr>
          </table>
        </div>
        </td>
    </tr>
    <tr>
    	<td>
       	  <p align="right" style="width: 95%; overflow: hidden; margin: 0 auto; text-align: right;"> <a href="#">首页</a> / <a href="#">上页</a> / <a href="#">下页</a> / <a href="#">尾页</a> </p>
        </td>
    </tr>
  </table>
  <p style="text-align: center; padding: 5px 0;">© 电动车租赁管理系统版权所有 All Rights Reserved.</p>
  </table>
  
   
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
            <h4 class="modal-title" id="myModalLabel"> 编辑订单信息 </h4>
          </div>
          <div class="modal-body">
            <table class="Table mtk_table">
                <tr>
                    <td class="td_tar">车辆编号：</td>
                    <td class="td_tal">
                        <input type="text" class='id'/>
                    </td>
                </tr>
                <tr>
                    <td class="td_tar">订单号：</td>
                    <td class="td_tal">
                        <input type="text" class='ddh'/>
                    </td>
                </tr>
                <tr>
                    <td class="td_tar">用户名：</td>
                    <td class="td_tal">
                        <input type="text" class='yhm'/>
                    </td>
                </tr>
                <tr>
                    <td class="td_tar">联系方式：</td>
                    <td class="td_tal">
                        <input type="text" class='lxfs'/>
                    </td>
                </tr>
                <tr>
                    <td class="td_tar">订单日期：</td>
                    <td class="td_tal">
                        <input type="text" class='ddrq'/>
                    </td>
                </tr>
                <tr>
                    <td class="td_tar">时长：</td>
                    <td class="td_tal">
                        <input type="text" class='sc'/>
                    </td>
                </tr>
                <tr>
                    <td class="td_tar">总费用：</td>
                    <td class="td_tal">
                        <input type="text" class='zfy'/>
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
            var ddh = $(this).parent().siblings('td.ddh').text();
            var yhm = $(this).parent().siblings('td.yhm').text();
            var lxfs = $(this).parent().siblings('td.lxfs').text();
            var ddrq = $(this).parent().siblings('td.ddrq').text();
            var sc = $(this).parent().siblings('td.sc').text();
            var zfy = $(this).parent().siblings('td.zfy').text();
            $('#myModal_bj .id').val( id );
            $('#myModal_bj .ddh').val( ddh );
            $('#myModal_bj .yhm').val( yhm );
            $('#myModal_bj .lxfs').val( lxfs );
            $('#myModal_bj .ddrq').val( ddrq );
            $('#myModal_bj .sc').val( sc );
            $('#myModal_bj .zfy').val( zfy );
        });
        
        $('table .btn.btn-danger').click(function(){
            $(this).parent().parent().hide();
        });
        
        $('#myModal_bj .btn.btn-success').click(function(){
            window.location.href='http://localhost/diandongchezulin/glyddgl.php';
        });
        $('#myModal_xz .btn.btn-success').click(function(){
            window.location.href='http://localhost/diandongchezulin/glyddgl.php';
        });
    </script>
</body>
</html>

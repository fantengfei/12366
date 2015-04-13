<?php /* Smarty version 2.6.26, created on 2015-03-28 09:33:16
         compiled from single.htm */ ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $this->_tpl_vars['cate_info']['cat_name']; ?>
</title>
		
		
        <script type="text/javascript" src="/inc/common.js"></script>
		
	     <script type="text/javascript" src="/js/jquery.js"></script>
		 
       
        <script type="text/javascript">
        <?php echo '
        	//离开事件
			window.onload=function(){
			 var bc=document.getElementById(\'bc\');
			 var tb=document.getElementById(\'tb1\');
			
			 var ct=document.getElementById(\'content\');
			     bc.onclick=function(){
				
				 ct.value=tb.innerHTML;
				 alert(ct.value);
				 var f=document.form1;
				
				 f.action=\'table_eidt.php\';
				
				 f.submit();
				
				 }
			}
            
			function OnCloseWnd()
			{   event.returnValue="请先点击页面下方【保存】按钮进行数据保存，\\n否则离开页面将导致数据丢失!\\n确定离开吗？";
			   
			   
			}
	
	
	
	'; ?>

        </script>
     
    </head>

   <body style=" padding:0px; margin:0px;color:#000000;background-color:#ece9d8;min-height:600px;  " vLink="#5493b4" link="#003fb7" <?php if ($this->_tpl_vars['cate_info']['cat_id'] == 12): ?> onbeforeunload="OnCloseWnd();  "<?php endif; ?>>
	<form action="" method="post" name="form1" style="margin-top:0px;" >
	  <div style=" background:#eff4f7; height:26px; padding-left:10px; line-height:26px; padding-top:5px; position:fixed; z-index:1;">
	  <input type="button" style="background:url(http://localhost/wssb.12366.ha.cn/theme/default/images/baocun.gif) no-repeat; width:56px; height:15px; border:none; padding-left:20px" value="保存" id="bc" style="float:left;"><img src="http://localhost/wssb.12366.ha.cn/theme/default/images/xian.jpg" style="margin-left:15px;float:left">
	  <input type="button" style="background:url(http://localhost/wssb.12366.ha.cn/theme/default/images/del.jpg) no-repeat; width:56px; height:15px; border:none; padding-left:20px" value="删除" id="bc1" style="float:left;"><img src="http://localhost/wssb.12366.ha.cn/theme/default/images/xian.jpg" style="margin-left:15px;float:left; ">
	  <input type="button" style="background:url(http://localhost/wssb.12366.ha.cn/theme/default/images/print.jpg) no-repeat; width:86px; height:15px; border:none; padding-left:20px" value="打印预览" id="bc2" style="float:left;"><img src="http://localhost/wssb.12366.ha.cn/theme/default/images/xian.jpg" style="margin-left:15px;float:left">
	  <input type="button" style="background:url(http://localhost/wssb.12366.ha.cn/theme/default/images/shengcheng.jpg) no-repeat; width:150px; height:15px; border:none; padding-left:20px" value="生成汇总表信息" id="bc3" style="float:left;">
	  </div>
	 
	<textarea id="content" name='content' style=" display:none;" ></textarea>
	  <div id="tb1" style="border:2px solid #000; height:500px;  ">
	 
	   <table style="background:#fff; width:1800px; padding-top:10px;" border='0' cellpadding="0" cellspacing="0" style="border-collapse:collapse">
		   <tr>
			<th colspan="35" align="center">增值纳税申报表附列资料</th>
		   </tr>
		    <tr>
			<th colspan="35" align="center" style="font-size:12px;">(本期销售情况明细)</th>
		   </tr>
		   <tr>
		    <td colspan="10"  style="font-size:12px; ">税款所属期:2015年02月01日 至 2015年02月28日</td>
			<th colspan="25"  style="font-size:12px; color:#fd0503" align="left">温馨提示:您是非营改增纳税人,可以填写1,3,8,9,10,11,16,18行</th>
		   </tr>
		   
		   <tr>
		    <td colspan="30"  style="font-size:12px; ">纳税人名称:（公章）河南其中极其有限公司</td>
			
			<td  colspan="5" align="right" style="font-size:12px; ">金额单位:元至角分</td>
		   </tr>
		   
		    <tr>
		    <td colspan="7" rowspan="3" height="105" style="font-size:12px; border:1px #000 solid"  width="800" align="center" >项目及栏次</td>
			
			<td  colspan="4" rowspan="1" align="center" style="font-size:12px;border:1px #000 solid " height="35" >开具税控增值税专用发票</td>
			<td  colspan="4" rowspan="1" align="center" style="font-size:12px;border:1px #000 solid " height="35" >开具其他发票</td>
			<td  colspan="4" rowspan="1" align="center" style="font-size:12px;border:1px #000 solid " height="35" >未开具发票</td>
			<td  colspan="4" rowspan="1" align="center" style="font-size:12px;border:1px #000 solid " height="35" >纳税检查调整</td>
			<td  colspan="6" rowspan="1" align="center" style="font-size:12px;border:1px #000 solid " height="35" >合计</td>
			<td  colspan="2" rowspan="2" align="center" style="font-size:12px;border:1px #000 solid " height="35" >应税服务扣除项目本期实际扣除金额</td>
			<td  colspan="4" rowspan="1" align="center" style="font-size:12px;border:1px #000 solid " height="35" >扣除后</td>
		   </tr>
		   
		   <tr>
		    <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">销售额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">销项(应纳)税额</td>
			 <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" >销售额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220" >销项(应纳)税额</td>
			 <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">销售额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">销项(应纳)税额</td>
			 <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">销售额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center"width="220" >销项(应纳)税额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">销售额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">销项(应纳)税额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">价税合计</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="380" >含税（免税）销售额</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220" >销项(应纳)税额</td>
		   </tr>
		   <tr>
		    <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220" >1</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220" >2</td>
			 <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">3</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220" >4</td>
			 <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220" >5</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">6</td>
			 <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220" >7</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">8</td>
			 <td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">9=1+3+5+7</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">10=2+4+6+8</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid" align="center" width="220" >11=9+10</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center"  width="220">12</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="220">11=9+10</td>
			<td colspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center" width="100">12</td>
		   </tr>
		   
		   <tr>
		    <td  rowspan='7'  height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="2%">一.一般计税方法计税</td>
			<td   height="35" style="font-size:12px; border:1px #000 solid"  align="center"  rowspan='5' width="3%">全部征税项目</td>
			<td  colspan="4"  height="35" style="font-size:12px; border:1px #000 solid"  align="center"  width="8%">17%税率的货物及加工修理修配劳务</td>
			<td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%">1</td>
			<td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
			<td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
			<td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
			<td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
			<td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
            <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
            <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
            <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
              <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
            <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">0.00</td>
			  <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">--</td>
            <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">--</td>
			<td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">--</td>
            <td height="35" style="font-size:12px; border:1px #000 solid"  align="center"   width="3%" colspan="2">--</td>
		   </tr>
		   
		    <tr>
			<td rowspan="2"  height="35" style="font-size:12px; border:1px #000 solid"  align="center"  width="3%">其中急征急退项目</td>
		
			<td colspan='4'  height="35" style="font-size:12px; border:1px #000 solid"  align="center"  width="8%">17%税率的有形动产租赁服务</td>
			<td  height="35" style="font-size:12px; border:1px #000 solid"  align="center"  width="3%">2</td>
			
		   </tr>
		</table>
  </div>
		
	<input type="hidden" value="<?php echo $this->_tpl_vars['cate_info']['cat_id']; ?>
" name="id">
	</form>
    </body>

</html>
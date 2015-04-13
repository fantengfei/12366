<?php /* Smarty version 2.6.26, created on 2015-03-19 00:45:43
         compiled from table_list.htm */ ?>
<html>
<head>
    <title><?php echo $this->_tpl_vars['cate_info']['cate_name']; ?>
</title>
    <link rel="stylesheet" type="text/css" href="/Inc/style.css" >
</head>

<body text=#000000 vLink=#5493b4 link=#003fb7 bgColor=#e5e5e5>
<form name="form1" action="" method="post"/>
	<div align="center">
		<?php if ($this->_tpl_vars['cate_info']['time_type'] >= 2): ?>
		<script language="javascript" src="/js/table_list2.js"></script>
	    <b>税种所属期:</b>
	    <select name="time_year" id="time_year">
	        <script language="javascript">
	        <?php echo '
	            var d = new Date();
	            var n = d.getFullYear();    //年
	            for (i = 2005; i <= n; i++) {
	                if(n==i) {
	                document.write("<option value=\'" + i + "\' selected>" + i + "</option>");}
	                else{
	                   document.write("<option value=\'" + i + "\'>" + i + "</option>");
	                }
	            }
	        '; ?>

	        </script>
	    </select>
	    <select name="time_month" id="time_month">
	        <script language="javascript">
	            var d = new Date();
	            var y = d.getMonth(); //月
	            <?php echo '
	            for (i = 1; i <= 12; i++) {
	                var c = i;
	                i = i < 10?("0" + i):i;
	                 if(c==y){
	                   document.write("<option value=\'" + i + "\' selected>" + i + "</option>");
	                 }
	                else{
	                     document.write("<option value=\'" + i + "\' >" + i + "</option>");
	                 }

	            }
	            '; ?>

	        </script>
	    </select>
	    <?php if ($this->_tpl_vars['cate_info']['time_type'] == 3): ?>
	    <input type="checkbox" value="0" id="isjb" name="isjb" onclick='jbCheck(this)'> 是否季报</input>
	    <?php endif; ?>
		<?php else: ?>
		<script language="javascript" src="/js/table_list.js"></script>

		<br>
		<b>税款所属期间：</b> 起
		<input class="tdinput02" maxlength="10" onKeyDown="checklock(this)" value="<?php echo $this->_tpl_vars['sssq_q']; ?>
" name="SSSQ_Q" style="width:80px;text-align:center;" onChange="verifyDate(this);checkDate_new(this);">
	    至
	    <input maxlength="10" onKeyDown="checklock(this)" value="<?php echo $this->_tpl_vars['sssq_z']; ?>
" class="tdinput02" name="SSSQ_Z" style="width:80px;text-align:center;" onChange="verifyDate(this);checkDate_new(this);">&nbsp;&nbsp; 提示:请录入需要查询打印的所属期
	    <?php endif; ?>
	</div>
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top">

				<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" style="margin-top:10px;">
					<tr height=40>
						<td align=center><font style="font-size: 14px;">&nbsp;<?php echo $this->_tpl_vars['cate_info']['nick_name']; ?>
&nbsp;</font></td>
					</tr>
					<tr height=20>
						<td>
							<table class="tableclass" width="520" border="0" cellpadding="0" cellspacing="1" align="center" bgcolor="#000000">
								<?php if ($this->_tpl_vars['cate_info']['time_type'] == 3): ?>
								<tr height=20 bgcolor=#ffffff>
									<td colspan="3" align="center" class="tdclass01">&nbsp;<B>月季报表查询打印</B></td>
								</tr>
								<?php endif; ?>
								<tr height=20 bgcolor=#ffffff>
									<td width=52 align="center" class="tdclass01"></td>
									<td width="323" class="tdclass01">&nbsp;<B>报表类型</B></td>
									<td width="131" align="center" class="tdclass01">&nbsp;<B>纸张大小</B></td>
								</tr>
								<?php if ($this->_tpl_vars['list']): ?>
								<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<tr height=20 bgcolor=#ffffff>
									<td width=52 align="center"><input type="radio" name="bbname" value="lrb" onClick="setDo('/table_detail.do?id=<?php echo $this->_tpl_vars['item']['id']; ?>
');"></td>
									<td width="323">&nbsp;<?php echo $this->_tpl_vars['item']['title']; ?>
</td>
									<td align=center width="131"><?php echo $this->_tpl_vars['item']['size']; ?>
</td>
								</tr>
								<?php endforeach; endif; unset($_from); ?>
								<?php endif; ?>
							</table>
						</td>
					</tr>
					<tr align=center>
						<td height=40>
							<input type="button" class="input" name="filesub" value=" 打印 " onClick="queryPrint();">
						</td>
					</tr>
		            <tr>
		            	<td></td>
		            </tr>
				</table>
	    	</td>
	    </tr>
	</table>
</form>
</body>
</html>
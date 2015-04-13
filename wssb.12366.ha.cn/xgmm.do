<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>修改注册操作</title>
    <SCRIPT LANGUAGE="JavaScript">
        <!--
        function Mover(src)
        {
            src.style.border = '1px solid #3068dd';
            src.style.background = '#ffffff';
            src.select();
        }

        function Mout(src)
        {
            src.style.border = '0px';
            src.style.background = '';
        }

       function checknull(){
        if(document.all.newpassword1.value=="" || document.all.newpassword2.value==""){
            alert("你输入的密码不能为空,请输入一个非空的密码！");
            return false;
        }
       }
        //-->
    </SCRIPT>
    <link href="../Inc/style.css" rel="stylesheet" type="text/css">
</head>

<body text=#000000 vLink=#5493b4 link=#003fb7 bgColor=#e5e5e5>
<form name="xgmmForm" method="post" action="/xgmm.do" onsubmit="return checknull();" target="_self">
    <input type="hidden" name="action" value="xgmm">
    <TABLE cellSpacing=0 cellPadding=7 width="100%" align=center border=0>
        <TBODY>
            <TR>
                <TD width="100%" align=middle vAlign=center bgColor=#ffffff class=bodyline>
                    <TABLE class="tableclass" cellSpacing=0 cellPadding=0 width="700" align=center>
                        <TBODY>
                            <TR align=middle height=20>
                                <TD colspan="2" class="tdclass01"><B>修改密码</B></TD>
                            </TR>
                            <TR align="middle" height=20>
                                <TD colspan="2" class="tdclass">
                                    <font color=red>&nbsp;
                                        </font>
                                </TD>
                            </TR>
                            <TR height=20>
                                <TD class="tdclass01" align="right"><B>新的密码：</B></TD>
                                <TD align=left class="tdclass" align="left">
                                    <input type="password" name="newpassword1" value="" style="tdinput">
                                </TD>
                            </TR>
                            <TR height=20>
                                <TD class="tdclass01" align="right"><B>重复密码：</B></TD>
                                <TD
                                        align=left class="tdclass">
                                    <input type="password" name="newpassword2" value="" style="tdinput">
                                </TD>
                            </TR>
                            <TR height=20>
                                <TD colspan="2"
                                    align=middle class="tdclass">
                                    <input type="submit" value="保 存">
                                    <!--html:reset value="取 消"/-->
                                </TD>
                            </TR></TBODY></TABLE>
                </TD></TR></TBODY></TABLE>
</form>
</body>

</html>

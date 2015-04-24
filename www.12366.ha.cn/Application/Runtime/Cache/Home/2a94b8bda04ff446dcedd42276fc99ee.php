<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>河南省国家税务局互联网申报系统</title>
    <script src="/12366/www.12366.ha.cn/Public/ext/ext-all.js"></script>
<script src="/12366/www.12366.ha.cn/Public/ext/bootstrap.js"></script>
<script src="/12366/www.12366.ha.cn/Public/ext/packages/ext-locale/build/ext-locale-zh_CN.js"></script>
<link href="/12366/www.12366.ha.cn/Public/ext/packages/ext-theme-classic/build/resources/ext-theme-classic-all.css" rel="stylesheet" />
<!--<link href="/12366/www.12366.ha.cn/Public/ext/packages/ext-theme-neptune/build/resources/ext-theme-neptune-all.css" rel="stylesheet" />-->
<!--<link href="/12366/www.12366.ha.cn/Public/ext/packages/ext-theme-gray/build/resources/ext-theme-gray-all.css" rel="stylesheet" />-->

    <style type="text/css">
        .login, .clear { width: 50px; height: 25px;}
        .input-text {height: 20px;}
    </style>

    <script type="text/javascript">
        Ext.onReady(function(){
            Ext.get("clear").on("click", function () {
                document.getElementById('id').value = "";
                document.getElementById('password').value = "";
            });
        });
    </script>

</head>
<body>
    <div style="margin-top: 100px;">
        <table width="300px" height="120px" border="0" style="margin: 0 auto;">
            <tr>
                <td width="60px">用户账号：</td>
                <td><input type="text" id="id" class="id input-text"></td>
            </tr>
            <tr>
                <td>用户口令：</td>
                <td><input type="password" id="password" class="password input-text"></td>
            </tr>
            <tr>
                <td></td>
                <td height="40px">
                    <button class="login" id="login" onclick='javascript: window.location.href="/12366/www.12366.ha.cn/index.php/Home/TableNode1/index";'>登陆</button>
                    <button class="clear" id="clear">清空</button>
                </td>
            </tr>
        </table>

    </div>
</body>
</html>
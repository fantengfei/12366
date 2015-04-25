<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <script src="/12366/www.12366.ha.cn/Public/ext/ext-all.js"></script>
<!--<script src="/12366/www.12366.ha.cn/Public/ext/bootstrap.js"></script>-->
<script src="/12366/www.12366.ha.cn/Public/ext/packages/ext-locale/build/ext-locale-zh_CN.js"></script>
<link href="/12366/www.12366.ha.cn/Public/ext/packages/ext-theme-classic/build/resources/ext-theme-classic-all.css" rel="stylesheet" />
<!--<link href="/12366/www.12366.ha.cn/Public/ext/packages/ext-theme-neptune/build/resources/ext-theme-neptune-all.css" rel="stylesheet" />-->
<!--<link href="/12366/www.12366.ha.cn/Public/ext/packages/ext-theme-gray/build/resources/ext-theme-gray-all.css" rel="stylesheet" />-->
    <style type="text/css">
        .operation {background-color: #1D58A5; height: 50px;}
        .userinfo {background-color: #2da1e6; text-align: left; padding: 7px 0px 8px 10px;}
        .table-link {width: 300px;border: solid 0px #ccc;height: 40px; float: right; margin-right: 120px; margin-top: 6px;}
    </style>
    <script type="text/javascript">
        Ext.onReady(function() {
            Ext.create('Ext.Button',{
                padding: '0',
                text:'修改注册信息',
                icon:'modify',
                renderTo:'td1'
            });
            Ext.create('Ext.Button',{
                text:'修改口令',
                padding: '0',
                icon:'key',
                renderTo:'td2'
            });
            Ext.create('Ext.Button', {
                text:'退出登陆',
                padding: '0',
                icon:'login',
                renderTo:'td3'
            });
        });
    </script>
</head>

<body style="margin: 0; padding: 0;">
<div class="operation">
    <table class="table-link">
        <tr>
            <td id="td1"></td>
            <td id="td2"></td>
            <td id="td3"></td>
        </tr>
    </table>
</div>
<div class="userinfo">
    <b style="font-size: 12px; color: #fff;">登陆用户［河南起重机器有限公司］</b>
</div>
</body>

</html>
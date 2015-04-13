<?php

define('IN_DOUCO', true);
require(dirname(__FILE__) . '/include/init.php');

?>
<!DOCTYPE html>
<HTML>
<HEAD>
	<TITLE> ZTREE DEMO - one click</TITLE>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="inc/demo.css" type="text/css">
	<link rel="stylesheet" href="inc/zTreeStyle/zTreeStyle.css" type="text/css">
	<script type="text/javascript" src="inc/jquery-1.4.4.min.js"></script>
	<script type="text/javascript" src="inc/jquery.ztree.core-3.5.js"></script>
	<!--  <script type="text/javascript" src="inc/jquery.ztree.excheck-3.5.js"></script>
	  <script type="text/javascript" src="inc/jquery.ztree.exedit-3.5.js"></script>-->
	<SCRIPT type="text/javascript">
		<!--
		var setting = {
			view: {
				dblClickExpand: false,
				showLine: false
			},
			data: {
				simpleData: {
					enable: true
				}
			},
			callback: {
				onClick: onClick
			}
		};

		var zNodes =[
			{ id:0, pId:-1, name:"我的权限", open:true},
			<?php 

$query = $dou->query("SELECT * FROM article_category ORDER BY sort ASC");
      
while ($row = $dou->fetch_array($query)){
    $list[] = array(
        'id' => $row['cat_id'], 
        'pid' => $row['pid'], 
        'enable' => $row['enable'], 
        'title' => $row['cat_name'], 
        'url' => 'table_list.php?id='.$row['cat_id']
		
    );
}

foreach ($list as $item) {
    if ($item['enable']) {
        echo "{ id:".$item['id'].", pId:".$item['pid'].",url:'".$item['url']."',click:'javascript:parent.parent.fraRightFrame.fraContentBar.location.reload();',target:'fraContent', name:'".$item['title']."', open:true},";
    }else{
        echo "{ id:".$item['id'].", pId:".$item['pid'].",click:'javascript:void(0);', name:'".$item['title']."'},";
    };

}
?> 
		];

		function onClick(e,treeId, treeNode) {
			var zTree = $.fn.zTree.getZTreeObj("treeDemo");
			zTree.expandNode(treeNode);
		}

		$(document).ready(function(){
			$.fn.zTree.init($("#treeDemo"), setting, zNodes);
		});
		//-->
	</SCRIPT>
	<style type="text/css">
.ztree li button.switch {visibility:hidden; width:1px;}
.ztree li button.switch.roots_docu {visibility:visible; width:16px;}
.ztree li button.switch.center_docu {visibility:visible; width:16px;}
.ztree li button.switch.bottom_docu {visibility:visible; width:16px;}
	</style>
 </HEAD>

<BODY style=" background:#e4eeef; border:1px #e7eff1 solid; border-top:none;  overflow:hidden; margin-left:8px; width:200px;">

<div class="content_wrap"  style=" margin-top:0px;  background:#FFFFFF repeat-x;">
	<div class="zTreeDemoBackground left" style="">
		<ul id="treeDemo" class="ztree"  style="height:480px; width:500px; border:1px #b8cfd7 solid; border-top:none; "></ul>
	</div>
	
</div>
</BODY>
</HTML>
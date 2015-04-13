<?php
session_start();
define('IN_DOUCO', true);

require(dirname(__FILE__) . '/include/init.php');

 $cat_id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
 $_SESSION['caidan'][$cat_id]=$cat_id;

$sql = "SELECT * FROM " . $dou->table('article_category') . " WHERE cat_id = '$cat_id'";
$query = $dou->query($sql);
$cate_info = $dou->stripslashes_deep($dou->fetch_array($query));



if ($cate_info['type'] == 'single') {
	$cate_info['content'] = str_replace('datatype="number"','datatype="number" onkeydown="checklock(this)" onfocus="Mover(this);" onblur="Mout(this)"', $cate_info['content']);
	$smarty->assign("cate_info", $cate_info);
	$smarty->display('single.htm');
}else{
	$smarty->assign("cate_info", $cate_info);
	$sql = "SELECT * FROM article WHERE cat_id = ". $cat_id ." ORDER BY id ASC";
	$query = $dou->query($sql);
	while ($row = $dou->stripslashes_deep($dou->fetch_array($query)))
	{
		$list[] = array (
			"id" => $row['id'],
			"cat_id" => $row['cat_id'],
			"title" => $row['title'],
			"size" => $row['size']
		);
	}

	$sssq_q = date('Y-m-01',strtotime("last month"));
	$sssq_z = date('Y-m-t',strtotime("last month"));
	$smarty->assign("sssq_q", $sssq_q);
	$smarty->assign("sssq_z", $sssq_z);
	$smarty->assign("list", $list);
	$smarty->display('table_list.htm');
}



?>


<?php

define('IN_DOUCO', true);

require(dirname(__FILE__) . '/include/init.php');

/* REQUEST获取 */
$id = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
$time = isset($_REQUEST['sssq_z']) ? trim($_REQUEST['sssq_z']) : '2013-10-01';
$time_array = explode('-', $time);
$year = $time_array[0];
$month = $time_array[1];



$query = $dou->query("SELECT * FROM " . $dou->table('table') . " WHERE template_id = '$id' and year = '$year' and month = '$month' ");
$detail = $dou->stripslashes_deep($dou->fetch_array($query));

if (empty($detail['content'])) {
	echo '<script language="javascript">alert("无数据");history.go(-1);</script>';
}

switch ($detail['template_id']) {
	case '12':
		$border = '/dyimg/border/12.jpg';
		break;
	case '40':
		$border = '/dyimg/border/40.jpg';
		break;
	case '55':
		$border = '/dyimg/border/55.jpg';
		break;
	default:
		$border = '';
		break;
}

$smarty->assign('border', $border);
$smarty->assign('detail', $detail);
$smarty->display('table_detail.htm');
?>

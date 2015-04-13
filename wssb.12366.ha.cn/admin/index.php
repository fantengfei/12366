<?php
/**
 * DOUCO TEAM
 * ============================================================================
 * * COPYRIGHT DOUCO 2013-2014.
 * http://www.douco.com;
 * ----------------------------------------------------------------------------
 * Author:DouCo
 * Id: index.php 2012-10-25
 */

define('IN_DOUCO', true);

require(dirname(__FILE__) . '/include/init.php');

/* rec操作项的初始化 */
if (empty ($_REQUEST['rec']))
{
	$_REQUEST['rec'] = 'default';
}
else
{
	$_REQUEST['rec'] = trim($_REQUEST['rec']);
}

$smarty->assign('rec', $_REQUEST['rec']);

/**
 +----------------------------------------------------------
 * 系统信息
 +----------------------------------------------------------
 */
if ($_REQUEST['rec'] == 'default')
{
	$smarty->assign('ur_here', $_LANG['manager_log']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['manager_list'],
		'href' => 'manager.php'
	));
	$smarty->assign('cur', 'home');

	/* 分页信息 */
	$page = trim($_REQUEST['page']) ? trim($_REQUEST['page']) : 1;
	$limit = $dou->pager(admin_log, 15, $page);
	
	$sql = "SELECT * FROM " . $dou->table('admin_log') . $where . " ORDER BY id DESC" . $limit;
	$query = $dou->query($sql);
	while ($row = $dou->fetch_array($query))
	{
		$create_time = date("Y-m-d", $row[create_time]);
		$user_name = $dou->get_one("SELECT user_name FROM " . $dou->table('admin') . " WHERE user_id = " . $row['user_id']);

		$log_list[] = array (
			"id" => $row['id'],
			"create_time" => $create_time,
			"user_name" => $user_name,
			"action" => $row['action'],
			"ip" => $row['ip']
		);
	}

	$smarty->assign('log_list', $log_list);
	$smarty->display('manager.htm');
}

/**
 +----------------------------------------------------------
 * 清除缓存及已编译模板
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'clear_cache')
{
	$dou->dou_clear_cache(ROOT_PATH . "cache/compile");
	$dou->dou_msg($_LANG['clear_cache_success']);
}

?>
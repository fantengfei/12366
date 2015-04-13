<?php
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
$smarty->assign('cur', 'article_category');

/**
 +----------------------------------------------------------
 * 分类列表
 +----------------------------------------------------------
 */
if ($_REQUEST['rec'] == 'default')
{
	$smarty->assign('ur_here', $_LANG['article_category']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article_category_add'],
		'href' => 'article_category.php?rec=add'
	));

	//$article_list = $dou->get_article_category();
	$article_list = $dou->get_category_tree();
	//var_dump($list[0]);

	$smarty->assign('article_list', $article_list);
	$smarty->display('article_category.htm');
}

/**
 +----------------------------------------------------------
 * 分类添加
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'add')
{
	$dou->dou_magic_quotes();
	$smarty->assign('ur_here', $_LANG['article_category_add']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article_category'],
		'href' => 'article_category.php'
	));
	$smarty->assign('cat_list', $dou->get_category_tree());
	$smarty->assign('form_action', 'insert');
	$smarty->assign('cur_cat', trim($_REQUEST['cat_id']));

	$smarty->display('article_category.htm');
}

elseif ($_REQUEST['rec'] == 'insert')
{
	$dou->dou_magic_quotes();
	$sql = "INSERT INTO " . $dou->table('article_category') . " (cat_id, pid , enable , type, time_type,nick_name, cat_name, content,sort)" .
	" VALUES (NULL, '$_POST[pid]',  '$_POST[enable]','$_POST[type]','$_POST[time_type]','$_POST[nick_name]', '$_POST[cat_name]', '$_POST[content]', '$_POST[sort]')";
	$dou->query($sql);

	$dou->create_admin_log($_LANG['article_category_add'] . ": " . $_POST[cat_name]);
	$dou->dou_msg($_LANG['article_category_add_succes'], 'article_category.php');
}

/**
 +----------------------------------------------------------
 * 分类编辑
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'setting')
{
	$smarty->assign('ur_here', $_LANG['article_category_edit']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article_category'],
		'href' => 'article_category.php'
	));

	$cat_id = trim($_REQUEST['cat_id']);
	$query = $dou->select($dou->table(article_category), '*', '`cat_id` = \'' . $cat_id . '\'');
	$cat_info = $dou->stripslashes_deep($dou->fetch_array($query));

	$smarty->assign('form_action', 'setting_save');
	$smarty->assign('cat_list', $dou->get_category_tree());
	$smarty->assign('cat_info', $cat_info);
	$smarty->assign('cur_cat', $cat_info['pid']);
	$smarty->display('article_category.htm');
}
elseif ($_REQUEST['rec'] == 'edit')
{
	$smarty->assign('ur_here', $_LANG['article_category_edit']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article_category'],
		'href' => 'article_category.php'
	));

	$cat_id = trim($_REQUEST['cat_id']);
	$query = $dou->select($dou->table(article_category), '*', '`cat_id` = \'' . $cat_id . '\'');
	$cat_info = $dou->stripslashes_deep($dou->fetch_array($query));

	$smarty->assign('form_action', 'edit_save');
	$smarty->assign('cat_list', $dou->get_category_tree());
	$smarty->assign('cat_info', $cat_info);
	$smarty->assign('cur_cat', $cat_info['pid']);
	$smarty->display('category_edit.htm');
}
elseif ($_REQUEST['rec'] == 'edit_save')
{
	$dou->dou_magic_quotes();
	$content = $_POST['content'];
	$sql = "update " . $dou->table('article_category') . " SET content = '" . $content . "'  WHERE cat_id = '" . $_POST['cat_id'] . "'";

	$dou->query($sql);
	if ($dou->query($sql)) {
		echo 'Success!';
	}
}
elseif ($_REQUEST['rec'] == 'setting_save')
{
	$dou->dou_magic_quotes();
	$content = $_POST['content'];
	$content=remove_event_attributes($content);
	$content = myreplace('&amp;', '&', $content);
	$content = myreplace('纳税人识别号：', '纳税人识别号：410711775106396', $content);
	$content = myreplace('纳税人名称：', '纳税人名称：河南起重机器有限公司', $content);
	$content = myreplace('-width:1;', '-width:1px;', $content);
	$sql = "update " . $dou->table('article_category') . " SET nick_name = '$_POST[nick_name]', cat_name = '$_POST[cat_name]', pid = '$_POST[pid]',  enable = '$_POST[enable]',type = '$_POST[type]',time_type = '$_POST[time_type]', content = '$content' , sort = '$_POST[sort]' WHERE cat_id = '$_POST[cat_id]'";
	$dou->query($sql);

	$dou->create_admin_log($_LANG['article_category_edit'] . ": " . $_POST[cat_name]);
	$dou->dou_msg($_LANG['article_category_edit_succes'], 'article_category.php');
}

/**
 +----------------------------------------------------------
 * 分类删除
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'del')
{
	$cat_id = trim($_REQUEST['cat_id']);

	$cat_name = $dou->get_one("SELECT cat_name FROM " . $dou->table('article_category') . " WHERE cat_id = '$cat_id'");
	$is_parent = $dou->get_one("SELECT id FROM " . $dou->table('article') . " WHERE cat_id = '$cat_id'");

	if ($is_parent)
	{
		$_LANG['article_category_del_is_parent'] = preg_replace('/d%/Ums', $cat_name, $_LANG['article_category_del_is_parent']);
		$dou->dou_msg($_LANG['article_category_del_is_parent'], 'article_category.php', '', '3');
	}
	else
	{
		if ($_POST['confirm'])
		{
			$dou->create_admin_log($_LANG['article_category_del'] . ": " . $cat_name);
			$dou->delete($dou->table(article_category), "cat_id = $cat_id", 'article_category.php');
		}
		else
		{
			$_LANG['del_check'] = preg_replace('/d%/Ums', $cat_name, $_LANG['del_check']);
			$dou->dou_msg($_LANG['del_check'], 'article_category.php', '', '30', "article_category.php?rec=del&cat_id=$cat_id");
		}
	}

}
?>

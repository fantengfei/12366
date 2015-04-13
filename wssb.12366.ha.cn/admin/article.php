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
$smarty->assign('cur', $cur = 'article');

/**
 +----------------------------------------------------------
 * 文章列表
 +----------------------------------------------------------
 */
if ($_REQUEST['rec'] == 'default')
{
	$smarty->assign('ur_here', $_LANG['article']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article_add'],
		'href' => 'article.php?rec=add'
	));

	/* 获得请求的分类 ID */
	if ($_POST['cat_id'])
	{
		header("Location: article.php?id=" . $_POST['cat_id'] . "\n");
	}
	$cat_id = trim($_REQUEST['id']);
	if ($cat_id)
	{
		$where = " where cat_id = $cat_id  ";
		
	}

	if (trim($_REQUEST['search_key'])) {
		$search_key = trim($_REQUEST['search_key']);
		$smarty->assign('search_key', $search_key);
		$where = " where title like '%".$search_key."%' ";
	}

	/* 分页信息 */
	$page = trim($_REQUEST['page']) ? trim($_REQUEST['page']) : 1;
	$limit = $dou->pager('article', '15', $page, $cat_id);

	$sql = "SELECT id, title, size,cat_id, add_time FROM " . $dou->table('article') . $where . " ORDER BY id DESC" . $limit;
	$query = $dou->query($sql);

	while ($row = $dou->fetch_array($query))
	{
		$cat_name = $dou->get_one("SELECT cat_name FROM " . $dou->table('article_category') . " WHERE cat_id = '$row[cat_id]'");
		$add_time = date("Y-m-d", $row['add_time']);
		$table_query = $dou->select($dou->table('table'), '*', '`template_id` = \'' . $row['id'] . '\'');

		while ($table = $dou->fetch_array($table_query)) {
			$sub[] = $table;
		}
		$article_li = array (
			"id" => $row['id'],
			"cat_id" => $row['cat_id'],
			"cat_name" => $cat_name,
			"sub" => $sub,
			"title" => $row['title'],
			"size" => $row['size'],
			"add_time" => $add_time
		);

		unset($table,$sub);
		$article_list[] = $article_li;
	}
	$smarty->assign('cat_id', $cat_id);
	$smarty->assign('article_category', $dou->get_category_tree());
	$smarty->assign('article_list', $article_list);
	$smarty->display('article.htm');
}

/**
 +----------------------------------------------------------
 * 文章添加
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'add')
{
	$smarty->assign('ur_here', $_LANG['article_add']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article'],
		'href' => 'article.php'
	));

	/* 格式化自定义参数 */
	if ($_CFG['defined_article'])
	{
		$defined = explode(',', $_CFG['defined_article']);
		foreach ($defined as $row)
		{
			$defined_article .= $row . "：\n";
		}
		$article['defined'] = trim($defined_article);
		$article['defined_count'] = count(explode("\n", $article['defined'])) * 2;
	}

	$smarty->assign('form_action', 'insert');
	$smarty->assign('article_list', $dou->get_category_tree());
	$smarty->assign('article', $article);
	$smarty->display('article.htm');
}

elseif ($_REQUEST['rec'] == 'insert')
{
	$add_time = time();

	$content = $_POST['content'];
	$content = myreplace('&amp;', '&', $content);
	$content = myreplace('纳税人识别号：', '纳税人识别号：410711775106396', $content);
	$content = myreplace('纳税人识别号:', '纳税人识别号:410711775106396', $content);
	$content = myreplace('纳税人名称：', '纳税人名称：河南起重机器有限公司', $content);
	$content = myreplace('纳税人名称:', '纳税人名称:河南起重机器有限公司', $content);
	$content = myreplace('平顶山煤业（集团）建筑安装工程有限责任公司土木建筑工程处劳动服务公司', '河南起重机器有限公司', $content);

	$dou->dou_magic_quotes();
	$sql = "INSERT INTO " . $dou->table('article') . " (id, cat_id, title, size, content , add_time)" .
	" VALUES (NULL, '$_POST[cat_id]', '$_POST[title]', '$_POST[size]', '$content',  '$add_time')";
	$dou->query($sql);

	$dou->create_admin_log($_LANG['article_add'] . ": " . $_POST[title]);

	$dou->dou_msg($_LANG['article_add_succes'], 'article.php');
}

/**
 +----------------------------------------------------------
 * 文章编辑
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'setting')
{
	$smarty->assign('ur_here', $_LANG['article_edit']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article'],
		'href' => 'article.php'
	));

	$id = trim($_REQUEST['id']);
	$query = $dou->select($dou->table(article), '*', '`id` = \'' . $id . '\'');

	$article = $dou->stripslashes_deep($dou->fetch_array($query));
	$smarty->assign('cur_cat', $article['cat_id']);
	$smarty->assign('form_action', 'setting_save');
	$smarty->assign('article_list', $dou->get_category_tree());
	$smarty->assign('article', $article);
	$smarty->assign('cur','article_edit');
	$smarty->display('article.htm');
}
/**
 +----------------------------------------------------------
 * 文章编辑
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'edit')
{
	$smarty->assign('ur_here', $_LANG['article_edit']);
	$smarty->assign('action_link', array (
		'text' => $_LANG['article'],
		'href' => 'article.php'
	));

	$id = trim($_REQUEST['id']);
	$query = $dou->select($dou->table(article), '*', '`id` = \'' . $id . '\'');
	$article = $dou->fetch_array($query);
	$smarty->assign('article', $article);
	$smarty->display('article_edit.htm');
}
elseif ($_REQUEST['rec'] == 'edit_save')
{

	$dou->dou_magic_quotes();
	$content = $_POST['content'];
	$sql = "update " . $dou->table('article') . " SET content = '$content' WHERE id = '$_POST[id]'";
	if ($dou->query($sql)) {
		header('Content-Type: text/html; charset=utf-8');
		echo '编辑成功，点击确定关闭窗口！';
	}
}
elseif ($_REQUEST['rec'] == 'setting_save')
{
	$dou->dou_magic_quotes();
	$content = $_POST['content'];
	$content = myreplace('&amp;', '&', $content);
	$content = myreplace('纳税人识别号：', '纳税人识别号：410711775106396', $content);
	$content = myreplace('纳税人识别号:', '纳税人识别号:410711775106396', $content);
	$content = myreplace('纳税人名称：', '纳税人名称：河南起重机器有限公司', $content);
	$content = myreplace('纳税人名称:', '纳税人名称:河南起重机器有限公司', $content);
	$content = myreplace('平顶山煤业（集团）建筑安装工程有限责任公司土木建筑工程处劳动服务公司', '河南起重机器有限公司', $content);
	$content = myreplace('-width:1;', '-width:1px;', $content);
	$sql = "update " . $dou->table('article') . " SET cat_id = '$_POST[cat_id]', title = '$_POST[title]', size = '$_POST[size]' ,border = '$_POST[border]' ,content = '$content' WHERE id = '$_POST[id]'";
	$dou->query($sql);
	$dou->create_admin_log($_LANG['article_edit'] . ": " . $_POST[title]);

	$dou->dou_msg($_LANG['article_edit_succes'], 'article.php');
}
elseif ($_REQUEST['rec'] == 'add_table')
{
	$id = trim($_REQUEST['id']);
	$query = $dou->select($dou->table('article'), '*', '`id` = \'' . $id . '\'');
	$article = $dou->stripslashes_deep($dou->fetch_array($query));
	if (empty($article['content'])) {
		echo '<script language="javascript">alert("模板为空，请先完善模板");history.go(-1);</script>';
	}
	$smarty->assign('table_rec', 'add_table');
	$smarty->assign('article', $article);
	$smarty->display('table_edit.htm');
}
elseif ($_REQUEST['rec'] == 'edit_table')
{
	$id = trim($_REQUEST['id']);
	$query = $dou->select($dou->table('table'), '*', '`id` = \'' . $id . '\'');
	$table = $dou->stripslashes_deep($dou->fetch_array($query));
	$smarty->assign('table_rec', 'edit_table');
	$smarty->assign('table', $table);
	$smarty->display('table_edit.htm');
}
elseif ($_REQUEST['rec'] == 'insert_table')
{
	$addtime = time();
	$dou->dou_magic_quotes();

	// 检查是否重复添加，规则：表ID+年+月 唯一
	$check_sql = $dou->select($dou->table('table'), 'id', " template_id = $_POST[id] and year = $_POST[year] and month = $_POST[month] ");
	$check_result = $dou->fetch_array($check_sql);

	if($check_result){
		header('Content-Type: text/html; charset=utf-8');
		 echo "该时间段的表单已存在!\n请勿重复添加！";
		 exit;
	}

	$sql = "INSERT INTO " . $dou->table('table') . " ( template_id, year, month, content , addtime)" .
	" VALUES ('$_POST[id]', '$_POST[year]', '$_POST[month]', '$_POST[content]',  '$addtime')";

	if ($dou->query($sql)){
		header('Content-Type: text/html; charset=utf-8');
		echo '新增成功';
	}
}
elseif ($_REQUEST['rec'] == 'table_save')
{

	$dou->dou_magic_quotes();
	$id = trim($_POST['id']);
	$content = $_POST['content'];
	$year = $_POST['year'];
	$month = $_POST['month'];
	$sql = "update " . $dou->table('table') . " SET content = '$content',year = '$year',month = '$month' WHERE id = '$id'";
	if ($dou->query($sql)) {
		header('Content-Type: text/html; charset=utf-8');
		echo '编辑成功，点击确定关闭窗口！';
	}
}
/**
 +----------------------------------------------------------
 * 文章删除
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'del')
{
	$id = trim($_REQUEST['id']);

	$title = $dou->get_one("SELECT title FROM " . $dou->table('article') . " WHERE id = '$id'");

	if ($_POST['confirm'])
	{
		$dou->create_admin_log($_LANG['article_del'] . ": " . $title);
		$dou->delete($dou->table(article), "id = $id", 'article.php');
	}
	else
	{
		$_LANG['del_check'] = preg_replace('/d%/Ums', $title, $_LANG['del_check']);
		$dou->dou_msg($_LANG['del_check'], 'article.php', '', '30', "article.php?rec=del&id=$id");
	}
}
elseif ($_REQUEST['rec'] == 'del_table')
{
	$id = trim($_REQUEST['id']);

	$dou->delete($dou->table('table'), "id = $id", 'article.php');
}
/**
 +----------------------------------------------------------
 * 批量文章删除
 +----------------------------------------------------------
 */
elseif ($_REQUEST['rec'] == 'del_all')
{
	if (is_array($_POST['checkbox']))
	{
	  $checkbox = $dou->create_sql_in($_POST['checkbox']);

    //删除文章
    $sql = "DELETE FROM " . $dou->table('article') .
            " WHERE id " . $checkbox;
    $dou->query($sql);

		$dou->create_admin_log($_LANG['article_del'] . ": ARTICLE " . $dou->addslashes_deep($checkbox));
	  $dou->dou_msg($_LANG['del_succes'], 'article.php');
	}
	else
	{
	  $dou->dou_msg($_LANG['article_del_empty'], 'article.php');
	}
}



?>

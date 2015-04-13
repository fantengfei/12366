<?php
header('Content-Type:text/html;charset=utf-8');
define('IN_DOUCO', true);
require(dirname(__FILE__) . '/include/init.php');
$content=$_POST['content'];

$id=$_POST['id'];
$sql = "update " . $dou->table('article_category') . " SET content= '$content' WHERE cat_id = $id";
echo $sql;
$query = $dou->query($sql);
?>
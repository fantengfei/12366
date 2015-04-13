<?php /* Smarty version 2.6.26, created on 2015-03-27 11:41:04
         compiled from article_edit.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>表格编辑</title>
<link rel="stylesheet" type="text/css" href="/Inc/style.css">
<script type="text/javascript" src="images/jquery.min.js"></script>
<script type="text/javascript" src="images/article_edit.js"></script>
<style>
<?php echo '
table{border-collapse:collapse; border-spacing:0;}
textarea{width: 100%;height: 100%;background-color:yellow;color:red;}
  button{border: 1px solid #ccc;background-color: #f70;padding: 0px 20px;line-height: 2;}
}
'; ?>

</style>
</head>
<body>
<form action="article.php?rec=edit_save" method="post">
  <button type="submit">现在提交保存</button>
  <input type="hidden" id="table_id" name="table_id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
">
  <textarea name="content" id="content" style="display:none;"></textarea>
</form>
  <div id="data_table">
    <?php echo $this->_tpl_vars['article']['content']; ?>

  </div>
</body>
</html>
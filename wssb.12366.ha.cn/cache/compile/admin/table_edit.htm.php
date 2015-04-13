<?php /* Smarty version 2.6.26, created on 2015-03-27 11:42:23
         compiled from table_edit.htm */ ?>
﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>表格编辑</title>
<link rel="stylesheet" type="text/css" href="/Inc/style.css">
<script type="text/javascript" src="images/jquery.min.js"></script>
<script type="text/javascript" src="images/table_edit.js"></script>
<style>
<?php echo '
table{border-collapse:collapse; border-spacing:0;}
textarea{width: 100%;height: 100%;background-color:yellow;color:red;}
button{border: 1px solid #ccc;background-color: #f70;padding: 0px 20px;line-height: 2;}
'; ?>

</style>
</head>
<body>

  <?php if ($this->_tpl_vars['table_rec'] == 'add_table'): ?>
<form action="article.php?rec=insert_table" method="post">
  <button type="submit">现在提交保存</button>
  <input type="hidden" id="id" name="id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
">
  <textarea name="content" id="content" style="display:none;"></textarea>
  <?php else: ?>
<form action="article.php?rec=table_save" method="post">
  <button type="submit">现在提交保存</button>
  <input type="hidden" id="id" name="id" value="<?php echo $this->_tpl_vars['table']['id']; ?>
">
  <textarea name="content" id="content" style="display:none;"></textarea>

  <?php endif; ?>
  <select name="year" id="year">
    <option <?php if ($this->_tpl_vars['table']['year'] == '2013'): ?> selected <?php endif; ?> value="2013">2013</option>
  	<option <?php if ($this->_tpl_vars['table']['year'] == '2014'): ?> selected <?php endif; ?> value="2014">2014</option>
  	<option <?php if ($this->_tpl_vars['table']['year'] == '2015'): ?> selected <?php endif; ?> value="2015">2015</option>
  </select>
  <select name="month" id="month">
  	<option <?php if ($this->_tpl_vars['table']['month'] == '01'): ?> selected <?php endif; ?> value="01">01</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '02'): ?> selected <?php endif; ?> value="02">02</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '03'): ?> selected <?php endif; ?> value="03">03</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '04'): ?> selected <?php endif; ?> value="04">04</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '05'): ?> selected <?php endif; ?> value="05">05</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '06'): ?> selected <?php endif; ?> value="06">06</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '07'): ?> selected <?php endif; ?> value="07">07</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '08'): ?> selected <?php endif; ?> value="08">08</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '09'): ?> selected <?php endif; ?> value="09">09</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '10'): ?> selected <?php endif; ?> value="10">10</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '11'): ?> selected <?php endif; ?> value="11">11</option>
  	<option <?php if ($this->_tpl_vars['table']['month'] == '12'): ?> selected <?php endif; ?> value="12">12</option>
  </select>
</form>
  <div id="data_table">
  <?php if ($this->_tpl_vars['table_rec'] == 'add_table'): ?>
	  <?php if ($this->_tpl_vars['article']['content'] == ''): ?>
	    <br><br>模板为空
	  <?php endif; ?>
	  <?php echo $this->_tpl_vars['article']['content']; ?>


  <?php elseif ($this->_tpl_vars['table_rec'] == 'edit_table'): ?>
	  <?php if ($this->_tpl_vars['table']['content'] == ''): ?>
	    <br><br>模板为空
	  <?php endif; ?>
	  <?php echo $this->_tpl_vars['table']['content']; ?>


  <?php endif; ?>
  </div>
</body>
</html>
<?php /* Smarty version 2.6.26, created on 2015-03-27 11:40:36
         compiled from article.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $this->_tpl_vars['lang']['home']; ?>
<?php if ($this->_tpl_vars['ur_here']): ?> - <?php echo $this->_tpl_vars['ur_here']; ?>
 <?php endif; ?></title>
<link href="templates/public.css" rel="stylesheet" type="text/css">
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "javascript.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script type="text/javascript" src="images/jquery.autotextarea.js"></script>
</head>
<body>
<div id="dcWrap">
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 <div id="dcLeft"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "menu.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>
 <div id="dcMain">
   <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "ur_here.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
   <div id="mainBox">
    <?php if ($this->_tpl_vars['rec'] == 'default'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn add"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <div class="filter">
    <form action="article.php" method="post">
     <select name="cat_id">
      <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>
           <?php $_from = $this->_tpl_vars['article_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
           <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
"<?php if ($this->_tpl_vars['cate']['cat_id'] == $this->_tpl_vars['cur_cat']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
             <?php $_from = $this->_tpl_vars['cate']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate_sub']):
?>
             <option value="<?php echo $this->_tpl_vars['cate_sub']['cat_id']; ?>
"<?php if ($this->_tpl_vars['cate_sub']['cat_id'] == $this->_tpl_vars['cur_cat']): ?> selected="selected"<?php endif; ?>>　- <?php echo $this->_tpl_vars['cate_sub']['cat_name']; ?>
</option>
               <?php $_from = $this->_tpl_vars['cate_sub']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate_sub_sub']):
?>
               <option value="<?php echo $this->_tpl_vars['cate_sub_sub']['cat_id']; ?>
"<?php if ($this->_tpl_vars['cate_sub_sub']['cat_id'] == $this->_tpl_vars['cur_cat']): ?> selected="selected"<?php endif; ?>>　　- <?php echo $this->_tpl_vars['cate_sub_sub']['cat_name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
             <?php endforeach; endif; unset($_from); ?>
           <?php endforeach; endif; unset($_from); ?>
     </select>
     <input name="submit" class="btnGray" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_filter']; ?>
" />
    </form>
    <span>
    <form action="article.php" method="post">
    <input type="text" name="search_key" value="<?php if ($this->_tpl_vars['search_key']): ?><?php echo $this->_tpl_vars['search_key']; ?>
<?php endif; ?>">
    <input name="submit" class="btnGray" type="submit" value="搜索标题" />
    </form>
    </span>
    </div>

    <div id="list">
    <form name="del" method="post" action="article.php?rec=del_all">
    <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
     <tr>
      <th width="22" align="center"><input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check'></th>
      <th width="40" align="center"><?php echo $this->_tpl_vars['lang']['record_id']; ?>
</th>
      <th align="left"><?php echo $this->_tpl_vars['lang']['article_name']; ?>
</th>
      <th align="left">纸张大小</th>
      <th width="60" align="center"><?php echo $this->_tpl_vars['lang']['article_category']; ?>
</th>
      <th width="80" align="center"><?php echo $this->_tpl_vars['lang']['add_time']; ?>
</th>
      <th width="150" align="center"><?php echo $this->_tpl_vars['lang']['handler']; ?>
</th>
     </tr>
     <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['article']):
?>
     <?php if ($this->_tpl_vars['article']['content'] != ''): ?>
     <tr style="color: #f70;">
     <?php else: ?>
     <tr>
     <?php endif; ?>
      <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $this->_tpl_vars['article']['id']; ?>
" /></td>
      <td align="center"><?php echo $this->_tpl_vars['article']['id']; ?>
</td>
      <td><?php echo $this->_tpl_vars['article']['title']; ?>
</td>
      <td><?php echo $this->_tpl_vars['article']['size']; ?>
</td>
      <td align="center"><?php if ($this->_tpl_vars['article']['cat_name']): ?><a href="article.php?id=<?php echo $this->_tpl_vars['article']['cat_id']; ?>
"><?php echo $this->_tpl_vars['article']['cat_name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
<?php endif; ?></td>
      <td align="center"><?php echo $this->_tpl_vars['article']['add_time']; ?>
</td>
      <td align="center">
       <a href="article.php?rec=add_table&id=<?php echo $this->_tpl_vars['article']['id']; ?>
" target="_blank">增加子表</a> | <a href="article.php?rec=setting&id=<?php echo $this->_tpl_vars['article']['id']; ?>
">设置</a> | <a href="article.php?rec=edit&id=<?php echo $this->_tpl_vars['article']['id']; ?>
" target="_blank" ><?php echo $this->_tpl_vars['lang']['edit']; ?>
</a> | <a href="article.php?rec=del&id=<?php echo $this->_tpl_vars['article']['id']; ?>
"><?php echo $this->_tpl_vars['lang']['del']; ?>
</a>
      </td>
     </tr>
     <?php if ($this->_tpl_vars['article']['sub']): ?>
     <?php $_from = $this->_tpl_vars['article']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['table'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['table']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['table']):
        $this->_foreach['table']['iteration']++;
?>
    <?php if ($this->_tpl_vars['article']['content']): ?>
     <tr class="cu_tr">
     <?php else: ?>
     <tr>
     <?php endif; ?>
       <td colspan="2" align="right">(<?php echo $this->_foreach['table']['iteration']; ?>
)</td>
       <td colspan="3">所属年份：<?php echo $this->_tpl_vars['table']['year']; ?>
  &nbsp;&nbsp;&nbsp;&nbsp;所属月份：<?php echo $this->_tpl_vars['table']['month']; ?>
  </td>
       <td colspan="2" align="center"><a href="article.php?rec=edit_table&id=<?php echo $this->_tpl_vars['table']['id']; ?>
" target="_blank" >编辑子表</a> | <a href="article.php?rec=del_table&id=<?php echo $this->_tpl_vars['table']['id']; ?>
">删除</a></td>
     </tr>
     <?php endforeach; endif; unset($_from); ?>
     <?php endif; ?>
     <?php endforeach; endif; unset($_from); ?>
    </table>
    <div class="action"><input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['del']; ?>
" /></div>
    </form>
    </div>
    <div class="clear"></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "pager.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php elseif ($this->_tpl_vars['rec'] == 'add' || $this->_tpl_vars['rec'] == 'setting'): ?>
    <h3><a href="<?php echo $this->_tpl_vars['action_link']['href']; ?>
" class="actionBtn"><?php echo $this->_tpl_vars['action_link']['text']; ?>
</a><?php echo $this->_tpl_vars['ur_here']; ?>
</h3>
    <form action="article.php?rec=<?php echo $this->_tpl_vars['form_action']; ?>
" method="post">
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right"><?php echo $this->_tpl_vars['lang']['article_name']; ?>
</td>
       <td>
        <input type="text" name="title" value="<?php echo $this->_tpl_vars['article']['title']; ?>
" size="40" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right"><?php echo $this->_tpl_vars['lang']['article_category']; ?>
</td>
       <td>
        <select name="cat_id">
         <option value="0"><?php echo $this->_tpl_vars['lang']['uncategorized']; ?>
</option>

           <?php $_from = $this->_tpl_vars['article_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate']):
?>
           <option value="<?php echo $this->_tpl_vars['cate']['cat_id']; ?>
"<?php if ($this->_tpl_vars['cate']['cat_id'] == $this->_tpl_vars['cur_cat']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['cate']['cat_name']; ?>
</option>
             <?php $_from = $this->_tpl_vars['cate']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate_sub']):
?>
             <option value="<?php echo $this->_tpl_vars['cate_sub']['cat_id']; ?>
"<?php if ($this->_tpl_vars['cate_sub']['cat_id'] == $this->_tpl_vars['cur_cat']): ?> selected="selected"<?php endif; ?>>　- <?php echo $this->_tpl_vars['cate_sub']['cat_name']; ?>
</option>
               <?php $_from = $this->_tpl_vars['cate_sub']['sub']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cate_sub_sub']):
?>
               <option value="<?php echo $this->_tpl_vars['cate_sub_sub']['cat_id']; ?>
"<?php if ($this->_tpl_vars['cate_sub_sub']['cat_id'] == $this->_tpl_vars['cur_cat']): ?> selected="selected"<?php endif; ?>>　　- <?php echo $this->_tpl_vars['cate_sub_sub']['cat_name']; ?>
</option>
               <?php endforeach; endif; unset($_from); ?>
             <?php endforeach; endif; unset($_from); ?>
           <?php endforeach; endif; unset($_from); ?>
        </select>
       </td>
      </tr>
      <tr>
       <td align="right">纸张大小</td>
       <td>
          <input type="radio" name="size" value="A4（纵向）"<?php if ($this->_tpl_vars['article']['size'] == 'A4（纵向）'): ?> checked<?php endif; ?>>A4（纵向）    <input type="radio" name="size" value="A4（横向）"<?php if ($this->_tpl_vars['article']['size'] == 'A4（横向）'): ?> checked<?php endif; ?>>A4（横向）
       </td>
      </tr>
      <tr>
       <td align="right">边框设置</td>
       <td>
          <input type="radio" name="border" value="0"<?php if ($this->_tpl_vars['article']['border'] == 0): ?> checked<?php endif; ?>>无边框    <input type="radio" name="border" value="1"<?php if ($this->_tpl_vars['article']['border'] == 1): ?> checked<?php endif; ?>>有边框
       </td>
      </tr>
      <tr>
       <td align="right">表格模板</td>
       <td>
        <textarea id="content" name="content" style="width:680px;height:400px;" class="textArea"><?php echo $this->_tpl_vars['article']['content']; ?>
</textarea>
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
        <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['article']['id']; ?>
">
        <input name="submit" class="btn" type="submit" value="<?php echo $this->_tpl_vars['lang']['btn_submit']; ?>
" />
       </td>
      </tr>
     </table>
    </form>
    <?php endif; ?>
   </div>
 </div>
 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
 </div>
</body>
</html>
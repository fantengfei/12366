<?php /* Smarty version 2.6.26, created on 2015-03-27 11:40:16
         compiled from javascript.htm */ ?>
<script type="text/javascript" src="images/jquery.min.js"></script>
<?php if ($this->_tpl_vars['no_user']): ?>
<script type="text/javascript">
<!--
// 这里把JS用到的所有语言都赋值到这里
<?php $_from = $this->_tpl_vars['lang']['js_lang']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
var <?php echo $this->_tpl_vars['key']; ?>
 = "<?php echo $this->_tpl_vars['item']; ?>
";
<?php endforeach; endif; unset($_from); ?>
//-->
</script>
<?php endif; ?>
<script type="text/javascript">
<?php echo '
$(document).ready(function(){
  $(\'.M\').hover(
    function(){
      $(this).addClass(\'active\');
    },
    function(){
      $(this).removeClass(\'active\');
    });

    $(".tableBasic tr").hover(function(){
        $(this).addClass("even");
    }).mouseout(function(){
        $(this).removeClass("even");
    })
});
'; ?>

</script>

<?php if ($this->_tpl_vars['cur'] == 'article'): ?>
<script type="text/javascript">
<?php echo '
// 表单全选
function selectcheckbox(form)
{
	for(var i = 0;i < form.elements.length; i++)
	{
		var e = form.elements[i];
		if(e.name != \'chkall\' && e.disabled != true) e.checked = form.chkall.checked;
	}
}

'; ?>

</script>
<?php endif; ?>
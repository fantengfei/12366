<?php /* Smarty version 2.6.26, created on 2015-03-27 11:40:33
         compiled from menu.htm */ ?>
<!-- 后台菜单 -->
<div id="menu">
 <ul class="top">
  <li<?php if ($this->_tpl_vars['cur'] == 'home'): ?> class="cur"<?php endif; ?>><a href="index.php"><i class="home"></i><em><?php echo $this->_tpl_vars['lang']['menu_home']; ?>
</em></a></li>
 </ul>
 <ul>
  <li<?php if ($this->_tpl_vars['cur'] == 'article_category'): ?> class="cur"<?php endif; ?>><a href="article_category.php"><i class="articleCat"></i><em><?php echo $this->_tpl_vars['lang']['article_category']; ?>
</em></a></li>
  <li<?php if ($this->_tpl_vars['cur'] == 'article'): ?> class="cur"<?php endif; ?>><a href="article.php"><i class="article"></i><em><?php echo $this->_tpl_vars['lang']['article']; ?>
</em></a></li>
 </ul>
 <ul>
  <li<?php if ($this->_tpl_vars['cur'] == 'manager'): ?> class="cur"<?php endif; ?>><a href="manager.php"><i class="manager"></i><em><?php echo $this->_tpl_vars['lang']['manager']; ?>
</em></a></li>
  <li<?php if ($this->_tpl_vars['cur'] == 'manager_log'): ?> class="cur"<?php endif; ?>><a href="manager.php?rec=manager_log"><i class="managerLog"></i><em><?php echo $this->_tpl_vars['lang']['manager_log']; ?>
</em></a></li>
 </ul>
</div>
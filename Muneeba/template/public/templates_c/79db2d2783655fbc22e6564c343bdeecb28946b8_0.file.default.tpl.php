<?php
/* Smarty version 3.1.28, created on 2016-06-28 16:20:15
  from "/var/www/html/training/training/Muneeba/template/app/views/layouts/default.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57725d6faae043_67497363',
  'file_dependency' => 
  array (
    '79db2d2783655fbc22e6564c343bdeecb28946b8' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/template/app/views/layouts/default.tpl',
      1 => 1467112721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:/var/www/html/training/training/Muneeba/template/app/views/generic/header.tpl' => 1,
    'file:/var/www/html/training/training/Muneeba/template/app/views/generic/topMenu.tpl' => 1,
    'file:/var/www/html/training/training/Muneeba/template/app/views/generic/sidebar.tpl' => 1,
    'file:/var/www/html/training/training/Muneeba/template/app/views/generic/footer.tpl' => 1,
  ),
),false)) {
function content_57725d6faae043_67497363 ($_smarty_tpl) {
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/training/training/Muneeba/template/app/views/generic/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/training/training/Muneeba/template/app/views/generic/topMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/training/training/Muneeba/template/app/views/generic/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['file']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:/var/www/html/training/training/Muneeba/template/app/views/generic/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}

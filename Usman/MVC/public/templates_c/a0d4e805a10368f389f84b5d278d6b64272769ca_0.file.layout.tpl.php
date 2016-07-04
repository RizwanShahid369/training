<?php
/* Smarty version 3.1.28, created on 2016-06-30 03:48:24
  from "/var/www/html/m_v_c/app/views/student/layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774cec8076d18_09603867',
  'file_dependency' => 
  array (
    'a0d4e805a10368f389f84b5d278d6b64272769ca' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/layout.tpl',
      1 => 1467272858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:view.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5774cec8076d18_09603867 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}

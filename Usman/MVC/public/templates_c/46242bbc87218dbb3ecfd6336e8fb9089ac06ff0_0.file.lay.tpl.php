<?php
/* Smarty version 3.1.28, created on 2016-06-30 03:37:50
  from "/var/www/html/m_v_c/app/views/login/lay.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774cc4e871ec2_40190345',
  'file_dependency' => 
  array (
    '46242bbc87218dbb3ecfd6336e8fb9089ac06ff0' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/login/lay.tpl',
      1 => 1467272257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:index.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5774cc4e871ec2_40190345 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"My Page Title"), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

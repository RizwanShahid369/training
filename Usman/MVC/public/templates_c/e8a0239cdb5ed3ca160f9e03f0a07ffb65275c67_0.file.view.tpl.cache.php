<?php
/* Smarty version 3.1.28, created on 2016-06-22 09:51:52
  from "/var/www/html/m_v_c/app/views/student/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576a97f8415a81_96482054',
  'file_dependency' => 
  array (
    'e8a0239cdb5ed3ca160f9e03f0a07ffb65275c67' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/view.tpl',
      1 => 1466603510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576a97f8415a81_96482054 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '841070043576a97f83ff0d4_25333266';
?>


<table  border="1">
    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Father Name</th>
        <th>Address</th>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$__foreach_i_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_i_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Father_Name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_i_0_saved_key;
}
?>

</table><?php }
}

<?php
/* Smarty version 3.1.28, created on 2016-06-28 03:21:54
  from "/var/www/html/m_v_c/app/views/teacher/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57722592a7d153_54193912',
  'file_dependency' => 
  array (
    'e768d527a8996db7dc78122f9ccb3e41fccad142' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/teacher/view.tpl',
      1 => 1467098481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57722592a7d153_54193912 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '138103517757722592a5c452_29531438';
?>

<table border="1">

    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Department</th>
        <th>Rank</th>
    </tr>

    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_obj_0_saved_item = isset($_smarty_tpl->tpl_vars['obj']) ? $_smarty_tpl->tpl_vars['obj'] : false;
$__foreach_obj_0_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable();
$__foreach_obj_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_obj_0_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['obj']->value) {
$__foreach_obj_0_saved_local_item = $_smarty_tpl->tpl_vars['obj'];
?>
    <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['dept'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['rank'];?>
</td>
            <td><a href = '?url=teacher/edit/<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
&dept=<?php echo $_smarty_tpl->tpl_vars['obj']->value['dept'];?>
&rank=<?php echo $_smarty_tpl->tpl_vars['obj']->value['rank'];?>
'>Edit</a></td>
            <td><a href = '?url=teacher/delVal/<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
'>Delete</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['obj'] = $__foreach_obj_0_saved_local_item;
}
}
if ($__foreach_obj_0_saved_item) {
$_smarty_tpl->tpl_vars['obj'] = $__foreach_obj_0_saved_item;
}
if ($__foreach_obj_0_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_obj_0_saved_key;
}
?>
</table>
<br>
To add record  <a href = '?url=teacher/insert'>Insert</a><?php }
}

<?php
/* Smarty version 3.1.28, created on 2016-06-24 07:46:22
  from "/var/www/html/m_v_c/app/views/student/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576d1d8e58ff41_60772225',
  'file_dependency' => 
  array (
    'e8a0239cdb5ed3ca160f9e03f0a07ffb65275c67' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/view.tpl',
      1 => 1466762409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d1d8e58ff41_60772225 ($_smarty_tpl) {
?>

<table border="1">

    <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Date of Birth</th>
        <th>Father Name</th>
        <th>City</th>
        <th>School</th>
        <th>Address</th>
    </tr>

    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$__foreach_i_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_i_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
    <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['dob'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Father_Name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['city'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['school'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
            <td><a href = '?url=studentController/edit'>Edit</a></td>
            <td><a href = '?url=studentController/delete'>Delete</td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
?>
</table><?php }
}

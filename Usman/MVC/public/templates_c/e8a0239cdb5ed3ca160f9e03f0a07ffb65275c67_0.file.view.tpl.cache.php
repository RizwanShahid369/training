<?php
/* Smarty version 3.1.28, created on 2016-06-28 02:52:50
  from "/var/www/html/m_v_c/app/views/student/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57721ec276ce81_49285870',
  'file_dependency' => 
  array (
    'e8a0239cdb5ed3ca160f9e03f0a07ffb65275c67' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/view.tpl',
      1 => 1467096768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57721ec276ce81_49285870 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '34095537257721ec2739bf1_51769795';
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
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['dob'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['Father_Name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['city'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['school'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['address'];?>
</td>
            <td><a href = '?url=student/edit/<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
&dob=<?php echo $_smarty_tpl->tpl_vars['obj']->value['dob'];?>
&fname=<?php echo $_smarty_tpl->tpl_vars['obj']->value['Father_Name'];?>
&city=<?php echo $_smarty_tpl->tpl_vars['obj']->value['city'];?>
&school=<?php echo $_smarty_tpl->tpl_vars['obj']->value['school'];?>
&address=<?php echo $_smarty_tpl->tpl_vars['obj']->value['address'];?>
'>Edit</a></td>
            <td><a href = '?url=student/delVal/<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
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
To add record  <a href = '?url=student/insert'>Insert</a><?php }
}

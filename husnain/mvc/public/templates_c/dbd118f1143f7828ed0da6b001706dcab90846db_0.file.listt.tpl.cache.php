<?php
/* Smarty version 3.1.28, created on 2016-06-22 09:24:41
  from "/var/www/html/training/training/husnain/mvc/app/views/student/listt.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576a9199da2a50_23412986',
  'file_dependency' => 
  array (
    'dbd118f1143f7828ed0da6b001706dcab90846db' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/listt.tpl',
      1 => 1466601877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576a9199da2a50_23412986 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1852422953576a9199d80a99_12370458';
?>
<h2>All students information</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>Operation</th>

</tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['stdarr']->value;
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
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['first_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['last_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
            <td><a href="edit?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Edit</a> / <a href="delete?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Delete</a> </td>
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

</table>


<?php }
}

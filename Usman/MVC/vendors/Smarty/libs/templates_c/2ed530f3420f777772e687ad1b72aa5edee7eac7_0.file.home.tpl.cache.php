<?php
/* Smarty version 3.1.28, created on 2016-06-20 03:36:53
  from "/var/www/html/training/training/Muneeba/DBclass/Templates/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57679d1574c2b7_79547023',
  'file_dependency' => 
  array (
    '2ed530f3420f777772e687ad1b72aa5edee7eac7' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/DBclass/Templates/home.tpl',
      1 => 1466406423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57679d1574c2b7_79547023 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/training/training/Muneeba/DBclass/vendors/Smarty/libs/plugins/function.cycle.php';
$_smarty_tpl->compiled->nocache_hash = '176003234557679d1572a195_49225787';
?>


<a href="index.php?page=insert">insert</a>
<form action="index.php?page=search&action=search" method="post">
    Search Full Name: <input type="text" name="sname"><br>
    <input type="submit" name="search" value="search">
</form>


<table>
    <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_students_0_saved_item = isset($_smarty_tpl->tpl_vars['students']) ? $_smarty_tpl->tpl_vars['students'] : false;
$_smarty_tpl->tpl_vars['students'] = new Smarty_Variable();
$__foreach_students_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_students_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['students']->value) {
$__foreach_students_0_saved_local_item = $_smarty_tpl->tpl_vars['students'];
?>
        <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaaaaa,#bbbbbb"),$_smarty_tpl);?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['full_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['dob'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['father_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['class'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['city'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value['school'];?>
</td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['students'] = $__foreach_students_0_saved_local_item;
}
}
if ($__foreach_students_0_saved_item) {
$_smarty_tpl->tpl_vars['students'] = $__foreach_students_0_saved_item;
}
?>
</table><?php }
}

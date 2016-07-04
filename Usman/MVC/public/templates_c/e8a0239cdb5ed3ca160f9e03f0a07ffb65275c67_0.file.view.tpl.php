<?php
/* Smarty version 3.1.28, created on 2016-06-30 05:15:29
  from "/var/www/html/m_v_c/app/views/student/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774e3310f82f9_66185996',
  'file_dependency' => 
  array (
    'e8a0239cdb5ed3ca160f9e03f0a07ffb65275c67' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/view.tpl',
      1 => 1467278102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../login/index.tpl' => 1,
  ),
),false)) {
function content_5774e3310f82f9_66185996 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_2642413455774e3310bb404_47634076',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:../app/views/student/view.tpl */
function block_2642413455774e3310bb404_47634076($_smarty_tpl, $_blockParentStack) {
?>

<div class="panel-body">
    <div class="dataTable_wrapper">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
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
</div>
    </div>
    To add record  <a href = '?url=student/insert'>Insert</a>
<?php
}
/* {/block 'body'} */
}

<?php
/* Smarty version 3.1.28, created on 2016-06-27 07:16:23
  from "/var/www/html/training/training/husnain/mvc/app/views/student/listAll.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57710b07d68671_79727594',
  'file_dependency' => 
  array (
    'dbd118f1143f7828ed0da6b001706dcab90846db' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/listAll.tpl',
      1 => 1467026182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_57710b07d68671_79727594 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_20298579457710b07d466f6_91046912',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_84022682557710b07d4b900_39600616',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/student/listAll.tpl */
function block_20298579457710b07d466f6_91046912($_smarty_tpl, $_blockParentStack) {
?>
 student add page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/student/listAll.tpl */
function block_84022682557710b07d4b900_39600616($_smarty_tpl, $_blockParentStack) {
?>


<h2>All students information</h2>

<table border="1" width="50%">
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
            <td><a href="edits?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Edit</a> / <a href="deletes?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
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

<?php
}
/* {/block 'body'} */
}

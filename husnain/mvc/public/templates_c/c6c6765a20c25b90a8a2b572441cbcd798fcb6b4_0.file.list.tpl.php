<?php
/* Smarty version 3.1.28, created on 2016-06-28 07:12:41
  from "/var/www/html/training/training/husnain/mvc/app/views/teacher/listAll.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57725ba92c93f0_41083354',
  'file_dependency' => 
  array (
    'c6c6765a20c25b90a8a2b572441cbcd798fcb6b4' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/teacher/listAll.tpl',
      1 => 1467112333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_57725ba92c93f0_41083354 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_14153676557725ba92a4058_31342930',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_63632122057725ba92a9852_20621345',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/teacher/listAll.tpl */
function block_14153676557725ba92a4058_31342930($_smarty_tpl, $_blockParentStack) {
?>
 teacher List page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/teacher/listAll.tpl */
function block_63632122057725ba92a9852_20621345($_smarty_tpl, $_blockParentStack) {
?>


    <h2>All Teacher information</h2>

    <table border="1" width="50%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Operation</th>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
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
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['designation'];?>
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

<?php
}
/* {/block 'body'} */
}

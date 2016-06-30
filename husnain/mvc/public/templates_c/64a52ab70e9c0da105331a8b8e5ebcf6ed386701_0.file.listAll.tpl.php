<?php
/* Smarty version 3.1.28, created on 2016-06-30 01:46:45
  from "/var/www/html/training/training/husnain/mvc/app/views/teacher/listAll.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774b2455ca9a8_16520892',
  'file_dependency' => 
  array (
    '64a52ab70e9c0da105331a8b8e5ebcf6ed386701' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/teacher/listAll.tpl',
      1 => 1467265604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_5774b2455ca9a8_16520892 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_613297385774b2455a0d98_38354137',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_3903119845774b2455a54d9_18617479',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/teacher/listAll.tpl */
function block_613297385774b2455a0d98_38354137($_smarty_tpl, $_blockParentStack) {
?>
 teacher List page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/teacher/listAll.tpl */
function block_3903119845774b2455a54d9_18617479($_smarty_tpl, $_blockParentStack) {
?>



    <div class="col-lg-12">
    <h2>All Teacher information</h2>

    <div class="panel panel-default">
    <div class="panel-heading">
        Teachers
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
    <div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Operation</th>
        </thead>
        <tbody>
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
        </tbody>
    </table>
    </div>
        <!-- /.table-responsive -->
    </div>
        <!-- /.panel-body -->

    </div>
    <div>
        <a href="add">Add new teachers</a>
    </div>


<?php
}
/* {/block 'body'} */
}

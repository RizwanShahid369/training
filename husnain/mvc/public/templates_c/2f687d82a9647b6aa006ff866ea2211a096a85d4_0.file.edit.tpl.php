<?php
/* Smarty version 3.1.28, created on 2016-06-30 03:01:26
  from "/var/www/html/training/training/husnain/mvc/app/views/teacher/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774c3c6323012_81360162',
  'file_dependency' => 
  array (
    '2f687d82a9647b6aa006ff866ea2211a096a85d4' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/teacher/edit.tpl',
      1 => 1467265997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_5774c3c6323012_81360162 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_19514061615774c3c62fd8f0_08581133',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_11791057195774c3c6302d14_46909666',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/teacher/edit.tpl */
function block_19514061615774c3c62fd8f0_08581133($_smarty_tpl, $_blockParentStack) {
?>
 teacher edit page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/teacher/edit.tpl */
function block_11791057195774c3c6302d14_46909666($_smarty_tpl, $_blockParentStack) {
?>

    <h3>Teacher Edit page </h3>
    <div class="col-lg-6">
    <form role="form" method="post" action="">

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
        <div class="form-group">
            <label>Teacher Name</label>
            <input class="form-control" type="text" name="teacher[name]" value= <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['name'];?>
>
        </div>
        <div class="form-group">
            Designation
            <input class="form-control" type="text" name="teacher[designation]" value= <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['designation'];?>
>
        </div>
        <div>
            <input class="btn btn-default" type="submit" value="Submit">
        </div>
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
    <div>
        <a href="listAll">View All</a>
    </div>
<?php
}
/* {/block 'body'} */
}

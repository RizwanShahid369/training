<?php
/* Smarty version 3.1.28, created on 2016-06-30 01:25:57
  from "/var/www/html/training/training/husnain/mvc/app/views/student/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774ad651c3c40_73039728',
  'file_dependency' => 
  array (
    '3612603fe14d0b97f85df29c3003c634953f2c35' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/edit.tpl',
      1 => 1467264355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_5774ad651c3c40_73039728 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_21431755205774ad651a2463_35194888',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_20570069495774ad651a6a67_56645506',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/student/edit.tpl */
function block_21431755205774ad651a2463_35194888($_smarty_tpl, $_blockParentStack) {
?>
 student add page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/student/edit.tpl */
function block_20570069495774ad651a6a67_56645506($_smarty_tpl, $_blockParentStack) {
?>

    <h3>student Edit page </h3>
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
                    <label>Fist Name</label>
                    <input type="text" class="form-control" name="student[first_name]" value= <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['first_name'];?>
>
                </div>
                <div class="form-group">
                    <label> Last Name</label>
                    <input type="text" class="form-control" name="student[last_name]" value= <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['last_name'];?>
>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="student[address]" value= <?php echo $_smarty_tpl->tpl_vars['data']->value[0]['address'];?>
>
                </div>
                <div>
                    <input type="submit" class="btn btn-default" value="Submit">
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
        </form>

        <a href="listAll">View All</a>
    </div>
<?php
}
/* {/block 'body'} */
}

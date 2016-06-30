<?php
/* Smarty version 3.1.28, created on 2016-06-30 02:09:26
  from "/var/www/html/training/training/husnain/mvc/app/views/student/listAll.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774b796366bf2_29613874',
  'file_dependency' => 
  array (
    '8cd9d4ef4c09c0bb0e5a9c2c906e8a47e349b5f2' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/listAll.tpl',
      1 => 1467265384,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_5774b796366bf2_29613874 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_17681862435774b79633d344_47031676',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_9480851265774b796341af9_26671949',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/student/listAll.tpl */
function block_17681862435774b79633d344_47031676($_smarty_tpl, $_blockParentStack) {
?>
 student add page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/student/listAll.tpl */
function block_9480851265774b796341af9_26671949($_smarty_tpl, $_blockParentStack) {
?>

    <h2>All students information</h2>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Students
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
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
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['first_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['last_name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
                                <td><a href="edit?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Edit</a> / <a href="delete?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">Delete</a></td>
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
        <!-- /.panel -->


        <div>
            <a href="add">Add new Student</a>
        </div>
    </div>
<?php
}
/* {/block 'body'} */
}

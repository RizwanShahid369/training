<?php
/* Smarty version 3.1.28, created on 2016-06-30 05:33:44
  from "/var/www/html/m_v_c/app/views/teacher/forms.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774e778cb8af8_05291294',
  'file_dependency' => 
  array (
    'd85155b9cce663fa9628314ff3464201793100ff' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/teacher/forms.tpl',
      1 => 1467279222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../login/index.tpl' => 1,
  ),
),false)) {
function content_5774e778cb8af8_05291294 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_13659428905774e778ca4e44_80402345',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:../app/views/teacher/forms.tpl */
function block_13659428905774e778ca4e44_80402345($_smarty_tpl, $_blockParentStack) {
?>


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="?url=teacher/editVal" method="post">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                        </div>

                                        <div class="form-group">
                                            <label>Department</label>
                                            <input class="form-control" name="dept" value="<?php echo $_smarty_tpl->tpl_vars['dept']->value;?>
">
                                        </div>

                                        <div class="form-group">
                                            <label>Rank</label>
                                            <input class="form-control" name="rank" value="<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
">
                                        </div>

                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->

                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        <!-- /#page-wrapper -->
  <?php
}
/* {/block 'body'} */
}

<?php
/* Smarty version 3.1.28, created on 2016-06-30 05:13:39
  from "/var/www/html/m_v_c/app/views/student/forms.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774e2c3e93575_05451102',
  'file_dependency' => 
  array (
    '9f1da3bccc149fb11866c764efc2a632fbd8584b' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/forms.tpl',
      1 => 1467278016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../login/index.tpl' => 1,
  ),
),false)) {
function content_5774e2c3e93575_05451102 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_10274417135774e2c3e7bc59_63835979',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:../app/views/student/forms.tpl */
function block_10274417135774e2c3e7bc59_63835979($_smarty_tpl, $_blockParentStack) {
?>

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
                                    <form role="form" action="?url=student/editVal/" method="post">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                                        </div>
                                        <div class="form-group">
                                            <label>Father Name</label>
                                            <input class="form-control" name="fname" value="<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
">
                                        </div>

                                        <div class="form-group">
                                            <label>Date of birth</label>
                                            <input class="form-control" name="dob" value="<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
">
                                        </div>

                                        <div class="form-group">
                                            <label>City</label>
                                            <input class="form-control" name="city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
">
                                        </div>

                                        <div class="form-group">
                                            <label>School</label>
                                            <input class="form-control" name="school" value="<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
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
<?php
}
/* {/block 'body'} */
}

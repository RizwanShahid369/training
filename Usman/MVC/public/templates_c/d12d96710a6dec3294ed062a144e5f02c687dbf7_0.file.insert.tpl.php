<?php
/* Smarty version 3.1.28, created on 2016-06-30 07:53:29
  from "/var/www/html/m_v_c/app/views/student/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57750839f1c380_19009719',
  'file_dependency' => 
  array (
    'd12d96710a6dec3294ed062a144e5f02c687dbf7' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/insert.tpl',
      1 => 1467287560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../login/index.tpl' => 1,
  ),
),false)) {
function content_57750839f1c380_19009719 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_87772167257750839f09c33_17182357',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:../app/views/student/insert.tpl */
function block_87772167257750839f09c33_17182357($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="?url=student/insertVal/" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Father Name</label>
                                    <input class="form-control" name="fname" >
                                </div>

                                <div class="form-group">
                                    <label>Date of birth</label>
                                    <input class="form-control" name="dob">
                                </div>

                                <div class="form-group">
                                    <label>City</label>
                                    <input class="form-control" name="city">
                                </div>

                                <div class="form-group">
                                    <label>Class</label>
                                    <input class="form-control" name="class">
                                </div>

                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" name="address">
                                </div>

                                <div class="form-group">
                                    <label>School</label>
                                    <input class="form-control" name="school">
                                </div>
                                <input type="hidden" name="student" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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

<?php
/* Smarty version 3.1.28, created on 2016-06-29 14:30:42
  from "/var/www/html/training/training/Muneeba/template/app/views/actor/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577395421e74a2_65821316',
  'file_dependency' => 
  array (
    'c2468ff78d080b855676514e7916f43b6e70ae97' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/template/app/views/actor/edit.tpl',
      1 => 1467192630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577395421e74a2_65821316 ($_smarty_tpl) {
?>


<div id="page-wrapper">
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
                    Edit actor
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="../update" method="post">
                                <input type="hidden" name="actor_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                <div class="form-group">
                                    <label>First Name: </label>
                                    <input type="text" name="Actor[first_name]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name: </label>
                                    <input type="text" name="Actor[last_name]" class="form-control">
                                </div>
                                <button type="submit" name="update" value="update" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

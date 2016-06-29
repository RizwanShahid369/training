<?php
/* Smarty version 3.1.28, created on 2016-06-29 14:30:32
  from "/var/www/html/training/training/Muneeba/template/app/views/actor/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57739538b505a7_79327452',
  'file_dependency' => 
  array (
    'eba60c968ac478ebf4e3923442ce32068c99e7dc' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/template/app/views/actor/insert.tpl',
      1 => 1467192554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57739538b505a7_79327452 ($_smarty_tpl) {
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
                    Add an actor
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="../actor/add" method="post">
                                <div class="form-group">
                                    <label>First Name: </label>
                                    <input type="text" name="Actor[first_name]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Last Name: </label>
                                    <input type="text" name="Actor[last_name]" class="form-control">
                                </div>
                                <button type="submit" name="insert" value="insert" class="btn btn-default">Submit Button</button>
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

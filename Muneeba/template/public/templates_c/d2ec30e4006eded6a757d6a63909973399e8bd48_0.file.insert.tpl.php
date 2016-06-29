<?php
/* Smarty version 3.1.28, created on 2016-06-29 14:57:27
  from "/var/www/html/training/training/Muneeba/template/app/views/store/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57739b872b95b3_22329231',
  'file_dependency' => 
  array (
    'd2ec30e4006eded6a757d6a63909973399e8bd48' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/template/app/views/store/insert.tpl',
      1 => 1467194221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57739b872b95b3_22329231 ($_smarty_tpl) {
?>


<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Store</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit store
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="../store/add" method="post">

                                <div class="form-group">
                                    <label>Manager Staff ID: </label>
                                    <input type="text" name="Store[manager_staff_id]" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Address ID: </label>
                                    <input type="text" name="Store[address_id]" class="form-control">
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

<?php
/* Smarty version 3.1.28, created on 2016-06-28 16:47:00
  from "/var/www/html/training/training/Muneeba/template/app/views/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577263b4f2a7b9_99916047',
  'file_dependency' => 
  array (
    '6210d233471dc4621a18c861d30d82e3f993f9fd' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/template/app/views/view.tpl',
      1 => 1467114418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577263b4f2a7b9_99916047 ($_smarty_tpl) {
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="login" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="User[email]" autofocus="" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="User[password]" value="" type="password">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="save" value="value1" type="checkbox">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <input type="submit" href="login" class="btn btn-lg btn-success btn-block" name="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}

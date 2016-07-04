<?php
/* Smarty version 3.1.28, created on 2016-06-29 07:46:53
  from "/var/www/html/m_v_c/app/views/login/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5773b52d9567b1_92267669',
  'file_dependency' => 
  array (
    'ee1a5da065ba44a53738055587cca0140afb1073' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/login/login.tpl',
      1 => 1467200794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5773b52d9567b1_92267669 ($_smarty_tpl) {
echo '<?php
';?>ob_start();
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
<?php echo '?>';?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/m_v_c/app/views/layout/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/m_v_c/app/views/layout/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/m_v_c/app/views/layout/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/m_v_c/app/views/layout/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!--script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></--script>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">

                        <fieldset>
                            <form action="?url=login/chkLogin" method="post">
                                <input type = "text" class = "form-control"
                                       name = "username" required autofocus> </br>
                                <input type = "password" class = "form-control"
                                       name = "pass" ></br>
                                <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                                        name = "login"> Login</button><br>
                                <input type="checkbox" name="cook"> Remember me?<br>
                            </form>
                            <!--a href="/m_v_c/app/views/login/index.tpl" class="btn btn-lg btn-success btn-block">Login</a-->
                        </fieldset>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<?php echo '<script'; ?>
 src="/m_v_c/app/views/layout/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap Core JavaScript -->
<?php echo '<script'; ?>
 src="/m_v_c/app/views/layout/bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- Metis Menu Plugin JavaScript -->
<?php echo '<script'; ?>
 src="/m_v_c/app/views/layout/bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>
<!-- Custom Theme JavaScript -->
<?php echo '<script'; ?>
 src="/m_v_c/app/views/layout/dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}

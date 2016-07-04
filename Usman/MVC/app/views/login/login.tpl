<?php
ob_start();
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

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
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
<script src="/m_v_c/app/views/layout/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/m_v_c/app/views/layout/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="/m_v_c/app/views/layout/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="/m_v_c/app/views/layout/dist/js/sb-admin-2.js"></script>
</body>
</html>
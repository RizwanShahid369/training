<?php
/* Smarty version 3.1.28, created on 2016-06-23 06:50:03
  from "/var/www/html/training/training/husnain/mvc/app/views/student/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576bbedb5a6aa5_43680720',
  'file_dependency' => 
  array (
    'bc292d32ebbf6dec320eda15da6b267c17d40c73' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/login.tpl',
      1 => 1466678996,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576bbedb5a6aa5_43680720 ($_smarty_tpl) {
?>

<h4>this is login pahe</h4>

<form method="POST">
    Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    Remenber Me <input type="checkbox" name="remember"> <br>
    <input type="submit">

</form><?php }
}

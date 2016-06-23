<?php
/* Smarty version 3.1.28, created on 2016-06-23 01:42:02
  from "/var/www/html/training/training/Muneeba/MVC/app/views/layouts/signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576b76aa0d8df2_28341317',
  'file_dependency' => 
  array (
    'fb074847536c3cc7eec15c087377247facdff429' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/layouts/signup.tpl',
      1 => 1466660414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576b76aa0d8df2_28341317 ($_smarty_tpl) {
?>

<form action="signUp" method="post">

    Email: <input type="text" name="User[email]"><br>
    Password: <input type="text" name="User[password]"><br>

    <input type="submit" name="signup" value="signup">
</form><?php }
}

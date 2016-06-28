<?php
/* Smarty version 3.1.28, created on 2016-06-27 12:58:48
  from "/var/www/html/training/training/Muneeba/MVC/app/views/layouts/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5770dcb822e034_15137577',
  'file_dependency' => 
  array (
    '02a3cbefddf54380d493d2a9801e21aeb687ad9b' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/layouts/login.tpl',
      1 => 1467014299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5770dcb822e034_15137577 ($_smarty_tpl) {
?>



<a href="user/newUser">Sign Up!</a>
<form action="login" method="post">
    Email: <input type="text" name="User[email]" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
><br>
    Password: <input type="text" name="User[password]" value=<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
><br>
    Remember me :  <input type="checkbox" name="save" value="value1">
    <input type="submit" name="login" value="login">
</form><?php }
}

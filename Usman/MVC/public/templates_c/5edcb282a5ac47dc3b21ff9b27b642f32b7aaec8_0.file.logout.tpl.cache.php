<?php
/* Smarty version 3.1.28, created on 2016-06-23 04:09:58
  from "/var/www/html/m_v_c/app/views/login/logout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576b99567da922_72016005',
  'file_dependency' => 
  array (
    '5edcb282a5ac47dc3b21ff9b27b642f32b7aaec8' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/login/logout.tpl',
      1 => 1466669388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576b99567da922_72016005 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2075439979576b99567d58c9_52279758';
?>

<form action="?url=loginController/logout" method="post">
    Click here to clean Session
    <button class = "btn btn-lg btn-primary btn-block" type = "Logout"> Log Out</button>
    <input type="hidden" name="lo">
</form><?php }
}

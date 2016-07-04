<?php
/* Smarty version 3.1.28, created on 2016-06-27 06:49:48
  from "/var/www/html/m_v_c/app/views/student/delete.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577104ccafb346_94867190',
  'file_dependency' => 
  array (
    'de5cb7c3c52601a3814ce4f48df977419f4cf582' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/delete.tpl',
      1 => 1466594074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577104ccafb346_94867190 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1660938288577104ccaf47a5_90937554';
?>
<form action="?url=studentController/delVal" method="post">
    Enter
    ID: <input type="text" name="id"><br>
    <input type="submit" name="submit" value="submit">
</form><?php }
}

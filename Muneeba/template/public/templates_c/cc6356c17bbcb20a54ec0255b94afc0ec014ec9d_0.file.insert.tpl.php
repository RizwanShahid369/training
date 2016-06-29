<?php
/* Smarty version 3.1.28, created on 2016-06-24 03:38:54
  from "/var/www/html/training/training/Muneeba/MVC/app/views/store/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576ce38e49b232_08795130',
  'file_dependency' => 
  array (
    'cc6356c17bbcb20a54ec0255b94afc0ec014ec9d' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/store/insert.tpl',
      1 => 1466752762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576ce38e49b232_08795130 ($_smarty_tpl) {
?>


<a href="../store/view">back</a>
<form action="../store/add" method="post">

    Manager Staff ID: <input type="text" name="Store[manager_staff_id]"><br>
    Address ID: <input type="text" name="Store[address_id]"><br>

    <input type="submit" name="insert" value="insert">
</form>


<?php }
}

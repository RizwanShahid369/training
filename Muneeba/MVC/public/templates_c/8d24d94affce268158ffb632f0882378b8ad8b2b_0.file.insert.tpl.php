<?php
/* Smarty version 3.1.28, created on 2016-06-24 06:48:54
  from "/var/www/html/training/training/Muneeba/MVC/app/views/customer/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576d10161644a4_13663995',
  'file_dependency' => 
  array (
    '8d24d94affce268158ffb632f0882378b8ad8b2b' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/customer/insert.tpl',
      1 => 1466765144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d10161644a4_13663995 ($_smarty_tpl) {
?>


<form action="../customer/add" method="post">
    First Name: <input type="text" name="Customer[first_name]"><br>
    Last Name: <input type="text" name="Customer[last_name]"><br>
    Store ID: <input type="text" name="Customer[store_id]"><br>
    Email: <input type="text" name="Customer[email]"><br>
    Address: <input type="text" name="Customer[address_id]"><br>
    <input type="submit" name="insert" value="insert">
</form>
<?php }
}

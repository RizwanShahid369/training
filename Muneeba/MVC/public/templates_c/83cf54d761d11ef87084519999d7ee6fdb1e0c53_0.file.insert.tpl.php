<?php
/* Smarty version 3.1.28, created on 2016-06-23 07:20:26
  from "/var/www/html/training/training/Muneeba/MVC/app/views/actor/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576bc5fa78d771_61006252',
  'file_dependency' => 
  array (
    '83cf54d761d11ef87084519999d7ee6fdb1e0c53' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/actor/insert.tpl',
      1 => 1466680821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576bc5fa78d771_61006252 ($_smarty_tpl) {
?>


<a href="../actor/view">back</a>
<form action="../actor/add" method="post">

    First Name: <input type="text" name="Actor[first_name]"><br>
    Last name: <input type="text" name="Actor[last_name]"><br>

    <input type="submit" name="insert" value="insert">
</form>
<?php }
}

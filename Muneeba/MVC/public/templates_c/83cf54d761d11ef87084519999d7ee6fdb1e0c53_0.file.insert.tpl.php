<?php
/* Smarty version 3.1.28, created on 2016-06-23 05:36:09
  from "/var/www/html/training/training/Muneeba/MVC/app/views/actor/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576bad89803c49_50656215',
  'file_dependency' => 
  array (
    '83cf54d761d11ef87084519999d7ee6fdb1e0c53' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/actor/insert.tpl',
      1 => 1466674564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576bad89803c49_50656215 ($_smarty_tpl) {
?>



<form action="add" method="post">

    First Name: <input type="text" name="Actor[first_name]"><br>
    Last name: <input type="text" name="Actor[last_name]"><br>

    <input type="submit" name="insert" value="insert">
</form>
<?php }
}

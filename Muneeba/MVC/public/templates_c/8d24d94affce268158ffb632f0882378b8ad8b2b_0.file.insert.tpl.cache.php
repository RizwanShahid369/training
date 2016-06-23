<?php
/* Smarty version 3.1.28, created on 2016-06-21 05:33:11
  from "/var/www/html/training/training/Muneeba/MVC/app/views/customer/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576909d713b309_54247167',
  'file_dependency' => 
  array (
    '8d24d94affce268158ffb632f0882378b8ad8b2b' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/customer/insert.tpl',
      1 => 1466492423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576909d713b309_54247167 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1760125010576909d7135119_39086408';
?>


<a href="index.php">back</a>
<form action="index.php?page=edit&action=insert" method="post">
    Full Name: <input type="text" name="name"><br>
    Date of Birth: <input type="text" name="dob"><br>
    Father name: <input type="text" name="fname"><br>
    Class: <input type="text" name="class"><br>
    Address: <input type="text" name="address"><br>
    City: <input type="text" name="city"><br>
    School: <input type="text" name="school"><br>
    <input type="submit" name="insert" value="insert">
</form>
<?php }
}

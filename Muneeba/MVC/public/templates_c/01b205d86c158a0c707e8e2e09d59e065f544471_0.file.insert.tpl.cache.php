<?php
/* Smarty version 3.1.28, created on 2016-06-21 03:00:28
  from "/var/www/html/training/training/Muneeba/MVC/app/views/student/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5768e60ceab264_64231360',
  'file_dependency' => 
  array (
    '01b205d86c158a0c707e8e2e09d59e065f544471' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/student/insert.tpl',
      1 => 1466492423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768e60ceab264_64231360 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13842619005768e60cea13e9_16110381';
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

<?php
/* Smarty version 3.1.28, created on 2016-06-28 03:08:54
  from "/var/www/html/m_v_c/app/views/student/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57722286d03014_18195485',
  'file_dependency' => 
  array (
    'd12d96710a6dec3294ed062a144e5f02c687dbf7' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/insert.tpl',
      1 => 1467025434,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57722286d03014_18195485 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '176931820657722286cfab66_79772937';
?>

<form action="?url=student/insertVal" method="post">
    Full Name: <input type="text" name="name"><br>
    Date of Birth: <input type="text" name="dob"><br>
    Father name: <input type="text" name="fname"><br>
    Class: <input type="text" name="class"><br>
    Address: <input type="text" name="address"><br>
    City: <input type="text" name="city"><br>
    School: <input type="text" name="school"><br>
    <input type="submit" name="submit" value="submit">
    <br>
    <br>
    go to <a href = '?url=student/select'>View All</a>
</form>
<?php }
}

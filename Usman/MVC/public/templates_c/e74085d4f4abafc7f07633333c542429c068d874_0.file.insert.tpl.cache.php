<?php
/* Smarty version 3.1.28, created on 2016-06-28 05:13:05
  from "/var/www/html/m_v_c/app/views/teacher/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57723fa1c9b8c1_31871076',
  'file_dependency' => 
  array (
    'e74085d4f4abafc7f07633333c542429c068d874' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/teacher/insert.tpl',
      1 => 1467105179,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57723fa1c9b8c1_31871076 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '48218527157723fa1c96271_34517685';
?>

<form action="?url=teacher/insertVal" method="post">
    Full Name: <input type="text" name="name"><br>
    Department: <input type="text" name="dept"><br>
    Rank: <input type="text" name="rank"><br>
    <input type="submit" name="submit" value="submit">
    <br>
    <br>
    go to <a href = '?url=teacher/select'>View All</a>
</form>
<?php }
}

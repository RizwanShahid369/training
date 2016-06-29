<?php
/* Smarty version 3.1.28, created on 2016-06-24 03:54:57
  from "/var/www/html/training/training/Muneeba/MVC/app/views/actor/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576ce7519fcc25_30023689',
  'file_dependency' => 
  array (
    'f435c8b4abf18cd8c987dba5281f6f47c66c43d3' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/actor/edit.tpl',
      1 => 1466754788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576ce7519fcc25_30023689 ($_smarty_tpl) {
?>

<a href="index.php">back</a>
<form action="../update" method="post">
    <input type="hidden" name="actor_id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    First Name: <input type="text" name="Actor[first_name]"><br>
    Last name: <input type="text" name="Actor[last_name]"><br>

<input type="submit" name="update" value="update">
</form>



<?php }
}

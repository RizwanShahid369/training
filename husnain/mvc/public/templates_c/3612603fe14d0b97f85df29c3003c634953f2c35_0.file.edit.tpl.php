<?php
/* Smarty version 3.1.28, created on 2016-06-23 03:55:30
  from "/var/www/html/training/training/husnain/mvc/app/views/student/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576b95f2a10429_86214827',
  'file_dependency' => 
  array (
    '3612603fe14d0b97f85df29c3003c634953f2c35' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/edit.tpl',
      1 => 1466601963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576b95f2a10429_86214827 ($_smarty_tpl) {
?>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
<h3>student Edit page </h3>



<form method="post" action="">
    <table>
        <?php
$_from = $_smarty_tpl->tpl_vars['record']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_i_0_saved_item = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$__foreach_i_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
$__foreach_i_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_i_0_total) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$__foreach_i_0_saved_local_item = $_smarty_tpl->tpl_vars['i'];
?>
            <tr>
                <td>Fist Name:</td>
                <td><input type="text" name="fname" value=""></td>
            </tr>
            <tr>
                <td> Last Name:</td>
                <td><input type="text" name="lname" value=""></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_local_item;
}
}
if ($__foreach_i_0_saved_item) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_i_0_saved_item;
}
if ($__foreach_i_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_i_0_saved_key;
}
?>
    </table>

    <a href="listt">View All</a>

</body>
</html>

<?php }
}

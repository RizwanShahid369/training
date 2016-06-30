<?php
/* Smarty version 3.1.28, created on 2016-06-23 03:38:59
  from "/var/www/html/training/training/husnain/mvc/app/views/student/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576b92131968d1_12914644',
  'file_dependency' => 
  array (
    'f6630bff6b016d0cb0fc06a73aa24f795005ff35' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/add.tpl',
      1 => 1466601677,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_576b92131968d1_12914644 ($_smarty_tpl) {
?>
<html>
<head>
    <title>Add Form</title>
</head>
<body>
<h3>student add page </h3>

<form method="post" action="">
    <table>
        <tr>
            <td>Fist Name:</td>
            <td> <input type="text" name="fname"></td>
        </tr>
        <tr>
            <td> Last Name:</td>
            <td> <input type="text" name="lname"></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="address"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"> </td>
        </tr>

    </table>

<a href="listAll">View All</a>

</body>
</html>
<?php }
}

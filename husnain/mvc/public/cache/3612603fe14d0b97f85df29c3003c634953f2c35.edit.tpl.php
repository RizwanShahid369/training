<?php
/* Smarty version 3.1.28, created on 2016-06-23 00:30:51
  from "/var/www/html/training/training/husnain/mvc/app/views/student/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576b65fb3ae435_50109916',
  'file_dependency' => 
  array (
    '3612603fe14d0b97f85df29c3003c634953f2c35' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/edit.tpl',
      1 => 1466601963,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_576b65fb3ae435_50109916 ($_smarty_tpl) {
?>
<html>
<head>
    <title>Edit Form</title>
</head>
<body>
<h3>student Edit page </h3>



<form method="post" action="">
    <table>
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
            </table>

    <a href="listt">View All</a>

</body>
</html>

<?php }
}

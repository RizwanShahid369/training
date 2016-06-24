<?php
/* Smarty version 3.1.29, created on 2016-06-20 05:41:53
  from "/var/www/html/mvc/views/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5767ba61a116b9_60024885',
  'file_dependency' => 
  array (
    'caf2251d577af74c57a17f798f38e1c5265d7d72' => 
    array (
      0 => '/var/www/html/mvc/views/home.tpl',
      1 => 1466415707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5767ba61a116b9_60024885 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/mvc/lib/smarty/plugins/modifier.date_format.php';
?>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <title>Home</title>
    <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8" />
</head>
<body>
<p>Hello, World <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['receiver']->value, 'UTF-8');?>
! It's <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%d %B");?>
 today!</p>

</body>
</html><?php }
}

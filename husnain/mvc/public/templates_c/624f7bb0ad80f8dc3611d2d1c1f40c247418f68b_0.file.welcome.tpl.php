<?php
/* Smarty version 3.1.28, created on 2016-06-30 03:32:27
  from "/var/www/html/training/training/husnain/mvc/app/views/user/welcome.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774cb0b0c24b9_14000395',
  'file_dependency' => 
  array (
    '624f7bb0ad80f8dc3611d2d1c1f40c247418f68b' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/user/welcome.tpl',
      1 => 1467271931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_5774cb0b0c24b9_14000395 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_5783314555774cb0b0b0a45_61374908',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_13810814015774cb0b0b61e7_89061973',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/user/welcome.tpl */
function block_5783314555774cb0b0b0a45_61374908($_smarty_tpl, $_blockParentStack) {
?>
DashBoard<?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/user/welcome.tpl */
function block_13810814015774cb0b0b61e7_89061973($_smarty_tpl, $_blockParentStack) {
?>

<h3>WELCOME <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</h3>

<ul>
    <li><a href="../teacher/listAll">Teacher Panel</a> </li>
    <li><a href="../student/listAll">Student Panel</a> </li>
</ul>



<?php
}
/* {/block 'body'} */
}

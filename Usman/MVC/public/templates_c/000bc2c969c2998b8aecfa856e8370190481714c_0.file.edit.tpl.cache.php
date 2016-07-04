<?php
/* Smarty version 3.1.28, created on 2016-06-28 02:40:29
  from "/var/www/html/m_v_c/app/views/student/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_57721bddabadf6_52525002',
  'file_dependency' => 
  array (
    '000bc2c969c2998b8aecfa856e8370190481714c' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/edit.tpl',
      1 => 1467096023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57721bddabadf6_52525002 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '95838101357721bddaa10b6_12118081';
?>
<html>


    
    
    
    

<form action="?url=student/editVal/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&name=<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
&fname=<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
&dob=<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
&city=<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
&school=<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
&address=<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
" method="post">

    Name: <input type="text" name="name" value= "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" > <br>
    Father Name: <input type="text" name="fname" value= "<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
" > <br>
    Date of Birth <input type="text" name="dob" value= "<?php echo $_smarty_tpl->tpl_vars['dob']->value;?>
" > <br>
    City: <input type="text" name="city" value= "<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
" > <br>
    School: <input type="text" name="school" value="<?php echo $_smarty_tpl->tpl_vars['school']->value;?>
"><br>
    Address: <input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['address']->value;?>
"><br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="submit" value="submit">
</form>

</html>

<?php }
}

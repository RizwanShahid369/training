<?php
/* Smarty version 3.1.28, created on 2016-06-28 09:05:35
  from "/var/www/html/m_v_c/app/views/student/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5772761f405dc0_31448738',
  'file_dependency' => 
  array (
    '000bc2c969c2998b8aecfa856e8370190481714c' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/student/edit.tpl',
      1 => 1467118582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5772761f405dc0_31448738 ($_smarty_tpl) {
?>
<html>


    
    
    
    

<form action="?url=student/editVal/" method="post">

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

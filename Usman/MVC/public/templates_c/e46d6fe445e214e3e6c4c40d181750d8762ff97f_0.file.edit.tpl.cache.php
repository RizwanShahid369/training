<?php
/* Smarty version 3.1.28, created on 2016-06-28 04:47:11
  from "/var/www/html/m_v_c/app/views/teacher/edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5772398f0fd2f5_83946885',
  'file_dependency' => 
  array (
    'e46d6fe445e214e3e6c4c40d181750d8762ff97f' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/teacher/edit.tpl',
      1 => 1467101796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5772398f0fd2f5_83946885 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12383967245772398f0ef989_51105947';
?>
<html>


    
    
    
    

<form action="?url=teacher/editVal" method="post">

    Name: <input type="text" name="name" value= "<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" > <br>
    Department: <input type="text" name="dept" value= "<?php echo $_smarty_tpl->tpl_vars['dept']->value;?>
" > <br>
    Rank <input type="text" name="rank" value= "<?php echo $_smarty_tpl->tpl_vars['rank']->value;?>
" > <br>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input type="submit" name="submit" value="submit">
</form>

</html>

<?php }
}

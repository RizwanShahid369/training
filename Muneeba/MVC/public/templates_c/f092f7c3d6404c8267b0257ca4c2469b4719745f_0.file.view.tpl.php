<?php
/* Smarty version 3.1.28, created on 2016-06-24 07:21:41
  from "/var/www/html/training/training/Muneeba/MVC/app/views/store/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_576d17c54d3d94_93238243',
  'file_dependency' => 
  array (
    'f092f7c3d6404c8267b0257ca4c2469b4719745f' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/MVC/app/views/store/view.tpl',
      1 => 1466754223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d17c54d3d94_93238243 ($_smarty_tpl) {
?>


<a href="store/insert">insert</a>
<form action="store/search" method="post">
    Search Full Name: <input type="text" name="Store[store_id]"><br>
    <input type="submit" name="search" value="search">
</form>

<table>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
    <?php
$__section_user_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_user']) ? $_smarty_tpl->tpl_vars['__section_user'] : false;
$__section_user_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_user_0_total = $__section_user_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_user'] = new Smarty_Variable(array());
if ($__section_user_0_total != 0) {
for ($__section_user_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] = 0; $__section_user_0_iteration <= $__section_user_0_total; $__section_user_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']++){
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['store_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['manager_staff_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['address_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['last_update'];?>
</td>

            <td><a href="store/edit/<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['store_id'];?>
" >Edit</a></td>
            <td><a onclick="return confirm(\'are you sure?\')"  href="store/removeOne/<?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['store_id'];?>
" >Delete</a></td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'i', 0);?>
    <?php
}
}
if ($__section_user_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_user'] = $__section_user_0_saved;
}
?>
</table>
<?php }
}

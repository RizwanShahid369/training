<?php
/* Smarty version 3.1.28, created on 2016-06-20 06:19:27
  from "/var/www/html/training/training/Muneeba/DBclass/Templates/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5767c32f9e8ac9_34395071',
  'file_dependency' => 
  array (
    'ed3af679b0001fbf4667b7283efef5981d4e99bb' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/DBclass/Templates/index.tpl',
      1 => 1466413146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5767c32f9e8ac9_34395071 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/training/training/Muneeba/DBclass/vendors/Smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_function_cycle')) require_once '/var/www/html/training/training/Muneeba/DBclass/vendors/Smarty/libs/plugins/function.cycle.php';
$_smarty_tpl->compiled->nocache_hash = '18988195805767c32f9902f2_29616130';
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('title'=>"Info"), 0, false);
?>


User Information:<p>

<h6>Hello <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
, welcome to Smarty!</h6>

<select name=user>
    <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['id']->value,'output'=>$_smarty_tpl->tpl_vars['names']->value,'selected'=>"5"),$_smarty_tpl);?>

</select>

<table>
    <?php
$_from = $_smarty_tpl->tpl_vars['names']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_name_0_saved_item = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$__foreach_name_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_name_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value) {
$__foreach_name_0_saved_local_item = $_smarty_tpl->tpl_vars['name'];
?>

            <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#eeeeee,#dddddd"),$_smarty_tpl);?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</td>
            </tr>

    <?php
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved_local_item;
}
}
if ($__foreach_name_0_saved_item) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_name_0_saved_item;
}
?>
</table>

<table>
    <?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_user_1_saved_item = isset($_smarty_tpl->tpl_vars['user']) ? $_smarty_tpl->tpl_vars['user'] : false;
$_smarty_tpl->tpl_vars['user'] = new Smarty_Variable();
$__foreach_user_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_user_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$__foreach_user_1_saved_local_item = $_smarty_tpl->tpl_vars['user'];
?>
            <tr bgcolor="<?php echo smarty_function_cycle(array('values'=>"#aaaaaa,#bbbbbb"),$_smarty_tpl);?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
</td>
            </tr>
    <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_1_saved_local_item;
}
}
if ($__foreach_user_1_saved_item) {
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_1_saved_item;
}
?>
</table>
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
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['full_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['dob'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['father_name'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['class'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['address'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['city'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['arr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_user']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_user']->value['index'] : null)]['school'];?>
</td>
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


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}

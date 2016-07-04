<?php
/* Smarty version 3.1.28, created on 2016-06-30 05:40:33
  from "/var/www/html/m_v_c/app/views/teacher/view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774e911890c34_35812133',
  'file_dependency' => 
  array (
    'e768d527a8996db7dc78122f9ccb3e41fccad142' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/teacher/view.tpl',
      1 => 1467279300,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../login/index.tpl' => 1,
  ),
),false)) {
function content_5774e911890c34_35812133 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_7968000915774e911864c11_32805041',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:../app/views/teacher/view.tpl */
function block_7968000915774e911864c11_32805041($_smarty_tpl, $_blockParentStack) {
?>

    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Department</th>
                    <th>Rank</th>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_obj_0_saved_item = isset($_smarty_tpl->tpl_vars['obj']) ? $_smarty_tpl->tpl_vars['obj'] : false;
$__foreach_obj_0_saved_key = isset($_smarty_tpl->tpl_vars['i']) ? $_smarty_tpl->tpl_vars['i'] : false;
$_smarty_tpl->tpl_vars['obj'] = new Smarty_Variable();
$__foreach_obj_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_obj_0_total) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable();
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['obj']->value) {
$__foreach_obj_0_saved_local_item = $_smarty_tpl->tpl_vars['obj'];
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['dept'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['obj']->value['rank'];?>
</td>
                        <td><a href = '?url=teacher/edit/<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
&name=<?php echo $_smarty_tpl->tpl_vars['obj']->value['name'];?>
&dept=<?php echo $_smarty_tpl->tpl_vars['obj']->value['dept'];?>
&rank=<?php echo $_smarty_tpl->tpl_vars['obj']->value['rank'];?>
'>Edit</a></td>
                        <td><a href = '?url=teacher/delVal/<?php echo $_smarty_tpl->tpl_vars['obj']->value['id'];?>
'>Delete</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['obj'] = $__foreach_obj_0_saved_local_item;
}
}
if ($__foreach_obj_0_saved_item) {
$_smarty_tpl->tpl_vars['obj'] = $__foreach_obj_0_saved_item;
}
if ($__foreach_obj_0_saved_key) {
$_smarty_tpl->tpl_vars['i'] = $__foreach_obj_0_saved_key;
}
?>
            </table>
        </div>
    </div>
    To add record  <a href = '?url=teacher/insert'>Insert</a>
<?php
}
/* {/block 'body'} */
}

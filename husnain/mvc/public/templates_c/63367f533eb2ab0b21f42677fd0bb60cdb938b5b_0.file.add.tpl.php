<?php
/* Smarty version 3.1.28, created on 2016-06-30 01:32:55
  from "/var/www/html/training/training/husnain/mvc/app/views/teacher/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774af07251928_11831897',
  'file_dependency' => 
  array (
    '63367f533eb2ab0b21f42677fd0bb60cdb938b5b' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/teacher/add.tpl',
      1 => 1467264773,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_5774af07251928_11831897 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_8553905205774af07249708_90106838',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_18542667955774af0724dac6_28932004',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/teacher/add.tpl */
function block_8553905205774af07249708_90106838($_smarty_tpl, $_blockParentStack) {
?>
 Teacher add page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/teacher/add.tpl */
function block_18542667955774af0724dac6_28932004($_smarty_tpl, $_blockParentStack) {
?>

    <h3>Teacher add page </h3>
    <div class="col-lg-6">
        <form role="form" method="post" action="">

            <div class="form-group">
                <label>Teacher Name</label>
                <input class="form-control" type="text" name="teacher[name]" placeholder="Teacher Name">
            </div>
            <div class="form-group">
                <label>Designation</label>
                <input class="form-control" type="text" name="teacher[designation]" placeholder="Designation">
            </div>
            <div>
                <input class="btn btn-default" type="submit" value="Submit">
            </div>

            <div>
                <a href="listAll">View All</a>

            </div>

        </form>
    </div>
<?php
}
/* {/block 'body'} */
}

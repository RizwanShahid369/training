<?php
/* Smarty version 3.1.28, created on 2016-06-30 01:26:27
  from "/var/www/html/training/training/husnain/mvc/app/views/student/add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774ad830d5e12_66981177',
  'file_dependency' => 
  array (
    'f6630bff6b016d0cb0fc06a73aa24f795005ff35' => 
    array (
      0 => '/var/www/html/training/training/husnain/mvc/app/views/student/add.tpl',
      1 => 1467264211,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layouts/layout.tpl' => 1,
  ),
),false)) {
function content_5774ad830d5e12_66981177 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_1555538295774ad830c59b6_23613543',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_7456128165774ad830cce45_46303176',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../layouts/layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:../app/views/student/add.tpl */
function block_1555538295774ad830c59b6_23613543($_smarty_tpl, $_blockParentStack) {
?>
 student add page <?php
}
/* {/block 'title'} */
/* {block 'body'}  file:../app/views/student/add.tpl */
function block_7456128165774ad830cce45_46303176($_smarty_tpl, $_blockParentStack) {
?>

    <h3>student add page </h3>
    <div class="col-lg-6">

        <form role="form" method="post" action="">

            <div class="form-group">
                <label>Fist Name</label>
                <input class="form-control" type="text" name="student[first_name]" placeholder="First Name">
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input class="form-control" type="text" name="student[last_name]" placeholder="Last Name">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="student[address]" placeholder="Address">
            </div>

            <div>
                <input type="submit" class="btn btn-default" value="Submit">
            </div>
        </form>

        <a href="listAll">View All</a>
    </div>
<?php
}
/* {/block 'body'} */
}

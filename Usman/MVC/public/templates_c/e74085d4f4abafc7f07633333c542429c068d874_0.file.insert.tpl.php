<?php
/* Smarty version 3.1.28, created on 2016-06-30 05:41:40
  from "/var/www/html/m_v_c/app/views/teacher/insert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5774e954937860_97320383',
  'file_dependency' => 
  array (
    'e74085d4f4abafc7f07633333c542429c068d874' => 
    array (
      0 => '/var/www/html/m_v_c/app/views/teacher/insert.tpl',
      1 => 1467279697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../login/index.tpl' => 1,
  ),
),false)) {
function content_5774e954937860_97320383 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<form action="?url=teacher/insertVal" method="post">
    Full Name: <input type="text" name="name"><br>
    Department: <input type="text" name="dept"><br>
    Rank: <input type="text" name="rank"><br>
    <input type="submit" name="submit" value="submit">
    <br>
    <br>
    go to <a href = '?url=teacher/select'>View All</a>
</form>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'body', array (
  0 => 'block_19110522495774e9549272f6_44910376',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php $_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:../login/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'}  file:../app/views/teacher/insert.tpl */
function block_19110522495774e9549272f6_44910376($_smarty_tpl, $_blockParentStack) {
?>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Basic Form Elements
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="?url=teacher/insertVal/" method="post">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input class="form-control" name="dept">
                                </div>

                                <div class="form-group">
                                    <label>Rank</label>
                                    <input class="form-control" name="rank" >
                                </div>

                                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                                <button type="submit" class="btn btn-default">Submit Button</button>
                                <button type="reset" class="btn btn-default">Reset Button</button>
                            </form>
                        </div>
                        <!-- /.col-lg-6 (nested) -->

                        <!-- /.col-lg-6 (nested) -->
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
<?php
}
/* {/block 'body'} */
}

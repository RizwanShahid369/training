<?php
/* Smarty version 3.1.28, created on 2016-06-29 16:19:31
  from "/var/www/html/training/training/Muneeba/template/app/views/generic/sidebar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5773aec3de3a03_11404169',
  'file_dependency' => 
  array (
    '9f52843189543899f2cb128fc1a121c11f711522' => 
    array (
      0 => '/var/www/html/training/training/Muneeba/template/app/views/generic/sidebar.tpl',
      1 => 1467199130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5773aec3de3a03_11404169 ($_smarty_tpl) {
?>



<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav in" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input class="form-control" placeholder="Search..." type="text">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a class="active" href="dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="tables"><i class="fa fa-table fa-fw"></i> Tables</a>
            </li>
            <li>
                <a href="forms"><i class="fa fa-edit fa-fw"></i> Forms</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Actor<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="actor/findAll">View all actors</a>
                    </li>
                    <li>
                        <a href="actor/insert">Add actor</a>
                    </li>
                    <li>
                        <a href="actor/find">Search an actor</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Customer<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="customer/findAll">View all customers</a>
                    </li>
                    <li>
                        <a href="customer/insert">Add customer</a>
                    </li>
                    <li>
                        <a href="customer/find">Search an customer</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Film<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="film/findAll">View all films</a>
                    </li>
                    <li>
                        <a href="film/insert">Add film</a>
                    </li>
                    <li>
                        <a href="film/find">Search an film</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-wrench fa-fw"></i>Store<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="store/findAll">View all store</a>
                    </li>
                    <li>
                        <a href="store/insert">Add store</a>
                    </li>
                    <li>
                        <a href="store/find">Search an store</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <!--   <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level collapse">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                            <!-- /.nav-third-level
                       </li>-
                   </ul>
                   <!-- /.nav-second-level
               </li>
               <li>
                   <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                   <ul class="nav nav-second-level collapse">
                       <li>
                           <a href="#">Blank Page</a>
                       </li>
                       <li>
                           <a href="../user/login">Login Page</a>
                       </li>
                   </ul>
                   <!-- /.nav-second-level
               </li> -->
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</nav>

<!-- /#wrapper -->



</body>

</html>
<?php }
}

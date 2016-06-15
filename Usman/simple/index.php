<?php
/**
 * Created by PhpStorm.
 * User: admin2
 * Date: 6/14/16
 * Time: 11:17 AM
 */
$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';

require_once 'include/conf.php';
require_once 'header.php';
require_once $page.'.php';
require_once 'footer.php';
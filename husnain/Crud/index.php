<?php

$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';

require_once 'include/conf.php';
require_once 'header.php';
require_once $page.'.php';
require_once 'footer.php';
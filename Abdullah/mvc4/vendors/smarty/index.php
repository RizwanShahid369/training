<?php

// put full path to Smarty.class.php
require('/..var/www/html/mvc4/vendors/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('/var/www/html/mvc4/vendors/smarty/templates');
$smarty->setCompileDir('/var/www/html/mvc4/vendors/smarty/templates_c');
$smarty->setCacheDir('/var/www/html/mvc4/vendors/smarty/cache');
$smarty->setConfigDir('/var/www/html/mvc4/vendors/smarty/configs');
$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');
?>
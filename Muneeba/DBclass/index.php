<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 2:16 AM
 */

error_reporting(E_ALL);
ini_set("display_errors", "On");

require('includes/setup.php');
require_once ('Controllers/StudentController.php');
require_once ('Criteria.php');

$smarty = new Smarty_MyApp();

$controller = new StudentController();
$criteria = new \DBclass\Criteria();
$criteria->setTableName('Students');
$controller->findAll($criteria);
$arr = $_REQUEST['arr'];
$smarty->assign('arr', $arr);
var_dump($arr);




$smarty->setCaching(true);

// see if the page is already cached
if(!$smarty->isCached('index.tpl')) {

    /*$smarty->setTemplateDir('Templates');
    $smarty->setCompileDir('/web/www.example.com/smarty/templates_c');
    $smarty->setCacheDir('/web/www.example.com/smarty/cache');
    $smarty->setConfigDir('/web/www.example.com/smarty/configs');*/

    $smarty->assign('id', array(1, 2, 3, 4, 5));
    $smarty->assign('names', array('bob', 'jim', 'joe', 'jerry', 'fred'));

// assign an associative array of data
    $smarty->assign('users', array(
        array('name' => 'bob', 'phone' => '555-3425'),
        array('name' => 'jim', 'phone' => '555-4364'),
        array('name' => 'joe', 'phone' => '555-3422'),
        array('name' => 'jerry', 'phone' => '555-4973'),
        array('name' => 'fred', 'phone' => '555-3235')
    ));
}

$smarty->assign('name', 'Ned');
$smarty->display('index.tpl');
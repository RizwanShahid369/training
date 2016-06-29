<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 2:16 AM
 */

error_reporting(E_ALL);
ini_set("display_errors", 'On');


require_once ('../core/App.php');
//equire_once ('../app/init.php');

ob_start();
//echo "<h1>Hello</h1>";

$app = new App;

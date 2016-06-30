<?php
error_reporting(E_ALL);
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set("display_errors", "On");
session_start();
require_once '../app/init.php';
require_once '../core/controllers/BaseController.php';


$app = new App();
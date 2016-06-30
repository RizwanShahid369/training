<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 5:48 AM
 */
require_once ('/var/www/html/training/training/husnain/mvc/vendor/Smarty/setup.php');

class ViewManager
{
    public $data;
    public $smarty;
    public function __construct()
    {
        $this->smarty = new Custom_Smarty();

    }
    public function addParams($key, $value)
    {
        $this->smarty->addParams($key , $value);
    }

    public function render($view, $controller,$data=[])
    {
        $this->addParams('data', $data);
        $this->smarty->render($view, $controller);

    }
}
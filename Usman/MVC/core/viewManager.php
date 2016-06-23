<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/20/16
 * Time: 6:48 AM
 */

include ('../vendors/Smarty/setup.php');

class ViewManager
{
    public $smarty;
    public function __construct()
    {
        $this->smarty = new setup();
    }
    public function addParams($key, $value)
    {
        $this->smarty->addParams($key , $value);
    }

    public function render($view, $controller)
    {
        $this->smarty->render($view, $controller);
    }

}
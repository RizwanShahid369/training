<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/20/16
 * Time: 6:48 AM
 */
//include ('vendors/Smarty/setup.php');
include '../vendors/setup.php';

class ViewManager
{
    public $smarty;
    
    public function __construct()
    {
        $this->smarty = new Smarty_MyApp();
        echo "Sma";
    }
    
    public function addParams($key, $value)
    {
        echo "Sma";
        $this->smarty->addParams($key , $value);
    }

    public function render($view, $controller)
    {
        $this->smarty->render($view, $controller);

    }

}
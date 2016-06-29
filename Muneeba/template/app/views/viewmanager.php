<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/21/16
 * Time: 12:53 AM
 */
//namespace MVC;

require_once ('/var/www/html/training/training/Muneeba/template/vendors/Smarty/setup.php');

class ViewManager
{
    public $smarty;
    public function __construct()
    {
        $this->smarty = new Smarty_MyApp();

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
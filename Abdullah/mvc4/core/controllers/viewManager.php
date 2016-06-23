<?php


require_once ('/var/www/html/mvc4/vendors/setup.php');

class ViewManager
{
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
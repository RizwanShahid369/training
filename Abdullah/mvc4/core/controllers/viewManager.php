<?php


require_once ('/var/www/html/mvc4/vendors/setup.php');

class ViewManager
{
    public function __construct()
    {
        $this->smarty = new setup();

    }
    public function addParams1($key, $value)
    {
        //echo "EEE ", $key, "  ", $value;

        $this->smarty->addParams($key, $value);
        echo "KK ";//print_r($value);
    }

    public function render1($view, $controller)
    {
        $this->smarty->render($view, $controller);
        echo "disp";
    }
}
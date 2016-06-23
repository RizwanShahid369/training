<?php


require_once ('../vendors/setup.php');

class ViewManager
{
    public function __construct()
    {
        $this->smarty = new smtemplate();

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
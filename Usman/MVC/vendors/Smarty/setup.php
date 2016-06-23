<?php

include ('libs/Smarty.class.php');

class setup extends Smarty
{
    function __construct()
    {
        parent::__construct();

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'My App');
    }

    function render($view, $controller)
    {
        $this->display('../app/views/' . $controller . '/' . $view . '.tpl');
    }

    function addParams($key, $value)
    {
        $this->assign($key, $value);
    }
}

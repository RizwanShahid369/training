<?php

include ('smarty/Smarty.class.php');

class setup extends Smarty
{
    function __construct()
    {
        parent::__construct();

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }

    function render($view, $controller)
    {
        echo "Rend  ", $controller, $view;
        $this->display('../app/views/' . $controller . '/' . $view . '.tpl');
    }

    function addParams($key, $value)
    {
        echo "ABd ",print_r($key);
        $this->assign($key, $value);
        echo "After";
    }
}
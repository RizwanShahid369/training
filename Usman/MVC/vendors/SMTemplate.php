<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/20/16
 * Time: 3:35 AM
 */

/**
 * @file
 * Wrapper for Smarty Template Engine
 */

include('smarty/Smarty.class.php');
include('smarty/smtemplate_config.php');

class SMTemplate{

    private $_smarty;

    function __construct()
    {
        $this->_smarty = new Smarty();

        global $smtemplate_config;
        $this->_smarty->template_dir = $smtemplate_config['template_dir'];
        $this->_smarty->compile_dir = $smtemplate_config['compile_dir'];
        $this->_smarty->cache_dir = $smtemplate_config['cache_dir'];
        $this->_smarty->configs_dir = $smtemplate_config['configs_dir'];
        echo "Construct me";
    }

    function render($view, $obj)
    {
        echo "Render me";
        $this->display('../app/views/' . $obj . '/' . $view . '.tpl');

    }

    function addParams($key, $value)
    {
        $this->assign($key, $value);
    }
}
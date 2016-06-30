<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 2:37 AM
 */

// load Smarty library
require('libs/Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Custom_Smarty extends Smarty
{

    function __construct()
    {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        /* $this->setTemplateDir('./Templates');
         $this->setCompileDir('/templates_c/');
         $this->setConfigDir('/configs/');
         $this->setCacheDir('/cache/');*/

        // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'My App');
    }

    function render($view, $controller)
    {
//        echo "in the Custom smarty ";
//        require_once ('../app/views/' . $controller . '/' . $view . '.tpl');
        if (file_exists('../app/views/' . $controller . '/' . $view . '.tpl')){
            $this->display('../app/views/' . $controller . '/' . $view . '.tpl');
        }
        else {
            trigger_error("File NOT EXISTS");
        }

    }

    function addParams($key, $value)
    {
        $this->assign($key, $value);

    }

}
<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 2:37 AM
 */

// load Smarty library
require('./vendors/Smarty/libs/Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require('guestbook/guestbook.lib.php');

class Smarty_MyApp extends Smarty {

    function __construct()
    {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();

        $this->setTemplateDir('./Templates');
        /*$this->setCompileDir('/web/www.example.com/guestbook/templates_c/');
        $this->setConfigDir('/web/www.example.com/guestbook/configs/');
        $this->setCacheDir('/web/www.example.com/guestbook/cache/');*/

        $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'My App');
    }

}

<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/20/16
 * Time: 6:48 AM
 */

include ('../vendors/Smarty/setup.php');

class ViewManager
{
    public $smarty;
    public $data=array();
    public function __construct()
    {
        $this->smarty = new setup();
    }
    public function addParams($key, $value)
    {
        $this->smarty->addParams($key , $value);
    }

    public function render($model, $view, $controller)
    {
        include '../app/views/$model/$view.tpl';

        if(!empty($this->data)){
            foreach ($this->data as $key=>$one){
                $this->smarty->addParams($key,$one);
            }
        }
        $this->smarty->render($view, $controller);
    }
}
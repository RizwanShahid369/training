<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/20/16
 * Time: 7:53 AM
 */

include "Request.php";

class app
{
    protected $controller;
    protected $action;
    protected $param;

    function __construct()
    {
        $obj = new Request();
        $this->controller = $obj->controller;
        $this->action = $obj->action;
        $this->param = $obj->params;

        $this->callController();
    }

    public function callController()
    {
        $obj = new baseController();
        $obj->doAction($this->action, $this->controller, $this->param);
    }
}
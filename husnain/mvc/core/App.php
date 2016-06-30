<?php

require_once 'Request.php';

class App
{
        public $request;
        public function __construct()
        {
            $this->request = new Request();
            $controller = $this->request->getController();
            $method = $this->request->getMethod();
            $controller->doAction($controller, $method);
        }



}
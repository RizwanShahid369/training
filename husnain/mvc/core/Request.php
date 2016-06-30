<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/28/16
 * Time: 3:53 AM
 */
class Request
{
    protected $controller = 'UserController';
    protected $method = 'index';
    protected $param = [];

    public function __construct()
    {
        $url = $this->parseUrl();
//        print_r($url); die("end App");
        $contoller = ucfirst($url[0]);
        if (file_exists('../app/controllers/'. $contoller .'Controller'.'.php')) {
            $this->controller = $url[0].'Controller';
            unset($url[0]);
        }
        require_once '../app/controllers/'.ucfirst($this->controller).'.php';
//        echo $this->controller;
        $this->controller = new $this->controller();
        if (isset($url[1])) {
                $this->method = $url[1];
                unset($url[1]);

        }
        $this->param = $url ? array_values($url) : [];
//        call_user_func_array([$this->controller, $this->method], $this->param);
    }

    public function parseUrl()
    {
        if(isset($_GET['url'])) {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url,FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
//            print_r($url);
        }
    }

    public function getController()
    {
        return $this->controller;
    }
    public function getMethod()
    {
         return $this->method;
    }


}
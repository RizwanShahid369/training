<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/24/16
 * Time: 7:36 AM
 */
class Request
{
    protected $object;
    protected $controller = 'actor';
    protected $method = 'findAll';

    public function __construct()
    {
        session_start();
        $url = $this->parseURL();
        //echo $_SESSION['loggedin'];
        //
        //unset($_SESSION);
        //unset($_COOKIE);
        //session_destroy();
        //var_dump($_SESSION);
        if ($url[0] == 'logout') {
            unset($_SESSION);
            session_destroy();

        } else {
            if (file_exists('../app/controllers/' . $url[0] . 'Controller.php')) {
                $this->controller = $url[0];
                unset($url[0]);
            }
            require_once('../app/controllers/' . $this->controller . 'Controller.php');
            $this->controller = $this->controller . 'Controller';
            $this->controller = new $this->controller();

            if (isset($url[1])) {
                if (method_exists($this->controller, $url[1])) {
                    $this->method = $url[1];
                    unset($url[1]);
                }
            }
            $this->object = ['params' => $url ? array_values($url) : []];
            $this->object = ['controller' => $this->controller];
            $this->object = ['method' => $this->method];
        }
        return $this->object;
    }
    public function parseURL()
    {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
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
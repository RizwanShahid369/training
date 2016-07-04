<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/30/16
 * Time: 6:26 AM
 */
class Request
{
    public $controller;
    public $action;
    public $url;
    public $params;

    public function __construct()
    {
        $this->parseUrl();
        $this->getController();
        $this->getAction();
        $this->getParams();
    }

    public function getController()
    {
        if (file_exists('../app/controllers/' . $this->url[0] . 'Controller.php')) {
            $this->controller = $this->url[0].'Controller';
            unset($this->url[0]);
        }

        include '../app/controllers/'.$this->controller.'.php';

        $this->controller = new $this->controller;
    }

    public function getAction()
    {
        if (isset($this->url[1])) {
            if (method_exists($this->controller, $this->url[1])) {
                $this->action = $this->url[1];
                unset($this->url[1]);
            }
        }
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $this->url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        else {
            echo "URL Empty";
        }
    }

    public function getParams()
    {
        $this->params  = $this->url ? array_values($this->url) : [];
    }
}
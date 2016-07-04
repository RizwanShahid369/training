<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/20/16
 * Time: 7:53 AM
 */

class app
{
    protected $obj='studentController';
    protected $method;
    protected $param;

    function __construct()
    {
        $url = $this->parseUrl();

        if (file_exists('../app/controllers/' . $url[0] . 'Controller.php')) {
            $this->obj = $url[0].'Controller';
            unset($url[0]);
        }

        include '../app/controllers/'.$this->obj.'.php';
        
        $this->obj = new $this->obj;

        if (isset($url[1])) {
            if (method_exists($this->obj, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->param  = $url ? array_values($url) : [];
        call_user_func_array([$this->obj, $this->method], $this->param);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        else {
            echo "URL Empty";
        }
    }
}
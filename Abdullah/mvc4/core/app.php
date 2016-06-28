<?php


class app
{
    protected $obj='studentController';
    protected $method;
    protected $param;

    function __construct()
    {
       // echo "abd";
        $url = $this->parseUrl();

        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->obj = $url[0];
            
            unset($url[0]);
            echo "Yes";
        }

        include '../app/controllers/'.$this->obj.'.php';

        $this->obj = new $this->obj;

        if (isset($url[1])) {
            if (method_exists($this->obj, $url[1])) {
                //var_dump( $url['selectall']);
                $this->method = $url[1];
                //echo "sdads";
                unset($url[1]);
            }

        }

        $this->param  = $url ? array_values($url) : [];
        call_user_func_array([$this->obj, $this->method], $this->param);
       // var_dump($this->method);
}

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
           // echo "dsa";
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));

        }
        else {
            echo "URL Empty";
        }
    }
}
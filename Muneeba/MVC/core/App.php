<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 2:16 AM
 */

require_once ('../app/views/viewmanager.php');
require_once ('Request.php');

class App
{
    public $request;
    public function __construct()
    {
        $this->request = new Request();

        //var_dump($this->request);

        $controller = $this->request->getController();
        $method = $this->request->getMethod();

        $controller->doAction($method);

        /*session_start();
        $url = $this->parseURL();
        //echo $_SESSION['loggedin'];
        //

        if ($url[0] == 'logout') {
            unset($_SESSION);
        }
        if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
            echo "Welcome to the member's area" . "!";

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
            $this->params = $url ? array_values($url) : [];

            //var_dump($this->method);
            call_user_func_array([$this->controller, $this->method], $this->params);

        } else {
            $viewManager = new ViewManager();
            if (!(isset($_COOKIE['email']) && isset($_COOKIE['password']))) {
                //echo "Cookie named User is not set!";
            } else {
                $viewManager->addParams('email', $_COOKIE['email']);
                $viewManager->addParams('password', $_COOKIE['password']);
                //$viewManager->render('login', '');
            }

            $this->method = $url[0];
            require_once('../core/controllers/Controller.php');
                call_user_func_array(Controller::login(), $this->params);
                $viewManager->render('login', '');
            
        }
    }

    public function parseURL()
    {
        if(isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }*/
    }
}
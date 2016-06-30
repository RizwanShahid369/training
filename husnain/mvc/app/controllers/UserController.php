<?php
//require_once '../core/controllers/BaseController.php';

class UserController extends BaseController
{

    public function __construct()
    {
        $this->controller_name = 'user';
        $this->tablename = 'users';
        $this->setModel('user');
        parent::__construct();
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            if (isset($_SESSION['name'])) {
                $this->view_manager->render('welcome', $this->controller_name, $_SESSION['name']);
            } elseif (isset($_COOKIE['name'])) {
                $_SESSION['name'] = $_COOKIE['name'];
                $this->view_manager->render('welcome', $this->controller_name, $_SESSION['name']);
            } else {
                $this->view_manager->render('login', $this->controller_name);
            }

        } else {
            echo "REQUEST method is POST";
        }
    }
    
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            if (isset($_SESSION['name'])) {
                $this->view_manager->render('welcome', $this->controller_name);
                return;
            }
        }
        $this->model->user_name = isset($_POST['username'])? $_POST['username'] : '';
        $this->model->password = isset($_POST['password'])?$_POST['password'] : '';
        $checkbox = isset($_POST['remember']) ? $_POST['remember'] : '';
        $res = $this->model->select(['user_name' => $this->model->getUserName(),
            'password' => $this->model->getPassword()]);
        if ($res == true) {
            $_SESSION['name'] = $this->model->getUserName();
            //print_r($_SESSION);
            if (isset($checkbox)) {
                setcookie('name', $this->model->getUserName(), time() + (86400 * 30), "/");
            }
            $this->view_manager->addParams('name', $_SESSION['name']);
            $this->view_manager->render('welcome', $this->controller_name);
        } else {
            echo "User Name OR Password is Invalid! <br>Please try Again";
        }

    }

    public function logout()
    {
        session_unset();
        session_destroy();

        if (isset($_COOKIE['name'])) {
            unset($_COOKIE['name']);
            setcookie('name', null, time() - (86400 * 30), '/');
        }

        $this->view_manager->render('login', $this->controller_name);
    }


}
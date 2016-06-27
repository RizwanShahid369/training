<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:49 AM
 */
require_once '../core/controllers/BaseController.php';

/**
 * Class StudentController
 *
 */

class StudentController extends BaseController
{

    private $stdModel;
    private $username;
    private $password;


    public function __construct()
    {
        $this->setModel('student');
        $this->setControllerName('student');
        $this->stdModel = ModelFactory::getModel('student');
        parent::__construct();
    }

    public function index()
    {

        session_start();
        if($_SERVER['REQUEST_METHOD'] == 'GET') {

                if (isset($_COOKIE['hello'])) {
                    session_start();
                    $_SESSION['name'] = 'hello';
                    $this->view_manager->render('welcome', $this->controller_name);
                } else {
                    if ($_SESSION['name']) {
                        $this->view_manager->render('welcome', $this->controller_name);
                    } else {
                        $this->view_manager->render('login',$this->controller_name);
                    }
                }


        } else {
            echo 'get POSTED Values and do';
            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            $checkbox = $_POST['remember'];
            $this->stdModel->setUsername($this->username);
            $this->stdModel->setPassword($this->password);

            $res = $this->stdModel->select('users',['user_name' =>  $this->stdModel->getUsername(),
            'password' =>  $this->stdModel->getPassword()]);
            if ($res == true) {
//                session_start();

                $_SESSION['name']= $this->username;
                //print_r($_SESSION);
                if (isset($checkbox)) {
                    setcookie($this->username, $this->password, time() + (86400 * 30), "/");
                }
                $this->view_manager->render('welcome', $this->controller_name);
            } else {
                echo "User Name OR Password is Invalid! <br>Please try Again";
            }

            

            //$q = "SELECT * FROM users WHERE user_name = '$username' AND password = '$password'";
            //$this->model->select();

        }
        
    }
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        if (isset($_COOKIE['hello'])) {
            unset($_COOKIE['hello']);
            setcookie('hello', null, time() - (86400 * 30), '/');
            echo "Cookie deleted! ";
        }

            $this->view_manager->render('login',$this->controller_name);
    }



}
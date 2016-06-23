<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:49 AM
 */
//require_once '../models/Student.php';
require_once '../core/controllers/BaseController.php';
//include_once '../../core/controllers/BaseController.php';
$filename = '../core/controllers/BaseController.php';


/*try {
    if (!file_exists($filename)) {
        throw new Exception(" file was not found");
    }
} catch(Exception $e) {
    echo $e->getMessage();
}
die("end!");*/
/*if (file_exists($filename)) {
    echo 'congrats it exists!';
} else {
    throw new Exception();
}*/

class StudentController extends BaseController
{

    private $stdModel;

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
            if ($_SESSION['name']) {
                $this->view_manager->render('welcome', $this->controller_name);
            } else {
                $this->view_manager->render('login',$this->controller_name);
            }

        } else {
            echo 'get POSTED Values and do';
            $username = $_POST['username'];
            $password = $_POST['password'];
            $checkbox = $_POST['remember'];
            $this->stdModel->setUsername($username);
            $this->stdModel->setPassword($password);
            $res = $this->stdModel->select('users',['user_name' =>  $this->stdModel->getUsername(),
            'password' =>  $this->stdModel->getPassword()]);
            if ($res == true) {
//                session_start();

                $_SESSION['name']= $username;
                //print_r($_SESSION);
                if (isset($checkbox)) {
                    setcookie('name', 'hello', time() + (86400 * 30), "/");
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
        if( isset($_COOKIE['name'])) {
            setcookie("name", "hello", time() - 86400 * 30);
        }

            $this->view_manager->render('login',$this->controller_name);
    }



}
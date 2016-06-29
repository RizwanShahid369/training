<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/28/16
 * Time: 4:09 PM
 */

require_once ('../core/controllers/Controller.php');


class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->setModel('User');
        $this->controllerName = 'user';

        $array = [
            'login',
            'newUser',
            'signUp'
        ];
        $this->routing->addUnAuthenticated($array);
    }

    public function login()
    {
        require_once ('../core/models/Model.php');

        //var_dump($_POST['User']);
        if (isset($_POST['User'])) {
            //var_dump($_POST['User']);
            $user = ($_POST['User']);
            $email = $user['email'];
            $password = $user['password'];
            if (isset($_POST['save']) && $_POST['save'] == 'value1') {

                //setcookie("email", $email, time() + (86400 * 30), "/");
                //setcookie('password', $password, time() + (86400 * 30), "/");

                ob_end_flush();

            }
            $result = $this->model->logIn($email, $password);
            //var_dump($result);
            if (($result) < 0) {
                echo "Email or Password is incorrect";
                $this->viewManager->render('login', 'userController');
                //return false;
            } else {
                //echo "HERE I AM";
                //var_dump($result);
                $_SESSION['loggedin'] = $result;

                //$this->viewManager->render('dashboard', 'Controller');
                $url = "http://localhost/training/training/Muneeba/template/public/dashboard";
                header("Location: " . $url);

                //$this->dashboard();
                //echo $_SESSION['loggedin'];
            }
        } else {
            if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
                $this->viewManager->addParams('email', $_COOKIE['email']);
                $this->viewManager->addParams('password', $_COOKIE['password']);
            } else {
                $this->viewManager->addParams('email', '');
                $this->viewManager->addParams('password', '');
                $this->viewManager->render('login', 'userController');
            }
            //echo "Logging In";
        }


    }

    public function newUser()
    {
        //echo "here";
        $this->viewManager->render('signup', $this->controllerName);
    }

    public function signUp()
    {

        if($this->controllerName == 'user') {
            if (isset($_POST['User'])) {
                $user = ($_POST['User']);
                $email = $user['email'];

                $password = md5($user['password']);

                $result = Model::logIn($email, $password);

                if (($result) > 0) {
                    echo "Email already exists.";
                } else {
                    $id = $this->model->signUp($email, $password);
                    $viewManager = new ViewManager();

                    $viewManager->addParams('user_id', $id);
                    $viewManager->render('view', 'actor');

                }
            }
        }



    }
}
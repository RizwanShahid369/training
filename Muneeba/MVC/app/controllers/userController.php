<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/24/16
 * Time: 8:21 AM
 */

require_once ('../core/controllers/Controller.php');


class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = $this->setModel('User');
        $this->controllerName = 'user';
    }

    public function login()
    {
        //echo "Logging In";

        require_once ('../core/models/Model.php');
        if (isset($_POST['User'])) {

            $user = ($_POST['User']);
            $email = $user['email'];
            $password = $user['password'];
            if (isset($_POST['save']) && $_POST['save'] == 'value1') {

                //setcookie("email", $email, time() + (86400 * 30), "/");
                //setcookie('password', $password, time() + (86400 * 30), "/");

                ob_end_flush();

            }
            $result = Model::logIn($email, $password);
            var_dump($result);
            if (($result) < 0) {
                echo "Email or Password is incorrect";
                return false;
            } else {
                //echo "HERE I AM";
                //var_dump($result);
                $_SESSION['loggedin'] = $result;
                echo $_SESSION['loggedin'];
            }


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

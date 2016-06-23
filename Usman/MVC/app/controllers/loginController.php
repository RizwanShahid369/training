<?php
include '../core/controllers/baseController.php';

class loginController extends baseController
{
    public $model;
    function __construct()
    {
        parent::__construct();
        $table = "login";
    }

    public function check()
    {
        $this->displaySmartyLogin();
    }

    public function chkLogin()
    {
        $u = $_POST['username'];
        $p = $_POST['pass'];
        $c = $_POST['cook'];

        $user = $this->model('login');

        if (isset($u) && isset($p)) {
            $chk = $user->logincheck($u, $p);

            if($chk==true) {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['pass'] = $p;
                $_SESSION['username'] = $u;

                if(isset($_POST['cook'])) {
                    setcookie("name", $u, time()+36, "/","", 0);
                }
                $this->displaysmartNext();
                $this->displaysmartLogout();
            } else {
                 echo "Please Loginnnn";
            }
        }
    }
    
    public function logout()
    {
        if(isset($_POST['lo']))
        {
            $user = $this->model('login');
            $res = $user->logsOut();
        }
    }
}
<?php
include '../core/controllers/baseController.php';
include '../core/models/modelFactory.php';
/*
 * This file handles login functionality as controller extends Base Controller
 */
class loginController extends baseController
{
    /*
     * @construct constructs its base class
     */
    function __construct()
    {
        parent::__construct();

        $this->setController('login');
        $this->setModel('login');
        $this->obj = modelFactory::generateModel('login');
    }

    /*
     * Displays the login page through Smarty
     * This function is used to display for first time only
     */
    public function check()
    {
        if(! isset($_COOKIE["name"])){
            $this->displaySmartyLogin();
        }
        else {
            $this->displaysmartNext();
            $this->displaysmartLogout();
        }
    }

    /*
     * @var $u variable contains username entered by user
     * @var $p variable contains password entered by user
     * @var $c variable contains value if user checks checkbox
     * @var $chk bool variable contains result whether user exists or not
     * This function takes user input send it to database and check if user exists,
     * direct it to next pages based on the result of function logincheck.
     * It initalizes session variables and save cooky if user checks checkbox
     *
     */

    public function chkLogin()
    {
        $u = $_POST['username'];
        $p = $_POST['pass'];
        $c = $_POST['cook'];

        if (isset($u) && isset($p)) {
            $chk = $this->obj->logincheck($u, $p);

            if($chk==true) {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['pass'] = $p;
                $_SESSION['username'] = $u;

                if(isset($_POST['cook'])) {
                    setcookie("name", $u, time()+36, "/","", 0);
                }
                $this->displaysmartNext();
                //$this->displaysmartLogout();
            } else {
                 echo "Please Loginnnn";
                 $this->check();
            }
        }
    }

    /*
     * @var $_POST['lo'] User input to logOut
     * This functions logs Out session and clears cookies
     */
    public function logout()
    {
        if(isset($_POST['lo']))
        {
            $res = $this->obj->logsOut();
        }
    }
}
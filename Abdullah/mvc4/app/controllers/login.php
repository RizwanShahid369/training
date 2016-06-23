<?php
/**
 * Created by PhpStorm.
 * User: abdullah.ilyas
 * Date: 6/23/16
 * Time: 5:20 AM
 */
require_once('/var/www/html/mvc4/core/controllers/baseController.php');

class login extends baseController
{
    public function __construct()
    {
        parent::__construct();
//        echo "abab";

    }



    public function login()
    {
        //$user = $this->model($p);
        //$abd=$user->displaySmarty1();
        $this->displaySmarty1();
    }




    
    public function check()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "NewDatabase";


        $a = $_POST['user'];
        $b = $_POST['pass'];
        $c=$_POST['vehicle'];
// Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "select username from login where username='$a' and password='$b'";
        $result = mysqli_query($conn, $sql);
//echo "YEs";
        if (mysqli_num_rows($result) == 1) {
            //echo "User xexists";
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $a;
            if(isset($c))
            {
                setcookie("name", $_SESSION['username'], time()+3600, "/","", 0);
               echo $_COOKIE["name"];


               // $_SESSION['user_id']=$_COOKIE['user_id'];
            }

         else{

             unset($_COOKIE["name"]);
             echo "cookie is not set",($_COOKIE["name"]);

         }


           //echo $_SESSION['username'];
            $this->welcome();
            while ($row = mysqli_fetch_assoc($result)) {
                echo "username: " . $row["username"] . " password: " . $row["password"] . "<br>";
            }
        } else {
            echo "Invalid User";
        }

        mysqli_close($conn);




    }

    public function logout()
    {
        //echo "P";
        $this->logsout();


    }








}

        ?>
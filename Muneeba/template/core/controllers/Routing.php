<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/27/16
 * Time: 12:11 PM
 */

class Routing
{
    protected $authenticated;
    protected $unAuthenticated;

    public function __construct()
    {
        //$this->authenticated = [];
        //$this->unAuthenticated = [];
    }

    public function addAuthenticated($method)
    {

        foreach ($method as $value) {
            $this->authenticated[] = $value;
        }

    }

    public function addUnAuthenticated($method)
    {

        foreach ($method as $value) {
            $this->unAuthenticated[] = $value;
        }
    }

    public function checkMethod($method)
    {
            if (in_array($method, $this->authenticated)) {
                if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
                    return 1; //execute the method if logged in
                } else {
                    return 0; //go to login page
                }
            } elseif (in_array($method, $this->unAuthenticated)) {
                if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
                    //echo "here";
                    return 2; //don't let it be accessed by authenticated user
                } else {
                    return 1; //execute the method
                }
            } else {
                return -1; //go to error page
            }
    }
}
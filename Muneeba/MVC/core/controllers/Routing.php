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

    /*public function __construct()
    {
    }*/

    public function addAuthenticated($method)
    {
        if(count($method) > 1)
        {
            foreach ($method as $value) {
                $this->authenticated[] = $value;
            }
        } else {
            array_push($this->authenticated, $method);
        }

    }

    public function addUnAuthenticated($method)
    {
        if(count($method) > 1)
        {
            foreach ($method as $value) {
                $this->unAuthenticated[] = $value;
            }
        } else {
            array_push($this->unAuthenticated, $method);
        }
    }

    public function checkMethod($method)
    {
        if ((isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)) {
            if (in_array($method, $this->authenticated)) {
                return 1;
            } elseif (in_array($method, $this->unAuthenticated)) {
                return 0;
            } else {
                return -1;
            }
        }
    }

}
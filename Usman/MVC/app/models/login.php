<?php

include '../core/models/basemodel.php';

class login extends basemodel
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function logincheck($id, $pas)
    {
        $chk = $this->login("login", "*", $id, $pas);
        return $chk;
    }
    
    public function logsOut()
    {
        $this->logsOutSession();
    }
}
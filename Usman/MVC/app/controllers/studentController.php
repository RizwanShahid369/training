<?php

include '../core/controllers/baseController.php';

class studentController extends baseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function select($para1)
    {
        $user = $this->model($para1);
        $res = $user->selectFunction();
        $this->displaySmarty($res);
    }

    /**
     * @return mixed
     */
    public function insert()
    {
        $this->displaySmartyInsert();
    }

    public function insertVal()
    {
        $user = $this->model('student');

        $res = $user->insertFunction($_POST['name'],$_POST['dob'],$_POST['fname'],$_POST['class'],$_POST['address'],$_POST['city'],
            $_POST['school']);
    }

    public function delete()
    {
        $this->displaySmartyDelete();
    }

    public function delVal()
    {
        $user = $this->model('student');
        $res = $user->deleteFunction($_POST['id']);
    }

    public function edit()
    {
        $this->displaySmartyEdit();
    }

    public function editVal()
    {
        $user = $this->model('student');
        $res = $user->editFunction($_POST['id'], $_POST['class']);
    }
}
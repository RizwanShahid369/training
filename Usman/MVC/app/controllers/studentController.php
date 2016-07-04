<?php

include '../core/controllers/baseController.php';
include '../core/models/modelFactory.php';

class studentController extends baseController
{
    public $obj;
    public function __construct()
    {
        parent::__construct();

        $fac = new modelFactory();
        $this->setController('student');
        $this->setModel('student');
        $this->obj = $fac->generateModel('student');
        $this->setObject($this->obj);
    }

   /* public function select()
    {
        $res = $this->obj->selectFunction();
        $this->displaySmarty($res);
    }*/

    /*public function insert()
    {
        $this->displaySmartyInsert();
    }*/

  /*  public function insertVal()
    {
        $this->obj->insertFunction($_REQUEST);$_POST['name'],$_POST['dob'],$_POST['fname'],$_POST['class'],$_POST['address'],$_POST['city'],
            $_POST['school']);
        $this->select();
    }*/

   /* public function delVal($data)
    {
        $res = $this->obj->deleteFunction($data);
        $this->select();
    }*/

    /*public function edit($data)
    {
        $id = $data;
        $data = $this->object->buildValue($id, $_REQUEST);
        $this->displaySmartyEdit($data);
    }*/

   /* public function editVal()
    {
        $this->obj->editFunction($_POST['id'],$_POST['name'],$_POST['fname'], $_POST['dob'], $_POST['address'], $_POST['school'], $_POST['city']);
        $this->select();
    }*/
}
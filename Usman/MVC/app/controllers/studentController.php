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
    }

    public function select()
    {
        $res = $this->obj->selectFunction();
        $this->displaySmarty($res);
    }

    public function insert()
    {
        $this->displaySmartyInsert();
    }

    public function insertVal()
    {
        $this->obj->insertFunction($_POST['name'],$_POST['dob'],$_POST['fname'],$_POST['class'],$_POST['address'],$_POST['city'],
            $_POST['school']);
        $this->insert();
    }

    public function delVal($data)
    {
        $res = $this->obj->deleteFunction($data);
    }

    public function edit($data)
    {
        $id = $data;
        $school = $_GET['school'];
        $name = $_GET['name'];
        $fname= $_GET['fname'];
        $dob= $_GET['dob'];
        $address= $_GET['address'];
        $city = $_GET['city'];

        $data = [
            'id' => $data,
            'name' => $name,
            'fname' => $fname,
            'dob' => $dob,
            'city' => $city,
            'address' => $address,
          'school'=> $school
        ];
        $this->displaySmartyEdit($data);
    }

    public function editVal()
    {
        $this->obj->editFunction($_POST['id'],$_POST['name'],$_POST['fname'], $_POST['dob'], $_POST['address'], $_POST['school'], $_POST['city']);
        $this->select();
    }
}
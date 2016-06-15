<?php

include ('conf.php');
include ('manage.php');

class methods{
    
    function __construct()
    {
        $this->obj = new conf();
    }

    public function add()
    {
        $fname = $_POST["fathername"];
        $name = $_POST["fullname"];
        $dob = $_POST["date"];
        $clas = $_POST["class"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $school = $_POST["school"];

        $this->obj->addRecord($fname, $name, $dob, $clas, $address, $city, $school);
    }

    public function edit()
    {
        $id = $_POST["id"];
        $name =$_POST["name"];
        $fname =$_POST["fname"];
        $dob =$_POST["dob"];
        $class = $_POST["class"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $school = $_POST["school"];

        $this->obj->editRecord($id, $name, $fname, $dob, $class, $address, $city, $school);
    }

    public function delete()
    {
        $id = $_POST["id"];
        $this->obj->deleteRecord($id);
    }

    public function viewAll()
    {
        $this->obj->viewRecord();
    }

    public function search()
    {
        $id = $_POST["id"];
        $this->obj->searchRecord($id);
    }
}
$objM = new methods();

if ($_POST['add']=="add") {
    $objM->add();
} else if ($_POST['del']=="del") {
    $objM->delete();
} else if ($_POST['ed']=="ed") {
    $objM->edit();
} else if ($_POST['view']=="view") {
    $objM->viewAll();

} else if ($_POST['sr']=="sr") {
$objM->search();
}

?>
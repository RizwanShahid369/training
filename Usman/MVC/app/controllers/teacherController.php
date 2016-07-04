<?php

include '../core/controllers/baseController.php';
include '../core/models/modelFactory.php';

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/28/16
 * Time: 12:54 AM
 */
class teacherController extends baseController
{
    public $obj;
    public function __construct()
    {
        parent::__construct();

        $fac = new modelFactory();
        $this->setController('teacher');
        $this->setModel('teacher');
        $this->obj = $fac->generateModel('teacher');
        //$this->showIndex();
    }

    public function showIndex()
    {
        $this->displaysmartNext();
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
        $this->obj->insertFunction($_POST['name'],$_POST['dept'],$_POST['rank']);
        $this->insert();
    }

    public function delVal($data)
    {
        $this->obj->deleteFunction($data);
        $this->select();
    }

    public function edit($data)
    {
        if (! empty($data)) {

            $id = $data;

            $name = $_GET['name'];
            $dept = $_GET['dept'];
            $rank = $_GET['rank'];

            $data = [
                'id' => $data,
                'name' => $name,
                'dept' => $dept,
                'rank' => $rank
            ];
            $this->displaySmartyEdit($data);
        }
    }

    public function editVal()
    {
        $this->obj->editFunction($_POST['id'],$_POST['name'],$_POST['dept'], $_POST['rank']);
        $this->select();
    }
}
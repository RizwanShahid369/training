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
        $this->setObject($this->obj);
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/27/16
 * Time: 8:02 AM
 */
//require_once '../core/controllers/BaseController.php';

class TeacherController extends BaseController
{
    public function __construct()
    {
        $this->setModel('teacher');
        $this->setControllerName('teacher');
        $this->tablename = 'teacher';
        $this->model_name = 'teacher';
        parent::__construct();
    }

    public function index()
    {
        echo "in the teacher index method<br>";
    }
    
}
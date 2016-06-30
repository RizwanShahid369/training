<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:49 AM
 */
//require_once '../core/controllers/BaseController.php';

/**
 * Class StudentController
 *
 */
class StudentController extends BaseController
{


    public function __construct()
    {
        $this->setModel('student');
        $this->setControllerName('student');
        $this->tablename = 'student';
        $this->model_name = 'student';
        parent::__construct();
    }

    public function index()
    {
        echo "Student Index Method<br>";
    }
 


}
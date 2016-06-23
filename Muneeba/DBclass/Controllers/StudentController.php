<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:46 AM
 */

require_once ('Controller.php');
require_once ('./Models/StudentModel.php');

class StudentController extends Controller
{

    public function __construct()
    {
        $this->model = new StudentModel();
    }
}
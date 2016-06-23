<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:32 AM
 */

require_once ('Model.php');

class StudentModel extends Model
{
    public $id;
    public $name;
    public $dob;
    public $father_name;
    public $class;
    public $address;
    public $city;
    public $school;
    
    
    public function __construct()
    {
        parent::__construct();
        $this->modelName = 'StudentModel';
        $this->columnNames = [
            'id',
            'name',
            'dob',
            'father_name',
            'class',
            'address',
            'city',
            'school'
        ];

    }
}
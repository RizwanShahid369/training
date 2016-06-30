<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:51 AM
 */
//require_once '../core/models/database/BaseModel.php';
//require_once '../core/models/database/drivers/Database.php';
//require_once '../core/models/database/drivers/Criteria.php';

class Student extends BaseModel
{
    private $id;
    private $first_name;
    private $last_name;
    private $address;
    
    public function __construct()
    {
        $this->tablename = 'student';
        $this->fields = [
            'id',
            'first_name',
            'last_name',
            'address'
        ];
        parent::__construct();
    }










}
<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/27/16
 * Time: 8:07 AM
 */
//require_once '../core/models/database/BaseModel.php';
//require_once '../core/models/database/drivers/Database.php';
//require_once '../core/models/database/drivers/Criteria.php';

class Teacher extends BaseModel
{
    private $id;
    private $name;
    private $designation;

    public function __construct()
    {
        $this->tablename = 'teacher';
        $this->fields = [
            'id',
            'name',
            'designation'
        ];
        parent::__construct();
    }




}
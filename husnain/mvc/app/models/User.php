<?php

//require_once '../core/models/database/BaseModel.php';

class user extends BaseModel
{
    public $user_name;
    public $password;

    public function __construct()
    {
        $this->tablename = 'users';
        $this->fields = [
            'id',
            'user_name',
            'password'
        ];

        $this->primary_key = array('id');
        parent::__construct();
    }

    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getUserName()
    {
        return $this->user_name;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function select($criteria)
    {
        $column = [];
        $values = [];

        foreach ($criteria as $col => $value) {
            $column[] = $col;
            $values[] = $value;
        }
        $myCriteria = new Criteria();
        $myCriteria->setColumns();
        $myCriteria->whereEqual($column[0], $values[0]);
        $myCriteria->whereAND();
        $myCriteria->whereEqual($column[1], $values[1]);
        $res = parent::select($myCriteria);
        if (!empty($res)) {
            return true;
        } else {
            return false;
        }

    }
}
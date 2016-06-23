<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:51 AM
 */
require_once '../core/models/database/BaseModel.php';
require_once '../core/models/database/drivers/Database.php';
require_once '../core/models/database/drivers/Criteria.php';

class Student extends BaseModel
{
    private $id;
    private $first_name;
    private $last_name;
    private $address;
    protected $username;
    protected $password;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    public function select($tablename, $criteria)
    {
        echo "student Select!!<br>";
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
        $res = parent::select($tablename, $myCriteria);
        if (!empty($res)) {
            return true;
        } else {
            return false;
        }

    }
}
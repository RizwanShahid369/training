<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 5:47 AM
 */
require_once 'ModelInterface.php';
require_once 'drivers/Database.php';
require_once 'drivers/Criteria.php';

/**
 * Class BaseModel
 *
 * provides methods to manipulate data
 *
 */
class BaseModel implements ModelInterface
{
    // protected $controller;
    //protected $method;
    protected $db_instance;
    protected $tablename;
    protected $fields;
    protected $primary_key;
    protected $foreign_key;

    /**
     * BaseModel constructor.
     */
    public function __construct()
    {
        $this->db_instance = Database::getInstance();
    }

    /**
     * @param $data
     * insert data in the database
     */
    public function insert($data)
    {
        if (!empty($data)) {
            try {
                $this->db_instance->insert($this->tablename, $data);
                $this->db_instance->prepare();
                $this->db_instance->execute();
                echo "record added!";

            } catch (Exception $e) {
                echo $e->getMessage();
            }

        }
    }

    /**
     * @param $arr
     *
     * update record in the table
     */
    public function update($arr)
    {
        echo "student model Update";
        $criteria = new Criteria();
        $criteria->updateColumn($arr);
        $id = $_GET['id'];
        $id = (int)$id;
        $criteria->whereEqual('id', $id);
        $this->db_instance->updateEntity($this->tablename, $criteria);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        header("location:listAll");
    }

    /**
     * @param $id
     *
     * deletes a particular record from the database
     *
     */
    public function delete($id)
    {
        $this->db_instance->deleteByPk($this->tablename, $id);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        echo "record deleted";
    }

    /**
     * @return mixed
     *
     * return all records from the table
     */
    public function selectAll()
    {
        $criteria = new Criteria();
        $criteria->setColumns();
        $this->db_instance->select($this->tablename, $criteria);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        $res = $this->db_instance->resultSet();
        return $res;
    }

    /**
     * @param $tablename
     * @param $criteria
     * @return mixed
     *
     * return all records based on particular criteria
     *
     */
    public function select($criteria)
    {
        $this->db_instance->select($this->tablename, $criteria);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        $res = $this->db_instance->resultSet();

        return $res;
    }

    /**
     * @param $id
     * @return mixed
     *
     * select a single record based on the primary key
     *
     */
    public function selectBypk($id)
    {
        $this->db_instance->selectByPK($this->tablename, $id);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        $res = $this->db_instance->resultSet();
        return $res;
    }
}
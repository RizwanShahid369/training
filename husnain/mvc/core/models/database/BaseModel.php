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

    /**
     * BaseModel constructor.
     */
    public function __construct()
    {
        echo "hello base model<br>";
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
                $this->db_instance->insert('student', $data);
                $this->db_instance->prepare();
                $this->db_instance->execute();
                echo "record added!";
                header("location:listt");
                //call_user_func_array([$this->controller, $this->method],[]);

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
        echo "base model Update";
        $criteria = new Criteria();
        $criteria->updateColumn($arr);
        $id = $_GET['id'];
        $id = (int)$id;
        $criteria->whereEqual('id', $id);
        $this->db_instance->updateEntity('student', $criteria);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        header("location:listt");

    }

    /**
     * @param $id
     *
     * deletes a particular record from the database
     *
     */
    public function delete($id)
    {
        $this->db_instance->deleteByPk('student', $id);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        echo "record deleted";
        header("location:listt");

    }

    /**
     * @return mixed
     *
     * return all records from the table
     */
    public function selectAll()
    {
        // $db_instance = Database::getInstance();

        $criteria = new Criteria();
        $criteria->setColumns();
        $this->db_instance->select('student', $criteria);

        $this->db_instance->prepare();
        $this->db_instance->execute();
        $res = $this->db_instance->resultSet();
        return $res;

//        print_r($res);
        /*foreach ($res as $key => $value) {
            foreach ($value as $key2 => $value2) {
                echo $key2 . ' is ' . $value2 . "<br>";
            }
        }*/
        echo "<br>in the Select method of Db baseModel";
    }

    /**
     * @param $tablename
     * @param $criteria
     * @return mixed
     *
     * return all records based on particular criteria
     *
     */
    public function select($tablename, $criteria)
    {
        $this->db_instance->select($tablename, $criteria);
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
        $this->db_instance->selectByPK('student', $id);
        $this->db_instance->prepare();
        $this->db_instance->execute();
        $res = $this->db_instance->resultSet();
        return $res;
    }
}
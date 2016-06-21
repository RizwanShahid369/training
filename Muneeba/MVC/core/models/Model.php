<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/20/16
 * Time: 1:35 AM
 */
require_once ('../core/models/database/DB.php');


class Model
{
    public $modelName;
    public $columnNames;
    public $attributeNames;
    public $db;

    public function __construct()
    {
        $this->db = new \DBclass\DB();
        //var_dump($this->db);
    }
    
    public function insert($criteria)
    {
        $this->db->insert($criteria);
    }

    public function delete($criteria)
    {
        $this->db->delete($criteria);
    }

    public function update($criteria)
    {
        $this->db->update($criteria);
    }

    public function selectAll($criteria)
    {

        $this->db->selectAll($criteria);
        $this->db->execute();
        return ($this->db->resultSet());

    }

    public function selectOne($criteria)
    {
        $this->db->selectOne($criteria);
    }

    public function deleteOne($criteria)
    {
        $this->db->deleteOne($criteria);
    }

}
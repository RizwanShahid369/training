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
    public $join;

    public function __construct()
    {
        $this->db = new \DBclass\DB();
        //var_dump($this->db);
    }
    
    public function insert($insertArr)
    {
        //var_dump($insertArr);
        if ($this->beforeInsert($insertArr) >= 0 ) {
            //var_dump($insertArr);
            $criteria = new \DBclass\Criteria();
            $criteria->setTableName(strtolower($this->modelName));
            $criteria->insertValues = $insertArr;
            $this->db->insert($criteria);
        } else {

            echo "Cannot insert. Invalid Entry";

        }
    }

    public function delete()
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));
        $this->db->delete($criteria);
    }

    public function update($insertArr, $col, $id)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));
        $criteria->insertValues = $insertArr;
        $criteria->whereEquals($col, $id);
        // var_dump($criteria);
        $this->db->update($criteria);
    }

    public function selectAll()
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));

        $this->db->selectAll($criteria);
        $this->db->execute();
        $result = $this->db->resultSet();
        $this->afterSelectAll($result);
        return $result;

    }

    public function selectOne($col, $id)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));


        $criteria->whereEquals($col, $id);

        $this->db->selectOne($criteria);
        $this->db->execute();
        return ($this->db->resultSet());
    }

    public function deleteOne($col, $id)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));
        $criteria->whereEquals($col, $id);

        $this->db->deleteOne($criteria);
    }

    public function find($param)
    {
        $criteria = new \DBclass\Criteria();
        $criteria->setTableName(strtolower($this->modelName));

        $key= key($param);
        $criteria->whereEquals($key, $param[$key]);

        $this->db->select($criteria);
        $this->db->execute();
        return ($this->db->resultSet());
    }

    public function beforeInsert(&$param)
    {
        return 0;

    }

    public function afterInsert()
    {
        return 0;
    }

    public function beforeSelectAll()
    {
        return 0;

    }

    public function afterSelectAll(&$param)
    {
        return 0;

    }
}

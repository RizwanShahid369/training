<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/16/16
 * Time: 6:19 AM
 */
namespace DBclass;

require_once ('Criteria.php');
error_reporting(E_ALL);
ini_set("display_errors", "On");
class DB
{
    public $conn;
    public $sql;
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "sakila";

        try {
            # MySQL with PDO_MYSQL
            $this->conn = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    public function select($criteria)
    {

        $select= $criteria->getSelect();
        $table= $criteria->getTableName();
        $statement = "SELECT $select FROM $table";
        if (strlen($criteria->getLimit())) {
            $limit = $criteria->getLimit();
            $statement = $statement . " LIMIT $limit;";
        }
        if (strlen($criteria->getJoin())) {
            $join = $criteria->getJoin();
            $statement = $statement . " $join ;";
        }
        if (strlen($criteria->getWhere())) {
            $where = $criteria->getWhere();
            $statement = $statement . " WHERE $where ;";
        }
        if (strlen($criteria->getGroupby())) {
            $group = $criteria->getGroupby();
            $statement = $statement . " GROUP BY $group ";

            if (strlen($criteria->getHaving())) {
                $having= $criteria->getHaving();
                $statement = $statement . " HAVING $having ;";
            }
        }
        if (strlen($criteria->getOrderby())) {
            $order = $criteria->getOrderby();
            $statement = $statement . " ORDER BY $order ";
        }
        //echo $statement;
        $this->sql= $this->conn->prepare($statement);

        //var_dump($this->sql);
    }

    public function execute()
    {
        if (isset($this->sql)) {
            $this->sql->execute();
        }

    }

    /**
     * @return  $arr
     */
    public function resultSet()
    {
        $arr = [];
        if (isset($this->sql)) {
            $this->sql->setFetchMode(\PDO::FETCH_ASSOC);
            //$result = $DBH->query($sql);
            while ($row = $this->sql->fetch()) {
                $arr[]= $row;
            }
        }
        return $arr;

    }

    public function insert($criteria)
    {
        $table= $criteria->getTableName();
        $statement = "INSERT INTO $table";

        $keys = array_keys($criteria->insertValues);

        $key = array_shift($keys);
        $statement = $statement . "($key";
        for ($i=0; $i<count($keys); $i++) {
            $key = array_shift($keys);
            $statement = $statement . ", $key";
        }
        $statement = $statement . " ) VALUES ";

        $values = array_values($criteria->insertValues);
        $value = array_shift($values);
        $statement = $statement . "('$value'";
        for ($i=0; $i<count($values); $i++) {
            $value = array_shift($values);
            $statement = $statement . ", '$value'";
        }
        $statement = $statement . " )";
        $this->sql= $this->conn->prepare($statement);
        //var_dump($this->sql);
        $this->execute();

    }

    public function update($criteria)
    {
        $table= $criteria->getTableName();
        $statement = "UPDATE $table SET ";

        $keys = array_keys($criteria->insertValues);
        $key = array_shift($keys);
        $values = array_values($criteria->insertValues);
        $value = array_shift($values);
        $statement = $statement . "$key = '$value'";
        $array= $criteria->insertValues;
        array_shift($array);
        foreach ($array as $column => $value) {
            $statement = $statement . ", $column = '$value'";
        }
        $where = $criteria->getWhere();
        $statement = $statement . " WHERE $where ;";
        $this->sql= $this->conn->prepare($statement);
        var_dump($this->sql);
        $this->execute();

    }

    public function delete($criteria)
    {
        $table= $criteria->getTableName();
        $statement = "DELETE FROM $table ";
        if (strlen($criteria->getWhere())) {
            $where = $criteria->getWhere();
            $statement = $statement . " WHERE $where ;";
        }
        $this->sql= $this->conn->prepare($statement);
        $this->execute();
    }

    public function deleteOne($criteria)
    {
        $table= $criteria->getTableName();
        $where = $criteria->getWhere();
        $statement = "DELETE FROM $table where $where";

        $this->sql= $this->conn->prepare($statement);
        //var_dump($this->sql);


        $this->execute();
    }

    public function selectOne($criteria)
    {
        $table= $criteria->getTableName();
        $id = $criteria->pk;
        $select= $criteria->getSelect();
        $statement = "Select $select FROM $table where id = :id";

        $this->sql= $this->conn->prepare($statement);
        $this->sql->bindParam(':id', $id);

    }

    public function selectAll($criteria)
    {
        $table= $criteria->getTableName();

        $statement = "Select * FROM $table";

        $this->sql= $this->conn->prepare($statement);
        //var_dump($this->sql);

    }



    public function compileQuery()
    {
        return $this->sql->queryString;
    }
}

/*$db = new DB();
$criteria = new Criteria();
$criteria->setTableName('Students');
$criteria->setSelect('*');
$criteria->setJoin('JOIN', 'grades', 'id', 's_id');
$criteria->pk = 14;

//$criteria->whereEquals('full_name', "'Name'");
//$criteria->setTableName('Students');
$db->selectAll($criteria);
$db->execute();
$db->resultSet($arr);
print_r($arr);
//$criteria->setOrderBy('city', 'DESC');
//$criteria->whereAND('father_name', "'Mughal'");
//$criteria->setGroupby('address');
//$criteria->setHaving('class', '32');

$array = [
  'full_name' => "'Somebody'",
    'father_name' => "'Nobody'"
];
$criteria->whereEquals('id', 9);
$criteria->insertValues = $array;


//$db->update($criteria);
//$db->insert($criteria);
//echo $db->compileQuery();
//$db->select('Students', $criteria);
//$db->execute();
//$db->resultSet($arr);
// print_r($arr);
//echo $db->compileQuery();*/


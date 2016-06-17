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
        $dbname = "myDB";

        try {
            # MySQL with PDO_MYSQL
            echo "no";
            $this->conn = new \PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            echo "yes";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }
    
    public function select($table, $criteria)
    {
        $select= $criteria->getSelect();

        $statement = "SELECT $select FROM $table";
        if (strlen($criteria->getLimit())) {
            $limit = $criteria->getLimit();
            $statement = $statement . " LIMIT $limit;";
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
        echo $statement;
        $this->sql= $this->conn->prepare($statement);



        /*if(strlen($criteria->getLimit())) {
            $limit = $criteria->getLimit();
            $this->sql->bindParam(':limit', $limit);
        }
        if(strlen($criteria->getWhere())) {
            $where = $criteria->getWhere();
            $this->sql->bindParam(':where', $where);
        }
        if(strlen($criteria->getGroupby())) {
            $group = $criteria->getGroupby();
            $this->sql->bindParam(':group', $group);

            if (strlen($criteria->getHaving())) {
                $having= $criteria->getHaving();
                $this->sql->bindParam(':having', $having);
            }
        }*/

        var_dump($this->sql);
    }

    public function execute()
    {
        $this->sql->execute();
    }

    public function resultSet(&$arr)
    {
        $this->sql->setFetchMode(\PDO::FETCH_ASSOC);
        //$result = $DBH->query($sql);
        while ($row = $this->sql->fetch()) {
            $arr[]= [
                $row["id"],
                $row["full_name"],
                $row["dob"],
                $row["father_name"],
                $row["class"],
                $row["address"],
                $row["city"],
                $row["school"]
            ];
        }

    }
    public function compileQuery()
    {
        return $this->sql->queryString;
    }
}

/*echo "here";
$db = new DB();
$criteria = new Criteria();
$criteria->setSelect('*');
$criteria->setWhereEquals('full_name', 'Muneeba');
$db->select('Students', $criteria);
echo "here1";
$db->execute();
echo "here2";
$db->resultSet($arr);
echo "here3";
print_r($arr);
//echo $db->compileQuery();*/

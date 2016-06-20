<?php

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/16/16
 * Time: 6:13 AM
 *
 */

/*
 * Display Errors
 */
ini_set('display_errors', 1);
include ('crieteria.php');

class DB
{
    public $db;
    public $stmt;
    public $sql;

    /*
     * Establish Database connection
     *
     */
    function __construct()
    {
        $dsn = 'mysql:dbname=Practice;host=localhost;port=3306';
        $username = 'root';
        $password = '123';

        try {
            $this->db = new PDO($dsn, $username, $password);
            echo "Connected \n";
        } catch(PDOException $e) {
            die('Could not connect to the database:<br/>' . $e);
        }
    }
    
    /*
     * Executes prepare command for query
     */
    public function Prepare()
    {
        $this->stmt = $this->db->prepare($this->sql);
    }

    /*
     * builds Select clause
     * WhereCr is object of crieteria class which contains where clause
     *@param $table table name
     */

    public function select($table, $fields, $whereCr)
    {
        $this->sql = "SELECT $fields FROM $table WHERE $whereCr->where";
    }

    /*
     * binds variables with values
     */
    public function bind($i, $v1, $c, $v2)
    {
        $this->stmt->bindParam($i, $v1);
        $this->stmt->bindParam($c, $v2);
    }

    /*
     * 
     * Executes the build query
     */
    public function Execute()
    {
        if($this->stmt->execute()){
            return true;
        }else{
            echo "Unable to read record:", print_r($this->stmt->errorInfo(), true);
        }
    }

    /*
     * Output result of query
     */
    public function resultSet()
    {
       while($res = $this->stmt->fetch())
       {
            echo $res['name'], "<br>";

       }
    }

    // Task 2

    /*
     * function builds select clause by cincatinating with where clause
     * WhereCr is object of crieteria class which contains where clause
     */
    public function whereLte($table, $fields, $whereCrieteria)
    {
        $wherelte = $whereCrieteria->getWhereLte();
        $this->sql = "SELECT $fields FROM $table WHERE $wherelte";
    }

    /*
     * Binds variables with values
     */

    public function bindLte($col, $val)
    {
        $this->stmt->bindParam($col, $val);
    }

    /*
     * function builds select clause by concatinating with where clause
     * WhereCr is object of crieteria class which contains where clause
     */
    public function whereGte($table, $fields, $whereCrieteria)
    {
        $wheregte = $whereCrieteria->getWhereGte();
        $this->sql = "SELECT $fields FROM $table WHERE $wheregte";
    }

    /*
    * Binds variables with values of GreaterThanEqual function
    */
    
    public function bindGte($col, $val)
    {
        $this->stmt->bindParam($col, $val);
    }

    /*
     * function builds select clause by concatinating with where clause
     * WhereCr is object of crieteria class which contains where clause
     */
    
    public function whereBetween($table, $fields, $whereCrieteria)
    {
        $wherebtw = $whereCrieteria->getWhereBetween();
        $this->sql = "SELECT $fields FROM $table WHERE $wherebtw";
    }

    /*
     * function builds select clause by concatinating with OrderBy clause
     * WhereCr is object of crieteria class which contains orderby clause
     */
    public function orderBy($table, $fields, $whereCrieteria)
    {
        $this->sql = "SELECT $fields FROM $table ORDER BY ".$whereCrieteria->getOrderBy();
    }

    public function bindBetween($name1, $name2 ,$val1, $val2)
    {
        $this->stmt->bindParam($name1, $val1);
        $this->stmt->bindParam($name2, $val2);
    }

    public function bindOrderBy()
    {
        $this->stmt->bindParam();
    }

    /*
     * function builds Insert clause by concatinating with Values
     * WhereCr is object of crieteria class which contains named Values
     */
    
    public function insert($table, $fields, $whereCr)
    {
        $sep = ", ";
        $fill = "";
        foreach ($fields as $val) {
            $fill .= $val.$sep;
        }
        $fillTab = rtrim($fill, ", ");

        $this->sql = "INSERT INTO $table ($fillTab) ". $whereCr->buildValues();
    }

    public function bindInsert($n1, $d1, $fn1, $cl1, $a1, $ci1, $sc1, $n, $d, $fn, $cl, $a, $ci, $sc)
    {
        $this->stmt->bindParam($n1, $n);
        $this->stmt->bindParam($d1, $d);
        $this->stmt->bindParam($fn1, $fn);
        $this->stmt->bindParam($cl1, $cl);
        $this->stmt->bindParam($a1, $a);
        $this->stmt->bindParam($ci1, $ci);
        $this->stmt->bindParam($sc1, $sc);
    }

    /*
     * function builds Delete clause by concatinating with where clause
     * WhereCr is object of crieteria class which contains where clause
     */
    
    public function delete($table, $whereCr)
    {
        $this->sql = "DELETE FROM $table  WHERE ". $whereCr->getDeleteWhere();
    }

    public function bindDelete($col, $val)
    {
        $this->stmt->bindParam($col, $val);
    }

    /*
     * function builds Delete clause by concatinating with where clause
     * WhereCr is object of crieteria class which contains where clause
     */
    
    public function deleteByPK($table, $whereCr)
    {
        $this->sql = "DELETE FROM $table  WHERE ". $whereCr->getDeletePKWhere();
    }

    public function bindDeleteByPK($col, $val)
    {
        $this->stmt->bindParam($col, $val);
    }

    /*
     * function builds update clause by concatinating with where clause
     * WhereCr is object of crieteria class which contains where clause
     */
    
    public function update($table, $fields, $whereCr)
    {
        $this->sql = "UPDATE $table SET $fields = :f WHERE ". $whereCr->getUpdateWhere();
    }

    public function bindUpdate($col, $val, $col1, $val1)
    {
        $this->stmt->bindParam($col, $val);
        $this->stmt->bindParam($col1, $val1);
    }

    /*
     * function builds select clause
     * @param $table name of table
     * @param $fields name of column/s
     */
    
    public function selectAll($table, $fields)
    {
        $this->sql = "SELECT $fields FROM $table";
    }

    /*
     * function builds select clause by concatinating with where clause
     * WhereCr is object of crieteria class which contains where clause
     */
    
    public function selectByPK($table, $fields, $whereCr)
    {
        $this->sql = "SELECT $fields FROM $table WHERE ". $whereCr->getPK();
    }

    public function bindPK($col, $val)
    {
        $this->stmt->bindParam($col, $val);
    }

    /*
     * function builds SUM clause
     * Agregate functions
     */
    
    public function sumAgr($table, $fields)
    {
        $this->sql = "SELECT SUM($fields) AS $fields FROM $table";
    }

    /*
     * function builds MAX clause
     * Agregate functions
     */
    
    public function maxAgr($table, $fields)
    {
        $this->sql = "SELECT MAX($fields) AS $fields FROM $table";
    }
    
    /*
     * function builds COUNT clause
     * Agregate functions
     */
    
    public function countAgr($table, $fields)
    {
        $this->sql = "SELECT AVG($fields) FROM $table";
    }

    /*
     * function builds InnerJoins clause
     * Agregate functions
     */
    
    public function innerJoinAgr($table1, $table2)
    {
        $this->sql = "SELECT $table1.OrderID, $table2.CustomerName, $table1.OrderDate
        FROM $table1
        INNER JOIN $table2
        ON $table1.CustomerID=$table2.CustomerID";
    }
}

//$obj = new crieteria();
//$obj->buildWhereEqual();
//$obj->setWhereLte("id");
//$obj->setWhereGte("id");
//$obj->setWhereBetween("id");
//$obj->setDirection("DESC");
//$obj->setOrderBy("class");
//$obj->buildDeleteWhere("id");
//$obj->buildUpdateWhere("id");
//$obj->buildPKWhere("id");
//$obj->buildDeletePKWhere("id");

//$fields = array("name", "dob", "Father_Name", "class", "address", "city", "school");
//$obDB = new DB();
//$obDB->insert("students",$fields,$obj);
//$obDB->select("students","*", $obj);
//$obDB->whereLte("students","*", $obj);
//$obDB->whereGte("students","*", $obj);
//$obDB->whereBetween("students","*", $obj);
//$obDB->orderBy("students","*", $obj);
//$obDB->delete("students", $obj);
//$obDB->update("students","class", $obj);
//$obDB->deleteByPK("students", $obj);
//$obDB->sumAgr("students", "id");
//$obDB->selectAll("students", "*");
//$obDB->selectByPK("students","*", $obj);
//$obDB->Prepare();
//$obDB->bindDelete(':id',15);
//$obDB->bindDelete(':id',16);
//$obDB->bindInsert(':n', ':d', ':fn', ':cl', ':a', ':ci', ':sc', "khan", "10", "Jkhan", 25, "slh", "lh", "hmh" );
//$obDB->bindGte(":id", 14);
//$obDB->bind(":id", $obj->id, ":class", $obj->clas);
//$obDB->bindLte(":id", 14);
//$obDB->bindBetween(":val1",":val2",13, 16);
//$obDB->bindOrderBy();
//$obDB->bindPK('id', 13);
//$obDB->bindUpdate('f',77,':id', 14);
//$obDB->Execute();
//$obDB->resultSet();

<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:59 AM
 */
require_once '../app/config.php';

class Database
{
    /**
     * stores the database instance
     *
     * @var Database
     */
    private static $instance = null;
    /**
     * Connection to the database
     *
     * @var PDO
     */
    private $conn;
    /**
     * Server name
     *
     * @var string
     */
    private $servername;
    /**
     * username of the database
     *
     * @var string
     */
    private $username;
    /**
     * Password of the database user
     *
     * @var string
     */
    private $password;
    /**
     * database name
     *
     * @var string
     */
    private $dbname;
    /**
     * Statement object of PDO
     *
     * @var
     */
    public $statement;
    /**
     * SQL query to run against database tables
     *
     * @var string
     */
    public $sql;

    /**
     * Initialize the connection to the database
     *
     * Database constructor.
     */
    private function __construct()
    {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "123";
        $this->dbname = "test";

        try {
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully<br>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "<br>";
        }
    }

    /**
     * returns instance to the database
     *
     * @return Database|null
     */
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * return connection to the database
     *
     * @return PDO
     */
    public function getConnection()
    {
        return $this->conn;
    }

    /**
     * prepare sql query
     */
    public function prepare()
    {
        echo "prepared<br>";
        $this->statement = $this->conn->prepare($this->sql);

        //$statement = $conn->prepare($query);
    }

    /**
     * Bind sql query
     *
     * @param $param1
     * @param $var
     */
    public function bind($param1, $var)
    {

        $this->statement->bindParam($param1, $var);

    }

    /**
     * execute SQl Query
     */
    public function execute()
    {
        echo "Execute<br>";
//        global $statement;
//        $statement->execute();
        $this->statement->execute();
    }

    /**
     * Make Select Statement of sql query
     *
     * @param $table_name
     * @param Criteria $criteria
     */
    public function select($table_name, Criteria $criteria)
    {

        $columns = $criteria->getColumns();
        $this->sql = "SELECT $columns FROM $table_name";
        //echo "columns is ".$columns; die;
        if (strlen($criteria->getWhereClause())) {
            $whe = $criteria->getWhereClause();
            $this->sql .= " WHERE $whe ";
        }
        if (strlen($criteria->getGroupBy())) {
            $col = $criteria->getGroupBy();
            $this->sql .= " GROUP BY $col ";
        }
        if (strlen($criteria->getHaving())) {
            $having = $criteria->getHaving();
            $this->sql .= "HAVING $having ";
        }
        if (strlen($criteria->getOrderBy())) {
            $orderby = $criteria->getOrderBy();
            $this->sql .= " ORDER BY $orderby ";
        }

        echo $this->sql;
//        echo $this->sql; die;
        //$criteria->
        // $sql .=''
        // this->select_query = " SELECT first_name, last_name FROM accounts WHERE name like '%SDS%'"
    }

    /**
     * select data by primary key
     *
     * @param $tablename
     * @param $id
     */
    public function selectByPK($tablename, $id)
    {
        $this->sql = "SELECT * FROM $tablename WHERE id  = $id";
    }

    /**
     * Select All records from database
     *
     * @param $tablename
     */
    public function selectAll($tablename)
    {
        $this->sql = "SELECT * FROM $tablename";
    }

    /**
     * Delete Records by primary key
     *
     * @param $tablename
     * @param $id
     */
    public function deleteByPk($tablename, $id)
    {
        $this->sql = "DELETE FROM $tablename WHERE id = $id";
        echo $this->sql;

    }

    /**
     * compiles the sql Query
     *
     * @return mixed
     */
    public function compileQuery()
    {
        return $this->sql;
    }

    /**
     * Insert Record in the specified table
     *
     * @param $table_name
     * @param $data
     */
    public function insert($table_name, $data)
    {
        //$fields_value = '';
        $my_keys = '';
        $my_values = '';
        if (!empty($data)) {
            foreach ($data as $key => $value) {
                // $fields_value .= "$key = $value,";
                $my_keys .= "$key ,";
                $my_values .= "'" . $value . "',";
            }
            //$fields_value =  rtrim($fields_value,',');
            $my_keys = rtrim($my_keys, ',');
            $my_values = rtrim($my_values, ',');
            $this->sql = "INSERT INTO $table_name ($my_keys) VALUES ($my_values)";
            echo $this->sql;
        }

    }

    /**
     * Update existing record in the database
     *
     * @param $tablename
     * @param Criteria $criteria
     */
    public function updateEntity($tablename, Criteria $criteria)
    {
        $where = '';
        if (strlen($criteria->getUpdateColumn())) {
            $columns = $criteria->getUpdateColumn();
        }
        if (strlen($criteria->getWhereClause())) {
            $where = $criteria->getWhereClause();
        }
        $this->sql = "UPDATE $tablename SET $columns WHERE $where";
        echo $this->sql;
        die();
    }

    /**
     * Delete multiple Records from the database
     *
     * @param $tablename
     * @param Criteria $criteria
     */
    public function delete($tablename, Criteria $criteria)
    {
        if (strlen($criteria->getWhereClause())) {
            $where = $criteria->getWhereClause();
            $this->sql = "DELETE FROM $tablename WHERE $where";
        }


    }

    /**
     * join two tables
     *
     * @param $table1
     * @param $table2
     * @param $ON
     * @param $criteria
     */
    public function join($table1, $table2, $ON, $criteria)
    {
        if (strlen($criteria->getColumns())) {
            $column = $criteria->getColumns();
        }
        $this->sql = "SELECT $column FROM $table1 JOIN $table2 ON $ON ";
        //echo $this->sql; die;
    }

    /**
     * returns the result set of the query
     * @return mixed
     */
    public function resultSet()
    {
        $result = $this->statement->setFetchMode(PDO::FETCH_ASSOC);
        $result = $this->statement->fetchAll();
        return $result;
//        print_r($result);
//        foreach($result as $row){
//            echo "<li>{$row['filmName']}</li>";
//        }
//        echo 'Result is: '.$result;
    }

}
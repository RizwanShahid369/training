<?php

/**
 * Class DB provide singleton instance to the database and insert and delete methods
 * 
 */
class DB
{
    private static $instance;
    private $servername = 'localhost';
    private $username  = 'root';
    private $password = '123';
    private $dbname = 'test';
    private $connection;

    /**
     * provide the singleton connection tto the database
     *
     * @return DB
     */
    public static function getInstance() {
        if(!self::$instance) { // If no instance then make one
            //echo 'get instance called';
            self::$instance = new self();
        }
        return self::$instance;
    }
    /**
     * DB constructor.
     *
     */
    private function __construct() {
       echo 'constructer invoked';
        $this->connection = new mysqli($this->servername, $this->username,
            $this->password, $this->dbname);
// Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
                E_USER_ERROR);
        }
    }

    /**
     * returns the mysqli connection
     *
     * @return mysqli
     */
    public function getConnection() {
        return $this->connection;
    }

    /**
     * insert record in the database with fields that passed as argument
     *
     * @param string $first_name
     * @param string $last_name
     * @param string $address
     * @return bool|mixed
     */
    public function insertRecored($first_name, $last_name, $address)
    {
        $sql = "INSERT INTO test.student (first_name, last_name, address)
        VALUES ('$first_name', '$last_name', '$address')";
        if ($this->connection->query($sql) === TRUE) {
            $last_id = $this->connection->insert_id;//$conn->insert_id;
            return $last_id;
            echo "New record created successfully. Last inserted ID is: " . $last_id;
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;
            return false;
        }
    }

    /**
     * deletes a particular record from database based on id
     *
     * @param integer $id
     */
    public function deleteRecord($id)
    {
        echo 'delete called';
        $sql = "DELETE FROM test.student WHERE id=$id";

        if ($this->connection->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $this->connection->error;
        }
    }


}

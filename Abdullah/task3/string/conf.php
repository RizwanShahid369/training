<?php


class sd
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "123";
    public $dbname = "NewDatabase";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

// Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        // echo "Connected successfully";
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/9/16
 * Time: 5:43 AM
 */

namespace DB_Access;

/*                                                                        *
 * This script is written by Muneeba Mughal                               *
 *                                                                        *
 * Practice code to implement phpUnit, phpDoc and Database                *
 * Simple DBAccess class to access Database and insert and delete records *
 *                                                                        */

class DBAccess
{
    //$conn variable to store the connection string
    private $conn;

    /**
     * Constructor establishes the connection between the host and the server
     *
     * and create a table MyUsers
     */
    public function _construct($conn)
    {
        $servername = "localhost";
        $username = "root";
        $password = "123";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        // Create database
        $sql = "CREATE TABLE MyUsers (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        age INT(6),
        grade CHAR 
        )";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }
    }

    /**
     * A function to insert values in the table MyUsers
     *
     * parameters being $fname,
     * $lname,
     * $age,
     * $grade
     *
     */
    public function insert($fname, $lname, $age, $grade)
    {
        $sql = "INSERT INTO MyUsers (firstname, lastname, email)
        VALUES ($fname, $lname, $age, $grade)";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn;
        }
    }

    /**
     * A function to delete the record with id in the table MyUsers
     *
     * parameter being $id
     * the id of the record to be deleted
     *
     */
    public function delete($id)
    {
        $sql = "DELETE FROM MyUsers
        WHERE id=$id";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn;
        }
    }

}
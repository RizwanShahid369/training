<?php

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/9/16
 * Time: 5:14 AM
 *
 *
 * Performs operations to Insert and Delete data from database Practice
 */

class config
{
   /*
    * Method inserts record into database
    * Closes connection
    *
    * @param $col1 Value of column 1
    * @param $col2 Value of column 2
    * @param $col3 Value of column 3
    * @param $col4 Value of column 4
    *
    * @return bool Upon insertion of record into database it returns true
    * otherwise false
    */

    public function insertRecord()
    {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $gender = $_POST["gender"];
	
        $conn = new mysqli("localhost", "root", "123", "Practice");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sqlquery = "INSERT INTO git (First_Name, Last_Name, Gender)
                  VALUES ('$fname', '$lname', '$gender')";

        if ($conn->query($sqlquery) === TRUE) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sqlquery . "<br>" . $conn->error;
            return false;
        }

        $conn->close();
    }
}
$object = new config();
$object->insertRecord();
?>

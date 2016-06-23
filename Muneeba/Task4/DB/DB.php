<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/15/16
 * Time: 6:47 AM
 */
$csv = array_map("str_getcsv", file("fileIn.csv", FILE_SKIP_EMPTY_LINES));
$keys = array_shift($csv);
//data connection
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "myDB";

global $conn;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE TABLE students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     $keys[0] VARCHAR(30) NOT NULL,
     $keys[1]  DATE,
     $keys[2]  VARCHAR(30),
     $keys[3]  VARCHAR(30),
     $keys[4]  VARCHAR(50),
     $keys[5]  VARCHAR(30),
     $keys[6]  VARCHAR(30)
    )";
 echo $sql;
if ($conn->query($sql) === true) {
    echo "Database created successfully";
} else {
    //echo "Error creating database: " . $conn->error;
}
foreach ($csv as $value) {
    $sql = "INSERT INTO students ($keys[0], $keys[1], $keys[2], $keys[3], $keys[4], $keys[5], $keys[6])
    VALUES ('$value[0]', '$value[1]', '$value[2]', '$value[3]', '$value[4]', '$value[5]', '$value[6]')";
    if ($conn->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}

<?php


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
//echo "Connected successfully";

require_once 'functions.php';
$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';
$action = isset($_REQUEST['action'])?($_REQUEST['action']):'';

if (isset($_REQUEST['action'])) {
    $action();
}
// Create database
$sql = "CREATE TABLE Students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(30) NOT NULL,
    dob DATE,
    father_name VARCHAR(30),
    class VARCHAR(30),
    address VARCHAR(50),
    city VARCHAR(30),
    school VARCHAR(30)
    )";
if ($conn->query($sql) === true) {
    echo "Database created successfully";
} else {
    //echo "Error creating database: " . $conn->error;
}

<?php


$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "myDB";

//global $conn;
/*// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

//using PDO
global $DBH;
try {
    # MySQL with PDO_MYSQL
    $DBH = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
catch(PDOException $e) {
    echo $e->getMessage();
}
//echo "Connected successfully";

require_once 'functions.php';
$page = isset($_REQUEST['page'])?($_REQUEST['page']):'home';
$action = isset($_REQUEST['action'])?($_REQUEST['action']):'';

if (isset($_REQUEST['action'])) {
    $action();
}
// Create database
try {
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
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

    // use exec() because no results are returned
    $DBH->exec($sql);
    echo "Table Students created successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

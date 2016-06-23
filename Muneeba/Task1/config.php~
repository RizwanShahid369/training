<?php
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
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$age = $_POST["age"];
$grade = $_POST["grade"];

$sql = "INSERT INTO MyUsers (firstname, lastname, email)
VALUES ($fname, $lname, $age, $grade)";

if ($this->conn->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $this->conn;
}

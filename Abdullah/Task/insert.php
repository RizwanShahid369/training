
<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "NewDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=$_POST['id'];
$b=$_POST['course'];
$c=$_POST['pno'];
$d=$_POST['city'];

$sql = "INSERT INTO Student 
VALUES ('$a','$b','$c','$d')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 

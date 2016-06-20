<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "NewDatabase";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to delete a record
    $stmt = $dbh->prepare("delete from Student WHERE id= :id");
    $stmt->bindParam(':id', $id);
    $id=5;

    $stmt->execute();
    echo "deleted";

    // use exec() because no results are returned
   // $conn->exec($sql);
   // echo "Record deleted successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
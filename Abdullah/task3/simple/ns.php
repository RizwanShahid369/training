<form action="ns.php" method="post">
    <p>

        <label for="id">ID:</label>

        <input type="text" name="id" id="id">

    </p>
<input type="submit" name ="Submit" />


       </form>




<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "NewDatabase";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a=$_POST['id'];
$sql = "SELECT * FROM student WHERE id=$a";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) ) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " -  " . $row["name"]. " " . $row["dob"]." " .$row["father_name "]." " .$row["class"]." " .$row["address"]." " .$row["city"]." " .$row["school"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

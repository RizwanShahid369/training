   
    <form action="list.php" method="POST">

        <p>

            <label for="id">ID:</label>

            <input type="text" name="id" id="firstName">

        </p>

        <p>

            <label for="course">Course:</label>

            <input type="text" name="course" id="lastName">

        </p>

        <p>

            <label for="pno">PhoneNumber:</label>

            <input type="text" name="pno" id="emailAddress">

        </p>
        <p>

            <label for="city">City:</label>

            <input type="text" name="city" id="emailAddress">

        </p>

        <input type="submit" value="Submit">

    </form>



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
$id=$_POST["id"];
$result = mysqli_query($conn,"SELECT * FROM Student WHERE id='$id'
");


echo "<table width=100%>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Gender</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td> " . $row['id'] . "</a> </td>";
echo "<td>" . $row['course'] .  "</td>";
echo "<td>" . $row['pno'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "</tr>";
}
echo "</table>";

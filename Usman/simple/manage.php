<!DOCTYPE html>
<html>
<head>
    <title>Manage page</title>
</head>
<body>

<?php
include ('include/conf.php');
$ob = new conf();
$res = $ob->viewRecord();

        if( $res->num_rows > 0){

            echo "<table border='1'>";//start table

            //creating our table heading
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Full Name</th>";
            echo "<th>Father's Name</th>";
            echo "<th>Class</th>";
            echo "<th>DOB</th>";
            echo "<th>City</th>";
            echo "<th>Address</th>";
            echo "<th>School</th>";

            echo "</tr>";

            //loop to show each records
            while($row = $res->fetch_assoc()) {
                echo "<tr>";

                echo "<td>{$row['id']}</td>";

                echo "<td>{$row['name']}</td>";

                echo "<td>{$row['Father_Name']}</td>";
                echo "<td>{$row['class']}</td>";
                echo "<td>{$row['dob']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['school']}</td>";

            }

            echo "</table>";//end table

        }else{

            //if database table is empty

            echo "No records found.";

        }
//$ob = new conf();
//$res = $ob->viewRecord();

?>

</body>
</html>
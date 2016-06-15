<html>
<body>

<?php
require_once 'include/function.php';
$ab = new db();
$r = $ab->abf();


//echo "<div><a href='insert.php'></a></div>";

	if( $r->num_rows > 0){
		echo "<table border='1'>";
		echo "<tr>";
        echo "<th>iD</th>";
        echo "<th>name</th>";
        echo "<th>dob</th>";
        echo "<th>father_name</th>";
        echo "<th>class</th>";
        echo "<th>address</th>";
        echo "<th>city</th>";
        echo "<th>school</th>";

	echo "</tr>";

	//loop to show each records
		while($row = $r->fetch_assoc()) {
	echo "<tr>";

	echo "<td>{$row['id']}</td>";

	echo "<td>{$row['name']}</td>";
echo "<td>{$row['dob']}</td>";
echo "<td>{$row['fname']}</td>";

	echo "<td>{$row['class']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['city']}</td>";
            echo "<td>{$row['school']}</td>";
            
	echo "<td>";

	echo "<a href='insert.php?id={$row['id']}'>Edit</a>";

	echo " / ";
			echo "<a href='update.php?id={$row['id']} name={$row['name']} dob={$row['dob']} fname={$row['fname']} class={$row['class']} address={$row['address']} city={$row['city']} school={$row['school']}'>update</a>";

			echo " / ";

			//echo "<a href='delete.php?id={$row['id']}'>Delete</a>";
			echo "<a name='id' value = {$row['id']} href='include/function.php?id={$row['id']}&action=delete'>Delete</a>";

	echo "</td>";

	echo "</tr>";

	}

	echo "</table>";//end table

	}else{

	//if database table is empty

	echo "No records found.";

	}





?>

</body>
</html>

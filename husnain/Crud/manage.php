<html>
<head>
    <title>Manage page</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript">
        //alert("jbajsdb");
        $(document).ready(function () {
            $("button").click(function () {
                is_delete = confirm("Are you sure you want to delete it!");
                //alert("button clicked!!");
                if (is_delete) {
                    did = $(this).attr('id');
                    //alert(did);
                    $.post("include/DbFunction.php",
                        {
                            id: did,
                            action: 'delete'
                        },
                        function (data, status) {
                            alert("Data: " + data + "\nStatus: " + status);
                            window.location.href = "http://localhost/training/training/husnain/Crud/manage.php";

                        });
                    // alert("em gonna delete it ");
                } else {
                    window.location.href = "http://localhost/training/training/husnain/Crud/";
                    //return false;
                    alert("not deleting");

                }

            });
        });
    </script>
</head>
<body>

<?php
require_once 'include/DbFunction.php';
$ob = new DbFunction();
$res = $ob->getAll();

//if ($res->num_rows > 0) {
//    // output data of each row
//    while($row = $res->fetch_assoc()) {
//        echo "id: " . $row["id"]. " - Name: " . $row["full_name"]. " " . $row["fathers_name"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}


echo "<div><a href='add.php'>Create New Record</a></div>";

if ($res->num_rows > 0) { //it means there's already a database record

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
    while ($row = $res->fetch_assoc()) {
        echo "<tr>";

        echo "<td>{$row['id']}</td>";

        echo "<td>{$row['full_name']}</td>";

        echo "<td>{$row['fathers_name']}</td>";
        echo "<td>{$row['class']}</td>";
        echo "<td>{$row['dob']}</td>";
        echo "<td>{$row['city']}</td>";
        echo "<td>{$row['address']}</td>";
        echo "<td>{$row['school']}</td>";

        echo "<td>";

        echo "<a href='edit.php?id={$row['id']}'>Edit</a>";

        echo " / ";

//	echo "<a  id = 'deletebtn' href='include/DbFunction.php?id={$row['id']}&action=delete'>Delete</a>";
        //echo "<button id = 'deletebtn'>delete</button>";
        ?>
        <button id= <?php echo $row['id']; ?>>mydelete</button>
        <?php

        echo "</td>";

        echo "</tr>";

    }

    echo "</table>";//end table
    echo "<a href='search.php'>Search Records</a>";

} else {

    //if database table is empty

    echo "No records found.";

}


?>

</body>
</html>
<?php
$conn = new mysqli("localhost", "root", "123", "cruddb");

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}



$csv_file = "student.csv";


if (($handle = fopen($csv_file, "r")) !== FALSE) {
fgetcsv($handle);
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
$num = count($data);
for ($c=0; $c < $num; $c++) {
$col[$c] = $data[$c];
}

$col1 = $col[0];
$col2 = $col[1];
$col3 = $col[2];
$col4 = $col[3];
$col5 = $col[4];
$col6 = $col[5];
$col7 = $col[6];
$col8 = $col[7];

    $query = "INSERT INTO cruddb.students(id, full_name, fathers_name, class, dob, city, address, school) VALUES('".$col1."','".$col2."','".$col3."'
,'".$col4."','".$col5."','".$col6."','".$col7."','".$col8."')";

if ($conn->query($query) === TRUE) {
echo "New record created successfully";
return true;
} else {
echo "Error: " . $query . "<br>" . $conn->error;
return false;
}
}
fclose($handle);
}

$conn->close();
echo "File data successfully imported to database!!";

?>
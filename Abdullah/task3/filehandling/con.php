<?php


$conn = new mysqli("localhost", "root", "123", "NewDatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$csv_file = "a.csv";


if (($handle = fopen($csv_file, "r")) !== FALSE) {
    fgetcsv($handle);
    while (($data = fgetcsv($handle,",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
            $ab[$c] = $data[$c];
        }

        $col1 = $ab[0];
        $col2 = $ab[1];
        $col3 = $ab[2];
        $col4 = $ab[3];
        $col5 = $ab[4];
        $col6 = $ab[5];
        $col7 = $ab[6];
        $col8 = $ab[7];

        $query = "INSERT INTO student VALUES('".$col1."','".$col2."','".$col3."'
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


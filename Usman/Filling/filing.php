<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/15/16
 * Time: 6:36 AM
 */

//Task 1
$myfile = fopen("testfile.txt", "w");
$lines = file("myfile.txt");

foreach ($lines as $line_num => $line) {
    echo "Line #{$line_num} : " . $line . "\n";
    fwrite($myfile, $line);
}
fclose($myfile);

//Task 2
$list = array (
    array('aaa', 'bbb', 'ccc', 'dddd'),
    array('123', '456', '789'),
    array('"aaa"', '"bbb"')
);

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

$file = fopen("file.csv", "r");
while(!feof($file)) {

    print_r(fgetcsv($file));
}
fclose($file);

//Task 3

$conn = new mysqli("localhost", "root", "123", "Practice");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// path where your CSV file is located

// Name of your CSV file
$csv_file = "csvtodb.csv";


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

        $query = "INSERT INTO students(id, name, dob, Father_Name, class, address, city, school) VALUES('".$col1."','".$col2."','".$col3."'
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
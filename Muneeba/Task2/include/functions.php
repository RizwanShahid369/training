<?php

require_once 'config.php';
global $con;
$con = $conn;
function insert($fname, $dob, $fathername, $class, $address, $city, $school)
{
    global $con;
    $sql = "INSERT INTO Students (full_name, dob, father_name, class, address, city, school)
    VALUES ('$fname', '$dob', '$fathername', '$class', '$address', '$city', '$school')";
    //echo $sql;
    if ($con->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

function updateName($id, $name)
{
    global $con;
    echo "here I am";
    $sql = "UPDATE Students SET full_name='$name' WHERE id='$id'";
    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function updateDOB($id, $dob)
{
    global $con;
    $sql = "UPDATE Students SET dob='$dob' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>";
    }
}

function updateFatherName($id, $name)
{
    global $con;
    $sql = "UPDATE Students SET father_name='$name' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>";
    }
}
function updateClass($id, $class)
{
    global $con;
    $sql = "UPDATE Students SET class='$class' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>";
    }
}
function updateAddress($id, $addr)
{
    global $con;
    $sql = "UPDATE Students SET address='$addr' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $con->error;
    }
}
function updateCity($id, $city)
{
    $sql = "UPDATE Students SET city='$city' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>";
    }
}
function updateSchool($id, $school)
{
    $sql = "UPDATE Students SET school='$school' WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
    echo "Error: " . $sql . "<br>";
    }
}

function getRecords(&$arr)
{
    global $con;
    $sql = "Select id, full_name, dob, father_name, class, address, city, school from Students";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $arr[]= [ $row["id"], $row["full_name"], $row["dob"], $row["father_name"], $row["class"], $row["address"], $row["city"], $row["school"]];
    }
   } else {
    echo "0 results";
    }
}

function deleteRecord($id)
{
    global $con;
    $sql = "DELETE FROM Students WHERE id='$id'";
    if ($con->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
    echo "Error: " . $sql . "<br>";
    }
}

function getRecord($name, &$array)
{
    global $con;
    $sql = "Select id, full_name, dob, father_name, class, address, city, school from Students where full_name LIKE CONCAT ('%', '$name', '%')";
    echo $sql;
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $array[]= [ $row["id"], $row["full_name"], $row["dob"], $row["father_name"], $row["class"], $row["address"], $row["city"], $row["school"]];
    }
   } else {
    echo "0 results";
    }
}


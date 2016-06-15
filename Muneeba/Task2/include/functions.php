<?php

function insert()
{
    global $conn;
    $name = $_REQUEST["name"];
    $dob = $_REQUEST["dob"];
    $fathername = $_REQUEST["fname"];
    $class = $_REQUEST["class"];
    $address = $_REQUEST["address"];
    $city = $_REQUEST["city"];
    $school = $_REQUEST["school"];

    $sql = "INSERT INTO Students (full_name, dob, father_name, class, address, city, school)
    VALUES ('$name', '$dob', '$fathername', '$class', '$address', '$city', '$school')";
    //echo $sql;
    if ($conn->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function updateName($id, $name)
{
    global $conn;
    $sql = "UPDATE Students SET full_name='$name' WHERE id='$id'";
    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function updateDOB($id, $dob)
{
    global $conn;
    $sql = "UPDATE Students SET dob='$dob' WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function updateFatherName($id, $name)
{
    global $conn;
    $sql = "UPDATE Students SET father_name='$name' WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}
function updateClass($id, $class)
{
    global $conn;
    $sql = "UPDATE Students SET class='$class' WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}
function updateAddress($id, $addr)
{
    global $conn;
    $sql = "UPDATE Students SET address='$addr' WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
function updateCity($id, $city)
{
    global $conn;
    $sql = "UPDATE Students SET city='$city' WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}
function updateSchool($id, $school)
{
    global $conn;
    $sql = "UPDATE Students SET school='$school' WHERE id='$id'";

    if ($conn->query($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function getRecords(&$arr)
{
    global $conn;
    $sql = "Select id, full_name, dob, father_name, class, address, city, school from Students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $arr[]= [
               $row["id"],
               $row["full_name"],
               $row["dob"],
               $row["father_name"],
               $row["class"],
               $row["address"],
               $row["city"],
               $row["school"]
            ];
        }
    } else {
        echo "0 results";
    }
}

function delete()
{
    global $conn;
    $id = $_GET["id"];
    $sql = "DELETE FROM Students WHERE id='$id'";
    
    if ($conn->query($sql) === true) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function search()
{
    global $conn;
    $name = $_POST["sname"];
    $sql = "Select id, full_name, dob, father_name, class, address, city, school from Students" .
        " where full_name LIKE CONCAT ('%', '$name', '%')";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $array[]= [
                $row["id"],
                $row["full_name"],
                $row["dob"],
                $row["father_name"],
                $row["class"],
                $row["address"],
                $row["city"],
                $row["school"]
            ];
        }
    } else {
        echo "0 results";
    }
    $_POST['array'] = $array;
}

function edit()
{
    $id = $_POST["id"];
    $name = (isset($_POST["name"]) && $_POST["name"]) ? $_POST["name"] : '';
    $dob = (isset($_POST["dob"]) && $_POST["dob"]) ? $_POST["dob"] : '';
    $fname = (isset($_POST["fname"]) && $_POST["fname"]) ? $_POST["fname"] : '';
    $class = (isset($_POST["class"]) && $_POST["class"]) ? $_POST["class"] : '';
    $address = (isset($_POST["address"]) && $_POST["address"]) ? $_POST["address"] : '';
    $city = (isset($_POST["city"]) && $_POST["city"]) ? $_POST["city"] : '';
    $school = (isset($_POST["school"]) && $_POST["school"]) ? $_POST["school"] : '';
    if ($name != '') {
        updateName($id, $name);
    }
    if ($dob != "") {
        updateDOB($id, $dob);
    }
    if ($fname != "") {
        updateFatherName($id, $fname);
    }
    if ($class != "") {
        updateFatherName($id, $class);
    }
    if ($address != "") {
        updateFatherName($id, $address);
    }
    if ($city != "") {
        updateFatherName($id, $city);
    }
    if ($school != "") {
        updateFatherName($id, $school);
    }
}

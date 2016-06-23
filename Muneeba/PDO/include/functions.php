<?php

function insert()
{
    global $DBH;
    $name = $_REQUEST["name"];
    $dob = $_REQUEST["dob"];
    $fathername = $_REQUEST["fname"];
    $class = $_REQUEST["class"];
    $address = $_REQUEST["address"];
    $city = $_REQUEST["city"];
    $school = $_REQUEST["school"];

    /*$sql = "INSERT INTO Students (full_name, dob, father_name, class, address, city, school)
    VALUES ('$name', '$dob', '$fathername', '$class', '$address', '$city', '$school')";
    //echo $sql;
    if ($DBH->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $DBH->error;
    }*/

    //using PDO
    $STH = $DBH->prepare("INSERT INTO Students (full_name, dob, father_name, class, address, city, school)
    VALUES (?, ?, ?, ?, ?, ?, ?)");
    $STH->bindParam(1, $name);
    $STH->bindParam(2, $dob);
    $STH->bindParam(3, $fathername);
    $STH->bindParam(4, $class);
    $STH->bindParam(5, $address);
    $STH->bindParam(6, $city);
    $STH->bindParam(7, $school);

    $STH->execute();
}

function updateName($id, $name)
{
    global $DBH;
    $sql = "UPDATE Students SET full_name='$name' WHERE id='$id'";
    if ($DBH->exec($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function updateDOB($id, $dob)
{
    global $DBH;
    $sql = "UPDATE Students SET dob='$dob' WHERE id='$id'";

    if ($DBH->exec($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function updateFatherName($id, $name)
{
    global $DBH;
    $sql = "UPDATE Students SET father_name='$name' WHERE id='$id'";

    if ($DBH->exec($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}
function updateClass($id, $class)
{
    global $DBH;
    $sql = "UPDATE Students SET class='$class' WHERE id='$id'";

    if ($DBH->exec($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}
function updateAddress($id, $addr)
{
    global $DBH;
    $sql = "UPDATE Students SET address='$addr' WHERE id='$id'";

    if ($DBH->exec($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $DBH->error;
    }
}
function updateCity($id, $city)
{
    global $DBH;
    $sql = "UPDATE Students SET city='$city' WHERE id='$id'";

    if ($DBH->exec($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}
function updateSchool($id, $school)
{
    global $DBH;
    $sql = "UPDATE Students SET school='$school' WHERE id='$id'";

    if ($DBH->exec($sql) === true) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function getRecords(&$arr)
{
    global $DBH;
    $sql = "Select id, full_name, dob, father_name, class, address, city, school from Students";
    $STH = $DBH->prepare($sql);
    $STH->execute();
    $STH->setFetchMode(PDO::FETCH_ASSOC);
    //$result = $DBH->query($sql);
    while ($row = $STH->fetch()) {
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
}

function delete()
{
    global $DBH;
    $id = $_GET["id"];
    $sql = "DELETE FROM Students WHERE id='$id'";
    
    if ($DBH->exec($sql) === true) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>";
    }
}

function search()
{
    global $DBH;
    $name = $_POST["sname"];
    $sql = "Select id, full_name, dob, father_name, class, address, city, school from Students" .
        " where full_name LIKE CONCAT ('%', '$name', '%')";
    $STH = $DBH->prepare($sql);
    $STH->execute();
    $STH->setFetchMode(PDO::FETCH_ASSOC);

    while ($row = $STH->fetch()) {
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
        updateClass($id, $class);
    }
    if ($address != "") {
        updateAddress($id, $address);
    }
    if ($city != "") {
        updateCity($id, $city);
    }
    if ($school != "") {
        updateSchool($id, $school);
    }
}

<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/14/16
 * Time: 3:18 AM
 */
require_once 'conf.php';

class DbFunction
{
    public function call()
    {
        //echo "call method called";
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
        if ($action == 'create') {
            echo "calling add()";
            $this->addrecord();
        } elseif ($action == 'delete') {
            $this->delete();
        } elseif ($action == 'update') {
            $this->update();
        } elseif ($action == 'search') {
            $this->searchRecords();
        }

    }

    public function getRecord()
    {
        //echo "Get record called";
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM cruddb.students WHERE id = $id";
        global $conn;
        $result = $conn->query($sql);
        return $result;
    }

    public function addrecord()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "yes method is POST!!!!!!!!!!";
            $fullname = $_POST['fullname'];
            $fathers_name = $_POST['fathername'];
            $class = $_POST['class'];
            $school = $_POST['school'];
            $city = $_POST['city'];
            $address = $_POST['address'];
            $date_of_birth = $_POST['dob'];
            // Validate Before adding to the database
            if (empty($fullname) || empty($fathers_name) || empty($class) || empty($school) || empty($city) || empty($address) || empty($date_of_birth)) {
                echo "Please fill all the fields!";
            } else {

                $sql = "INSERT INTO cruddb.students (full_name, fathers_name, class, dob, city, address, school)
                VALUES ('$fullname', '$fathers_name', '$class','$date_of_birth', '$city', '$address', '$school')";
                global $conn;
                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    header('Location: ../manage.php');
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            echo "method is not POST";
        }
    }

    public function delete()
    {
        //echo "delete Called";
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM cruddb.students WHERE id=$id";
        global $conn;
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
//            header('Location: ../manage.php');
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }

    public function update()
    {

        //echo "Update Called";
        $uid = $_REQUEST['uid'];
        echo "id is --------- " . $uid . " that was ";
        $fullname = $_POST['fullname'];
        $fathers_name = $_POST['fathername'];
        $class = $_POST['class'];
        $school = $_POST['school'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $date_of_birth = $_POST['dob'];

        if (empty($fullname) || empty($fathers_name) || empty($class) || empty($school) || empty($city) || empty($address) || empty($date_of_birth)) {
            echo "Please fill all the fields!";
        } else {


            $sql = "UPDATE  cruddb.students SET full_name='$fullname',
              fathers_name = '$fathers_name',
              class = '$class',
              dob = '$date_of_birth',
              city = '$city',
              address = '$address',
              school  = '$school'
              WHERE id = $uid ";
            global $conn;
            if ($conn->query($sql) === TRUE) {
                echo "Record updated successfully";
                header('Location: ../manage.php');
            } else {
                echo "Error updating record: " . $conn->error;
            }


        }


    }

    public function getAll()
    {
        //echo "getAll() Called  <br>";
        $sql = "SELECT * FROM cruddb.students";
        global $conn;
        $result = $conn->query($sql);

        return $result;
    }

    public function searchRecords()
    {
        $name = $_POST['name'];
        $sql = " SELECT * FROM cruddb.students WHERE full_name LIKE '%$name%'";
        global $conn;
        $result = $conn->query($sql);

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
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";

            echo "<td>{$row['id']}</td>";

            echo "<td>{$row['full_name']}</td>";

            echo "<td>{$row['fathers_name']}</td>";
            echo "<td>{$row['class']}</td>";
            echo "<td>{$row['dob']}</td>";
            echo "<td>{$row['city']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['school']}</td>";


            echo "</tr>";

        }

        echo "</table>";//end table
    }

//    }else{
//
//    //if database table is empty
//
//echo "No records found.";
//
//}
//


    //return $result;

    //}


}

$ob = new DbFunction();
$ob->call();
//$ob->getAll();

<!DOCTYPE html>
<html>
<head>
    <title>Manage page</title>
</head>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/9/16
 * Time: 5:14 AM
 *
 *
 * Performs operations to Insert and Delete data from database Practice
 */
class conf
{
    public $conn;

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "Practice";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function addRecord($name, $dob, $fname, $class, $address, $city, $school)
    {
        $sqlquery = "INSERT INTO students (name, dob, Father_Name, class, address, city, school)
                  VALUES ('$name', '$dob', '$fname', $class, '$address', '$city', '$school')";


        if ($this->conn->query($sqlquery) === TRUE) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sqlquery . "<br>" . $this->conn->error;
            return false;
        }

        $this->conn->close();
    }

    public function deleteRecord($id)
    {
        $sqlquery = "DELETE FROM students WHERE id = $id";

        if ($this->conn->query($sqlquery) === TRUE) {
            echo "Record # $id deleted successfully";
            return true;
        } else {
            echo "Error: " . $sqlquery . "<br>" . $this->conn->error;
            return false;
        }

        $this->conn->close();
    }

    public function viewRecord()
    {
        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);

        if( $result->num_rows > 0){

            echo "<table border='1'>";

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

            while($row = $result->fetch_assoc()) {
                echo "<tr>";

                echo "<td>{$row['id']}</td>";

                echo "<td>{$row['name']}</td>";

                echo "<td>{$row['Father_Name']}</td>";
                echo "<td>{$row['class']}</td>";
                echo "<td>{$row['dob']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['school']}</td>";


            echo "<td>";
            //$id = $row['id'];

            echo "<a href='editForm.php?id={$row['id']} name={$row['name']} fname={$row['Father_Name']} 
                   class={$row['class']} dob={$row['dob']} city={$row['city']} address={$row['address']}
                   school={$row['school']}'>Edit</a>";

            echo " / ";

            echo "<a href='deleteForm.php?id={$row['id']}&action=delete'>Delete</a>";

            echo "</td>";

            echo "</tr>";

        }

        echo "</table>";//end table

        }else{
            echo "No records found.";

        }
    }

    public function searchRecord($id)
    {
        echo $id;
        $sql = "SELECT id, name, Father_Name, dob, class, address, city, school FROM students WHERE id = $id";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "<table border='1'>";

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
                echo "<tr>";
                echo "<td>{$row['id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['Father_Name']}</td>";
                echo "<td>{$row['class']}</td>";
                echo "<td>{$row['dob']}</td>";
                echo "<td>{$row['city']}</td>";
                echo "<td>{$row['address']}</td>";
                echo "<td>{$row['school']}</td>";

            echo "</table>";
        } else {
            echo "0 results";
        }

        $this->conn->close();
    }

    public function editRecord($id, $name, $fname, $dob, $class, $address, $city, $school)
    {
        if ($name!=null) {
            
            $sql = "UPDATE students SET name=$name WHERE id=$id";
            $this->conn->query($sql);
        }

        if ($fname!=null) {
       
        $sql = "UPDATE students SET Father_Name=$fname WHERE id=$id";
        $this->conn->query($sql);
        }

        if ($dob!=null) {
            
            $sql = "UPDATE students SET dob=$dob WHERE id=$id";
            $this->conn->query($sql);
        }
            if ($class!=null) {
             
                $sql = "UPDATE students SET class=$class WHERE id=$id";
                $this->conn->query($sql);
            }

            if ($address!=null) {
                $sql = "UPDATE students SET address='$address' WHERE id=$id";
                $this->conn->query($sql);
            }

            if ($city!=null) {
                $sql = "UPDATE students SET city='$city' WHERE id=$id";
                $this->conn->query($sql);
            }

            if ($school!=null) {
                $sql = "UPDATE students SET school='$school' WHERE id=$id";
                $this->conn->query($sql);
            }

            if ($this->conn->query($sql) === TRUE) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $this->conn->error;
            }

        $this->conn->close();
    }
}

?>
</body>
</html>

 <?php
include 'config.php';
//header("http://localhost/training/Abdullah/task3/simple/li.php");

class db
{
    public $servername = "localhost";
    public $username = "root";
    public $password = "123";
    public $dbname = "NewDatabase";
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

// Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
       // echo "Connected successfully";
    }

    public function insert()
    {

  //      $dm=new sd;
        $a=$_POST['id'];
        $b=$_POST['name'];
        $c=$_POST['dob'];
        $d=$_POST['fname'];
        $e=$_POST['class'];
        $f=$_POST['address'];
        $g=$_POST['city'];
        $h=$_POST['school'];
        $sql = "INSERT INTO student 
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }

    public function delete()
    {


        $a=$_GET['id'];

        $sql = "DELETE FROM student WHERE id='$a'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";

            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
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
















    public function update()
    {
      
       $a=$_POST['id'];
        $b=$_POST['city'];
        $sql = "update student set city='$b' where id='$a'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }

    public function abf()
    {
        $sql = "SELECT * FROM student";
        $result = mysqli_query($this->conn, $sql);
      return $result;

    }


    public function search()
    {
        //$id=$_POST["id"];
/*        if ($id)
        {
            echo "yes";
        }
        else
        {
            echo "No";
        }*/
        $a=$_POST['id'];
        $sql = "SELECT * FROM student WHERE id=$a   ";
        $result = mysqli_query($this->conn, $sql);

        if (mysqli_num_rows($result) ) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "id: " . $row["id"]. " -  " . $row["name"]. " " . $row["dob"]." " .$row["father_name "]." " .$row["class"]." " .$row["address"]." " .$row["city"]." " .$row["school"]."<br>";
            }
        } else {
            echo "0 results";
        }}

    public function searcha()
    {
        $w=$_POST['id'];

       // echo .w;die();
        $sql = "SELECT * FROM student WHERE id = '$w'";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "<table border='1'>";

            //creating our table heading
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>DOB</th>";
            echo "<th>Father's Name</th>";
            echo "<th>Class</th>";

            echo "<th>Address</th>";


            echo "<th>City</th>";
            echo "<th>School</th>";

            echo "</tr>";
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['dob']}</td>";
            echo "<td>{$row['fname']}</td>";
            echo "<td>{$row['class']}</td>";
            echo "<td>{$row['address']}</td>";
            echo "<td>{$row['city']}</td>";
            echo "<td>{$row['school']}</td>";

            echo "</table>";
        } else {
            echo "0 results";
        }


 }
}
 $a=new db;
 if (isset($_REQUEST['action'])=='delete')
 {

    $a->delete();
     header('Location: http://localhost/training/Abdullah/task3/simple/li.php');

 }
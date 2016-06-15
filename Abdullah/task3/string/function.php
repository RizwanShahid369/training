 <?php
include 'config.php';

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
//        $dm=new sd;
        $a=$_POST['id'];
        $sql = "DELETE FROM student WHERE id='$a'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
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
        $id=$_POST["id"];
        $sql ="SELECT * FROM student where id='$id' ";


        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }


        echo "<table width=100%>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Gender</th>
</tr>";

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td> " . $row['id'] . "</a> </td>";
            echo "<td>" . $row['name'] .  "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['fname'] . "</td>";
            echo "<td> " . $row['class'] . "</a> </td>";
            echo "<td>" . $row['address'] .  "</td>";
            echo "<td>" . $row['city'] . "</td>";
            echo "<td>" . $row['school'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    }
 }

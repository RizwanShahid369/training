<b> Insert Data</b>   
    <form action="ab.php" method="post">

        <p>

            <label for="id">ID:</label>

            <input type="text" name="id" id="id">

        </p>

        <p>

            <label for="course">Course:</label>

            <input type="text" name="course" id="course">

        </p>

        <p>

            <label for="pno">PhoneNumber:</label>

            <input type="text" name="pno" id="pno">

        </p>
        <p>

            <label for="city">City:</label>

            <input type="text" name="city" id="city">

        </p>

        <input type="submit" value="Submit" onclick=insert() />

    </form>





 <?php
// Create connection

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
        echo "Connected successfully";
    }

    public function insert()
    {
$a=$_POST['id'];
$b=$_POST['course'];
$c=$_POST['pno'];
$d=$_POST['city'];
//$v=new db();
       $sql = "INSERT INTO Student 
VALUES ('$a','$b','$c','$d')";

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
$abd=$_POST['id'];
//$v=new db();
        $sql = "DELETE FROM Student WHERE id='$abd'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }
}

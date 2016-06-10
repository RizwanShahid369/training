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
//$v=new db();
        $sql = "INSERT INTO Student
        VALUES (20,'Maths', 0332456, 'chichawatni')";

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
//$v=new db();
        $sql = "DELETE FROM Student WHERE id=3";

        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }
}

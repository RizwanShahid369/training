<?php
//include'preparedinsert.php';

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "NewDatabase";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* $sql = "INSERT INTO Student
     VALUES (103, 'MATHS', 03333,'lAHORE')";
     // use exec() because no results are returned
     $dbh->exec($sql);
     echo "New record created successfully";
    */ }
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}




class Student
{
    public $id;
    public $course;
    public $phonenumber;
    public $city;

    function __construct($n, $a, $c, $d)
    {
        $this->id = $n;
        $this->course = $a;
        $this->phonenumber = $c;
        $this->city = $d;
    }
}

  /*  public function insert()
    {
*/

        $cathy = new Student(99  , 'Dark', 0333, 'Cardiff');


        $STH = $dbh->prepare("INSERT INTO Student (id, course,phonenumber,city) VALUES (:id, :course, :phonenumber, :city)");
        $STH->execute((array)$cathy);
        echo "date exevvcuted";

/*
$s=new Student();
echo $s->insert();

*/
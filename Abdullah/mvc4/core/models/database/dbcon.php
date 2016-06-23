<?php
//include 'criteria.php';

/**
 * Created by PhpStorm.
 * User: abdullah.ilyas
 * Date: 6/16/16
 * Time: 6:14 AM
 */
//ini_set('display_errors', 1);
class dbcon
{
    public $conn;
    public $sql;
    public $stmt;


    public function __construct()
    {

        $servername = "localhost";
        $username = "root";
        $password = "123";
        $dbname = "NewDatabase";
        //$crit=new criteria();

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            echo "Connected";
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // echo $sql . "<br>" . $e->getMessage();
        }

//    $conn = null;


    }

    public function prepare()
    {
        //global $prepare;
        //  echo $this->sql;
        $this->stmt = $this->conn->prepare($this->sql);
        //var_dump($this->stmt);
        //echo $string;
        //   echo $prepare;
        //return true;

    }

    public function bindselect($id1, $id2, $field1, $field2)
    {
        $this->stmt->bindParam($id1, $field1);
         $this->stmt->bindParam($id2, $field2);

        //return true;
    }

    public function bindupdate($v1, $v2, $field1, $field2)
    {
        $this->stmt->bindParam($v1, $field1);
         $this->stmt->bindParam($v2, $field2);

    }

    public function binddelete($id1, $field1)
    {
        $this->stmt->bindParam($id1, $field1);
    }

    public function execute()
    {
        $this->stmt->execute();

    }

    public function select($table, $field,$id,$city)
    {
        //$crit=new criteria();
        //global $string;
        $this->sql = "select $field from $table where $id=:id and $city=:city" ;
         $this->sql;
        //       return true;
    }

    public function update($table,$v1,$v2)
    {
        $this->sql = "update $table set $v2=:id where $v1=:city" ;
        $this->sql;
    }


    public function delete($table, $v1)
    {
        $this->sql = "delete from $table where $v1=:id";
        $this->sql;
    }

    public function between($table, $id1, $id2)
    {

         $this->sql = "select $id1 from $table where $id2 between :val1 and :val2";

    }

    public function bindbetween($name1, $name2, $val1, $val2)
    {
        $this->stmt->bindParam($name1, $val1);
         $this->stmt->bindParam($name2, $val2);
    }

    public function result()
    {
       // echo "There";
        while ($user = $this->stmt->fetch()) {
            echo $user['phonenumber'] . "\n";
            echo $user['Id'] . "\n";
            echo $user['Course'] . "\n";
            echo $user['city'] . "\n";
        }

    }
    public function resultset1()
    {
        while ($user = $this->stmt->fetch()) {
            echo $user['phonenumber'] . "\n";
        }

    }
    public function resultset2()
    {
        while ($user = $this->stmt->fetch()) {
            echo $user['username'] . "\n";
        }

    }



    public function selectall($table, $field)
    {

        $this->sql = "select $field from $table";
    }
    public function max($field1,$table)
    {

        echo  $this->sql="select max($field1) from $table";
    }



    public function min($field1,$table)
    {

        $this->sql="select min($field1) from $table";
    }
    public function selectone ($table,$field1,$field2)


    {

        $this->sql="select username from $table where $field1=:username  and $field2=:password";


    }

    public function count($field1,$table)
{

    $this->sql="select count($field1) from $table";
}
    public function insert($table,$val1,$val2,$val3,$val4)
    {
        echo $this->sql="insert into $table ($val1,$val2,$val3,$val4) values(:id,course,:phonenumber,:city)";


    }
    public function bindinsert($name1,$name2,$name3,$name4,$field1,$field2,$field3,$field4)
    {
        $this->stmt->bindParam($name1, $field1);
        $this->stmt->bindParam($name2, $field2);
        echo $this->stmt->bindParam($name3, $field3);
       echo  $this->stmt->bindParam($name4, $field4);
    }
    public function bindselectone($name1,$name2,$name3,$name4)
    {

        $this->stmt->bindParam($name1, $name3);
        $this->stmt->bindParam($name2, $name4);


    }


}






$db=new dbcon();
//$crit=new criteria();
//$crit->wherebetween("id");
//$db->between("Student","phonenumber",$crit);
//$db->bindbetween("id","id","6","20");
//$db->selectall("Student","*");

//$db->between("Student","id","id");

$db->selectone("login","username","password");

//$db->max("phonenumber","Student");
//$db->max("phonenumber","Student");
//$db->max("phonenumber","Student");
//$db->insert("Student","id","course","phonenumber","city");
//$db->select("Student","phonenumber","id","city");
//$db->update("Student","city","id" );
//$db->delete("Student","id");
//$db->deletegreater("Student","id");

$db->prepare();
//$db->bindbetween(':val1',':val2','6','20');
$db->bindselectone('username','password','abd',123);
//$db->bindinsert(':id',':course',':phonenumber',':city',26,'math',3223,'faslabas');


//$db->bindselect(':id',':city','10','laj');
//$db->bindupdate(':id',':city','10','laj');
//$db->binddelete(':id','9');
$db->execute();
$db->resultset2();


//echo "asds";
//$db->resultset1();

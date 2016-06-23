<?php



include ('dbcon.php');
class testDB extends PHPUnit_Framework_TestCase
{ 


 function __construct()
{
$this->obj = new crieteria();
$this->obDB = new dbcon();
//$this->fields = array("name", "dob", "Father_Name", "class", "address", "city", "school");
}

function delete()
{
//$this->obj->buildDeleteWhere("id");
//$this->assertEquals(null, $this->obDB->delete("Student", "id"));

$this->assertEquals(null, $this->obDB->delete("Student", "id"));
 $this->assertEquals(null, $this->obDB->Prepare());
$this->assertEquals(null, $this->obDB->binddelete(":id", 10));
$this->assertEquals(true, $this->obDB->Execute());

}
function selectall() {


$this->assertEquals(null, $this->obDB->selectall("Student", "*"));
$this->assertEquals(null, $this->obDB->Prepare());
$this->assertEquals(true, $this->obDB->Execute());
$this->assertEquals(true, $this->obDB->Result());
	
}


function update() {


$this->assertEquals(null, $this->obDB->update("Student","city","id" ));
$this->assertEquals(null, $this->obDB->Prepare());
$this->assertEquals(null, $this->bindupdate(':id',':city','10','laj'));
$this->assertEquals(true, $this->obDB->Execute());
$this->assertEquals(true, $this->obDB->Result());

}


function select() {


$this->assertEquals(null, $this->obDB->select("Student","phonenumber","id","city"));
$this->assertEquals(null, $this->obDB->Prepare());
$this->assertEquals(null, $this->obDB->bindselect(':id',':city','10','laj')) ;
$this->assertEquals(true, $this->obDB->Execute());
$this->assertEquals(true, $this->obDB->Result());
	
}

function insert() {


$this->assertEquals(null, $this->obDB->insert("Student","id","course","phonenumber","city"));
$this->assertEquals(null, $this->obDB->Prepare());
$this->assertEquals(null, $this->obDB->bindinsert(':id',':course',':phonenumber',':city',26,'math',3223,'faslabas'));
$this->assertEquals(true, $this->obDB->Execute());
$this->assertEquals(true, $this->obDB->Result());
	
}
 function between()
 {

  $this->assertEquals(null, $this->obDB->between("Student","id","id"));
  $this->assertEquals(null, $this->obDB->Prepare());
  $this->bindbetween(':val1',':val2','6','20');
  $this->assertEquals(true, $this->obDB->Execute());
  $this->assertEquals(true, $this->obDB->Result());

 }



}




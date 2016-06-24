<?php

include ('../core/models/database/dbcon.php');

class student// extends basemodel
{
    public function __construct()
    {
        
    }

    public function selectall()
    {
        echo "fff";
        //$obj = new crieteria();
       // $obj->buildWhereEqual();
        $obDB = new dbcon();
        $obDB->selectall("Student","*");
        $obDB->Prepare();
        //$obDB->bind(":id", 14, ":class", 77);
        $obDB->Execute();
        $obDB->result();
    }
    public function selectone()
    {
        //echo "1";
        //$obj = new crieteria();
        // $obj->buildWhereEqual();
        $db = new dbcon();
        $db->select("Student","phonenumber","id","city");
        $db->Prepare();
        $db->bindselect(':id',':city','10','laj');
        $db->Execute();
        $db->resultSet1();
    }
    public function update()
    {
        //echo "1";
        //$obj = new crieteria();
        // $obj->buildWhereEqual();
        $db = new dbcon();
        $db->update("Student","city","id" );
        $db->Prepare();
        $db->bindupdate(':id',':city','11','laj');
        $db->Execute();
        echo "Succesfully updated";
    }
    public function delete()
    {
        //echo "1";
        //$obj = new crieteria();
        // $obj->buildWhereEqual();
        $db = new dbcon();
        $db->delete("Student","id");
        $db->Prepare();
        $db->binddelete(':id','6');
        $db->Execute();
        echo "Succesfully deleted";
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: abdullah.ilyas
 * Date: 6/23/16
 * Time: 5:53 AM
 */



include ('../core/models/database/dbcon.php');

class login// extends basemodel
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
        $obDB->selectone("login",$_POST['user'],$_POST['pass']);
        $obDB->Prepare();
        $obDB->bind(":id", 14, $_POST[''], $_POST['']);
        $obDB->Execute();
        $obDB->resultset2();
    }}
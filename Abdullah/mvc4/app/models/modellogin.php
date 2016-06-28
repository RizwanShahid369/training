<?php
/**
 * Created by PhpStorm.
 * User: abdullah.ilyas
 * Date: 6/23/16
 * Time: 5:53 AM
 */



include ('../core/models/database/dbcon.php');

class modellogin// extends basemodel
{
    public function __construct()
    {
        echo "Model";
    }

    public function selectall()
    {
        echo "fff";
        //$obj = new crieteria();
        // $obj->buildWhereEqual();
        $obDB = new dbcon();
        $obDB->selectone("login","username","password");
        $obDB->Prepare();
        $obDB->bind('username', 'password', $_POST['user'], $_POST['pass']);
        $obDB->Execute();
        $obDB->resultset2();
    }


}
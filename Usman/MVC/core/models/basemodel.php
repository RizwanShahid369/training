<?php

include 'database/database.php';
include 'database/crieteria.php';

class basemodel
{
    public $modelName;
    public $columnNames;
    public $attributeNames;
    public $db;
    
    public function __construct()
    {

    }

    public function select($table)
    {
        $obDB = new database();
        $obDB->selectAll($table,"*");
        $obDB->Prepare();
        $obDB->Execute();
        $res = $obDB->resultSet();

        return $res;
    }

    public function insert($table, $data, $fields, $bField)
    {
        $obj = new crieteria();
        $obj->buildValues($bField);
        $obDB = new database();
        $obDB->insert($table,$fields, $obj);
        $obDB->Prepare();
        $obDB->bindInsert($data);
        $obDB->Execute();
    }
    
    public function delete($table, $v1)
    {
        $obj = new crieteria();
        $obj->buildDeleteWhere("id");
        
        $obDB = new database();
        $obDB->delete($table, $obj);
        $obDB->Prepare();
        $obDB->bindDelete(':id', $v1);
        $obDB->Execute();
    }
    public function update($table, $qStr, $data)
    {
        $obj = new crieteria();
        $obj->buildUpdateWhere("id");
        $obj->buildUpdateSet($qStr);

        $obDB = new database();
        $obDB->update($table, $obj);
        $obDB->Prepare();

        $obDB->bindUpdate($data);
        $obDB->Execute();
    }
    
    public function login($table, $fields, $id, $pass)
    {
        $obj = new crieteria();
        $obj->buildLoginWhere();

        $obDB = new database();
        $obDB->loginSelect($table, $fields, $obj);

        $obDB->Prepare();
        $obDB->bind(':id', $id, 'pass',$pass);
        $obDB->Execute();
        $res = $obDB->resultSet();
        
        if ($res== "N") {
            echo "Sorry, Invalid Details";
        }
        else {
            $u= $res[0]['id'];
            $p=$res[0]['Password'];

            if (isset($u) && !empty($p) && !empty($p)) {
                if ($u == $id && $p == $pass) {
                    echo 'You have entered valid user name and password';
                    return true;
                } else {
                    echo 'Wrong username or password';
                    return false;
                }
            }
        }
        }
    
    public function logsOutSession()
    {
        echo "Log Out ";
        session_start();
        unset($_SESSION["username"]);
        unset($_SESSION["pass"]);

        if(! isset($_SESSION["username"])) {
            echo "Session Destroyed \n";
        }

        if( isset($_COOKIE["name"])){
            unset($_COOKIE["name"]);
            echo "Cookie destrolyed";
        }

        session_destroy();
    }
}
?>
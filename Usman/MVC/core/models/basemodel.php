<?php

include 'database/database.php';

class basemodel
{
    public $modelName;
    public $columnNames;
    public $attributeNames;
    public $db;
    
    public function __construct()
    {

    }

    public function select()
    {
        $obj = new crieteria();
        $obj->buildWhereEqual();
        $obDB = new database();
        $obDB->select("students","*", $obj);
        $obDB->Prepare();
        $obDB->bind(":id", 33, ":class", 4);
        $obDB->Execute();
        $res = $obDB->resultSet();

        return $res;
    }

    public function insert($v1,$v2,$v3,$v4,$v5,$v6,$v7)
    {
        $fields = array("name", "dob", "Father_Name", "class", "address", "city", "school");
        $obj = new crieteria();
        $obj->buildValues();
        $obDB = new database();
        $obDB->insert("students",$fields, $obj);
        $obDB->Prepare();
        $obDB->bindInsert(':n', ':d', ':fn', ':cl', ':a', ':ci', ':sc', $v1,$v2,$v3,$v4,$v5,$v6,$v7);
        $obDB->Execute();
    }
    
    public function delete($v1)
    {
        $obj = new crieteria();
        $obj->buildDeleteWhere("id");
        $obDB = new database();
        $obDB->delete("students", $obj);
        $obDB->Prepare();
        $obDB->bindDelete(':id', $v1);
        $obDB->Execute();
    }
    public function update($id, $fields)
    {
        $obj = new crieteria();
        $obj->buildUpdateWhere("id");
        $obDB = new database();
        $obDB->update("students", 'class', $obj);
        $obDB->Prepare();
        $obDB->bindUpdate(':f', $fields, ':id', $id);
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
            $u= $res['id'];
            $p=$res['Password'];
            if (isset($u) && !empty($p) && !empty($p)) {
                if ($u == $id && $p == $pass) {
                    echo 'You have entered valid user name and password';
                    return true;
                } else {
                    $msg = 'Wrong username or password';
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
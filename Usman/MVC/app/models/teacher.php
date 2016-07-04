<?php

include '../core/models/basemodel.php';
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/28/16
 * Time: 12:55 AM
 */
class teacher extends basemodel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectFunction()
    {
        $res = $this->select("teacher");
        return $res;
    }

    public function insertFunction($var)
    {

        $data = [
            ':name'=> $var['name'],
            ':dept'=> $var['dept'],
            ':rank'=> $var['rank']
        ];

        $fields = array("name", "dept", "rank");
        $bField = ":name, :dept, :rank";
        $this->insert("teacher", $data, $fields, $bField);
    }

    public function deleteFunction($v1)
    {
        $this->delete("teacher",$v1);
    }

    public function editFunction ($var)
    {
        $qStr = "name = :name, dept = :dept, rank = :rank";
        $data = [
            ':id' => $var['id'],
            ':name' => $var['name'],
            ':dept' => $var['dept'],
            ':rank' => $var['rank']
        ];
        $this->update("teacher",$qStr, $data);
    }

    public function buildData($id, $var)
    {
        $data = [
            'id' => $id,
            'name' => $var['name'],
            'dept' => $var['dept'],
            'rank' => $var['rank']
        ];
        return $data;
    }
}
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

    public function insertFunction($v1,$v2,$v3)
    {
        $data = [
            ':name'=> $v1,
            ':dept'=> $v2,
            ':rank'=> $v3
        ];

        $fields = array("name", "dept", "rank");
        $bField = ":name, :dept, :rank";
        $this->insert("teacher", $data, $fields, $bField);
    }

    public function deleteFunction($v1)
    {
        $this->delete("teacher",$v1);
    }

    public function editFunction ($id, $n, $dept, $rank)
    {
        $qStr = "name = :name, dept = :dept, rank = :rank";
        $data = [
            ':id' => $id,
            ':name' => $n,
            ':dept' => $dept,
            ':rank' => $rank
        ];
        $this->update("teacher",$qStr, $data);
    }
}
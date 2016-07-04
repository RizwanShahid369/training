<?php

include '../core/models/basemodel.php';
class student extends basemodel
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectFunction()
    {
        $res = $this->select("students");
        return $res;
    }

    public function insertFunction($v1,$v2,$v3,$v4,$v5,$v6,$v7)
    {
        $data = [
            ':n'=> $v1,
            ':d'=> $v2,
            ':fn'=> $v3,
            ':cl' => $v4,
            ':a' => $v5,
            ':ci' => $v6,
            ':sc' => $v7
        ];
        $bField = ":n, :d, :fn, :cl, :a, :ci, :sc";
        $table= "students";
        $fields = array("name", "dob", "Father_Name", "class", "address", "city", "school");

        $this->insert($table, $data, $fields, $bField);
    }

    public function deleteFunction($v1)
    {
        $this->delete("students", $v1);
    }
    
    public function editFunction ($id, $n, $fn, $dob, $add, $school, $city)
    {
        $qStr = "name=:name, Father_Name=:Father_Name, dob=:dob, address=:address, school=:school, city=:city";
        $data = [
            ':id' => $id,
            ':name' => $n,
            ':Father_Name' => $fn,
            ':dob' => $dob,
            ':address' => $add,
            ':school' => $school,
            ':city' => $city
        ];
        $table = "students";
        $this->update($table, $qStr, $data);
    }
}
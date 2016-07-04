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

    public function insertFunction($data1)
    {
        $data = [
            ':n'=> $data1['name'],
            ':d'=> $data1['dob'],
            ':fn'=> $data1['fname'],
            ':cl' => $data1['class'],
            ':a' => $data1['address'],
            ':ci' => $data1['city'],
            ':sc' => $data1['school']
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
    
    public function editFunction ($var)
    {
        $qStr = "name=:name, Father_Name=:Father_Name, dob=:dob, address=:address, school=:school, city=:city";
        $data = [
            ':id' => $var['id'],
            ':name' => $var['name'],
            ':Father_Name' => $var['fname'],
            ':dob' => $var['dob'],
            ':address' => $var['address'],
            ':school' => $var['school'],
            ':city' => $var['city']
        ];
        $table = "students";
        $this->update($table, $qStr, $data);
    }

    public function buildData($id, $var)
    {
        $data = [
            'id' => $id,
            'name' => $var['name'],
            'fname' => $var['fname'],
            'dob' => $var['dob'],
            'city' => $var['city'],
            'address' => $var['address'],
            'school'=> $var['school']
        ];
        return $data;
    }
}
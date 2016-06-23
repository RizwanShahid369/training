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
        $res = $this->select();
        return $res;
    }

    public function insertFunction($v1,$v2,$v3,$v4,$v5,$v6,$v7)
    {
        $this->insert($v1,$v2,$v3,$v4,$v5,$v6,$v7);
    }

    public function deleteFunction($v1)
    {
        $this->delete($v1);
    }
    
    public function editFunction ($id, $fields)
    {
        $this->update($id, $fields);
    }
}
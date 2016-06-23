<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 5:47 AM
 */
interface ModelInterface
{
    public function insert($data);
    public function update($arr);
    public function delete($id);
    public function selectAll();
    public function selectBypk($id);
}
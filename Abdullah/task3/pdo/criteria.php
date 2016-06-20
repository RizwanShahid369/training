<?php
/**
 * Created by PhpStorm.
 * User: abdullah.ilyas
 * Date: 6/20/16
 * Time: 12:26 AM
 */
class criteria
{
    public $where;
    public $insert;
    public $whereb;

    public function selectwhere()
    {
        $this->where='id=:id and city=:city';
        return $this->where;
    }
    public function update()
    {
    
        $this->where='$v2=:id where $v1=:city';
        return $this->where;
    }
  
    public function wherebetween($b)
    {
        $this->whereb = "$b BETWEEN :val1 AND :val2";
        //return $this->whereb;
    }
    public function getbetween()
    {
        return $this->whereb;
    }


}
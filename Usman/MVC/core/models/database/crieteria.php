<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/21/16
 * Time: 5:22 AM
 */
class crieteria
{
    public $id;
    public $clas;
    public $where;

    public $whereLte;
    public $whereGte;
    public $whereBetween;
    public $orderBy;
    public $direction;

    public $values;
    public $delete;
    public $update;
    public $selectAll;
    public $pk;
    public $dPk;
    public $loginWhere;

    function __construct()
    {
        $this->id=14;
        $this->clas=12;
    }

    // Task 1

    public function buildWhereEqual()
    {
        $this->where = "id = :id AND class = :class";
    }

    // Task 2

    public function buildLoginWhere()
    {
        $this->loginWhere = "id = :id AND Password = :pass";
    }

    public function setWhereLte($lte)
    {
        $this->whereLte = "$lte <= :$lte";
    }

    public function setWhereGte($gte)
    {
        $this->whereGte = "$gte >= :$gte";
    }

    public function setWhereBetween($bet)
    {
        $this->whereBetween = "$bet BETWEEN :val1 AND :val2";
    }

    public function setDirection($dir)
    {
        $this->direction = $dir;
    }

    public function getWhereLte()
    {
        return $this->whereLte;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function getWhereGte()
    {
        return $this-> whereGte;
    }

    public function getWhereBetween()
    {
        return $this->whereBetween;
    }

    public function setOrderBy($col)
    {
        $this->orderBy = "$col " . $this->getDirection();
    }

    public function getOrderBy()
    {
        return $this->orderBy;
    }

    public function buildValues()
    {
        $this->values = "VALUES (:n, :d, :fn, :cl, :a, :ci, :sc)";
        return $this->values;
    }

    public function buildDeleteWhere($del)
    {
        $this->delete = "$del >= :$del";
    }

    public function getDeleteWhere()
    {
        return $this->delete;
    }

    public function buildUpdateWhere($id)
    {
        $this->update = "$id = :$id";
    }

    public function getUpdateWhere()
    {
        return $this->update;
    }

    public function buildPKWhere($id)
    {
        $this->pk = "$id = :$id";
    }

    public function getPK()
    {
        return $this->pk;
    }

    public function buildDeletePKWhere($id)
    {
        $this->dPk = "$id = :$id";
    }

    public function getDeletePKWhere()
    {
        return $this->dPk;
    }
}
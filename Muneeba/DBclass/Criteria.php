<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/16/16
 * Time: 6:24 AM
 */

namespace DBclass;

class Criteria
{
    private $select;
    private $limit;
    private $where;
    private $groupby;
    private $having;
    //public $array;
    /**
     * @return mixed
     */
    public function __construct()
    {

    }

    public function getGroupby()
    {
        return $this->groupby;
    }

    /**
     * @return mixed
     */
    public function getHaving()
    {
        return $this->having;
    }

    /**
     * @return mixed
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return mixed
     */
    public function getSelect()
    {
        return $this->select;
    }

    /**
     * @return mixed
     */
    public function getWhere()
    {
        return $this->where;
    }

    /**
     * @param mixed $groupby
     */
    public function setGroupby($groupby)
    {
        $this->groupby = $groupby;
    }

    /**
     * @param mixed $having
     */
    public function setHaving($having)
    {
        if (isset($this->groupby)) {
            $this->having = $having;
        }

    }

    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @param mixed $select
     */
    public function setSelect($select)
    {
        echo "now here";
        $this->select = $select;
    }

    /**
     * @param mixed $where
     */
    public function setWhere($where)
    {
        $this->where = $where;
    }

    public function whereAND($column, $value)
    {
        $this->where = $this->where . " AND $column = '$value;'";

    }

    public function whereOR($column, $value)
    {
        $this->where = $this->where . " OR $column = '$value'";
    }

    public function whereIN($column, $array)
    {
        $this->where = $this->where . " AND $column IN $array";

    }

    public function whereLike($column, $value)
    {
        $this->where = $this->where . " AND $column LIKE CONCAT ('%', '$value', '%')";

    }

    public function setWhereEquals($column, $value)
    {
        $this->where = "$column = '$value'";
    }
}
    /*public function whereEquals($column, $value)
    {
        $this->where = "$column = ':value'";
        $this->array += array($column => '$value');
    }*/

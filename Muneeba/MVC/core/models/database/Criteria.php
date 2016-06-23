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
    private $select = '*';
    private $limit;
    private $where;
    private $groupby;
    private $having;
    private $orderby;
    private $tableName;
    private $join;
    //public $whereParams;
    public $insertValues;
    public $setValue;
    public $pk;


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

    public function getTableName()
    {
        return $this->tableName;
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
    public function getJoin()
    {
        return $this->join;
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
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->orderby;
    }

    public function setTableName($table)
    {
        $this->tableName = $table;
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
    public function havingEquals($column, $value)
    {
        if (isset($this->groupby)) {
            $this->having = "$column = $value";
        }
    }
    public function havingAND()
    {
        $this->having = $this->having . " AND ";

    }

    public function havingLTE($column, $value)
    {
        $this->having = $this->having . " $column <= $value";

    }

    public function havingGTE($column, $value)
    {
        $this->having = $this->having . " $column >= $value";

    }

    public function havingBETWEEN($column, $value1, $value2)
    {
        $this->having = $this->having . " $column BETWEEN $value1 AND $value2";

    }

    public function havingOR()
    {
        $this->having = $this->having . " OR";
    }

    public function havingIN($column, $array)
    {
        $this->having = $this->having . " $column IN $array";

    }

    public function havingLike($column, $value)
    {
        $this->having = $this->having . " $column LIKE CONCAT ('%', $value, '%')";

    }


    /**
     * @param mixed $limit
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
    }

    /**
     * @param mixed $limit
     */
    public function setOrderBy($order, $sort)
    {

        $this->orderby = $order;
        for ($i=1; $i<count($order); $i++) {
            $this->orderby = $this->orderby . ', ' . $order[$i];
        }
        echo count($sort);
        if (count($sort) > 0) {
            $this->orderby= $this->orderby .  " $sort;";
        }

    }
    /**
     * @param mixed $select
     */
    public function setSelect($select)
    {
        if (count($select) == 1) {
            $this->select = $select;
        } else {
            $this->select = $this->select . ", " . $select;
        }

    }

    /**
     * @param mixed $where
     */


    public function whereAND()
    {
        $this->where = $this->where . " AND ";

    }

    public function whereLTE($column, $value)
    {
        $this->where = $this->where . " $column <= $value";

    }

    public function whereGTE($column, $value)
    {
        $this->where = $this->where . " $column >= $value";

    }

    public function whereBETWEEN($column, $value1, $value2)
    {
        $this->where = $this->where . " $column BETWEEN $value1 AND $value2";

    }

    public function whereOR()
    {
        $this->where = $this->where . " OR";
    }

    public function whereIN($column, $array)
    {
        $this->where = $this->where . " $column IN $array";

    }

    public function whereLike($column, $value)
    {
        $this->where = $this->where . " $column LIKE CONCAT ('%', $value, '%')";

    }
    public function whereEquals($column, $value)
    {
        if(is_numeric($value)) {
            echo "here";
            $this->where = $this->where . " $column = $value";
        } else {
            $this->where = $this->where . " $column = '$value'";
        }


        //var_dump($this->where);
        /*$this->where = "$column = :$column";
        $this->whereParams[]= [$column => $value];
        print_r($this->whereParams);*/
    }

    public function setJoin($type, $table2, $fktable1, $fktable2)
    {
        $this->join = $this->join . " $type $table2 ON $this->tableName.$fktable1 = $table2.$fktable2 ";
    }
}

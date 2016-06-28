<?php
//error_reporting(E_ALL);
error_reporting(E_ERROR | E_WARNING | E_PARSE);
ini_set("display_errors", "On");

/**
 * sets the criteria for the query and provide getters for that 
 * Class Criteria
 */
class Criteria
{

    /**
     * Stores the select list columns
     *
     * @var string
     */
    private $select_list;
    /**
     * stores the where clause
     *
     * @var string
     */
    private $where_clause;
    /**
     * Stores the order by clause
     *
     *
     * @var string
     */
    private $orderBy;
    /**
     * stores the groupby by clause
     *
     * @var string
     */
    private $groupBy;
    /**
     * stores the having clause
     *
     * @var string
     */
    private $having;

    // public $columns;
    //where caluse using Array()

    /*  public function where($arr = array())
      {
          $this->where_clause = '';
          if (!empty($arr)) {
              foreach ($arr as $key => $value) {
                  $this->where_clause .= $key .'='.$value;
              }

          } else {

          }

      }*/

    /**
     * @param mixed $groupBy
     */
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;
    }

    /**
     * @return mixed
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }

    /**
     * @param mixed $having
     */
    public function havingEqual($column, $value)
    {
        if (isset($this->groupBy)) {
            $this->having = "  $column = $value ";
        }
    }

    /**
     * concate AND to the having clause
     *
     */
    public function havingAnd()
    {
        $this->having .= " AND ";
    }

    /**
     *  having less than equal to
     *
     * @param $col
     * @param $value
     */
    public function havingLte($col, $value)
    {
        $this->having .= "$col <= $value ";
    }

    /**
     *  having greater than equals to
     *
     * @param $col
     * @param $value
     */
    public function havingGte($col, $value)
    {
        $this->having .= "$col >= $value";
    }

    /**
     * having between $value1 AND $value2
     * @param $col
     * @param $value1
     * @param $value2
     */
    public function havingBetween($col, $value1, $value2)
    {
        $this->having .= " $col BETWEEN $value1 AND $value2 ";
    }

    /**
     * Concats OR to the having clause
     *
     */
    public function havingOR()
    {
        $this->having .= " OR ";
    }

    /**
     * return having clause
     *
     * @return mixed
     */
    public function getHaving()
    {
        return $this->having;
    }

    /**
     * Where $column less than equals to $value
     * @param $column
     * @param $value
     */
    public function whereLte($column, $value)
    {
        $this->where_clause .= " $column <= $value";
    }

    /**
     * where $column grater than equals to $value
     *
     * @param $column
     * @param $value
     */
    public function whereGte($column, $value)
    {
        $this->where_clause .= " $column >= $value";
    }

    /**
     * Appends AND to the where clause
     */
    public function whereAND()
    {
        $this->where_clause .= " AND ";
    }

    /**
     * where $column BETWEEN $value1 AND $value2
     * @param $column
     * @param $value1
     * @param $value2
     */
    public function whereBetween($column, $value1, $value2)
    {
        $this->where_clause .= "$column BETWEEN $value1 AND $value2";
    }

    /**
     * Where $column Equals $value
     *
     * @param $column
     * @param $value
     */
    public function whereEqual($column, $value)
    {
        if (is_int($value)) {
            $this->where_clause .= "$column = $value";
        } else {
            $this->where_clause .= " $column = " . "'" . $value . "'";
        }
    }

    /**
     * Appends OR to the Where clause
     *
     */
    public function whereOR()
    {
        $this->where_clause .= " OR ";
    }

    /**
     * Where $column
     * @param $column
     * @param $value
     */
    /*  public function where($column, $value)
      {
          if (is_int($value)) {
              $this->where_clause .= "$column = $value";
          } else {
              $this->where_clause .= "$column = "."'".$value. "'";
          }
      }*/
    /* public function orderBy($column = array(), $order)
     {
         $temp = '';
         if (!empty($column)) {
             foreach ($column as $item) {
                 $temp = $temp." $item ,";
             }
              $temp= rtrim($temp,',');
             $this->orderBy .= "ORDER BY $temp $order";
             //var_dump($column);
             //echo $this->orderBy;

         }
     }*/
    /**
     * Order by the result on the bases of $column and $order_type
     *
     * @param $column
     * @param $order_type
     */
    public function orderBy($column, $order_type)
    {
        $this->orderBy .= "$column $order_type";
    }

    /**
     * @return mixed
     */
    /**
     * returns order by Clause
     *
     * @return string
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * sets the Select list column
     *
     * @param string $columns
     */
    public function setColumns($columns = "*")
    {
        //$sql = '';
        if ($columns == "*") {
            $this->select_list = '*';
        } elseif (!empty($columns)) {
            foreach ($columns as $item) {

                $this->select_list .= $item . ',';
            }
            $this->select_list = rtrim($this->select_list, ',');
        }
//            echo "column set to ".$this->getColumns(); die;

    }

    /**
     * sets the update column list
     *
     * @param array $col
     */
    public function updateColumn($col = array())
    {
        if (!empty($col)) {
            foreach ($col as $key => $value) {
                $this->select_list .= "$key =  " . "'" . $value . "',";
            }
        }
        $this->select_list = rtrim($this->select_list, ',');
    }

    /**
     * returns the update column list
     *
     * @return string
     */
    public function getUpdateColumn()
    {
        return $this->select_list;
    }

    /**
     * returns the where clause
     *
     * @return string
     */
    public function getWhereClause()
    {
        return $this->where_clause;
    }

    /**
     * returns the Select list columns
     * @return string
     */
    public function getColumns()
    {
        return $this->select_list;
    }
}
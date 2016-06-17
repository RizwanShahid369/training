<?php
/**
 * Created by PhpStorm.
 * User: muneeba.mughal
 * Date: 6/17/16
 * Time: 1:25 AM
 */
namespace DBclass;
use PHPUnit_Framework_TestCase;

require 'DB.php';

class DBTest extends PHPUnit_Framework_TestCase
{
    //$object to make an instance of the DB class
    private $object;

    /**
     * Constructor to assign $object an instance of the DB class
     *
     *
     */
    public function __construct()
    {
        $this->object = new DB();
    }

    /**
     * Validates if the select function is selecting the values from the DB correctly
     *
     * true is the actual outcome
     */
    public function testSelect()
    {
        $criteria = new Criteria();
        $criteria->setSelect('*');
        $criteria->setWhereEquals('full_name', 'Muneeba');
        $table = 'Students';
        $this->assertEquals(true, $this->object->select($table, $criteria));
    }

    /**
     * Validates if the execute is executing the statement  correctly
     *
     * true is the actual outcome
     */
    public function testExecute()
    {
        $this->assertEquals(true, $this->object->execute());
    }

    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * true is the actual outcome
     */
    public function testResultSet(&$arr)
    {
        $this->assertEquals(true, $this->object->db->resultSet($arr));
    }
}
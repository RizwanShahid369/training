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
     *
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     */
    public function testSelect()
    {
        $criteria = new Criteria();
        $criteria->setSelect('*');
        $criteria->whereEquals('full_name', 'Muneeba');
        $criteria->setTableName('Students');
        $this->assertEquals(null, $this->object->select($criteria));
    }

    /**
     * Validates if the execute is executing the statement  correctly
     *
     * true is the actual outcome
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     */
    public function testExecute()
    {
        $this->assertEquals(null, $this->object->execute());
    }

    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testResultSet()
    {
        $arr = array();
        $this->assertEquals(null, $this->object->resultSet($arr));
    }
    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testinsert()
    {
        $criteria = new Criteria();
        $criteria->setTableName('Students');
        $criteria->insertValues = [
            'full_name' => "'Somebody'",
            'father_name' => "'Nobody'"
        ];
        $this->assertEquals(null, $this->object->insert($criteria));

    }

    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testUpdate()
    {
        $criteria = new Criteria();
        $criteria->setTableName('Students');
        $criteria->insertValues = [
            'full_name' => "'Somebody'",
            'father_name' => "'Nobody'"
        ];
        $criteria->whereEquals('id', 14);
        $this->assertEquals(null, $this->object->update($criteria));

    }
    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testDelete()
    {
        $criteria = new Criteria();
        $criteria->setTableName('Students');
        $criteria->whereEquals('id', 14);
        $this->assertEquals(null, $this->object->delete($criteria));
    }

    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testDeleteOne()
    {
        $criteria = new Criteria();
        $criteria->setTableName('Students');
        $criteria->pk =14;
        $this->assertEquals(null, $this->object->deleteOne($criteria));
    }
    /**
     * Validates if the resultset is providing the desired output  correctly
     *
     * @backupGlobals disabled
     * @backupStaticAttributes disabled
     * true is the actual outcome
     */
    public function testSelectOne()
    {
        $criteria = new Criteria();
        $criteria->setTableName('Students');
        $criteria->pk =14;
        $this->assertEquals(null, $this->object->selectOne($criteria));
    }
}

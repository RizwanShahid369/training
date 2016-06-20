<?php

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/17/16
 * Time: 8:21 AM
 *
 * Test Class which tests the DB Class and its functions
 */
include ('DB.php');

class testDB extends PHPUnit_Framework_TestCase
{
    function __construct()
    {
        $this->obj = new crieteria();
        $this->obDB = new DB();
        $this->fields = array("name", "dob", "Father_Name", "class", "address", "city", "school");
    }

    /*
     * Tests whether select, prepare, bind, execute and resultset returns
     * null, null,null,true, null
     */
    function testSelect()
    {
        $this->obj->buildWhereEqual();
        $this->assertEquals(null, $this->obDB->select("students","*", $this->obj));
        $this->assertEquals(null, $this->obDB->Prepare());
        $this->assertEquals(null, $this->obDB->bind(":id", 10, ":class", 8));
        $this->assertEquals(true, $this->obDB->Execute());
        $this->assertEquals(null, $this->obDB->resultSet());
    }

    /*
     * Tests whether insert, prepare, bind, execute and resultset returns
     * null, null,null,true, null
     */

    function testInsert()
    {
        $this->obj->buildValues();
        $this->assertEquals(null, $this->obDB->insert("students",$this->fields,$this->obj));
        $this->assertEquals(null, $this->obDB->Prepare());
        $this->assertEquals(null, $this->obDB->bindInsert(':n', ':d', ':fn', ':cl', ':a', ':ci', ':sc', "khan", "10", "Jkhan", 25, "slh", "lh", "hmh"));
        $this->assertEquals(true, $this->obDB->Execute());
        $this->assertEquals(null, $this->obDB->resultSet());
    }

    /*
     * Tests whether update, prepare, bind, execute and resultset returns
     * null, null,null,true, null
     */

    function testUpdate()
    {
        $this->obj->buildUpdateWhere("id");
        $this->assertEquals(null, $this->obDB->update("students","class", $this->obj));
        $this->assertEquals(null, $this->obDB->Prepare());
        $this->assertEquals(null, $this->obDB->bindUpdate('f',77,':id', 14));
        $this->assertEquals(true, $this->obDB->Execute());
        $this->assertEquals(null, $this->obDB->resultSet());
    }

    /*
     * Tests whether delete returns
     * null
     */

    function delete()
    {
        $this->obj->buildDeleteWhere("id");
        $this->assertEquals(null, $this->obDB->delete("students", $this->obj));
    }

    /*
     * Tests whether selectAll
     * null
     */

    function testSelectAll()
    {
        $this->assertEquals(null ,$this->obDB->selectAll("students", "*"));
    }
}
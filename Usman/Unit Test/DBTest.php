<?php

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/8/16
 * Time: 5:46 AM
 *
 * Contains class DBTest including DBClass for usage extending PHPUnit_Framework_TestCase
 */
include 'DBClass.php';

/*
 * Prefoms testing of DBClass for Insertion and Deletion
 */

class DBTest extends PHPUnit_Framework_TestCase
{
    /*
     * Contrutor to create object of DB Class
     * @var $object DBClass Object of DB Class
     */

    public function __construct()
    {
        $this->object = new DBClass();
    }

    /*
     * Method verify whether record is inserted or not
     * Method assertEquals takes expected value and calls method insertrecord
     *
     * @var $expect bool Expected value of test case
     *
     * @return bool
     */

    public function testInsert()
    {
        $expect = true;
        $this->assertEquals($expect, $this->object->insertRecord(1, 2, 3, 4));
    }

    /*
   * Method verify whether record is Deleted or not.
   * Method assertEquals takes expected value and calls method deleteRecord
   *
   * @var $expect bool Expected value of test case
   *
   * @return bool
   */

    public function testDelete()
    {
        $expect = true;
        $this->assertEquals($expect, $this->object->deleteRecord(3));
    }
}

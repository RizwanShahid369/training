<?php

namespace DB_Access;

/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/9/16
 * Time: 6:13 AM
 */
require 'DBAccess.php';

class DBAccessTest extends PHPUnit_Framework_TestCase
{
    //$object to make an instance of the DBAccess class
    private $object;

    /**
     * Constructor to assign $object an instance of the DBAccess class
     *
     *
     */
    public function __construct()
    {
        $this->object = new DBAccess();
    }

    /**
     * Validates if the insert function is inserting the values in the DB correctly
     *
     * true is the actual outcome
     */
    public function insertTest()
    {
        $this->assertEquals(true, $this->object->insert('Ali','Khan',22,'A'));
    }

    /**
     * Validates if the delete function is deleting the record
     * with id=1 in the DB correctly
     *
     * true is the actual outcome
     */
    public function deleteTest()
    {
        $this->assertEquals(true, $this->object->delete(1));
    }
}
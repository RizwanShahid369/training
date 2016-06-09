<?php
//namespace unit;
include 'Db.php';
/**
* Class Unit for testing arithmativ functions
*/


class Unit extends PHPUnit_Framework_TestCase
{
    /**
    * Check if expected result maatches the actual result for addition

    */
    public function testUsername()
    {
        $testObject = new db();

        $this->assertEquals(true, $testObject->insert());
        $this->assertEquals(true, $testObject->delete()); 
    

    }
    
}

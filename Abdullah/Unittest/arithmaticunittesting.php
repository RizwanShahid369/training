<?php
//namespace unit;
include 'arth.php';
/**
* Class Unit for testing arithmativ functions
*/


class Unit extends PHPUnit_Framework_TestCase
{
    /**
    * Check if expected result maatches the actual result for addition

    */
    public function testAdd()
    {
        $testObject = new arithmetic\Arithmetic();

        $this->assertEquals(6, $testObject->add(3, 3));

    }
    /**
    * Check if expected result maatches the actual result for subtraction
    *
    */

    public function testSubtract()
    {
        $testObject = new arithmetic\Arithmetic();

        $this->assertEquals(0, $testObject->sub(3, 3));

    }
    /**
    * Check if expected result maatches the actual result for multiplication
    *
    */

    public function testMultiplication()
    {
        $testObject = new arithmetic\Arithmetic();

        $this->assertEquals(9, $testObject->mul(3, 3));

    }
    /**
    * Check if expected result maatches the actual result for division
    *
    */

    public function testDivision()

    {
        $testObject = new arithmetic\Arithmetic();

        $this->assertEquals(1, $testObject->div(3, 3));

    }
}

<?php

require_once 'arithmatic.php';
/**
 * Class TestArithmatic Performs unit Test
 *
 */
class TestArithmatic extends PHPUnit_Framework_TestCase
{

    private $arithmatic;

    /**
     *Initialize the Arithmatic instance
     *
     */
    public function setUp()
    {
        $this->arithmatic = new DemoProject\Arithmatic();
    }

    /**
     *Performs test on Sum operation
     *
     */
    public function testSum()
    {
        $expected = 7;
        $actual = $this->arithmatic->sum(2, 5);
        $this->assertEquals($expected, $actual);
    }

    /**
     * Performs test on Subtract operation
     *
     */
    public function testSubtract()
    {
        $expected = 5;
        $actual = $this->arithmatic->subtract(15, 10);
        $this->assertEquals($expected, $actual);
    }

    /**
     * Performs test on Multiplication
     *
     */
    public function testMultiply()
    {
        $expected = 10;
        $actual = $this->arithmatic->multiply(2, 5);
        $this->assertEquals($expected, $actual);
    }

    /**
     * Performs test on Division Operation
     *
     */
    public function testDivide()
    {
        $expected = 5;
        $actual = $this->arithmatic->divide(10, 2);
        $this->assertEquals($expected, $actual);
    }
}

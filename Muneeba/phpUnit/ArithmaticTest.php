<?php

namespace Vendor\Package;

require 'Arithmatic.php';

/*                                                                        *
 * This script is written by Muneeba Mughal                               *
 *                                                                        *
 * Practice code to implement phpUnit and phpDoc                          *
 * Simple ArithmaticTest class to implement unit Testing on Arithmatic    *
 * class.                                                                 */


class ArithmaticTest extends PHPUnit_Framework_TestCase
{
    /**
     * Validates if the addition function is returning the sum correctly
     *
     * 5 is the actual outcome
     */
    public function testAddition()
    {
        $var1=3;
        $var2=2;
        $object= new Arithmatic();
        $this->assertEquals(5, $object->addition($var1, $var2));
    }

    /**
     * Validates if the suntraction function is returning the difference correctly
     *
     * 1 is the actual outcome
     */
    public function testSubtraction()
    {
        $var1=3;
        $var2=2;
        $object= new Arithmatic();
        $this->assertEquals(1, $object->subtraction($var1, $var2));
    }

    /**
     * Validates if the multiplication function is returning the product correctly
     *
     * 6 is the actual outcome
     */
    public function testMultiplication()
    {
        $var1=3;
        $var2=2;
        $object= new Arithmatic();
        $this->assertEquals(6, $object->multplication($var1, $var2));
    }

    /**
     * Validates if the division function is returning the quotient correctly
     *
     * 1 is the actual outcome
     */
    public function testDivision()
    {
        $var1=3;
        $var2=3;
        $object= new Arithmatic();
        $this->assertEquals(1, $object->division($var1, $var2));
    }
}

<?php
/**
 * Contains class ArithmeticTest under namespace arithmeticTest
 * extending PHPUnit_Framework_TestCase including Arithmetic.php
 *
 * @author Muhammad Usman Khan
 */
namespace A_arithmeticTest;

include 'Arithmetic.php';

/**
 * We are implementing it just to practice PHP Unit Testing of Arithmetic operations
 * such as addition,subtraction,division,multiplication.
 *
 */

class ArithmeticTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var integer $v1 This variable is operand 1 to for arithmetic operation
     * @var integer $v2 This variable is operand 2 to for arithmetic operation
     * @var arithmetic $object This variable is object of arithmetic class
     */
    public $object;
    public $v1;
    public $v2;

    /**
     * Construtor Instantiating object to call methods of arithmetic class
     */

    public function __construct()
    {
        $this->object = new Arithmetic();
    }

    /**
     * Function verifies the output of addition (resutl should be 3)
     * @var integer $v1 contains value 1
     * @var integre $v2 contains value 2
     *
     * @param 3 Expected output
     * @param $this->object->addition($v1, $v2) Ouput of function
     *
     * @return bool true = OK
     */

    public function testAdd()
    {
        $v1 = 1;
        $v2 = 2;

        $this->assertEquals(3, $this->object->addition($v1, $v2));
    }

    /**
     * Function verifies the output of Subtraction (Resutl should be 2)
     * @var integer $v1 contains value 4
     * @var integre $v2 contains value 2
     *
     * @param 2 Expected output
     * @param $this->object->subtraction($v1, $v2) Ouput of function
     *
     * @return bool true = OK
     */

    public function testSubtract()
    {
        $v1 = 4;
        $v2 = 2;

        $this->assertEquals(2, $this->object->subtraction($v1, $v2));
    }

    /**
     * Function verifies the output of multiplication (resutl should be 2)
     *
     * @var integer $v1 contains value 1
     * @var integre $v2 contains value 2
     *
     * @param 2 Expected output
     * @param $this->object->multiplication($v1, $v2) Ouput of function
     *
     * @return bool true = OK
     */

    public function testMultiply()
    {
        $v1 = 1;
        $v2 = 2;

        $this->assertEquals(2, $this->object->multiplication($v1, $v2));
    }

    /**
     * Function verifies the output of division (resutl should be 2)
     *
     * @var integer $v1 contains value 1
     * @var integre $v2 contains value 2
     *
     * @param 2 Expected output
     * @param $this->object->division($v1, $v2) Ouput of function
     *
     * @return bool true = OK
     */

    public function testDivide()
    {
        $v1 = 4;
        $v2 = 2;

        $this->assertEquals(2, $this->object->division($v1, $v2));
    }
}

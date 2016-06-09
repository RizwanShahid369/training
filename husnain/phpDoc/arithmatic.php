<?php
/**
 *Contains class Arithmatic under namespace DemoProject
 *
 */
namespace DemoProject;

/**
 * Class Arithmatic performs arithmetic operation on two operands
 *
 * Arithmetic operations includes Addition, Subtraction, Multiplication, Division
 *
 * @package DemoProject
 */
class Arithmatic
{
    /**
     * performs addition.
     * 
     * @param integer $n1 first input value for addition operation.
     * @param integer $n2 second input value for addition operation.
     * 
     * @return integer
     */
    public function sum($n1, $n2)
    {
        if (is_int($n1) && is_int($n2)) {
            return $n1+$n2;
        } else {

            echo '<br>Both operand should be Integer';
            return false;
        }
    }

    /**
     * performs subtraction.
     *
     * @param integer $n1  first input value for subtraction operation.
     * @param integer $n2  second input value for subtraction operation.
     *
     * @return integer
     */
    public function subtract($n1, $n2)
    {
        if (is_int($n1) && is_int($n2)) {
            return $n1-$n2;
        } else {

            echo '<br>Both Operand should be Integer';
            return false;
        }
    }

    /**
     * performs division.
     *
     * @param integer $n1 first input value for division operation.
     * @param integer $n2 second input value for division operation.
     *
     * @return float
     */
    public function divide($n1, $n2)
    {
        if ($n2 !== 0) {
            if (is_int($n1) && is_int($n2)) {
                return $n1/$n2;
            } else {

                echo '<br>Both numbers should be Integer';
                return false;
            }
        } else {

            echo '<br>Second Operand should be integer and greater than zero';
            return false;
        }


    }

    /**
     * performs multiplication.
     *
     * @param integer $n1 first input value for multiplication operation.
     * @param integer $n2 second input value for multiplication operation.
     *
     * @return integer
     */
    public function multiply($n1, $n2)
    {
        if (is_int($n1) && is_int($n2)) {
            return $n1*$n2;
        } else {
            echo '<br>Both numbers should be Integer';
            return false;
        }
    }
}

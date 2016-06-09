<?php
/**
 *
 */
namespace A_arithmetic;

/**
 * This is just a practice task
 * @author Muhammad Usman Khan
 * We are implementing it just to practice doccumentation PHP Unit Testing and coding standards.
 * the variables are used for functionality
 */
class Arithmetic
{
    /**
    * This function Subtracts two numbers variable_1 and variable_2
    * and store its result in subtract_result
    * This function checks whether operands are numeric or not
    *
    * @param $variable_1
    * @param $variable_2
    *
    * @return Sum
    */
    public function addition($variable_1, $variable_2)
    {
        if (is_numeric($variable_1) && is_numeric($variable_2)) {
            return $variable_1 + $variable_2;
        } else {
            if (!is_numeric($variable_2)) {
                echo "'{$variable_2}' is NOT numeric", PHP_EOL;
            }
            if (!is_numeric($variable_1)) {
                echo "'{$variable_1}' is NOT numeric", PHP_EOL;
            }
            return null;
        }
    }

    /**
    * This function multiplies two numbers variable_1 and variable_2
    * and store its result in mutiply_result.
    * This function checks whether operands are numeric or not
    *
    * @param $variable_1
    * @param $variable_2
    *
    * @return $subtract_result
    */
    public function subtraction($variable_1, $variable_2)
    {
        if (is_numeric($variable_1) && is_numeric($variable_2)) {
            $subtract_result = $variable_1 - $variable_2;
            return $subtract_result;
        } else {
            if (!is_numeric($variable_1)) {
                echo "'{$variable_1}' is Not numeric", PHP_EOL;
            }
            if (!is_numeric($variable_2)) {
                echo "'{$variable_2}' is Not numeric", PHP_EOL;
            }
            return null;
        }
    }

    /**
    * This function multiplies two numbers variable_1 and variable_2
    * and store its result in mutiply_result
    * This function checks whether operands are numeric or not
    *
    * @param $variable_1
    * @param $variable_2

    * @return $mutiply_result
    */
    public function multiplication($variable_1, $variable_2)
    {
        if (is_numeric($variable_1) && is_numeric($variable_2)) {
            $mutiply_result = $variable_1 * $variable_2;
            return $mutiply_result;
        } else {
            if (!is_numeric($variable_2)) {
                echo "'{$variable_2}' is NOT numeric", PHP_EOL;
            }
            if (!is_numeric($variable_1)) {
                echo "'{$variable_1}' is NOT numeric", PHP_EOL;
            }
            return null;
        }
    }

    /**
    * This function divides two numbers variable_1 and variable_2
    * and store its result in division_result
    * This function checks whether operands are numeric or not
    *
    * @param $variable_1
    * @param $variable_2
    *
    * @return $division_result
    */
    public function division($variable_1, $variable_2)
    {
        if ($variable_2 == 0) {
            echo "Denominator must be non zero<br>";
            return null;
        } else {
            if (is_numeric($variable_1) && is_numeric($variable_2)) {
                $division_result = $variable_1 / $variable_2;
                return $division_result;
            } else {
                if (!is_numeric($variable_2)) {
                    echo "'{$variable_2}' is NOT numeric", PHP_EOL;
                }
                if (!is_numeric($variable_1)) {
                    echo "'{$variable_1}' is NOT numeric", PHP_EOL;
                }
                return null;
            }
        }
    }
}

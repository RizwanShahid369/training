<?php

namespace Vendor\Package;

/*                                                                        *
 * This script is written by Muneeba Mughal                               *
 *                                                                        *
 * Practice code to implement phpUnit and phpDoc                          *
 * Simple Arithmatic class to implement basic arithmatic functions        *
 *                                                                        */

class Arithmatic
{
    /**
     * Returns the sum of the two parameters if they are numeric.
     *
     * @return int Sum of two arguments
     */
    public function addition($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            return $var1 + $var2;
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }

    /**
     * Returns the difference of the two parameters if they are numeric.
     *
     * @return int Diff of two arguments
     */
    public function subtraction($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            return $var1 - $var2;
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }

    /**
     * Returns the product of the two parameters if they are numeric.
     *
     * @return int Product of two arguments
     */
    public function multplication($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            return $var1 * $var2;
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }

    /**
     * Returns the Quotient of the two parameters if they are numeric
     * and if the denominator is not zero
     * @return int Div of two arguments
     */
    public function division($var1, $var2)
    {
        if (is_numeric($var1) && is_numeric($var2)) {
            if ($var2 != 0) {
                return $var1 + $var2;
            } else {
                echo "denominator should not be zero.";
            }
        } elseif (!is_numeric($var1)) {
            echo "$var1 is not a numerical value";
        } else {
            echo "$var2 is not a numerical value";
        }
    }
}

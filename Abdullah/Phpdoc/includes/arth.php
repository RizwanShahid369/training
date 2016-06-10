<?php
namespace arithmetic;
/**

* Main class whivh contains the following functions 
* function for addition
*function subtraction
* function for multiplication
*function for division
*/
class Arithmetic
{

   /**
    * This function is used to add two numbers
    * THis function takes two parameters and then add them and return the result
    *
    * @param int $first_number first_number is variable which takes integer valeue
    * @param int $second_number  second_number is a variable which takes integer value
    * @param int $Result  Result is a variable whi h contains the sum of first_number and second_number
    *	
    * @result int
    *
    */
    public function add($first_number, $second_number)
    {
        if(!is_int($second_number)|| !is_int($first_number)) {

         echo 'Error Not a number';
         return false;
    }

        $Result=$first_number+$second_number;
        return $Result;

    }
    /**
    * This function is used to subtract two numbers
    * THis function takes two parameters and then subtract them and return the result
    *
    * @param int $first_number first_number is variable which takes integer valeue
    * @param int $second_number second_number is a variable which takes integer value
    * @param int $Result  Result is a variable whi h contains the subtraction of first_number and second_number
    *
    * @result int
    */
    public function sub($first_number, $second_number)
    {
        if(!is_int($second_number)|| !is_int($first_number)) {

         echo 'Error Not a number';
         return false;
    }
        $Result=$first_number-$second_number;
        return $Result;
    }
    /**
    * This function is used to subtract two numbers
    * THis function takes two parameters and then subtract them and return the result
    *
    * @param int $first_number *description* first_number is variable which takes integer valeue
    * @param int $second_number *description* second_number is a variable which takes integer value
    * @param int $Result *description* is a variable whi h contains the multiplication of first_number and second_number
    *
    * @result int
    */
    public function mul($first_number, $second_number)
    {
        if( !is_int($second_number)|| !is_int($first_number)) {
        
         echo 'Error Not a number';
         return false;
    }
        $Result=$first_number*$second_number;
        return $Result;

    }
    /**
    * This function is used to Divide two numbers
    * THis function takes two parameters and then divide them and return the result
    *
    * @param int $first_number  first_number is variable which takes integer valeue
    * @param int $second_number  second_number is a variable which takes integer value
    * @param int $Result  Result is a variable which contains the division of first_number and second_number
    *
    * @result int
    *
    */
    public function div($first_number, $second_number)
    {
        if($second_number===0 || !is_int($second_number)|| !is_int($first_number)) {

         echo 'Error Not a number';
         return false;
    }

        $Result=$first_number/$second_number;
        return $Result;
    }
}

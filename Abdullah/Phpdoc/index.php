<?php
/**
Main file 
*/
include './includes/arth.php';
  
$testObject = new arithmetic\Arithmetic();
/**

*print sum

*/
echo "Sum is    ", $testObject->add(3, 'q'); 
echo '<br>';
/**

*print multiplication

*/
echo "Multiplication is    ", $testObject->mul(3, 'f');
echo '<br>';
/**

*print subtraction

*/
echo "Subtraction is    ", $testObject->sub(3, 3);
echo '<br>';
/**

*print division

*/
echo "division is    ", $testObject->div(3, 'a');

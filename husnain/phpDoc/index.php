<?php
require_once 'includes/arithmatic.php';

$number1 = 10;    //input variable
$number2 = 2;     //input variable

$arithmetic = new DemoProject\Arithmatic();

echo 'Addition: '.$arithmetic->sum($number1, $number2);                 //Prints Addition of two Numbers

echo '<br>Division: '.$arithmetic->divide($number1, $number2);          //Prints Division of two Numbers

echo '<br>Mutiplication: '.$arithmetic->multiply($number1, $number2);   //Prints Multiplication of two Numbers

echo '<br>Subtraction: '.$arithmetic->subtract($number1, $number2);     //Prints Subtraction of two Numbers

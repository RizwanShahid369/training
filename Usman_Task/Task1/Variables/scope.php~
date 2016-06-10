
<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/10/16
 * Time: 3:24 AM
 */

$a = 1; /* global scope */

function test()
{
    $a=0;
    echo $a,"\n"; /* reference to local scope variable */
}

test();

//Using Global Keyword
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
}

Sum();
echo $b,"\n";

//Globals Array

$a = 1;
$b = 2;

function SumG()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum();
echo $b,"\n";

//Static Variables
function testS()
{
    $a = 0;
    echo $a,"\n";
    $a++;
}

function testSt()
{
    static $a = 0;
    echo $a,"\n";
    $a++;
}

testS();
testSt();
testSt();
testSt();
?>

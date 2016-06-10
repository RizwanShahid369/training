<?php

$a = 1;  

function test()
{ 
    //outputs nothing
    echo $a; 
}

test(); 

$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
//outputs 3
echo $b . "<br>";

function test1()
{
    static $a = 0;
    echo $a;
    $a++;
}
test1();

//static example
function &get_instance_ref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign a reference to the static variable
        $obj = &new stdclass;
    }
    $obj->property++;
    return $obj;
}

function &get_instance_noref() {
    static $obj;

    echo 'Static object: ';
    var_dump($obj);
    if (!isset($obj)) {
        // Assign the object to the static variable
        $obj = new stdclass;
    }
    $obj->property++;
    return $obj;
}

$obj1 = get_instance_ref();
$still_obj1 = get_instance_ref();
echo "<br>";
$obj2 = get_instance_noref();
$still_obj2 = get_instance_noref();


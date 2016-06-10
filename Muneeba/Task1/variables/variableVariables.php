<?php

$a = 'hello';
$$a = 'world';

//without braces output hello $hello
echo "$a $$a <br>";

//with braces output hello world
echo "$a ${$a} <br>";

//with braces output hello world
echo "$a {$$a} <br>";

//same output hello world
echo "$a $hello <br>";


class Foo
{
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r = 'I am r.';
}
$foo = new Foo();
$baz = array('foo', 'bar');
$bar = 'bar';

//outputs I am bar.
echo $foo->$bar . "<br>";

//outputs I am bar.
echo $foo->{$baz[1]} . "<br>";

//outputs I am r.
$arr = 'arr';
echo $foo->{$arr[1]} . "<br>";

//outputs I am bar.
$start = 'ba';
$end = 'r';
echo $foo->{$start . $end} . "<br>";


$bar = "a";
$foo = "bar";
$world = "foo";
$hello = "world";
$a = "hello";

//Outputs Hello
echo $a . "<br>"; 
//Outputs World
echo $$a . "<br>";
//Outputs Foo
echo $$$a . "<br>"; 
//Outputs Bar
echo $$$$a . "<br>"; 
//Outputs a
echo $$$$$a . "<br>"; 
//Outputs Hello
echo $$$$$$a . "<br>"; 
//Outputs World
echo $$$$$$$a . "<br>"; 


//reference & variables
$foo = 'bob';
$bar = &$foo;
$foo = 'I am';
//$foo = &1; error
echo $bar . "<br>";

echo var_dump($x) . "<br>";
echo var_dump($foo) . "<br>";

$x = 'abc';
echo var_dump($x) . "<br>";

$x += 3;
echo var_dump($x) . "<br>";

$arr1[2] = 'too';
$arr1[1] = 'what';
echo var_dump($arr1) . "<br>";

$intarr = array(1, 2, 34, 8);
echo var_dump($intarr) . "<br>";

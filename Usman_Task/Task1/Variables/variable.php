<?php

/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/10/16
 * Time: 1:46 AM
 */
class foo
{
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r = 'I am r.';
}

$foo = new foo();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo->$bar . "\n";
echo $foo->{$baz[1]} . "\n";

$start = 'b';
$end = 'ar';
echo $foo->{$start . $end} . "\n";

$arr = 'arr';
echo $foo->{$arr[1]} . "\n";

//Simple Variables
$a = 'hello';
echo $a, "\n";

$$a = 'world';

echo $$a, "\n";

echo ${$a}, "\n";

echo $hello, "\n";

$$a = array('world', 'dot', 'com');
echo ${$a}[1], "\n";

//Adding more Dollars

$Bar = "a";
$Foo = "Bar";
$World = "Foo";
$Hello = "World";
$a = "Hello";

echo $a; //Returns Hello
echo $$a; //Returns World
echo $$$a; //Returns Foo
echo $$$$a; //Returns Bar
echo $$$$$a; //Returns a

echo $$$$$$a; //Returns Hello
echo $$$$$$$a, "\n"; //Returns World

$nameTypes    = array("first", "last", "company");
$name_first   = "John";
$name_last    = "Doe";
$name_company = "PHP.net";

// Then this loop is ...
foreach($nameTypes as $type)
    print ${"name_$type"} . "\n";

// ... equivalent to this print statement.
print "$name_first \n $name_last \n $name_company \n";


?>

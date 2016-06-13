<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/10/16
 * Time: 5:02 AM
 */

function test_global_noref() {
    global $obj;
    $obj = new stdclass;
}


function test_global_ref() {
    global $obj;
    $obj = &new stdclass;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);


//-------------------------------global $obj
$obj = 6;
function test_global() {
    global $obj;

    echo "In ", $obj,"\n";
    $obj = 55;
}
test_global();
echo "Out ",$obj,"\n";

//
class Foo {
    public function hello() {
        echo 'Hello _O_ world!', "\n";
    }
}
$my_foo = 'Foo';
$a = new $my_foo();
$a->hello();

//

class FooG {
    public static function hello() {
        echo 'Hello world!', "\n";
    }
}
$my_foo = 'FooG';
$a = new $my_foo();
$a->hello(); //prints 'Hello world!'

//Variable Name

$a = 'variable-name';
$$a = 'hello';
//echo $variable-name . ' ' . $$a;   //Works in browser

function foo(){
    global $f_a;   // <- Notice to this
    $f_a = 'a';

    function bar(){
        global $f_a;
        echo '"f_a" in BAR is: ' . $f_a . '<br />';  // work!, var is 'a'
    }

    bar();
    echo '"f_a" in FOO is: ' . $f_a , "\n";
}
foo();

//Classes

class A {
    function Z() {
        static $count = 0;
        printf("%s: %d\n", get_class($this), ++$count);
    }
}

class B extends A {}

$a = new A();
$b = new B();
$a->Z();
$a->Z();
$b->Z();
$a->Z();
$b->Z();

//         Next
$tab = array("one", "two", "three") ;
$a = "tab" ;
${$a}[] =  "four" ; // <==== this is the correct way to do it
print_r($tab) ;

$array =array("one" => "First Value",
    "two" => "2nd Value",
    "three" => "8"
);
foreach ($array as $key => $value)
{
    $$key= $value;
    echo $$key, " ";
}

//To practice Variable variable

class myclass {
    var $a = "variable a";
    var $b = "another variable: b";
}

$c = new myclass;
$d = "b";
echo "\n Some Class ", $c->{$d};

${date("M")} = "Worked";
echo ${date("M")};

if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}

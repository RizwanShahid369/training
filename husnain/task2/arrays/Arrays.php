
<?php
echo '<h4>Type Casting and Overwriting example</h4>';

$array = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);
var_dump($array);

echo '<h4>Mixed integer and string keys</h4>';

$array = array(
    "foo" => "bar",
    "bar" => "foo",
    100   => -100,
    -100  => 100,
);
var_dump($array);

echo '<h4>Keys not on all elements</h4>';

$array = array(
    "a",
    "b",
    6 => "c",
    "d",
);
var_dump($array);
echo '<h4>Accessing array elements</h4>';

$array = array(
    "name" => "husnain",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "It Comes After three keys"
        )
    )
);

var_dump($array["name"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);

echo '<h4>Array dereferencing</h4>';

function getArray() {
    return array("one", "two", 3);
}

// on PHP 5.4
$secondElement = getArray()[1];

// previously
$tmp = getArray();
$secondElement = $tmp[1];
echo $secondElement;

// or
list(, $secondElement) = getArray();

echo '<h4>Craeting modifying and and unset array values</h4>';


$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;
// at this point of the script

$arr["name"] = "husnain"; // This adds a new element to
// the array with key "x"

unset($arr[5]); // This removes the element from the array

unset($arr);    // This deletes the whole array

echo '<h4>Converting object into an array</h4>';


class A {
    private $A; // This will become '\0A\0A'
}

class B extends A {
    private $A; // This will become '\0B\0A'
    public $AA; // This will become 'AA'
}

var_dump((array) new B());

echo '<h4>Changing element in the loop</h4>';
$names = array('husnain', 'zaheer', 'ahmad', 'bilal');
foreach ($names as &$name) {
    $color = strtoupper($name);
}
unset($name); /* ensure that following writes to
$color will not modify the last array element */

// Workaround for older versions
foreach ($names as $key => $name) {
    $colors[$key] = strtoupper($name);
}
echo "<pre>";
print_r($names);
echo "</pre>";

echo '<h4>Array assignment with and witout reference Operator</h4>';

$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 is changed,
// $arr1 is still array(2, 3)
echo '<h4>Without reference operator</h4>';

echo "<pre>";
print_r($arr1);
echo "</pre>";
echo "<pre>";
print_r($arr2);
echo "</pre>";
echo '<h4>With reference operator</h4>';

$arr3 = &$arr1;
$arr3[] = 4; // now $arr1 and $arr3 are the same


echo "<pre>";
print_r($arr1);
echo "</pre>";
echo "<pre>";
print_r($arr3);
echo "</pre>";

?>




<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/13/16
 * Time: 2:33 AM
 */
$array = array(1, 6, 1, 1, 7, 8 => 1,  4 => 5, 19, 3 => 13);
$array = array(8 => 1, 19, 4 => 5, 3 => 13);
print_r($array);

//Start index by your own choice
$firstquarter = array(2 => 'January', 'February', 'March');
print_r($firstquarter);

//2D Array
$fruits = array (
    "fruits"  => array("a" => "orange", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);

//echo $fruits;

//Associative Array
$foo = array('bar' => 'baz', 'my' => 'I');
echo "Hello {$foo['my']}!";

$AsstArray = array('one' => '1st', 'two' => '2nd');
echo $AsstArray['one'];

$ar = ['one' => 1, 'two' => 2, 'three' => 3, 'four' => 4];
//echo $ar; //not works
print_r($ar);

//Getting latest indexed value with rest of all overwritten

$array1 = array(
    0.5 => "e",
    1    => "a",//OW
    "1"  => "b",//OW
    1.5  => "c",//OW
    true => "d",
);
var_dump($array1);

//No difference

$array2 = array(
    "fo0o" => "bar",
    "bar" => "foo",
    100   => -1000,
    -100  => 100,
);
var_dump($array2);

//Array Without keys but mixed up
$arr = array(1,2,3, 8 => 8, 9);
var_dump($arr);

//Accessing array elements
$arrays = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => "foOo",
        )
    )
);

var_dump($arrays["foo"]);
var_dump($arrays[42]);
var_dump($arrays["multi"]["dimensional"]["array"]);

echo "\n======================\n";
$arrays = array(
    "foo" => "bar",
    42 => 24,
    "multi" => array(
        "dimensional" => array(
        "array1" => "foOo",
        "array2" => "foO"
        )
    )
);
var_dump($arrays["multi"]["dimensional"]);

//

function getArray() {
    return array(1, 2, 3);
}

// on PHP 5.4
$secondElement = getArray()[1];
echo "o ", $secondElement, "\n";

$tmp = getArray();
//echo "o.5 " ,$tmp, "\n";
$secondElement = $tmp[1];
echo "t ", $secondElement;
// or
list(, $secondElement) = getArray();

//

$arr = array(5 => 1, 12 => 2);

$arr[] = 56;    // This is the same as $arr[13] = 56;

//var_dump($arr);

$arr["x"] = 42; // This adds a new element to the array with key "x"
//var_dump($arr);
unset($arr[5]); // This removes the element from the array
//var_dump($arr);
unset($arr);
var_dump($arr);

//
$arr = array(1,2,3);
foreach ($arr as $i) {
    echo $i, " ";
}
unset($arr[2]);
$arr[] = 6;
print_r($arr);

// Re-index with array_values
$arr = array_values($arr);
$arr[] = 7;
print_r($arr);

$arr = array('fruit' => 'apple', 'veggie' => 'carrot');

// Correct
print $arr['fruit'];  // apple
print $arr['veggie']; // carrot

print $arr['fruit'];  // apple

//print $arr[fruit];
//echo "\n", $arr[fruit], "\n";

//Array Functions

//array_change_key_case
$input_array = array("FirSt" => 1, "SeCOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
print_r(array_change_key_case($input_array, CASE_LOWER));

//array_chunk
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($iput_array, 2));
$iput_array = array('a' => 'a', 'b' => 'b', 'c' => 'c', 'd' => 'd', 'e' => 'e');
print_r(array_chunk($iput_array, 2, true));


//array_column
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);

//$first_names = array_column($records, 'first_name');
$first_names = array_column($records, 'last_name');
print_r($first_names);


//Combine
$a = array('green', 'red', 'yellow'); // 'Black' must have corresponding values
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);

//
$arr = array(1, "hello", 1, "=", "hello");
print_r(array_count_values($arr));


// check index wise difference
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
//$array2 = array("a" => "green", "yellow", "red");
$array2 = array("a" => "green", "red", "yellow");
$result = array_diff_assoc($array1, $array2);
print_r($result);


// does not check index wise difference
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
var_dump(array_diff_key($array1, $array2));

//
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);


//
$keys = array(0,'foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);


//
$a = array_fill(5, 5, 'abes');
$b = array_fill(-2, 4, 'pear');
print_r($a);
print_r($b);


//
$inp = array("oranges", "apples", "pears");
$flipped = array_flip($inp);

print_r($flipped);


//
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
print_r($result_array);


//
$array_1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'cya' => 4);
$array_2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_intersect_key($array_1, $array_2));


//
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");
print_r(array_intersect_uassoc($array1, $array2, "strcasecmp"));

//
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);

//

$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}

//
$array_ = array(0 => 100, "color" => "red");
//$array_ = array(100, "red");
print_r(array_keys($array_));

//
function map($n1, $n2)
{
    return ($n1 * $n2);
}

$a = array(1, 2, 3, 4, 5);
$b = array(6, 7, 8, 9, 10);
$c = array_map("map", $a, $b);
print_r($c);


//
//f, however, the arrays have the same numeric key, the later value will not overwrite the original value, but will be appended.
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));

$ar1 = array(1, 2, 5);
$ar2 = array(10, 11, 12);

$result = array_merge_recursive($ar1, $ar2);
print_r($result);

//
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

$array1 = array(2, 2, 4);
$array2 = array(1,2, 4);
$result = array_merge($array1, $array2);
print_r($result);

//

$ar1 = array(10, 100, 10, 0);
$ar2 = array(1, 3, 2, 4);
array_multisort($ar1, $ar2);
var_dump($ar1);
var_dump($ar2);

//
$input = array(12, 10, 9);
//$result = array_pad($input, 3, 0);
// result is array(12, 10, 9, 0, 0)
$result = array_pad($input, 5, 0);
print_r($result);

$result = array_pad($input, -7, -1);
// result is array(-1, -1, -1, -1, 12, 10, 9)
print_r($result);
$result = array_pad($input, 2, "noop");
print_r($result);

//
$a = array(1,2,3,4);
echo "product(a) = " . array_product($a) . "\n";

//
$stack_ = array("orange", "banana");
array_push($stack_, "apple");//, "raspberry");
print_r($stack_);

//
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

//

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
function product($carry, $item)
{
    $carry *= $item;
    return $carry;
}
$a = array(1, 2, 3, 4, 5);
$x = array();

var_dump(array_reduce($a, "sum"));
var_dump(array_reduce($a, "product", 10));
var_dump(array_reduce($x, "sum", "No data to reduce"));

//

$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);

$basket = array_replace($base, $replacements);
print_r($basket);

//

$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
$preserved = array_reverse($input, true);

print_r($input);
print_r($reversed);
print_r($preserved);

//
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
echo $key;
$key = array_search('blaa', $array);
echo $key;

$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);
print_r($fruit);

//
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2); //  starts from that index - returns "c", "d", and "e"
print_r($output);
$output = array_slice($input, -4, 1);  // returns "d" traverse in reverse
print_r($output);
$output = array_slice($input, 0, 3);   // returns "a", "b", and "c"
print_r($output);

//=====>Directly
//

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
print_r(array_unique($input));

//

$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);

//

$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

//

$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}

array_walk_recursive($fruits, 'test_print');

//
//Sort on the basis of values nor key
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits); //Desscending order
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}echo "\n======================\n";

//

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);//Asscending order
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result);

//

$transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport);    // $mode = 'bike';

//

$foo = array("Robert" => "Bob", "Seppo" => "Sepi");
$bar = each($foo);
print_r($bar);

//

$array = array(
    'fruit1' => 'apple',
    'fruit2' => 'orange',
    'fruit3' => 'grape',
    'fruit4' => 'apple',
    'fruit5' => 'apple');

while ($fruit_name = current($array)) {
    if ($fruit_name == 'apple') {
        echo key($array).'<br />';
    }
    next($array);
}

//

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "\n $drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "\n$drink has $power.\n";

//
$array1 = $array2 = array("img12.png", "img10.png", "img2.png", "img1.png");

asort($array1);
echo "Standard sorting\n";
print_r($array1);

//

$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

?>


<?php
$fruits = array (
    "names"  => array("a" => "husnain", "b" => "zaheer", "c" => "bilal"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);
echo '<pre>';
print_r($fruits);
echo '</pre>';
print_r($array);

echo '<h4>Automatic index with array</h4>';
$my_array = array("a", "b", "c", "d",  "e", 8 => 1,  4 => 1, 19, 3 => 13);
echo '<pre>';
print_r($my_array);
echo '</pre>';

echo '<h4>To genrate 1-based index</h4>';
$one_based = array(1 => 'one', 'two', 'three', 'four', 'five');
echo '<pre>';
print_r($one_based);
echo '</pre>';

echo '<h4>Accessing an array inside double quotes</h4>';
$arr = array('name' => 'husnain');
echo "Hello {$arr['name']} !<br>"; // Hello husnain

echo '<h4>arsort() example</h4>';
$myfruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($myfruits);
foreach ($myfruits as $key => $val) {
    echo "$key = $val<br>";
}

echo '<h4>asort() example</h4>';
$myfruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($myfruits);
foreach ($myfruits as $key => $val) {
    echo "$key = $val<br>";
}

echo '<h4> compact() example</h4>';

$city  = "my event";
$state = "my state";
$event = "IT Event";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
echo '<pre>';
print_r($result);
echo '</pre>';

echo '<h4> each() example</h4>';

$foo = array("husnain", "zaheer", "ahmad", "farrukh", "bilal", "ali");
$t = each($foo);
print_r($t);

echo '<h4> end() example</h4>';

$fruits = array('apple', 'banana', 'cranberry');
echo end($fruits); // cranberry

echo '<h4> in_array() example</h4>';

if(in_array('zaheer', $foo)){
    echo 'found it<br>';
}

$a = array('1.10', 12.4, 1.13);

if (in_array('12.4', $a, true)) {
    echo "'12.4' found with strict check\n";
}

if (in_array(1.13, $a, true)) {
    echo "1.13 found with strict check\n";
}

echo '<h4> array_key_exists() example</h4>';
if (array_key_exists('b', $myfruits)) {
    echo "key exists";
}
echo '<h4> key() example</h4>';

$array = array(
    'name1' => 'apple',
    'name2' => 'husnain',
    'name3' => 'zaheer',
    'name4' => 'mohsin',
    'name5' => 'husnain');

while ($name = current($array)) {
    if ($name == 'husnain') {
        echo key($array).'<br />';
    }
    next($array);
}

echo '<h4> krsort() example</h4>';

krsort($myfruits);
foreach ($myfruits as $key => $val) {
    echo "$key = $val<br>";
}
echo '<h4> array_change_key_case() example</h4>';

print_r(array_change_key_case($myfruits, CASE_UPPER));

echo '<h4> array_chunk() example</h4>';


$input_array = array('one', 'two', 'three', 'd', 'e');
echo '<pre>';
print_r(array_chunk($input_array, 2));
echo '</pre>';

echo '<pre>';
print_r(array_chunk($input_array, 2, true));
echo '</pre>';

echo '<h4>  Get the column of first names from a recordset</h4>';

$records = array(
    array(
        'id' => 2135,
        'first_name' => 'husnain',
        'last_name' => 'zaheer',
    ),
    array(
        'id' => 3245,
        'first_name' => 'hassan',
        'last_name' => 'raza',
    ),
    array(
        'id' => 5342,
        'first_name' => 'ahmad',
        'last_name' => 'bilal',
    ),
    array(
        'id' => 5623,
        'first_name' => 'usman',
        'last_name' => 'ahmad',
    )
);

$first_names = array_column($records, 'first_name');
echo '<pre>';
print_r($first_names);
echo '</pre>';


echo '<h4> using class property with array_column</h4>';

class User
{
    public $username;

    public function __construct($username)
    {
        $this->username = $username;
    }
}

$users = [
    new User('hassan'),
    new User('raza'),
    new User('ahmad'),
];
echo '<pre>';
print_r(array_column($users, 'username'));
echo '</pre>';

echo '<h4> array_combine() example</h4>';

$a = array('name', 'gender', 'address');
$b = array('husnain', 'Male', 'lahore');
$c = array_combine($a, $b);
echo '<pre>';
print_r($c);
echo '</pre>';

echo '<h4> array_count_values() example</h4>';

$array = array(3, "husnain", 3, "husnain", "hello");
echo '<pre>';
print_r(array_count_values($array));
echo '</pre>';

echo '<h4> array_diff_assoc() example</h4>';

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);

echo '<h4> array_diff_assoc() example</h4>';

$array1 = array(0, 1, 2);
$array2 = array("00", "01", "2");
$result = array_diff_assoc($array1, $array2);
print_r($result);

echo '<h4> array_diff_key() example</h4>';

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array1, $array2));

echo '<h4> array_diff_uassoc() example</h4>';

function key_compare_func($a, $b)
{
    if ($a === $b) {
        return 0;
    }
    return ($a > $b)? 1:-1;
}

$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_uassoc($array1, $array2, "key_compare_func");
print_r($result);

echo '<h4>  array_diff_ukey() example</h4>';

function key_compare_func2($key1, $key2)
{
    if ($key1 == $key2)
        return 0;
    else if ($key1 > $key2)
        return 1;
    else
        return -1;
}

$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_ukey($array1, $array2, 'key_compare_func2'));

echo '<h4>array_diff() example</h4>';

$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
print_r($result);


echo '<h4>   array_fill_keys() example</h4>';

$keys = array('husnain', 5, 10, 'zaheer');
$a = array_fill_keys($keys, 'hello');
var_dump($a);

echo '<h4>   array_fill_keys() example</h4>';
$a = array_fill(5, 6, 'ahmad');
$b = array_fill(-2, 4, 'aslam');
print_r($a);
echo "<br>";
print_r($b);

echo '<h4>array_flip() example</h4>';
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
echo "<pre>";
print_r($flipped);
echo "</pre>";

echo '<h4>array_intersect_assoc() example</h4>';
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "b" => "yellow", "blue", "red");
$result_array = array_intersect_assoc($array1, $array2);
echo "<pre>";
print_r($result_array);
echo "</pre>";


echo '<h4>Array_intersect_key() example/h4>';
$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
echo "<pre>";
print_r(array_intersect_key($array1, $array2));
echo "</pre>";

echo '<h4>array_key_exists() example</h4>';

$search_array = array('hello' => 1, 'world' => 4);
if (array_key_exists('hello', $search_array)) {
    echo "The 'hello' element is in the array";
}
echo '<h4> array_keys() example</h4>';

$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);
print_r(array_keys($array));

echo '<h4>array_map() example</h4>';

function cube($n)
{
    return($n * $n * $n);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("cube", $a);
echo "<pre>";
print_r($b);
echo "</pre>";

echo '<h4>array_merge_recursive() example</h4>';
$ar1 = array("color" => array("favorite" => "red"), 5);
$ar2 = array(10, "color" => array("favorite" => "green", "blue"));
$result = array_merge_recursive($ar1, $ar2);
echo "<pre>";
print_r($result);
echo "</pre>";

echo '<h4> array_merge() example</h4>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";

echo '<h4> Sorting multi-dimensional array</h4>';
$ar = array(
    array("10", 11, 100, 100, "a"),
    array(   1,  2, "2",   3,   1)
);
array_multisort($ar[0], SORT_ASC, SORT_STRING,
    $ar[1], SORT_NUMERIC, SORT_DESC);
var_dump($ar);

echo '<h4> array_pad() example</h4>';

$input = array(12, 10, 9);

$result = array_pad($input, 5, 0);
echo "<pre>";
print_r($result);
echo "</pre>";

echo '<h4>  array_pop() example</h4>';
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);

echo '<h4> array_product() example</h4>';

$a = array(2, 4, 6, 8);
echo "product(a) = " . array_product($a);

echo '<h4>  array_push() example </h4>';
$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

echo '<h4> array_rand() example</h4>';

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

echo '<h4> array_replace() example</h4>';
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 4 => "cherry");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements, $replacements2);
print_r($basket);
echo '<h4> array_reverse() example</h4>';
$input  = array("php", 4.0, array("green", "red"));
$reversed = array_reverse($input);
echo "<pre>";
print_r($input);
print_r($reversed);
echo "</pre>";

echo '<h4>array_search() example</h4>';
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
echo $key;

echo '<h4>array_shift() example</h4>';
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_shift($stack);
print_r($stack);

echo '<h4>array_sum() examples</h4>';
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

echo '<h4>array_unique() example</h4>';
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
echo "<pre>";
print_r($result);
echo "</pre>";

echo '<h4>array_values() example</h4>';

$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));

echo '<h4>usort() example</h4>';

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$key: $value<br>";
}





?>

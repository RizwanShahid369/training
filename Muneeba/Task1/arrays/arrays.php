<?php

$arr = [
    1 => "some",
    "1" => "things",
    1.5 => "are",
    1.4 => "better",
    true => "left",
    "01" => "unsaid"
];

echo var_dump($arr)  . "<br>";

foreach ( $arr as $var)
{
    echo $var . "<br>";
}

$arr1 = array(
    "foo" => "bar",
    32 => 23,
    "multi" => array(
         3 => 4,
         "dimensional" => array(
             "array" => "baz"
         )
    )
);

echo var_dump($arr1) . "<br>";

unset($arr1["multi"]["3"]);

echo var_dump($arr1) . "<br>";

$arr[] = "every";

print_r($arr);
echo "<br>";
$array = array_values($arr);

print_r($array);
echo "<br>";
print_r(array_change_key_case($arr1, CASE_UPPER));
echo "<br>";
print_r($arr1);
echo "<br>";
$array = [ 1, 2, 3, 4,"foo" => 5, 6, 7, 8];

print_r(array_chunk($array, 5));
echo "<br>";
print_r(array_chunk($array, 5, true));
echo "<br>";

print_r(array_count_values($arr));
echo "<br>";
print_r(array_diff_assoc($array, $arr));
echo "<br>";
print_r(array_flip($array));
echo "<br>";

$array1 = array("a" => "green", "b" => "brown", "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

print_r(array_uintersect_uassoc($array1, $array2, "strcasecmp", "strcasecmp"));
echo "<br>";

$array1[] = 'red';
print_r(array_unique($array1));
echo "<br>";

array_unshift($array1, 'yellow', 'purple');
print_r($array1);
echo "<br>";

print_r(array_values($arr1));
echo "<br>";

function square($x)
{
    return($x * $x);
}

$a = array(1, 2, 3, 4, 5);
$b = array_map("square", $a);
print_r($b);
echo "<br>";

print_r(array_pop($a));
echo "<br>";
print_r($a);
echo "<br>";

print_r(array_rand($a,2));
echo "<br>";

$arr3 = ['a' => 1, 'c' => 3, 'b' => 4, 'd' => 5];
asort($arr3);
foreach ( $arr3 as $key => $var)
{
    echo $key . " " . $var . "<br>";
}

ksort($arr3);
foreach ( $arr3 as $key => $var)
{
    echo $key . " " . $var . "<br>";
}

print_r(array_reverse($arr3, true));

$varray = array("color" => "blue",
                   "fruit"  => "apple",
                   "shape" => "circle");
extract($varray, EXTR_PREFIX_ALL, "var");

echo "$var_color, $var_fruit, $var_shape \n";
echo "<br>";

$farray = ['apple', 'orange']; 
list($fruit1, $fruit2, $nutrition) = $farray;
echo "$fruit1 and $fruit2 are rich in $nutrition.\n";
echo "<br>";

$letters = ['c', 'b', 'a'];
foreach (range('c', 'a') as $letter) {
    echo $letter . "<br>";
}

function compare($a, $b)
{
    if ($a >= $b) {
        return 0;
    } else {
        return -1;
    }
}

usort($arr3, "compare");
foreach ($arr3 as $key => $value) {
    echo $key . " " . $value . "<br>";
}

$str = "Today is June 14th,2016.";
$arr = explode(" ",$str);
print_r($arr);
echo "<br>";

$arr = array('Today', 'is', 'June', '14th', '2016.');
$str = implode(" ",$arr);
echo "<br>";

echo $str;

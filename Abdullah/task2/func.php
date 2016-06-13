<?php
function key_compare_func($key1, $key2)
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

var_dump(array_diff_ukey($array1, $array2, 'key_compare_func'));

echo "<br>";

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo "<br>";

$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");

krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
echo "<br>";
krsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}echo "<br>";
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
echo "<br>";
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}


echo "<br>";
$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

<?php
// Create a simple array.
$array = array(1, 2, 3, 4, 5);
print_r($array);

// Now delete every item, but leave the array itself intact:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
echo "<br>";

print_r($array);
echo "<br>";

// Append an item (note that the new key is 5, instead of 0).
$array[] = 6;
print_r($array);

echo "<br>";
$array = array_values($array);
$array[] = 7;
echo "<br>";
echo "COUNT",count($array);
echo "<br>";

print_r($array);


echo "<br>";
$input_array = array("FirSt" => 1, "SecOnd" => 4);
print_r(array_change_key_case($input_array, CASE_UPPER));
print_r( array_reverse($input_array));

echo "<br>";



$input_array = array('a', 'b', 'c', 'd', 'e');
echo "<br>";
echo "Locations ",current($input_array),next($input_array),prev($input_array),end($input_array);
print_r(array_chunk($input_array, 2));
echo "<br>";

print_r(array_chunk($input_array, 2, true));
echo "<br>";
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result);


echo "<br>";


echo "<br>";

echo "<br>";

echo "<br>";

$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";

}

foreach ($numbers as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}


?>

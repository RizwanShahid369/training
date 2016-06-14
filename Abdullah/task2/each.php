<?php
$a = array(2, 10, 6, 8);
echo "product(a) = " . array_product($a) . " \n ";
echo "product(array()) = " . array_product(array(2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2)  ) . "\n";
echo "product(array()) = " . array_sum(array(2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2,2)  ) . "\n";


echo "<br>";

$size = "large";
$var_array = array("color" => "blue",
    "size"  => "medium",
    "shape" => "sphere");
extract($var_array, EXTR_PREFIX_SAME, "abd");

echo "$color, $size, $shape, $abd_size\n";

echo "<br>";
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
echo "<br>";


$os = array("abd", "fgh", "iam", "IBA");
print_r( array_flip($os));
if (in_array("IBA", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}
echo "<br>";


$array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

var_dump(array_diff_key($array2, $array1));
echo "<br>";
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);



$result = array_pad($input, -7, -1);
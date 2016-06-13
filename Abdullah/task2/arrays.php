<?php
$array = array(
    "footbal" => "basketball",
    42    => 24,
    "multi" => array(
        "dimensional" => array(
            "array" => array(
             "abd"=> "yess")
        )
    )
);

var_dump($array["footbal"]);
var_dump($array[42]);
var_dump($array["multi"]["dimensional"]["array"]);
?>

<?php
$arr = array(5 => 1, 12 => 2);

$arr[] = 56;
$arr[] = 6;
echo "YUP",$arr[13];
echo '<br>';
echo "YUP",$arr[14];
echo '<br>';

$arr["x"] = 42;
foreach ($arr as $key) {
    echo $key;
}
echo '<br>';
unset($arr[5]);
foreach ($arr as $key) {
    echo $key;
}
echo '<br>';
unset($arr);
echo "Delete the array",$arr;

/*
$sweet = array('a' => 'apple', 'b' => 'banana');
$fruits = array('sweet' => $sweet, 'sour' => 'lemon');

function test_print($item, $key)
{
    echo "$key holds $item\n";
}*/

//array_walk_recursive($fruits, 'test_print');
?>
<?php
echo "<br>";
foreach (range(0, 100, 10) as $number) {
    echo $number;
}

$array = array('step one', 'step two', 'step three', 'step four');

echo current($array) . "<br />\n"; 


next($array);
next($array);
echo current($array) . "<br />\n";
reset($array);
echo current($array) . "<br />\n";

<?php

echo addcslashes('hello', 'A..z');
echo '<br>';
echo addcslashes("hello[]", 'z..A');
echo '<br>';
echo addcslashes("hell'o[]", '');
echo '<br>';

echo addslashes("h'ello");
echo '<br>';

$binary = "1101";
echo (bin2hex($binary));
echo '<br>';

$str = "Today is June 14th,2016,";
foreach (count_chars($str, 1) as $i => $val) {
   echo "There were $val " , chr($i) , "\" in the string. <br>";
} 

$arr = explode(" ",$str);
print_r($arr);
echo "<br>";

$arr = array('Today', 'is', 'June', '14th', '2016.');
$str = implode(" ",$arr);
echo "<br>";

if (!($fp = fopen('date.txt', 'w'))) {
    return;
} else {
    fprintf($fp, $str);
}

$str1 = "time=today&array[]=14th+June&array[]=2016";
parse_str($str1);
echo $time;
echo "<br>";
echo $array[0];
echo "<br>";
echo $array[1];
echo "<br>";

echo lcfirst($str);
echo "<br>";

printf($str1);
echo "<br>";

$str = "Today    is June 14th,2016.";
echo rtrim($str);
echo "<br>";

$date = strstr($str, 'e');
echo $date;
echo "<br>";



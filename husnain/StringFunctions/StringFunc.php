
<?php
echo '<h4><stristr() example</h4>';
$email = 'Husnain@gmail.com';
echo stristr($email, 'n')."<br>";
echo ''. stristr($email, 'n', true);

echo '<h4>strlen() example</h4>';
$str = 'husnain';
echo strlen($str);

echo '<h4>strpbrk() example</h4>';

$text = 'This is a Simple text.';
echo strpbrk($text, 'S');

echo '<h4>Reversing a string with strrev()</h4>';
echo strrev("Hello world!");

echo '<h4>strripos() example</h4>';

$name = 'ababcd';
$n   = 'aB';

$pos = strripos($name, $n);

if ($pos === false) {
    echo "Sorry, we did not find ($n) in ($name)";
} else {
    echo "Congratulations!\n";
    echo "We found the last ($n) in ($name) at position ($pos)";
}

echo '<h4>Implode example</h4>';

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated;

echo '<h4>explode example</h4>';
var_dump( explode( ',', $input2 ) );


?>

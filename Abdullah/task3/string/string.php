<?php
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);
$str = "Hello String ";
$str .= chr(27); /* add an escape character at the end of $str */

/* Often this is more useful */

$str = sprintf("elloH: %c", 12);

echo '<br>';
  $email = 'USER@yes.com';
  echo stristr($email, 'R'); // outputs ER@EXAMPLE.com
  echo stristr($email, 'r', true);
echo '<br>';
echo str_repeat("Hello", 10);

echo '<br>';
$input = "elloH";
echo str_pad($input, 10);
echo '<br>';
echo str_pad($input, 10, "Life", STR_PAD_LEFT);
echo '<br>';
echo str_pad($input, 10, "Dead  ", STR_PAD_BOTH);



echo '<br>';
$str = 'abdullah';
$shuffled = str_shuffle($str);

// This will echo something like: bfdaec
echo $shuffled;
?>

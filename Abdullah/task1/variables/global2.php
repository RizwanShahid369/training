
<?php
$a = 1;
$b = 2;
$c = 0;
function Sum()
{
   echo $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
echo $b;
?>


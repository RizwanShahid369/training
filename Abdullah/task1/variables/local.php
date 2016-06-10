<?php
$a=1;
$b=2;
define("abd","value of local variable");
function abd()
{
    $a=123;
    $b=345;
    echo "value of a &nbsp",$a,"<br>Value of b &nbsp",$b,"<br>";
}
echo "function variables  value <br>    ", abd();
echo "local variables a and b<br>",$a,"<br>",$b,"<br>";
echo abd;




<?php
function test()
{
    static $count = 0;

    $count++;
    echo $count;
    if ($count < 10) {
        test();
    }
    $count--;
    echo "sdsd",$count; 
}
echo test();
?>

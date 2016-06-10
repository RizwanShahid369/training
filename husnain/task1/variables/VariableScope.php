
<?php
$a = 1; /* global scope */

function test()
{
    echo $a; /* reference to local scope variable */
}

test();
?>

<h3>testing with global keyword</h3>


<?php
$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
}

Sum();
echo $b;
?>
<h3>with $GLOBALS Array</h3>

<?php
$a = 1;
$b = 2;

function Sum2()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum2();
echo $b;
?>
<h3> use of static variables</h3>

<?php
function test3()
{
    static $sstatic = 0;
    echo $sstatic;
    $sstatic++;
}
test3();
test3();
test3();
?>
<h3>References with global and static variables</h3>

<?php
function test_global_ref() {
    global $obj;
    $obj = &new stdclass;
}

function test_global_noref() {
    global $obj;
    $obj = new stdclass;
}

test_global_ref();
var_dump($obj);
test_global_noref();
var_dump($obj);
?>

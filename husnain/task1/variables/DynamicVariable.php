<h3>Dynamic variable</h3>

<?php
$a = 'hello';
$$a = 'world';
echo "$a ${$a}";
?>

<h3>variable property example</h3>

<?php
class foo2 {
    var $bar = 'I am bar.';
    var $arr = array('I am A.', 'I am B.', 'I am C.');
    var $r   = 'I am r.';
}

$foo2 = new foo2();
$bar = 'bar';
$baz = array('foo', 'bar', 'baz', 'quux');
echo $foo2->$bar . "<br>";
echo $foo2->{$baz[1]} . "<br>";

$start = 'b';
$end   = 'ar';
echo $foo2->{$start . $end} . "<br>";

$arr = 'arr';
echo $foo2->{$arr[1]} . "<br>";

?>

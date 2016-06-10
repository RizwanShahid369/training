<?php
define('ONE', 1);
function one() {
    return 1;
}
$one = 1;

${"foo$one"} = 'foo';
echo $foo1; // foo
${'foo' . ONE} = 'bar';
echo $foo1; // bar
${'foo' . one()} = 'baz';
echo $foo1; // baz
?> 

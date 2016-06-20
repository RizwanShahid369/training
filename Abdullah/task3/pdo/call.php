<?php
include 'dbcon.php';

$a=new dbcon();
$b=$a->select('Student','*','id','4');
$c=$a->prepare($b);
$d=$a->bind($c,'id','4');
$e=$a->execute($d);
echo $e;


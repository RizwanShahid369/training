<?php

class StudentView extends AbstractView
{
public function render($name)
{
$url='views/student/'.$name.'.php';
if (file_exists($url))
require 'views/student/'.$name.'.php';
}
public function preDisplay($arr)
{
if (isset($arr)) {
//session_start();
$_SESSION['html']=$arr;
}
}
public function display($name)
{
$this->render($name);
}
}

<?php
/**
* Created by PhpStorm.
* User: usman.khan
* Date: 6/15/16
* Time: 6:28 AM
*/
abstract class AbstractView
{
public function render($path){}
public function preDisplay($arr){}
public function display($name){}
}

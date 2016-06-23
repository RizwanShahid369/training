<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:59 AM
 */
//require_once '../app/models/Student.php';
class ModelFactory
{
    public static function getModel($name)
    {
        $class = ucwords($name);
        echo $class;
        if(class_exists($class))
        {
            require_once ("../app/models/". $class . '.php');
            return new $class();
        }
        else {
            throw new Exception("Invalid class name!");
        }
    }
}
<?php

/**
 * Created by PhpStorm.
 * User: husnain.zaheer
 * Date: 6/20/16
 * Time: 2:56 AM
 */
class ControllerFactory
{
    public static function getController($name)
    {
        $class = ucwords($name) . 'Controller';
        if (class_exists($class)) {
            require_once("../app/controllers/" . $class. '.php');
            return new $class();
        } else {
            throw new Exception("Invalid class name given.");
        }
    }

}
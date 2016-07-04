<?php

class modelFactory {
    
    public static function generateModel($createObj)
    {
        include ("../app/models/". $createObj . '.php');

        if(class_exists($createObj))
        {
            return new $createObj();
        }
        else {
            throw new Exception("Invalid class name!");
        }
    }
}
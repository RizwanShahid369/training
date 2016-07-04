<?php
/**
 * Created by PhpStorm.
 * User: usman.khan
 * Date: 6/20/16
 * Time: 7:53 AM
 */

include ('../core/app.php');
include ('../core/baseController.php');

function autoload_multiple_directory($class_name)
{
    // List all the class directories in the array.
    $base = "/var/www/html/m_v_c/";
    $array_directories = [
        $base.'core/',
        $base.'core/controllers/',
        $base.'core/models/'
//        '../core/models/database/',
//        '../core/views/',
//        '../app/',
//        '../app/controllers/',
//        '../app/models/',
//        '../app/views/',
//        '../public/',
//        '../vendors/',
    ];

    $parts = explode('\\', $class_name);
    //print_r($parts);
    $file_name = end($parts).'.php';

    foreach($array_directories as $path_directory){
        $recursive_directory = new RecursiveDirectoryIterator($path_directory);
        foreach (new RecursiveIteratorIterator($recursive_directory) as $filename => $file) {
            if(file_exists("/var/www/html/m_v_c/.{$file->getPath()}"."/".$file_name)) {
                include "/var/www/html/m_v_c/.{$file->getPath()}"."/".$file_name;
                echo "<br>";
            }

        }
    }
}

spl_autoload_register('autoload_multiple_directory');
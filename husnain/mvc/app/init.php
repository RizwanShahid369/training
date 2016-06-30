<?php
require_once '../app/config.php';
function autoload_multiple_directory($class_name){

    // List all the class directories in the array.
    $array_directories = array(
        base_url.'/core/controllers/',
        base_url.'/core/models/',
        base_url.'/app/models',
        base_url.'/core/views/'
    );

    $parts = explode('\\', $class_name);
    $file_name = strtolower(end($parts)).'.php';
    foreach($array_directories as $path_directory){
        
        $recursive_directory = new RecursiveDirectoryIterator($path_directory);
        foreach (new RecursiveIteratorIterator($recursive_directory) as $filename => $file) {
            $name = explode('/',$filename);
            $name = end($name);
            if (strpos($name, '.php') !== false) {
                if(file_exists($file->getpath().'/'.$name)) {
                   require_once "{$file->getPath()}/{$name}";
                }
            }
        }
    }
}


spl_autoload_register('autoload_multiple_directory');

require_once '../core/App.php';

<?php

$a = 1;  

function test()
{ 
    //outputs nothing
    echo $a; 
}

test(); 

$a = 1;
$b = 2;

function Sum()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
} 

Sum();
//outputs 3
echo $b . "<br>";

//testing global scope vs local
$foo = 'global';

function test1()
{
    $foo = "local";
    //outputs global
    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
    //outputs local
    echo '$foo in current scope: ' . $foo . "<br>";
}

test1();

//Server variables
echo "The path is this file is " . $_SERVER['PHP_SELF'] . "<br>";

echo "The gateway of the server is " . $_SERVER['GATEWAY_INTERFACE'] . "<br>";

echo "The address of the server is " . $_SERVER['SERVER_ADDR'] . "<br>";

echo "The name of the server is " . $_SERVER['SERVER_NAME'] . "<br>";

echo "The software of the server is " . $_SERVER['SERVER_SOFTWARE'] . "<br>";

echo "The protocol server is using is " . $_SERVER['SOFTWARE_PROTOCAL'] . "<br>";

echo "The request method used is " . $_SERVER['REQUEST_METHOD'] . "<br>";

echo "The request time is " . $_SERVER['REQUEST_TIME'] . "<br>";

echo "The request time(accurate upto millisecond) is " . $_SERVER['REQUEST_TIME_FLOAT'] . "<br>";

echo "The query string used is " . $_SERVER['QUERY_STRING'] . "<br>";

echo "The root of the document is " . $_SERVER['DOCUMENT_ROOT'] . "<br>";

echo "The http accept header is " . $_SERVER['HTTP_ACCEPT'] . "<br>";

echo "The http accept charset is " . $_SERVER['HTTP_ACCEPT_CHARSET'] . "<br>";

echo "The http accept encoding is " . $_SERVER['HTTP_ACCEPT_ENCODING'] . "<br>";

echo "The http accept language is " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";

echo "The http connection is " . $_SERVER['HTTP_CONNECTION'] . "<br>";

echo "The http host is " . $_SERVER['HTTP_HOST'] . "<br>";

echo "The http user agent is " . $_SERVER['HTTP_USER_AGENT'] . "<br>";

echo "HTTPS: " . $_SERVER['HTTPS'] . "<br>";

echo "The address of the host is " . $_SERVER['REMOTE_ADDR'] . "<br>";

echo "The port of the host is " . $_SERVER['REMOTE_PORT'] . "<br>";

echo "The user of the host is " . $_SERVER['REMOTE_USER'] . "<br>";

echo "The admin of the server is " . $_SERVER['SERVER_ADMIN'] . "<br>";

echo "The port of the server is " . $_SERVER['SERVER_PORT'] . "<br>";

echo "The signature of the server is " . $_SERVER['SERVER_SIGNATURE'] . "<br>";

echo "script name " . $_SERVER['SCRIPT_NAME'] . "<br>";

echo "request uri " . $_SERVER['REQUEST_URI'] . "<br>";


echo '///////////////////////////////////////////////////////////////////' . "<br>";

echo 'User: ' . $_ENV["USER"] . "<br>";
echo 'host: ' . $_ENV["HOSTNAME"] . "<br>";
echo 'computer: ' . $_ENV["COMPUTERNAME"] . "<br>";

echo 'previous error message: ' . $php_errormsg . "<br>";

echo 'post raw data: ' . $HTTP_RAW_POST_DATA . "<br>";

echo 'response header: ' . $http_response_header . "<br>";


<?php
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER[ 'REQUEST_METHOD']."<br>";
echo $_SERVER['REQUEST_TIME']."<br>";
echo $_SERVER['QUERY_STRING']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['REMOTE_HOST']."<br>";
echo $_SERVER['SCRIPT_NAME'];

echo "<br>";

$cookie_name = "My Cookie";
$cookie_value = "Husnain zaheer";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");



if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>





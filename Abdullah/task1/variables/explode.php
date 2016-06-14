
<?php

$ex  = "a1,a2,a3,a4,a5,a6";
$pl = explode(",", $ex);
echo $pl[0];
echo $pl[1];


$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user;
echo $pass;

?>

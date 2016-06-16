<?php

$myfile = fopen("c.txt", "w");
$lines = file("ab.txt");

foreach ($lines as $linenumber => $line) {
    echo "" . $line . "\n";
    fwrite($myfile, $line);
}
fclose($myfile);

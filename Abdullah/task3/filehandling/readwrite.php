<?php



$fil = fopen("a.csv","r");
print_r(fgetcsv($fil));
$f=fopen("ab.txt","w");
fclose($fil);

$fp = fopen('ab.txt', 'w');
fwrite($fp, 'Cats chase mice');
fclose($fp);



?> 
